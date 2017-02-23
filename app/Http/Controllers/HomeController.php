<?php

namespace App\Http\Controllers;

use App\DnDvLt;
use App\DnDvLtReg;
use App\DonViDvVt;
use App\DonViDvVtReg;
use App\GeneralConfigs;
use App\hosocanbo;
use App\Register;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {
        if (Session::has('admin')) {
            if(session('admin')->username == 'sa')
                return redirect('cau_hinh_he_thong');
            else{
                $model=hosocanbo::join('hosotinhtrangct', 'hosocanbo.macanbo', '=', 'hosotinhtrangct.macanbo')
                    ->select('hosocanbo.macanbo','hosocanbo.tencanbo','hosocanbo.ngaysinh','hosocanbo.gioitinh',
                        'hosotinhtrangct.tenct','hosocanbo.sunghiep','hosocanbo.ngayvd','hosocanbo.ngayden','hosocanbo.msngbac')
                    ->where('hosotinhtrangct.hientai','1')
                    ->where('hosotinhtrangct.phanloaict','Đang công tác')
                    ->where('hosocanbo.madv',session('admin')->maxa)
                    ->get();

                $a_ketqua=array();
                $a_ketqua['congchuc']=$model->where('sunghiep','Công chức')->count();
                $a_ketqua['vienchuc']=$model->where('sunghiep','Viên chức')->count();
                $a_ketqua['tapsu']=$model->where('tenct','Tập sự')->count();
                $a_ketqua['chinhthuc']=$model->count()-$a_ketqua['tapsu'];
                $a_ketqua['dv_nam']=$model->where('ngayvd','','0000-00-00')
                    ->where('ngayvd','<>',null)
                    ->where('gioitinh','Nam')->count();
                $a_ketqua['dv_nu']=$model->where('ngayvd','','0000-00-00')
                    ->where('ngayvd','<>',null)
                    ->where('gioitinh','Nữ')->count();
                $a_ketqua['gt_nam']=$model->where('gioitinh','Nam')->count();
                $a_ketqua['gt_nu']=$model->where('gioitinh','Nữ')->count();

                $date = getdate();
                $gen=getGeneralConfigs();
                foreach ($model as $ct){
                    $dt = date_create($ct->ngaysinh);
                    $ct->thang=date_format($dt,'m');
                    $ct->nam=$ct->gioitinh=='Nam'?date_format($dt,'Y')+$gen['tuoinam']:date_format($dt,'Y')+$gen['tuoinu'];

                    $dt_luong = date_create($ct->ngayden);
                    $ct->nam_luong=date_format($dt_luong,'Y');
                }
                $m_nghihuu= $model->where('nam',$date['year']);
                $m_nangluong = $model->where('nam_luong',$date['year']);
                $m_sinhnhat=$model->where('thang',$date['mon']);
                $m_hettapsu= $model->where('tenct','Hết tập sự');//Chưa làm

                return view('dashboard')
                    ->with('m_nangluong',$m_nangluong)
                    ->with('m_nghihuu',$m_nghihuu)
                    ->with('m_sinhnhat',$m_sinhnhat)
                    ->with('m_hettapsu',$m_hettapsu)
                    ->with('a_ketqua',$a_ketqua)
                    ->with('pageTitle','Tổng quan');
            }

        }else
            return view('welcome');

    }

    public function setting()
    {
        if (Session::has('admin')) {
            if(session('admin')->sadmin == 'ssa')
            {
                $model = GeneralConfigs::first();
                $setting = $model->setting;

                return view('system.general.setting')
                    ->with('setting',json_decode($setting))
                    ->with('pageTitle','Cấu hình chức năng chương trình');
            }

        }else
            return view('welcome');
    }

    public function upsetting(Request $request)
    {
        if (Session::has('admin')) {
            $update = $request->all();

            $model = GeneralConfigs::first();

            $update['roles'] = isset($update['roles']) ? $update['roles'] : null;
            $model->setting = json_encode($update['roles']);
            $model->save();

            return redirect('cau_hinh_he_thong');
        }else
            return view('welcome');
    }


}
