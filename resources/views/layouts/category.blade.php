<section class="wpb_row vc_row-fluid vc_custom_1537418083669">
    <div class="container">

        <div class="row">
            <div class="text-center wpb_column vc_column_container vc_col-sm-12 "><div class="vc_column-inner ">
                    <div class="wpb_wrapper ">
                        <div class="wpb_text_column wpb_content_element  vc_custom_1537417813360">
                            <div class="wpb_wrapper">
                                <h3 class="style-1"><span class="id-color">TK DESIGNS</span></h3>
                                <h2 class="style-5">{{$setting->titleCat}}</h2>
                                {{--<p class="lead">Our commitment to quality and services ensure our clients happy. We’re happy to make you feel more comfortable on your home.</p>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
            @foreach($cats as $cat)
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper " >
                            <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1537418241229">

                                <figure class="wpb_wrapper vc_figure">
                                   
                                        <a class="fancybox" rel="group" href="{{$cat->full_image}}">
                                       <img src="{{$cat->image}}" style="height: 260px" class="img-responsive" alt="{{$cat->en_title}}">
                                       </a>
                                </figure>
                            </div>

                            <h3 class= "style-1" style="text-align: left;" ><a href="{{ route('cats',['id'=>$cat->id]) }}">{{$cat->en_name}}</a></h3>


                            <div class="wpb_text_column wpb_content_element " >
                                <div class="wpb_wrapper">
                                    <p>{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($cat->en_details),200)) }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

        </div>

    </div>

</section>