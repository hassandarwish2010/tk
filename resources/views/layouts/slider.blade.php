<section class="wpb_row vc_row-fluid no-padding"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper "  ><link href="http://fonts.googleapis.com/css?family=Dosis:300%7CRaleway:300" rel="stylesheet" property="stylesheet" type="text/css" media="all">

                    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:transparent;padding:0px;">
                        <!-- START REVOLUTION SLIDER 5.4.8 fullscreen mode -->
                        <div class="col-12">
                            @if(session()->has('success_msg'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_msg') }}
                                </div>
                            @endif
                        </div>
                        <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
                            <ul>	<!-- SLIDE  -->
                                @foreach($banners as $index=>$banner)
                                <li data-index="rs-{{$index}}" data-transition="parallaxtoright" data-slotamount="10" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="800"  data-thumb="{{$banner->image}}"  data-delay="5000"  data-rotate="0"  data-saveperformance="off"
                                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{$banner->image}}"  alt="" title="wide8"  width="1920" height="1100" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption   tp-resizeme  big-white"
                                         id="slide-{{$index}}-layer-5"
                                         data-x=""
                                         data-y="160"
                                         data-width="['auto']"
                                         data-height="['auto']"

                                         data-type="text"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":400,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"easeInOutExpo"},{"delay":"wait","speed":450,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
{{--LATEST--}}
                                         style="z-index: 5; white-space: nowrap; font-size: 16px; line-height: 21px; font-weight: 300; color: rgba(250,183,2,1); letter-spacing: px;font-family:Dosis;text-transform:uppercase;"> </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption   tp-resizeme  ultra-big-white" id="slide-1-layer-2" data-x=""
                                         data-y="center" data-voffset=""
                                         data-width="['auto']"
                                         data-height="['auto']"

                                         data-type="text"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":500,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"easeInOutExpo"},{"delay":"wait","speed":400,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 6; white-space: nowrap; font-size: 72px; line-height: inheritpx; font-weight: 300; color: rgba(255,255,255,1); letter-spacing: px;font-family:Dosis;text-transform:uppercase;">{{$banner->en_title}}</div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption   tp-resizeme  text-center"
                                         id="slide-1-layer-7"
                                         data-x=""
                                         data-y="310"
                                         data-width="['auto']"
                                         data-height="['auto']"

                                         data-type="text"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":600,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"easeInOutExpo"},{"delay":"wait","speed":450,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"

                                         style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 24px; font-weight: 300; color: rgba(221,221,221,1); letter-spacing: px;font-family:Raleway;">{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $banner->en_description)) }}</div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption   tp-resizeme  text-left"
                                         id="slide-1-layer-6"
                                         data-x=""
                                         data-y="385"
                                         data-width="['auto']"
                                         data-height="['auto']"

                                         data-type="text"
                                         data-responsive_offset="on"

                                         data-frames='[{"delay":700,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"easeInOutExpo"},{"delay":"wait","speed":300,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']"
                                         data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                          {{--View Project--}}
                                         {{--style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: transparent; letter-spacing: px;"><a href="#" class="btn-slider"></a>--}}
                                    </div>
                                </li>
                                @endforeach

                                    <!-- SLIDE  -->
                            </ul>
                            <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                                if(htmlDiv) {
                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                }else{
                                    var htmlDiv = document.createElement("div");
                                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                }
                            </script>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                        <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                            if(htmlDiv) {
                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                            }else{
                                var htmlDiv = document.createElement("div");
                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                            }
                        </script>
                        <script type="text/javascript">
                            if (setREVStartSize!==undefined) setREVStartSize(
                                {c: '#rev_slider_1_1', gridwidth: [1170], gridheight: [500], sliderLayout: 'fullscreen', fullScreenAutoWidth:'off', fullScreenAlignForce:'off', fullScreenOffsetContainer:'', fullScreenOffset:''});

                            var revapi1,
                                tpj;
                            (function() {
                                if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();
                                function onLoad() {
                                    if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
                                    if(tpj("#rev_slider_1_1").revolution == undefined){
                                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                                    }else{
                                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                            sliderType:"standard",
                                            jsFileLocation:"//demo.archiwp.com/studio-version/wp-content/plugins/revslider/public/assets/js/",
                                            sliderLayout:"fullscreen",
                                            dottedOverlay:"none",
                                            delay:15000,
                                            navigation: {
                                                keyboardNavigation:"off",
                                                keyboard_direction: "horizontal",
                                                mouseScrollNavigation:"off",
                                                mouseScrollReverse:"default",
                                                onHoverStop:"on",
                                                touch:{
                                                    touchenabled:"on",
                                                    touchOnDesktop:"off",
                                                    swipe_threshold: 75,
                                                    swipe_min_touches: 1,
                                                    swipe_direction: "horizontal",
                                                    drag_block_vertical: false
                                                }
                                                ,
                                                arrows: {
                                                    style:"",
                                                    enable:true,
                                                    hide_onmobile:false,
                                                    hide_onleave:true,
                                                    hide_delay:200,
                                                    hide_delay_mobile:1200,
                                                    tmp:'',
                                                    left: {
                                                        h_align:"left",
                                                        v_align:"center",
                                                        h_offset:20,
                                                        v_offset:0
                                                    },
                                                    right: {
                                                        h_align:"right",
                                                        v_align:"center",
                                                        h_offset:20,
                                                        v_offset:0
                                                    }
                                                }
                                            },
                                            visibilityLevels:[1240,1024,778,480],
                                            gridwidth:1170,
                                            gridheight:500,
                                            lazyType:"none",
                                            shadow:0,
                                            spinner:"off",
                                            stopLoop:"off",
                                            stopAfterLoops:-1,
                                            stopAtSlide:-1,
                                            shuffle:"off",
                                            autoHeight:"off",
                                            fullScreenAutoWidth:"off",
                                            fullScreenAlignForce:"off",
                                            fullScreenOffsetContainer: "",
                                            fullScreenOffset: "",
                                            disableProgressBar:"on",
                                            hideThumbsOnMobile:"off",
                                            hideSliderAtLimit:0,
                                            hideCaptionAtLimit:0,
                                            hideAllCaptionAtLilmit:0,
                                            debugMode:false,
                                            fallbacks: {
                                                simplifyAll:"off",
                                                nextSlideOnWindowFocus:"off",
                                                disableFocusListener:false,
                                            }
                                        });
                                    }; /* END OF revapi call */

                                }; /* END OF ON LOAD FUNCTION */
                            }()); /* END OF WRAPPING FUNCTION */
                        </script>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div></div></div></div>
</section>