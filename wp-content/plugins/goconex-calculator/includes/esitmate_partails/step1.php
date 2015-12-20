<?php

function html_form_code() {
    if (isset($_GET['id'])) {
        global $wpdb;
        $id =  $_GET['id'];
        $table_name = $wpdb->prefix . 'estimate';
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id ='. $id, OBJECT);
    }
    ?>  
    <style>
        .entry-header {
            display: none;
        } 
    </style>
    <!-- form one -->
    <div class="row showstep1" id="step1">
        <div class="large-12 columns">
            <div class="entry-content">
                <div class="woocommerce">
                    <div class="row">
                        <div class="xxlarge-6 xlarge-8 large-12 large-centered columns class-form">
                            <div class="large-10 large-centered columns without-sidebar">
                                <!--                                here is the page title-->
                                <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-1-1'); ?></h1>
                            </div>
                            <form id="frmEstimatorstep1">
                                <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                    <div class="col-md-7 col-md-offset-1 no-left-padding">
                                        <p class="top-paragraphp"><?php echo get_option('headings-label-1-2'); ?></p>
                                    </div>
                                    <div class="col-md-4 margin-top-negitive-20px">
                                        <img src="<?php echo get_option('headings-label-1-3'); ?>"  alt="ImgHaed"/>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px">
                                    <div class="row">
                                        <div class="col-md-3  no-left-padding no-right-padding">
                                            <img src="<?php echo get_option('content-label-1-1'); ?>" alt="twoWire" />
                                        </div>
                                        <?php $label = explode('/', get_option('estimates-label-1')); ?> 
                                        <div class="col-md-9 no-left-padding no-right-padding margin-top-40px">
                                            <p class="form-paragraph"><?php echo $label[0]; ?> <input name="wire_two_cond_qnty" type="text" class="form-control" id="txtWire2Cond" placeholder="Quantity 7" value="<?php if(isset($results[0]->wire_two_cond_qnty)){echo $results[0]->wire_two_cond_qnty; } else {echo "7";}?>"/> <?php echo $label[1]; ?></p>                                          
                                            <div class="col-md-9 no-left-padding no-right-padding">
                                                <?php $label = explode('/', get_option('estimates-label-2')); ?> 
                                                <p class="form-paragraph"> <?php echo $label[0]; ?>  <input name="wire_two_cond_price" type="text" class="form-control" id="txtWire2CondPrice" placeholder="Price 0.79" value="<?php if(isset($results[0]->wire_two_cond_price)){echo $results[0]->wire_two_cond_price; } else {echo "0.79";}?>"> <?php echo $label[1]; ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px">
                                    <div class="row">
                                        <div class="col-md-3  no-left-padding no-right-padding">
                                            <img src="<?php echo get_option('content-label-1-2'); ?>" alt="twoWire" />
                                        </div>
                                        <?php $label = explode('/', get_option('estimates-label-3')); ?> 
                                        <div class="col-md-9 no-left-padding no-right-padding margin-top-40px">
                                            <p class="form-paragraph"><?php echo $label[0]; ?> <input name="wire_three_cond_qnty" type="text" class="form-control" id="txtWire3Cond" placeholder="Quantity 7" value="<?php if(isset($results[0]->wire_three_cond_qnty)){echo $results[0]->wire_three_cond_qnty; } else {echo "7";}?>"> <?php echo $label[1]; ?></p>
                                            <div class="col-md-9 no-left-padding no-right-padding">
                                                <?php $label = explode('/', get_option('estimates-label-4')); ?> 
                                                <p class="form-paragraph"><?php echo $label[0]; ?> <input name="wire_three_cond_price" type="text" class="form-control" id="txtWire3CondPrice" placeholder="Price 1.19" value="<?php if(isset($results[0]->wire_three_cond_price)){echo $results[0]->wire_three_cond_price; } else {echo "1.19";}?>"> <?php echo $label[1]; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px">
                                    <div class="row">
                                        <div class="col-md-3  no-left-padding no-right-padding">
                                            <p class="form-paragraph"> <img src="<?php echo get_option('content-label-1-3'); ?>" alt="twoWire" /> </p>
                                        </div>
                                        <?php $label = explode('/', get_option('estimates-label-5')); ?> 
                                        <div class="col-md-9 no-left-padding no-right-padding margin-top-40px">
                                            <p class="form-paragraph"><?php echo $label[0]; ?> <input name="pip_cond_qnty" type="text" class="form-control" id="txtPipCond" placeholder="Quanity 0" value="<?php if(isset($results[0]->pip_cond_qnty)){echo $results[0]->pip_cond_qnty; } else {echo "0";}?>"> <?php echo $label[1]; ?> </p>
                                            <div class="col-md-9 no-left-padding no-right-padding">
                                                <?php $label = explode('/', get_option('estimates-label-6')); ?> 
                                                <p class="form-paragraph"> <?php echo $label[0]; ?>  <input name="pip_cond_price" type="text" class="form-control" id="txtPipCondPrice" placeholder="Price 0" value="<?php if(isset($results[0]->pip_cond_price)){echo $results[0]->pip_cond_price; } else {echo "0";}?>"> <?php echo $label[1]; ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px">
                                    <div class="col-sm-5 col-sm-offset-4">
                                        <input type="hidden" name="updateid" id="lastidfirstform" value=""/>
                                        <input type="submit" name="btnFirstStep" value="Next" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px">
                                    <div class="col-sm-12 ">
                                        <div id="progressbar" class="progressbar"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 0% completed </p>
                                    </div>
                                    <div style="clear: both"></div>
                                    <div class="loader_modal"><!-- Place at bottom of page --></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end form one -->
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    include 'step2.php';
    include 'step3.php';
    include 'step4.php';
    include 'step5.php';
    include 'step6.php';
    include_once( plugin_dir_path(__FILE__) . '/../option_partails/optionStep1.php' );
    include_once( plugin_dir_path(__FILE__) . '/../option_partails/optionStep2.php' );
    //include_once( plugin_dir_path(__FILE__) . '/../option_partails/optionStep3.php' );
    include_once( plugin_dir_path(__FILE__) . '/../results/result_sheet_one.php' );
    include_once( plugin_dir_path(__FILE__) . '/../results/result_sheet_two.php' );
}
?>
