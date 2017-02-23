<?php

namespace App\Http\Controllers;

use App\CsKdDvLt;
use App\DnDvLt;
use App\KkGDvLt;
use App\KkGDvLtCt;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ReportsController extends Controller
{
    public function kkgdvlt($mahs){
        if (Session::has('admin')) {
            //dd($id);
            $modelkk = KkGDvLt::where('mahs',$mahs)->first();
            //dd($modelkk);
            $modeldn = DnDvLt::where('masothue',$modelkk->masothue)
                ->first();
            //dd($modelkk->masothue);
            $modelcskd = CsKdDvLt::where('macskd',$modelkk->macskd)
                ->first();
            $modelkkct = KkGDvLtCt::where('mahs',$modelkk->mahs)
                ->get();

            return view('reports.kkgdvlt.print')
                ->with('modelkk',$modelkk)
                ->with('modeldn',$modeldn)
                ->with('modelcskd',$modelcskd)
                ->with('modelkkct',$modelkkct)
                ->with('pageTitle','Kê khai giá dịch vụ lưu trú');

        }else
            return view('errors.notlogin');
    }
    public function dvltbc1(Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            //dd($input);
            $model = KkGDvLt::where('trangthai','Chờ duyệt')
                ->OrWhere('trangthai','Duyệt')
                ->whereBetween('ngaychuyen', [$input['ngaytu'], $input['ngayden']])
                ->get();
            //dd($model);
            foreach($model as $kk){
                $modelcskd = CsKdDvLt::where('macskd',$kk->macskd)->first();
                $kk->tencskd = $modelcskd->tencskd;
                $kk->diachikd = $modelcskd->diachikd;
                $kk->telkd = $modelcskd->telkd;
                $kk->loaihang = $modelcskd->loaihang;

            }

            return view('reports.kkgdvlt.bcth.BC1')
                ->with('input',$input)
                ->with('model',$model)
                ->with('pageTitle','Báo cáo thống kê các đơn vị kê khai giá trong khoảng thời gian');
        }else
            return view('errors.notlogin');
    }
    public function dvltbc2(Request $request){
        if (Session::has('admin')) {
            $input = $request->all();
            //dd($input);
            $model = KkGDvLt::where('trangthai','Chờ duyệt')
                ->OrWhere('trangthai','Duyệt')
                ->whereBetween('ngaychuyen', [$input['ngaytu'], $input['ngayden']])
                ->get();
            //dd($model);
            $mahss = '';
            foreach($model as $kk){
                $modelcskd = CsKdDvLt::where('macskd',$kk->macskd)->first();
                $kk->tencskd = $modelcskd->tencskd;
                $kk->diachikd = $modelcskd->diachikd;
                $kk->telkd = $modelcskd->telkd;
                $kk->loaihang = $modelcskd->loaihang;
                $mahss = $mahss.$kk->mahs.',';

            }

            $modelctkk = KkGDvLtCt::whereIn('mahs',explode(',',$mahss))
                ->get();


            return view('reports.kkgdvlt.bcth.BC2')
                ->with('input',$input)
                ->with('model',$model)
                ->with('modelctkk',$modelctkk)
                ->with('pageTitle','Báo cáo thống kê các đơn vị kê khai giá trong khoảng thời gian');
        }else
            return view('errors.notlogin');
    }
}
