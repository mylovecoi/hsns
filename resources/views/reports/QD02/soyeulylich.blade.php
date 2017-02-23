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
                (Mẫu 2a - BNV/2007 ban hành theo QĐ số 06/2007/QĐ- BNV ngày 18/6/2007 của Bộ trưởng Bộ nội vụ)
            </td>
        </tr>
        <tr>
            <td width="65%" style="text-align: left;">
                Cơ quan, đơn vị có thẩm quyền quản lý CBCC: {{$m_donvi->tenct}}
            </td>
            <td style="text-align: left;">
                Số hiệu cán bộ, công chức: {{$model->macongchuc}}
            </td>
        </tr>
        <tr>
            <td width="65%" style="text-align: left;">
                Cơ quan, đơn vị sử dụng CBCC: {{$m_donvi->tendv}}
            </td>
        </tr>
    </table>

    <p style="text-align: center; font-weight: bold; font-size: 20px;">SƠ YẾU LÝ LỊCH CÁN BỘ CÔNG CHỨC</p>

    <table width="96%" border="0" cellspacing="0">
        <tr>
            <td rowspan="5" style="width: 10%" align="center">
                @if($model->anh !='')
                    <img src="{{ url($model->anh)}}" height="150">
                @endif
            </td>
            <td>1) Họ và tên khai sinh (viết chữ in hoa): {{$model->tenviethoa}}</td>
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
            <td colspan="2">8) Nơi đăng ký hộ khẩu thường trú: {{$model->hktt}}</td>
        </tr>
        <tr>
            <td colspan="2">9) Nơi ở hiện nay: {{$model->noio}}</td>
        </tr>
        <tr>
            <td colspan="2">10) Nghề nghiệp khi được tuyển dụng:</td>
        </tr>
        <tr>
            <td colspan="2">11) Ngày tuyển dụng: {{$model->ngaytd=='0000-00-00'?'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;':getDayVn($model->ngaytd)}} Cơ quan tuyển dụng: {{$model->cqtd}}</td>
        </tr>
        <tr>
            <td colspan="2">12) Chức vụ (chức danh) hiện tại: {{$model->tencvcq}}</td>
        </tr>
        <tr>
            <td colspan="2">13) Công việc chính được giao: {{$model->cvcn}}</td>
        </tr>
        <tr>
            <td colspan="2">14) Ngạch công chức (viên chức): {{$model->tennb}}. Mã ngạch: {{$model->msngbac}}</td>
        </tr>
        <tr>
            <td colspan="2">Bậc lương: {{$model->bac}} Hệ số: {{$model->heso}} Ngày hưởng: {{getDayVn($model->ngaytu)}} Phụ cấp chức vụ: {{$model->pccv}} Phụ cấp khác: {{$model->pck}}</td>
        </tr>
        <tr>
            <td colspan="2">15.1) Trình độ giáo dục phổ thông: {{$model->tdgdpt}}</td>
        </tr>
        <tr>
            <td colspan="2">15.2) Trình độ chuyên môn cao nhất: {{$model->tdcm}}</td>
        </tr>
        <tr>
            <td style="width: 50%">15.3) Lý luận chính trị: {{$model->llct}}</td>
            <td style="width: 50%">15.4) Quản lý nhà nước: {{$model->qlnhanuoc}}</td>
        </tr>
        <tr>
            <td style="width: 50%">15.5) Ngoại ngữ: {{$model->ngoaingu}}</td>
            <td style="width: 50%">15.6) Tin học: {{$model->trinhdoth}}</td>
        </tr>
        <tr>
            <td>16) Ngày vào Đảng Cộng sản Việt Nam:  {{getDayVn($model->ngayvd)}}</td>
            <td>Ngày chính thức: {{getDayVn($model->ngayvdct)}}</td>
        </tr>
        <tr>
            <td colspan="2">17) Ngày tham gia tổ chức chính trị - xã hội: {{getDayVn($model->ngayctctxh)}}</td>
        </tr>
        <tr>
            <td colspan="2">18) {{isset($m_llvt)?('Ngày nhập ngũ: '.getDayVn($m_llvt->ngaytu).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ngày xuất ngũ: '.getDayVn($m_llvt->ngayden).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quân hàm cao nhất: '.$m_llvt->quanham):'Ngày nhập ngũ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ngày xuất ngũ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quân hàm cao nhất:'}}</td>
        </tr>
        <tr>
            <td colspan="2">19) Danh hiệu được phong tặng cao nhất: {{$model->dhpt}}</td>
        </tr>
        <tr>
            <td colspan="2">20) Sở trường công tác: {{$model->stct}}</td>
        </tr>
        <tr>
            <td>21) Khen thưởng: </td>
            <td>22) Kỷ luật: </td>
        </tr>
        <tr>
            <td colspan="2">23) Tình trạng sức khỏe: {{$model->ttsk}} Chiều cao: {{$model->chieucao}} Cân nặng: {{$model->cannang}} Nhóm máu: {{$model->nhommau}}</td>
        </tr>
        <tr>
            <td style="width: 50%">24) Là thương binh hạng: </td>
            <td style="width: 50%">Là con gia đình chính sách: </td>
        </tr>
        <tr>
            <td colspan="2">25) Số chứng minh nhân dân: {{$model->socmnd}} Ngày cấp: {{getDayVn($model->ngaycap)}} 26) Sổ BHXH: {{$model->soBHXH}}</td>
        </tr>
    </table>

    <p style="font-weight: bold">27) ĐÀO TẠO, BỒI DƯỠNG VỀ CHUYÊN MÔN NGHIỆP VỤ, LÝ LUẬN CHÍNH TRỊ, NGOẠI NGỮ, TIN HỌC</p>
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

    <p style="font-weight: bold">28) TÓM TẮT QUÁ TRÌNH CÔNG TÁC</p>
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

    <p style="font-weight: bold">29) ĐẶC ĐIỂM LỊCH SỬ BẢN THÂN</p>
    <p>- Khai rõ: bị bắt, bị tù (từ ngày tháng năm nào đến ngày tháng năm nào, ở đâu), đã khai báo cho ai, những vấn đề gì? Bản thân có làm việc trong chế độ cũ (cơ quan, đơn vị nào, địa điểm, chức danh, chức vụ, thời gian làm việc …)</p>
    <br><br>
    <p>- Tham gia hoặc có quan hệ với các tổ chức chính trị, kinh tế, xã hội nào ở nước ngoài (làm gì, tổ chức nào, đặt trụ sở ở đâu ..?):</p>
    <br><br>
    <p>- Có thân nhân (Cha, Mẹ, Vợ, Chồng, con, anh chị em ruột) ở nước ngoài (làm gì, địa chỉ …)?</p>
    <br><br>

    <p style="font-weight: bold">30) QUAN HỆ GIA ĐÌNH</p>
    <p style="font-weight: bold">a) Về bản thân: Cha, Mẹ, Vợ (hoặc chồng), các con, anh chị em ruột</p>
    <table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
        <tr>
            <th style="width: 15%">Mối quan hệ</th>
            <th style="width: 25%">Họ và tên</th>
            <th style="width: 10%">Năm sinh</th>
            <th style="width: 50%">Quê quán, nghề nghiệp, chức danh, chức vụ, đơn vị công tác, học tập, nơi ở (trong, ngoài nước); thành viên các tổ chức chính trị - xã hội …?)</th>
        </tr>

        @foreach($m_qhbt as $ct)
            <tr>
                <td>{{$ct->quanhe}}</td>
                <td>{{$ct->hoten}}</td>
                <td>{{$ct->ngaysinh}}</td>
                <td>{{$ct->thongtinct}}</td>
            </tr>
        @endforeach

        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <p style="font-weight: bold">b) Về bên vợ (hoặc chồng): Cha, Mẹ, anh chị em ruột</p>
    <table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
        <tr>
            <th style="width: 15%">Mối quan hệ</th>
            <th style="width: 25%">Họ và tên</th>
            <th style="width: 10%">Năm sinh</th>
            <th style="width: 50%">Quê quán, nghề nghiệp, chức danh, chức vụ, đơn vị công tác, học tập, nơi ở (trong, ngoài nước); thành viên các tổ chức chính trị - xã hội …?)</th>
        </tr>

        @foreach($m_qhvc as $ct)
            <tr>
                <td>{{$ct->quanhe}}</td>
                <td>{{$ct->hoten}}</td>
                <td>{{$ct->ngaysinh}}</td>
                <td>{{$ct->thongtinct}}</td>
            </tr>
        @endforeach

        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <p style="font-weight: bold">31) DIỄN BIẾN QUÁ TRÌNH LƯƠNG CỦA CÁN BỘ, CÔNG CHỨC</p>
    <table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
        <?php
            $col = 10 - count($m_luong[0]);
            $aTD=array('Tháng/ năm','Mã ngạch/bậc','Hệ số lương');
        ?>
        @for($i=0;$i<3;$i++)
            <tr>
                <td>{{$aTD[$i]}}</td>
                @if($i==0)
                    @foreach($m_luong[$i] as $ct)
                        <td style="width: 9%">{{ date("m",strtotime($ct))}}/{{ date("Y",strtotime($ct))}}</td>
                    @endforeach
                @else
                    @foreach($m_luong[$i] as $ct)
                        <td style="width: 9%">{{$ct}}</td>
                    @endforeach
                @endif

                @for($j=0;$j<$col;$j++)
                    <td style="width: 9%">&nbsp;</td>
                @endfor
            </tr>
        @endfor
    </table>
    <p style="font-weight: bold">32) NHẬN XÉT, ĐÁNH GIÁ CỦA CƠ QUAN, ĐƠN VỊ QUẢN LÝ VÀ SỬ DỤNG CÁN BỘ, CÔNG CHỨC</p>
    <br><br>

    <table width="96%" border="0" cellspacing="0" style="text-align: center">
        <tr>
            <td style="width: 50%">Người khai</td>
            <td style="width: 50%">…………, Ngày…...tháng……năm……</td>
        </tr>
        <tr>
            <td>Tôi xin cam đoan những lời khai trên đây là đúng sự thật</td>
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