<?php

namespace App\Http\Controllers;

use App\hosocanbo;
use App\hosotailieu;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosotailieuController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();
            $model = hosotailieu::where('macanbo',$macanbo)->get();

            return view('manage.tailieu.index')
                ->with('furl','/nghiep_vu/quan_ly/tai_lieu/')
                ->with('furl_ajax','/ajax/tai_lieu/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách tài liệu');
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
        $model = hosotailieu::find($inputs['id']);
        $model->status = 'success';
        die(json_encode($model));
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
        $model = new hosotailieu();
        $model->madv = session('admin')->maxa;
        $model->macanbo = $inputs['macanbo'];
        $model->tentailieu = $inputs['tentailieu'];
        $model->phanloai = $inputs['phanloai'];
        $model->ngaybangiao = getDateTime($inputs['ngaybangiao']);
        $model->nguoinhan = $inputs['nguoinhan'];
        $model->ghichu = $inputs['ghichu'];
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
        $model = hosotailieu::find($inputs['id']);

        $model->tentailieu = $inputs['tentailieu'];
        $model->phanloai = $inputs['phanloai'];
        $model->ngaybangiao = getDateTime($inputs['ngaybangiao']);
        $model->nguoinhan = $inputs['nguoinhan'];
        $model->ghichu = $inputs['ghichu'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosotailieu::find($id);
            $macanbo=$model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/quan_ly/tai_lieu/maso='.$macanbo);
        } else {
            return view('errors.notlogin');
        }
    }
}
