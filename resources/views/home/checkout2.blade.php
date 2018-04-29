@extends('home.partial.master')

@section('body_class',"checkout-onepage-index")

@section('content')
        <div class="wrapper-breadcrums">
          <div class="container">
            <div class="row">
              <div class="col-sm-24">
                <div class="breadcrumbs">
                  <ul>
                    <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                      <a href="{{ url('/') }}" title="Home" itemprop="url"><span itemprop="title">Home</span></a> <span class="separator">/ </span>
                    </li>
                    <li class="Checkout">
                      <strong>Checkout</strong>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="em-wrapper-area04"></div>
        <div class="em-main-container em-col2-left-layout">
          <div class="row">
            <div class="col-sm-24 em-col-main categ-view">
              <div class="page-title"><h1>Checkout</h1></div>

              <ul class="nav nav-tabs">
                <li class="active"><a href="#step1" data-toggle="tab">YOUR ADDRESS</a></li>
                <li><a href="#2a" data-toggle="tab">SHIPPING METHOD</a></li>
                <li><a href="#3a" data-toggle="tab">PAYMENT INFORMATION</a></li>
                <li><a href="#4a" data-toggle="tab">ORDER REVIEW</a></li>
              </ul>
              <div class="tab-content clearfix">
        			  <div class="tab-pane active" id="step1">
                  <div id="checkout-step-login" class="step a-item" style="">
                    <div class="col2-set">
                      <div class="chk-lgn-wpr">
                        <div class="col-md-24">
                          <div class="chk-lgn-text">Sign in with social media</div>
                        </div>
                        <div class="col-md-12">
                          <div class="fb-wrpr">
                            <a href="/login/facebook">
                              <img class="chk-lgn-social-icon" src="https://www.pickaboo.com/skin/frontend/em0131/default/images/chk-fb-lgn.png">
                            </a>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="google-wrpr">
                            <a href="/login/google">
                              <img class="chk-lgn-social-icon" src="https://www.pickaboo.com/skin/frontend/em0131/default/images/chk-google-lgn.png">
                            </a>
                          </div>
                        </div>
                        <div class="col-md-24">
                          <div class="chk-lgn-or">- or -</div>
                        </div>
                        <div class="col-md-24">
                          <div class="chk-lgn-text">Sign in with Email / Phone Number</div>
                        </div>
                        <form method="" action="" id="checkout_login_form">
                          <div class="col-md-24">
                            <div class="chk-lgn-input">
                              <input id="chklgnusr" placeholder="Email / Phone Number" class="required-entry chk-lgn-user" type="text" name="email">
                            </div>
                            <span class="help-block">
                                <strong id="email"></strong>
                            </span>
                          </div>
                          <div class="col-md-24">
                            <div class="chk-lgn-input">
                              <input id="chklgnpwd" placeholder="Enter Your Password" class="chk-lgn-pwd" type="password" name="password">
                            </div>
                          </div>
                          <div class="col-md-24">
                            <div class="chk-lgn-btn-wpr">
                              <button type="submit" title="Login" class="button"><span><span>Login</span></span></button>
                            </div>
                          </div>
                        </form>
                        <div class="col-md-24">
                          <div class="chk-lgn-footer-text">
                            <a id="chkfrgtpswd" class="f-left">Forgot your password?</a>
                          </div>
                        </div>
                        <div class="col-md-24 chk-crt-acc-wpr">
                          <div class="chk-lgn-footer-text">New to pickaboo? <a href="javascript:void(0);" id="chklgncrtacc">Create Account</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="checkout-step-billing" class="step a-item hidden" style="">
                    <form id="co-billing-form" action="">
                      <div class="fieldset">
                        <p class="required">* Required Fields</p>
                        <ul class="form-list">
                          <li id="billing-new-address-form" class="scaffold-form">
                            <div class="fieldset">
                              <input type="hidden" name="billing[address_id]" value="" id="billing:address_id">
                              <ul>
                                <li class="fields">
                                  <div class="customer-name">
                                    <div class="field name-firstname">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>First Name<em>*</em></legend>
                                          <input type="text" id="billing:firstname" name="billing[firstname]" value="" title="First Name" maxlength="255" class="input-text required-entry">
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="field name-lastname">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Last Name<em>*</em></legend>
                                          <input type="text" id="billing:lastname" name="billing[lastname]" value="" title="Last Name" maxlength="255" class="input-text required-entry">
                                        </fieldset>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="fields">
                                  <div class="field">
                                    <label for="billing:company">Company</label>
                                    <div class="input-box">
                                      <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text ">
                                    </div>
                                  </div>
                                  <div class="field">
                                    <div class="input-box">
                                      <fieldset class="chk-bil-fld">
                                        <legend>Email Address<em>*</em></legend>
                                        <input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="billing[email]" id="billing:email" value="" title="Email Address" class="input-text billingemail validate-email required-entry">
                                      </fieldset>
                                    </div>
                                  </div>
                                  <div class="field">
                                    <div class="input-box mob-confirm">
                                      <fieldset class="chk-bil-fld">
                                        <legend>Mobile<em>*</em></legend>
                                        <div class="bangla-mobile-prefix">+88</div>
                                        <input type="text" name="billing[mobilenum]" id="billing_mobilenum" value="" title="Mobile" class="input-text required-entry ">
                                      </fieldset>
                                    </div>
                                  </div>
                                </li>
                                <li class="wide">
                                  <div class="input-box">
                                    <fieldset class="chk-bil-fld" style="height: initial;">
                                      <legend>Address<em>*</em></legend>
                                      <textarea title="Street Address" name="billing[street][]" id="billing:street1" class="input-text  required-entry"></textarea>
                                    </fieldset>
                                  </div>
                                </li>
                                <li class="fields">
                                  <div class="field">
                                    <div class="input-box">
                                      <fieldset class="chk-bil-fld">
                                        <legend>State/Province<em>*</em></legend>
                                        <select id="billing:region_id" name="billing[region_id]" title="State/Province" class="state-select validate-select required-entry" style="" defaultvalue="">
                                          <option value="">Please select region, state or province</option>
                                          <option value="487">Barisal</option>
                                          <option value="486">Chittagong</option>
                                          <option value="485">Dhaka</option>
                                          <option value="489">Khulna</option>
                                          <option value="492">Mymensingh</option>
                                          <option value="488">Rajshahi</option>
                                          <option value="490">Rangpur</option>
                                          <option value="491">Sylhet</option>
                                        </select>
                                      </fieldset>
                                      <input type="text" id="billing:region" name="billing[region]" value="" title="State/Province" class="input-text required-entry" style="display:none;">
                                    </div>
                                  </div>
                                  <div class="field">
                                    <div class="input-box">
                                      <fieldset class="chk-bil-fld">
                                        <legend>City<em>*</em></legend>
                                        <input type="text" title="City" name="billing[city]" value="" class="input-text  required-entry" id="billing:city">
                                      </fieldset>
                                    </div>
                                  </div>
                                </li>
                                <li class="fields">
                                  <input type="hidden" name="billing[country_id]" value="BD">
                                  <div class="field" style="display:none;">
                                    <label for="billing:country_id" class="required"><em>*</em>Country</label>
                                    <div class="input-box">
                                    </div>
                                  </div>
                                </li>
                                <li class="fields" id="register-customer-password">
                                  <div class="field">
                                    <div class="input-box">
                                      <fieldset class="chk-bil-fld">
                                        <legend>Password<em>*</em></legend>
                                        <input type="password" name="billing[customer_password]" id="billing:customer_password" title="Password" class="input-text required-entry validate-password">
                                      </fieldset>
                                    </div>
                                  </div>
                                  <div class="field">
                                    <div class="input-box">
                                      <fieldset class="chk-bil-fld confirm_password_wpr">
                                        <legend>Confirm Password<em>*</em></legend>
                                        <input type="password" name="billing[confirm_password]" title="Confirm Password" id="billing:confirm_password" class="input-text required-entry validate-cpassword">
                                      </fieldset>
                                    </div>
                                  </div>
                                </li>
                                <li class="no-display">
                                  <input type="hidden" name="billing[save_in_address_book]" value="1">
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="fields chk-rdo-wpr-cntr">
                            <div class="control field">
                              <div class="chk-rdo-wpr">
                                <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" checked="checked" title="Ship to this address" onclick="$('shipping:same_as_billing').checked = true;" class="radio rdobtn">
                                <label class="rdo" for="billing:use_for_shipping_yes"></label>
                              </div>
                              <div class="chk-rdo-lbl">Ship to this address</div>
                            </div>
                            <div class="control field">
                              <div class="chk-rdo-wpr">
                                <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" title="Ship to different address" onclick="$('shipping:same_as_billing').checked = false;" class="radio rdobtn">
                                <label class="rdo" for="billing:use_for_shipping_no"></label>
                              </div>
                              <div class="chk-rdo-lbl">Ship to different address</div>
                            </div>
                          </li>
                        </ul>
                        <div class="buttons-set" id="billing-buttons-container">
                          <button type="button" title="Continue" class="button" onclick="CheckDuplicate()"><span><span>Continue</span></span></button>
                        </div>
                      </div>
                    </form>
                  </div>
        				</div>
        				<div class="tab-pane" id="step2">

        				</div>
                <div class="tab-pane" id="step3">

        				</div>
                  <div class="tab-pane" id="step4">

        				</div>
        			</div>

            </div>
          </div>
        <div class="em-wrapper-area05"></div>
        <div class="em-wrapper-area06"></div>
@endsection
@section('js-script')
  <script type="text/javascript">
    var loginForm = jQuery("#checkout_login_form");
      loginForm.submit(function(e){
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
              }
            });
          e.preventDefault();
          var formData = loginForm.serialize();
          jQuery.ajax({
              url:'login',
              type:'POST',
              data:formData,
              success:function(data){
                  // closePopupLogin()
                  location.reload();
                  // console.log(data);
              },
              error: function (data) {
                if (data.responseJSON.message) {
                  var email = data.responseJSON.message;
                }
                // console.log(email);
                jQuery('#email').html(email);
                // jQuery('#password').html(password);
                jQuery('.chk-lgn-input').addClass('has-error');
                  console.log(data);
              }
          });
      });

      jQuery('#chklgncrtacc').click(function() {
          jQuery('#checkout-step-login').addClass('hidden');
          jQuery('#checkout-step-billing').removeClass('hidden');
      });
  </script>
@endsection
