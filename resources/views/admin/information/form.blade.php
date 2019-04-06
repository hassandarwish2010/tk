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
            <label for="en_name">title *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="en_name" placeholder="title" name="title" value="@if(old('title') != null){{ old('title') }}@elseif(isset($info)){{$info->title}}@endif" required="required">
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

    <div class="col col-md-12">
      <div class="white-box">
        <div class="form-group">
            <label for="details">details *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="details" placeholder="details" name="details" value="@if(old('details') != null){{ old('details') }}@elseif(isset($info)){{$info->details}}@endif" required="required">
            </div>
            <div class="input-group">
            @if ($errors->has('details'))
                <span class="help-block">
                    <strong>{{ $errors->first('details') }}</strong>
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
