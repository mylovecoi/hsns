<?php

namespace App\Http\Controllers;

use App\dmquanhegd;
use App\hosoquanhegd;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosoquanhegdController extends Controller
{
 //   <editor-fold desc="--Quan hệ gia đình của bản thân--">
    function index_bt($macanbo){
        if (Session::has('admin')) {
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();
            $m_qh=dmquanhegd::where('nhom','<','3')->get();
            $model = hosoquanhegd::where('macanbo',$macanbo)->where('phanloai','Bản thân')->get();
            return view('manage.quanhe_bt.index')
                ->with('furl','/nghiep_vu/quan_ly/quan_he_bt/')
                ->with('furl_ajax','/ajax/quan_he_gd/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('m_qh',$m_qh)
                ->with('model',$model)
                ->with('pageTitle','Danh sách quan hệ gia đình');
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
        $model = hosoquanhegd::find($inputs['id']);
        $model->status = 'success';
        die(json_encode($model));
    }

    function store_bt(Request $request){
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
        $model = new hosoquanhegd();

        $model->madv = session('admin')->maxa;
        $model->macanbo = $inputs['macanbo'];
        $model->phanloai = $inputs['phanloai'];
        $model->quanhe = $inputs['quanhe'];
        $model->hoten = $inputs['hoten'];
        $model->ngaysinh = $inputs['ngaysinh'];
        $model->thongtinct = $inputs['thongtinct'];

        $model->save();

        $result['message'] = "Thêm mới thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function update_bt(Request $request){
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
        $model = hosoquanhegd::find($inputs['id']);

        $model->phanloai = $inputs['phanloai'];
        $model->quanhe = $inputs['quanhe'];
        $model->hoten = $inputs['hoten'];
        $model->ngaysinh = $inputs['ngaysinh'];
        $model->thongtinct = $inputs['thongtinct'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy_bt($id){
        if (Session::has('admin')) {
            $model = hosoquanhegd::find($id);
            $macanbo=$model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/quan_ly/quan_he_bt/maso='.$macanbo);

        } else
            return view('errors.notlogin');
    }
 //   </editor-fold>

    //   <editor-fold desc="--Quan hệ gia đình của vợ / chồng--">
    function index_vc($macanbo){
        if (Session::has('admin')) {
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();
            $model = hosoquanhegd::where('macanbo',$macanbo)->where('phanloai','Vợ chồng')->get();
            $m_qh=dmquanhegd::where('nhom','3')->get();
            return view('manage.quanhe_vc.index')
                ->with('furl','/nghiep_vu/quan_ly/quan_he_vc/')
                ->with('furl_ajax','/ajax/quan_he_gd/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('m_qh',$m_qh)
                ->with('model',$model)
                ->with('pageTitle','Danh sách quan hệ gia đình');
        } else
            return view('errors.notlogin');
    }

    function show_vc($macanbo){
        if (Session::has('admin')) {
            $model = hosoquanhegd::where('macanbo',$macanbo)->where('phanloai','Vợ chồng')->get();
            //xem có nên làm giao diện cấp tỉnh, huyện
            if(session('admin')->level=="T" || session('admin')->level=="H"){
                //Có thể thêm combo chọn đơn vị
            }else{
                $m_pb=getPhongBanX();
                $m_cb=getCanBoX();
            }
            $m_qh=dmquanhegd::where('nhom','3')->get();
            return view('quanly.quanhe_vc.index')
                ->with('furl','/nghiepvu/qlhs/qhgd_vc/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('m_qh',$m_qh)
                ->with('model',$model)
                ->with('pageTitle','Danh sách quan hệ gia đình');
        } else
            return view('errors.notlogin');
    }

    function store_vc(Request $request){
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
        $model = new hosoquanhegd();

        $model->madv = session('admin')->maxa;
        $model->macanbo = $inputs['macanbo'];
        $model->phanloai = $inputs['phanloai'];
        $model->quanhe = $inputs['quanhe'];
        $model->hoten = $inputs['hoten'];
        $model->ngaysinh = $inputs['ngaysinh'];
        $model->thongtinct = $inputs['thongtinct'];

        $model->save();

        $result['message'] = "Thêm mới thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function update_vc(Request $request){
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
        $model = hosoquanhegd::find($inputs['id']);

        $model->phanloai = $inputs['phanloai'];
        $model->quanhe = $inputs['quanhe'];
        $model->hoten = $inputs['hoten'];
        $model->ngaysinh = $inputs['ngaysinh'];
        $model->thongtinct = $inputs['thongtinct'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy_vc($id){
        if (Session::has('admin')) {
            $model = hosoquanhegd::find($id);
            $macanbo=$model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/quan_ly/quan_he_vc/maso='.$macanbo);

        } else
            return view('errors.notlogin');
    }
    //   </editor-fold>
}
