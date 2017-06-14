@if($slide = Slide::findBySlug('anasayfa'))
    @if(count($slide)>0)
        <div class="relative">
            <div id="rev_slider_110_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="rotating-words82" style="background-color:#e5e5e5;padding:0px;">
                <div id="rev_slider_110_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
                    <ul>    <!-- SLIDE  -->
                        @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
                            @if($slider->video)
                                <li data-index="rs-333"
                                    data-transition="fade"
                                    data-slotamount="default"
                                    data-easein="Power3.easeInOut"
                                    data-easeout="Power3.easeInOut"
                                    data-masterspeed="1500"
                                    data-thumb="{{ \Imagy::getImage($slider->files()->first()->filename, 'anasayfa_slider', ['width' => 100, 'height' => 50, 'mode' => 'fit', 'quality' => 80]) }}"
                                    data-rotate="0"
                                    data-saveperformance="off"
                                    data-title="Intro"
                                    data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{ \Imagy::getImage($slider->files()->first()->filename, 'anasayfa_slider', ['width' => 1170, 'height' => 471, 'mode' => 'fit', 'quality' => 80]) }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- BACKGROUND VIDEO LAYER -->
                                    <div class="rs-background-video-layer"
                                         data-forcerewind="on"
                                         data-volume="mute"
                                         data-videowidth="100%"
                                         data-videoheight="100%"
                                         data-videomp4="{{ $slider->video }}"
                                         data-videopreload="preload"
                                         data-videoloop="loopandnoslidestop"
                                         data-forceCover="1"
                                         data-aspectratio="16:9"
                                         data-autoplay="true"
                                         data-autoplayonlyfirsttime="false"
                                         data-nextslideatend="true"
                                    ></div>

                                    @if($slider->title)
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption RotatingWords-TitleWhite tp-resizeme rs-parallaxlevel-0"
                                         id="slide-333-layer-1"
                                         data-x="center"
                                         data-y="middle"
                                         data-voffset="-100"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="s:300;s:300;"
                                         data-start="750"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 6; white-space: nowrap;">{{ $slider->title }}
                                    </div>
                                    @endif

                                    @if($slider->sub_title)
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption RotatingWords-TitleWhite tp-resizeme rs-parallaxlevel-0"
                                         id="slide-333-layer-11"
                                         data-x="center"
                                         data-y="middle"
                                         data-voffset="10"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="sX:0.8;sY:0.8;opacity:0;s:500;e:Power4.easeOut;"
                                         data-transform_out="sX:0.9;sY:0.9;opacity:0;s:500;e:Power3.easeIn;s:500;e:Power3.easeIn;"
                                         data-start="1500"
                                         data-splitin="chars"
                                         data-splitout="chars"
                                         data-responsive_offset="on"
                                         data-elementdelay="0.1"
                                         data-endelementdelay="0.03"
                                         style="z-index: 7; white-space: nowrap; color: rgba(255, 217, 53, 1.00);">{{ $slider->sub_title }}
                                    </div>
                                    @endif

                                    @if($slider->content)
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption small_text tp-resizeme rs-parallaxlevel-0"
                                         id="slide-333-layer-11"
                                         data-x="center"
                                         data-y="middle"
                                         data-voffset="100"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="sX:0.8;sY:0.8;opacity:0;s:500;e:Power4.easeOut;"
                                         data-transform_out="sX:0.9;sY:0.9;opacity:0;s:500;e:Power3.easeIn;s:500;e:Power3.easeIn;"
                                         data-start="2000"
                                         data-splitin="chars"
                                         data-splitout="chars"
                                         data-responsive_offset="on"
                                         data-elementdelay="0.1"
                                         data-endelementdelay="0.03"
                                         style="z-index: 7; white-space: nowrap; color: rgba(255, 217, 53, 1.00);">{{ $slider->content }}
                                    </div>
                                    @endif

                                    @if(isset($slider->link))
                                    <!-- LAYER NR. 7 -->
                                    <div class="tp-caption RotatingWords-Button rev-btn rs-parallaxlevel-0"
                                         id="slide-333-layer-7"
                                         data-x="center"
                                         data-y="middle"
                                         data-voffset="200"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                         data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                                         data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;"
                                         data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                         data-start="750"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         data-responsive="off"
                                         style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><a style="color:#ffffff;" href="{{ $slider->link->url }}">{{ $slider->link->title }}</a>
                                    </div>
                                    @endif

                                    <!-- LAYER NR. 8 -->
                                    <div class="tp-caption RotatingWords-SmallText tp-resizeme rs-parallaxlevel-0"
                                         id="slide-333-layer-16"
                                         data-x="center"
                                         data-y="bottom"
                                         data-voffset="20"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-visibility="['on','on','off','off']"
                                         data-transform_idle="o:1;"

                                         data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                         data-transform_out="opacity:0;s:300;s:300;"
                                         data-start="2500"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-basealign="slide"
                                         data-responsive_offset="off"
                                         style="z-index: 12; white-space: nowrap; font-weight: 700; color: rgba(255, 255, 255, 0.35);">{{ trans('themes::slider.titles.notification') }}<i class="pe-7s-mouse" style="font-size:20px;"></i>
                                    </div>
                                </li>

                            @endif
                        @endforeach

                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div>


        @push('styles')
        {!! Theme::style('vendor/revo-slider/css/revolution-slider.css') !!}
        @endpush

        @push('scripts')
        {!! Theme::script('js/revolution-slider.min.js') !!}
        @endpush

        @push('js_inline')
        <script type="text/javascript">
            var tpj=jQuery;
            var revapi110;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_110_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_110_1");
                }else{
                    revapi110 = tpj("#rev_slider_110_1").show().revolution({
                        sliderType:"hero",
                        jsFileLocation:"../../revolution/js/",
                        sliderLayout:"fullscreen",
                        dottedOverlay:"none",
                        delay:20000,
                        navigation: {
                        },
                        responsiveLevels:[1240,1024,778,778],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[600,500,400,300],
                        lazyType:"none",
                        parallax: {
                            type:"mouse",
                            origo:"slidercenter",
                            speed:2000,
                            levels:[2,3,4,5,6,7,12,16,10,50],
                        },
                        shadow:0,
                        spinner:"off",
                        autoHeight:"off",
                        fullScreenAlignForce:"off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "60px",
                        disableProgressBar:"on",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            disableFocusListener:false,
                        }
                    });
                    var api = revapi110,
                            ElementsToBlur = api.find('.toblur.tp-caption'),
                            ElementsToUnBlur = api.find('.tounblur.tp-caption'),
                            UnBlurFactor = 2,
                            UnBlurStart = 3,
                            UnBlurEnd = 0,
                            BlurStart = 0,
                            BlurEnd = 5,
                            BlurFactor = 2,
                            blurCall = new Object();
                    blurCall.inmodule = "parallax";
                    blurCall.atposition = "start";
                    blurCall.callback = function() {
                        var proc = api.revgetparallaxproc(),
                                blur = UnBlurStart+(proc*UnBlurStart*UnBlurFactor)+UnBlurEnd,
                                nblur = Math.abs(proc*BlurEnd*BlurFactor)+BlurStart;

                        blur = blur<UnBlurEnd?UnBlurEnd:blur;
                        nblur = nblur>BlurEnd?BlurEnd:nblur;

                        ElementsToUnBlur = jQuery(ElementsToUnBlur.selector);
                        punchgs.TweenLite.set(ElementsToUnBlur,{'-webkit-filter':'blur('+(blur)+'px)', 'filter':'blur('+(blur)+'px)'});
                        punchgs.TweenLite.set(ElementsToBlur,{'-webkit-filter':'blur('+(nblur)+'px)', 'filter':'blur('+(nblur)+'px)'});
                    }

                    api.bind("revolution.slide.layeraction",function (e) {
                        blurCall.callback();
                    });
                }
            });	/*ready*/
        </script>
        @endpush

    @endif
@endif