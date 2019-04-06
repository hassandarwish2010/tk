<section class="wpb_row vc_row-fluid vc_custom_1537264928256">
    <div class="container">
        <div class="row">
            @if(count($info)>0)
                @foreach($info as $i)
            <div class="wpb_column vc_column_container vc_col-sm-3">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper "  >
                        <div class="de_count ">
                            <h3 class="timer" data-to="{{$i->details}}" data-speed="2500">0</h3>
                            <span>{{$i->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
                    @endif
        </div>
    </div>
</section>
