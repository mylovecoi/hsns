<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmphongban;
use App\hosocanbo;
use App\hosodaotao;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosodaotaoController extends Controller
{
    function index($macanbo){
        if (Session::has('admin')) {
            $model = hosodaotao::where('macanbo',$macanbo)->get();
            $m_pb=getPhongBanX();
            $m_cb=getCanBoX();

            return view('manage.daotao.index')
                ->with('furl','/nghiep_vu/qua_trinh/dao_tao/')
                ->with('furl_ajax','/ajax/dao_tao/')
                ->with('macanbo',$macanbo)
                ->with('m_pb',$m_pb)
                ->with('m_cb',$m_cb)
                ->with('model',$model)
                ->with('pageTitle','Danh sách quá trình đào tạo');
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
        $model = new hosodaotao();

        $model->macanbo = $inputs['macanbo'];
        $model->phanloai  = $inputs['phanloai'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->tencoso  = $inputs['tencoso'];
        $model->chuyennganh  = $inputs['chuyennganh'];
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->vanbang  = $inputs['vanbang'];
        $model->ghichu  = $inputs['ghichu'];

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
        $model = hosodaotao::find($inputs['id']);

        $model->phanloai  = $inputs['phanloai'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->tencoso  = $inputs['tencoso'];
        $model->chuyennganh  = $inputs['chuyennganh'];
        $model->hinhthuc  = $inputs['hinhthuc'];
        $model->vanbang  = $inputs['vanbang'];
        $model->ghichu  = $inputs['ghichu'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosodaotao::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/qua_trinh/dao_tao/maso='.$macanbo);
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
        $model = hosodaotao::find($inputs['id']);
        die($model);
    }

    //<editor-fold desc="Tra cứu">
    function search(){
        if (Session::has('admin')) {
            $m_pb=dmphongban::all('mapb','tenpb');
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq');

            return view('search.daotao.index')
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('pageTitle','Tra cứu hồ sơ quá trình đào tạo của cán bộ');
        } else
            return view('errors.notlogin');
    }

    function result(Request $request){
        if (Session::has('admin')) {
            $model=hosocanbo::join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->join('hosotinhtrangct', 'hosocanbo.macanbo', '=', 'hosotinhtrangct.macanbo')
                ->join('hosodaotao', 'hosocanbo.macanbo', '=', 'hosodaotao.macanbo')
                ->select('hosocanbo.macanbo','hosocanbo.tencanbo','hosocanbo.macvcq','hosocanbo.mapb','hosocanbo.gioitinh'
                    ,'hosodaotao.ngaytu','hosodaotao.ngayden','hosodaotao.vanbang','hosodaotao.phanloai','hosodaotao.hinhthuc')
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
            if($inputs['hinhthuc']!=''){$model=$model->where('hinhthuc',$inputs['hinhthuc']);}
            if($inputs['vanbang']!=''){$model=$model->where('vanbang',$inputs['vanbang']);}

            /*
            $m_pb=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($model as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$m_pb);
                $hs->tencvcq=getInfoChucVuCQ($hs,$m_cvcq);
            }
            */
            return view('search.daotao.result')
                ->with('model',$model)
                ->with('pageTitle','Kết quả tra cứu hồ sơ quá trình đào tạo cán bộ');
        } else
            return view('errors.notlogin');
    }
    //</editor-fold>
}
