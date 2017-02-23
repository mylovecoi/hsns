<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmphongban;
use App\hosocanbo;
use App\hosoluong;
use App\ngachbac;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class hosoluongController extends Controller
{
    function index($macanbo)
    {
        if (Session::has('admin')) {
            $model = hosoluong::where('macanbo', $macanbo)->get();
            $m_plnb = ngachbac::select('plnb')->distinct()->get();
            $m_pb = getPhongBanX();
            $m_cb = getCanBoX();

            return view('manage.luong.index')
                ->with('furl', '/nghiep_vu/qua_trinh/luong/')
                ->with('furl_ajax', '/ajax/luong/')
                ->with('macanbo', $macanbo)
                ->with('m_pb', $m_pb)
                ->with('m_cb', $m_cb)
                ->with('model', $model)
                ->with('m_plnb', $m_plnb)
                ->with('pageTitle', 'Danh sách quá trình hưởng lương');
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
        $model = new hosoluong();

        $model->macanbo = $inputs['macanbo'];
        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->msngbac  = $inputs['msngbac'];
        $model->bac  = $inputs['bac'];
        $model->heso  = $inputs['heso'];
        $model->vuotkhung  = $inputs['vuotkhung'];
        $model->pthuong  = $inputs['pthuong'];

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
        $model = hosoluong::find($inputs['id']);

        $model->ngaytu  = getDateTime($inputs['ngaytu']);
        $model->ngayden  = getDateTime($inputs['ngayden']);
        $model->msngbac  = $inputs['msngbac'];
        $model->bac  = $inputs['bac'];
        $model->heso  = $inputs['heso'];
        $model->vuotkhung  = $inputs['vuotkhung'];
        $model->pthuong  = $inputs['pthuong'];

        $model->save();

        $result['message'] = "Cập nhật thành công.";
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = hosoluong::find($id);
            $macanbo = $model->macanbo;
            $model->delete();
            return redirect('/nghiep_vu/qua_trinh/luong/maso='.$macanbo);
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
        $model = hosoluong::find($inputs['id']);
        $m_nb = ngachbac::all('msngbac','plnb','tennb')->toArray();
        $model->plnb=getInfoPLNB($model,$m_nb);
        $model->tennb=getInfoTenNB($model,$m_nb);

        $m_plnb = ngachbac::select('plnb')->distinct()->get();
        $m_tennb = ngachbac::select('tennb')->where('plnb', '=', $model->plnb)->distinct()->get();
        $m_bac = ngachbac::select('bac')->where('msngbac', '=', $model->msngbac)->get();
        //die($model);

        $result['status'] = 'success';

        $result['message'] ='<div class="form-horizontal" id="chitiet">';
        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Từ ngày<span class="require">*</span></label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input type="date" name="ngaytu" id="ngaytu" value="'.$model->ngaytu.'" class="form-control">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Đến ngày</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input type="date" name="ngayden" id="ngayden" value="'.$model->ngayden.'" class="form-control">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Mã ngạch bậc<span class="require">*</span></label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="msngbac" class="form-control" name="msngbac" type="text"  value="'.$model->msngbac.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Nhóm ngạch bậc<span class="require">*</span></label>';
        $result['message'] .='<div class="col-sm-8">';
        $result['message'] .='<select class="form-control" name="plnb" id="plnb" onchange="getPLNB()">';
        foreach($m_plnb as $pl)
            $result['message'] .='<option value="'.$pl->plnb.'" '.($model->plnb==$pl->plnb?'selected':'').'>'.$pl->plnb.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-sm-4 control-label">Tên ngạch bậc </label>';
        $result['message'] .='<div class="col-sm-8">';
        $result['message'] .='<select name="tennb" id="tennb" class="form-control" onchange="getBac()">';
        foreach($m_tennb as $nb)
            $result['message'] .='<option value="'.$nb->tennb.'" '.($model->tennb==$nb->tennb?'selected':'').'>'.$nb->tennb.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';


        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Bậc lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<select name="bac" id="bac" class="form-control" onchange="getHS()">';
        foreach($m_bac as $bac)
            $result['message'] .='<option value="'.$bac->bac.'" '.($model->bac==$bac->bac?'selected':'').'>'.$bac->bac.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Hệ số lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="heso" class="form-control" data-mask="fdecimal" name="heso" type="text" value="'.$model->heso.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Hệ số vượt khung</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="vuotkhung" class="form-control" data-mask="fdecimal" name="vuotkhung" type="text" value="'.$model->vuotkhung.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Phần trăm hưởng lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="pthuong" class="form-control" data-mask="fdecimal" name="pthuong" type="text" value="'.$model->pthuong.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';
        $result['message'] .='<input type="hidden" id="id_ct" name="id_ct" value="'.$model->id.'">';
        $result['message'] .='</div>';

        die(json_encode($result));
    }

    function getinfo_cu(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }
        $inputs = $request->all();
        $model = hosoluong::find($inputs['id']);
        $m_nb = ngachbac::all('msngbac','plnb','tennb')->toArray();
        $model->plnb=getInfoPLNB($model,$m_nb);
        $model->tennb=getInfoTenNB($model,$m_nb);

        $m_plnb = ngachbac::select('plnb')->distinct()->get();
        $m_tennb = ngachbac::select('tennb')->where('plnb', '=', $model->plnb)->distinct()->get();
        $m_bac = ngachbac::select('bac')->where('msngbac', '=', $model->msngbac)->get();
        //die($model);

        $result['status'] = 'success';

        $result['message'] ='<div class="form-horizontal" id="chitiet">';
        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Từ ngày<span class="require">*</span></label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input type="date" name="ngaytu" id="ngaytu" value="'.$model->ngaytu.'" class="form-control">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Đến ngày</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input type="date" name="ngayden" id="ngayden" value="'.$model->ngayden.'" class="form-control">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Mã ngạch bậc<span class="require">*</span></label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="msngbac" class="form-control" name="msngbac" type="text"  value="'.$model->msngbac.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Nhóm ngạch bậc<span class="require">*</span></label>';
        $result['message'] .='<div class="col-sm-8">';
        $result['message'] .='<select class="form-control" name="plnb" id="plnb" onchange="getPLNB()">';
        foreach($m_plnb as $pl)
            $result['message'] .='<option value="'.$pl->plnb.'" '.($model->plnb==$pl->plnb?'selected':'').'>'.$pl->plnb.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-sm-4 control-label">Tên ngạch bậc </label>';
        $result['message'] .='<div class="col-sm-8">';
        $result['message'] .='<select name="tennb" id="tennb" class="form-control" onchange="getBac()">';
        foreach($m_tennb as $nb)
            $result['message'] .='<option value="'.$nb->tennb.'" '.($model->tennb==$nb->tennb?'selected':'').'>'.$nb->tennb.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';


        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Bậc lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<select name="bac" id="bac" class="form-control" onchange="getHS()">';
        foreach($m_bac as $bac)
            $result['message'] .='<option value="'.$bac->bac.'" '.($model->bac==$bac->bac?'selected':'').'>'.$bac->bac.'</option>';
        $result['message'] .='</select>';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Hệ số lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="heso" class="form-control" data-mask="fdecimal" name="heso" type="text" value="'.$model->heso.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Hệ số vượt khung</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="vuotkhung" class="form-control" data-mask="fdecimal" name="vuotkhung" type="text" value="'.$model->vuotkhung.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';

        $result['message'] .='<div class="form-group">';
        $result['message'] .='<label class="col-md-4 control-label"> Phần trăm hưởng lương</label>';
        $result['message'] .='<div class="col-md-8">';
        $result['message'] .='<input id="pthuong" class="form-control" data-mask="fdecimal" name="pthuong" type="text" value="'.$model->pthuong.'">';
        $result['message'] .='</div>';
        $result['message'] .='</div>';
        $result['message'] .='<input type="hidden" id="id_ct" name="id_ct" value="'.$model->id.'">';
        $result['message'] .='</div>';

        die(json_encode($result));
    }

    //<editor-fold desc="Tra cứu">
    function search(){
        if (Session::has('admin')) {
            $m_pb=dmphongban::all('mapb','tenpb');
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq');

            return view('search.luong.index')
                ->with('m_pb',$m_pb)
                ->with('m_cvcq',$m_cvcq)
                ->with('pageTitle','Tra cứu hồ sơ quá trình lương của cán bộ');
        } else
            return view('errors.notlogin');
    }

    function result(Request $request){
        if (Session::has('admin')) {
            $model=hosocanbo::join('dmchucvucq', 'hosocanbo.macvcq', '=', 'dmchucvucq.macvcq')
                ->join('hosotinhtrangct', 'hosocanbo.macanbo', '=', 'hosotinhtrangct.macanbo')
                ->join('hosoluong', 'hosocanbo.macanbo', '=', 'hosoluong.macanbo')
                ->select('hosocanbo.macanbo','hosocanbo.tencanbo','hosocanbo.macvcq','hosocanbo.mapb','hosocanbo.gioitinh'
                    ,'hosoluong.ngaytu','hosoluong.ngayden','hosoluong.msngbac','hosoluong.bac','hosoluong.heso','hosoluong.vuotkhung')
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
            if($inputs['msngbac']!=''){$model=$model->where('msngbac',$inputs['msngbac']);}

            /*
            $m_pb=dmphongban::all('mapb','tenpb')->toArray();
            $m_cvcq=dmchucvucq::all('tencv', 'macvcq')->toArray();

            foreach($model as $hs){
                $hs->tenpb=getInfoPhongBan($hs,$m_pb);
                $hs->tencvcq=getInfoChucVuCQ($hs,$m_cvcq);
            }
            */
            return view('search.luong.result')
                ->with('model',$model)
                ->with('pageTitle','Kết quả tra cứu hồ sơ quá trình lương của cán bộ');
        } else
            return view('errors.notlogin');
    }
    //</editor-fold>
}
