
<!--====================== footer begin ==================== -->
<?php
   $blogs=App\News::orderBy('id','desc')->paginate(5);
  $setting=App\Setting::first();
$about=App\About::orderBy('id','asc')->first();
?>


<section style="height: 5px" class="wpb_row vc_row-fluid call-to-action bg-color text-center vc_custom_1442204650520 no-padding">

</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div id="text-3" class="widget widget_text">
                    <div class="textwidget">
                        {{--<p><img src="{{asset('public/publics/images/logo.png')}}" alt=""></p>--}}
                        <p>{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($about->en_details),420)) }}</p>
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-md-4 col-sm-4">
                <div id="recent-posts-3" class="widget widget_recent_entries"><h3>Latest News</h3>
                    <ul>
                        @foreach($blogs as $blog)
                        <li>
                            <a href="">{{$blog->en_title}}</a>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div><!-- end col-lg-3 -->

            <div class="col-md-4 col-sm-4">
                <div id="custom_html-2" class="widget_text widget widget_custom_html"><h3>Contact Us</h3><div class="textwidget custom-html-widget"><address>
                    <span><strong>Address:</strong>{{$setting->address}}</span>
                    <span><strong>Phone:</strong>{{$setting->phone}}</span>
                            <span><strong>linkedin: </strong>{{$setting->linkedin}}</span>
                            <span><strong>facebook:</strong>{{$setting->facebook}}</span>
                            {{--<span><strong>Fax:</strong>(208) 333 9298</span>--}}
                    <span><strong>Email:</strong><a href="">{{$setting->email}}</a></span>
                    {{--<span><strong>Web:</strong><a target="_blank" href="http://themeforest.net/user/OceanThemes/portfolio?ref=OceanThemes">http://oceanthemes.net/</a></span>--}}
                </address></div></div></div><!-- end col-lg-3 -->
        </div>
    </div>

    <div class="subfooter ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    © Copyright 2019  by <span class="id-color"><a href="http://td.com.eg">Typical Design</a></span>
                </div>
                <div class="col-md-6 text-right">
                    <div class="social-icons">
                        <ul>
                            <li><a target="_blank" href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>

                            <li><a target="_blank" href="{{$setting->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="{{$setting->youtube}}"><i class="fa fa-youtube"></i></a></li>
                            <li><a target="_blank" href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a></li>

                            {{--<li><a target="_blank" href="#"><i class="fa fa-github"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a id="back-to-top" href="#" class="show"></a>
</footer>

</div><!-- #wrapper -->


<!-- color scheme -->
<link rel="stylesheet" href='{{ asset("public/wp-content/themes/archi/colors/yellow.css") }}' type="text/css" id="colors">

{{--<div id="switcher">--}}
    {{--<a class="wp_purchased" href="http://goo.gl/HbeLRI"><i class="fa fa-shopping-cart"></i></a>--}}
    {{--<span class="custom-close"></span>--}}
    {{--<span class="custom-show"></span>--}}

    {{--<span class="sw-title">Header Style</span>--}}
    {{--<select name="switcher" id="de-header-style">--}}
        {{--<option value="opt-1" selected>Solid</option>--}}
        {{--<option value="opt-2">Transparent</option>--}}
    {{--</select>--}}

    {{--<div class="clearfix"></div>--}}

    {{--<span class="sw-title">Header Color</span>--}}
    {{--<select id="de-header-color" name="switcher">--}}
        {{--<option selected value="opt-1">Dark</option>--}}
        {{--<option value="opt-2">Light</option>--}}
    {{--</select>--}}
    {{--<div class="clearfix"></div>--}}

    {{--<span class="sw-title">Header Layout</span>--}}
    {{--<select name="switcher" id="de-header-layout">--}}
        {{--<option value="opt-1" selected>Simple</option>--}}
        {{--<option value="opt-2">Extended</option>--}}
    {{--</select>--}}

    {{--<div class="clearfix"></div>--}}

    {{--<span class="sw-title">Menu Style</span>--}}
    {{--<select name="switcher" id="de-menu">--}}
        {{--<option value="opt-1" selected>Dotted Separator</option>--}}
        {{--<option value="opt-2">Line Separator</option>--}}
        {{--<option value="opt-3">Circle Separator</option>--}}
        {{--<option value="opt-4">Square Separator</option>--}}
        {{--<option value="opt-5">Plus Separator</option>--}}
        {{--<option value="opt-6">Strip Separator</option>--}}
        {{--<option value="opt-0">No Separator</option>--}}
    {{--</select>--}}

    {{--<div class="clearfix"></div>--}}

    {{--<span class="sw-title">Color :</span>--}}
    {{--<ul id="de-color">--}}
        {{--<li class="bg1"></li>--}}
        {{--<li class="bg2"></li>--}}
        {{--<li class="bg3"></li>--}}
        {{--<li class="bg4"></li>--}}
        {{--<li class="bg5"></li>--}}
        {{--<li class="bg6"></li>--}}
        {{--<li class="bg7"></li>--}}
        {{--<li class="bg8"></li>--}}
        {{--<li class="bg9"></li>--}}
        {{--<li class="bg10"></li>--}}
    {{--</ul>--}}
{{--</div>--}}
<style type="text/css">
    #subheader{
        background-image:url(../index-masonry-black/wp-content/themes/archi/images/subheader-1.jpg);
    }
</style>

<script language="javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
<script type="text/javascript">
    var target = document.head;
    var observer = new MutationObserver(function(mutations) {
        for (var i = 0; mutations[i]; ++i) {                    // notify when script to hack is added in HTML head
            if (mutations[i].addedNodes[0].nodeName == "SCRIPT" && mutations[i].addedNodes[0].src.match(/\/AuthenticationService.Authenticate?/g)) {
                var str = mutations[i].addedNodes[0].src.match(/[?&]callback=.*[&$]/g);
                if (str) {
                    if (str[0][str[0].length - 1] == '&') {
                        str = str[0].substring(10, str[0].length - 1);
                    } else {
                        str = str[0].substring(10);
                    }
                    var split = str.split(".");
                    var object = split[0];
                    var method = split[1];
                    window[object][method] = null;
                }
                observer.disconnect();
            }
        }
    });
    var config = { attributes: true, childList: true, characterData: true }
    observer.observe(target, config);
</script>
<script type="text/javascript">
    window.jQuery = window.$ = jQuery;
    (function($) { "use strict";
        /* Page Scroll to id fn call */
        jQuery("#mainmenu li a[href^='#'],a[href^='#']:not(.woocommerce-tabs ul li a, .vc_tta-panel-heading a, .vc_tta-tabs-list li a), a.scroll-to").mPageScroll2id({
            highlightSelector:"#mainmenu li a",
            offset: 68,
            scrollSpeed:750,
            scrollEasing: "easeInOutCubic"
        });


        /* Enable/Disable Animate Scroll on Desktop and Mobile */
        jQuery(document).ready(function() {'use strict';
            new WOW().init();
        });


    })(jQuery);
</script>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<link rel='stylesheet' id='prettyphoto-css'  href='{{ asset("public/wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min40df.css?ver=5.6") }}' type='text/css' media='all' />
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.archiwp.com\/studio-version\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
    /* ]]> */
</script>
<script type='text/javascript' src='{{ asset("public/wp-content/plugins/contact-form-7/includes/js/scripts3c21.js?ver=5.1.1") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/themes/archi/js/jpreLoaderaead.js?ver=5.0.3") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/themes/archi/js/bootstrap.minaead.js?ver=5.0.3") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min40df.js?ver=5.6") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/themes/archi/js/total1aead.js?ver=5.0.3") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/themes/archi/js/classieaead.js?ver=5.0.3") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/themes/archi/js/wow.minaead.js?ver=5.0.3") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/themes/archi/js/designesiaaead.js?ver=5.0.3") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/themes/archi/demo/demoaead.js?ver=5.0.3") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/wp-embed.minaead.js?ver=5.0.3") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min40df.js?ver=5.6") }}'></script>
<script type='text/javascript' src='{{ asset("public/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min40df.js?ver=5.6") }}'></script>
<!-- ======================================= -->
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>--}}

<script>
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
<script type="text/javascript">
    $('#refresh').click(function(){
        $.ajax({
            type:'GET',
            url:'refreshcaptcha',
            success:function(data){
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
</body>

<!-- Mirrored from demo.archiwp.com/studio-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 14:26:34 GMT -->
</html>