@extends('home.partial.master')
@section('content')
<div class="em-main-container em-col1-layout">
  <div class="row">
    <div class="em-col-main col-sm-24">
<div id="pick_Registerpage" class="account-create col2-set-nospace">
  <div class="pik_left_pt col-1">
    <div class="pic-rg-img">
      <img src="https://www.pickaboo.com/skin/frontend/em0131/em0131_marketdeal/images/toy-pickaboo-bg.png">
    </div>
      <div class="pik_center_pt">
        <p style="color:rgb(0,115,190);font-size:34px;text-align:right;line-height:40px;font-weight:600;">Create</p>
        <p style="color:rgb(237,27,36);font-size:34px;text-align:right; line-height:40px;font-weight:600;">Account</p>
      </div>
    </div>
    <div class="pik_right_pt col-2">
    <form action="" method="post" id="form-validate" class="scaffold-form" enctype="multipart/form-data">
      <div class="fieldset">
        <ul class="form-list">
          <li class="fields">
            <div class="customer-name">
              <div class="field name-firstname">
                <label for="firstname" class="required"><em>*</em>First Name</label>
                <div class="input-box">
                  <input type="text" id="firstname" name="firstname" value="" title="First Name" maxlength="255" class="input-text required-entry">
                </div>
              </div>
              <div class="field name-lastname">
                <label for="lastname" class="required"><em>*</em>Last Name</label>
                <div class="input-box">
                  <input type="text" id="lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry">
                </div>
              </div>
            </div>
          </li>
          <li class="fields">
            <div class="field">
              <label for="email_address" class="required"><em>*</em>Email Address</label>
              <div class="input-box pk_from">
                <input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="email_address" value="" title="Email Address" class="input-text validate-email required-entry">
              </div>
            </div>
            <div class="field">
              <label for="mobilenum" class="required"><em>*</em>Mobile</label>
              <div class="input-box pk_from">
                <input type="text" autocapitalize="off" autocorrect="off" spellcheck="false" name="mobilenum" id="mobilenum" value="" title="Mobile" class="validate-bangladeshPhone input-text required-entry">
              </div>
            </div>
          </li>
          <li class="fields">
            <div class="field">
              <label for="password" class="required"><em>*</em>Password</label>
              <div class="input-box pk_from">
                <input type="password" name="password" id="password" title="Password" class="input-text required-entry validate-password">
              </div>
            </div>
            <div class="field">
              <label for="confirmation" class="required"><em>*</em>Confirm Password</label>
              <div class="input-box pk_from">
                <input type="password" name="confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword">
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
