<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmphongban;
use App\hosocanbo;
use App\hosocongtac;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class hosocongtacController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosocongtac::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.congtac.index')
                ->with('furl','/nghiep_vu/qua_trinh/cong_tac/')
                ->with('furl_ajax','/ajax/cong_tac/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách quá trình công tác trong nước');
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
        $model = new hosocongtac();
        $model->macanbo = $inputs['macanbo'];
        $model->phanloai  = $inputs['phanloai'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->linhvuc  = $inputs['linhvuc'];
        $model->noidung  = $inputs['noidung'];
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
        $model = hosocongtac::find($inputs['id']);
        $model->phanloai  = $inputs['phanloai'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->linhvuc  = $inputs['linhvuc'];
        $model->noidung  = $inputs['noidung'];
        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosocongtac::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/qua_trinh/cong_tac/maso='.$macanbo);
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
        $model = hosocongtac::find($inputs['id']);
        die($model);
    }

    //<editor-fold desc="Tra cứu">
    function search(){
        if (Session::has('admin')) {
            $m_pb=dmphongban::all('mapb','tenpb');
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq');

            return view('search.congtac.index')
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('pageTitle','Tra cứu hồ sơ quá trình công tác của cán bộ');
        } else
            return view('errors.notlogin');
    }

    function result(Request $request){
        if (Session::has('admin')) {
            $model=hosocanbo::join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->join('hosotinhtrangct', 'hosocanbo.macanbo', '=', 'hosotinhtrangct.macanbo')
                ->join('hosocongtac', 'hosocanbo.macanbo', '=', 'hosocongtac.macanbo')
                ->select('hosocanbo.macanbo','hosocanbo.tencanbo','hosocanbo.macvcq','hosocanbo.mapb','hosocanbo.gioitinh'
                    ,'hosocongtac.ngaytu','hosocongtac.ngayden','hosocongtac.noidung','hosocongtac.phanloai','hosocongtac.linhvuc')
                ->where('hosotinhtrangct.hientai','1')
                ->where('hosotinhtrangct.phanloaict','Đang công tác')
                ->get();

            $inputs=$request->all();
            if($inputs['tencanbo']!=''){$model=$model->where('tencanbo', $inputs['tencanbo']);}
            if($inputs['mapb']!=''){$model=$model->where('mapb', $inputs['mapb']);}
            if($inputs['macvcq']!=''){$model=$model->where('macvcq', $inputs['macvcq']);}
            if($inputs['ngaytu']!=''){$model=$model->where('ngaytu','>=', $inputs['ngaytu']);}
            if($inputs['ngayden']!=''){$model=$model->where('ngayden','<=', $inputs['ngayden']);}
            if($inputs['gioitinh']!=''){$model=$model->where('gioitinh',$inputs['gioitinh']);}
            if($inputs['phanloai']!=''){$model=$model->where('phanloai',$inputs['phanloai']);}
            if($inputs['linhvuc']!=''){$model=$model->where('linhvuc',$inputs['linhvuc']);}
            /*
            $m_pb=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($model as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$m_pb);
                $hs->tencvcq=getInfoChucVuCQ($hs,$m_cvcq);
            }
            */
            return view('search.congtac.result')
                ->with('model',$model)
                ->with('pageTitle','Kết quả tra cứu hồ sơ quá trình công tác cán bộ');
        } else
            return view('errors.notlogin');
    }
    //</editor-fold>
}
