<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dsnangluong;
use App\hosocanbo;
use App\hosoluong;
use App\ngachbac;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class dsnangluongController extends Controller
{
    function index(){
        if (Session::has('admin')) {
            $model = dsnangluong::where('madv',session('admin')->maxa)->get();
            return view('manage.nangluong.index')
                ->with('furl','/chuc_nang/nang_luong/')
                ->with('furl_ajax','/ajax/nang_luong/')
                ->with('model',$model)
                ->with('pageTitle','Danh sách nâng lương');
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
        $manl=session('admin')->maxa .'.'.getdate()[0];

        $model = new dsnangluong();
        $model->manl=$manl;
        $model->soqd=$inputs['soqd'];
        $model->ngayqd=$inputs['ngayqd'];
        $model->nguoiky=$inputs['nguoiky'];
        $model->coquanqd=$inputs['coquanqd'];
        $model->noidung=$inputs['noidung'];
        $model->ngayxet=$inputs['ngayxet'];
        $model->kemtheo=$inputs['kemtheo'];
        $model->madv=session('admin')->maxa;
        $model->save();

        $m_ngachbac=ngachbac::select('msngbac','namnb','bac','heso','ptvk')
            ->wherein('msngbac',function($query){
                $query->select('msngbac')->from('hosocanbo')->distinct();
            })->get()->toarray();

        $m_cb=hosocanbo::where('ngayden','<',$inputs['ngayxet'])->get();

        foreach($m_cb as $cb){
            $m_luong=new hosoluong();

            $m_luong->manl=$manl;
            $m_luong->macanbo=$cb->macanbo;
            $m_luong->msngbac=$cb->msngbac;
            $m_luong->pthuong=100;
            $m_nb=dsnangluongController::getNB($m_ngachbac,$cb->msngbac,$cb->bac+1);
            if(isset($m_nb)){
                $date=new Carbon($cb->ngayden);
                $m_luong->ngaytu=$date->addDay('1');
                $m_luong->bac=$m_nb['bac'];
                $m_luong->heso=$m_nb['heso'];
                $m_luong->bac=$m_nb['bac'];
                $m_luong->vuotkhung=$m_nb['ptvk'];

                $date=new Carbon($cb->ngayden);
                $m_luong->ngayden=$date->addYear($m_nb['namnb']);
            }else{
                $m_luong->bac=$cb->bac;
                $m_luong->heso=$cb->heso;
                $m_luong->bac=$cb->bac;
                $m_luong->vuotkhung=$cb->vuotkhung;
                $m_luong->ngaytu=$cb->ngaytu;
                $m_luong->ngayden=$cb->ngayden;
            }
            $m_luong->save();
        }

        $result['message'] = '/chuc_nang/nang_luong/maso='.$manl;
        $result['status'] = 'success';
        die(json_encode($result));
        //return redirect('/chucnang/luong/bangluong/'.$mabl);
    }

    function getNB($dmNB,$msnb,$b){
        foreach($dmNB as $dm){
            if($dm['msngbac']==$msnb&&$dm['bac']==$b){
                return $dm;
            }
        }
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
        $model = dsnangluong::find($inputs['id']);
        $model->soqd=$inputs['soqd'];
        $model->ngayqd=$inputs['ngayqd'];
        $model->nguoiky=$inputs['nguoiky'];
        $model->coquanqd=$inputs['coquanqd'];
        $model->noidung=$inputs['noidung'];
        $model->ngayxet=$inputs['ngayxet'];
        $model->kemtheo=$inputs['kemtheo'];
        $model->save();

        $result['message'] = 'Cập nhật thành công.';
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function show($manl){
        if (Session::has('admin')) {
            $model=DB::table('hosoluong')
                ->join('hosocanbo', 'hosoluong.macanbo', '=', 'hosocanbo.macanbo')
                ->join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('hosoluong.*', 'dmchucvucq.sapxep','hosocanbo.tencanbo','hosocanbo.macanbo','hosocanbo.macvcq')
                ->where('hosoluong.manl',$manl)
                ->orderby('dmchucvucq.sapxep')
                ->get();

            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            foreach($model as $hs){
                $hs->tencv=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            return view('manage.nangluong.nangluong')
                ->with('furl','/chuc_nang/nang_luong/')
                ->with('furl_ajax', '/ajax/luong/')
                ->with('model',$model)
                ->with('pageTitle','Chi tiết danh sách nâng lương');
        } else
            return view('errors.notlogin');
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = dsnangluong::find($id);
            $model->delete();
            return redirect('/chuc_nang/nang_luong/danh_sach');
        } else
            return view('errors.notlogin');
    }

    function destroydt($id){
        if (Session::has('admin')) {
            $model = hosoluong::find($id);
            $manl= $model->manl;
            $model->delete();
            return redirect('/chuc_nang/nang_luong/maso='.$manl);
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
        $model = dsnangluong::find($inputs['id']);
        die($model);
    }
}
