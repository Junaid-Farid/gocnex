<div class="row showstep7" id="option1" style="display: none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns option-form">
                        <div class="large-10 large-centered columns without-sidebar">
                            <!--                                here is the page title-->
                            <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-6-1'); ?></h1>
                        </div>
                        <form id="frmoption1" name="frmoption1" method="post" enctype="multipart/form-data" role="form">
                            <div class="row">
                                <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                    <div class="col-md-10 col-md-offset-1 padding-top-20 no-right-padding padding-left-35px">
                                        <p class="top-paragraphp"><?php echo get_option('headings-label-6-2'); ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20 no-right-padding">
                                            <?php echo get_option('content-label-6-1'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <hr/>
                            <div class="row">
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-7 padding-top-20 no-right-padding">
                                            <p class="margin-bottom-10px form-paragraph font-size-1-4em">Set Your Pricing for Switch Option Upgrades:</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-7  no-right-padding">
                                        <div style="display: none">
                                            <input type="hidden" name="es_completed_yr" id="es_completed_yr" value="" style="display: none">
                                        </div>
                                        <p class="margin-bottom-10px option-heading-p">Master Switch</p>
                                        <?php $label = get_option('estimates-label-45'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>  
                                        <input name="ms_paired_sw_cost" type="text" class="form-control" id="ms_paired_sw_cost" placeholder="250" value="250" data-slider-min="<?php echo get_option('options-label-1-1'); ?>" data-slider-max="<?php echo get_option('options-label-1-2'); ?>" data-slider-step="<?php echo get_option('options-label-1-3'); ?>" data-slider-value="250">
                                    </div>
                                    <div class="col-md-5">
                                        <img src="<?php echo get_option('content-label-6-2'); ?>" alt="optionImg" class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding ">
                                        <?php $label = get_option('estimates-label-46'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>  
                                        <input name="ms_nm_purchased_pr_home" type="text" id="ms_nm_purchased_pr_home" value="1.5" placeholder="1.5" value="1.5" class="form-control" data-slider-min="<?php echo get_option('options-label-2-1'); ?>" data-slider-max="<?php echo get_option('options-label-2-2'); ?>" data-slider-step="<?php echo get_option('options-label-2-3'); ?>" data-slider-value="1.5">
                                    </div>


                                </div>
                            </div>
                            <div class="col-sm-12 padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7  padding-top-5_prcnt no-right-padding">
                                        <?php $label = get_option('estimates-label-47'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>  
                                        <input name="ms_prcnt_home_buyer" type="text" class="form-control" id="ms_prcnt_home_buyer" placeholder="30%" value="30" data-slider-min="<?php echo get_option('options-label-3-1'); ?>" data-slider-max="<?php echo get_option('options-label-3-2'); ?>" data-slider-step="<?php echo get_option('options-label-3-3'); ?>" data-slider-value="30">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding">
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of buyers </p>
                                            <p class="form-paragraph text-alignment-center" id="ms_nm_buyer_pragraph">180 </p>
                                            <input type="hidden" name="ms_num_buyer" id="ms_num_buyer" />
                                        </div>
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of purchased</p>
                                            <p class="form-paragraph text-alignment-center" id="ms_total_prchsd">270</p>
                                            <input type="hidden" name="ms_total_purchase" id="ms_total_purchase" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 padding-top-20 padding-bottom-1 padding-left-10 no-right-padding border-box-option">
                                        <p class="form-paragraph paragraph-padding-left-10 display-inline">Annual gross profit increase from </p><p class="form-paragraph display-inline paragraph-padding-left-10" id="ms_total_prchsd_box"> 270 </p> <p class="form-paragraph display-inline"> Master Switches:</p>
<!--                                                <p  class="paragraph-padding-left-10 green-color-text">$234123</p>-->
                                        <div class="row">
                                            <span  class="padding-left-20px green-color-text font-size-1-3em" > $ </span> <p  class="paragraph-padding-left-10 green-color-text display-inline no-left-padding" id="ms_box_price">  0 . 00 </p>
                                        </div>
                                        <input type="hidden" name="ms_gross_proftit" id="ms_gross_proftit" />
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 
                            <div class="col-sm-12 no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-7  no-right-padding">
                                        <p class="margin-bottom-10px option-heading-p yello-grean-color">Zone Switch</p>
                                        <?php $label = get_option('estimates-label-48'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>  
                                        <input name="zn_feature_sell_price" type="text" class="form-control" id="zn_feature_sell_price" placeholder="200" value="200" data-slider-min="<?php echo get_option('options-label-4-1'); ?>" data-slider-max="<?php echo get_option('options-label-4-2'); ?>" data-slider-step="<?php echo get_option('options-label-4-3'); ?>" data-slider-value="200">
                                    </div>
                                    <div class="col-md-5">
                                        <img src="<?php echo get_option('content-label-6-3'); ?>" alt="optionImg" class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding ">
                                        <?php $label = get_option('estimates-label-49'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>  
                                        <input name="zn_nm_purchased_pr_home" type="text" id="zn_nm_purchased_pr_home" placeholder="1.5" value="1.5" class="form-control" data-slider-min="<?php echo get_option('options-label-5-1'); ?>" data-slider-max="<?php echo get_option('options-label-5-2'); ?>" data-slider-step="<?php echo get_option('options-label-5-3'); ?>" data-slider-value="1.5">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-5_prcnt no-right-padding">
                                        <?php $label = get_option('estimates-label-50'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>    
                                        <input name="zn_prcnt_home_buyer" type="text" class="form-control" id="zn_prcnt_home_buyer" placeholder="30%" value="30" data-slider-min="<?php echo get_option('options-label-6-1'); ?>" data-slider-max="<?php echo get_option('options-label-6-2'); ?>" data-slider-step="<?php echo get_option('options-label-6-3'); ?>" data-slider-value="30">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding">
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of buyers </p>
                                            <p class="form-paragraph text-alignment-center" id="zn_nm_buyer_pragraph">180 </p>
                                            <input type="hidden" name="zn_num_buyer" id="zn_num_buyer" />
                                        </div>
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of purchased</p>
                                            <p class="form-paragraph text-alignment-center"  id="zn_total_prchsd">270</p>
                                            <input type="hidden" name="zn_total_purchase" id="zn_total_purchase" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 padding-top-20 padding-bottom-10 padding-left-10 no-right-padding border-box-option">
                                        <div class="row">
                                            <p class="form-paragraph paragraph-padding-left-10 padding-right-5">Annual gross profit increase from </p><p class="form-paragraph display-inline paragraph-padding-left-10" id="zn_total_prchsd_box"> 270 </p> <p class="form-paragraph display-inline"> Zone Switches:</p>
                                        </div>

                                        <div class="row">
                                            <span  class="padding-left-20px green-color-text font-size-1-3em" > $ </span><p  class="paragraph-padding-left-10 green-color-text display-inline no-left-padding" id="zn_box_price">0 . 00 </p>
                                        </div>
                                        <input type="hidden" name="zn_gross_proftit" id="zn_gross_proftit" />
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 
                            <div class="col-sm-12 no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-7  no-right-padding">
                                        <p class="margin-bottom-10px option-heading-p yello-grean-color">Portable Remote Switch</p>
                                        <?php $label = get_option('estimates-label-51'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>  
                                        <input name="ps_feature_sell_price" type="text" class="form-control" id="ps_feature_sell_price" placeholder="80" value="80" data-slider-min="<?php echo get_option('options-label-7-1'); ?>" data-slider-max="<?php echo get_option('options-label-7-2'); ?>" data-slider-step="<?php echo get_option('options-label-7-3'); ?>" data-slider-value="80">
                                    </div>
                                    <div class="col-md-5">
                                        <img src="<?php echo get_option('content-label-6-4'); ?>" alt="optionImg" class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12  padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding ">
                                        <?php $label = get_option('estimates-label-52'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>   
                                        <input name="ps_nm_purchased_pr_home" type="text" id="ps_nm_purchased_pr_home" placeholder="2.00" value="2.00" class="form-control" data-slider-min="<?php echo get_option('options-label-8-1'); ?>" data-slider-max="<?php echo get_option('options-label-8-2'); ?>" data-slider-step="<?php echo get_option('options-label-8-3'); ?>" data-slider-value="2.00">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-5_prcnt no-right-padding">
                                        <?php $label = get_option('estimates-label-53'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>   
                                        <input name="ps_prcnt_home_buyer" type="text" class="form-control" id="ps_prcnt_home_buyer" placeholder="65%" value="30" data-slider-min="<?php echo get_option('options-label-9-1'); ?>" data-slider-max="<?php echo get_option('options-label-9-2'); ?>" data-slider-step="<?php echo get_option('options-label-9-3'); ?>" data-slider-value="65">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding">
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of buyers </p>
                                            <p class="form-paragraph text-alignment-center" id="ps_nm_buyer_pragraph">180 </p>
                                            <input type="hidden" name="ps_num_buyer" id="ps_num_buyer" />
                                        </div>
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of purchased</p>
                                            <p class="form-paragraph text-alignment-center"  id="ps_total_prchsd">270</p>
                                            <input type="hidden" name="ps_total_purchase" id="ps_total_purchase" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 padding-top-20 padding-bottom-10  no-left-padding no-right-padding border-box-option">
                                        <p class="form-paragraph paragraph-padding-left-10">Annual gross profit increase from </p><p class="form-paragraph display-inline paragraph-padding-left-10" id="ps_total_prchsd_box"> 270 </p> <p class="form-paragraph display-inline"> Portable Switches:</p>
                                        <div class="row">
                                            <span  class="padding-left-20px green-color-text font-size-1-3em" > $ </span><p  class="paragraph-padding-left-10 green-color-text display-inline no-left-padding" id="ps_box_price">  0 . 00 </p>
                                            <input type="hidden" name="ps_gross_proftit" id="ps_gross_proftit" />
                                        </div>
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div>                                
                            <div class="col-sm-12 margin-top-40px padding-top-20pxno-right-padding no-left-padding paddng-bottom-20">
                                <div class="col-md-9 col-md-offset-2  padding-bottom-10 border-box-option">
                                    <div class="row">
                                        <div class="col-md-10  padding-bottom-10">
                                            <p class="form-paragraph padding-top-20 paragraph-padding-left-10">Total annual increase in gross profit with option purchases:</p>
                                        </div>

                                        <div class="col-md-6 col-md-offset-1">
                                            <span  class="padding-left-20px green-color-text font-size-1-3em" > $ </span><p  class="padding-left-20px green-color-text font-size-1-3em display-inline no-left-padding" id="sum_all"> 0 . 00</p>                                                    
                                            <input type="hidden" name="sum_ms_zn_ps" id="sum_ms_zn_ps" />
                                        </div>
                                    </div>
                                </div>
                            </div>                                 
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="row>">
                                        <div class="col-md-5">
                                            <input type="hidden" name="lastid" id="lastid" class="optionstep1" value=""/>
                                            <button type="button" name="btnOptionStepOneBack" id="back" class="cstuoma"> Back </button>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="submit" name="btnOptionStepOneNext" id="btnOptionStepOneNext" value="Next" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-12 ">
                                    <div id="progressbar" class="progressbar"></div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 60% completed</p>
                                </div>
                                <div style="clear: both"></div>
                            </div>                                
                            <div class="loader_modal"><!-- Place at bottom of page --></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
<!--- end of Option form one---> 
<script>
    jQuery(document).ready(function ($) {
        $('#ms_paired_sw_cost').slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-1-4'); ?> " + value + " <?php echo get_option('options-label-1-5'); ?>";
            }
        });
        $("#ms_nm_purchased_pr_home").slider({
            tooltip_position: 'bottom',
            precision: 1,
            formatter: function (value) {
                return  "<?php echo get_option('options-label-2-4'); ?> " + value + " <?php echo get_option('options-label-2-5'); ?>";
            }
        });
        $("#ms_prcnt_home_buyer").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-3-4'); ?> " + value + " <?php echo get_option('options-label-3-5'); ?>";
            }
        });
        $("#zn_feature_sell_price").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-4-4'); ?> " + value + " <?php echo get_option('options-label-4-5'); ?>";
            }
        });
        $("#zn_nm_purchased_pr_home").slider({
            tooltip_position: 'bottom',
            precision: 1,
            formatter: function (value) {
                return  "<?php echo get_option('options-label-5-4'); ?> " + value + " <?php echo get_option('options-label-5-5'); ?>";
            }

        });
        $("#zn_prcnt_home_buyer").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-6-4'); ?> " + value + " <?php echo get_option('options-label-6-5'); ?>";
            }
        });

        $("#ps_feature_sell_price").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-7-4'); ?> " + value + " <?php echo get_option('options-label-7-5'); ?>";
            }
        });
        $("#ps_nm_purchased_pr_home").slider({
            tooltip_position: 'bottom',
            precision: 1,
            formatter: function (value) {
                return  "<?php echo get_option('options-label-8-4'); ?> " + value + " <?php echo get_option('options-label-8-5'); ?>";
            }
        });
        $("#ps_prcnt_home_buyer").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-9-4'); ?> " + value + " <?php echo get_option('options-label-9-5'); ?>";
            }
        });
    });
</script>