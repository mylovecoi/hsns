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
            margin: auto;
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
            <td style="text-align: left; font:normal 12px Times, serif; font-weight: bold">
                (Mẫu 2a - BNV/2007 ban hành theo QĐ số 06/2007/QĐ- BNV ngày 18/6/2007 của Bộ trưởng Bộ nội vụ)
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">
                Cơ quan, đơn vị có thẩm quyền quản lý CBCC: {{$m_donvi->tenct}}
            </td>
        </tr>
        <tr>
            <td width="65%" style="text-align: left;">
                Cơ quan, đơn vị sử dụng CBCC: {{$m_donvi->tendv}}
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">
                Số hiệu cán bộ, công chức: {{$model->macongchuc}}
            </td>
        </tr>
    </table>

    <p style="text-align: center; font-weight: bold; font-size: 20px;">PHIẾU BỔ SUNG LÝ LỊCH CÔNG CHỨC, VIÊN CHỨC</p>
    <p style="text-align: center; font-style: italic">Từ ngày {{getDayVn($m_donvi->ngaytu)}} đến ngày {{getDayVn($m_donvi->ngayden)}}</p>

    <table width="96%" border="0" cellspacing="0">
        <tr>
            <td colspan="2">1) Họ và tên khai sinh (viết chữ in hoa): {{$model->tenviethoa}}</td>
        </tr>
        <tr>
            <td style="width: 60%">2) Sinh ngày: {{ date("d",strtotime($model->ngaysinh))}} tháng {{ date("m",strtotime($model->ngaysinh))}} năm {{ date("Y",strtotime($model->ngaysinh))}}</td>
            <td style="width: 40%">Giới tinh: {{$model->gioitinh}}</td>
        </tr>

        <tr>
            <td colspan="2">3) Chức vụ (chức danh) hiện tại: {{$model->tencvcq}}</td>
        </tr>

        <tr>
            <td>4) Ngạch công chức (viên chức): {{$model->tennb}}</td>
            <td>Mã ngạch: {{$model->msngbac}}</td>
        </tr>
        <tr>
            <td colspan="2">5) Bậc lương: {{$model->bac}} Hệ số: {{$model->heso}} Ngày hưởng: {{getDayVn($model->ngaytu)}} Phụ cấp chức vụ: {{$model->pccv}} Phụ cấp khác: {{$model->pck}}</td>
        </tr>

        <tr>
            <td>6) Ngày vào Đảng Cộng sản Việt Nam:  {{getDayVn($model->ngayvd)}}</td>
            <td>Ngày chính thức: {{getDayVn($model->ngayvdct)}}</td>
        </tr>
    </table>

    <p style="font-weight: bold">I. THAY ĐỔI VỀ CHỨC DANH, CHỨC VỤ, ĐƠN VỊ CÔNG TÁC</p>
    <table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
        <tr>
            <th style="width: 25%">Từ tháng, năm,<br>Đến tháng, năm</th>
            <th style="width: 75%">Chức danh, chức vụ được bổ nhiệm, bầu cử, điều động, miễn nhiệm (trong đảng, chính quyền, đoàn thể, tổ chức của nước ngoài hoặc liên doanh với nước ngoài), thay đổi về nội dung công việc, đơn vị công tác,  danh hiệu được phong tặng...</th>
        </tr>

        @foreach($m_cv as $ct)
            <tr>
                <td>{{'Từ ngày '.getDayVn($ct->ngaytu) .($ct->ngayden=='0000-00-00'?' đến nay':' đến ngày '.getDayVn($ct->ngayden))}}</td>
                <td>{{$ct->tencvcq}}</td>
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


    <p style="font-weight: bold">II. ĐÀO TẠO, BỒI DƯỠNG NÂNG CAO TRÌNH ĐỘ CHUYÊN MÔN, NGHIỆP VỤ</p>
    <table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
        <tr>
            <th style="width: 30%">Tên trường</th>
            <th style="width: 20%">Chuyên ngành đào tạo, bồi dưỡng</th>
            <th style="width: 15%">Từ tháng, năm,<br>Đến tháng, năm</th>
            <th style="width: 15%">Hình thức đào tạo</th>
            <th style="width: 20%">Văn bằng, chứng chỉ, trình độ gì</th>
        </tr>

        @foreach($m_daotao as $dt)
            <tr>
                <td>{{$dt->tencoso}}</td>
                <td>{{$dt->chuyennganh}}</td>
                <td>{{'Từ ngày'.getDayVn($dt->ngaytu) .($dt->ngayden=='0000-00-00'?' đến nay':' đến ngày'.getDayVn($dt->ngayden))}}</td>
                <td>{{$dt->hinhthuc}}</td>
                <td>{{$dt->vanbang}}</td>
            </tr>
        @endforeach

        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <p style="font-weight: bold">III. KHEN THƯỞNG</p>
    @foreach($m_kt as $ct)
        <p>-&nbsp; {{$ct->hinhthuc}} {{$ct->ngaythang=='0000-00-00'?'':(', ngày '.getDayVn($ct->ngaythang))}}</p>
    @endforeach
    <br>
    <p style="font-weight: bold">IV. KỶ LUẬT</p>
    @foreach($m_kl as $ct)
        <p>-&nbsp; {{$ct->hinhthuc}} {{$ct->ngaythang=='0000-00-00'?'':(', ngày '.getDayVn($ct->ngaythang))}}</p>
    @endforeach
    <br>
    <p style="font-weight: bold">V. ĐI NƯỚC NGOÀI</p>
    <br>
    <p style="font-weight: bold">VI. TÌNH TRẠNG SỨC KHOẺ (thời điểm hiện tại):</p>
    <p>{{$model->ttsk}}</p>
    <p style="font-weight: bold">VII. VỀ KINH TẾ BẢN THÂN</p>
    <br>
    <p style="font-weight: bold">VIII. VỀ GIA ĐÌNH</p>
    <br>
    <p style="font-weight: bold">IX. NHỮNG VẤN ĐỀ KHÁC CẦN BỔ SUNG:</p>
    <br><br>

    <table width="96%" border="0" cellspacing="0" style="text-align: center">
        <tr style="font-style: italic">
            <td style="width: 50%">…………, Ngày…...tháng……năm……</td>
            <td style="width: 50%">…………, Ngày…...tháng……năm……</td>
        </tr>
        <tr>
            <td>Người khai bổ sung</td>
            <td>Thủ trưởng cơ quan , đơn vị quản lý và sử dụng CBCC</td>
        </tr>
        <tr style="font-style: italic">
            <td>(Ký tên, ghi rõ họ tên)</td>
            <td>(Ký tên, đóng dấu)</td>
        </tr>
        <tr>
            <td>
                <br><br><br><br>
            </td>
        <tr>
            <td>{{$model->tencanbo}}</td>
            <td>{{$m_donvi->lanhdao}}</td>
        </tr>
    </table>
    <p style="page-break-before: always">

</body>
</html>