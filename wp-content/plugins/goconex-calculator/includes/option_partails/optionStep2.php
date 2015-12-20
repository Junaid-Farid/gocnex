<!--- Option form two --->
<div class="row showstep8" id="option1" style="display:none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns option-form">
                        <div class="large-10 large-centered columns without-sidebar">
                            <!--                                here is the page title-->
                            <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-7-1'); ?></h1>
                        </div>
                        <form id="frmoption2" name="frmoption2" method="post" enctype="multipart/form-data" role="form">
                            <div class="col-md-12 border-solid-1px height-120px margin-top-40px">
                                <div class="col-md-6 col-md-offset-3 no-left-padding ">
                                    <p class="top-paragraphp"><?php echo get_option('headings-label-7-2'); ?></p>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding">
                                        <p class="form-paragraph margin-bottom-10px font-size-1-3em">What margin will the Home Builder take?</p>
                                        <p class="margin-bottom-10px option-heading-p">Master Switch</p>
                                        <?php $label = get_option('estimates-label-54'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>                                             
                                        <input name="ms_build_prft_mrgn_cntrctr_price" type="text" class="form-control" id="ms_build_prft_mrgn_cntrctr_price" value="100" data-slider-min="<?php echo get_option('options-label-10-1'); ?>" data-slider-max="<?php echo get_option('options-label-10-2'); ?>" data-slider-step="<?php echo get_option('options-label-10-3'); ?>" data-slider-value="100">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding">
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of buyers </p>
                                            <p class="form-paragraph text-alignment-center" id="ms_builder_nm_buyer">180 </p>
                                        </div>
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of purchased</p>
                                            <p class="form-paragraph display-inline text-alignment-center" id="ms_builder_total_prchsed"> 0 .00</p>
                                            <input type="hidden" name="ms_builder_total_prchased" id="ms_builder_total_prchased" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 padding-top-20 padding-bottom-10 no-left-padding no-right-padding border-box-option">
                                        <p class="form-paragraph paragraph-padding-left-10">Builder’s profit from Master Switches:</p>
                                        <span  class="padding-left-20px green-color-text font-size-1-3em" >$</span><p  class="display-inline green-color-text" id="ms_builder_prft"> 0. 00 </p>                                        
                                        <input type="hidden" name="ms_builder_profit" id="ms_builder_profit" />
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 


                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding">
                                        <p class="margin-bottom-10px option-heading-p yello-color">Zone Switch</p>
                                        <?php $label = get_option('estimates-label-55'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>                                               
                                        <input name="zn_build_prft_mrgn_cntrctr_price" type="text" class="form-control" id="zn_build_prft_mrgn_cntrctr_price" value="100" data-slider-min="<?php echo get_option('options-label-11-1'); ?>" data-slider-max="<?php echo get_option('options-label-11-2'); ?>" data-slider-step="<?php echo get_option('options-label-11-3'); ?>" data-slider-value="100">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding">
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of buyers </p>
                                            <p class="form-paragraph text-alignment-center" id="zn_builder_nm_buyer">180 </p>
                                        </div>
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of purchased</p>
                                            <p class="form-paragraph text-alignment-center" id="zn_builder_total_prchsed"> 0. 00</p>
                                            <input type="hidden" name="zn_builder_total_prchased" id="zn_builder_total_prchased" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 padding-top-20 padding-bottom-10 no-left-padding no-right-padding border-box-option">
                                        <p class="form-paragraph paragraph-padding-left-10">Builder’s profit from Zone Switches:</p>
                                        <span  class="padding-left-20px green-color-text font-size-1-3em" >$</span><p  class=" display-inline green-color-text" id="zn_builder_prft"> 0. 00</p>
                                        <input type="hidden" name="zn_builder_profit" id="zn_builder_profit" />
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 


                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-8 padding-top-20 no-right-padding">
                                        <p class="margin-bottom-10px option-heading-p yello-grean-color">Portable Remote Switch</p>
                                        <?php $label = get_option('estimates-label-56'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>                                              
                                        <input name="ps_build_prft_mrgn_cntrctr_price" type="text" class="form-control" id="ps_build_prft_mrgn_cntrctr_price" value="100" data-slider-min="<?php echo get_option('options-label-12-1'); ?>" data-slider-max="<?php echo get_option('options-label-12-2'); ?>" data-slider-step="<?php echo get_option('options-label-12-3'); ?>" data-slider-value="50"> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="row">
                                    <div class="col-md-7 padding-top-20 no-right-padding">
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of buyers </p>
                                            <p class="form-paragraph text-alignment-center" id="ps_builder_nm_buyer">180 </p>
                                        </div>
                                        <div class="col-md-4 no-left-padding no-right-padding">
                                            <p class="form-paragraph">Number of purchased</p>
                                            <p class="form-paragraph text-alignment-center" id="ps_builder_total_prchsed"></p>
                                            <input type="hidden" name="ps_builder_total_prchased" id="ps_builder_total_prchased" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 padding-top-20 padding-bottom-10 no-left-padding no-right-padding border-box-option">
                                        <p class="form-paragraph paragraph-padding-left-10">Builder’s profit from Portable Switches:</p>
                                        <span  class="padding-left-20px green-color-text font-size-1-3em" >$</span><p  class="green-color-text display-inline" id="ps_builder_prft"> 0. 00</p>
                                        <input type="hidden" name="ps_builder_profit" id="ps_builder_profit" />
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding paddng-bottom-20">
                                <div class="col-md-9 col-md-offset-2 border-box-option  padding-bottom-10">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <p class="form-paragraph padding-top-20 paragraph-padding-left-10">Builder’s total annual gross profit with Value Options:</p>
                                        </div>

                                        <div class="col-md-5 col-md-offset-1">
                                            <span  class="padding-left-20px green-color-text font-size-1-3em" >$</span><p  class="display-inline green-color-text font-size-1-3em" id="sum_ms_zn_ps_builder_prft"> 0. 00</p>
                                            <input type="hidden" name="sum_ms_zn_ps_builder_proft" id="sum_ms_zn_ps_builder_proft" />
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="row>">
                                        <div class="col-md-5">
                                            <input type="hidden" name="lastid" id="lastid" value=""/>
                                            <button type="button" name="optStep2" id="back" class="cstuoma"> Back </button>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="submit" name="btnOptionStepTwoNext" id="btnOptionStepTwoNext" value="Next" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="loader_modal"><!-- Place at bottom of page --></div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-12 ">
                                    <div id="progressbar" class="progressbar"></div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 70% completed</p>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- end of Option form two--->
<script>
    jQuery(document).ready(function ($) {
        $("#ms_build_prft_mrgn_cntrctr_price").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-10-4'); ?> " + value + " <?php echo get_option('options-label-10-5'); ?>";
            }
        });
        $("#zn_build_prft_mrgn_cntrctr_price").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-11-4'); ?> " + value + " <?php echo get_option('options-label-11-5'); ?>";
            }
        });
        $("#ps_build_prft_mrgn_cntrctr_price").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-12-4'); ?> " + value + " <?php echo get_option('options-label-12-5'); ?>";
            }
        });

    });
</script>