@extends('admin.layout')
@section('title','Trang quản trị')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-default card-view panel-refresh">
                        <div class="refresh-container">
                            <div class="la-anim-1"></div>
                        </div>
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Budget</h6>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="pull-left inline-block refresh">
                                    <i class="zmdi zmdi-replay"></i>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div id="e_chart_3" class="" style="height:294px;"></div>
                                <div class="label-chatrs mt-15">
                                    <div class="inline-block mr-15">
                                        <span class="clabels inline-block bg-green mr-5"></span>
                                        <span class="clabels-text font-12 inline-block txt-dark capitalize-font">planned</span>
                                    </div>
                                    <div class="inline-block">
                                        <span class="clabels inline-block bg-light-green mr-5"></span>
                                        <span class="clabels-text font-12 inline-block txt-dark capitalize-font">actual</span>
                                    </div>									
                                </div>
                            </div>	
                        </div>
                </div>
            </div>
        
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-default card-view panel-refresh">
                        <div class="refresh-container">
                            <div class="la-anim-1"></div>
                        </div>
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Pending Items</h6>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="pull-left inline-block refresh mr-15">
                                    <i class="zmdi zmdi-replay"></i>
                                </a>
                                <div class="pull-left inline-block dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>option 1</a></li>
                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>option 2</a></li>
                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>option 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div id="e_chart_1" class="" style="height:242px;"></div>
                            <div class="label-chatrs mt-15">
                                <div class="mb-5">
                                    <span class="clabels inline-block bg-green mr-5"></span>
                                    <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Actions pending</span>
                                </div>
                                <div class="mb-5">
                                    <span class="clabels inline-block bg-light-green mr-5"></span>
                                    <span class="clabels-text font-12 inline-block txt-dark capitalize-font">decision pending</span>
                                </div>
                                <div class="">
                                    <span class="clabels inline-block bg-xtra-light-green mr-5"></span>
                                    <span class="clabels-text font-12 inline-block txt-dark capitalize-font">chage request pending</span>
                                </div>										
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view panel-refresh">
                    <div class="refresh-container">
                        <div class="la-anim-1"></div>
                    </div>
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h6 class="panel-title txt-dark">Task Status</h6>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="pull-left inline-block refresh">
                                <i class="zmdi zmdi-replay"></i>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div id="e_chart_2" class="" style="height:330px;"></div>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- Footer -->
    <footer class="footer container-fluid pl-30 pr-30">
        <div class="row">
            <div class="col-sm-12">
                <p>2018 &copy; Droopy. Pampered by Hencework</p>
            </div>
        </div> 
    </footer>
    <!-- /Footer -->
    
</div>
@endsection
@section('modal')
@endsection