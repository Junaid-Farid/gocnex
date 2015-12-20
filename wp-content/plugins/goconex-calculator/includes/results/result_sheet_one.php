<!--- Option form One --->
<div class="row showstep10" id="result1" style="display: none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns option-form">
                        <div class="large-10 large-centered columns without-sidebar">
                            <!--                                here is the page title-->
                            <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-9-1'); ?></h1>
                        </div>
                        <form id="frmResultOne" name="frmResultOne" method="post" enctype="multipart/form-data" role="form">
                            <div class="col-md-12 border-solid-1px height-120px margin-top-40px no-left-padding" id="top_page_position">
                                <div class="col-md-7 col-md-offset-3 no-left-padding">
                                    <p class="top-paragraphp"><?php echo get_option('headings-label-9-2'); ?></p>
                                </div>
                            </div>
                            <div id="result_detail">
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20">
                                            <input type="hidden" name="tr_mtrial_cst_pr_instltion" id="tr_mtrial_cst_pr_instltion" />
                                            <input type="hidden" name="tr_mtrial_cst_pr_switch" id="tr_mtrial_cst_pr_switch" />
                                            <input type="hidden" name="tr_lbr_cst_pr_installtion" id="tr_lbr_cst_pr_installtion" />
                                            <input type="hidden" name="tr_lbr_cst_pr_sw" id="tr_lbr_cst_pr_sw" />
                                            <input type="hidden" name="tr_matrial_and_lbr_cst" id="tr_matrial_and_lbr_cst" />
                                            <div class="col-md-3 padding-right-30 no-left-padding">
                                                <p class="form-paragraph  "> Number of men per rough-in crew </p>                                            
                                                <p class="form-paragraph padding-left-15" id="nm_mn_crew_roughin_pragraph">   </p>                                            
                                            </div>
                                            <div class="col-md-1 padding-top-20 no-left-padding">
                                                <p class="form-paragraph"> X </p>                                            
                                            </div>
                                            <div class="col-md-3 padding-left-30 no-left-padding">
                                                <p class="form-paragraph">Number of 8-hour days for crew to do rough-in</p>    
                                                <p class="form-paragraph padding-left-15" id="nm_eight_days_roughin_pragraph">   </p>  
                                            </div>
                                            <div class="col-md-1 no-right-padding">
                                                <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                            </div>
                                            <div class="col-md-3 col-md-offset-1 no-right-padding">
                                                <p class="form-paragraph display-inline traditional_wired_hrs_pragraph">  </p> <p class="form-paragraph display-inline"> hours per traditional wired rough-in</p>     
                                                <input type="hidden" id="roughgin_lbr_pr_home" name="roughgin_lbr_pr_home" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20">
                                            <div class="col-md-3 padding-right-30 no-left-padding">
                                                <p class="form-paragraph "> Number of switches per installation </p>                                            
                                                <p class="form-paragraph padding-left-15" id="total_switches_in_home_para">   </p>  
                                                <input type="hidden" id="total_nm_sw_in_home" name="total_nm_sw_in_home" />                                          
                                            </div>
                                            <div class="col-md-1 padding-top-20 no-left-padding">
                                                <p class="form-paragraph"> X </p>                                            
                                            </div>
                                            <div class="col-md-3 no-left-padding">
                                                <p class="form-paragraph no-left-padding"> Minutes to rough-in one switch </p>    
                                                <p class="form-paragraph padding-left-15" id="mnt_roughin_one_sw_1">   </p> 
                                            </div>
                                            <div class="col-md-1">
                                                <p class="form-paragraph display-inline font-size-1-8 pull-right no-right-padding">=</p>                                            
                                            </div>
                                            <div class="col-md-3 col-md-offset-1 no-right-padding no-right-padding">
                                                <p class="form-paragraph display-inline hours_saved_pr_home_installation">   </p><p class="form-paragraph display-inline"> hours saved per home/unit/installation </p>    
                                                <input type="hidden" name="hour_saved_pr_home" id="hour_saved_pr_home"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20">
                                            <div class="col-md-3 padding-right-30 no-left-padding">
                                                <p class="form-paragraph display-inline "> Hours saved from switch rough-in </p>                                            
                                                <p class="form-paragraph padding-left-15 hours_saved_pr_home_installation">  </p>                                            
                                            </div>
                                            <div class="col-md-1 padding-top-20 no-left-padding">
                                                <p class="form-paragraph"> X </p>                                            
                                            </div>
                                            <div class="col-md-3 padding-left-30 no-left-padding">
                                                <p class="form-paragraph"> Homes/Units per year</p>    
                                                <p class="form-paragraph padding-left-15 num_completed_pr_yr">   </p>  
                                            </div>
                                            <div class="col-md-1 no-right-padding">
                                                <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                            </div>
                                            <div class="col-md-3 col-md-offset-1 no-right-padding">
                                                <p class="form-paragraph display-inline " id="hours_saved_annually_1"> </p><p class="form-paragraph display-inline"> hours saved annually </p> 
                                                <input type="hidden" name="annual_hrs_svd_exsting_roughin" id="annual_hrs_svd_exsting_roughin" />
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding padding-left-10">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20 no-left-padding no-right-padding">
                                        <div class="col-md-3 padding-right-30 no-left-padding">
                                            <p class="form-paragraph  "> Hours saved from efficiency </p>                                            
                                            <p class="form-paragraph padding-left-15 " id="hours_saved_annually_2">    </p>                                            
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> / </p>                                            
                                        </div>
                                        <div class="col-md-3 padding-left-30 no-left-padding">
                                            <p class="form-paragraph"> Hours per GoConex rough-in </p>    
                                            <p class="form-paragraph padding-left-15" id="hour_saved_faster_rough_in_gc_1">   </p> 
                                            <input type="hidden" name="roughin_hr_svd_pr_home_no_leg" id="roughin_hr_svd_pr_home_no_leg" /> 
                                        </div>
                                        <div class="col-md-1 no-left-padding no-right-padding">
                                            <p class="form-paragraph display-inline font-size-1-8 ">=</p>                                            
                                        </div>                                            
                                        <div class="col-md-4 padding-top-20 no-left-padding no-right-padding border-box-option padding-left-10 padding-bottom-15">
                                            <p class="form-paragraph display-inline">Possible additional rough-ins done per year</p>
                                            <p  class="paragraph-padding-left-10 green-color-text display-inline" id="possible_additional_roughin_pr_yr_3">  </p> <p  class="green-color-text display-inline">  more installations </p>
                                            <input type="hidden" name="total_pssble_added_roughin_pr_anm" id="total_pssble_added_roughin_pr_anm" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding padding-left-10">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20 no-left-padding no-right-padding">
                                        <div class="col-sm-4 col-sm-offset-4 no-left-padding no-right-padding text-center">
                                            <div class="row">
                                                <p id="toggle" class="show_hide">Show Calculation Detail</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20 no-right-padding">
                                        <p class="form-paragraph light-red-color-text font-size-1-4em ">"OPTIMIZE" STRATEGY</p>
                                        <p class="margin-bottom-10px form-paragraph font-size-1-2rem display-inline text-center">Optimize Staff with </p> <p class="display-inline form-paragraph light-red-color-text font-size-1-2rem" id="prcnt_time_saved_1"> 15 </p><p class="font-size-1-2rem display-inline form-paragraph light-red-color-text">% efficiency gain</p>
                                        <input type="hidden" name="efficiency_gain" id="efficiency_gain" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 no-right-padding no-left-padding padding-top-20px">
                                <div class="row">
                                    <div class="col-md-7  no-right-padding padding-top-20">
                                        <?php $label = get_option('estimates-label-68'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>
                                        <input type="text" name="lbr_rate_journyman"  class="form-control display-none" id="lbr_rate_journyman" placeholder="250" value="250" data-slider-min="<?php echo get_option('options-label-14-1'); ?>" data-slider-max="<?php echo get_option('options-label-14-2'); ?>" data-slider-step="<?php echo get_option('options-label-14-3'); ?>" data-slider-value="250">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20">
                                        <div class="col-md-3 padding-right-30 no-left-padding">
                                            <p class="form-paragraph  display-inline"> Annual hours saved with </p><p class="display-inline form-paragraph" id="prcnt_time_saved_2"> 15</p><p class="display-inline form-paragraph" >% faster rough-in </p>                                            
                                            <p class="form-paragraph padding-left-15 " id="hours_saved_annually_3">   </p>                                            
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> / </p>                                            
                                        </div>
                                        <div class="col-md-3 padding-left-30 no-left-padding">
                                            <p class="form-paragraph"> Available man hours per year</p>    
                                            <p class="form-paragraph padding-left-15 " id="annual_man_hours">   </p> 
                                            <input type="hidden" id="gc_annual_man_hrs" name="gc_annual_man_hrs" />
                                        </div>
                                        <div class="col-md-1 no-right-padding">
                                            <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                        </div>
                                        <div class="col-md-3 col-md-offset-1 no-right-padding">
                                            <p class="form-paragraph"> Possible staff savings </p>    
                                            <p class="form-paragraph " id="possible_staff_saving_1">  </p>  
                                            <input type="hidden" name="staff_svng_hr_svd_mn_avl_pr_hr" id="staff_svng_hr_svd_mn_avl_pr_hr" />  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20 no-left-padding no-right-padding">
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph display-inline"> Annual wage ( </p> <p class="form-paragraph display-inline" id="annual_man_hours_1"> 1952 </p> <p class="form-paragraph display-inline">hours * $</p> <p class="form-paragraph display-inline" id="lbr_rate_journyman_1">  </p>) </p>                                            
                                            <p class="form-paragraph padding-left-15 " id="annual_wages">   </p> 
                                            <input type="hidden" name="anuual_wages_hrs" id="anuual_wages_hrs" />
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> X </p>                                            
                                        </div>
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph"> Savings possible with faster rough-in: </p>    
                                            <p class="form-paragraph padding-left-15 " id="possible_staff_saving_2">    </p>  
                                        </div>
                                        <div class="col-md-1 no-left-padding no-right-padding">
                                            <p class="form-paragraph display-inline font-size-1-8 ">=</p>                                            
                                        </div>                                            
                                        <div class="col-md-4 padding-top-20 padding-bottom-15 padding-left-10 no-right-padding border-box-option">
                                            <p class="form-paragraph paragraph-padding-left-10">Annual staff labor saving:</p>
                                            <p  class="paragraph-padding-left-10 display-inline green-color-text">  $ </p><p  class="green-color-text display-inline " id="last_annual_saving">   </p>
                                            <input type="hidden" name="annual_saving" id="annual_saving" />
                                        </div>
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div> 

                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20 no-right-padding">
                                        <p class="form-paragraph light-green-color-text font-size-1-4em ">"GROW" STRATEGY</p>
                                        <p class="margin-bottom-10px form-paragraph font-size-1-2rem text-center display-inline">Expand your business with </p><p class=" form-paragraph option-heading-p display-inline green-color-text" id="possible_additional_roughin_pr_yr_4"> 106 </p><p class="green-color-text form-paragraph option-heading-p display-inline"> more installations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 no-right-padding no-left-padding padding-top-20px">
                                <div class="row">
                                    <div class="col-md-7  no-right-padding padding-top-20">
                                        <?php $label = get_option('estimates-label-67'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>
                                        <input  type="text" name="estimate_trgt_grs_prft" class="form-control  display-none" id="estimate_trgt_grs_prft_1" placeholder="1100" value="1100" data-slider-min="<?php echo get_option('options-label-13-1'); ?>" data-slider-max="<?php echo get_option('options-label-13-2'); ?>" data-slider-step="<?php echo get_option('options-label-13-3'); ?>" data-slider-value="1100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20">
                                        <div class="col-md-3 padding-right-30 no-left-padding">
                                            <p class="form-paragraph  "> Target gross profit per Home/Unit </p>                                            
                                            <p class="form-paragraph padding-left-15 " id="targt_gross_proft_1">   </p>                                            
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> X </p>                                            
                                        </div>
                                        <div class="col-md-3 padding-left-30 no-left-padding">
                                            <p class="form-paragraph"> Additional Homes/Units per year</p>    
                                            <p class="form-paragraph padding-left-15" id="possible_additional_roughin_pr_yr_1">   </p>  
                                        </div>
                                        <div class="col-md-1 no-right-padding">
                                            <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                        </div>
                                        <div class="col-md-3 col-md-offset-1 no-right-padding">
                                            <p class="form-paragraph"> Profit increase from additional homes/units </p>    
                                            <p class="form-paragraph " id="profit_increase_1">   </p>  
                                            <input type="hidden" name="profit_increase_additional" id="profit_increase_additional" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20 no-left-padding no-right-padding">
                                        <div class="col-md-3 no-right-padding  no-left-padding">
                                            <p class="form-paragraph  display-inline"> Profit increase from </p><p class="form-paragraph  display-inline " id="possible_additional_roughin_pr_yr_2"> </p> <p class="form-paragraph  display-inline">additional homes/units: </p>                                            
                                            <div class="row">
                                                <p class="form-paragraph display-inline padding-left-15  ">$ </p><p class="form-paragraph display-inline " id="profit_increase_2">  $  </p>                                            
                                            </div>
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> + </p>                                            
                                        </div>
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph display-inline"> Gross profit from options in </p><p class="form-paragraph display-inline" id="possible_additional_roughin_pr_yr_5"> 106 </p> <p class="form-paragraph display-inline">installations: </p>    
                                            <div class="row">
                                                <p class="form-paragraph padding-left-15 display-inline"> $ </p><p class="form-paragraph display-inline " id="annual_gross_prft">    </p> 
                                            </div>
                                            <input type="hidden" name="gross_profit_from_opt" id="gross_profit_from_opt" /> 
                                        </div>
                                        <div class="col-md-1 no-left-padding no-right-padding">
                                            <p class="form-paragraph display-inline font-size-1-8 ">=</p>                                            
                                        </div>                                            
                                        <div class="col-md-4 padding-top-20 no-left-padding no-right-padding border-box-option padding-left-10">
                                            <p class="form-paragraph display-inline">Annual gross profit increase from additional homes/units plus options:</p>
                                            <div class="row">
                                                <p  class="paragraph-padding-left-10 display-inline green-color-text"> $ </p> <p  class="display-inline green-color-text" id="annual_gross_profit_increase_add_home">   </p>
                                            </div> 
                                            <input type="hidden" name="annual_grs_prft_potential" id="annual_grs_prft_potential" />
                                        </div>
                                    </div>
                                </div>
                                <hr class="margin-top-80px"/>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <div class="row>">
                                        <div class="col-md-5">
                                            <input type="hidden" name="lastid" id="lastid" value=""/>
                                            <input type="submit" name="btnResultOneBack" id="back" value="Back" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="submit" name="btnResultOneNext" id="btnResultOneNext" value="Next" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-12 ">
                                    <div class="progressbar"></div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 90% completed</p>
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
<script>
    jQuery(document).ready(function ($) {
        $("#estimate_trgt_grs_prft_1").slider({
            tooltip_position: 'bottom',
            formatter: function (value) {
                return  "<?php echo get_option('options-label-13-4'); ?> " + value + " <?php echo get_option('options-label-13-5'); ?>";
            }
        });
        $("#lbr_rate_journyman").slider({
            tooltip_position: 'bottom',
            precision: 1,
            formatter: function (value) {
                return  "<?php echo get_option('options-label-14-4'); ?> " + value + " <?php echo get_option('options-label-14-5'); ?>";
            }
        });
    });
</script>