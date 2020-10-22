@isset($slides)
    @if($slides->count()>0)
        <section class="row bannercontainer p0">
            <div class="preloader"><img src="{{ Theme::url('vendors/rs-plugin/assets/loader.gif') }}" alt="Loader"></div>
            <div class="row m0">
                <div class="banner main_slider">
                    <ul>
                        @foreach($slides as $slider)
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="200" class="second-slide">
                                <!--Main Image-->
                                <img data-lazyload="{{ $slider->present()->firstImage(1970, 600, 'fit', 75) }}" alt="{{ $slider->title }}" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
                                <!--Main Image-->
                                <div class="container">
                                    @if(!empty($slider->sub_title))
                                        <div class="heading tp-caption random fade"
                                             data-speed="3000"
                                             data-start="500"
                                             data-easing="Cubic.easeInOut">
                                            {!! $slider->sub_title !!}
                                        </div>
                                    @endif
                                    @if(!empty($slider->content))
                                    <!--layer1-->
                                        <div class="para tp-caption slideleft incube"
                                             data-speed="3000"
                                             data-start="200"
                                             data-easing="easeOutBounce">
                                            {!! $slider->content !!}
                                        </div>
                                    @endif
                                    @if($slider->link_type != 'none')
                                    <!--layer2-->
                                        <div class="link tp-caption slideup slideup"
                                             data-speed="3000"
                                             data-start="200"
                                             data-easing="easeInQuad">
                                            <a target="{{ $slider->link->target }}" href="{{ $slider->link->url }}" class="view_all">{{ $slider->link->title }}</a>
                                        </div>
                                        <!--layer 3-->
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    @endif
@endif
