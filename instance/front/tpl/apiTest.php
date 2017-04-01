<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--<form action="apiTest" method="post">-->
<div class="panel">
    <div class="panel-body">
        <?php
        if ($errors != '') {
//                $set_brilliant_cookie = 0;
            ?>
            <div class="" style="padding:5px;">
                <div style="float:right;color:red;">
                    <?php print 'This Domain alredy exsist' . $errors ?> 
                </div>

                <div style="clear:both;"></div>DOmain
            </div>
        <?php } ?>
        <div class="form-group">
            <div class="input-group">

                <label class="control-label col-xs-12 col-sm-2 col-lg-4" style="text-align: center;line-height: 48px;" for="txtdomain">Input Domain:</label>
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                    <input type="Search" class="form-control" value="" name="txtdomain" id="txtdomain" placeholder="www.example.com" required="">
                </div>
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-2 ">
                    <input type="button" class="btn btn-alt btn-hover btn-default" style="width: 60%;float: right;margin: 1rem;" value="Search" name="Search" onclick="submit()" id="Search">
                    <!--                        <a class="btn btn-alt btn-hover btn-default " style="width: 60%; margin: 1rem;" href=""  onclick="submit()">
                                                <span>Search</span>
                                                <i class="glyph-icon icon-arrow-right"></i>
                                            </a>-->
                </div>
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 " style="text-align: center; "><label id="MSG" name="MSG"></label></div>
            </div>

        </div>

    </div>
</div>
<!--</form>-->
