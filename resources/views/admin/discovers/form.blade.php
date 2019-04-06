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
@section('js')

    <script src="https://cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            CKEDITOR.replace('editor2');
        });
    </script>
@endsection
<div class="row">
  <div class="col col-md-12">
      <div class="white-box">
        <div class="form-group">
            <label for="title">{{ __('lang.title') }} *</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="title" placeholder="{{ __('lang.title') }}" name="title" value="@if(old('title') != null){{ old('title') }}@elseif(isset($discover)){{$discover->title}}@endif" required="required">
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

<div class="row" >
    <div class="col-md-12">
        <div class="white-box">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <label for="details">{{ __('lang.details') }} *</label>
                    {{----}}
                    <textarea id="editor1" name="details" rows="8" class="form-control" style="resize:vertical;width:100%;" placeholder="{{ __('lang.details') }}">@if(old('details') != null){{ old('details') }}@elseif(isset($discover->details)){{$discover->details}}@endif</textarea>
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
          <button type="submit" class="btn btn-success btn-block waves-effect waves-light mt-25">{{ __('lang.save') }}</button>
      </div>
    </div>
  </div>
</div>
