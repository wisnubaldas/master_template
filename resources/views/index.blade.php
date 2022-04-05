@extends('vendor.valex.index',['title'=>'Dashboard Menu'])

@section('right-content')
<div class="main-dashboard-header-right">
    <div>
        <label class="tx-13">Customer Ratings</label>
        <div class="main-star">
            <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
        </div>
    </div>
    <div>
        <label class="tx-13">Online Sales</label>
        <h5>563,275</h5>
    </div>
    <div>
        <label class="tx-13">Offline Sales</label>
        <h5>783,675</h5>
    </div>
</div>
@endsection

@section('breadcrumb')
    <div class="left-content">
        <div>
        <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
        <p class="mg-b-0">Sales monitoring dashboard template.</p>
        </div>
    </div>
@endsection

@section('content')
<div class="row row-sm">
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12 ">
        <div class="card overflow-hidden sales-card bg-primary-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">TODAY ORDERS</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">$5,74.12</h4>
                            <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                        </div>
                        <span class="float-right my-auto ml-auto">
                            <i class="fas fa-arrow-circle-up text-white"></i>
                            <span class="text-white op-7"> +427</span>
                        </span>
                    </div>
                </div>
            </div>
            <span id="compositeline" class="pt-1"><canvas style="display: inline-block; width: 283px; height: 30px; vertical-align: top;" width="283" height="30"></canvas></span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-danger-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">TODAY EARNINGS</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">$1,230.17</h4>
                            <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                        </div>
                        <span class="float-right my-auto ml-auto">
                            <i class="fas fa-arrow-circle-down text-white"></i>
                            <span class="text-white op-7"> -23.09%</span>
                        </span>
                    </div>
                </div>
            </div>
            <span id="compositeline2" class="pt-1"><canvas style="display: inline-block; width: 283px; height: 30px; vertical-align: top;" width="283" height="30"></canvas></span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-success-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">TOTAL EARNINGS</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">$7,125.70</h4>
                            <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                        </div>
                        <span class="float-right my-auto ml-auto">
                            <i class="fas fa-arrow-circle-up text-white"></i>
                            <span class="text-white op-7"> 52.09%</span>
                        </span>
                    </div>
                </div>
            </div>
            <span id="compositeline3" class="pt-1"><canvas style="display: inline-block; width: 283px; height: 30px; vertical-align: top;" width="283" height="30"></canvas></span>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-warning-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">PRODUCT SOLD</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">$4,820.50</h4>
                            <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                        </div>
                        <span class="float-right my-auto ml-auto">
                            <i class="fas fa-arrow-circle-down text-white"></i>
                            <span class="text-white op-7"> -152.3</span>
                        </span>
                    </div>
                </div>
            </div>
            <span id="compositeline4" class="pt-1"><canvas style="display: inline-block; width: 283px; height: 30px; vertical-align: top;" width="283" height="30"></canvas></span>
        </div>
    </div>
        <div class="col-xl-4 col-lg-4">
            <div class="img-thumbnail  mb-3">
                <a href="#">
                    <img src="../../assets/img/photos/4.jpg" alt="thumb1" class="thumbimg wd-100p">
                </a>
                <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="btn btn-list pl-0 pb-0">
                        <a href="#" class="btn ripple btn-primary" role="button">Button</a>
                        <a href="#" class="btn ripple btn-secondary" role="button">Button</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="img-thumbnail  mb-3">
                <a href="#">
                    <img src="../../assets/img/photos/9.jpg" alt="thumb1" class="thumbimg  wd-100p">
                </a>
                <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="btn btn-list pl-0 pb-0">
                        <a href="#" class="btn ripple btn-primary" role="button">Button</a>
                        <a href="#" class="btn ripple btn-secondary" role="button">Button</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="img-thumbnail  mb-3">
                <a href="#">
                    <img src="/assets/img/photos/8.jpg" alt="thumb1" class="thumbimg  wd-100p">
                </a>
                <div class="caption">
                    <h5>Thumbnail label</h5>
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="btn btn-list pl-0 pb-0">
                        <a href="#" class="btn ripple btn-primary" role="button">Button</a>
                        <a href="#" class="btn ripple btn-secondary" role="button">Button</a>
                    </div>
                </div>
            </div>
        </div>
</div>


    {{-- @livewire('dashboard') --}}
    {{-- @dump($menu_data) --}}

@endsection