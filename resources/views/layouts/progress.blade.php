<?php
$data=['0.4s','0.8s','1.2s','1.6s'];
?>
<section class="wpb_row vc_row-fluid vc_custom_1537339957576 vc_row-has-fill">
    <div class="container">
        <div class="row">
            <div class="text-center wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper "  >
                        <div class="wpb_text_column wpb_content_element  vc_custom_1537340201201" >
                            <div class="wpb_wrapper">
                                <h3 class="style-1"><span class="id-color">{{$setting->titleprocess}}</span></h3>
{{--                                <h2 class="style-5">See how it works</h2>--}}
{{--                                <p class="lead">Our commitment to quality and services ensure our clients happy. We&#8217;re happy to make you feel more comfortable on your home.</p>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($processes )>0)
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper "  >
                        <div class="de_tab tab_steps tab_4 ">
                            <ul class="de_nav ">
                                @foreach($processes as $index=>$process)
                                <li class="{{$index==0 ? 'active':''}} wow fadeIn" data-wow-delay="{{$data[$index]}}">
                                    <span>{{$process->title}}</span>

                                    <div class="v-border"></div>
                                </li>
                                @endforeach

                            </ul>
                            <div class="de_tab_content">
                                @foreach($processes as $index=>$process)
                                <div id="tab-580" class="de_tab_content_inner">
                                    <p>{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $process->description)) }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
        </div>
    </div>
</section>
