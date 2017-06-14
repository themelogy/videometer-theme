<div class="container">
    <div class="contact-form medium-padding120">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                    <h4 class="heading-title">{!! trans('themes::contact.question') !!}</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                    <p class="heading-text">{!! trans('themes::contact.question desc') !!}</p>
                </div>
            </div>
        </div>

        {!! Form::open(['route' => 'contact.send', 'class' => 'contact-form', 'method'=>'post']) !!}
        {!! Form::hidden('from', Request::path()) !!}
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {!! Form::input('text', 'first_name', old('first_name'), ['class'=>'email input-standard-grey', 'placeholder'=>trans('contact::contacts.form.first_name')]) !!}
                {!! $errors->first('first_name','<p class="help-block">:message</p>') !!}
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {!! Form::input('text', 'last_name', old('last_name'), ['class'=>'email input-standard-grey', 'placeholder'=>trans('contact::contacts.form.last_name')]) !!}
                {!! $errors->first('last_name','<p class="help-block">:message</p>') !!}
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {!! Form::input('text', 'email', old('email'), ['class'=>'email input-standard-grey', 'placeholder'=>trans('contact::contacts.form.email')]) !!}
                {!! $errors->first('email','<p class="help-block">:message</p>') !!}
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {!! Form::input('text', 'phone', old('phone'), ['class'=>'email input-standard-grey', 'placeholder'=>trans('contact::contacts.form.phone')]) !!}
                {!! $errors->first('phone','<p class="help-block">:message</p>') !!}
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                {!! Form::textarea('enquiry', old('enquiry'), ['class'=>'email input-standard-grey','placeholder'=>trans('contact::contacts.form.enquiry')]) !!}
                {!! $errors->first('enquiry','<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                {!! Form::submit(trans('contact::contacts.form.submit'), ['class' => 'btn btn-small btn--primary', 'value'=>trans('contact::contacts.form.submit')]) !!}
            </div>

            <div class="col-lg-9">
                <div class="form-group pull-right @if ($errors->has('g-recaptcha-response')) has-error @endif">
                    {!! Captcha::display('captcha_contact') !!}
                    <span class="help-block"><small>{!! $errors->first('g-recaptcha-response') !!}</small></span>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

        @push('js_inline')
        {!! Captcha::scriptWithCallback(['captcha_guestbook','captcha_contact', 'captcha_ask']) !!}
        @endpush
    </div>
</div>