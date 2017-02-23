<?php

namespace App\Http\Controllers;

use App\dmphucap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dmphucapController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $m_pb=dmphucap::all();
            return view('system.danhmuc.phucap.index')
                ->with('model',$m_pb)
                ->with('pageTitle','Danh mục phụ cấp');
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
            $model = new dmphucap();
            $model->mapc = session('admin')->maxa .'.'.getdate()[0];
            $model->tenpc = $inputs['tenpc'];
            $model->hesopc = $inputs['hesopc'];
            $model->baohiem = $inputs['baohiem'];
            $model->ghichu = $inputs['ghichu'];
            $model->save();
        } else {
            $id=$inputs['id'];
            $model =  dmphucap::findOrFail($id);
            $model->tenpc = $inputs['tenpc'];
            $model->hesopc = $inputs['hesopc'];
            $model->baohiem = $inputs['baohiem'];
            $model->ghichu = $inputs['ghichu'];
            $model->save();
        }

        //Trả lại kết quả
        $result['message'] = 'Thao tác thành công.';
        $result['status'] = 'success';

        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = dmphucap::findOrFail($id);
            $model->delete();
            return redirect('/danh_muc/phu_cap/index');
        }else
            return view('errors.notlogin');
    }
}
