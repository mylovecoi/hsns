<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dshuutri;
use App\hosotinhtrangct;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class dshuutriController extends Controller
{
    function index(){
        if (Session::has('admin')) {
            $model = dshuutri::where('madv',session('admin')->maxa)->get();

            return view('manage.huutri.index')
                ->with('furl','/chuc_nang/huu_tri/')
                ->with('furl_ajax','/ajax/huu_tri/')
                ->with('model',$model)
                ->with('pageTitle','Danh sách hưu trí');
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
        $maht = session('admin')->maxa .'.'.getdate()[0];

        $model = new dshuutri();
        $model->maht=$maht;
        $model->madv=session('admin')->maxa;
        $model->soqd=$inputs['soqd'];
        $model->ngayqd=$inputs['ngayqd'];
        $model->nguoiky=$inputs['nguoiky'];
        $model->coquanqd=$inputs['coquanqd'];
        $model->noidung=$inputs['noidung'];
        $model->ngayxet=$inputs['ngayxet'];
        $model->save();

        $grn=getGeneralConfigs();
        $tuoinu=(new Carbon($inputs['ngayxet']))->addYears(-$grn['tuoinu']);
        $m_cbnu=DB::table('hosocanbo')
            ->join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
            ->select('hosocanbo.macanbo')
            ->where('hosocanbo.ngaysinh','<=',$tuoinu)->where('hosocanbo.gioitinh','Nữ')
            ->where('hosotinhtrangct.phanloaict','Đang công tác')
            ->get();
        foreach($m_cbnu as $cb){
            DB::table('hosotinhtrangct')->where('macanbo', $cb->macanbo)->update(['hientai' => 0]);
            $m_tt=new hosotinhtrangct();
            $m_tt->maht=$maht;
            $m_tt->macanbo=$cb->macanbo;
            $m_tt->phanloaict='Đã thôi công tác';
            $m_tt->kieuct='Nghỉ chế độ';
            $m_tt->tenct='Nghỉ hưu';
            $m_tt->hientai=1;
            $m_tt->save();
        }

        $tuoinam=(new Carbon($inputs['ngayxet']))->addYears(-$grn['tuoinam']);
        $m_cbnam=DB::table('hosocanbo')
            ->join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
            ->select('hosocanbo.macanbo')
            ->where('hosocanbo.ngaysinh','<=',$tuoinam)->where('hosocanbo.gioitinh','Nam')
            ->where('hosotinhtrangct.phanloaict','Đang công tác')
            ->get();
        foreach($m_cbnam as $cb){
            DB::table('hosotinhtrangct')->where('macanbo', $cb->macanbo)->update(['hientai' => 0]);
            $m_tt=new hosotinhtrangct();
            $m_tt->maht=$maht;
            $m_tt->macanbo=$cb->macanbo;
            $m_tt->phanloaict='Đã thôi công tác';
            $m_tt->kieuct='Nghỉ chế độ';
            $m_tt->tenct='Nghỉ hưu';
            $m_tt->hientai=1;
            $m_tt->save();
        }

        $result['message'] = '/chuc_nang/huu_tri/maso='.$maht;
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
        $model = dshuutri::find($inputs['id']);

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

    function show($maht){
        if (Session::has('admin')) {//hosotinhtrangct
            $model=DB::table('hosotinhtrangct')
                ->join('hosocanbo', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
                ->join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('hosotinhtrangct.*', 'dmchucvucq.sapxep','hosocanbo.tencanbo','hosocanbo.macvcq','hosocanbo.ngaysinh')
                ->where('hosotinhtrangct.maht',$maht)
                ->orderby('dmchucvucq.sapxep')
                ->get();

            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            foreach($model as $hs){
                $hs->tencv=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            return view('manage.huutri.huutri')
                ->with('furl','/chuc_nang/huu_tri/')
                ->with('model',$model)
                ->with('pageTitle','Chi tiết danh sách xét hưu trí');
        } else
            return view('errors.notlogin');
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = dshuutri::find($id);
            $maht=$model->maht;
            $m_hs=hosotinhtrangct::select('macanbo')->where('maht',$maht)->get()->toarray();
            DB::table('hosotinhtrangct')
                ->wherein('macanbo', $m_hs)->update(['hientai' => 1]);
            $model->delete();
            return redirect('/chuc_nang/huu_tri/danh_sach');
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
        $model = dshuutri::find($inputs['id']);
        die($model);
    }
}
