@extends('home.partial.master')

@section('body_class',"customer-account-edit ")

@section('breadcrum')
  <div class="wrapper-breadcrums">
    <div class="container">
      <div class="row">
        <div class="col-sm-24">
          <div class="breadcrumbs">
            <ul>
              <li class="home" itemscope="" itemtype="">
                <a href="" title="Go to Home Page" itemprop="url"><span itemprop="title">Home</span></a> <span class="separator">/ </span>
              </li>
              <li class="cms_page"> <strong>MY ACCOUNT</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="em-main-container em-col2-left-layout">
    <div class="row">
      <div class="col-sm-6 em-col-left em-sidebar catelog_nav">
        <div class="em-wrapper-area03"></div>
        <div class="em-line-01 block block-account">
          <div class="block-title em-block-title"> <strong><span>My Account</span></strong></div>
          <div class="block-content">
            <ul>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form2').submit();">Logout</a>
                  <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
              <li> <a href="{{ route('customer.dashboard') }}">Account Dashboard</a></li>
              <li class="current"><strong>Account Information</strong></li>
              <li><a href="{{ route('customer.address') }}">Address Book</a></li>
              <li><a href="{{ route('customer.orderhistory') }}">My Orders</a></li>
              <li><a href="{{ route('customer.reviews') }}">My Product Reviews</a></li>
              <li class="last"><a href="{{ route('customer.club') }}">Dpunch Club</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-18 em-col-main categ-view">
        <div class="my-account">
          <div class="page-title">
            <h1>Edit Account Information</h1>
          </div>
          <form action="" method="post" autocomplete="off" id="form-validate" class="scaffold-form" enctype="multipart/form-data">
            <div class="fieldset">
              <h2 class="legend">Account Information</h2>
              <p class="required">* Required Fields</p>
              <ul class="form-list">
                <li class="fields">
                  <div class="customer-name">
                    <div class="field name-firstname">
                      <label for="firstname" class="required"><em>*</em>First Name</label>
                      <div class="input-box">
                        <input type="text" id="firstname" name="firstname" value="{{ Auth::user()->firstname }}" title="First Name" maxlength="255" class="input-text required-entry">
                      </div>
                    </div>
                    <div class="field name-lastname">
                      <label for="lastname" class="required"><em>*</em>Last Name</label>
                      <div class="input-box">
                        <input type="text" id="lastname" name="lastname" value="{{ Auth::user()->lastname }}" title="Last Name" maxlength="255" class="input-text required-entry">
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <label for="email" class="required"><em>*</em>Email Address</label>
                  <div class="input-box">
                    <input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="email" value="{{ Auth::user()->email }}" title="Email Address" class="input-text required-entry validate-email">
                  </div>
                </li>
                <li>
                  <label for="mobilenum" class="required"><em>*</em>Mobile</label>
                  <div class="input-box">
                    <input type="text" name="mobilenum" id="mobilenum" value="{{ Auth::user()->mobilenum }}" title="Mobile" class="input-text required-entry validate-bangladeshPhone">
                  </div>
                </li>
                <li class="control">
                  <input type="checkbox" name="change_password" id="change_password" value="1" title="Change Password" class="checkbox">
                  <label for="change_password">Change Password</label>
                </li>
              </ul>
            </div>
            <div class="fieldset" id="password_change_form" style="display:none;">
              <h2 class="legend">Change Password</h2>
              <ul class="form-list">
                <li>
                  <label for="current_password" class="required"><em>*</em>Current Password</label>
                  <div class="input-box"> <!-- This is a dummy hidden field to trick firefox from auto filling the password -->
                    <input type="text" class="input-text no-display" name="dummy" id="dummy">
                    <input type="password" title="Current Password" class="input-text" name="current_password" id="current_password">
                  </div>
                </li>
                <li class="fields">
                  <div class="field">
                    <label for="password" class="required"><em>*</em>New Password</label>
                    <div class="input-box">
                      <input type="password" title="New Password" class="input-text validate-password" name="password" id="password">
                    </div>
                  </div>
                  <div class="field">
                    <label for="confirmation" class="required"><em>*</em>Confirm New Password</label>
                    <div class="input-box">
                      <input type="password" title="Confirm New Password" class="input-text validate-cpassword" name="confirmation" id="confirmation">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="buttons-set">
              <p class="back-link"><a href="{{ route('customer.dashboard') }}"><small>« </small>Back</a></p>
              <button type="submit" title="Save" class="button"><span><span>Save</span></span></button>
            </div>
          </form>
          <script type="text/javascript">
            jQuery('document').ready(function($){
              $("#change_password").click(function() {
                  if($(this).is(':checked')){
                    $('#password_change_form').css('display','');
                  }else if (!$(this).is(':checked')) {
                    $('#password_change_form').css('display','none');
                  }
              });

            });
          </script>
        </div>
      </div>
    </div>
  </div>
@endsection
