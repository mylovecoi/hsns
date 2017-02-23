<?php

namespace App\Http\Controllers;

use App\dmdantoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dmdantocController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $m_pb=dmdantoc::all();
            return view('system.danhmuc.dantoc.index')
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
            $model = new dmdantoc();
            $model->dantoc = $inputs['dantoc'];
            $model->thieuso = $inputs['thieuso'];
            $model->save();
        } else {
            $id=$inputs['id'];
            $model =  dmdantoc::findOrFail($id);
            $model->dantoc = $inputs['dantoc'];
            $model->thieuso = $inputs['thieuso'];
            $model->save();
        }

        //Trả lại kết quả
        $result['message'] = 'Thao tác thành công.';
        $result['status'] = 'success';

        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = dmdantoc::findOrFail($id);
            $model->delete();
            return redirect('/danh_muc/dan_toc/index');
        }else
            return view('errors.notlogin');
    }
}
