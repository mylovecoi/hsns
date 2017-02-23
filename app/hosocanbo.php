<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosocanbo extends Model
{
    protected $table = 'hosocanbo';
    protected $fillable = [
        'id',
        'mapb',
        'macvcq',
        'macvd',
        'macanbo',
        'anh',
        'macongchuc',
        'sunghiep',
        'tencanbo',
        'tenkhac',
        'ngaysinh',
        'gioitinh',
        'nsxa',
        'nshuyen',
        'nstinh',
        'qqxa',
        'qqhuyen',
        'qqtinh',
        'dantoc',
        'tongiao',
        'tpgd', //thành phần gia đình
        'hktt',
        'noio',
        'ngaytd',
        'cqtd',
        'ngaybn',
        'ngayvao',//ngày vào cơ quan làm việc
        'cvcn', //chức vụ cao nhất đảm nhiệm
        'lvhd',//lĩnh vực hoạt động
        'nguontd',
        'httd', //hình thức tuyển dụng
        'lvtd', //lĩnh vực tuyển dụng
        'ngaybc',
        'tdgdpt', //trình độ giáo dục phổ thông
        'tdcm',//trình độ chuyên môn ------ xem có nên tách bảng hoặc tự động lấy thông tin cao nhất
        'chuyennganh',
        'noidt',
        'hinhthuc',
        'khoadt',
        'llct', //lý luận chính trị
        'qlnhanuoc',
        'ngoaingu',
        'trinhdonn',
        'trinhdoth',
        'ngayvd',
        'ngayvdct',
        'noikn',
        'ngayctctxh',//ngày công tác tổ chức chính trị - xã hội - có thể từ .. đến
        'cvtcxh', //chức vụ
        'ngaynn',
        'ngayxn',
        'qhcn', //quân hàm cao nhất
        'dhpt', //danh hiệu phong tặng
        'stct', //Sở trường công tác
        'ttsk',
        'chieucao',
        'cannang',
        'nhommau',
        'thuongtat',
        'sothuongtat',
        'thuongbinh',
        'giadinhcs',
        'socmnd',
        'ngaycap',
        'noicap',
        'lichsubt',
        'lichsuct',
        'thannhannn',
        'tnxbt',
        'soBHXH',
        'ngayBHXH',
        'thangtapsu',
        'sodt',
        'email',
        'sotk',
        'tennganhang',
        'tthn',
        'bhtn',
        'madv',
        //thông tin lương hiện tại
        'msngbac',
        'ngaytu',
        'ngayden',
        'bac',
        'heso',
        'vuotkhung',
        'pthuong',
        'pcct',
        'pckct',
        'pck',
        'pccv',
        'pckv',
        'pcth',
        'pcdd',
        'pcdh',
        'pcld',
        'pcdbqh',
        'pcudn',
        'pctn',
        'pctnn',
        'pcdbn',
        'pcvk',
        'pckn',
        'pcdang',
        'pccovu',
        'pclt',
        'pcd',
        'pctr'
    ];

    // <editor-fold defaultstate="collapsed" desc="--hasMany--">
    public function hosobaohiemyte()
    {
        return $this->hasMany('App\hosobaohiemyte', 'macanbo');
    }

    public function hosobinhbau()
    {
        return $this->hasMany('App\hosobinhbau', 'hosobinhbau');
    }

    public function hosocanbo_truoctd()
    {
        return $this->hasMany('App\hosocanbo_truoctd', 'macanbo');
    }

    public function hosochucvucq()
    {
        return $this->hasMany('App\hosochucvu', 'macanbo');
    }

    public function hosochucvud()
    {
        return $this->hasMany('App\hosochucvud', 'macanbo');
    }

    public function hosocongtac()
    {
        return $this->hasMany('App\hosocongtac', 'macanbo');
    }

    public function hosocongtacnn()
    {
        return $this->hasMany('App\hosocongtacnn', 'macanbo');
    }

    public function hosodaotao()
    {
        return $this->hasMany('App\hosodaotao', 'macanbo');
    }

    public function hosokhenthuong()
    {
        return $this->hasMany('App\hosokhenthuong', 'macanbo');
    }

    public function hosokyluat()
    {
        return $this->hasMany('App\hosokyluat', 'macanbo');
    }

    public function hosollvt()
    {
        return $this->hasMany('App\hosollvt', 'macanbo');
    }

    public function hosoluanchuyen()
    {
        return $this->hasMany('App\hosoluanchuyen', 'macanbo');
    }

    public function hosoluong()
    {
        return $this->hasMany('App\hosoluong', 'macanbo');
    }

    public function hosonhanxetdg()
    {
        return $this->hasMany('App\hosonhanxetdg', 'macanbo');
    }

    public function hosophucap()
    {
        return $this->hasMany('App\hosophucap', 'macanbo');
    }

    public function hosoquanhegd()
    {
        return $this->hasMany('App\hosoquanhegd', 'macanbo');
    }

    public function hosotailieu()
    {
        return $this->hasMany('App\hosotailieu', 'macanbo');
    }

    public function hosothanhtra()
    {
        return $this->hasMany('App\hosothanhtra', 'macanbo');
    }

    public function hosotinhtrangct()
    {
        return $this->hasMany('App\hosotinhtrangct', 'macanbo');
    }
    //</editor-fold>

    // <editor-fold defaultstate="collapsed" desc="--belongsTo--">
    public function chucvucq()
    {
        $this->belongsTo('App\dmchucvucq', 'macvcq');
    }

    public function phongban()
    {
        $this->belongsTo('App\dmphongban', 'mapb');
    }

    public function chucvud()
    {
        $this->belongsTo('App\dmchucvud', 'macvd');
    }
    // </editor-fold>
}
