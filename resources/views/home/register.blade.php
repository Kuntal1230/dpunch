@extends('home.partial.master')

 @section('body_class',"customer-account-create ")
 @section('breadcrum')
   <div class="wrapper-breadcrums"> 
     <div class="container">
       <div class="row">
         <div class="col-sm-24">
           <div class="breadcrumbs">
             <ul>
               <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                 <a href="/" title="Home" itemprop="url"><span itemprop="title">Home</span></a>
                 <span class="separator">/ </span>
               </li>
               <li class="register"> <strong>Register</strong></li>
           </div>
         </div>
       </div>
     </div>
   </div>
    @endsection
@section('content')
<div class="em-main-container em-col1-layout">
  <div class="row">
    <div class="em-col-main col-sm-24">
<div id="pick_Registerpage" class="account-create col2-set-nospace">
  
    <div class="pik_right_pt col-1 col-xs-24 register_mobile">
    <form id="form-validate" class="scaffold-form" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <div class="fieldset">
        <ul class="form-list">
          <li class="fields">
            <div class="customer-name">
              <div class="field name-firstname{{ $errors->has('firstname') ? ' has-error' : '' }}">
                <label for="firstname" class="required"><em>*</em>First Name</label>
                <div class="input-box">
                  <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" title="First Name" maxlength="255" class="input-text required-entry">
                </div>
                @if ($errors->has('firstname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                @endif
              </div>
              <div class="field name-lastname{{ $errors->has('lastname') ? ' has-error' : '' }}">
                <label for="lastname" class="required"><em>*</em>Last Name</label>
                <div class="input-box">
                  <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" title="Last Name" maxlength="255" class="input-text required-entry">
                </div>
                @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </li>
          <li class="fields">
            <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email_address" class="required"><em>*</em>Email Address</label>
              <div class="input-box pk_from">
                <input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="email_address" value="{{ old('email') }}" title="Email Address" class="input-text validate-email required-entry">
              </div>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="field{{ $errors->has('mobilenum') ? ' has-error' : '' }}">
              <label for="mobilenum" class="required"><em>*</em>Mobile</label>
              <div class="input-box pk_from">
                <input type="text" autocapitalize="off" autocorrect="off" spellcheck="false" name="mobilenum" id="mobilenum" value="{{ old('mobilenum') }}" title="Mobile" class="validate-bangladeshPhone input-text required-entry">
              </div>
              @if ($errors->has('mobilenum'))
                  <span class="help-block">
                      <strong>{{ $errors->first('mobilenum') }}</strong>
                  </span>
              @endif
            </div>
          </li>
          <li class="fields">
            <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="required"><em>*</em>Password</label>
              <div class="input-box pk_from">
                <input type="password" name="password" id="password" title="Password" class="input-text required-entry validate-password">
              </div>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div class="field">
              <label for="confirmation" class="required"><em>*</em>Confirm Password</label>
              <div class="input-box pk_from">
                <input type="password" name="password_confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword">
              </div>
            </div>
          </li>
          <div class="buttons-set">
            <button type="submit" title="Register" class="button pk-register-btn"><span><span>Register</span></span></button>
          </div>
          </ul>
        </div>
      </form>
</div>
</div>
</div>
</div>
</div>

@endsection
