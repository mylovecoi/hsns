<?php

namespace App\Http\Controllers;

use App\bangluong;
use App\bangluong_ct;
use App\dmchucvucq;
use App\dmdonvi;
use App\hosocanbo;
use App\ngachbac;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class bangluongController extends Controller
{
    function index(){
        if (Session::has('admin')) {
            $model = bangluong::where('madv',session('admin')->maxa)->get();
            return view('manage.bangluong.index')
                ->with('furl','/chuc_nang/bang_luong/')
                ->with('furl_ajax','/ajax/bang_luong/')
                ->with('model',$model)
                ->with('pageTitle','Danh sách bảng lương');
        } else
            return view('errors.notlogin');
    }

    function store(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs=$request->all();
        $mabl=session('admin')->maxa .'.'.getdate()[0];
        $model = new bangluong();
        $model->mabl=$mabl;
        $model->madv=session('admin')->maxa;
        $model->thang=$inputs['thang'];
        $model->nam=$inputs['nam'];
        $model->noidung=$inputs['noidung'];
        $model->nguoilap=session('admin')->name;
        $model->ngaylap=Carbon::now()->toDateTimeString();
        $model->save();

        //$ngayluong=$inputs['nam'].'-'.$inputs['thang'].'-01';
        //$m_cb=hosocanbo::where('ngaytu','<=',$ngayluong)->orwhere('ngayden','>=',$ngayluong)->get();

        $ngaytu=$inputs['nam'].'-'.$inputs['thang'].'-01';
        $m_cb=hosocanbo::where(function($query) use ($ngaytu){
                $query->where('ngaytu','<=',$ngaytu)
                    ->whereNull('ngayden');
                })
                ->orwhere(function($query) use ($ngaytu){
                    $query->where('ngaytu','<=',$ngaytu)
                        ->where('ngayden','>=',$ngaytu);
                })->get();

        $gnr=getGeneralConfigs();
        foreach($m_cb as $cb){
            $ths=0;
            $m_luongct=new bangluong_ct();
            $m_luongct->mabl=$mabl;
            $m_luongct->macanbo = $cb->macanbo;
            $m_luongct->tencanbo  = $cb->tencanbo;
            $m_luongct->macvcq = $cb->macvcq;
            $m_luongct->mapb = $cb->mapb;
            $m_luongct->msngbac = $cb->msngbac;

            $m_luongct->heso=$cb->heso;
            $ths +=$cb->heso;
            $m_luongct->vuotkhung=$cb->vuotkhung;
            $ths +=$cb->vuotkhung;
            //$m_luongct->pcct=$cb->pcct;
            //$m_luongct->pckct=$cb->pckct;
            $m_luongct->pck=$cb->pck;
            $ths +=$cb->pck;
            $m_luongct->pccv=$cb->pccv;
            $ths +=$cb->pccv;
            $m_luongct->pckv=$cb->pckv;
            $ths +=$cb->pckv;
            $m_luongct->pcth=$cb->pcth;
            $ths +=$cb->pcth;
            //$m_luongct->pcdd=$cb->pcdd;
            $m_luongct->pcdh=$cb->pcdh;
            $ths +=$cb->pcdh;
            $m_luongct->pcld=$cb->pcld;
            $ths +=$cb->pcld;
            //$m_luongct->pcdbqh=$cb->pcdbqh;
            $m_luongct->pcudn=$cb->pcudn;
            $ths +=$cb->pcudn;
            $m_luongct->pctn=$cb->pctn;
            $ths +=$cb->pctn;
            $m_luongct->pctnn=$cb->pctnn;
            $ths +=$cb->pctnn;
            $m_luongct->pcdbn=$cb->pcdbn;
            $ths +=$cb->pcdbn;
            $m_luongct->pcvk=$cb->pcvk;
            $ths +=$cb->pcvk;
            $m_luongct->pckn=$cb->pckn;
            $ths +=$cb->pckn;
            //$m_luongct->pcdang=$cb->pcdang;
            //$m_luongct->pccovu=$cb->pccovu;
            //$m_luongct->pclt=$cb->pclt;
            //$m_luongct->pcd=$cb->pcd;
            //$m_luongct->pctr=$cb->pctr;
            $m_luongct->tonghs=$ths;
            $ttl=$gnr['luongcb']*$ths;
            $m_luongct->ttl=$ttl;


            $m_luongct->stbhxh=$gnr['stbhxh'];
            $m_luongct->stbhyt=$gnr['stbhyt'];
            $m_luongct->stkpcd=$gnr['stkpcd'];
            $m_luongct->stbhtn=$gnr['stbhtn'];

            $tbh=$gnr['stbhxh']+$gnr['stbhyt']+$gnr['stkpcd']+$gnr['stbhtn'];
            $m_luongct->ttbh=$tbh;

            $m_luongct->luongtn=$ttl-$tbh;

            $m_luongct->save();
        }

        $result['message'] = '/chucnang/luong/bangluong/'.$mabl;
        $result['status'] = 'success';
        die(json_encode($result));
        //return redirect('/chucnang/luong/bangluong/'.$mabl);

    }

    function update(Request $request){
        if(!Session::has('admin')) {
            $result = array(
                'status' => 'fail',
                'message' => 'permission denied',
            );
            die(json_encode($result));
        }

        $inputs=$request->all();
        $model = bangluong::find($inputs['id']);
        $model->thang=$inputs['thang'];
        $model->nam=$inputs['nam'];
        $model->noidung=$inputs['noidung'];
        $model->save();

        $result['message'] = 'Cập nhật thành công.';
        $result['status'] = 'success';
        die(json_encode($result));
    }

    function show($mabl){
        if (Session::has('admin')) {
            $model=DB::table('bangluong_ct')
                ->join('dmchucvucq', 'bangluong_ct.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('bangluong_ct.*', 'dmchucvucq.sapxep')
                ->where('bangluong_ct.mabl',$mabl)
                ->orderby('dmchucvucq.sapxep')
                ->get();

            $m_bl=bangluong::select('thang','nam')->where('mabl',$mabl)->first();
            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            foreach($model as $hs){
                $hs->tencv=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            return view('manage.bangluong.bangluong')
                ->with('furl','/chuc_nang/bang_luong/')
                ->with('model',$model)
                ->with('m_bl',$m_bl)
                ->with('pageTitle','Bảng lương chi tiết');
        } else
            return view('errors.notlogin');
    }

    function destroy($id){
        if (Session::has('admin')) {
            $model = bangluong::find($id);
            $model->delete();
            return redirect('/chucnang/luong/');
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
        $model = bangluong::find($inputs['id']);
        die($model);
    }

    function detail($mabl,$id){
        if (Session::has('admin')) {
            $model = bangluong_ct::find($id);

            $m_nb = ngachbac::all('msngbac','plnb','tennb')->toArray();
            $model->plnb=getInfoPLNB($model,$m_nb);
            $model->tennb=getInfoTenNB($model,$m_nb);
            $model->tencanbo=Str::upper($model->tencanbo);

            $m_plnb = ngachbac::select('plnb')->distinct()->get();
            $m_tennb = ngachbac::select('tennb')->where('plnb', '=', $model->plnb)->distinct()->get();
            $m_bac = ngachbac::select('bac')->where('msngbac', '=', $model->msngbac)->get();

            return view('manage.bangluong.chitiet')
                ->with('furl','/chucnang/luong/')
                ->with('model',$model)
                ->with('m_plnb',$m_plnb)
                ->with('m_tennb',$m_tennb)
                ->with('m_bac',$m_bac)
                ->with('pageTitle','Chi tiết bảng lương');
        } else
            return view('errors.notlogin');
    }

    function updatect(Request $request, $id){
        if (Session::has('admin')) {
            $inputs=$request->all();
            $model = bangluong_ct::find($id);

            $mabl=$model->mabl;

            $model->heso=$inputs['heso'];
            $model->vuotkhung=$inputs['vuotkhung'];
            //$model->pcct=$inputs['pcct'];
            //$model->pckct=$inputs['pckct'];
            $model->pck=$inputs['pck'];
            $model->pccv=$inputs['pccv'];
            $model->pckv=$inputs['pckv'];
            $model->pcth=$inputs['pcth'];
            //$model->pcdd=$inputs['pcdd'];
            $model->pcdh=$inputs['pcdh'];
            $model->pcld=$inputs['pcld'];
            //$model->pcdbqh=$inputs['pcdbqh'];
            $model->pcudn=$inputs['pcudn'];
            $model->pctn=$inputs['pctn'];
            $model->pctnn=$inputs['pctnn'];
            $model->pcdbn=$inputs['pcdbn'];
            $model->pcvk=$inputs['pcvk'];
            $model->pckn=$inputs['pckn'];
            //$model->pcdang=$inputs['pcdang'];
            //$model->pccovu=$inputs['pccovu'];
            //$model->pclt=$inputs['pclt'];
            //$model->pcd=$inputs['pcd'];
            //$model->pctr=$inputs['pctr'];
            $model->tonghs=$inputs['tonghs'];
            
            $model->ttl=getDbl($inputs['ttl']);
            $model->giaml=getDbl($inputs['giaml']);
            $model->bhct=getDbl($inputs['bhct']);
            
            $model->stbhxh=getDbl($inputs['stbhxh']);
            $model->stbhyt=getDbl($inputs['stbhyt']);
            $model->stkpcd=getDbl($inputs['stkpcd']);
            $model->stbhtn=getDbl($inputs['stbhtn']);
            $model->ttbh=getDbl($inputs['ttbh']);
            
            $model->luongtn=getDbl($inputs['luongtn']);
            
            $model->save();

            return redirect('/chuc_nang/bang_luong/maso='.$mabl);


        } else
            return view('errors.notlogin');
    }

    function inbangluong($mabl){
        if (Session::has('admin')) {
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();

            $model=DB::table('bangluong_ct')
                ->join('dmchucvucq', 'bangluong_ct.macvcq', '=', 'dmchucvucq.macvcq')
                ->select('bangluong_ct.*', 'dmchucvucq.sapxep')
                ->where('bangluong_ct.mabl',$mabl)
                ->orderby('dmchucvucq.sapxep')
                ->get();

            $m_bl=bangluong::select('thang','nam')->where('mabl',$mabl)->first();
            $dmchucvucq=dmchucvucq::all('tencv', 'macvcq')->toArray();
            foreach($model as $hs){
                $hs->tencv=getInfoChucVuCQ($hs,$dmchucvucq);
            }
            $thongtin=array('nguoilap'=>session('admin')->name,
                'thang'=>$m_bl->thang,
                'nam'=>$m_bl->nam);
            return view('reports.bangluong.maubangluong')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Bảng lương chi tiết');
        } else
            return view('errors.notlogin');
    }
}
