@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

<div class="row">
  <div class="col col-md-12">
      <div class="white-box">
        <div class="form-group">
            <label for='title'>title </label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="title" placeholder="title" name="title" value="@if(old('title') != null){{ old('title') }}@elseif(isset($image->title)){{$image->title}}@endif" >
            </div>
            <div class="input-group">
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
            </div>
        </div>
      </div>
  </div>

</div>




<div class="row">
  <div class="col-md-12">
    <div class="white-space">
      <div class="form-group">
          <label for="main_image">befor image @isset($image) @else * @endisset</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="ti-gallery"></i></div>
              <input type="file"  class="form-control" id="main_image" name="main_image">
          </div>
          @isset($image)
            <img src="{{ $image->main_image }}" alt="{{ $image->main_image }}" class="thumb-main_image " style='width: 100px;height: 100px'>
          @endisset
          <div class="input-group">
            @if ($errors->has('main_image'))
                <span class="help-block">
                    <strong>{{ $errors->first('main_image') }}</strong>
                </span>
            @endif
          </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="white-space">
            <div class="form-group">
                <label for="main_image">after image @isset($image) @else * @endisset</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="ti-gallery"></i></div>
                    <input type="file"  class="form-control" id="afterimage" name="afterimage">
                </div>
                @isset($image)
                    <img src="{{ $image->afterimage }}" alt="{{ $image->afterimage }}" class="thumb-main_image " style='width: 100px;height: 100px'>
                @endisset
                <div class="input-group">
                    @if ($errors->has('afterimage'))
                        <span class="help-block">
                    <strong>{{ $errors->first('afterimage') }}</strong>
                </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col col-md-12">
    <div class="white-box">
      <div class="form-group">
          <label style="height:16px;"></label>
          <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">save</button>
      </div>
    </div>
  </div>
</div>
