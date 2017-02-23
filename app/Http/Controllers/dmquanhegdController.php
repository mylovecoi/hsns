<?php

namespace App\Http\Controllers;

use App\dmquanhegd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dmquanhegdController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $m_pb=dmquanhegd::all();
            return view('system.danhmuc.quanhegd.index')
                ->with('model',$m_pb)
                ->with('pageTitle','Danh mục dân tộc');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request)
    {
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        if (!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }
        $inputs = $request->all();

        //Thêm mới dịch vụ
        if ($inputs['id'] == 0) {
            $model = new dmquanhegd();
            $model->quanhe = $inputs['quanhe'];
            $model->nhom = $inputs['nhom'];
            $model->sapxep = $inputs['sapxep'];
            $model->save();
        } else {
            $id=$inputs['id'];
            $model =  dmquanhegd::findOrFail($id);
            $model->quanhe = $inputs['quanhe'];
            $model->nhom = $inputs['nhom'];
            $model->sapxep = $inputs['sapxep'];
            $model->save();
        }

        //Trả lại kết quả
        $result['message'] = 'Thao tác thành công.';
        $result['status'] = 'success';

        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = dmquanhegd::findOrFail($id);
            $model->delete();
            return redirect('/danh_muc/quan_he_gd/index');
        }else
            return view('errors.notlogin');
    }
}
