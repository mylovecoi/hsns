<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dshettapsu;
use App\hosotinhtrangct;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class dshettapsuController extends Controller
{
    function index(){
        if (Session::has('admin')) {
            $model = dshettapsu::where('madv',session('admin')->maxa)->get();
            return view('manage.hetts.index')
                ->with('furl','/chuc_nang/het_tap_su/')
                ->with('furl_ajax','/ajax/het_tap_su/')
                ->with('model',$model)
                ->with('pageTitle','Danh sách xét hết tập sự');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs=$request->all();
        $mahts = session('admin')->maxa .'.'.getdate()[0];

        $model = new dshettapsu();
        $model->mahts=$mahts;
        $model->madv=session('admin')->maxa;
        $model->soqd=$inputs['soqd'];
        $model->ngayqd=$inputs['ngayqd'];
        $model->nguoiky=$inputs['nguoiky'];
        $model->coquanqd=$inputs['coquanqd'];
        $model->noidung=$inputs['noidung'];
        $model->ngayxet=$inputs['ngayxet'];
        $model->save();

        $ngayxet=(new Carbon($inputs['ngayxet']))->addYears(-1);
        $m_cb=DB::table('hosocanbo')
            ->join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
            ->select('hosocanbo.macanbo')
            ->where('hosocanbo.ngaybc','<=',$ngayxet)
            ->where('hosotinhtrangct.tenct','like','Tập sự%')
            ->get();
        foreach($m_cb as $cb){
            DB::table('hosotinhtrangct')->where('macanbo', $cb->macanbo)->update(['hientai' => 0]);
            $m_tt=new hosotinhtrangct();
            $m_tt->mahts=$mahts;
            $m_tt->macanbo=$cb->macanbo;
            $m_tt->phanloaict='Đang công tác';
            $m_tt->kieuct='Biên chế';
            $m_tt->tenct='Biên chế';
            $m_tt->hientai=1;
            $m_tt->save();
        }

        $result['message'] = '/chuc_nang/het_tap_su/maso='.$mahts;
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function update(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs=$request->all();
        $model = dshettapsu::find($inputs['id']);

        $model->soqd=$inputs['soqd'];
        $model->ngayqd=$inputs['ngayqd'];
        $model->nguoiky=$inputs['nguoiky'];
        $model->coquanqd=$inputs['coquanqd'];
        $model->noidung=$inputs['noidung'];
        $model->ngayxet=$inputs['ngayxet'];

        $model->save();

        $result['message'] = 'Cập nhật thành công.';
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function show($mahts){
        if (Session::has('admin')) {
            $model=DB::table('hosotinhtrangct')
                ->join('hosocanbo', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
                ->join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('hosotinhtrangct.*', 'dmchucvucq.sapxep','hosocanbo.tencanbo','hosocanbo.macvcq','hosocanbo.ngaysinh')
                ->where('hosotinhtrangct.mahts',$mahts)
                ->orderby('dmchucvucq.sapxep')
                ->get();

            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            foreach($model as $hs){
                $hs->tencv=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            return view('manage.hetts.hetts')
                ->with('furl','/chuc_nang/het_tap_su/')
                ->with('model',$model)
                ->with('pageTitle','Chi tiết danh sách xét hết tập sự');
        } else
            return view('errors.notlogin');
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = dshettapsu::find($id);
            $mahts=$model->mahts;
            $m_hs=hosotinhtrangct::select('macanbo')->where('mahts',$mahts)->get()->toarray();
            DB::table('hosotinhtrangct')->wherein('macanbo', $m_hs)->update(['hientai' => 1]);
            $model->delete();
            return redirect('/chucnang/hetts/');
        } else
            return view('errors.notlogin');
    }

    function getinfo(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }
        $inputs = $request->all();
        $model = dshettapsu::find($inputs['id']);
        die($model);
    }
}
