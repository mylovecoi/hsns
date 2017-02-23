<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$pageTitle}}</title>
    <style type="text/css">
        body {
            font: normal 12px/14px time, serif;
        }

        .header tr td {
            padding-top: 0px;
            padding-bottom: 10px;
        }

        table, p {
            width: 98%;
            margin: auto;
        }

        table tr td:first-child {
            text-align: center;
        }

        td, th {
            padding: 10px;
        }
        p{
            padding: 5px;
        }
        span{
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>
<body style="font:normal 12px Times, serif;">

<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:0 auto 25px; text-align: center;">
    <tr>
        <td  style="text-align: left;width: 60%">
            <b>Đơn vị chủ quản: {{$m_dv->tenct}}</b>
        </td>
        <td  style="text-align: center;">
            <!--b>Mẫu số C02-X</b-->
        </td>
    </tr>
    <tr>
        <td style="text-align: left;width: 60%">
            <b>Đơn vị: {{$m_dv->tendv}}</b>
        </td>
        <td style="text-align: center; font-style: italic">

        </td>
    </tr>
</table>
<p style="text-align: center; font-weight: bold; font-size: 20px;">BẢNG THANH TOÁN TIỀN LƯƠNG VÀ PHỤ CẤP</p>
<p style="text-align: center; font-style: italic">Tháng {{$thongtin['thang']}} năm {{$thongtin['nam']}}</p>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
    <tr style="padding-left: 2px;padding-right: 2px">
        <th style="width: 2%;padding-left: 2px;padding-right: 2px" rowspan="2">STT</th>
        <th style="width: 7%;padding-left: 2px;padding-right: 2px" rowspan="2">Họ và tên</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">Mã số</br>ngạch</br>bậc</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">Hệ số</br>lương</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">Hệ số</br>phụ</br>cấp</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">Cộng</br>hệ số</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">Mức lương</th>
        <th colspan="2">Các khoản phụ</br>cấp khác</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">Tổng lương</br>được hưởng</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">BHXH trả</br>thay lương</th>
        <th colspan="4">Các khoản phải khấu trừ</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">Còn lại</th>
        <th style="width: 6%;padding-left: 2px;padding-right: 2px" rowspan="2">Ký nhận</th>
    </tr>

    <tr style="padding-left: 2px;padding-right: 2px">
        <th>Hệ số</th>
        <th>Số tiền</th>

        <th>BHXH</th>
        <th>BHYT</th>
        <th>KPCĐ</th>
        <th>Cộng</th>
    </tr>

    <tr>
        @for($i=1;$i<=17;$i++)
        <th>{{$i}}</th>
        @endfor
    </tr>

    <?php $stt=1; ?>
    @foreach($model as $ct)
        <tr>
            <td>{{$stt++}}</td>
            <td>{{$ct->tencanbo}}</td>
            <td>{{$ct->msngbac}}</td>
            <td>{{$ct->heso}}</td>
            <td>{{$ct->tonghs-$ct->heso}}</td>
            <td>{{$ct->tonghs}}</td>
            <td>{{number_format($ct->ttl)}}</td>
            <td></td>
            <td></td>
            <td>{{number_format($ct->ttl)}}</td>
            <td>{{number_format($ct->bhct)}}</td>
            <td>{{number_format($ct->stbhxh)}}</td>
            <td>{{number_format($ct->stbhyt)}}</td>
            <td>{{number_format($ct->stkpcd)}}</td>
            <td>{{number_format($ct->ttbh)}}</td>
            <td>{{number_format($ct->luongtn)}}</td>
            <td></td>
        </tr>
    @endforeach
    <tr style="font-weight: bold; text-align: center">
        <td colspan="3">Tổng cộng</td>
        <td>{{$model->sum('heso')}}</td>
        <td>{{$model->sum('tonghs')-$model->sum('heso')}}</td>
        <td>{{$model->sum('tonghs')}}</td>
        <td>{{number_format($model->sum('ttl'))}}</td>
        <td></td>
        <td></td>
        <td>{{number_format($model->sum('ttl'))}}</td>
        <td>{{number_format($model->sum('bhct'))}}</td>
        <td>{{number_format($model->sum('stbhxh'))}}</td>
        <td>{{number_format($model->sum('stbhyt'))}}</td>
        <td>{{number_format($model->sum('stkpcd'))}}</td>
        <td>{{number_format($model->sum('ttbh'))}}</td>
        <td>{{number_format($model->sum('luongtn'))}}</td>
        <td></td>
    </tr>
</table>

<table class="header" width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:20px auto; text-align: center;">
    <tr>
        <td style="text-align: left;" width="50%"></td>
        <td style="text-align: center; font-style: italic" width="50%">........,Ngày......tháng.......năm..........</td>
    </tr>
    <tr style="font-weight: bold">
        <td style="text-align: center;" width="50%">Người lập bảng</td>
        <td style="text-align: center;" width="50%">Thủ trưởng đơn vị</td>
    </tr>
    <tr style="font-style: italic">
        <td style="text-align: center;" width="50%">(Ghi rõ họ tên)</td>
        <td style="text-align: center;" width="50%">((Ký tên, đóng dấu))</td>
    </tr>
    <tr>
        <td><br><br><br></td>
    </tr>

    <tr>
        <td style="text-align: center;" width="50%">{{''}}</td>
        <td style="text-align: center;" width="50%">{{$m_dv->lanhdao}}</td>
    </tr>
</table>

</body>
</html>