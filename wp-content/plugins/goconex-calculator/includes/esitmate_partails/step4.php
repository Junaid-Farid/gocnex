<div class="row showstep4" style="display: none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns class-form">
                        <div class="large-10 large-centered columns without-sidebar">
                            <!--                                here is the page title-->
                            <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-4-1'); ?></h1>
                        </div>
                        <form id="frmEstimatorStep4" name="frmEstimatorStep4" method="post" enctype="multipart/form-data" role="form">
                            <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                <div class="col-md-5 col-md-offset-1">
                                    <p class="top-paragraphp"><?php echo get_option('headings-label-4-2'); ?></p>
                                </div>
                                <div class="col-md-5 margin-top-negitive-55px">
                                    <img src="<?php echo get_option('headings-label-4-3'); ?>"  alt="ImgHaedStep2"/>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <img src="<?php echo get_option('content-label-4-1'); ?>" alt="onegangvpr" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-23')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?><input name="decra_single_pool_qnty" type="text" class="form-control" id="txtDecoraSinglePoleQ" placeholder="Quanity 15" value="15"> <?php echo $label[1]; ?></p>                                          
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                            <?php $label = explode('/', get_option('estimates-label-24')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?> <input name="decra_single_pool_price" type="text" class="form-control" id="txtDecoraSinglePolePrice" placeholder="Price 1.89" value="1.89"> <?php echo $label[1]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <img src="<?php echo get_option('content-label-4-2'); ?>" alt="twogangvpr" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-25')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?><input name="decra_three_wy_switch_qnty" type="text" class="form-control" id="txtDecoraThreeWyQ" placeholder="Quanity 12" value="12"> <?php echo $label[1]; ?></p>
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                            <?php $label = explode('/', get_option('estimates-label-26')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?><input name="decra_three_wy_switch_price" type="text" class="form-control" id="txtDecoraThreeWyPrice" placeholder="Price 2.43" value="2.43"> <?php echo $label[1]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <img src="<?php echo get_option('content-label-4-3'); ?>" alt="twogangvpr" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-27')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?> <input name="decra_four_wy_switch_qnty" type="text" class="form-control" id="txtDecoraFourWyQ" placeholder="Quanity 0" value="0">  <?php echo $label[1]; ?> </p>
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                            <?php $label = explode('/', get_option('estimates-label-28')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?> <input name="decra_four_wy_switch_price" type="text" class="form-control" id="txtDecoraFourWyPrice" placeholder="Price 8" value="15.00"> <?php echo $label[1]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <img src="<?php echo get_option('content-label-4-4'); ?>" alt="onegangvpr" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-29')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?> <input name="wire_conductor_qnty" type="text" class="form-control" id="txtWireConnectorQ" placeholder="Quanity 60" value="60"> <?php echo $label[1]; ?></p>                                                                                  
                                        <?php $label = explode('/', get_option('estimates-label-30')); ?> 
                                        <p class="form-paragraph"> <?php echo $label[0]; ?> <input name="wire_conductor_price" type="text" class="form-control" id="txtWireConnectorPrice" placeholder="Price 0.03" value="0.03"><?php echo $label[1]; ?></p>                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="row>">
                                        <div class="col-md-5">
                                            <input type="hidden" name="lastid" id="lastid" value=""/>
                                            <button type="button" name="btnThreeStepTwoBack" id="back" class="cstuoma"> Back </button>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="submit" name="btnThreeStepTwo" id="btnThreeStepTwo" value="Next" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-12 ">
                                    <div id="progressbar" class="progressbar"></div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 30% completed</p>
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