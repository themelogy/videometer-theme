<div class="mCustomScrollbar" data-mcs-theme="dark">
    <div class="popup right-menu">

        <div class="right-menu-wrap">

            <div class="user-menu-close js-close-aside">
                <a href="#" class="user-menu-content  js-clode-aside">
                    <span></span>
                    <span></span>
                </a>
            </div>

            <div class="logo">
                <a href="{{ url(locale()) }}" class="full-block-link"></a>
                <div class="logo-text">
                    <img src="{{ Theme::url("img/logo.png") }}" alt="{{ setting('core::site-name') }}">
                </div>
            </div>

        </div>

        <div class="widget login">

            <h4 class="login-title">Üye Girişi</h4>
            <input class="email input-standard-grey" placeholder="E-Posta" type="text">
            <input class="password input-standard-grey" placeholder="Şifre" type="password">
            <div class="login-btn-wrap">

                <div class="btn btn-medium btn--dark btn-hover-shadow">
                    <span class="text">Giriş Yap</span>
                    <span class="semicircle"></span>
                </div>

                <div class="remember-wrap">

                    <div class="checkbox">
                        <input id="remember" type="checkbox" name="remember" value="remember">
                        <label for="remember">Beni Hatırlar</label>
                    </div>

                </div>

            </div>

            <div class="helped">Şifremi unuttum?</div>
            <div class="helped">Kayıt ol</div>

        </div>



        <div class="widget contacts">

            <div class="contacts-item">
                <img src="{{ Theme::url("img/contact4.png") }}" alt="phone">
                <div class="content">
                    <a href="#" class="title">{{ setting('theme::phone') }}</a>
                    <p class="sub-title">{!! trans("themes::theme.footer.titles.phone") !!}</p>
                </div>
            </div>

            <div class="contacts-item">
                <img src="{{ Theme::url("img/contact5.png") }}" alt="phone">
                <div class="content">
                    <a href="mailto:{!! Html::email(setting('theme::email')) !!}" class="title">{!! Html::email(setting('theme::email')) !!}</a>
                    <p class="sub-title">{!! trans("themes::theme.footer.titles.email") !!}</p>
                </div>
            </div>

            <div class="contacts-item">
                <img src="{{ Theme::url("img/contact6.png") }}" alt="phone">
                <div class="content">
                    <p class="sub-title">{!! setting('theme::address') !!}</p>
                </div>
            </div>

        </div>

    </div>
</div>