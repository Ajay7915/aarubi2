@include('frontend.header');
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="{{asset('frontend/img/figure/pg1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Our Services</h1>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here --> 
        <!-- Service Area Start Here -->
        <section class="about-wrap-layout3 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-box-layout4">
                            <div class="about-box-img">
                                <div class="item-img">
                                    <img src="{{asset('frontend/img/about/about1.jpg')}}" alt="service">
                                </div>
                                <div class="sl-number">01</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-box-layout4">
                            <div class="about-box-content">
                                <h2 class="item-title">Damage Roof Repair</h2>
                                <div class="item-subtitle">With More Than Half a Century of Experience And thousands of Innovative</div>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet they consec tetur, adipisci velit, 
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatemo 
                                    qui quia dolor sit amedipisci develit.</p>
                                <a href="#" class="ghost-btn-lg primary-border text-Primary mg-t-15">LEARN MORE<i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-4">
                        <div class="about-box-layout5">
                            <div class="about-box-img">
                                <div class="item-img">
                                    <img src="{{asset('frontend/img/service/service20.jpg')}}" alt="service">
                                </div>
                                <div class="sl-number">02</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-3">
                        <div class="about-box-layout5">
                            <div class="about-box-content">
                                <h2 class="item-title">Roof Siding</h2>
                                <div class="item-subtitle">With More Than Half a Century of Experience And thousands of Innovative</div>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet they consec tetur, adipisci velit, 
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatemo 
                                    qui quia dolor sit amedipisci develit.</p>
                                <a href="#" class="ghost-btn-lg primary-border text-Primary mg-t-15">LEARN MORE<i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-5">
                        <div class="about-box-layout4">
                            <div class="about-box-img">
                                <div class="item-img">
                                    <img src="img/service/service21.jpg" alt="service">
                                </div>
                                <div class="sl-number">03</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-6">
                        <div class="about-box-layout4">
                            <div class="about-box-content">
                                <h2 class="item-title">Roof Insulation</h2>
                                <div class="item-subtitle">With More Than Half a Century of Experience And thousands of Innovative</div>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet they consec tetur, adipisci velit, 
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatemo 
                                    qui quia dolor sit amedipisci develit.</p>
                                <a href="#" class="ghost-btn-lg primary-border text-Primary mg-t-15">LEARN MORE<i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-8">
                        <div class="about-box-layout5">
                            <div class="about-box-img">
                                <div class="item-img">
                                    <img src="img/service/service22.jpg" alt="service">
                                </div>
                                <div class="sl-number">04</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-7">
                        <div class="about-box-layout5">
                            <div class="about-box-content">
                                <h2 class="item-title">Roof Replacement</h2>
                                <div class="item-subtitle">With More Than Half a Century of Experience And thousands of Innovative</div>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet they consec tetur, adipisci velit, 
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatemo 
                                    qui quia dolor sit amedipisci develit.</p>
                                <a href="#" class="ghost-btn-lg primary-border text-Primary mg-t-15">LEARN MORE<i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Area End Here -->
        <!-- Call To Action Area Start Here -->
        <section class="action-wrap-layout1 bg-common" data-bg-image="img/figure/banner-shape.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-12">
                        <div class="action-box-layout1">
                            <h2 class="item-title">Get Your Roofing Project Started Today!</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 d-flex justify-content-lg-end justify-content-center">
                        <div class="action-box-layout1">
                           <a href="#" class="btn-fill-xl box-shadow bg-textprimary text-accent">GET A QUOTE<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Area End Here -->
    @include('frontend.footer');