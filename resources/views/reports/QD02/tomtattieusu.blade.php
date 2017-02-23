<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$pageTitle}}</title>
    <style type="text/css">
        body {
            font: normal 14px/16px time, serif;
        }

        table, p {
            width: 98%;
            /*margin: auto;*/
        }

        td, th {
            padding: 5px;
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
<body style="font:normal 14px Times, serif;">

    <table width="96%" border="0" cellspacing="0" cellpadding="8" style="margin:0 auto 20px; text-align: center;">
        <tr>
            <td colspan="2" width="65%" style="text-align: left; font:normal 12px Times, serif; font-weight: bold">
                Mẫu 3a-BNV/2007 ban hành kèm theo Quyết định số 06/2007/QĐ-BNV ngày 18/6/2007 của Bộ trưởng Bộ Nội vụ
            </td>
        </tr>
    </table>

    <p style="text-align: center; font-weight: bold; font-size: 20px;">TIỂU SỬ TÓM TẮT</p>

    <table width="96%" border="0" cellspacing="0">
        <tr>
            <td rowspan="5" style="width: 10%" align="center">
                @if($model->anh !='')
                    <img src="{{ url($model->anh)}}" height="150">
                @endif
            </td>
            <td>1) Họ và tên khai sinh (viết chữ in hoa):{{$model->tenviethoa}}</td>
        </tr>
        <tr>
            <td>2) Tên gọi khác: {{$model->tenkhac}}</td>
        </tr>

        <tr>
            <td>
                3) Sinh ngày: {{ date("d",strtotime($model->ngaysinh))}} tháng {{ date("m",strtotime($model->ngaysinh))}} năm {{ date("Y",strtotime($model->ngaysinh))}}
            </td>
        </tr>
        <tr>
            <td>
                4) Nơi sinh: {{'Xã '.$model->nsxa .' - Huyện '.$model->nshuyen .' - Tỉnh '.$model->nstinh}}
            </td>
        </tr>
        <tr>
            <td>
                5) Quê quán: {{'Xã '.$model->qqxa .' - Huyện '.$model->qqhuyen .' - Tỉnh '.$model->qqtinh}}
            </td>
        </tr>
    </table>

    <table width="96%" border="0" cellspacing="0">
        <tr>
            <td style="width: 50%">6) Dân tộc: {{$model->dantoc}}</td>
            <td style="width: 50%">7) Tôn giáo: {{$model->tongiao}}</td>
        </tr>
        <tr>
            <td colspan="2">8) Nơi ở hiện nay: {{$model->noio}}</td>
        </tr>
        <tr>
            <td colspan="2">9) Chức vụ (chức danh) hiện tại: {{$model->tencvcq}}</td>
        </tr>
        <tr>
            <td colspan="2">10) Cơ quan, đơn vị  công tác: {{$m_donvi->tendv}}</td>
        </tr>
        <tr>
            <td colspan="2">11.1) Trình độ giáo dục phổ thông: {{$model->tdgdpt}}</td>
        </tr>
        <tr>
            <td colspan="2">11.2) Trình độ chuyên môn cao nhất: {{$model->tdcm}}</td>
        </tr>
        <tr>
            <td style="width: 50%">11.3) Lý luận chính trị: {{$model->llct}}</td>
            <td style="width: 50%">11.4) Quản lý nhà nước: {{$model->qlnhanuoc}}</td>
        </tr>
        <tr>
            <td style="width: 50%">11.5) Ngoại ngữ: {{$model->ngoaingu}}</td>
            <td style="width: 50%">11.6) Tin học: {{$model->trinhdoth}}</td>
        </tr>
        <tr>
            <td>12) Ngày vào Đảng Cộng sản Việt Nam:  {{getDayVn($model->ngayvd)}}</td>
            <td>Ngày chính thức: {{getDayVn($model->ngayvdct)}}</td>
        </tr>
        <tr>
            <td>13) Tình trạng sức khỏe: {{$model->ttsk}}</td>
            <td>Chiều cao: {{$model->chieucao}}</td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cân nặng: {{$model->cannang}}</td>
            <td>Nhóm máu: {{$model->nhommau}}</td>
        </tr>
        <tr>
            <td colspan="2">14) Khen thưởng: </td>
        </tr>
        <tr>
            <td colspan="2">15) Kỷ luật: </td>
        </tr>
        <tr>
            <td colspan="2">16) Tóm tắt quá trình công tác, học tập của bản thân</td>
        </tr>
    </table>

    <table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
        <tr>
            <th style="width: 25%">Từ tháng, năm,<br>Đến tháng, năm</th>
            <th style="width: 75%">Chức danh, chức vụ, đơn vị công tác (đảng, chính quyền, đoàn thể, tổ chức xã hội) kể cả thời gian được đào tạo, bồi dưỡng về chuyên môn, nghiệp vụ, …</th>
        </tr>

        @foreach($m_congtac as $ct)
            <tr>
                <td>{{'Từ ngày '.getDayVn($ct->ngaytu) .($ct->ngayden=='0000-00-00'?' đến nay':' đến ngày '.getDayVn($ct->ngayden))}}</td>
                <td>{{$ct->noidung}}</td>
            </tr>
        @endforeach

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

    <table width="96%" border="0" cellspacing="0" style="text-align: center">
        <tr>
            <td style="width: 50%">&nbsp;</td>
            <td style="width: 50%">…………, Ngày…...tháng……năm……</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>Người khai (hoặc người trích lục)</td>
        </tr>
        <tr style="font-style: italic">
            <td>&nbsp;</td>
            <td>(Ký tên, ghi rõ họ tên)</td>
        </tr>
        <tr>
            <td>
                <br><br><br><br>
            </td>
        <tr>
            <td>&nbsp;</td>
            <td>{{$model->tencanbo}}</td>
        </tr>
    </table>
    <p style="page-break-before: always">

</body>
</html>