<?php

namespace App\Http\Controllers;

use App\hosobinhbau;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class hosobinhbauController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosobinhbau::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.binhbau.index')
                ->with('furl','/nghiep_vu/danh_gia/binh_bau/')
                ->with('furl_ajax','/ajax/binh_bau/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách quá trình bình bầu');
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
        $model = new hosobinhbau();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->noidung  = $inputs['noidung'];
        $model->ketqua  = $inputs['ketqua'];

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
        $model = hosobinhbau::find($inputs['id']);

        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->noidung  = $inputs['noidung'];
        $model->ketqua  = $inputs['ketqua'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosobinhbau::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/danh_gia/binh_bau/maso='.$macanbo);
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
        $model = hosobinhbau::find($inputs['id']);
        die($model);
    }
}
