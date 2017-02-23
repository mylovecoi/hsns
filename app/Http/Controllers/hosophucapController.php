<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmphongban;
use App\dmphucap;
use App\hosocanbo;
use App\Http\Requests;
use App\hosophucap;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class hosophucapController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosophucap::where('macanbo',$macanbo)->get();
            $m_pc=dmphucap::all('mapc','tenpc','hesopc')->toArray();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.phucap.index')
                ->with('furl','/nghiep_vu/qua_trinh/phu_cap/')
                ->with('furl_ajax','/ajax/phu_cap/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('m_pc',$m_pc)
                ->with('pageTitle','Danh sách quá trình hưởng phụ cấp');
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
        $model = new hosophucap();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->mapc  = $inputs['mapc'];
        $model->hesopc  = $inputs['hesopc'];

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
        $model = hosophucap::find($inputs['id']);

        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->mapc  = $inputs['mapc'];
        $model->hesopc  = $inputs['hesopc'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosophucap::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/qua_trinh/phu_cap/maso='.$macanbo);
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
        $model = hosophucap::find($inputs['id']);
        die($model);
    }

    //<editor-fold desc="Tra cứu">
    function search(){
        if (Session::has('admin')) {
            $m_pb=dmphongban::all('mapb','tenpb');
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq');
            $m_pc=dmphucap::all('mapc','tenpc','hesopc')->toArray();

            return view('search.phucap.index')
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('m_pc',$m_pc)
                ->with('pageTitle','Tra cứu hồ sơ quá trình phụ cấp của cán bộ');
        } else
            return view('errors.notlogin');
    }

    function result(Request $request){
        if (Session::has('admin')) {
            $model=hosocanbo::join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->join('hosotinhtrangct', 'hosocanbo.macanbo', '=', 'hosotinhtrangct.macanbo')
                ->join('hosophucap', 'hosocanbo.macanbo', '=', 'hosophucap.macanbo')
                ->select('hosocanbo.macanbo','hosocanbo.tencanbo','hosocanbo.macvcq','hosocanbo.mapb','hosocanbo.gioitinh'
                    ,'hosophucap.ngaytu','hosophucap.ngayden','hosophucap.mapc','hosophucap.hesopc')
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
            if($inputs['mapc']!=''){$model=$model->where('mapc',$inputs['mapc']);}

            $m_pc=array_column(dmphucap::all('mapc','tenpc')->toArray(),'tenpc','mapc');
            foreach($model as $hs){
                $hs->tenpc=$m_pc[$hs->mapc];
            }
            /*
            $m_pb=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($model as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$m_pb);
                $hs->tencvcq=getInfoChucVuCQ($hs,$m_cvcq);
            }
            */
            return view('search.phucap.result')
                ->with('model',$model)
                ->with('pageTitle','Kết quả tra cứu hồ sơ quá trình phụ cấp của cán bộ');
        } else
            return view('errors.notlogin');
    }
    //</editor-fold>
}
