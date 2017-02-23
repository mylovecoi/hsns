<?php

namespace App\Http\Controllers;

use App\dmchucvucq;
use App\dmdonvi;
use App\dmphongban;
use App\phanloaingach;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\hosocanbo;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class baocaoController extends Controller
{
    //<editor-fold desc="Mẫu báo cáo đơn vị">
    function donvi() {
        if (Session::has('admin')) {
            return view('reports.donvi.index')
                ->with('furl','/bao_cao/don_vi/')
                ->with('pageTitle','Báo cáo số lượng, chất lượng cán bộ');
        } else
            return view('errors.notlogin');
    }

    function BcSLCBm1(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $data=$this->getDS($inputs);

            $model=a_unique(a_split($data,array('mapb','macvcq')));
            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            for($i=0;$i<count($model);$i++){
                $hopdong=count(a_getelement($data,array_merge($model[$i],array('kieuct' => 'Hợp đồng'))));
                $bienche=count(a_getelement($data,array_merge($model[$i],array('kieuct' => 'Biên chế'))));
                $tapsu=count(a_getelement($data,array_merge($model[$i],array('tenct' => 'Tập sự'))));
                $model[$i]=array_merge($model[$i],array('hopdong'=>$hopdong,
                    'bienche'=>$bienche-$tapsu,
                    'tapsu'=>$tapsu,
                    'tongcong'=>$bienche+$hopdong,
                    'tencv'=>$m_dmcv[$model[$i]['macvcq']]));
            }

            $m_pb=getPhongBanX()->toarray();
            for($i=0;$i<count($m_pb);$i++){
                $pb=a_getelement($model,array('mapb'=>$m_pb[$i]['mapb']));
                $m_pb[$i]= array_merge($m_pb[$i],array('hopdong'=>array_sum(array_column($pb,'hopdong')),
                    'bienche'=>array_sum(array_column($pb,'bienche')),
                    'tapsu'=>array_sum(array_column($pb,'tapsu'))));
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.donvi.BcSLCBm1')
                ->with('m_pb',$m_pb)
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo đội ngũ cán bộ');
        } else
            return view('errors.notlogin');
    }

    function BcSLCBm2(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $data=$this->getDS($inputs);
            $ngaybc=$inputs['ngaybaocao'];

            $model=array(
                array('nhom'=>'1','tt'=>'1','noidung'=>'Dưới 30'),
                array('nhom'=>'2','tt'=>'2', 'noidung'=>'Từ 31 đến 35'),
                array('nhom'=>'3','tt'=>'3', 'noidung'=>'Từ 36 đến 40'),
                array('nhom'=>'4','tt'=>'4', 'noidung'=>'Từ 41 đến 45'),
                array('nhom'=>'5','tt'=>'5', 'noidung'=>'Từ 46 đến 50'),
                array('nhom'=>'6','tt'=>'6', 'noidung'=>'Trên 50 đến 60'),
                array('nhom'=>'7','tt'=>'', 'noidung'=>'Trong đó'),
                array('nhom'=>'8','tt'=>'', 'noidung'=>'   Nam: 59'),
                array('nhom'=>'9','tt'=>'', 'noidung'=>'   Nữ: 54'),
                array('nhom'=>'10','tt'=>'7', 'noidung'=>'Trên tuổi nghỉ hưu') //Trường hợp này dưới là tuổi nghỉ hưu nữ, trên là tuổi nghỉ hưu nam
            );
            //Tính tuổi từng cán bộ
            for($i=0;$i<count($data);$i++){
                $tuoi = $this->getage($data[$i]['ngaysinh'],$ngaybc);
                $nhom = $this->getnhom($tuoi,$data[$i]['gioitinh'] );
                $data[$i]=array_merge($data[$i],array('tuoi'=>$tuoi,'nhom'=>$nhom));
            }

            for($i=0;$i<count($model);$i++){
                if($model[$i]['nhom']==6){
                    $hopdong=count(a_getelement($data,array('kieuct' => 'Hợp đồng','nhom'=>8)))
                        +count(a_getelement($data,array('kieuct' => 'Hợp đồng','nhom'=>9)));
                    $bienche=count(a_getelement($data,array('kieuct' => 'Biên chế','nhom'=>8)))
                        +count(a_getelement($data,array('kieuct' => 'Biên chế','nhom'=>9)));
                    $tapsu=count(a_getelement($data,array('tenct' => 'Tập sự','nhom'=>8)))
                        +count(a_getelement($data,array('tenct' => 'Tập sự','nhom'=>9)));
                }else{
                    $hopdong=count(a_getelement($data,array('kieuct' => 'Hợp đồng','nhom'=>$model[$i]['nhom'])));
                    $bienche=count(a_getelement($data,array('kieuct' => 'Biên chế','nhom'=>$model[$i]['nhom'])));
                    $tapsu=count(a_getelement($data,array('tenct' => 'Tập sự','nhom'=>$model[$i]['nhom'])));
                }

                $model[$i]=array_merge($model[$i],array('hopdong'=>$hopdong,
                    'bienche'=>$bienche-$tapsu,
                    'tapsu'=>$tapsu,
                    'tongcong'=>$bienche+$hopdong));
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.donvi.BcSLCBm2')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo đội ngũ cán bộ');
        } else {return view('errors.notlogin');}
    }

    function BcSLCBm3(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $data=$this->getDS($inputs);

            //dd($data);
            $model=a_unique(a_split($data,array('macvcq')));

            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            for($i=0;$i<count($model);$i++){
                $tong=count(a_getelement($data,$model[$i]));
                $nu=count(a_getelement($data,array_merge($model[$i],array('gioitinh' => 'Nữ'))));
                $kinh=count(a_getelement($data,array_merge($model[$i],array('dantoc' => 'kinh'))));
                $khongdv=count(a_getelement($data,array_merge($model[$i],array('ngayvdct' => '0000-00-00'))));
                $nukhongdv=count(a_getelement($data,array_merge($model[$i],array('gioitinh' => 'Nữ','ngayvdct' => '0000-00-00'))));
                $trendh=count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'tiến sĩ'))))
                        + count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'thạc sĩ'))));
                $daihoc=count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'đại học'))));
                $caodang=count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'cao đẳng'))));
                $trungcap=count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'trung cấp'))));
                $model[$i]=array_merge($model[$i],array('tong'=>$tong,
                    'nu'=>$nu,
                    'thieuso'=>$tong-$kinh,
                    'dangvien'=>$tong-$khongdv,
                    'dangviennu'=>$nu-$nukhongdv,
                    'trendh'=>$trendh,
                    'daihoc'=>$daihoc,
                    'caodang'=>$caodang,
                    'trungcap'=>$trungcap,
                    'khac'=>$tong-$trendh-$daihoc-$caodang-$trungcap,
                    'tencv'=>$m_dmcv[$model[$i]['macvcq']]));
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.donvi.BcSLCBm3')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo đội ngũ cán bộ');
        } else
            return view('errors.notlogin');
    }

    function BcCLDangVien(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $data=$this->getDSDV($inputs);
            $ngaybc=$inputs['ngaybaocao'];

            for($i=0;$i<count($data);$i++){
                $tuoi = $this->getage($data[$i]['ngaysinh'],$ngaybc);
                $tuoidang = $this->getage($data[$i]['ngayvdct'],$ngaybc);
                $nhom = $this->getnhomtuoi($tuoi);
                $nhomdang = $this->getnhomdv($tuoidang);
                $data[$i]=array_merge($data[$i],array('tuoi'=>$tuoi,'nhom'=>$nhom,'tuoidang'=>$tuoidang,'nhomdang'=>$nhomdang));
            }

            //dd($data);
            $model=a_unique(a_split($data,array('macvcq')));

            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            for($i=0;$i<count($model);$i++){
                $tong=count(a_getelement($data,$model[$i]));
                $nu=count(a_getelement($data,array_merge($model[$i],array('gioitinh' => 'Nữ'))));
                $kinh=count(a_getelement($data,array_merge($model[$i],array('dantoc' => 'kinh'))));

                $trendh=count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'tiến sĩ'))))
                    + count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'thạc sĩ'))));
                $daihoc=count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'đại học'))));
                $caodang=count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'cao đẳng'))));
                $trungcap=count(a_getelement($data,array_merge($model[$i],array('tdcm' => 'trung cấp'))));

                $d31=count(a_getelement($data,array_merge($model[$i],array('nhom' => 1))));
                $d40=count(a_getelement($data,array_merge($model[$i],array('nhom' => 2))));
                $d50=count(a_getelement($data,array_merge($model[$i],array('nhom' => 3))));
                $d55=count(a_getelement($data,array_merge($model[$i],array('nhom' => 4))));

                $dv5=count(a_getelement($data,array_merge($model[$i],array('nhomdang' => 1))));
                $dv10=count(a_getelement($data,array_merge($model[$i],array('nhomdang' => 2))));
                $dv20=count(a_getelement($data,array_merge($model[$i],array('nhomdang' => 3))));
                $dv30=count(a_getelement($data,array_merge($model[$i],array('nhomdang' => 4))));

                $model[$i]=array_merge($model[$i],array('tong'=>$tong,
                    'nu'=>$nu,
                    'thieuso'=>$tong-$kinh,
                    'trendh'=>$trendh,
                    'daihoc'=>$daihoc,
                    'caodang'=>$caodang,
                    'trungcap'=>$trungcap,
                    'khac'=>$tong-$trendh-$daihoc-$caodang-$trungcap,
                    'd31'=>$d31,
                    'd40'=>$d40,
                    'd50'=>$d50,
                    'd55'=>$d55,
                    'dk'=>$tong-$d31-$d40-$d50-$d55,
                    'dv5'=>$dv5,
                    'dv10'=>$dv10,
                    'dv20'=>$dv20,
                    'dv30'=>$dv30,
                    'dvk'=>$tong-$dv5-$dv10-$dv20-$dv30,
                    'tencv'=>$m_dmcv[$model[$i]['macvcq']]));
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.donvi.BcCLDangVien')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo chất lượng đảng viên');
        } else
            return view('errors.notlogin');
    }
    //</editor-fold>

    //<editor-fold desc="Mẫu báo cáo theo thông tư, quyết định">
    function mauchuan() {
        if (Session::has('admin')) {
            $m_pb=dmphongban::select('mapb','tenpb')->orderby('sapxep')->get();
            return view('reports.mauchuan.index')
                ->with('furl','/bao_cao/mau_chuan/')
                ->with('m_pb',$m_pb)
                ->with('pageTitle','Báo cáo theo thông tư, quyết định');
        } else
            return view('errors.notlogin');
    }

    function BcDSTuyenDungTT08(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model=$this->getDSChuan($inputs);

            //$model=a_unique(a_split($data,array('mapb','macvcq')));
            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            $m_dmpb=array_column((dmphongban::select('mapb','tenpb')->get()->toarray()),'tenpb', 'mapb');
            for($i=0;$i<count($model);$i++){
                $nsnam=0;
                $nsnu=0;
                $ngaysinh=new Carbon($model[$i]['ngaysinh']);
                if($model[$i]['gioitinh']=='Nam'){
                    $nsnam=$ngaysinh->year;
                }else{
                    $nsnu=$ngaysinh->year;
                }
                $model[$i]=array_merge($model[$i],array('tenpb'=>$m_dmpb[$model[$i]['mapb']],
                                        'tencv'=>$m_dmcv[$model[$i]['macvcq']],
                                        'nsnam'=>$nsnam,'nsnu'=>$nsnu));
            }

            $thongtin=array('ngaytu'=>$inputs['ngaytu'],
                'ngayden'=>$inputs['ngayden'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.mauchuan.BcDSTuyenDungTT08')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo danh sách cán bộ tuyển dụng');
        } else
            return view('errors.notlogin');
    }

    function BcDSTuyenDungTT10(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model=$this->getDSChuan($inputs);

            //$model=a_unique(a_split($data,array('mapb','macvcq')));
            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            $m_dmpb=array_column((dmphongban::select('mapb','tenpb')->get()->toarray()),'tenpb', 'mapb');
            for($i=0;$i<count($model);$i++){
                $nsnam=0;
                $nsnu=0;
                $xettuyen='';
                $thituyen='';
                if(strpos(strtolower($model[$i]['httd']),strtolower('thi tuyển'))!==false){
                    $thituyen=$model[$i]['ngaybc'];
                }else{
                    $xettuyen=$model[$i]['ngaybc'];
                }

                $ngaysinh=new Carbon($model[$i]['ngaysinh']);
                if($model[$i]['gioitinh']=='Nam'){
                    $nsnam=$ngaysinh->year;
                }else{
                    $nsnu=$ngaysinh->year;
                }
                $model[$i]=array_merge($model[$i],array('tenpb'=>$m_dmpb[$model[$i]['mapb']],
                    'tencv'=>$m_dmcv[$model[$i]['macvcq']],
                    'nsnam'=>$nsnam,'nsnu'=>$nsnu,
                    'thituyen'=>$thituyen,'xettuyen'=>$xettuyen));
            }

            $thongtin=array('ngaytu'=>$inputs['ngaytu'],
                'ngayden'=>$inputs['ngayden'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.mauchuan.BcDSTuyenDungTT10')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo danh sách cán bộ tuyển dụng');
        } else
            return view('errors.notlogin');
    }

    function BcDSCC(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model=$this->getDSth($inputs);
            //dd($model);
            //$model=a_unique(a_split($data,array('mapb','macvcq')));
            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            $m_dmpb=array_column((dmphongban::select('mapb','tenpb')->get()->toarray()),'tenpb', 'mapb');
            for($i=0;$i<count($model);$i++){
                if($model[$i]['ngayvdct']>$inputs['ngaybaocao']){
                    $model[$i]['ngayvdct']='0000-00-00';
                }
                $model[$i]=array_merge($model[$i],array('tenpb'=>$m_dmpb[$model[$i]['mapb']],
                    'tencv'=>$m_dmcv[$model[$i]['macvcq']]),$this->getChuyenMon($model[$i]['tdcm']),
                    $this->getTinHoc($model[$i]['trinhdoth']),$this->getChinhTri($model[$i]['llct']),
                    $this->getNgoaiNgu($model[$i]['trinhdonn'],$model[$i]['ngoaingu']),
                    array('dv'=>$model[$i]['ngayvdct']=='0000-00-00'?0:1,'gt'=>$model[$i]['gioitinh']=='Nam'?0:1,'dtin'=>strpos(strtolower($model[$i]['dantoc']),strtolower('kinh'))!==false?0:1));
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.mauchuan.BcDSCC')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo danh sách cán bộ tuyển dụng');
        } else
            return view('errors.notlogin');
    }

    function BcDSVC(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model=$this->getDSth($inputs,'Viên chức');

            //$model=a_unique(a_split($data,array('mapb','macvcq')));
            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            $m_dmpb=array_column((dmphongban::select('mapb','tenpb')->get()->toarray()),'tenpb', 'mapb');
            for($i=0;$i<count($model);$i++){
                $model[$i]=array_merge($model[$i],array('tenpb'=>$m_dmpb[$model[$i]['mapb']],
                    'tencv'=>$m_dmcv[$model[$i]['macvcq']]),$this->getChuyenMon($model[$i]['tdcm']),
                    $this->getTinHoc($model[$i]['trinhdoth']),$this->getChinhTri($model[$i]['llct']),
                    $this->getNgoaiNgu($model[$i]['trinhdonn'],$model[$i]['ngoaingu']),
                    array('dv'=>$model[$i]['ngayvdct']=='0000-00-00'?0:1,'gt'=>$model[$i]['gioitinh']=='Nam'?0:1,'dtin'=>strpos(strtolower($model[$i]['dantoc']),strtolower('kinh'))!==false?0:1));
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.mauchuan.BcDSVC')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo danh sách cán bộ tuyển dụng');
        } else
            return view('errors.notlogin');
    }

    function BcSLCLCC(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $data=$this->getDSth($inputs,'Công chức');
            $m_dmpb=array_column((dmphongban::select('mapb','tenpb')->get()->toarray()),'tenpb', 'mapb');
            $m_pl=array_column((phanloaingach::select('phanloai','msngbac')->get()->toarray()),'phanloai','msngbac');
            $ngaybc=$inputs['ngaybaocao'];

            for($i=0;$i<count($data);$i++){
                $tuoi = $this->getage($data[$i]['ngaysinh'],$ngaybc);
                $nhom = $this->getnhom($tuoi,$data[$i]['gioitinh'] );

                $data[$i]=array_merge($data[$i],$this->getChuyenMon($data[$i]['tdcm']),
                    $this->getTinHoc($data[$i]['trinhdoth']),$this->getChinhTri($data[$i]['llct']),
                    $this->getNgoaiNgu($data[$i]['trinhdonn'],$data[$i]['ngoaingu']),
                    $this->getLinhVuc($data[$i]['lvhd']),$this->getNgach($m_pl[$data[$i]['msngbac']]),
                    $this->getTuoi($nhom),
                    array('dv'=>$data[$i]['ngayvdct']=='0000-00-00'?0:1,
                            'gt'=>$data[$i]['gioitinh']=='Nam'?0:1,
                            'dtin'=>strpos(strtolower($data[$i]['dantoc']),strtolower('kinh'))!==false?0:1,
                            'nhomtuoi'=>$nhom));
            }

            $model=a_unique(a_split($data,array('mapb')));

            for($i=0;$i<count($model);$i++){
                $dt=a_getelement($data,$model[$i]);

                $solieu=array(
                    'tong'=>count($dt),
                    'ts'=>array_sum(array_column($dt,'ts')),
                    'ths'=>array_sum(array_column($dt,'ths')),
                    'dh'=>array_sum(array_column($dt,'dh')),
                    'cl'=>array_sum(array_column($dt,'cl'))
                        + array_sum(array_column($dt,'cd'))
                        + array_sum(array_column($dt,'th')),
    
                    'ct_cc'=>array_sum(array_column($dt,'ct_cc')),
                    'ct_tc'=>array_sum(array_column($dt,'ct_tc')),
    
                    'th_dh'=>array_sum(array_column($dt,'th_dh')),
                    'th_cc'=>array_sum(array_column($dt,'th_cc')),
    
                    'nn_dh'=>array_sum(array_column($dt,'nn_dh')),
                    'nn_cc'=>array_sum(array_column($dt,'nn_cc')),
                    'kh_dh'=>array_sum(array_column($dt,'kh_dh')),
                    'kh_cc'=>array_sum(array_column($dt,'kh_cc')),
    
                    'lv_gd'=>array_sum(array_column($dt,'lv_gd')),
                    'lv_yt'=>array_sum(array_column($dt,'lv_yt')),
                    'lv_nn'=>array_sum(array_column($dt,'lv_nn')),
                    'lv_vh'=>array_sum(array_column($dt,'lv_vh')),
                    'lv_kh'=>array_sum(array_column($dt,'lv_kh')),
    
                    'nb_cvcc'=>array_sum(array_column($dt,'nb_cvcc')),
                    'nb_cvc'=>array_sum(array_column($dt,'nb_cvc')),
                    'nb_cv'=>array_sum(array_column($dt,'nb_cv')),
                    'nb_cs'=>array_sum(array_column($dt,'nb_cs')),
                    'nb_cl'=>array_sum(array_column($dt,'nb_cl')),
    
                    't_d30'=>array_sum(array_column($dt,'t_d30')),
                    't_d50'=>array_sum(array_column($dt,'t_d50')),                
                    't_t50nam'=>array_sum(array_column($dt,'t_t50nam')),
                    't_t50nu'=>array_sum(array_column($dt,'t_t50nu')),                
                    't_nh'=>array_sum(array_column($dt,'t_nh')),
    
                    'dv'=>array_sum(array_column($dt,'dv')),
                    'gt'=>array_sum(array_column($dt,'gt')),
                    'dtin'=>array_sum(array_column($dt,'dtin'))
                );
                $model[$i]=array_merge($model[$i],array('tenpb'=>$m_dmpb[$data[$i]['mapb']]),$solieu);
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.mauchuan.BcSLCLCC')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo danh sách cán bộ tuyển dụng');
        } else
            return view('errors.notlogin');
    }

    function BcSLCLVC(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $data=$this->getDSth($inputs,'Viên chức');
            $m_dmpb=array_column((dmphongban::select('mapb','tenpb')->get()->toarray()),'tenpb', 'mapb');
            $m_pl=array_column((phanloaingach::select('phanloai','msngbac')->get()->toarray()),'phanloai','msngbac');
            $ngaybc=$inputs['ngaybaocao'];

            for($i=0;$i<count($data);$i++){
                $tuoi = $this->getage($data[$i]['ngaysinh'],$ngaybc);
                $nhom = $this->getnhom($tuoi,$data[$i]['gioitinh'] );

                $data[$i]=array_merge($data[$i],$this->getChuyenMon($data[$i]['tdcm']),
                    $this->getTinHoc($data[$i]['trinhdoth']),$this->getChinhTri($data[$i]['llct']),
                    $this->getNgoaiNgu($data[$i]['trinhdonn'],$data[$i]['ngoaingu']),
                    $this->getLinhVuc($data[$i]['lvhd']),$this->getNgach($m_pl[$data[$i]['msngbac']]),
                    $this->getTuoi($nhom),
                    array('dv'=>$data[$i]['ngayvdct']=='0000-00-00'?0:1,
                        'gt'=>$data[$i]['gioitinh']=='Nam'?0:1,
                        'dtin'=>strpos(strtolower($data[$i]['dantoc']),strtolower('kinh'))!==false?0:1,
                        'nhomtuoi'=>$nhom));
            }

            $model=a_unique(a_split($data,array('mapb')));

            for($i=0;$i<count($model);$i++){
                $dt=a_getelement($data,$model[$i]);

                $solieu=array(
                    'tong'=>count($dt),
                    'ts'=>array_sum(array_column($dt,'ts')),
                    'ths'=>array_sum(array_column($dt,'ths')),
                    'dh'=>array_sum(array_column($dt,'dh')),
                    'cl'=>array_sum(array_column($dt,'cl'))
                        + array_sum(array_column($dt,'cd'))
                        + array_sum(array_column($dt,'th')),

                    'ct_cc'=>array_sum(array_column($dt,'ct_cc')),
                    'ct_tc'=>array_sum(array_column($dt,'ct_tc')),

                    'th_dh'=>array_sum(array_column($dt,'th_dh')),
                    'th_cc'=>array_sum(array_column($dt,'th_cc')),

                    'nn_dh'=>array_sum(array_column($dt,'nn_dh')),
                    'nn_cc'=>array_sum(array_column($dt,'nn_cc')),
                    'kh_dh'=>array_sum(array_column($dt,'kh_dh')),
                    'kh_cc'=>array_sum(array_column($dt,'kh_cc')),

                    'lv_gd'=>array_sum(array_column($dt,'lv_gd')),
                    'lv_yt'=>array_sum(array_column($dt,'lv_yt')),
                    'lv_nn'=>array_sum(array_column($dt,'lv_nn')),
                    'lv_vh'=>array_sum(array_column($dt,'lv_vh')),
                    'lv_kh'=>array_sum(array_column($dt,'lv_kh')),

                    'nb_cvcc'=>array_sum(array_column($dt,'nb_cvcc')),
                    'nb_cvc'=>array_sum(array_column($dt,'nb_cvc')),
                    'nb_cv'=>array_sum(array_column($dt,'nb_cv')),
                    'nb_cs'=>array_sum(array_column($dt,'nb_cs')),
                    'nb_cl'=>array_sum(array_column($dt,'nb_cl')),

                    't_d30'=>array_sum(array_column($dt,'t_d30')),
                    't_d50'=>array_sum(array_column($dt,'t_d50')),
                    't_t50nam'=>array_sum(array_column($dt,'t_t50nam')),
                    't_t50nu'=>array_sum(array_column($dt,'t_t50nu')),
                    't_nh'=>array_sum(array_column($dt,'t_nh')),

                    'dv'=>array_sum(array_column($dt,'dv')),
                    'gt'=>array_sum(array_column($dt,'gt')),
                    'dtin'=>array_sum(array_column($dt,'dtin'))
                );
                $model[$i]=array_merge($model[$i],array('tenpb'=>$m_dmpb[$data[$i]['mapb']]),$solieu);
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.mauchuan.BcSLCLVC')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo danh sách cán bộ tuyển dụng');
        } else
            return view('errors.notlogin');
    }

    function BcDSCCCVCC(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model=$this->getDSCVCCth($inputs);
            //dd($model);
            //$model=a_unique(a_split($data,array('mapb','macvcq')));
            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            $m_dmpb=array_column((dmphongban::select('mapb','tenpb')->get()->toarray()),'tenpb', 'mapb');
            for($i=0;$i<count($model);$i++){
                if($model[$i]['ngayvdct']>$inputs['ngaybaocao']){
                    $model[$i]['ngayvdct']='0000-00-00';
                }
                $model[$i]=array_merge($model[$i],array('tenpb'=>$m_dmpb[$model[$i]['mapb']],
                    'tencv'=>$m_dmcv[$model[$i]['macvcq']]),$this->getChuyenMon($model[$i]['tdcm']),
                    $this->getTinHoc($model[$i]['trinhdoth']),$this->getChinhTri($model[$i]['llct']),
                    $this->getNgoaiNgu($model[$i]['trinhdonn'],$model[$i]['ngoaingu']),
                    array('dv'=>$model[$i]['ngayvdct']=='0000-00-00'?0:1,'gt'=>$model[$i]['gioitinh']=='Nam'?0:1,'dtin'=>strpos(strtolower($model[$i]['dantoc']),strtolower('kinh'))!==false?0:1));
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.mauchuan.BcDSCCCVCC')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo danh sách cán bộ tuyển dụng');
        } else
            return view('errors.notlogin');
    }

    function BcDSVCCVCC(Request $request) {
        if (Session::has('admin')) {
            $inputs = $request->all();
            $model=$this->getDSCVCCth($inputs,'Viên chức');
            //dd($model);
            //$model=a_unique(a_split($data,array('mapb','macvcq')));
            $m_dmcv=array_column((dmchucvucq::select('macvcq','tencv')->get()->toarray()),'tencv', 'macvcq');
            $m_dmpb=array_column((dmphongban::select('mapb','tenpb')->get()->toarray()),'tenpb', 'mapb');
            for($i=0;$i<count($model);$i++){
                if($model[$i]['ngayvdct']>$inputs['ngaybaocao']){
                    $model[$i]['ngayvdct']='0000-00-00';
                }
                $model[$i]=array_merge($model[$i],array('tenpb'=>$m_dmpb[$model[$i]['mapb']],
                    'tencv'=>$m_dmcv[$model[$i]['macvcq']]),$this->getChuyenMon($model[$i]['tdcm']),
                    $this->getTinHoc($model[$i]['trinhdoth']),$this->getChinhTri($model[$i]['llct']),
                    $this->getNgoaiNgu($model[$i]['trinhdonn'],$model[$i]['ngoaingu']),
                    array('dv'=>$model[$i]['ngayvdct']=='0000-00-00'?0:1,'gt'=>$model[$i]['gioitinh']=='Nam'?0:1,'dtin'=>strpos(strtolower($model[$i]['dantoc']),strtolower('kinh'))!==false?0:1));
            }

            $thongtin=array('ngaybaocao'=>$inputs['ngaybaocao'],
                'nguoilap'=>session('admin')->name);
            $m_dv=dmdonvi::where('madv',session('admin')->maxa)->first();
            //dd($model);

            return view('reports.mauchuan.BcDSVCCVCC')
                ->with('model',$model)
                ->with('m_dv',$m_dv)
                ->with('thongtin',$thongtin)
                ->with('pageTitle','Báo cáo danh sách cán bộ tuyển dụng');
        } else
            return view('errors.notlogin');
    }
    //</editor-fold>

    //<editor-fold desc="Các hàm lấy dữ liệu">
    function getDSChuan($inputs){
        $data=hosocanbo::join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
            ->join('dmchucvucq', 'dmchucvucq.macvcq', '=', 'hosocanbo.macvcq')
            ->select('hosocanbo.tencanbo','hosocanbo.macanbo','hosocanbo.mapb','hosocanbo.macvcq','hosocanbo.ngaysinh'
                ,'hosocanbo.gioitinh','hosocanbo.ngaybc','hosocanbo.tdcm','hosocanbo.msngbac','hosocanbo.heso','hosocanbo.httd')
            ->whereBetween ('hosocanbo.ngaybc',[$inputs['ngaytu'],$inputs['ngayden']])
            ->where('hosocanbo.madv',session('admin')->maxa)
            ->where('hosotinhtrangct.phanloaict','Like','Đang công tác')
            ->where('hosocanbo.mapb','Like',$inputs['phongban'].'%')
            ->orderby('dmchucvucq.sapxep')
            ->get()->toarray();
        return $data;
    }

    function getDS($inputs){
        if(isset($inputs['dangct'])){
            $data=hosocanbo::join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
                ->join('dmchucvucq', 'dmchucvucq.macvcq', '=', 'hosocanbo.macvcq')
                ->select('hosocanbo.macanbo','hosotinhtrangct.kieuct','hosotinhtrangct.tenct','hosocanbo.mapb','hosocanbo.macvcq','hosocanbo.ngaysinh'
                    ,'hosocanbo.gioitinh','hosocanbo.ngayvdct','hosocanbo.dantoc','hosocanbo.tdcm')
                ->where('hosocanbo.ngaybc','<=',$inputs['ngaybaocao'])
                ->where('hosotinhtrangct.phanloaict','Like','Đang công tác%')
                ->orderby('dmchucvucq.sapxep')
                ->get()->toarray();
        }else{
            $data=hosocanbo::join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
                ->join('dmchucvucq', 'dmchucvucq.macvcq', '=', 'hosocanbo.macvcq')
                ->select('hosocanbo.macanbo','hosotinhtrangct.kieuct','hosotinhtrangct.tenct','hosocanbo.mapb','hosocanbo.macvcq','hosocanbo.ngaysinh'
                    ,'hosocanbo.gioitinh','hosocanbo.ngayvdct','hosocanbo.dantoc','hosocanbo.tdcm')
                ->where('hosocanbo.ngaybc','<=',$inputs['ngaybaocao'])
                ->orderby('dmchucvucq.sapxep')
                ->get()->toarray();
        }
        return $data;
    }

    function getDSDV($inputs){
        if(isset($inputs['dangct'])){
            $data=hosocanbo::join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
                ->join('dmchucvucq', 'dmchucvucq.macvcq', '=', 'hosocanbo.macvcq')
                ->select('hosocanbo.macanbo','hosocanbo.macvcq','hosocanbo.ngaysinh'
                    ,'hosocanbo.gioitinh','hosocanbo.ngayvdct','hosocanbo.dantoc','hosocanbo.tdcm')
                ->where('hosocanbo.ngaybc','<=',$inputs['ngaybaocao'])
                ->where('hosocanbo.ngayvdct','<>','0000-00-00')
                ->where('hosocanbo.ngayvdct','<=',$inputs['ngaybaocao'])
                ->where('hosotinhtrangct.phanloaict','Like','Đang công tác%')
                ->orderby('dmchucvucq.sapxep')
                ->get()->toarray();
        }else{
            $data=hosocanbo::join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
                ->join('dmchucvucq', 'dmchucvucq.macvcq', '=', 'hosocanbo.macvcq')
                ->select('hosocanbo.macanbo','hosocanbo.macvcq','hosocanbo.ngaysinh'
                    ,'hosocanbo.gioitinh','hosocanbo.ngayvdct','hosocanbo.dantoc','hosocanbo.tdcm')
                ->where('hosocanbo.ngaybc','<=',$inputs['ngaybaocao'])
                ->where('hosocanbo.ngayvdct','<>','0000-00-00')
                ->where('hosocanbo.ngayvdct','<=',$inputs['ngaybaocao'])
                ->orderby('dmchucvucq.sapxep')
                ->get()->toarray();
        }
        return $data;
    }
    //Danh sách công chức, viên chức
    function getDSth($inputs,$phanloai='Công chức'){
        $data=hosocanbo::join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
            ->join('dmchucvucq', 'dmchucvucq.macvcq', '=', 'hosocanbo.macvcq')
            ->select('hosocanbo.tencanbo','hosocanbo.macanbo','hosocanbo.mapb','hosocanbo.macvcq','hosocanbo.ngaysinh'
                ,'hosocanbo.gioitinh','hosocanbo.ngaybc','hosocanbo.tdcm','hosocanbo.msngbac','hosocanbo.heso','hosocanbo.ngaytu',
                'hosocanbo.ngoaingu','hosocanbo.trinhdonn','hosocanbo.llct','hosocanbo.qlnhanuoc','hosocanbo.trinhdoth','hosocanbo.dantoc',
                'hosocanbo.ngayvdct','hosocanbo.qqxa','hosocanbo.qqhuyen','hosocanbo.qqtinh','hosocanbo.lvhd')
            ->where('hosocanbo.ngaybc','<=',$inputs['ngaybaocao'])
            ->where('hosocanbo.sunghiep',$phanloai)
            ->where('hosocanbo.mapb','Like',$inputs['phongbanth'].'%')
            ->where('hosotinhtrangct.phanloaict','Like','Đang công tác%')
            ->orderby('dmchucvucq.sapxep')
            ->get()->toarray();

        return $data;
    }

    //Danh sách công chức, viên chức chuyên viên cao cấp
    function getDSCVCCth($inputs,$phanloai='Công chức'){
        $data=hosocanbo::join('hosotinhtrangct', 'hosotinhtrangct.macanbo', '=', 'hosocanbo.macanbo')
            ->join('dmchucvucq', 'dmchucvucq.macvcq', '=', 'hosocanbo.macvcq')
            ->join('phanloaingach', 'phanloaingach.msngbac', '=', 'hosocanbo.msngbac')
            ->select('hosocanbo.tencanbo','hosocanbo.macanbo','hosocanbo.mapb','hosocanbo.macvcq','hosocanbo.ngaysinh'
                ,'hosocanbo.gioitinh','hosocanbo.ngaybc','hosocanbo.tdcm','hosocanbo.msngbac','hosocanbo.heso','hosocanbo.ngaytu',
                'hosocanbo.ngoaingu','hosocanbo.trinhdonn','hosocanbo.llct','hosocanbo.qlnhanuoc','hosocanbo.trinhdoth','hosocanbo.dantoc',
                'hosocanbo.ngayvdct','hosocanbo.qqxa','hosocanbo.qqhuyen','hosocanbo.qqtinh','hosocanbo.lvhd')
            ->where('hosocanbo.ngaybc','<=',$inputs['ngaybaocao'])
            ->where('hosocanbo.sunghiep',$phanloai)
            ->where('hosocanbo.mapb','Like',$inputs['phongbanth'].'%')
            ->where('hosotinhtrangct.phanloaict','Like','Đang công tác%')
            ->where(function($query){
                $query->where('phanloaingach.phanloai','Chuyên viên cao cấp')
                    ->orwhere('phanloaingach.phanloai','Chuyên viên chính');
            })
            ->orderby('dmchucvucq.sapxep')
            ->get()->toarray();

        return $data;
    }
    //</editor-fold>

    //<editor-fold desc="Các hàm xử lý dữ liệu">
    //Trả lại mảng trình độ chuyên môn của 01 cán bộ
    function getChuyenMon($tdcm){
        $aKQ=array('ts'=>0,
            'ths'=>0,
            'dh'=>0,
            'cd'=>0,
            'th'=>0,
            'cl'=>0);
        if(strpos(strtolower($tdcm),strtolower('tiến sĩ'))!==false){
            $aKQ['ts']=1;
            return $aKQ;
        }
        if(strpos(strtolower($tdcm),strtolower('thạc sĩ'))!==false){
            $aKQ['ths']=1;
            return $aKQ;
        }
        if(strpos(strtolower($tdcm),strtolower('đại học'))!==false){
            $aKQ['dh']=1;
            return $aKQ;
        }
        if(strpos(strtolower($tdcm),strtolower('cao đẳng'))!==false){
            $aKQ['cd']=1;
            return $aKQ;
        }
        if(strpos(strtolower($tdcm),strtolower('trung cấp'))!==false){
            $aKQ['th']=1;
            return $aKQ;
        }
        if(strpos(strtolower($tdcm),strtolower('trung học'))!==false){
            $aKQ['th']=1;
            return $aKQ;
        }
        $aKQ['cl']=1;
        return $aKQ;
    }
    //Trả lại mảng trình độ lý luận chính trị của 01 cán bộ
    function getChinhTri($llct){
        $aKQ=array('ct_cc'=>0,
            'ct_tc'=>0);
        if(strpos(strtolower($llct),strtolower('cao cấp'))!==false){
            $aKQ['ct_cc']=1;
            return $aKQ;
        }
        $aKQ['ct_tc']=1;
        return $aKQ;
    }
    //Trả lại mảng trình độ tin học của 01 cán bộ
    function getTinHoc($trinhdoth){
        $aKQ=array('th_dh'=>0,
            'th_cc'=>0);
        if(strpos(strtolower($trinhdoth),strtolower('đại học'))!==false){
            $aKQ['th_dh']=1;
            return $aKQ;
        }
        $aKQ['th_cc']=1;
        return $aKQ;
    }
    //Trả lại mảng trình độ tin học của 01 cán bộ
    function getNgoaiNgu($trinhdonn,$ngoaingu){
        $aKQ=array('nn_dh'=>0,
            'nn_cc'=>0,
            'kh_dh'=>0,
            'kh_cc'=>0);
        if(strpos(strtolower($ngoaingu),strtolower('tiếng anh'))!==false){
            if(strpos(strtolower($trinhdonn),strtolower('đại học'))!==false){
                $aKQ['nn_dh']=1;
                return $aKQ;
            }
            $aKQ['nn_cc']=1;
            return $aKQ;
        }else{
            if(strpos(strtolower($trinhdonn),strtolower('đại học'))!==false){
                $aKQ['kh_dh']=1;
                return $aKQ;
            }
        }
        $aKQ['kh_cc']=1;
        return $aKQ;
    }
    //Trả lại mảng lĩnh vực hoạt động
    function getLinhVuc($lvhd){
        $aKQ=array('lv_gd'=>0,
            'lv_yt'=>0,
            'lv_nn'=>0,
            'lv_vh'=>0,
            'lv_kh'=>0);
        if(strpos(strtolower($lvhd),strtolower('giáo dục'))!==false){
            $aKQ['lv_gd']=1;
            return $aKQ;
        }

        if(strpos(strtolower($lvhd),strtolower('y tế'))!==false){
            $aKQ['lv_yt']=1;
            return $aKQ;
        }

        if(strpos(strtolower($lvhd),strtolower('khoa học'))!==false){
            $aKQ['lv_nn']=1;
            return $aKQ;
        }
        if(strpos(strtolower($lvhd),strtolower('văn hóa'))!==false){
            $aKQ['lv_vh']=1;
            return $aKQ;
        }

        $aKQ['lv_kh']=1;
        return $aKQ;
    }
    //Trả lại mảng ngạch bậc
    function getNgach($msngbac){
        $aKQ=array('nb_cvcc'=>0,
            'nb_cvc'=>0,
            'nb_cv'=>0,
            'nb_cs'=>0,
            'nb_cl'=>0);
        if(strpos(strtolower($msngbac),strtolower('giáo dục'))!==false){
            $aKQ['nb_cvcc']=1;
            return $aKQ;
        }

        if(strpos(strtolower($msngbac),strtolower('y tế'))!==false){
            $aKQ['nb_cvcc']=1;
            return $aKQ;
        }

        if(strpos(strtolower($msngbac),strtolower('khoa học'))!==false){
            $aKQ['nb_cvcc']=1;
            return $aKQ;
        }
        if(strpos(strtolower($msngbac),strtolower('văn hóa'))!==false){
            $aKQ['nb_cs']=1;
            return $aKQ;
        }

        $aKQ['nb_cl']=1;
        return $aKQ;
    }
    //Trả lại mảng nhóm tuổi
    function getTuoi($nhomtuoi){
        $aKQ=array('t_d30'=>0,
            't_d50'=>0,
            't_t50'=>0,
            't_t50nam'=>0,
            't_t50nu'=>0,
            't_nh'=>0);

        if($nhomtuoi==1){
            $aKQ['t_d30']=1;
            return $aKQ;
        }

        if($nhomtuoi<=5){
            $aKQ['t_d50']=1;
            return $aKQ;
        }

        if($nhomtuoi==8){
            $aKQ['t_t50']=1;
            $aKQ['t_t50nam']=1;
            return $aKQ;
        }

        if($nhomtuoi==9){
            $aKQ['t_t50']=1;
            $aKQ['t_t50nu']=1;
            return $aKQ;
        }

        $aKQ['t_nh']=1;
        return $aKQ;
    }

    function getage($ngaysinh, $ngaytinh){
        $ngaysinh=new Carbon($ngaysinh);
        $ngaytinh=new Carbon($ngaytinh);

        if($ngaysinh>=$ngaytinh){
            return 0;
        }
        $thangsinh = $ngaysinh->month;
        $namsinh = $ngaysinh->year;

        $thangtinh = $ngaytinh->month;
        $namtinh = $ngaytinh->year;

        if($thangsinh>$thangtinh){
            return ($namtinh - $namsinh -1);
        }else{
            return ($namtinh - $namsinh);
        }
    }

    function getnhom($tuoi, $gioitinh){
        if($tuoi<=30){return 1;}
        if($tuoi<=35){return 2;}
        if($tuoi<=40){return 3;}
        if($tuoi<=45){return 4;}
        if($tuoi<=50){return 5;}
        if($gioitinh=='Nam'&& $tuoi<=60){return 8;}
        if($gioitinh=='Nữ'&& $tuoi<=55){return 9;}
        return 10;
    }

    function getnhomtuoi($tuoi){
        if($tuoi<=30){return 1;}
        if($tuoi<=40){return 2;}
        if($tuoi<=50){return 3;}
        if($tuoi<=55){return 4;}
        return 5;
    }

    function getnhomdv($tuoi){
        if($tuoi<=5){return 1;}
        if($tuoi<=10){return 2;}
        if($tuoi<=20){return 3;}
        if($tuoi<=30){return 4;}
        return 5;
    }
    //</editor-fold>
}
