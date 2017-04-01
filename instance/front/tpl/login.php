
<div class="center-vertical ">
    <div class="center-content row">
        <form method="post" action="login" id="login-validation" class="col-md-4 col-sm-5 col-xs-11 col-lg-4 center-margin">

            <h3 class="text-center pad25B font-gray text-transform-upr font-size-23">Trexecom Admin <span class="opacity-80">v1.0</span></h3>

            <div id="" class="content-box bg-default">
                <div class="content-box-wrapper pad20A">
                    <img class="mrg25B center-margin radius-all-100 display-block" src="<?php print _MEDIA_URL ?>img/LOGO.png" alt="" width="220"  >
                    <div class="">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <?php
                            if ($login_error != '') {
                                $set_brilliant_cookie = 0;
                                ?>
                                <div class="" style="padding:5px;">
                                    <div style="float:right;color:red;">
                                        <?php print _t('222', 'Email and password are invalid'); ?> 
                                    </div>

                                    <div style="clear:both;"></div>
                                </div>
                            <?php } ?>
                            <?php
                            if ($login_error_blank != '') {
                                $set_brilliant_cookie = 0;
                                ?>
                                <div class="" style="padding:5px;">
                                    <div style="float:right;color:red;">
                                        <?php print _t('', ''); ?>Please Enter Email and password
                                    </div>

                                    <div style="clear:both;"></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <!--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">-->
                            <input id="email" type="email" name="email" class="form-control" required  placeholder="<?php print _t('188', 'Username'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <!--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
                            <input id="password_login" type="password" class="form-control validate" name="password" required placeholder="<?php print _t('189', 'Password'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type = "submit" name = "submit" class = "btn btn-block btn-primary waves-effect waves-amber  z-depth-0 z-depth-1-hover"><?php print _t('215', 'Sign In'); ?></button>
                        <input type = "hidden" name = "LoginData" value = "1">
                        <!--<button type="submit" class="btn btn-block btn-primary">Login</button>-->
                    </div>
                    <div class="row">
                        <div class="checkbox-primary col-md-6 col-sm-6 col-xs-6" style="height: 20px;">
                            <label>
                                <input type="checkbox" id="loginCheckbox1" class="custom-checkbox">
                                Remember me
                            </label>
                        </div>
                        <div class="text-right col-md-6 col-sm-6 col-xs-6" style="height: 20px;">
                            <a href="<?php echo _U ?>sign_up" class="btn-links" title="Sign Up">Sign Up</a>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="text-right col-md-6 col-lg-12 col-sm-12">
                            <!--<a href="<?php echo _U ?>forgot_password" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>-->
                            <a href="<?php echo _U ?>forgot_password" class="btn-links" title="Recover password">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="login-forgot" class="content-box bg-default hide">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="exampleInputEmail2">Email address:</label>
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="button-pane text-center">
                    <button type="submit" class="btn btn-md btn-primary">Recover Password</button>
                    <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a>
                </div>
            </div>

        </form>

    </div>
</div>



<!--
<section id="sign-in">

     Background Bubbles 
    <canvas id="bubble-canvas"></canvas>
     /Background Bubbles 


     Sign In Form 
    <div id="HideDataIE" style="display: none;">
        <form method="post" action="login" id="" >
                    <div class="row links">
                        <div class="col s6 logo">
                            <img src="<?php print _MEDIA_URL ?>/images/logo.png" alt="">
                        </div>
            
                    </div>

            <div class="card-panel clearfix">

                <div class="row ">
                    <div class="col s8 logo right" >
                        <img src="<?php print _MEDIA_URL ?>/images/MasirApp.png" alt="">
                        <img src="<?php print _MEDIA_URL ?>/images/Trexecom-Logos.png" style="height: 140px;width: 120px;" alt="">
                        <img src="<?php print _MEDIA_URL ?>/images/Trexecom-logo.png" style="height: 60px;width: 60px;" alt="">
                        <img src="<?php print _MEDIA_URL ?>/images/Trexecom-names.png" style="height: 50px;width: 120px;" alt="">
                        <span style="font-weight:bold;font-size:50px;color: #C71418;">Trexecom</span>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
<?php
if ($login_error != '') {
    $set_brilliant_cookie = 0;
    ?>
                                                                            <div class="" style="padding:5px;">
                                                                                <div style="float:right;color:red;">
    <?php print _t('222', 'Email and password are invalid'); ?> 
                                                                                </div>

                                                                                <div style="clear:both;"></div>
                                                                            </div>
<?php } ?>
<?php
if ($login_error_blank != '') {
    $set_brilliant_cookie = 0;
    ?>
                                                                            <div class="" style="padding:5px;">
                                                                                <div style="float:right;color:red;">
    <?php print _t('', ''); ?>Please Enter Email and password
                                                                                </div>

                                                                                <div style="clear:both;"></div>
                                                                            </div>
<?php } ?>
                    </div>
                </div>
                <div class="row" style="margin-right:0px">
                     Username 

                    <div class="input-field">
                        <i class="fa fa-user prefix green-text"></i>
                        <input id="email" type="email" name="email" class="validate ltr" placeholder="<?php print _t('188', 'Username'); ?>">
                    </div>
                     /Username 

                     Password 
                    <div class="input-field">
                        <i class="fa fa-unlock-alt prefix green-text"></i>
                        <input id="password_login" type="password" class="validate" name="password" placeholder="<?php print _t('189', 'Password'); ?>">
                    </div>
                     /Password 
                    <div class="input-field">
                        <i class="mdi-communication-location-on prefix active green-text"></i>
                          <input data-tooltip='User Email' id="email" name="email"  data-inputmask="'mask': '*{1,64}[.*{1,64}][.*{1,64}][.*{1,64}]@*{1,64}[.*{2,64}][.*{2,6}][.*{1,2}]'" type="email" class=" tooltipped" maxlength="255"  value="" > 
                        <label for="email">E-Mail</label> 
                        <select name="office"  id="office" class="validate browser-default custom-select" style="" required >
                            <option value="" disabled selected><?php print _t('213', 'Choose Office'); ?> </option>
                                                        <option value="sadeghyeh">sadeghyeh</option>
                                                        <option value="gandhi">gandhi</option>


                        </select>

                    </div>
                    <div>
<?php
if (!empty($msg)) {
    ?> <span style="color: red; text-transform: capitalize" > <?php print _t('223', 'Please Select Proper Office! The user Not assign to this Office'); ?>
                                                                                <script>
                                                                                    $('office').focus();
                                                                                </script></span>
    <?php
}
?>
                    </div>
                    /Password 
                </div>
                <div class = "row">
                    <div class = "col">

                    </div>
                </div>
                <div class = "col">
                    <button type = "submit" name = "submit" class = "waves-effect waves-amber green btn-large z-depth-0 z-depth-1-hover"><?php print _t('215', 'Sign In'); ?></button>
                    <input type = "hidden" name = "LoginData" value = "1">
                </div>
            </div>

            <div class = "links right-align">
                <a href = "<?php echo _U ?>forgot_password"><?php print _t('216', 'Forgot Password?'); ?></a>
            </div>

        </form>
    </div>
    <div id="browserMessage" style="display: none;width:800px; margin:0 auto;">
        <div class="white" style="color: #545454;padding: 10px;">
            <div style="font-size: 14px;font-weight: bold;">
                To get the best possible experience using <span style="color: red">Trexecom</span> we recommend that
                you upgrade to a modern web browser.
            </div>
            <p>
                To download a new web browser click on any of the below browser download icon.
            </p>

        </div>
        <div class="white" style="margin-top: 10px">
            <a style="width: 33%;float: left;padding: 10px;cursor: pointer;text-align: center" target="_blank" href="https://www.google.com/chrome/browser/desktop/">
                <img src="<?php print _MEDIA_URL . "browser/chrome_icon.png" ?>" width="150" height="150"/>  
                <div style="font-size: 15px"><i class="fa fa-download">&nbsp;</i>Chrome</div>
            </a>
            <a style="width: 33%;float: left;padding: 10px;padding-top: 15px;cursor: pointer;text-align: center" target="_blank" href="https://www.mozilla.org/en-US/firefox/new/">
                <img src="<?php print _MEDIA_URL . "browser/mozilla_icon.png" ?>" width="150" height="144"/>    
                <div style="font-size: 15px"><i class="fa fa-download">&nbsp;</i>Firefox</div>
            </a>
            <a style="width: 33%;float: left;padding: 10px;cursor: pointer;text-align: center" target="_blank" href="https://support.apple.com/downloads/safari">
                <img src="<?php print _MEDIA_URL . "browser/safari_icon.png" ?>" width="150" height="150"/>    
                <div style="font-size: 15px"><i class="fa fa-download">&nbsp;</i>Safari</div>
            </a>
            <div style="clear: both"></div>
        </div>
    </div>
    /Sign In Form 

</section>
<style>
    #bubble-canvas{
        z-index: 0!important;
    }
    .custom-select{
        font-size: 16px;border: 1px solid #CCCCCC;border-radius: 4px;
    }
    html.rtl .custom-select{
        /*margin-right: 3rem;*/
    }
    .input-field .prefix ~ input,
    .input-field .prefix ~ textarea {
        width: calc(100% - 4rem); }
    ::-webkit-input-placeholder {
        color: #4d4d4d; }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #4d4d4d; }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #4d4d4d; }

    :-ms-input-placeholder {
        color: #4d4d4d; }
</style>-->
