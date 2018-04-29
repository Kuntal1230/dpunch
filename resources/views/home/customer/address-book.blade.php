@extends('home.partial.master')

@section('body_class',"customer-address-form ")

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
              <li> <a href="{{ route('customer.infornation') }}">Account Information</a> </li>
              <li class="current"><strong>Address Book</strong></li>
              <li><a href="{{ route('customer.orderhistory') }}">My Orders</a></li>
              <li><a href="{{ route('customer.reviews') }}">My Product Reviews</a></li>
              <li class="last"><a href="{{ route('customer.club') }}">Dpunch Club</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-18 em-col-main categ-view">
        <div class="my-account">
          @if (Auth::user()->userinfo)
            <div class="page-title title-buttons title-box"><h1>Address Book</h1></div>
            <div class="box-account-content">
              <div class="col2-set addresses-list">
                <div class="col-1 addresses-primary">
                  <ol>
                    <li class="item">
                      <h3>Default Billing Address</h3>
                      <address>{{ Auth::user()->firstname.' '.Auth::user()->lastname }}<br>{{ Auth::user()->userinfo->address[0].','.Auth::user()->userinfo->address[1].','.Auth::user()->userinfo->address[2] }}<br>{{ Auth::user()->userinfo->region.','.Auth::user()->userinfo->city}} <br> {{ Auth::user()->userinfo->country }}<br> T: {{ Auth::user()->userinfo->phonenum }} </address>
                      <p>
                        <a href="">Change Billing Address</a>
                      </p>
                    </li>
                    <li class="item">
                      <h3>Default Shipping Address</h3>
                      <address>{{ Auth::user()->firstname.' '.Auth::user()->lastname }}<br>{{ Auth::user()->userinfo->address[0].','.Auth::user()->userinfo->address[1].','.Auth::user()->userinfo->address[2] }}<br>{{ Auth::user()->userinfo->region.','.Auth::user()->userinfo->city}}<br>{{ Auth::user()->userinfo->country }}<br> T: {{ Auth::user()->userinfo->phonenum }} <br></address>
                      <p>
                        <a href="">Change Shipping Address</a>
                      </p>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          @else
            <div class="page-title">
              <h1>Add New Address</h1>
            </div>
            <form action="{{ route('customer.updateaddress') }}" method="post" id="form-validate">
              <div class="fieldset">
                {{ csrf_field() }}
                <h2 class="legend">Contact Information</h2>
                <ul class="form-list">
                  <li class="fields">
                    <div class="customer-name">
                      <div class="field name-firstname">
                        <label for="firstname" class="required"><em>*</em>First Name</label>
                        <div class="input-box">
                          <input type="text" id="firstname" name="firstname" value="{{ Auth::user()->firstname }}" title="First Name" maxlength="255" class="input-text required-entry" readonly>
                        </div>
                      </div>
                      <div class="field name-lastname">
                        <label for="lastname" class="required"><em>*</em>Last Name</label>
                        <div class="input-box">
                          <input type="text" id="lastname" name="lastname" value="{{ Auth::user()->lastname }}" title="Last Name" maxlength="255" class="input-text required-entry" readonly>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="wide">
                    <label for="company">Company</label>
                    <div class="input-box">
                      <input type="text" name="company" id="company" title="Company" class="input-text ">
                    </div>
                  </li>
                  <li class="fields">
                    <div class="field">
                      <label for="telephone" class="">Telephone</label>
                      <div class="input-box">
                        <input type="text" name="phonenum" value="" title="Telephone" class="input-text  " id="telephone">
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="fieldset">
                <h2 class="legend">Address</h2>
                <ul class="form-list">
                  <li class="wide">
                    <label for="street_1" class="required"><em>*</em>Street Address</label>
                    <div class="input-box">
                      <input type="text" name="street[]" value="" title="Street Address" id="street_1" class="input-text  required-entry">
                    </div>
                  </li>
                  <li class="wide">
                    <div class="input-box">
                      <input type="text" name="street[]" value="" title="Street Address 2" id="street_2" class="input-text ">
                    </div>
                  </li>
                  <li class="wide">
                    <div class="input-box">
                      <input type="text" name="street[]" value="" title="Street Address 3" id="street_3" class="input-text ">
                    </div>
                  </li>
                  <li class="fields">
                    <div class="field">
                      <label for="country" class="required"><em>*</em>Country</label>
                      <div class="input-box">
                        <select name="country" id="country" class="validate-select" title="Country">
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
                      </div>
                    </div>
                    <div class="field">
                      <label for="region_id" class="required"><em>*</em>State/Province</label>
                      <div class="input-box">
                        <input type="text" id="region" name="region" value="" title="State/Province" class="input-text required-entry">
                      </div>
                    </div>
                  </li>
                  <li class="fields">
                    <div class="field">
                      <label for="city" class="required"><em>*</em>City</label>
                      <div class="input-box">
                        <input type="text" name="city" value="" title="City" class="input-text  required-entry" id="city">
                      </div>
                    </div>
                    <div class="field">
                      <label for="zip" class="required"><em style="display: none;">*</em>Zip/Postal Code</label>
                      <div class="input-box">
                        <input type="text" name="postcode" value="" title="Zip/Postal Code" id="zip" class="input-text validate-zip-international">
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="buttons-set">
                <p class="required">* Required Fields</p><p class="back-link">
                  <a href="{{ route('customer.dashboard') }}"><small>« </small>Back</a>
                </p>
                <button data-action="save-customer-address" type="submit" title="Save Address" class="button"><span><span>Save Address</span></span></button>
              </div>
            </form>
          @endif

        </div>
      </div>
    </div>
  </div>
@endsection
