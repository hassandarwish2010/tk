@extends('layouts.layout')
@section('meta')
    <meta name="description" content="{{ $setting->description}}">
    <meta name="keywords" content="{{ $setting->keywords }}">

    <meta property="og:title" content="الرئيسية"/>
    <meta property="og:description" content="{{ $setting->description}}"/>

    <meta name="author" content="Typical Design">
@endsection
@section('css')
    <style>
        .contact_marge_bootom{
            margin-bottom: 40px;
        }
        .div_contact{
            padding-top: 45px;
            padding-bottom: 17px;
        }

    </style>

@endsection
@section('js')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&callback=initMap"></script>

@endsection

@section('content')


    <section id="subheader" data-speed="8" data-type="background" style="background-image: url('{{asset("public/wp-content/uploads/sites/19/2017/06/subheader-3.jpg")}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 contact_marge_bootom">
                            <div class="">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- Section Contact -->
    <section id="contact" class="divider bg-lighter div_contact">
        <div class="container-fluid pt-0 pb-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-3"></div>
                    <div class="col-sm-12 col-md-6">
                        <div class="contact-wrapper">
                            <h3 class="line-bottom mt-0 mb-20">{{ __('lang.send_mail') }}</h3>
                            <!-- Contact Form -->
                            <div class="col-12">
                                @if(session()->has('success_msg'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success_msg') }}
                                    </div>
                                @endif

                                @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                            </div>

                            <form id="contact_form_contact" name="contact_form" action="{{ route('sendmail') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">{{ __('lang.name') }} <small>*</small></label>
                                            <input name="name" class="form-control" type="text" placeholder="{{ __('lang.name') }}" required="required">
                                            <div id="failed_contact_page_name" class="help-block"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">{{ __('lang.phone') }} <small>*</small></label>
                                            <input name="phone" class="form-control " type="text" placeholder="{{ __('lang.phone') }}" required="required">
                                            <div id="failed_contact_page_email" class="help-block"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="unit_type">{{ __('lang.types') }} <small></small></label>
                                            <select name="unit_type" class="form-control">
                                                <option value="">{{ __('lang.unit_type') }}</option>
                                                @for($i=0;$i<count($types);$i++)
                                                    <option value="{{$types[$i]}}">{{$types[$i]}}</option>
                                                @endfor

                                            </select>
                                            <div id="failed_contact_page_name" class="help-block"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">{{ __('lang.services') }} <small>*</small></label>
                                            <select name="service" class="form-control" required>
                                                <option value="">{{ __('lang.unit_service') }}</option>
                                                @for($i=0;$i<count($services);$i++)
                                                    <option value="{{$services[$i]}}">{{$services[$i]}}</option>
                                                @endfor

                                            </select>
                                            <div id="failed_contact_page_email" class="help-block"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="unit_space">{{ __('lang.unit_space') }} <small></small></label>
                                            <input name="space" class="form-control" type="text" placeholder="{{ __('lang.unit_space') }}" >
                                            <div id="failed_contact_page_email" class="help-block"></div>
                                        </div>
                                    </div>
                                </div>


                                <br>



                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">{{ __('lang.send') }}</button>
                                    <button type="reset" class="btn btn-danger btn-flat btn-theme-colored ">{{ __('lang.reset') }}</button>
                                </div>
                            </form>
                            @if(session('contact_errors'))

                                <span class="help-block" style="text-align:right">
                            @foreach (session('contact_errors') as $error)

                                        <strong style="color:#f00">{{ $error }}</strong><br>
                                    @endforeach
                            </span>
                            @elseif (session('contact_success'))
                                <label class="alert alert-success">تم إرسال رسالتك بنجاح , شكرا للتواصل</label>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-3"></div>

                </div>
            </div>
        </div>
    </section>


@endsection
