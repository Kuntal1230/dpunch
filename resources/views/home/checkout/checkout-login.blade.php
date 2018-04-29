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
                <li><a href="#2a">SHIPPING METHOD</a></li>
                <li><a href="#3a">PAYMENT INFORMATION</a></li>
                <li><a href="#4a">ORDER REVIEW</a></li>
              </ul>
              <div class="tab-content clearfix">
        			  <div class="tab-pane active" id="step1">
                  @guest
                    <div id="checkout-step-login" class="step a-item" style="">
                      <div class="col2-set">
                        <div class="chk-lgn-wpr">
                          <div class="col-md-24">
                            <div class="chk-lgn-text">Sign in with social media</div>
                          </div>
                          <div class="col-md-12">
                            <div class="fb-wrpr">
                              <a href="/login/facebook">
                                <img class="chk-lgn-social-icon" src="{{ asset('assets/img/chk-fb-lgn.png') }}">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="google-wrpr">
                              <a href="/login/google">
                                <img class="chk-lgn-social-icon" src="{{ asset('assets/img/chk-google-lgn.png') }}">
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
                              <div class="form-group cklogform">
                                <input type="text" class="form-control" name="email" value="" placeholder="Email / Phone Number">
                              </div>
                              <span class="help-block">
                                  <strong id="emailerr"></strong>
                              </span>
                            </div>
                            <div class="col-md-24">
                              <div class="form-group cklogform">
                                <input type="password" name="password" class="form-control" value="" placeholder="Enter Your Password">
                              </div>
                            </div>
                            <div class="col-md-24">
                              <div class="chk-lgn-btn-wpr">
                                <button type="submit" title="Login" class="button" id="chk_lgn_btn"><span><span>Login</span></span></button>
                              </div>
                            </div>
                          </form>
                          <div class="col-md-24">
                            <div class="chk-lgn-footer-text">
                              <a id="chkfrgtpswd" class="f-left">Forgot your password?</a>
                            </div>
                          </div>
                          <div class="col-md-24 chk-crt-acc-wpr">
                            <div class="chk-lgn-footer-text">New to Dpunch? <a href="javascript:void(0);" id="chklgncrtacc">Create Account</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="checkout-step-billing" class="step a-item hidden" style="">
                      <br>
                      <h3 class="text-center">Billing Address</h3>
                      <form id="co-billing-form" action="" method="post">
                        {{ csrf_field() }}
                        <div class="fieldset">
                          <p class="required">* Required Fields</p>
                          <ul class="form-list">
                            <li id="billing-new-address-form" class="scaffold-form">
                              <div class="fieldset">
                                <ul>
                                  <li class="fields">
                                    <div class="customer-name">
                                      <div class="field name-firstname">
                                        <div class="input-box">
                                          <fieldset class="chk-bil-fld">
                                            <legend>First Name<em>*</em></legend>
                                            <input type="text" id="blling_firstname" name="firstname" value="" title="First Name" maxlength="255" class="input-text required-entry">
                                          </fieldset>
                                        </div>
                                      </div>
                                      <div class="field name-lastname">
                                        <div class="input-box">
                                          <fieldset class="chk-bil-fld">
                                            <legend>Last Name<em>*</em></legend>
                                            <input type="text" id="blling_lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry">
                                          </fieldset>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="fields">
                                    <div class="field">
                                      <label for="billing:company">Company</label>
                                      <div class="input-box">
                                        <input type="text" id="billing_company" name="company" value="" title="Company" class="input-text ">
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Email Address<em>*</em></legend>
                                          <input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="blling_email" value="" title="Email Address" class="input-text billingemail">
                                        </fieldset>
                                        <span class="help-block">
                                            <strong id="billemaileerr"></strong>
                                        </span>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="input-box mob-confirm">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Mobile<em>*</em></legend>
                                          <div class="bangla-mobile-prefix">+88</div>
                                          <input type="text" name="mobilenum" id="billing_mobilenum" value="" title="Mobile" class="input-text">
                                        </fieldset>
                                        <span class="help-block">
                                            <strong id="billmobileerr"></strong>
                                        </span>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="wide">
                                    <div class="input-box">
                                      <fieldset class="chk-bil-fld" style="height: initial;">
                                        <legend>Address<em>*</em></legend>
                                        <textarea title="Street Address" name="street[]" id="blling_address" class="input-text"></textarea>
                                      </fieldset>
                                    </div>
                                  </li>
                                  <li class="fields">
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>State/Province<em>*</em></legend>
                                          <select id="blling_region" name="region" title="State/Province" class="state-select" style="" defaultvalue="">
                                            <option value="">Please select region, state or province</option>
                                            <option>Barisal</option>
                                            <option>Chittagong</option>
                                            <option>Dhaka</option>
                                            <option>Khulna</option>
                                            <option>Mymensingh</option>
                                            <option>Rajshahi</option>
                                            <option>Rangpur</option>
                                            <option>Sylhet</option>
                                          </select>
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>City<em>*</em></legend>
                                          <input type="text" title="City" name="city" value="" class="input-text" id="blling_city">
                                        </fieldset>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="fields">
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Country<em>*</em></legend>
                                          <select id="blling_country" name="country" title="Country" class="state-select" style="" defaultvalue="">
                                            <option></option>
                                            <option>Afghanistan</option>
                                            <option>Åland Islands</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                            <option>American Samoa</option>
                                            <option>Andorra</option>
                                            <option>Angola</option>
                                            <option>Anguilla</option>
                                            <option>Antarctica</option>
                                            <option>Antigua and Barbuda</option>
                                            <option>Argentina</option>
                                            <option>Armenia</option>
                                            <option>Aruba</option>
                                            <option>Australia</option>
                                            <option>Austria</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option selected="selected">Bangladesh</option>
                                            <option>Barbados</option>
                                            <option>Belarus</option>
                                            <option>Belgium</option>
                                            <option>Belize</option>
                                            <option>Benin</option>
                                            <option>Bermuda</option>
                                            <option>Bhutan</option>
                                            <option>Bolivia</option>
                                            <option>Bosnia and Herzegovina</option>
                                            <option>Botswana</option>
                                            <option>Bouvet Island</option>
                                            <option>Brazil</option>
                                            <option>British Indian Ocean Territory</option>
                                            <option>British Virgin Islands</option>
                                            <option>Brunei</option>
                                            <option>Bulgaria</option>
                                            <option>Burkina Faso</option>
                                            <option>Burundi</option>
                                            <option>Cambodia</option>
                                            <option>Cameroon</option>
                                            <option>Canada</option>
                                            <option>Cape Verde</option>
                                            <option>Cayman Islands</option>
                                            <option>Central African Republic</option>
                                            <option>Chad</option>
                                            <option>Chile</option>
                                            <option>China</option>
                                            <option>Christmas Island</option>
                                            <option>Cocos (Keeling) Islands</option>
                                            <option>Colombia</option>
                                            <option>Comoros</option>
                                            <option>Congo - Brazzaville</option>
                                            <option>Congo - Kinshasa</option>
                                            <option>Cook Islands</option>
                                            <option>Costa Rica</option>
                                            <option>Côte d’Ivoire</option>
                                            <option>Croatia</option>
                                            <option>Cuba</option>
                                            <option>Cyprus</option>
                                            <option>Czech Republic</option>
                                            <option>Denmark</option>
                                            <option>Djibouti</option>
                                            <option>Dominica</option>
                                            <option>Dominican Republic</option>
                                            <option>Ecuador</option>
                                            <option>Egypt</option>
                                            <option>El Salvador</option>
                                            <option>Equatorial Guinea</option>
                                            <option>Eritrea</option>
                                            <option>Estonia</option>
                                            <option>Ethiopia</option>
                                            <option>Falkland Islands</option>
                                            <option>Faroe Islands</option>
                                            <option>Fiji</option>
                                            <option>Finland</option>
                                            <option>France</option>
                                            <option>French Guiana</option>
                                            <option>French Polynesia</option>
                                            <option>French Southern Territories</option>
                                            <option>Gabon</option>
                                            <option>Gambia</option>
                                            <option>Georgia</option>
                                            <option>Germany</option>
                                            <option>Ghana</option>
                                            <option>Gibraltar</option>
                                            <option>Greece</option>
                                            <option>Greenland</option>
                                            <option>Grenada</option>
                                            <option>Guadeloupe</option>
                                            <option>Guam</option>
                                            <option>Guatemala</option>
                                            <option>Guernsey</option>
                                            <option>Guinea</option>
                                            <option>Guinea-Bissau</option>
                                            <option>Guyana</option>
                                            <option>Haiti</option>
                                            <option>Heard &amp; McDonald Islands</option>
                                            <option>Honduras</option>
                                            <option>Hong Kong SAR China</option>
                                            <option>Hungary</option>
                                            <option>Iceland</option>
                                            <option>India</option>
                                            <option>Indonesia</option>
                                            <option>Iran</option>
                                            <option>Iraq</option>
                                            <option>Ireland</option>
                                            <option>Isle of Man</option>
                                            <option>Israel</option>
                                            <option>Italy</option>
                                            <option>Jamaica</option>
                                            <option>Japan</option>
                                            <option>Jersey</option>
                                            <option>Jordan</option>
                                            <option>Kazakhstan</option>
                                            <option>Kenya</option>
                                            <option>Kiribati</option>
                                            <option>Kuwait</option>
                                            <option>Kyrgyzstan</option>
                                            <option>Laos</option>
                                            <option>Latvia</option>
                                            <option>Lebanon</option>
                                            <option>Lesotho</option>
                                            <option>Liberia</option>
                                            <option>Libya</option>
                                            <option>Liechtenstein</option>
                                            <option>Lithuania</option>
                                            <option>Luxembourg</option>
                                            <option>Macau SAR China</option>
                                            <option>Macedonia</option>
                                            <option>Madagascar</option>
                                            <option>Malawi</option>
                                            <option>Malaysia</option>
                                            <option>Maldives</option>
                                            <option>Mali</option>
                                            <option>Malta</option>
                                            <option>Marshall Islands</option>
                                            <option>Martinique</option>
                                            <option>Mauritania</option>
                                            <option>Mauritius</option>
                                            <option>Mayotte</option>
                                            <option>Mexico</option>
                                            <option>Micronesia</option>
                                            <option>Moldova</option>
                                            <option>Monaco</option>
                                            <option>Mongolia</option>
                                            <option>Montenegro</option>
                                            <option>Montserrat</option>
                                            <option>Morocco</option>
                                            <option>Mozambique</option>
                                            <option>Myanmar (Burma)</option>
                                            <option>Namibia</option>
                                            <option>Nauru</option>
                                            <option>Nepal</option>
                                            <option>Netherlands</option>
                                            <option>Netherlands Antilles</option>
                                            <option>New Caledonia</option>
                                            <option>New Zealand</option>
                                            <option>Nicaragua</option>
                                            <option>Niger</option>
                                            <option>Nigeria</option>
                                            <option>Niue</option>
                                            <option>Norfolk Island</option>
                                            <option>Northern Mariana Islands</option>
                                            <option>North Korea</option>
                                            <option>Norway</option>
                                            <option>Oman</option>
                                            <option>Pakistan</option>
                                            <option>Palau</option>
                                            <option>Palestinian Territories</option>
                                            <option>Panama</option>
                                            <option>Papua New Guinea</option>
                                            <option>Paraguay</option>
                                            <option>Peru</option>
                                            <option>Philippines</option>
                                            <option>Pitcairn Islands</option>
                                            <option>Poland</option>
                                            <option>Portugal</option>
                                            <option>Puerto Rico</option>
                                            <option>Qatar</option>
                                            <option>Réunion</option>
                                            <option>Romania</option>
                                            <option>Russia</option>
                                            <option>Rwanda</option>
                                            <option>Saint Barthélemy</option>
                                            <option>Saint Helena</option>
                                            <option>Saint Kitts and Nevis</option>
                                            <option>Saint Lucia</option>
                                            <option>Saint Martin</option>
                                            <option>Saint Pierre and Miquelon</option>
                                            <option>Samoa</option>
                                            <option>San Marino</option>
                                            <option>São Tomé and Príncipe</option>
                                            <option>Saudi Arabia</option>
                                            <option>Senegal</option>
                                            <option>Serbia</option>
                                            <option>Seychelles</option>
                                            <option>Sierra Leone</option>
                                            <option>Singapore</option>
                                            <option>Slovakia</option>
                                            <option>Slovenia</option>
                                            <option>Solomon Islands</option>
                                            <option>Somalia</option>
                                            <option>South Africa</option>
                                            <option>South Georgia &amp; South Sandwich Islands</option>
                                            <option>South Korea</option>
                                            <option>Spain</option>
                                            <option>Sri Lanka</option>
                                            <option>St. Vincent &amp; Grenadines</option>
                                            <option>Sudan</option>
                                            <option>Suriname</option>
                                            <option>Svalbard and Jan Mayen</option>
                                            <option>Swaziland</option>
                                            <option>Sweden</option>
                                            <option>Switzerland</option>
                                            <option>Syria</option>
                                            <option>Taiwan</option>
                                            <option>Tajikistan</option>
                                            <option>Tanzania</option>
                                            <option>Thailand</option>
                                            <option>Timor-Leste</option>
                                            <option>Togo</option>
                                            <option>Tokelau</option>
                                            <option>Tonga</option>
                                            <option>Trinidad and Tobago</option>
                                            <option>Tunisia</option>
                                            <option>Turkey</option>
                                            <option>Turkmenistan</option>
                                            <option>Turks and Caicos Islands</option>
                                            <option>Tuvalu</option>
                                            <option>Uganda</option>
                                            <option>Ukraine</option>
                                            <option>United Arab Emirates</option>
                                            <option>United Kingdom</option>
                                            <option>United States</option>
                                            <option>Uruguay</option>
                                            <option>U.S. Outlying Islands</option>
                                            <option>U.S. Virgin Islands</option>
                                            <option>Uzbekistan</option>
                                            <option>Vanuatu</option>
                                            <option>Vatican City</option>
                                            <option>Venezuela</option>
                                            <option>Vietnam</option>
                                            <option>Wallis and Futuna</option>
                                            <option>Western Sahara</option>
                                            <option>Yemen</option>
                                            <option>Zambia</option>
                                            <option>Zimbabwe</option>
                                          </select>
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Zip Code<em>*</em></legend>
                                          <input type="text" title="Postal Code" name="postcode" value="" class="input-text" id="blling_postcode">
                                        </fieldset>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="fields" id="register-customer-password">
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld password_wpr">
                                          <legend>Password<em>*</em></legend>
                                          <input type="password" name="blling_pass" id="blling_pass" class="input-text">
                                        </fieldset>
                                        <span class="help-block">
                                            <strong id="billpassworderr"></strong>
                                        </span>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld password_wpr">
                                          <legend>Confirm Password<em>*</em></legend>
                                          <input type="password" name="blling_pass_again"  id="blling_pass_again" class="input-text">
                                        </fieldset>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                          <div class="buttons-set" id="billing-buttons-container">
                            <button type="submit" title="Continue" id="chk_reg_btn" class="button"><span><span>Continue</span></span></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  @else
                    <div id="checkout-step-shipping" class="step a-item " style="">
                      <br>
                      <h3 class="text-center">Shipping Address</h3>
                      <form id="co-shipping-form" action="{{ route('order.tempdata') }}" method="post">
                        {{ csrf_field() }}
                        <div class="fieldset">
                          <p class="required">* Required Fields</p>
                          <ul class="form-list">
                            <li id="shipping-address-form" class="scaffold-form">
                              <div class="fieldset">
                                <ul>
                                  <li class="fields">
                                    <div class="customer-name">
                                      <div class="field name-firstname">
                                        <div class="input-box">
                                          <fieldset class="chk-bil-fld">
                                            <legend>First Name<em>*</em></legend>
                                            <input type="text" id="shipping_firstname" name="firstname" value="{{ session('address.firstname') }}" title="First Name" maxlength="255" class="input-text">
                                          </fieldset>
                                        </div>
                                      </div>
                                      <div class="field name-lastname">
                                        <div class="input-box">
                                          <fieldset class="chk-bil-fld">
                                            <legend>Last Name<em>*</em></legend>
                                            <input type="text" id="shipping_lastname" name="lastname" value="{{ session('address.lastname') }}" title="Last Name" maxlength="255" class="input-text">
                                          </fieldset>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="fields">
                                    {{-- <div class="field">
                                      <label for="billing:company">Company</label>
                                      <div class="input-box">
                                        <input type="text" id="shipping_company" name="company" value="" title="Company" class="input-text ">
                                      </div>
                                    </div> --}}
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Email Address<em>*</em></legend>
                                          <input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="shipping_email" value="{{ session('address.email') }}" title="Email Address" class="input-text billingemail">
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="input-box mob-confirm">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Mobile<em>*</em></legend>
                                          <div class="bangla-mobile-prefix">+88</div>
                                          <input type="text" name="phonenum" id="shipping_mobilenum" value="{{ session('address.phonenum') }}" title="Mobile" class="input-text required-entry ">
                                        </fieldset>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="wide">
                                    <div class="input-box">
                                      <fieldset class="chk-bil-fld" style="height: initial;">
                                        <legend>Address<em>*</em></legend>
                                        <textarea title="Street Address" name="address" id="shipping_street" class="input-text  required-entry">{{ session('address.address') }}</textarea>
                                      </fieldset>
                                    </div>
                                  </li>
                                  <li class="fields">
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>State/Province<em>*</em></legend>
                                          <select id="shipping_region" name="region" title="State/Province" class="state-select" style="" defaultvalue="">
                                            @if (session()->has('address.region'))
                                              <option selected>{{ session('address.region') }}</option>
                                            @endif
                                            <option value="">Please select region, state or province</option>
                                            <option >Barisal</option>
                                            <option >Chittagong</option>
                                            <option >Dhaka</option>
                                            <option >Khulna</option>
                                            <option >Mymensingh</option>
                                            <option >Rajshahi</option>
                                            <option >Rangpur</option>
                                            <option >Sylhet</option>
                                          </select>
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>City<em>*</em></legend>
                                          <input type="text" title="City" name="city" value="{{ session('address.city') }}" class="input-text  required-entry" id="shipping_city">
                                        </fieldset>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="fields">
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Country<em>*</em></legend>
                                          <select id="shipping_country" name="country" title="Country" class="state-select" style="" defaultvalue="">
                                            <option></option>
                                            <option>Afghanistan</option>
                                            <option>Åland Islands</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                            <option>American Samoa</option>
                                            <option>Andorra</option>
                                            <option>Angola</option>
                                            <option>Anguilla</option>
                                            <option>Antarctica</option>
                                            <option>Antigua and Barbuda</option>
                                            <option>Argentina</option>
                                            <option>Armenia</option>
                                            <option>Aruba</option>
                                            <option>Australia</option>
                                            <option>Austria</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option selected="selected">Bangladesh</option>
                                            <option>Barbados</option>
                                            <option>Belarus</option>
                                            <option>Belgium</option>
                                            <option>Belize</option>
                                            <option>Benin</option>
                                            <option>Bermuda</option>
                                            <option>Bhutan</option>
                                            <option>Bolivia</option>
                                            <option>Bosnia and Herzegovina</option>
                                            <option>Botswana</option>
                                            <option>Bouvet Island</option>
                                            <option>Brazil</option>
                                            <option>British Indian Ocean Territory</option>
                                            <option>British Virgin Islands</option>
                                            <option>Brunei</option>
                                            <option>Bulgaria</option>
                                            <option>Burkina Faso</option>
                                            <option>Burundi</option>
                                            <option>Cambodia</option>
                                            <option>Cameroon</option>
                                            <option>Canada</option>
                                            <option>Cape Verde</option>
                                            <option>Cayman Islands</option>
                                            <option>Central African Republic</option>
                                            <option>Chad</option>
                                            <option>Chile</option>
                                            <option>China</option>
                                            <option>Christmas Island</option>
                                            <option>Cocos (Keeling) Islands</option>
                                            <option>Colombia</option>
                                            <option>Comoros</option>
                                            <option>Congo - Brazzaville</option>
                                            <option>Congo - Kinshasa</option>
                                            <option>Cook Islands</option>
                                            <option>Costa Rica</option>
                                            <option>Côte d’Ivoire</option>
                                            <option>Croatia</option>
                                            <option>Cuba</option>
                                            <option>Cyprus</option>
                                            <option>Czech Republic</option>
                                            <option>Denmark</option>
                                            <option>Djibouti</option>
                                            <option>Dominica</option>
                                            <option>Dominican Republic</option>
                                            <option>Ecuador</option>
                                            <option>Egypt</option>
                                            <option>El Salvador</option>
                                            <option>Equatorial Guinea</option>
                                            <option>Eritrea</option>
                                            <option>Estonia</option>
                                            <option>Ethiopia</option>
                                            <option>Falkland Islands</option>
                                            <option>Faroe Islands</option>
                                            <option>Fiji</option>
                                            <option>Finland</option>
                                            <option>France</option>
                                            <option>French Guiana</option>
                                            <option>French Polynesia</option>
                                            <option>French Southern Territories</option>
                                            <option>Gabon</option>
                                            <option>Gambia</option>
                                            <option>Georgia</option>
                                            <option>Germany</option>
                                            <option>Ghana</option>
                                            <option>Gibraltar</option>
                                            <option>Greece</option>
                                            <option>Greenland</option>
                                            <option>Grenada</option>
                                            <option>Guadeloupe</option>
                                            <option>Guam</option>
                                            <option>Guatemala</option>
                                            <option>Guernsey</option>
                                            <option>Guinea</option>
                                            <option>Guinea-Bissau</option>
                                            <option>Guyana</option>
                                            <option>Haiti</option>
                                            <option>Heard &amp; McDonald Islands</option>
                                            <option>Honduras</option>
                                            <option>Hong Kong SAR China</option>
                                            <option>Hungary</option>
                                            <option>Iceland</option>
                                            <option>India</option>
                                            <option>Indonesia</option>
                                            <option>Iran</option>
                                            <option>Iraq</option>
                                            <option>Ireland</option>
                                            <option>Isle of Man</option>
                                            <option>Israel</option>
                                            <option>Italy</option>
                                            <option>Jamaica</option>
                                            <option>Japan</option>
                                            <option>Jersey</option>
                                            <option>Jordan</option>
                                            <option>Kazakhstan</option>
                                            <option>Kenya</option>
                                            <option>Kiribati</option>
                                            <option>Kuwait</option>
                                            <option>Kyrgyzstan</option>
                                            <option>Laos</option>
                                            <option>Latvia</option>
                                            <option>Lebanon</option>
                                            <option>Lesotho</option>
                                            <option>Liberia</option>
                                            <option>Libya</option>
                                            <option>Liechtenstein</option>
                                            <option>Lithuania</option>
                                            <option>Luxembourg</option>
                                            <option>Macau SAR China</option>
                                            <option>Macedonia</option>
                                            <option>Madagascar</option>
                                            <option>Malawi</option>
                                            <option>Malaysia</option>
                                            <option>Maldives</option>
                                            <option>Mali</option>
                                            <option>Malta</option>
                                            <option>Marshall Islands</option>
                                            <option>Martinique</option>
                                            <option>Mauritania</option>
                                            <option>Mauritius</option>
                                            <option>Mayotte</option>
                                            <option>Mexico</option>
                                            <option>Micronesia</option>
                                            <option>Moldova</option>
                                            <option>Monaco</option>
                                            <option>Mongolia</option>
                                            <option>Montenegro</option>
                                            <option>Montserrat</option>
                                            <option>Morocco</option>
                                            <option>Mozambique</option>
                                            <option>Myanmar (Burma)</option>
                                            <option>Namibia</option>
                                            <option>Nauru</option>
                                            <option>Nepal</option>
                                            <option>Netherlands</option>
                                            <option>Netherlands Antilles</option>
                                            <option>New Caledonia</option>
                                            <option>New Zealand</option>
                                            <option>Nicaragua</option>
                                            <option>Niger</option>
                                            <option>Nigeria</option>
                                            <option>Niue</option>
                                            <option>Norfolk Island</option>
                                            <option>Northern Mariana Islands</option>
                                            <option>North Korea</option>
                                            <option>Norway</option>
                                            <option>Oman</option>
                                            <option>Pakistan</option>
                                            <option>Palau</option>
                                            <option>Palestinian Territories</option>
                                            <option>Panama</option>
                                            <option>Papua New Guinea</option>
                                            <option>Paraguay</option>
                                            <option>Peru</option>
                                            <option>Philippines</option>
                                            <option>Pitcairn Islands</option>
                                            <option>Poland</option>
                                            <option>Portugal</option>
                                            <option>Puerto Rico</option>
                                            <option>Qatar</option>
                                            <option>Réunion</option>
                                            <option>Romania</option>
                                            <option>Russia</option>
                                            <option>Rwanda</option>
                                            <option>Saint Barthélemy</option>
                                            <option>Saint Helena</option>
                                            <option>Saint Kitts and Nevis</option>
                                            <option>Saint Lucia</option>
                                            <option>Saint Martin</option>
                                            <option>Saint Pierre and Miquelon</option>
                                            <option>Samoa</option>
                                            <option>San Marino</option>
                                            <option>São Tomé and Príncipe</option>
                                            <option>Saudi Arabia</option>
                                            <option>Senegal</option>
                                            <option>Serbia</option>
                                            <option>Seychelles</option>
                                            <option>Sierra Leone</option>
                                            <option>Singapore</option>
                                            <option>Slovakia</option>
                                            <option>Slovenia</option>
                                            <option>Solomon Islands</option>
                                            <option>Somalia</option>
                                            <option>South Africa</option>
                                            <option>South Georgia &amp; South Sandwich Islands</option>
                                            <option>South Korea</option>
                                            <option>Spain</option>
                                            <option>Sri Lanka</option>
                                            <option>St. Vincent &amp; Grenadines</option>
                                            <option>Sudan</option>
                                            <option>Suriname</option>
                                            <option>Svalbard and Jan Mayen</option>
                                            <option>Swaziland</option>
                                            <option>Sweden</option>
                                            <option>Switzerland</option>
                                            <option>Syria</option>
                                            <option>Taiwan</option>
                                            <option>Tajikistan</option>
                                            <option>Tanzania</option>
                                            <option>Thailand</option>
                                            <option>Timor-Leste</option>
                                            <option>Togo</option>
                                            <option>Tokelau</option>
                                            <option>Tonga</option>
                                            <option>Trinidad and Tobago</option>
                                            <option>Tunisia</option>
                                            <option>Turkey</option>
                                            <option>Turkmenistan</option>
                                            <option>Turks and Caicos Islands</option>
                                            <option>Tuvalu</option>
                                            <option>Uganda</option>
                                            <option>Ukraine</option>
                                            <option>United Arab Emirates</option>
                                            <option>United Kingdom</option>
                                            <option>United States</option>
                                            <option>Uruguay</option>
                                            <option>U.S. Outlying Islands</option>
                                            <option>U.S. Virgin Islands</option>
                                            <option>Uzbekistan</option>
                                            <option>Vanuatu</option>
                                            <option>Vatican City</option>
                                            <option>Venezuela</option>
                                            <option>Vietnam</option>
                                            <option>Wallis and Futuna</option>
                                            <option>Western Sahara</option>
                                            <option>Yemen</option>
                                            <option>Zambia</option>
                                            <option>Zimbabwe</option>
                                          </select>
                                        </fieldset>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="input-box">
                                        <fieldset class="chk-bil-fld">
                                          <legend>Zip Code<em>*</em></legend>
                                          <input type="text" title="Postal Code" name="postcode" value="{{ session('address.postcode') }}" class="input-text" id="shipping_postcode">
                                        </fieldset>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                          <div class="buttons-set" id="billing-buttons-container">
                            <button type="submit" title="Continue" name="pagetype" id="chk_ship_btn" value="shipping" class="button"><span><span>Continue</span></span></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  @endguest

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
    var lngbtn = '<span><span>Login</span></span>';
    var loading = '<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>';
      loginForm.submit(function(e){
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
              }
            });
          e.preventDefault();
          jQuery('#chk_lgn_btn').html(loading);
          var formData = loginForm.serialize();
          jQuery.ajax({
              url:'/login',
              type:'POST',
              data:formData,
              success:function(data){
                  location.reload();
                },
              error: function (data) {
                if (data.responseJSON.message) {
                  var email = data.responseJSON.message;
                }
                jQuery('#chk_lgn_btn').html(lngbtn);
                jQuery('#emailerr').html(email);
                jQuery('.cklogform').addClass('has-error');
                // console.log(data);
              }
          });
      });

      jQuery('#chklgncrtacc').click(function() {
          jQuery('#checkout-step-login').addClass('hidden');
          jQuery('#checkout-step-billing').removeClass('hidden');
      });

      var registerForm = jQuery("#co-billing-form");
      var regbtn = '<span><span>Continue</span></span>';
      var loadingreg = '<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>';
        registerForm.submit(function(e){
            e.preventDefault();
            jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                  }
                });
            jQuery('#chk_reg_btn').html(loadingreg);
            var firstname = jQuery('#blling_firstname').val();
            var lastname = jQuery('#blling_lastname').val();
            var email = jQuery('#blling_email').val();
            var mobilenum = jQuery('#billing_mobilenum').val();
            var address = jQuery('#blling_address').val();
            var region = jQuery('#blling_region').val();
            var city = jQuery('#blling_city').val();
            var country = jQuery('#blling_country').val();
            var postcode = jQuery('#blling_postcode').val();
            var pass = jQuery('#blling_pass').val();
            var pass_again = jQuery('#blling_pass_again').val();
            console.log(address);
              if (pass != pass_again) {
                jQuery('.password_wpr').addClass('has-error');
                jQuery('#billpassworderr').html("Password & Confirm Password Not match");
              } else {
                jQuery.ajax({
                    url:'/register',
                    type:'POST',
                    data:{firstname:firstname,lastname:lastname,email:email,mobilenum:mobilenum,password:pass,password_confirmation:pass_again},
                    success:function(data){
                        jQuery.ajax({
                          url:'/customer/address',
                          type:'POST',
                          data:{phonenum:mobilenum,address:address,country:country,region:region,city:city,postcode:postcode},
                          success:function(data){
                            location.reload();
                          },
                          error: function (data) {
                            console.log(data);
                          }
                        });
                    },
                    error: function (data) {
                      var email = "";
                      var mobilenum = "";
                      if (data.responseJSON.errors.mobilenum[0]) {
                        mobilenum = data.responseJSON.errors.mobilenum[0];
                      }
                      if (data.responseJSON.errors.email[0]) {
                        email = data.responseJSON.errors.email[0];
                      }
                      jQuery('#chk_reg_btn').html(regbtn);
                      jQuery('#billemaileerr').html(email);
                      jQuery('#billmobileerr').html(mobilenum);
                    }
                });

              }

        });


  </script>
@endsection
