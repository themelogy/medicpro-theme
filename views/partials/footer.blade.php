<footer class="row">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-3 footer_logo">
                <img src="{{ Theme::url('images/logo/logo-responsive.svg') }}" alt="@setting('theme::company-name')" style="height: 80px; margin-bottom: 20px;">
                <p style="font-weight: 600; text-transform: uppercase;">@setting('theme::company-name')</p>
                <p>@lang('themes::theme.footer.intro')</p>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-3 footer_address">
                <div class="row address m0">
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body address_text">
                            @component('contact::components.direction-us', ["class"=>""])
                                @setting('theme::address')
                            @endcomponent
                        </div>
                    </div>
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-envelope"></i></div>
                        <div class="media-body address_text"><a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a></div>
                    </div>
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-phone"></i></div>
                        <div class="media-body address_text"><a href="tel:{{ setting('theme::phone') }}">@setting('theme::phone')</a></div>
                    </div>
                    <div class="media address_line">
                        <div class="media-left icon"><i class="fa fa-mobile-phone"></i></div>
                        <div class="media-body address_text"><a href="tel:{{ setting('theme::phone') }}">@setting('theme::mobile')</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-6 footer_menuList">
                <div class="row m0"></div>
                <div class="row menuList">
                    {!! Menu::render('footer1', \Modules\Theme\Medicpro\Presenters\FooterMenuLinksPresenter::class) !!}
                    {!! Menu::render('footer2', \Modules\Theme\Medicpro\Presenters\FooterMenuSecondLinksPresenter::class) !!}
                    {!! Menu::render('footer3', \Modules\Theme\Medicpro\Presenters\FooterMenuThirdLinksPresenter::class) !!}
                </div>
            </div>
        </div>
        <div class="row m0 footer_bottom">
            @include('partials.components.socials')
            <div class="fright copyright">&copy;@lang('themes::theme.footer.copyrights', ['company' => setting('theme::company-name'), 'date' => \Carbon\Carbon::now()->year])</div>
        </div>
    </div>
</footer>
