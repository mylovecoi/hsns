<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class dmchucvucqController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $m_pb=dmchucvucq::orderby('sapxep')->get();
            return view('system.danhmuc.chucvucq.index')
                ->with('model',$m_pb)
                ->with('pageTitle','Danh mục chức vụ');
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
            $model = new dmchucvucq();
            $model->macvcq = session('admin')->maxa .'.'.getdate()[0];
            $model->tencv = $inputs['tencv'];
            $model->ghichu = $inputs['ghichu'];
            $model->sapxep = $inputs['sapxep'];
            $model->save();
        } else {
            $id=$inputs['id'];
            $model =  dmchucvucq::findOrFail($id);
            $model->tencv = $inputs['tencv'];
            $model->ghichu = $inputs['ghichu'];
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
            $model = dmchucvucq::findOrFail($id);
            $model->delete();
            return redirect('/danh_muc/chuc_vu_cq/index');
        }else
            return view('errors.notlogin');
    }
}
