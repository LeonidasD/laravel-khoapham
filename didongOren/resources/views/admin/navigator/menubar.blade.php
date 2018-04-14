<div id="menubar" class="menubar-inverse ">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="../../html/dashboards/dashboard.html">
                <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel">

        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">

            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="../../html/dashboards/dashboard.html" class="active">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">THANH ĐIỀU HƯỚNG</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->

            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="{{route('productList')}}" >
                    <div class="gui-icon"><i class="md md-web"></i></div>
                    <span class="title">Sản phẩm</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->

            <!-- BEGIN DASHBOARD -->
            <li>
                <a href="{{route('billList')}}" >
                    <div class="gui-icon"><i class="md md-check"></i></div>
                    <span class="title">Đơn hàng</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->



        </ul><!--end .main-menu -->
        <!-- END MAIN MENU -->

        <div class="menubar-foot-panel">
            <small class="no-linebreak hidden-folded">
                <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
            </small>
        </div>
    </div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->