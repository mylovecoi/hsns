<?php

namespace App\Http\Controllers;

use App\hosollvt;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosollvtController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosollvt::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.llvt.index')
                ->with('furl','/nghiep_vu/quan_ly/llvt/')
                ->with('furl_ajax','/ajax/luc_luong_vu_trang/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách hồ sơ lực lượng vũ trang');
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
        $model = hosollvt::find($inputs['id']);
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
        $model = new hosollvt();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu = getDateTime($inputs['ngaytu']);
        $model->ngayden = getDateTime($inputs['ngayden']);
        $model->quanham = $inputs['quanham'];
        $model->chucvu = $inputs['chucvu'];

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
        $model = hosollvt::find($inputs['id']);

        $model->ngaytu = getDateTime($inputs['ngaytu']);
        $model->ngayden = getDateTime($inputs['ngayden']);
        $model->quanham = $inputs['quanham'];
        $model->chucvu = $inputs['chucvu'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosollvt::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/quan_ly/llvt/maso='.$macanbo);
        } else
            return view('errors.notlogin');
    }
}
