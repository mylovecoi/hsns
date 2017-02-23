<?php

namespace App\Http\Controllers;

use App\hosonhanxetdg;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class hosonhanxetdgController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosonhanxetdg::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.nhanxet.index')
                ->with('furl','/nghiep_vu/danh_gia/nhan_xet/')
                ->with('furl_ajax','/ajax/nhan_xet/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách hồ sơ nhận xét, đánh giá');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request){
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
        $model = new hosonhanxetdg();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->xeploai  = $inputs['xeploai'];
        $model->nhanxet  = $inputs['nhanxet'];
        $model->danhgia  = $inputs['danhgia'];

        $model->save();

        $result['message'] = "Thêm mới thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function update(Request $request){
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
        $model = hosonhanxetdg::find($inputs['id']);

        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->xeploai  = $inputs['xeploai'];
        $model->nhanxet  = $inputs['nhanxet'];
        $model->danhgia  = $inputs['danhgia'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosonhanxetdg::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/danh_gia/nhan_xet/maso='.$macanbo);
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
        $model = hosonhanxetdg::find($inputs['id']);
        die($model);
    }
}
