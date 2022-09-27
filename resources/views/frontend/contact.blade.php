@include('frontend.header');
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="{{asset('frontend/img/project/project16.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Contact With Us</h1>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>Contacts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Contact Page Area Start Here -->
        <section class="contact-wrap-layout2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-box-layout2">
                            <div id="googleMap" class="google-map" style="width:100%; height:480px; border-radius: 4px;"></div>
                            <div class="contact-form">
                                <div class="heading-layout3">
                                    <h3 class="mg-b-10">Leave a Reply</h3>
                                    <p>when an unknown printer took a galley of  type and scrambled it to make.</p>
                                </div>
                                <form class="contact-form-box" id="contact-form">
                                    <div class="row gutters-15">
                                        <div class="col-md-6 col-12 form-group">
                                            <input type="text" placeholder="Name *" class="form-control" name="name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
                                            <input type="email" placeholder="E-mail *" class="form-control" name="email" data-error="email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
                                            <input type="text" placeholder="Phone *" class="form-control" name="phone" data-error="Phone field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
                                            <input type="text" placeholder="Subject *" class="form-control" name="subject" data-error="Subject field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea placeholder="Comments *" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" 
                                            data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <button type="submit" class="btn-fill-xl bg-Primary text-textprimary border-none">Send Now</button>
                                        </div>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar-break-md sidebar-widget-area">
                        <div class="widget widget-contact-info">
                            <div class="media">
                                <div class="item-icon">
                                    <i class="flaticon-call-answer"></i>
                                </div>
                                <div class="media-body space-md">
                                    <h4>Phone:</h4>
                                    <ul>
                                        <li>+8123 456 788 99,</li>
                                        <li>+8123 (456) 788 99</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-icon">
                                    <i class="flaticon-message"></i>
                                </div>
                                <div class="media-body space-md">
                                    <h4>E-mail:</h4>
                                    <ul>
                                        <li>info@roofing.com</li>
                                        <li>info@roofing.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="media">
                                <div class="item-icon">
                                    <i class="flaticon-maps-and-flags"></i>
                                </div>
                                <div class="media-body space-md">
                                    <h4>Location:</h4>
                                    <ul>
                                        <li>51 Street, Newyork City, NYPD</li>
                                        <li>18 Street, Newyork City, NYPD</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-banner">
                            <div class="banner-img">
                                <img src="{{asset('frontend/img/figure/widget-banner.jpg')}}" alt="Banner">
                                <div class="item-content">
                                    <div class="big-text">Available</div>
                                    <div class="sub-text">for any type of Roof construction</div>
                                    <a href="#" class="item-btn">Make An Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Page Area End Here -->
      @include('frontend.footer');