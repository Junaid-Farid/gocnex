<div class="row showstep6" style="display: none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns option-form">
                        <div class="large-10 large-centered columns without-sidebar">
                            <!--                                here is the page title-->
                            <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-5-1'); ?></h1>
                        </div>
                        <form id="frmEstimatorStep6" name="frmEstimatorStep6" method="post" enctype="multipart/form-data" role="form">
                            <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                <div class="col-md-5 col-md-offset-1 no-left-padding padding-top-20">
                                    <p class="top-paragraphp"><?php echo get_option('headings-label-5-2'); ?></p>
                                </div>
                                <div class="col-md-5 margin-top-negitive-50px">
                                    <img src="<?php echo get_option('headings-label-5-3'); ?>"  alt="ImgHaedStep3"/>
                                </div>
                            </div>
                            <?php if(get_option('content-label-5-2')!=''){?>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <?php echo get_option('content-label-5-1'); ?>
                            </div>
                            <?php } ?>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20">
                                        <?php $label = explode('/', get_option('estimates-label-31')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="nm_crews_roughin_qnty" type="text" data-slider-min="1" id="nm_crews_roughin_qnty"  value="10" data-slider-step="<?php echo get_option('values-label-1-3'); ?>" data-slider-value="10" data-slider-min="<?php echo get_option('values-label-1-1'); ?>" data-slider-max="<?php echo get_option('values-label-1-2'); ?>">                                        
                                    </div>
                                    <div class="col-md-6 padding-top-20 no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-32')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="nm_men_rough_in" type="text" id="nm_men_rough_in" placeholder="Quanity 2" value=" 2" data-slider-min="<?php echo get_option('values-label-2-1'); ?>" data-slider-max="<?php echo get_option('values-label-2-2'); ?>" data-slider-step="<?php echo get_option('values-label-2-3'); ?>" data-slider-value="2" value="2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20">
                                        <?php $label = explode('/', get_option('estimates-label-33')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="cmbnd_hrly_lbr_rate_crews_roughin" type="text" id="cmbnd_hrly_lbr_rate_crews_roughin" placeholder="Quanity 2" value="70" data-slider-min="<?php echo get_option('values-label-3-1'); ?>" data-slider-max="<?php echo get_option('values-label-3-2'); ?>" data-slider-step="<?php echo get_option('values-label-3-3'); ?>" data-slider-value="70">
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 
                            <?php
                            if(get_option('content-label-5-2')!=''){?>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <?php echo get_option('content-label-5-2'); ?>
                            </div>
                            <?php } ?>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20">
                                        <?php $label = explode('/', get_option('estimates-label-34')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="nm_eight_hr_for_roughin" type="text" id="nm_eight_hr_for_roughin"  value="1.2 " data-slider-step="<?php echo get_option('values-label-4-3'); ?>" data-slider-value="1.2" data-slider-min="<?php echo get_option('values-label-4-1'); ?>" data-slider-max="<?php echo get_option('values-label-4-2'); ?>">                                        
                                    </div>
                                    <div class="col-md-6 padding-top-20 no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-35')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="mnt_pr_home_seal_switch_vpr_brr" type="text" id="mnt_pr_home_seal_switch_vpr_brr" placeholder="Quanity 60" value="7" data-slider-min="<?php echo get_option('values-label-5-1'); ?>" data-slider-max="<?php echo get_option('values-label-5-2'); ?>" data-slider-step="<?php echo get_option('values-label-5-3'); ?>" data-slider-value="7">

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-5 padding-top-20 no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-36')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="nm_home_cmpltd_pr_yr" type="text" id="nm_home_cmpltd_pr_yr_1" placeholder="Quanity 600" value="650" data-slider-min="<?php echo get_option('values-label-6-1'); ?>" data-slider-max="<?php echo get_option('values-label-6-2'); ?>" data-slider-step="<?php echo get_option('values-label-6-3'); ?>" data-slider-value="650">                                      
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20 no-right-padding">
                                        <p class="form-paragraph">Does your builder require<br> PRE-FINAL with TEMPORARY LIGHTING?</p>
                                    </div>
                                    <div class="col-md-3 padding-top-20 no-right-padding">
                                        <div class="row">
                                            <div class="check1"><input type="radio" id="checkbox-2-1" name="check_yes" class="regular-checkbox big-checkbox" /><label for="checkbox-2-1"></label>Yes</div>
                                            <div class="check1"><input checked="checked" type="radio" id="checkbox-2-2"  name="check_yes" class="regular-checkbox big-checkbox" /><label for="checkbox-2-2"></label>No</div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div id="Doesyourbuilder" class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding padding-bottom-100px">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20 no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-37')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="prcntge_without_switch" type="text" id="prcntge_without_switch" placeholder="Quanity 60" value="15" data-slider-min="<?php echo get_option('values-label-7-1'); ?>" data-slider-max="<?php echo get_option('values-label-7-2'); ?>" data-slider-step="<?php echo get_option('values-label-7-3'); ?>" data-slider-value="15">
                                    </div>
                                    <div class="col-md-6 padding-top-20 no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-38')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="trgt_gross_prft_dlr" type="text" class="form-control" id="trgt_gross_prft_dlr" placeholder="Quanity 30%" value="7" data-slider-min="<?php echo get_option('values-label-8-1'); ?>" data-slider-max="<?php echo get_option('values-label-8-2'); ?>" data-slider-step="<?php echo get_option('values-label-8-3'); ?>" data-slider-value="7">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="row>">
                                        <div class="col-md-5 no-right-padding">
                                            <input type="hidden" name="lastid" id="lastid" value=""/>
                                            <button type="button" name="btnFiveStepBack" id="back" class="cstuoma"> Back </button>
                                        </div>
                                        <div class="col-md-5">                                            
                                            <input type="submit" name="btnFiveStepNext" id="btnFiveStepNext" value="Next" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-12 ">
                                    <div id="progressbar" class="progressbar"></div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 50% completed</p>
                                </div>
                            </div>
                            <div class="loader_modal"><!-- Place at bottom of page --></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function ($) {
        $("#nm_crews_roughin_qnty").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('values-label-1-4'); ?> " + value + " <?php echo get_option('values-label-1-5'); ?>";
            }
        });
        $("#nm_men_rough_in").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('values-label-2-4'); ?> " + value + " <?php echo get_option('values-label-2-5'); ?>";
            }
        });
        $("#cmbnd_hrly_lbr_rate_crews_roughin").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('values-label-3-4'); ?> " + value + " <?php echo get_option('values-label-3-5'); ?>";
            }
        });
        $("#nm_eight_hr_for_roughin").slider({
            tooltip_position: 'bottom',
            precision: 2,
            formatter: function (value) {
                return  "<?php echo get_option('values-label-4-4'); ?> " + value + " <?php echo get_option('values-label-4-5'); ?>";
            }
        });
        $("#mnt_pr_home_seal_switch_vpr_brr").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('values-label-5-4'); ?> " + value + " <?php echo get_option('values-label-5-5'); ?>";
            }
        });
        $("#nm_home_cmpltd_pr_yr_1").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('values-label-6-4'); ?> " + value + " <?php echo get_option('values-label-6-5'); ?>";
            }
        });
        $("#prcntge_without_switch").slider({
            tooltip_position: 'bottom',
            precision: 2,
            formatter: function (value) {
                return  "<?php echo get_option('values-label-7-4'); ?> " + value + " <?php echo get_option('values-label-7-5'); ?>";
            }
        });
        $("#trgt_gross_prft_dlr").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('values-label-8-4'); ?> " + value + " <?php echo get_option('values-label-8-5'); ?>";
            }

        });
    });

</script>