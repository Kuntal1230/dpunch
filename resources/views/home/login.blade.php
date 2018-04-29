@extends('home.partial.master')

 @section('body_class'," customer-account-login ")
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
               <li class="login"> <strong>Login</strong></li>
             </ul>
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
      <div class="account-login">
        <div class="page-title"></div>
        <form action="" method="post" id="login-form" class="scaffold-form">
          <input name="form_key" type="hidden" value="rLwTvCGDTCwKiYa9">
          <div class="col2-set">
            <div class="col-1 new-users">
              <div class="content"> <span><span>Haven't signed up yet?</span><hr></span>
                <h1 class="bluetxt">SIGN UP AND EARN</h1>
                <h1 class="redtxt">200 Club Points</h1>
              </div>
            </div>
            <div class="col-2 registered-users">
              <div class="content fieldset">
                <ul class="form-list">
                  <li> <label for="username" class="required"><em>*</em>Email/Mobile</label>
                    <div class="input-box">
                      <input type="text" name="login[username]" id="username" class="input-text required-entry validate" value="" title="Email/Mobile">
                    </div>
                  </li>
                  <li> <label for="pass" class="required"><em>*</em>Password</label>
                    <div class="input-box">
                      <input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password">
                    </div>
                  </li>
                  <li>
                    <div class="buttons-set">
                      <button type="submit" class="button" title="Login" name="send" id="send2"><span><span>Sign in</span></span></button>
                    </div>
                  </li>
                  <li>
                    <div class="buttons-set"> <span>Not a member? </span>
                      <a title="Sign Up" class="button" id="signup" href=""><span><span>Sign up now</span></span></a>
                      <a href="" class="forgot-password">Forgot Your Password?</a>
                    </div>
                  </li>
                  <li>
                    <div class="or-img">
                      <img class="img-responsive orimg" src="https://www.pickaboo.com/skin/frontend/em0131/default/images/or.png">
                    </div>
                  </li>
                  <li>
                    <p class="customer-fb-lgn">
                      <a href="">Sign in with facebook</a>
                    </p>
                  </li>
                  <li>
                    <p class="customer-gpls-lgn">
                      <a href="">Sign in with Google</a>
                    </p>
                  </li>
                </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>

@endsection
