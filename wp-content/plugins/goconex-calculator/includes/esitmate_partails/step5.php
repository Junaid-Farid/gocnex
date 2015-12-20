<div class="row showstep5" style="display: none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns option-form">
                        <form id="frmEstimatorStep5" name="frmEstimatorStep5" method="post" enctype="multipart/form-data" role="form">
                            <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                <div class="col-md-5 col-md-offset-1 no-left-padding padding-top-20">
                                    <p class="top-paragraphp">Time</p>
                                </div>
                                <div class="col-md-5 margin-nvg-top-30">
                                    <img src="<?php echo plugins_url('../../images/time-header-img_03.jpg', __FILE__); ?>"  alt="ImgHaedStep3"/>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20">
                                        <?php $label = explode('/', get_option('estimates-label-31')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="nm_eight_hr_for_roughin" type="text" id="old-nm_eight_hr_for_roughin"  value="1.2 " data-slider-step="<?php echo get_option('values-label-1-3');?>" data-slider-value="1.2" data-slider-min="<?php echo get_option('values-label-1-1');?>" data-slider-max="<?php echo get_option('values-label-1-2');?>">                                        
                                    </div>
                                    <div class="col-md-6 padding-top-20 no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-32')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="prcntge_without_switch" type="text" id="old-prcntge_without_switch" placeholder="Quanity 60" value="15" data-slider-min="<?php echo get_option('values-label-2-1');?>" data-slider-max="<?php echo get_option('values-label-2-2');?>" data-slider-step="<?php echo get_option('values-label-3-3');?>" data-slider-value="15">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20">
                                        <?php $label = explode('/', get_option('estimates-label-33')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="mnt_pr_home_seal_switch_vpr_brr" type="text" id="old-mnt_pr_home_seal_switch_vpr_brr" placeholder="Quanity 60" value="60" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="60">
                                        
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20">
                                        <?php $label = explode('/', get_option('estimates-label-34')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="mnt_repair_dmg_switch_box" type="text" class="form-control" id="old-mnt_repair_dmg_switch_box" placeholder="Quanity 60" value="60" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="60">
                                    </div>
                                    <div class="col-md-6 padding-top-20 no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-35')); ?> 
                                        <p class="form-paragraph"><?php echo $label[0]; ?></p>
                                        <input name="nm_eight_days_roughin" type="text" class="form-control" id="old-nm_eight_days_roughin" placeholder="Quanity 30%" value=" 1.2" data-slider-step="0.1" data-slider-value="1.2" data-slider-min="0.5" data-slider-max="5">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-6 padding-top-20 no-right-padding">
                                        <?php $label = explode('/', get_option('estimates-label-36')); ?> 
                                        <p class="form-paragraph"> <?php echo $label[0]; ?></p>
                                        <input name="prcntg_eliminating_sw_con_final" type="text" class="form-control" id="old-prcntg_eliminating_sw_con_final" placeholder="Quanity 10%" value="10 " data-slider-step="1" data-slider-value="10" data-slider-min="1" data-slider-max="100">
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
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 40% completed</p>
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