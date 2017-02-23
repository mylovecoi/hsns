<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmphongban;
use App\hosocanbo;
use App\hosochucvu;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosochucvuController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosochucvu::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            $m_pbm=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvm=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($model as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$m_pbm);
                $hs->tencvcq=getInfoChucVuCQ($hs,$m_cvm);
            }
            return view('manage.chucvu.index')
                ->with('furl','/nghiep_vu/quan_ly/chuc_vu/')
                ->with('furl_ajax','/ajax/chuc_vu/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('m_pbm',$m_pbm)
                ->with('m_cvm',$m_cvm)
                ->with('model',$model)
                ->with('pageTitle','Danh sách hồ sơ phòng ban, chức vụ');
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
        $model = new hosochucvu();

        $model->macanbo = $inputs['macanbo'];
        $model->mapb = $inputs['mapb'];
        $model->macvcq = $inputs['macvcq'];
        $model->ngaytu = getDateTime($inputs['ngaytu']);
        $model->ngayden = getDateTime($inputs['ngayden']);
        $model->soqd = $inputs['soqd'];
        $model->ngayqd = getDateTime($inputs['ngayqd']);
        $model->nguoiky = $inputs['nguoiky'];

        if($model->save()){
            $m_cb = hosocanbo::where('macanbo',$inputs['macanbo'])->first();
            $m_cb->mapb=$inputs['mapb'];
            $m_cb->macvcq = $inputs['macvcq'];
            $m_cb->save();
        }

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
        $model = hosochucvu::find($inputs['id']);

        $model->mapb = $inputs['mapb'];
        $model->macvcq = $inputs['macvcq'];
        $model->ngaytu = getDateTime($inputs['ngaytu']);
        $model->ngayden = getDateTime($inputs['ngayden']);
        $model->soqd = $inputs['soqd'];
        $model->ngayqd = getDateTime($inputs['ngayqd']);
        $model->nguoiky = $inputs['nguoiky'];

        if($model->save()){
            $m_cb = hosocanbo::where('macanbo',$model->macanbo)->first();
            $m_cb->mapb=$inputs['mapb'];
            $m_cb->macvcq = $inputs['macvcq'];
            $m_cb->save();
        }

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosochucvu::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/quan_ly/chuc_vu/maso='.$macanbo);
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
        $model = hosochucvu::find($inputs['id']);
        die($model);
    }
}
