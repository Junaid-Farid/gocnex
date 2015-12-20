<div class="row showstep2" style="display: none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns class-form">
                        <div class="large-10 large-centered columns without-sidebar">
                            <!--                                here is the page title-->
                            <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-2-1'); ?></h1>
                        </div>
                        <form id="frmEstimatorStep2" name="frmEstimatorStep2" method="post" enctype="multipart/form-data" role="form">
                            <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                <div class="col-md-5 col-md-offset-1">
                                    <p class="top-paragraphp"><?php echo get_option('headings-label-2-2'); ?></p>
                                </div>
                                <div class="col-md-5 margin-top-negitive-55px">
                                    <img src="<?php echo get_option('headings-label-2-3'); ?>"  alt="ImgHaedStep2"/>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-left-padding no-right-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <p class="form-paragraph">  <img src="<?php echo get_option('content-label-2-1'); ?>" alt="twoWire2" /></p>
                                    </div>
                                    <div class="col-md-9 no-left-padding no-right-padding margin-top-40px">
                                        <?php $label = explode('/', get_option('estimates-label-7')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?><input name="one_gang_box_qnty" type="text" class="form-control" id="txtOneGangQ" placeholder="Quanity 16" value="<?php if(isset($results[0]->one_gang_box_qnty)){echo $results[0]->one_gang_box_qnty; } else {echo "16";}?>"> <?php echo $label[1]; ?> </p>                                          
                                        <div class="col-md-10 no-left-padding no-right-padding">
                                            <?php $label = explode('/', get_option('estimates-label-8')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?> <input name="one_gang_box_price" type="text" class="form-control" id="txtOneGangP" placeholder="Price 1.00" value="<?php if(isset($results[0]->one_gang_box_price)){echo $results[0]->one_gang_box_price; } else {echo "1.00";}?>"> <?php echo $label[1]; ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding ">
                                        <img src="<?php echo get_option('content-label-2-2'); ?>" alt="twogang" />
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-9')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?> <input name="two_gang_box_qnty" type="text" class="form-control" id="txtTwoGangQ" placeholder="Quanity 3" value="<?php if(isset($results[0]->two_gang_box_qnty)){echo $results[0]->two_gang_box_qnty; } else {echo "3";}?>"> <?php echo $label[1]; ?> </p>
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                            <?php $label = explode('/', get_option('estimates-label-10')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?>  <input name="two_gang_box_price" type="text" class="form-control" id="txtTwoGangP" placeholder="Price 4.00" value="<?php if(isset($results[0]->two_gang_box_price)){echo $results[0]->two_gang_box_price; } else {echo "4.00";}?>"> <?php echo $label[1]; ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <p class="form-paragraph"> <img src="<?php echo get_option('content-label-2-3'); ?>" alt="threegangbox" /> </p>
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-11')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?>  <input name="three_gang_box_qnty" type="text"  class="form-control" id="txtThreeGangQ" placeholder="Quanity 2" value="<?php if(isset($results[0]->three_gang_box_qnty)){echo $results[0]->three_gang_box_qnty; } else {echo "2";}?>"> <?php echo $label[1]; ?> </p>
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                            <?php $label = explode('/', get_option('estimates-label-12')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?>  <input name="three_gang_box_price" type="text"  class="form-control" id="txtThreeGangP" placeholder="Price 6" value="<?php if(isset($results[0]->three_gang_box_price)){echo $results[0]->three_gang_box_price; } else {echo "6.00";}?>"> <?php echo $label[1]; ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-3  no-left-padding no-right-padding">
                                        <p class="form-paragraph"> <img src="<?php echo get_option('content-label-2-4'); ?>" alt="fourgangbox" /> </p>
                                    </div>
                                    <div class="col-md-9 no-right-padding margin-top-40px no-left-padding">
                                        <?php $label = explode('/', get_option('estimates-label-13')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?>  <input name="four_gang_box_qnty" type="text" class="form-control" id="txtFourGangQ" placeholder="Quanity 0" value="<?php if(isset($results[0]->four_gang_box_qnty)){echo $results[0]->four_gang_box_qnty; } else {echo "0";}?>"> <?php echo $label[1]; ?>  </p>
                                        <div class="col-md-9 no-left-padding no-right-padding">
                                            <?php $label = explode('/', get_option('estimates-label-14')); ?> 
                                            <p class="form-paragraph"> <?php echo $label[0]; ?>  <input name="four_gang_box_price" type="text" class="form-control" id="txtFourGangP" placeholder="Price 8.00" value="<?php if(isset($results[0]->four_gang_box_price)){echo $results[0]->four_gang_box_price; } else {echo "8.00";}?>"> <?php echo $label[1]; ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="row>">
                                        <div class="col-md-5"> 
                                            <div class="row">
                                                <input type="hidden" name="lastid" id="lastid" value=""/>
                                                <button type="button" name="estStep2" id="back" class="cstuoma"> Back </button>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <input type="submit" name="btnFirstStepTwo" id="btnFirstStepTwo" value="Next" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-12 ">
                                    <div class="progressbar"></div>
                                </div>
                                <div class="col-sm-12 padding-top-20px">
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 10% completed</p>
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