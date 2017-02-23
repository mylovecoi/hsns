<?php

namespace App\Http\Controllers;

use App\hosocongtacnn;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosocongtacnnController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosocongtacnn::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.congtacnn.index')
                ->with('furl','/nghiep_vu/qua_trinh/cong_tac_nn/')
                ->with('furl_ajax','/ajax/cong_tac_nuoc_ngoai/')
                ->with('model',$model)
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('pageTitle','Danh sách quá trình công tác nước ngoài');
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
        $model = new hosocongtacnn();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->noidung  = $inputs['noidung'];
        $model->doandi  = $inputs['doandi'];
        $model->kinhphi  =getDbl($inputs['kinhphi']);
        $model->nguonkp  = $inputs['nguonkp'];
        $model->nuoc  = $inputs['nuoc'];

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
        $model = hosocongtacnn::find($inputs['id']);

        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->noidung  = $inputs['noidung'];
        $model->doandi  = $inputs['doandi'];
        $model->kinhphi  =getDbl($inputs['kinhphi']);
        $model->nguonkp  = $inputs['nguonkp'];
        $model->nuoc  = $inputs['nuoc'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosocongtacnn::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/qua_trinh/cong_tac_nn/maso='.$macanbo);
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
        $model = hosocongtacnn::find($inputs['id']);
        die($model);
    }
}
