<div class="row showstep11" id="result2" style="display: none">
    <div class="large-12 columns">
        <div class="entry-content">
            <div class="woocommerce">
                <div class="row">
                    <div class="xxlarge-6 xlarge-8 large-12 large-centered columns option-form">
                        <div class="large-10 large-centered columns without-sidebar">
                            <!--                                here is the page title-->
                            <h1 class="page-title" style="font-size: 3.25rem;"><?php echo get_option('headings-label-10-1'); ?></h1>
                        </div>
                        <form id="frmResultTwo" name="frmResultTwo" method="post" enctype="multipart/form-data" role="form">
                            <div class="col-md-12 border-solid-1px height-120px margin-top-40px no-left-padding">
                                <div class="col-md-7 col-md-offset-3 no-left-padding padding-top-15">
                                    <p class="top-paragraphp"><?php echo get_option('headings-label-10-2'); ?></p>
                                </div>
                            </div>
                            <!--                            we hide this portion on client request and it can be used latter-->
                            <div id="good_hide" style="display: none"> 
                                <div class="col-sm-12 no-right-padding no-left-padding padding-top-20px">
                                    <div class="row">
                                        <div class="col-md-7  no-right-padding padding-top-20">
                                            <p class="margin-bottom-10px option-heading-p red-color-text">GOOD: </p>
                                            <p class="margin-bottom-10px form-paragraph font-size-1-4em">Use GoConex for all your power control needs</p>                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20">
                                            <div class="col-md-3 no-left-padding">                                                
                                                <p class="form-paragraph  "> Total GoConex value for  your existing business </p>                                            
                                                <p class="form-paragraph padding-left-15 display-inline"> $ </p><p class="form-paragraph display-inline" id="total_gc_exstng">   </p> 
<!--                                                <input type="hidden" id="gc_pwr_cntrl_total" name="gc_pwr_cntrl_total" />-->
                                            </div>
                                            <div class="col-md-1 padding-top-20 no-left-padding">
                                                <p class="form-paragraph"> &divide; </p>                                            
                                            </div>
                                            <div class="col-md-3 no-left-padding">
                                                <p class="form-paragraph"> Homes/Units per year </p>    
                                               <p class=" padding-left-15 form-paragraph display-inline" id="nm_home_completed_per_year">    </p>  
                                            </div>
                                            <div class="col-md-1 no-right-padding">
                                                <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                            </div>
                                            <div class="col-md-3 col-md-offset-1 no-right-padding">
                                                <p class="form-paragraph"> GoConex value per home to your business </p>    
                                                <p class="form-paragraph display-inline padding-left-15"> $ </p><p class="form-paragraph display-inline" id="good_gc_pwr_cntrl">   </p>
                                                <input type="hidden" id="gc_pwr_cntrl_value_pr_home" name="gc_pwr_cntrl_value_pr_home" />
                                            </div>
                                        </div>
                                    </div>                       
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20 no-right-padding">
                                            <div class="col-md-3 no-left-padding">
                                                <p class="form-paragraph  "> GoConex value per home to your business </p>                                            
                                                <p class="form-paragraph display-inline padding-left-15"> $ </p><p class="form-paragraph display-inline" id="gc_value_pr_home_bsns_2">  $ 306 . 50 </p>                                            
                                            </div>
                                            <div class="col-md-1 padding-top-20 no-left-padding">
                                                <p class="form-paragraph"> + </p>                                            
                                            </div>
                                            <div class="col-md-3 no-left-padding">
                                                <p class="form-paragraph display-inline"> Builder willing to share </p> <p class="form-paragraph display-inline" id="builder_share_1"> 50 </p> <p class="form-paragraph display-inline">% of their per home profit </p>    
                                                <div class="row">
                                                    <p class="form-paragraph display-inline  padding-left-15">  $ </p> <p class="form-paragraph display-inline" id="builder_willing_share_1">  $ 77. 50 </p> 
                                                </div>
                                                <input type="hidden" id="builder_willing_share" name="builder_willing_share" />  
                                            </div>
                                            <div class="col-md-1">
                                                <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                            </div>
                                            <div class="col-md-4 padding-left-15 border-box-option padding-top-15 no-right-padding">
                                                <p class="form-paragraph">Total GoConex value per home: </p> 
                                                <p  class="red-color-text display-inline paragraph-padding-left-10 "> $ </p> <p  class=" red-color-text display-inline" id="good_gc_total_value_pra">   </p> 
                                                <input type="hidden" id="gc_pwr_cntrl_total_vlu_dlr_pr_hme" name="gc_pwr_cntrl_total_vlu_dlr_pr_hme" /> 
                                            </div>
                                        </div>
                                    </div>                                                                                         
                                    <hr class="margin-top-80px"/>
                                </div>
                                <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                    <div class="row">
                                        <div class="col-md-12 padding-top-20">
                                            <div class="col-md-3 no-left-padding">
                                                <p class="form-paragraph  "> Total GoConex option profit for Builder </p>                                            
<!--                                                <p class="form-paragraph display-inline padding-left-15"> $ </p><p class="form-paragraph display-inline" id="total_builder_opt">    </p> 
                                                <input type="hidden" id="gc_pwr_cntrl_bldr_option_prce_pr_hme" name="gc_pwr_cntrl_bldr_option_prce_pr_hme" />                                           -->
                                            </div>
                                            <div class="col-md-1 padding-top-20 no-left-padding">
                                                <p class="form-paragraph"> / </p>                                            
                                            </div>
                                            <div class="col-md-3 padding-left-30 no-left-padding">
                                                <p class="form-paragraph"> Homes/Units per year </p>    
<!--                                                <p class="form-paragraph display-inline padding-left-15"> $ </p><p class="form-paragraph display-inline" id="nm_home_completed_per_year_2">    </p>   -->
                                            </div>
                                            <div class="col-md-1 no-right-padding">
                                                <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                            </div>
                                            <div class="col-md-3 col-md-offset-1 no-right-padding">
                                                <p class="form-paragraph">Builder profit from Options per home </p> 
<!--                                                <p class="form-paragraph display-inline padding-left-15"> $ </p><p class="form-paragraph display-inline" id="builder_price_price_per_home_pra">   </p> 
                                                <input type="hidden" id="builder_price_price_per_home" name="builder_price_price_per_home" /> -->
                                            </div>
                                        </div>
                                    </div>                                                                                         
                                    <hr class="margin-top-80px"/>
                                </div>
                            </div>
                            <div class="col-sm-12 no-right-padding no-left-padding padding-top-40">
                                <div class="row">
                                    <div class="col-md-12  no-right-padding padding-top-20">
                                        <p class="form-paragraph light-red-color-text font-size-1-4em ">"OPTIMIZE" STRATEGY</p>
                                        <p class="margin-bottom-10px form-paragraph display-inline font-size-1-2rem">Use GoConex for all your power control PLUS optimize staff <p class="form-paragraph display-inline font-size-1-2rem" id="prcnt_time_saved_3"> </p><p class="form-paragraph display-inline font-size-1-2rem">% efficiency</p>                                             
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20">
                                        <div class="col-md-3 no-left-padding">                                                
                                            <p class="form-paragraph  "> Total GoConex value for  your existing business </p>                                            
                                            <p class="form-paragraph padding-left-15 display-inline" id="btr_total_existing">  </p> 
                                            <input type="hidden" id="gc_pwr_cntrl_total_adjust_staff" name="gc_pwr_cntrl_total_adjust_staff" />
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> / </p>                                            
                                        </div>
                                        <div class="col-md-3 padding-left-30 no-left-padding">
                                            <p class="form-paragraph"> Homes/Units per year </p>    
                                            <p class="padding-left-15 form-paragraph display-inline" id="nm_home_completed_per_year_3">    </p>   
                                        </div>
                                        <div class="col-md-1 no-right-padding">
                                            <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                        </div>
                                        <div class="col-md-3 col-md-offset-1 no-right-padding">
                                            <p class="form-paragraph"> GoConex value per home to your business </p>    
                                            <p class="form-paragraph display-inline"> $</p> <p class="form-paragraph display-inline" id="btr_gc_value_pr_home">  </p>   
                                            <input type="hidden" name="gc_pwr_cntrl_adjust_staff_vlue_pr_hme" id="gc_pwr_cntrl_adjust_staff_vlue_pr_hme" />
                                        </div>
                                    </div>
                                </div>     
                                <hr class="margin-top-80px" />
                            </div>

                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20">
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph  "> Total GoConex option profit for Builder </p>                                            
                                            <p class="form-paragraph display-inline padding-left-15"> $ </p><p class="form-paragraph display-inline" id="total_builder_opt">    </p> 
                                            <input type="hidden" id="gc_pwr_cntrl_bldr_option_prce_pr_hme" name="gc_pwr_cntrl_bldr_option_prce_pr_hme" />                                           
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> / </p>                                            
                                        </div>
                                        <div class="col-md-3 padding-left-30 no-left-padding">
                                            <p class="form-paragraph"> Homes/Units per year </p>    
                                            <p class="padding-left-15 form-paragraph display-inline" id="nm_home_completed_per_year_2">    </p>   
                                        </div>
                                        <div class="col-md-1 no-right-padding">
                                            <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                        </div>
                                        <div class="col-md-3 col-md-offset-1 no-right-padding">
                                            <p class="form-paragraph">Builder profit from Options per home </p> 
                                            <p class="form-paragraph display-inline padding-left-15"> $ </p><p class="form-paragraph display-inline" id="builder_price_price_per_home_pra">   </p> 
                                            <input type="hidden" id="builder_price_price_per_home" name="builder_price_price_per_home" /> 
                                        </div>
                                    </div>
                                </div>                                                                                         
                                <hr class="margin-top-80px"/>
                            </div>
                            <div class="col-sm-12 no-right-padding no-left-padding padding-top-20px">
                                <div class="row">
                                    <div class="col-md-9  no-right-padding padding-top-20">
                                        <?php $label = get_option('estimates-label-69'); ?> 
                                        <p class="form-paragraph"><?php echo $label; ?></p>
                                        <input name="builder_share" type="text" class="form-control  display-none" id="builder_share" placeholder="50" value="50" data-slider-min="<?php echo get_option('options-label-15-1'); ?>" data-slider-max="<?php echo get_option('options-label-15-2'); ?>" data-slider-step="<?php echo get_option('options-label-15-3'); ?>" data-slider-value="50">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20 no-right-padding">
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph  "> GoConex value per home to your business </p>                                            
                                            <p class="form-paragraph padding-left-15 display-inline">  $ </p> <p class="form-paragraph display-inline" id="btr_gc_value_pr_home_2">   </p>                                            
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> + </p>                                            
                                        </div>
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph display-inline"> Builder willing to share </p> <p class="form-paragraph display-inline" id="builder_share_2"> 50 </p><p class="form-paragraph display-inline"> % of their per home profit </p>    
                                            <div class="row">
                                                <p class="form-paragraph padding-left-15 display-inline">  $ </p> <p class="form-paragraph display-inline" id="builder_willing_share_2">   </p> 
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                        </div>
                                        <div class="col-md-4 padding-left-20px border-box-option padding-top-15">
                                            <p class="form-paragraph">Total GoConex value per home: </p> 
                                            <p  class="paragraph-padding-left-10 light-red-color-text display-inline"> $ </p> <p  class="light-red-color-text display-inline" id="btr_total_value_pr_home"> </p> 
                                            <input type="hidden" name="gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme" id="gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme" />
                                        </div>
                                    </div>
                                </div>                                                                                         
                                <hr class="margin-top-80px"/>
                            </div>

                            <div class="col-sm-12 no-right-padding no-left-padding padding-top-20px">
                                <div class="row">
                                    <div class="col-md-12 no-right-padding padding-top-20">
                                        <p class="form-paragraph light-green-color-text font-size-1-4em ">"GROW" STRATEGY</p>
                                        <p class="margin-bottom-10px form-paragraph font-size-1-2rem">Use GoConex your power control PLUS grow with <span class="light-green-color-text"> <span id="possible_additional_roughin_pr_yr_6" > 106 </span> additional homes/installations </span> this year</p>                                             
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20">
                                        <div class="col-md-3 no-left-padding">                                                
                                            <p class="form-paragraph  "> Total GoConex value for your existing business </p>                                            
                                            <p class="form-paragraph padding-left-15 display-inline"> $ </p><p class="form-paragraph display-inline" id="bst_gc_value_pr_home_p">  </p>  
                                            <input type="hidden" name="gc_pwr_cntrl_do_more_exstng_rsrces_total" id="gc_pwr_cntrl_do_more_exstng_rsrces_total" />
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> / </p>                                            
                                        </div>
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph"> Homes/Units per year </p>    
                                            <p class="padding-left-15 form-paragraph display-inline" id="nm_home_completed_per_year_4">    </p>  
                                            <input type="hidden" name="best_nm_hme_cmpltd_total_possible" id="best_nm_hme_cmpltd_total_possible" />
                                        </div>
                                        <div class="col-md-1 no-right-padding">
                                            <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                        </div>
                                        <div class="col-md-3 col-md-offset-1 no-right-padding">
                                            <p class="form-paragraph"> GoConex value per home to your business </p>    
                                            <p class="form-paragraph display-inline"> $ </p> <p class="form-paragraph display-inline"  id="best_gc_value_pr_home">   </p> 
                                            <input type="hidden" name="gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme" id="gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme" />
                                        </div>
                                    </div>
                                </div>     
                                <hr class="margin-top-80px" />
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px no-right-padding no-left-padding">
                                <div class="row">
                                    <div class="col-md-12 padding-top-20 no-right-padding">
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph  "> GoConex value per home to your business </p>                                            
                                            <p class="form-paragraph padding-left-15 display-inline">  $ </p> <p class="form-paragraph display-inline" id="bst_gc_value_pr_home_2">   </p>                                            
                                        </div>
                                        <div class="col-md-1 padding-top-20 no-left-padding">
                                            <p class="form-paragraph"> + </p>                                            
                                        </div>
                                        <div class="col-md-3 no-left-padding">
                                            <p class="form-paragraph display-inline"> Builder willing to share </p> <p class="form-paragraph display-inline" id="builder_share_3"> 50 </p><p class="form-paragraph display-inline"> % of their per home profit </p>    
                                            <div class="row">
                                                <p class="form-paragraph padding-left-15 display-inline">  $ </p> <p class="form-paragraph display-inline" id="builder_willing_share_3">   </p> 
                                            </div> 
                                        </div>
                                        <div class="col-md-1">
                                            <p class="form-paragraph display-inline font-size-1-8 pull-right">=</p>                                            
                                        </div>
                                        <div class="col-md-4 padding-left-20px border-box-option padding-top-15 no-right-padding">
                                            <p class="form-paragraph">Total GoConex value per home: </p> 
                                            <p  class="paragraph-padding-left-10 light-green-color-text display-inline"> $ </p> <p  class="display-inline light-green-color-text" id="bst_total_value_pr_home">  </p> 
                                            <input type="hidden" id="gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme" name="gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme" />
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
                                            <input type="submit" name="back" id="back" value="Back" class="form-control">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="submit" name="btnResultTwoNext" id="btnResultTwoNext" value="Finish" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-top-40px padding-top-20px">
                                <div class="col-sm-12 ">
                                    <div class="progressbar"></div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="text-center progress-bar-paragraph padding-top-20px">Progress : 100% completed</p>
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
        $("#builder_share").slider({
            tooltip_position: 'bottom',
            precision: 1,
            formatter: function (value) {
                return  "<?php echo get_option('options-label-15-4'); ?> " + value + " <?php echo get_option('options-label-15-5'); ?>";
            }
        });
    });
</script>