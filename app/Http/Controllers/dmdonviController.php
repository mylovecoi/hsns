<?php

namespace App\Http\Controllers;

use App\dmdonvi;
use App\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class dmdonviController extends Controller
{
    public function index(){
        if (Session::has('admin')) {
            $m_pb=dmdonvi::all();
            return view('system.danhmuc.donvi.index')
                ->with('model',$m_pb)
                ->with('pageTitle','Danh mục đơn vị');
        } else
            return view('errors.notlogin');
    }

    public function change($madv){
        if (Session::has('admin')) {
            $model = Users::find(session('admin')->id);
            $model->maxa=$madv;
            $model->save();
            session('admin')->maxa=$madv;
            return redirect('danh_muc/don_vi/index');
        } else
            return view('errors.notlogin');
    }
}
