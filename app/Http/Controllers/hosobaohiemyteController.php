<?php

namespace App\Http\Controllers;

use App\hosobaohiemyte;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosobaohiemyteController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosobaohiemyte::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.bhyt.index')
                ->with('furl','/nghiep_vu/quan_ly/bhyt/')
                ->with('furl_ajax','/ajax/bao_hiem/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách hồ sơ bảo hiểm y tế');
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
        $model = hosobaohiemyte::find($inputs['id']);
        die($model);
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
        $model = new hosobaohiemyte();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu = getDateTime($inputs['ngaytu']);
        $model->ngayden = getDateTime($inputs['ngayden']);
        $model->ngaylinhthe = getDateTime($inputs['ngaylinhthe']);
        $model->noidangky = $inputs['noidangky'];
        $model->sothebh = $inputs['sothebh'];

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
        $model = hosobaohiemyte::find($inputs['id']);

        $model->ngaytu = getDateTime($inputs['ngaytu']);
        $model->ngayden = getDateTime($inputs['ngayden']);
        $model->ngaylinhthe = getDateTime($inputs['ngaylinhthe']);
        $model->noidangky = $inputs['noidangky'];
        $model->sothebh = $inputs['sothebh'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosobaohiemyte::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/quan_ly/bhyt/maso='.$macanbo);
        } else
            return view('errors.notlogin');
    }
}
