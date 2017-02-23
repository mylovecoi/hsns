<?php

namespace App\Http\Controllers;

use App\dmphanloaict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dmphanloaictController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $m_pb=dmphanloaict::all();
            return view('system.danhmuc.congtac.index')
                ->with('model',$m_pb)
                ->with('pageTitle','Danh mục phân loại công tác');
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
            $model = new dmphanloaict();
            $model->phanloaict = $inputs['phanloaict'];
            $model->kieuct = $inputs['kieuct'];
            $model->tenct = $inputs['tenct'];
            $model->nhomct = $inputs['nhomct'];
            $model->save();
        } else {
            $id=$inputs['id'];
            $model =  dmphanloaict::findOrFail($id);
            $model->phanloaict = $inputs['phanloaict'];
            $model->kieuct = $inputs['kieuct'];
            $model->tenct = $inputs['tenct'];
            $model->nhomct = $inputs['nhomct'];
            $model->save();
        }

        //Trả lại kết quả
        $result['message'] = 'Thao tác thành công.';
        $result['status'] = 'success';

        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = dmphanloaict::findOrFail($id);
            $model->delete();
            return redirect('/danh_muc/cong_tac/index');
        }else
            return view('errors.notlogin');
    }
}
