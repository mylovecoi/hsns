<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{$pageTitle}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="Phần mềm quản lý hồ sơ nhân sự"/>
    <meta content="" name="HuongVu-LifeSoft"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
    <script src="{{url('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet')}}" type="text/css"/>
    <link href="{{url('assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
    <link href="{{url('assets/admin/pages/css/tasks.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" type="text/css"/>
    @yield('custom-style')
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="{{url('assets/global/css/components-rounded.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/css/plugins.css')}}"rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/admin/layout4/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/admin/layout4/css/themes/light.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{url('assets/global/plugins/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END THEME STYLES -->
    <script type="text/javascript">
        function time() {
            var today = new Date();
            var weekday=new Array(7);
            weekday[0]="Chủ nhật";
            weekday[1]="Thứ hai";
            weekday[2]="Thứ ba";
            weekday[3]="Thứ tư";
            weekday[4]="Thứ năm";
            weekday[5]="Thứ sáu";
            weekday[6]="Thứ bảy";
            var day = weekday[today.getDay()];
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            m=checkTime(m);
            s=checkTime(s);
            nowTime = h+":"+m+":"+s;
            if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = day+', '+ dd+'/'+mm+'/'+yyyy;

            tmp='<span class="date"> '+today+' | '+nowTime+'</span>';

            document.getElementById("clock").innerHTML=tmp;

            clocktime=setTimeout("time()","1000","JavaScript");
            function checkTime(i)
            {
                if(i<10){
                    i="0" + i;
                }
                return i;
            }
        }
    </script>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page page-header-fixed page-footer-fixed page-sidebar-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="{{url('tong_quan')}}">
                <img src="{{url('images/LOGO.png')}}" alt="logo" class="logo-default" style="margin-top: 10px;">
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->

		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<!--input type="text" class="form-control input-sm" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span-->
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
					<!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" >
                            <img alt="" class="img-circle" src="{{url('/images/avatar/default-user.png')}}"/>
					<span class="username">
					<b>{{session('admin')->name}}</b> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{url('change-password')}}">
                                    <i class="icon-lock"></i> Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a href="{{url('logout')}}">
                                    <i class="icon-key"></i> Đăng xuất </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start">
					<a href="{{url('tong_quan')}}">
					<i class="icon-home"></i>
					<span class="title">Tổng quan</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-wrench"></i>
					<span class="title">Nghiệp vụ</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{url('/nghiep_vu/ho_so/danh_sach')}}">
							<i class="icon-users"></i>
							Danh sách cán bộ</a>
						</li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-folder-open-o"></i> Quản lý hồ sơ <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu" style="margin-left: 15px;">
                                <li><a href="{{url('nghiep_vu/quan_ly/tai_lieu/maso=all')}}">Tài liệu kèm theo</a></li>
                                <li><a href="{{url('nghiep_vu/quan_ly/quan_he_bt/maso=all')}}">Quan hệ gia đình (bản thân)</a></li>
                                <li><a href="{{url('nghiep_vu/quan_ly/quan_he_vc/maso=all')}}">Quan hệ gia đình (vợ, chồng)</a></li>
                                <li><a href="{{url('nghiep_vu/quan_ly/dieu_dong/maso=all')}}">Hồ sơ luân chuyển</a></li>
                                <li><a href="{{url('nghiep_vu/quan_ly/chuc_vu/maso=all')}}">Hồ sơ phòng ban, chức vụ</a></li>
                                <li><a href="{{url('nghiep_vu/quan_ly/bhyt/maso=all')}}">Theo dõi bảo hiểm y tế</a></li>
                                <li><a href="{{url('nghiep_vu/quan_ly/llvt/maso=all')}}">Hồ sơ lực lượng vũ trang</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-folder-open-o"></i> Quản lý quá trình <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu" style="margin-left: 15px;">
                                <li><a href="{{url('nghiep_vu/qua_trinh/dao_tao/maso=all')}}">Quá trình đào tạo</a></li>
                                <li><a href="{{url('nghiep_vu/qua_trinh/cong_tac/maso=all')}}">Công tác trong nước</a></li>
                                <li><a href="{{url('nghiep_vu/qua_trinh/cong_tac_nn/maso=all')}}">Công tác nước ngoài</a></li>
                                <li><a href="{{url('nghiep_vu/qua_trinh/luong/maso=all')}}">Quá trình hưởng lương</a></li>
                                <li><a href="{{url('nghiep_vu/qua_trinh/phu_cap/maso=all')}}">Quá trình phụ cấp</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-calendar"></i> Bình bầu, đánh giá <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu" style="margin-left: 15px;">
                                <li><a href="{{url('nghiep_vu/danh_gia/binh_bau/maso=all')}}">Bình bầu, phân loại</a></li>
                                <li><a href="{{url('nghiep_vu/danh_gia/khen_thuong/maso=all')}}">Khen thưởng</a></li>
                                <li><a href="{{url('nghiep_vu/danh_gia/ky_luat/maso=all')}}">Kỷ luật</a></li>
                                <li><a href="{{url('nghiep_vu/danh_gia/thanh_tra/maso=all')}}">Thanh tra</a></li>
                                <li><a href="{{url('nghiep_vu/danh_gia/nhan_xet/maso=all')}}">Đánh giá, nhận xét</a></li>
                            </ul>
                        </li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-sitemap fa-fw"></i>
					<span class="title">Chức năng</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                        <li>
                            <a href="{{url('chuc_nang/bang_luong/danh_sach')}}">Bảng lương</a>
                        </li>
                        <li>
                            <a href="{{url('chuc_nang/nang_luong/danh_sach')}}">Nâng lương</a>
                        </li>
                        <li>
                            <a href="{{url('chuc_nang/het_tap_su/danh_sach')}}">Hết tập sư</a>
                        </li>
                        <li>
                            <a href="{{url('chuc_nang/huu_tri/danh_sach')}}">Nghỉ hưu</a>
                        </li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-search"></i>
					<span class="title">Tra cứu</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                        <li><a href="{{url('/tra_cuu/ho_so')}}">Hồ sơ cán bộ</a></li>
                        <li><a href="{{url('/tra_cuu/cong_tac')}}">Quá trình công tác</a></li>
                        <li><a href="{{url('/tra_cuu/dao_tao')}}">Quá trình đào tạo</a></li>
                        <li><a href="{{url('/tra_cuu/luong')}}">Quá trình hưởng lương</a></li>
                        <li><a href="{{url('/tra_cuu/phu_cap')}}">Quá trình phụ cấp</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					<span class="title">Báo cáo</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                        <li><a href="{{url('bao_cao/don_vi')}}">Báo cáo số lượng, chất lượng cán bộ</a></li>
                        <li><a href="{{url('bao_cao/mau_chuan')}}">Báo cáo theo thông tư, quyết định</a></li>
					</ul>
				</li>
				<li class="last">
					<a href="javascript:;">
					<i class="fa fa-gear"></i>
					<span class="title">Hệ thống</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-list-alt"></i> Danh mục <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu" style="margin-left: 15px;">
                                <li><a href="{{url('danh_muc/dan_toc/index')}}">Dân tộc</a></li>
                                <li><a href="{{url('danh_muc/phong_ban/index')}}">Phòng ban</a></li>
                                <li><a href="{{url('danh_muc/phu_cap/index')}}">Phụ cấp</a></li>
                                <li><a href="{{url('danh_muc/chuc_vu_d/index')}}">Chức vụ đảng</a></li>
                                <li><a href="{{url('danh_muc/chuc_vu_cq/index')}}">Chức vụ chính quyền</a></li>
                                <li><a href="{{url('danh_muc/quan_he_gd/index')}}">Quan hệ gia đình</a></li>
                                <li><a href="{{url('danh_muc/cong_tac/index')}}">Phân loại công tác</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-user"></i> Người dùng <span class="arrow"></span>
                            </a>

                            <ul class="sub-menu" style="margin-left: 15px;">
                                <li><a href="{{url('change-password')}}">Đổi mật khẩu</a></li>
                                <!--li><a href="{{url('phanquyen')}}">Phân quyền</a></li-->
                            </ul>
                        </li>
                        @if(session('admin')->level != 'X')
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-book-open"></i> Đơn vị <span class="arrow"></span>
                                </a>
                                    <ul class="sub-menu" style="margin-left: 15px;">
                                        <li><a href="{{url('danh_muc/don_vi/index')}}">Danh sách đơn vị</a></li>
                                    </ul>
                            </li>
                        @endif

					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE BREADCRUMB -->
            <div class="page-bar">
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                            <a href="{{url('')}}">Trang chủ</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        {{$pageTitle}}
                    </li>
                </ul>

                <div class="page-toolbar">
                    <div class="page-toolbar">
                        <b><div id="clock"></div></b>
                    </div>
                </div>
            </div>
            <!-- END PAGE BREADCRUMB -->
            @yield('content')
        </div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-tools">
       <!--  2016 &copy; LifeSoft <a href="" >Tiện ích hơn - Hiệu quả hơn</a>-->
        Số đăng ký bản quyền: 282/2015/QTG, được khai thác và phần phối bởi H2SOFT
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{url('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{url('assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->

<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ url('js/main.js') }}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/bootstrap-daterangepicker/moment.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{url('assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/bootstrap-toastr/toastr.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/layout4/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/layout4/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/pages/scripts/tasks.js')}}" type="text/javascript"></script>

@yield('custom-script')
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>