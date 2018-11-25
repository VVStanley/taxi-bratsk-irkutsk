<!-- Screenshot Box section with custom paddings -->
<section class="hg_section pt-100 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <!-- Screenshot box element -->
                <div class="screenshot-box">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title tcolor text-center">
                                {{ $h1 }}
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <!-- Left side -->
                            <div class="left-side">
                                <!-- Title -->
                                <h2 class="title text-left mb-20 mt-30">
                                    Немного о нас
                                </h2>

                                <p>
                                    {{ $text }}
                                </p>

                            </div>
                            <!--/ Left side -->
                        </div>
                        <!--/ col-sm-12 col-md-12 col-lg-6 -->

                        <div class="col-sm-12 col-md-12 col-lg-6 mt-30">
                            <!-- Screenshot-box slider -->
                            <div class="screenshot-slider">
                                <div class="js-slick" data-slick='{
											"appendDots": ".screenshot-slider .screenshotBox-slickNav",
											"arrows": false,
											"dots": true,
											"dotsClass": "slick-dots",
											"infinite": true,
											"autoplay": true,
											"speed": 500,
											"fade": true
										}'>
                                    <!-- Slide 1 -->
                                    <div>
                                        <!-- Image -->
                                        <img src="/images/taxi-1.jpg" width="580" height="380" alt="" title="" />
                                        <!--/ Image -->
                                    </div>
                                    <!--/ Slide 1 -->

                                    <!-- Slide 2 -->
                                    <div>
                                        <!-- Image -->
                                        <img src="/images/taxi-3.jpg" width="580" height="380" alt="" title="" />
                                        <!--/ Image -->
                                    </div>
                                    <!--/ Slide 2 -->

                                    <!-- Slide 3 -->
                                    <div>
                                        <!-- Image -->
                                        <img src="/images/taxi-7.jpg" width="580" height="380" alt="" title="" />
                                        <!--/ Image -->
                                    </div>
                                    <!--/ Slide 3 -->
                                </div>
                                <!--/ .js-slick -->

                                <!-- Slick navigation -->
                                <div class="screenshotBox-slickNav clearfix"></div>
                            </div>
                            <!--/ Screenshot-box slider -->

                            <!-- Button -->
                            <a href="#gallery" target="_self" class="btn btn-fullcolor btn-third mt-20 float-right">Подробные фото</a>
                            <!--/ Button -->

                        </div>
                        <!--/ col-sm-12 col-md-12 col-lg-6 -->
                    </div>
                    <!--/ row -->
                </div>
                <!--/ Screenshot box element -->
            </div>
            <!--/ col-md-12 col-sm-12 -->
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</section>
<!--/ Screenshot Box section with custom paddings -->
