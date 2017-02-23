<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmdonvi;
use App\dmphongban;
use App\hosocanbo;
use App\hosoluanchuyen;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosoluanchuyenController extends Controller
{
    //   <editor-fold desc="--Điều động, luân chuyển cán bộ--">
    function index_dd($macanbo){
        if (Session::has('admin')) {
            $model = hosoluanchuyen::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            $m_pbm=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvm=dmchucvucq::all('tencv', 'macvcq')->toArray();
            $m_dvm=dmdonvi::all('tendv', 'madv')->toArray();

            foreach($model as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$m_pbm);
                $hs->tencvcq=getInfoChucVuCQ($hs,$m_cvm);
                $hs->tendv=getInfoDonVI($hs,$m_dvm);
            }
            return view('manage.dieudong.index')
                ->with('furl','/nghiep_vu/quan_ly/dieu_dong/')
                ->with('furl_ajax','/ajax/dieu_dong/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('m_dvm',$m_dvm)
                ->with('m_pbm',$m_pbm)
                ->with('m_cvm',$m_cvm)
                ->with('model',$model)
                ->with('pageTitle','Danh sách hồ sơ điều động cán bộ');
        } else
            return view('errors.notlogin');
    }

    function get_detail(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs = $request->all();
        $model = hosoluanchuyen::find($inputs['id']);
        $model->status = 'success';
        die(json_encode($model));
    }

    function store_dd(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs = $request->all();
        $model = new hosoluanchuyen();

        $model->madv = $inputs['donvi'];
        $model->macanbo = $inputs['macanbo'];
        $model->ngaylc = getDateTime($inputs['ngaylc']);
        $model->mapb = $inputs['phongban'];
        $model->macvcq = $inputs['chucvu'];
        $model->soqd = $inputs['soqd'];
        $model->ngayqd = getDateTime($inputs['ngayqd']);
        $model->nguoiky = $inputs['nguoiky'];

        if($model->save()){
            $m_cb = hosocanbo::where('macanbo',$inputs['macanbo'])->first();
            $m_cb->mapb=$inputs['phongban'];
            $m_cb->macvcq = $inputs['chucvu'];
            $m_cb->madv = $inputs['donvi'];
            $m_cb->save();
        }

        $result['message'] = "Thêm mới thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function update_dd(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs = $request->all();
        $model = hosoluanchuyen::find($inputs['id']);

        $model->ngaylc = getDateTime($inputs['ngaylc']);
        $model->madv = $inputs['donvi'];
        $model->mapb = $inputs['phongban'];
        $model->macvcq = $inputs['chucvu'];
        $model->soqd = $inputs['soqd'];
        $model->ngayqd = getDateTime($inputs['ngayqd']);
        $model->nguoiky = $inputs['nguoiky'];

        if($model->save()){
            $m_cb = hosocanbo::where('macanbo',$model->macanbo)->first();
            $m_cb->mapb=$inputs['phongban'];
            $m_cb->macvcq = $inputs['chucvu'];
            $m_cb->madv = $inputs['donvi'];
            $m_cb->save();
        }

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy_dd($id){
        if (Session::has('admin')) {
            $model = hosoluanchuyen::find($id);
            $macanbo=$model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/quan_ly/dieu_dong/maso='.$macanbo);
        } else
            return view('errors.notlogin');
    }
    //   </editor-fold>
}
