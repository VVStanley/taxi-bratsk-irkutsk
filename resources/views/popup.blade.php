<!-- Contact form pop-up element content -->
<div id="contact_panel" class="mfp-hide contact-popup">
    <div class="contact-popup-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- Contact form pop-up element -->
                    <div class="contactForm pop-up-form">
                        <!-- Google reCaptcha required javascript file -->
                        <script src='https://www.google.com/recaptcha/api.js'></script>

                        <!-- Title -->
                        <h3 class="m_title m_title_ext text-custom contact-popup-title tcolor">
                            Заказать обратный звонок
                        </h3>
                        <h4 class="tbk__subtitle fw-thin">
                            Оставьте свой номер телефона и мы перезвоним вам
                        </h4>

                        <form action="{{ route('post') }}" method="post" class="contact_form row mt-20" enctype="multipart/form-data">
                            <div class="cf_response"></div>

                            <div class="col-sm-12 kl-fancy-form">
                                <input type="text" name="phone" class="form-control h5-email" placeholder="Введите свой номер телефона" value="" tabindex="1" maxlength="35">
                                <label class="control-label">
                                    Телефон
                                </label>
                                <span class="error"></span>
                                <span class="success"></span>
                            </div>

                            {{ csrf_field() }}

                            <div class="col-sm-12">
                                <!-- Contact form send button -->
                                <button class="btn btn-fullcolor" type="submit">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--/ Contact form pop-up element -->
                </div>
                <!--/ col-md-12 col-sm-12 -->
            </div>
            <!--/ .row -->
        </div>
        <!--/ .container -->
    </div>
    <!--/ .contact-popup-panel -->
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<!--/ Contact form pop-up element content -->
