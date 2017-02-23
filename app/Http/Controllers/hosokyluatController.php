<?php

namespace App\Http\Controllers;

use App\hosokyluat;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class hosokyluatController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosokyluat::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.kyluat.index')
                ->with('furl','/nghiep_vu/danh_gia/ky_luat/')
                ->with('furl_ajax','/ajax/ky_luat/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách hồ sơ kỷ luật');
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
        $model = new hosokyluat();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaythang  = getDateTime($inputs['ngaythang']);
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->noidung  = $inputs['noidung'];
        $model->capqd  = $inputs['capqd'];

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
        $model = hosokyluat::find($inputs['id']);

        $model->ngaythang  = getDateTime($inputs['ngaythang']);
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->noidung  = $inputs['noidung'];
        $model->capqd  = $inputs['capqd'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosokyluat::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/danh_gia/khen_thuong/maso='.$macanbo);
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
        $model = hosokyluat::find($inputs['id']);
        die($model);
    }
}
