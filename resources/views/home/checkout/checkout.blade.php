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
              <form action="{{ route('order') }}" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                {{ csrf_field() }}
                  <!-- SmartWizard html -->
                  <div id="smartwizard">
                      <ul>
                          <li><a href="#step-1">Your Address<br/></a></li>
                          <li><a href="#step-2">Shipping Method<br/></a></li>
                          <li><a href="#step-3">Payment Information<br/></a></li>
                          <li><a href="#step-4">Order Review<br/></a></li>
                      </ul>

                    <div>
                      <div id="step-1">
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
                                  </div>
                                  <div class="col-md-24">
                                    <div class="chk-lgn-input">
                                      <input id="chklgnpwd" placeholder="Enter Your Password" class="chk-lgn-pwd" type="password" name="password">
                                    </div>
                                  </div>
                                  <div class="col-md-24">
                                    <div class="chk-lgn-btn-wpr">
                                      <input type="submit" name="" value="Login">
                                      {{-- <button type="submit" title="Login" class="button"><span><span>Login</span></span></button> --}}
                                    </div>
                                  </div>
                                </form>
                                <div class="col-md-24">
                                  <div class="chk-lgn-footer-text">
                                    <a id="chkfrgtpswd" class="f-left">Forgot your password?</a>
                                  </div>
                                </div>
                              <div class="col-md-24 chk-crt-acc-wpr">
                                <div class="chk-lgn-footer-text">New to pickaboo? <a href="{{ route('register') }}" id="chklgncrtacc">Create Account</a></div>
                              </div>
                            </div>
                          </div>
                          </div>
                        @else
                          <div class="fieldset">
                            <p class="required">* Required Fields</p>
                            <ul class="form-list">
                              <li class="wide">
                                <div class="input-box">
                                  <fieldset class="chk-bil-fld">
                                    <legend>Select A Billing Address From Your Address Book Or Enter A New Address.<em>*</em></legend>
                                    <div class="row">
                                      <div class="syn-customer-address col-md-12" id="new_address">
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                          <div class="form-group col-md-12">
                                            <label for="fname" class="required"><em>*</em>First Name:</label>
                                            <input type="text" class="form-control" name="firstname" id="fname" value="{{ Auth::user()->firstname }}" placeholder="Write your first name" required>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <label for="lname" class="required"><em>*</em>Last Name:</label>
                                            <input type="text" class="form-control" name="lastname" id="lname" value="{{ Auth::user()->lastname }}" placeholder="Write your last name" required>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                          <div class="form-group col-md-24">
                                            <label for="phonenum" class="required"><em>*</em>Telephone:</label>
                                            <input type="text" class="form-control" name="phonenum" id="phonenum" value="{{ Auth::user()->mobilenum }}" placeholder="Write your telephone number" required>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                          <div class="form-group col-md-24">
                                              <label for="address" class="required"><em>*</em>Address</label>
                                              <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." required></textarea>
                                              <div class="help-block with-errors"></div>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <label for="state" class="required"><em>*</em>State/Province:</label>
                                            <input type="text" class="form-control" name="state" id="state" value="@if (Auth::user()->userinfo->region)
                                              {{ Auth::user()->userinfo->region}}
                                            @endif " placeholder="Write your state" required>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <label for="city" class="required"><em>*</em>City:</label>
                                            <input type="text" class="form-control" name="city" id="city" value="{{ Auth::user()->userinfo->city }}" placeholder="Write your city" required>
                                            <div class="help-block with-errors"></div>
                                          </div>
                                          <div class="form-group col-md-24">
                                            <label for="country" class="required"><em>*</em>Country:</label>
                                            <select name="country" id="country" class="form-control" title="Country" required>
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
                                            <div class="help-block with-errors"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </fieldset>
                                </div>
                              </li>
                            </ul>
                          </div>
                        @endguest

                      </div>

                      <div id="step-2">
                          <h2>Shipping Method</h2>
                          <div id="form-step-1" role="form" data-toggle="validator">
                              <div class="form-group">
                                  <label>
                                  <input type="radio" name="shipping_method" value="regular_shipping" data-msg="Regular Shipping - Delivery within 2-5 Days" data-fee="100"  required>
                                  Regular Shipping (৳100) <br> <small class="help-text"> (Regular Shipping - Delivery within 2-5 Days)</small>
                                  </label>
                                  <div class="help-block with-errors"></div>
                              </div>
                              <div class="form-group">
                                  <label>
                                  <input type="radio" name="shipping_method" value="office_collection" data-msg="Office Collection - (Ready within 1-48 Hours )" data-fee="0"  required>
                                  Office Collection <br> <small class="help-text">(Earn 100 Club Points)</small>
                                  </label>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                      </div>
                      <div id="step-3">
                          <h2>Payment Method</h2>
                          <div id="form-step-2" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label>
                                <input type="radio" name="payment_methods" value="cash_on_delevary" required>
                                Cash On Delivery
                                </label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label>
                                <input type="radio" name="payment_methods" value="online_payment">
                                Online Payment
                                </label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label>
                                <input type="radio" name="payment_methods" value="bkash_payment">
                                bKash Payment
                                </label>
                                <div class="help-block with-errors"></div>
                            </div>
                          </div>
                      </div>
                      <div id="step-4" class="">
                          <h2>Order Review</h2>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($items = LaraCart::getItems() as $item)
                              <tr>
                                <td>{{ $item->getModel()->title }}</td>
                                <td>৳{{ $item->price }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>৳{{ $item->subTotal($formatted = false) }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                            <tfoot class="order-review-tfoot">
                              <tr>
                                <td colspan="3" class="text-right subtotal">Subtotal :</td>
                                <td class="order-review-price">৳{{ LaraCart::total($format = false, $withDiscount = false) }}</td>
                              </tr>
                              <tr>
                                <td colspan="3" class="text-right delevery-charge" >Shipping & Handling ( <span id="delevery_msg"></span>) :</td>
                                <td class="order-review-price" >৳ <span id="delevary_fee"></span></td>
                              </tr>
                              <tr>
                                <td colspan="3" class="text-right total">Grand Total :</td>
                                <td class="order-review-price">৳{{ LaraCart::total($formatted = false, $withDiscount = true) }}</td>
                              </tr>
                            </tfoot>

                          </table>
                          <div id="form-step-3" role="form" data-toggle="validator">
                              <div class="form-group">
                                  <label for="terms">I agree with the Terms & Conditions</label>
                                  <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>
                                  <div class="help-block with-errors"></div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        <div class="em-wrapper-area05"></div>
        <div class="em-wrapper-area06"></div>
@endsection
@section('js-script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.smartWizard.min.js') }} "></script>
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
              // jQuery('#email').html(email);
              // jQuery('#password').html(password);
              // jQuery('.input-text').addClass('has-error');
                console.log(data);
            }
        });
    });
</script>
  <script type="text/javascript">
      (function($){
          // Toolbar extra buttons
          var btnFinish = $('<button></button>').text('Finish')
                                           .addClass('btn btn-info btn-finish hide')
                                           .on('click', function(){
                                                  if( !$(this).hasClass('disabled')){
                                                      var elmForm = $("#myForm");
                                                      if(elmForm){
                                                          elmForm.validator('validate');
                                                          var elmErr = elmForm.find('.has-error');
                                                          if(elmErr && elmErr.length > 0){
                                                              alert('Oops we still have error in the form');
                                                              return false;
                                                          }else{
                                                              elmForm.submit();
                                                              return false;
                                                          }
                                                      }
                                                  }
                                              });

          // Smart Wizard
          $('#smartwizard').smartWizard({
                  selected: 0,
                  theme: 'arrows',
                  transitionEffect:'fade',
                  lang: {  // Language variables
                      next: 'Continue',
                      previous: 'Back'
                  },
                  toolbarSettings: {toolbarPosition: 'bottom',
                                    toolbarExtraButtons: [btnFinish]
                                  },
                  anchorSettings: {
                              markDoneStep: true, // add done css
                              markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                              removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                              enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                          }
               });

          $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
              var elmForm = $("#form-step-" + stepNumber);
              // stepDirection === 'forward' :- this condition allows to do the form validation
              // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
              if(stepDirection === 'forward' && elmForm){
                  elmForm.validator('validate');
                  var elmErr = elmForm.children('.has-error');
                  if(elmErr && elmErr.length > 0){
                      // Form validation failed
                      return false;
                  }
              }
              return true;
          });

          $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
              // Enable finish button only on last step
              if(stepNumber == 3){
                  $('.btn-finish').removeClass('hide');
                  var method = $('input[name=shipping_method]:checked').val();
                  var msg = $('input[name=shipping_method]:checked').attr('data-msg');
                  var fee = $('input[name=shipping_method]:checked').attr('data-fee');
                  $('#delevery_msg').text(msg);
                  $('#delevary_fee').text(fee);
                  console.log(method + msg + fee);
              }else{
                  $('.btn-finish').addClass('hide');
              }
          });

      })(jQuery);
  </script>
@endsection
