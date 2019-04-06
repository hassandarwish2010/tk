

<section class="wpb_row vc_row-fluid vc_custom_1537351280988 vc_row-has-fill">
    <div class="container">
        <div class="row">
            <div class="text-center wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper "  >
                        <div class="wpb_text_column wpb_content_element  vc_custom_1537349527177" >
                            <div class="wpb_wrapper">
                                <h3 class="style-1"><span class="id-color">Before After</span></h3>
                                <h2 class="style-5">{{$setting->titleBAfter}}</h2>
                                {{--<p class="lead">Our commitment to quality and services ensure our clients happy. We&#8217;re happy to make you feel more comfortable on your home.</p>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper "  >
                        <!-- Element: OT Before After Box -->
                        <div class="owl-carousel carousel-single-navi before-after-slider ">
                            @if(count($photos)>0)
                            @foreach($photos as  $ph)
                            <div class="twentytwenty-container shadow-soft">
                                <img src="{{$ph->main_image}}" class="img-responsive img-rounded" />
                                <img src="{{$ph->afterimage}}" class="img-responsive img-rounded" />
                            </div>
                            @endforeach
                                @endif



                        </div>
                        <script type="text/javascript">
                            jQuery(window).on("load", function(){
                                jQuery(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
                                jQuery(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
