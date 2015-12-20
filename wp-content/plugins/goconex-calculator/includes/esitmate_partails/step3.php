<div class="row showstep3" style="display: none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns class-form">
                        <div class="large-10 large-centered columns without-sidebar">
                            <!--                                here is the page title-->
                            <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-3-1'); ?></h1>
                        </div>
                        <form id="frmEstimatorStep3" name="frmEstimatorStep3" method="post" enctype="multipart/form-data" role="form">
                            <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                <div class="col-md-5 col-md-offset-1 no-left-padding">
                                    <p class="top-paragraphp"><?php echo get_option('headings-label-3-2'); ?></p>
                                </div>
                                <div class="col-md-5 margin-top-negitive-50px">
                                    <img src="<?php echo get_option('headings-label-3-3'); ?>"  alt="ImgHaedStep3"/>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <img src="<?php echo get_option('content-label-3-1'); ?>" alt="onegangvpr" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-15')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?> <input name="one_gang_vpr_boot_qnty" type="text" class="form-control" id="txtOneGangVPRQ" placeholder="Quanity 3" value="<?php if(isset($results[0]->one_gang_vpr_boot_qnty)){echo $results[0]->one_gang_vpr_boot_qnty; } else {echo "3";}?>"> <?php echo $label[1]; ?></p>                                          
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-16')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?> <input name ="one_gang_vpr_boot_price" type="text" class="form-control" id="txtOneGangVPRprice" placeholder="Price 0.35" value="<?php if(isset($results[0]->one_gang_vpr_boot_price)){echo $results[0]->one_gang_vpr_boot_price; } else {echo "0.35";}?>"> <?php echo $label[1]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <img src="<?php echo get_option('content-label-3-2'); ?>" alt="twogangvpr" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-17')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?> <input name="twp_gang_vpr_boot_qnty" type="text" class="form-control" id="txtTwoGangVPRQ" placeholder="Quanity 3" value="<?php if(isset($results[0]->twp_gang_vpr_boot_qnty)){echo $results[0]->twp_gang_vpr_boot_qnty; } else {echo "3";}?>">  <?php echo $label[1]; ?></p>
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-18')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?> <input name="two_gang_vpr_boot_price" type="text" class="form-control" id="txtTwoGangVPRprice" placeholder="Price 0.60" value="<?php if(isset($results[0]->two_gang_vpr_boot_price)){echo $results[0]->two_gang_vpr_boot_price; } else {echo "0.60";}?>"> <?php echo $label[1]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <img src="<?php echo get_option('content-label-3-3'); ?>" alt="twogangvpr" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-19')); ?> 
                                        <p class="form-paragraph"> <?php echo $label[0]; ?> <input name="three_gang_vpr_boot_qnty" type="text" class="form-control" id="txtThreeGangVPRQ" placeholder="Quanity 1" value="<?php if(isset($results[0]->three_gang_vpr_boot_qnty)){echo $results[0]->three_gang_vpr_boot_qnty; } else {echo "1";}?>">   <?php echo $label[1]; ?> </p>
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-20')); ?> 
                                            <p class="form-paragraph">  <?php echo $label[0]; ?> <input name="three_gang_vpr_boot_price" type="text" class="form-control" id="txtThreeGangVPRprice" placeholder="Price 1.12" value="<?php if(isset($results[0]->three_gang_vpr_boot_price)){echo $results[0]->three_gang_vpr_boot_price; } else {echo "1.12";}?>">  <?php echo $label[1]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <img src="<?php echo get_option('content-label-3-4'); ?>" alt="onegangvpr" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-21')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?> <input name="four_gang_vpr_boot_qnty" type="text" class="form-control" id="txtFourGangVPRQ" placeholder="Quanity 0" value="<?php if(isset($results[0]->four_gang_vpr_boot_qnty)){echo $results[0]->four_gang_vpr_boot_qnty; } else {echo "0";}?>"> <?php echo $label[1]; ?> </p>
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-22')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?><input name="four_gang_vpr_boot_price" type="text" class="form-control" id="txtFourGangVPRprice" placeholder="Price 2.50" value="<?php if(isset($results[0]->four_gang_vpr_boot_price)){echo $results[0]->four_gang_vpr_boot_price; } else {echo "2.50";}?>"> <?php echo $label[1]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="row>">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <input type="hidden" name="lastid" id="lastid" value="<?php echo $_GET['id']; ?>"/>

                                                <button type="button" name="estStep3" id="back" class="cstuoma"> Back </button>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <input type="submit" name="btnFourStepNext" id="btntwoStepNext" value="Next" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-12 ">
                                    <div id="progressbar" class="progressbar"></div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 20% completed</p>
                                </div>
                                <div class="loader_modal"><!-- Place at bottom of page --></div>
                                <div style="clear: both"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>