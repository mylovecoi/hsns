<?php

namespace App\Http\Controllers;

use App\dmphongban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class dmphongbanController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $m_pb=dmphongban::orderby('sapxep')->get();
            return view('system.danhmuc.phongban.index')
                ->with('model',$m_pb)
                ->with('pageTitle','Danh mục phòng ban');
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
            $model = new dmphongban();
            $model->mapb = session('admin')->maxa .'.'.getdate()[0];
            $model->tenpb = $inputs['tenpb'];
            $model->diengiai = $inputs['diengiai'];
            $model->sapxep = $inputs['sapxep'];
            $model->save();
        } else {
            $id=$inputs['id'];
            $model =  dmphongban::findOrFail($id);
            $model->tenpb = $inputs['tenpb'];
            $model->diengiai = $inputs['diengiai'];
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
            $model = dmphongban::findOrFail($id);
            $model->delete();
            return redirect('/danh_muc/phong_ban/index');
        }else
            return view('errors.notlogin');
    }
}
