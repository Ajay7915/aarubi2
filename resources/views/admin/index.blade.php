

@include('admin.header')
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{$review}}</h2>
                                <div class="m-b-5">Review</div><i class="ti-shopping-cart widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-primary color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{$message}}</h2>
                                <div class="m-b-5">Client Requiest</div><i class="ti-shopping-cart widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{$product}}</h2>
                                <div class="m-b-5">Product</div><i class="ti-shopping-cart widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
               
               
                
            </div>
            <!-- END PAGE CONTENT-->
            @include('admin.footer')
            
          