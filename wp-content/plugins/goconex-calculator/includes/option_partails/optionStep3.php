<?php

function builder_form_html() {
    ?>
    <script>
        jQuery(document).ready(function ($) {
        optionCalculation($('#ms_feature_sell_price_cntrctr').val(), $('#ms_nm_purchased_pr_home_cntrctr').val(), $('#ms_prcnt_home_buyer_cntrctr').val(), 'ms_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'ms_gross_proftit_cntrctr', 'ms_total_purchase_cntrctr_pra', 'ms_total_purchase_cntrctr', 'ms_nm_buyer_pragraph_cntrctr', 'ms_num_buyer_cntrctr', 'ms_total_prchsd_box_cntrctr');
                optionCalculation($('#zn_feature_sell_price_cntrctr').val(), $('#zn_nm_purchased_pr_home_cntrctr').val(), $('#zn_prcnt_home_buyer_cntrctr').val(), 'zn_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'zn_gross_proftit_cntrctr', 'zn_total_purchase_cntrctr_pra', 'zn_total_purchase_cntrctr', 'zn_nm_buyer_pragraph_cntrctr', 'zn_num_buyer_cntrctr', 'zn_total_prchsd_box_cntrctr');
                optionCalculation($('#ps_feature_sell_price_cntrctr').val(), $('#ps_nm_purchased_pr_home_cntrctr').val(), $('#ps_prcnt_home_buyer_cntrctr').val(), 'ps_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'ps_gross_proftit_cntrctr', 'ps_total_purchase_cntrctr_pra', 'ps_total_purchase_cntrctr', 'ps_nm_buyer_pragraph_cntrctr', 'ps_num_buyer_cntrctr', 'ps_total_prchsd_box_cntrctr');
                summ_of_all_last_form();
                $("#option_home_completed").slider({
        tooltip_position: 'bottom',
                precision: 2,
                formatter: function (value) {
                return  "<?php echo get_option('options-label-17-4'); ?> " + value + " <?php echo get_option('options-label-17-5'); ?>";
                }
        });
         $("#ms_feature_sell_price_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-18-4'); ?> " + value + " <?php echo get_option('options-label-18-5'); ?>";
        }
    });
    $("#ms_nm_purchased_pr_home_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-19-4'); ?> " + value + " <?php echo get_option('options-label-19-5'); ?>";
        }
    });
    $("#ms_prcnt_home_buyer_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-20-4'); ?> " + value + " <?php echo get_option('options-label-20-5'); ?>";
        }
    });
    $("#zn_feature_sell_price_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-21-4'); ?> " + value + " <?php echo get_option('options-label-21-5'); ?>";
        }
    }); 
    $("#zn_nm_purchased_pr_home_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-22-4'); ?> " + value + " <?php echo get_option('options-label-22-5'); ?>";
        }
    });
    $("#zn_prcnt_home_buyer_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-23-4'); ?> " + value + " <?php echo get_option('options-label-23-5'); ?>";
        }
    });
    $("#ps_feature_sell_price_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-24-4'); ?> " + value + " <?php echo get_option('options-label-24-5'); ?>";
        }
    });
    $("#ps_nm_purchased_pr_home_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-25-4'); ?> " + value + " <?php echo get_option('options-label-25-5'); ?>";
        }
    });
    $("#ps_prcnt_home_buyer_cntrctr").slider({
        tooltip_position: 'bottom',
        precision: 2,
        formatter: function (value) {
            return  "<?php echo get_option('options-label-26-4'); ?> " + value + " <?php echo get_option('options-label-26-5'); ?>";
        }
    });
        });
    </script>
    <!--- Option form three --->
    <div class="row showstep9" id="option1">
        <div class="large-12 columns" id="builder_frm">
            <div class="entry-content">
                <div class="woocommerce">
                    <div class="row">
                        <div class="xxlarge-6 xlarge-8 large-12 large-centered columns option-form">
                            <div class="large-10 large-centered columns without-sidebar">
                                <!--                                here is the page title-->
                                <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-8-1'); ?></h1>
                            </div>
                            <form id="frmoption3" name="frmoption3" method="post" enctype="multipart/form-data" role="form">
                                <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                    <div class="col-md-10 col-md-offset-1 no-right-padding padding-left-35px">
                                        <p class="top-paragraphp"><?php get_option('headings-label-8-2'); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20 no-right-padding">
                                            <p class="form-paragraph">How much profit can you make with customers now purchasing Master, Zone and Portable switches with every home?</p>                

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <img src="<?php echo plugins_url('../../images/profit-middle-img_03.jpg', __FILE__); ?>" alt="optionImg3" class="img-responsive" />
                                    </div>
                                </div> 
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20 no-right-padding">
                                            <p class="form-paragraph">With traditional wired switches, the PRICE OF OPTIONAL SWITCH UPGRADES is prohibitive, so few customers ask for them.</p>    
                                            <p class="form-paragraph">Eliminating the wired switch legs with GoConex makes your option/upgrade pricing ATTRACTIVE. More customers will say “Yes”.</p>    
                                        </div>
                                    </div>
                                    <hr class="margin-top-80px"/>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-8 padding-top-20 no-right-padding">
                                            <p class="margin-bottom-10px form-paragraph font-size-1-4em">1. How many homes does your company build annually?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-7  no-right-padding">
                                            <?php $label = get_option('estimates-label-57'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>        
                                            <input name="option_home_completed" type="text" class="form-control" id="option_home_completed" placeholder="600" value="600" data-slider-min="<?php echo get_option('options-label-17-1'); ?>" data-slider-max="<?php echo get_option('options-label-17-2'); ?>" data-slider-step="<?php echo get_option('options-label-17-3'); ?>" data-slider-value="600">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding">
                                            <p class="margin-bottom-10px form-paragraph font-size-1-4em">2. Set Your Pricing for Switch Option Upgrades:</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-7  no-right-padding">
                                            <p class="margin-bottom-10px option-heading-p">Master Switch</p>
                                            <?php $label = get_option('estimates-label-58'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>         
                                            <input name="ms_feature_sell_price_cntrctr" type="text" class="form-control" id="ms_feature_sell_price_cntrctr" placeholder="250" value="250" data-slider-min="<?php echo get_option('options-label-17-1'); ?>" data-slider-max="<?php echo get_option('options-label-17-2'); ?>" data-slider-step="<?php echo get_option('options-label-17-3'); ?>" data-slider-value="250">
                                        </div>
                                        <div class="col-md-5">
                                            <img src="<?php echo plugins_url('../../images/options-value-circut_03.jpg', __FILE__); ?>" alt="PairoptionImg" class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding ">
                                            <?php $label = get_option('estimates-label-59'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>        
                                            <input name="ms_nm_purchased_pr_home_cntrctr" type="text" id="ms_nm_purchased_pr_home_cntrctr" placeholder="1.5" value="1.5" class="form-control" data-slider-min="<?php echo get_option('options-label-19-1'); ?> " data-slider-max="<?php echo get_option('options-label-19-2'); ?> " data-slider-step="<?php echo get_option('options-label-19-3'); ?> " data-slider-value="1.5">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding">
                                            <?php $label = get_option('estimates-label-60'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>        
                                            <input name="ms_prcnt_home_buyer_cntrctr" type="text" class="form-control" id="ms_prcnt_home_buyer_cntrctr" placeholder="30%" value="30" data-slider-min="<?php echo get_option('options-label-20-1'); ?>" data-slider-max="<?php echo get_option('options-label-20-2'); ?>" data-slider-step="<?php echo get_option('options-label-20-3'); ?>" data-slider-value="30">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding">
                                            <div class="col-md-4 no-left-padding no-right-padding">
                                                <p class="form-paragraph">Number of buyers </p>
                                                <p class="form-paragraph text-alignment-center" id="ms_nm_buyer_pragraph_cntrctr">180 </p>
                                                <input type="hidden" name="ms_num_buyer_cntrctr" id="ms_num_buyer_cntrctr" />
                                            </div>
                                            <div class="col-md-4 no-left-padding no-right-padding">
                                                <p class="form-paragraph">Number of purchased</p>
                                                <p class="form-paragraph text-alignment-center" id="ms_total_purchase_cntrctr_pra">270</p>
                                                <input type="hidden" name="ms_total_purchase_cntrctr" id="ms_total_purchase_cntrctr" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 padding-top-20 no-left-padding no-right-padding border-box-option">
                                            <p class="form-paragraph paragraph-padding-left-10 display-inline">Annual gross profit increase from </p><p class="form-paragraph paragraph-padding-left-10 display-inline" id="ms_total_prchsd_box_cntrctr"> 270 </p><p class="form-paragraph display-inline"> Master Switches:</p>
                                            <div class="row">
                                                <p  class="padding-left-20px green-color-text font-size-1-3em display-inline" > $ </p> <p  class="green-color-text display-inline no-left-padding" id="ms_box_price_cntrctr">  0 . 00 </p>
                                            </div>
                                            <input type="hidden" name="ms_gross_proftit_cntrctr" id="ms_gross_proftit_cntrctr" />
                                        </div>
                                    </div>
                                    <hr class="margin-top-80px"/>
                                </div> 
                                <div class="col-sm-12 no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-7  no-right-padding">
                                            <p class="margin-bottom-10px option-heading-p yello-grean-color">Zone Switch</p>
                                            <?php $label = get_option('estimates-label-61'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>        
                                            <input name="zn_feature_sell_price_cntrctr" type="text" class="form-control" id="zn_feature_sell_price_cntrctr" placeholder="200.00" value="200" data-slider-min="<?php echo get_option('options-label-21-1'); ?> " data-slider-max="<?php echo get_option('options-label-21-2'); ?> " data-slider-step="<?php echo get_option('options-label-21-3'); ?> " data-slider-value="200">
                                        </div>
                                        <div class="col-md-5">
                                            <img src="<?php echo plugins_url('../../images/option-value-img3_03.jpg', __FILE__); ?>" alt="optionImg" class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding ">
                                            <?php $label = get_option('estimates-label-62'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>        
                                            <input name="zn_nm_purchased_pr_home_cntrctr" type="text" id="zn_nm_purchased_pr_home_cntrctr" placeholder="1.5" value="1.5" class="form-control" data-slider-min="<?php echo get_option('options-label-22-1'); ?> " data-slider-max="<?php echo get_option('options-label-22-2'); ?> " data-slider-step="<?php echo get_option('options-label-22-3'); ?> " data-slider-value="1.5">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding">
                                            <?php $label = get_option('estimates-label-63'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>         
                                            <input name="zn_prcnt_home_buyer_cntrctr" type="text" class="form-control" id="zn_prcnt_home_buyer_cntrctr" placeholder="30%" value="30" data-slider-min="<?php echo get_option('options-label-23-1'); ?> " data-slider-max="<?php echo get_option('options-label-23-2'); ?> " data-slider-step="<?php echo get_option('options-label-23-3'); ?> " data-slider-value="30">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding">
                                            <div class="col-md-4 no-left-padding no-right-padding">
                                                <p class="form-paragraph">Number of buyers </p>
                                                <p class="form-paragraph text-alignment-center" id="zn_nm_buyer_pragraph_cntrctr">180 </p>
                                                <input type="hidden" name="zn_num_buyer_cntrctr" id="zn_num_buyer_cntrctr" />
                                            </div>
                                            <div class="col-md-4 no-left-padding no-right-padding">
                                                <p class="form-paragraph">Number of purchased</p>
                                                <p class="form-paragraph text-alignment-center" id="zn_total_purchase_cntrctr_pra">270</p>
                                                <input type="hidden" name="zn_total_purchase_cntrctr" id="zn_total_purchase_cntrctr" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 padding-top-20 no-left-padding no-right-padding border-box-option">
                                            <p class="form-paragraph paragraph-padding-left-10 display-inline">Annual gross profit increase from  </p><p class="form-paragraph paragraph-padding-left-10 display-inline" id="zn_total_prchsd_box_cntrctr"> 270 </p><p class="form-paragraph display-inline"> Zone Switches:</p>                                           
                                            <div class="row">
                                                <p  class="padding-left-20px green-color-text display-inline font-size-1-3em" > $ </p> <p  class="green-color-text display-inline no-left-padding" id="zn_box_price_cntrctr">  0 . 00 </p>
                                            </div>
                                            <input type="hidden" name="zn_gross_proftit_cntrctr" id="zn_gross_proftit_cntrctr" />
                                        </div>
                                    </div>
                                    <hr class="margin-top-80px"/>
                                </div> 
                                <div class="col-sm-12 no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-7  no-right-padding">
                                            <p class="margin-bottom-10px option-heading-p yello-grean-color">Portable Remote Switch</p>
                                            <?php $label = get_option('estimates-label-64'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>        
                                            <input name="ps_feature_sell_price_cntrctr" type="text" class="form-control" id="ps_feature_sell_price_cntrctr" placeholder="80.00" value="80" data-slider-min="<?php echo get_option('options-label-24-1'); ?> " data-slider-max="<?php echo get_option('options-label-24-2'); ?> " data-slider-step="<?php echo get_option('options-label-24-3'); ?> " data-slider-value="80">
                                        </div>
                                        <div class="col-md-5">
                                            <img src="<?php echo plugins_url('../../images/option-vlue-img4_03.jpg', __FILE__); ?>" alt="optionImg" class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding ">
                                            <?php $label = get_option('estimates-label-65'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p>        
                                            <input name="ps_nm_purchased_pr_home_cntrctr" type="text" id="ps_nm_purchased_pr_home_cntrctr"  placeholder="2.00" value="2.00" class="form-control" data-slider-min="<?php echo get_option('options-label-25-1'); ?>" data-slider-max="<?php echo get_option('options-label-25-2'); ?>" data-slider-step="<?php echo get_option('options-label-25-3'); ?>" data-slider-value="2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding">
                                            <?php $label = get_option('estimates-label-66'); ?> 
                                            <p class="form-paragraph"><?php echo $label; ?></p> 
                                            <input name="ps_prcnt_home_buyer_cntrctr" type="text" class="form-control" id="ps_prcnt_home_buyer_cntrctr" placeholder="65%" value="65" data-slider-min="<?php echo get_option('options-label-26-1'); ?>" data-slider-max="<?php echo get_option('options-label-26-2'); ?>" data-slider-step="<?php echo get_option('options-label-26-3'); ?>" data-slider-value="65">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding">
                                            <div class="col-md-4 no-left-padding no-right-padding">
                                                <p class="form-paragraph">Number of buyers </p>
                                                <p class="form-paragraph text-alignment-center" id="ps_nm_buyer_pragraph_cntrctr">180 </p>
                                                <input type="hidden" name="ps_num_buyer_cntrctr" id="ps_num_buyer_cntrctr" />
                                            </div>
                                            <div class="col-md-4 no-left-padding no-right-padding">
                                                <p class="form-paragraph">Number of purchased</p>
                                                <p class="form-paragraph text-alignment-center" id="ps_total_purchase_cntrctr_pra">270</p>
                                                <input type="hidden" name="ps_total_purchase_cntrctr" id="ps_total_purchase_cntrctr" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 padding-top-20 no-left-padding no-right-padding border-box-option">
                                            <p class="form-paragraph paragraph-padding-left-10 display-inline">Annual gross profit increase from  </p><p class="form-paragraph  paragraph-padding-left-10 display-inline" id="ps_total_prchsd_box_cntrctr"> 270 </p><p class="form-paragraph display-inline"> Portable Switches:</p>
                                            <div class="row">
                                                <p  class="padding-left-20px green-color-text display-inline font-size-1-3em" > $ </p> <p  class="green-color-text display-inline no-left-padding" id="ps_box_price_cntrctr">  0 . 00 </p>
                                            </div>
                                            <input type="hidden" name="ps_gross_proftit_cntrctr" id="ps_gross_proftit_cntrctr" />
                                        </div>
                                    </div>
                                    <hr class="margin-top-80px"/>
                                </div>                                
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                    <div class="col-md-9 col-md-offset-2 border-box-option">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <p class="form-paragraph padding-top-20 paragraph-padding-left-10">Total annual increase in gross profit with option purchases:</p>
                                            </div>

                                            <div class="col-md-5 col-md-offset-1">
                                                <span  class="padding-left-20px green-color-text font-size-1-3em" > $ </span><p  class="padding-left-20px green-color-text font-size-1-3em display-inline no-left-padding" id="sum_all_cntrctr"> 0 . 00</p>                                                    
                                                <input type="hidden" name="sum_ms_zn_ps_cntrctr" id="sum_ms_zn_ps_cntrctr" />
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="col-sm-12 margin-top-40px padding-top-20px">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <div class="row>">
                                            <div class="col-md-5">
    <!--                                            <input type="hidden" name="lastid" id="lastid" value=""/>-->
                                                <!--                                            <button type="button" name="optStep3" id="back" class="cstuoma"> Back </button>-->
                                            </div>
                                            <div class="col-md-5">
                                                <input type="submit" name="btnOptionStepThreeNext" id="btnOptionStepThreeNext" value="Next" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                                <div class="col-sm-12 margin-top-40px padding-top-20px">
                                    <div class="col-sm-12 ">
                                        <div class="progressbar"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 80% completed</p>
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
    <?php
}

function builder_form_process() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'estimate';
    if (isset($_POST['operation']) && $_POST['operation'] == '3rdOptionform') {
        if (isset($_POST['importData'][21]['value']) && $_POST['importData'][21]['value'] != '') {
            $userArr = array('user_id' => get_current_user_id());
            foreach ($_POST['importData'] as $data) {
                $posteddata[$data['name']] = $data['value'];
            }
            $lastid = $posteddata['updateid'];
            array_pop($posteddata);
            $wpdb->update($table_name, $posteddata, array('ID' => $lastid));

            wp_die($lastid);
        } else {
            $userArr = array('user_id' => get_current_user_id());
            foreach ($_POST['importData'] as $data) {
                $posteddata[$data['name']] = $data['value'];
            }
            $addData = array_merge($userArr, $posteddata);            
            $wpdb->insert($table_name, $addData);
            
            wp_die($wpdb->insert_id);
        }
    }
}

add_action('wp_ajax_builder_form_process', 'builder_form_process'); // Call when user logged in
add_action('wp_ajax_nopriv_builder_form_process', 'builder_form_process'); // Call when user in not logged in
?>