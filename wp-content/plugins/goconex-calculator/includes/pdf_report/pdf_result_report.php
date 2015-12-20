<?php 
require_once ('../../../../../wp-load.php');
global $wpdb;
$table_name = $wpdb->prefix . 'estimate';
//custom id
$id = 386;
// $_GET['id'];
$results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $id, OBJECT);

$final_question  = 80000;
$num_completed_pr_year = $results[0]->nm_home_cmpltd_pr_yr;
$total_switch_per_home = $results[0]->total_nm_sw_in_home;

$max_pay_on_needed_profit = round(number_format((float) ($final_question / ($total_switch_per_home * $num_completed_pr_year)), '2', '.', ''), 2);

$optimize_strategy_total = $results[0]->gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme;
$grow_strategy_total = $results[0]->gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme;
$mtrial_and_labour_cost = $results[0]->tr_matrial_and_lbr_cst;

$available_value_dollar_resour_efficieny =  round(number_format((float) ($optimize_strategy_total + $mtrial_and_labour_cost), '2', '.', ''), 2);
$available_value_dollar_exstng_rs_people =  round(number_format((float) ($grow_strategy_total + $mtrial_and_labour_cost), '2', '.', ''), 2);

$max_pay_still_prift_efficiency  = round(number_format((float) ($available_value_dollar_resour_efficieny / $total_switch_per_home), '2', '.', ''), 2);
$max_pay_still_prift_rs_people  = round(number_format((float) ($available_value_dollar_exstng_rs_people / $total_switch_per_home), '2', '.', ''), 2);

$adjust_resource = $max_pay_still_prift_efficiency - $max_pay_on_needed_profit;
$grow_business = $max_pay_still_prift_rs_people - $max_pay_on_needed_profit;
$html =  '<!doctype html>
<html>
    <head>
        <title>PDF Report</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="custom_container_pdf">
            <div class=" border-solid-1px top_header">
                <p class="top-paragraphp">Results for [COMPANY NAME] with GoConex:</p>
            </div>
            <div class="margin-top-80px">
                <p class="light-red-color-text font-size-1-3em">“OPTIMIZE” STRATEGY:</p>
                <p class="form-paragraph">Use GoConex for power control PLUS optimize staff with '. $results[0]->efficiency_gain.'% efficiency</p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Potential GoConex value for your existing business</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$results[0]->gc_pwr_cntrl_total_adjust_staff.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> / </p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Homes/Units per year</p>
                <p class="form-paragraph_89rem padding-left-20px"> '.$num_completed_pr_year.'  </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> = </p>
            </div>
            <div class="margin-top-40px left_float pdf_column no-right-padding">                  
                <p class="form-paragraph_89rem">GoConex value per home</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$results[0]->gc_pwr_cntrl_adjust_staff_vlue_pr_hme.'  </p>
            </div>
            <div class="clear_both"></div>

            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">GoConex value per home</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$results[0]->gc_pwr_cntrl_adjust_staff_vlue_pr_hme.'  </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> + </p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Builder sharing 50'.$results[0]->builder_share.'% of their per home profit</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$results[0]->builder_willing_share.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px  no-right-padding">
                <p class="form-paragraph_89rem"> = </p>
            </div>
            <div class="margin-top-40px left_float pdf_column no-right-padding border-solid-1px border-radius-5 no-right-padding padding-left-10 padding-bottom-10">                  
                <p class="form-paragraph_89rem no-right-margin">Total GoConex value per home:</p>
                <p class="padding-left-20px light-red-color-text font-size-1-3em  display-inline"> $'.$results[0]->gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme.' </p>
            </div>
            <div class="clear_both"></div>
            <hr class="margin-top-80px"/>
            <div class="margin-top-80px">
                <p class="light-green-color-text font-size-1-3em">“GROW” STRATEGY:</p>
                <p class="form-paragraph">Use GoConex for power control PLUS grow with '.$results[0]->total_pssble_added_roughin_pr_anm.' additional installations this year</p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Potential GoConex value  for your business</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$results[0]->gc_pwr_cntrl_do_more_exstng_rsrces_total.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> / </p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Homes/Units per year</p>
                <p class="form-paragraph_89rem padding-left-20px"> '.$results[0]->best_nm_hme_cmpltd_total_possible.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> = </p>
            </div>
            <div class="margin-top-40px left_float pdf_column no-right-padding">                  
                <p class="form-paragraph_89rem">GoConex value  per home</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$results[0]->gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme.' </p>
            </div>
            <div class="clear_both"></div>

            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">GoConex value per home</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$results[0]->gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> + </p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Builder sharing '.$results[0]->builder_share.'% of  their per home profit</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$results[0]->builder_willing_share.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px  no-right-padding">
                <p class="form-paragraph_89rem"> = </p>
            </div>
            <div class="margin-top-40px left_float pdf_column no-right-padding border-solid-1px border-radius-5 no-right-padding padding-left-10 padding-bottom-10">                  
                <p class="form-paragraph_89rem no-right-margin">Total GoConex value per home:</p>
                <p class="padding-left-20px light-green-color-text font-size-1-3em  display-inline"> $'.$results[0]->gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme.' </p>
            </div>
            <div class="clear_both"></div>
            <hr class="margin-top-80px"/>


            <div class="margin-top-80px">
                <p class="light-purple-color-text font-size-1-3em">TARGET PROFIT:</p>
                <p class="form-paragraph">You said your company could change to GoConex if you earned $50,000 in new profit.  At what price do we meet that goal?</p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">“Optimize” Strategy  value per home</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$optimize_strategy_total.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> + </p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Current Material & Labor  cost for wired switching</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$mtrial_and_labour_cost.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> = </p>
            </div>
            <div class="margin-top-40px left_float pdf_column no-right-padding">                  
                <p class="form-paragraph_89rem">Available value dollars per home  (without changing your pricing)</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$available_value_dollar_resour_efficieny.' </p>
            </div>
            <div class="clear_both"></div>

            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">“Grow” Strategy  value per home</p>
                <p class="form-paragraph_89rem padding-left-20px">  $'.$grow_strategy_total.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px">
                <p class="form-paragraph_89rem"> + </p>
            </div>
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Current Material & Labor  cost for wired switching</p>
                <p class="form-paragraph_89rem padding-left-20px">  $'.$mtrial_and_labour_cost.' </p>
            </div>
            <div class="pdf_sign left_float margin-top-60px  no-right-padding">
                <p class="form-paragraph_89rem"> = </p>
            </div>
            <div class="margin-top-40px left_float pdf_column no-right-padding border-radius-5 no-right-padding padding-left-10 padding-bottom-10">                  
                <p class="form-paragraph_89rem no-right-margin">Available value dollars per home  (without changing your pricing)</p>
                <p class="padding-left-20px form-paragraph_89rem display-inline"> $'.$available_value_dollar_exstng_rs_people.'  </p>
            </div>
            <div class="clear_both"></div> 
            <div class="margin-top-40px left_float pdf_column">           
                <p class="form-paragraph_89rem">Profit goal needed to  start using GoConex</p>
                <p class="form-paragraph_89rem padding-left-20px"> $'.$final_question.' </p>
            </div>
            <div class="clear_both"></div> 
            <div class="margin-top-40px left_float pdf_last_box border-solid-1px border-radius-5 padding-left-10 padding-bottom-10">           
                <p class="form-paragraph_89rem">Price you can pay and achieve target  profit with “Optimize” Strategy</p>
                <p class="font-size-1-3em light-red-color-text padding-left-20px display-inline ">  $'.$adjust_resource.' </p><p class="display-inline light-red-color-text form-paragraph_89rem"> per switch</p> 
            </div>
            <div class="margin-top-40px left_float pdf_last_box border-solid-1px border-radius-5 margin-left-20px  padding-left-10 padding-bottom-10">           
                <p class="form-paragraph_89rem">Price you can pay and achieve target  profit with “Grow” Strategy</p>
                <p class="font-size-1-3em light-green-color-text padding-left-20px display-inline "> $'.$grow_business.' </p><p class="light-green-color-text form-paragraph_89rem display-inline"> per switch</p> 
            </div>
            <div class="clear_both"></div>
            <hr class="margin-top-40px"/>
            <div class=" border-solid-1px top_header margin-top-40px">
                <p class="top-paragraphp">Will you change to GoConex if we can accommodate the pricing above?</p>
            </div>
            <div class="margin-top-40px">
                <p class="form-paragraph_89rem no-right-margin">Send an email to businessvalue@goconex.com. We will call you to answer any questions you have about the above estimates.</p>
            </div>
            <div class="margin-top-40px pdf_button">
                <button type="button" name="btn_email_bsns_value" id="btn_email_bsns_value" class="cstuoma"> Email businessvalue@goconex.com </button>
            </div>            
            <div class="clear_both"></div>
            <hr class="margin-top-40px"/>
            <div class=" border-solid-1px top_header margin-top-40px">
                <p class="top-paragraphp">Discuss GoConex with your Home Builder clients</p>
            </div>
            <div class="margin-top-40px">
                <p class="form-paragraph_89rem no-right-margin">Excite your builders with new features and new profit without increasing their cost.</p>
            </div>
            <div class="margin-top-40px pdf_button">
                <button type="button" name="bt_view_bldr_email" id="bt_view_bldr_email" class="cstuoma"> View Builder Email </button>
            </div>
            <div class="clear_both"></div>
            <hr class="margin-top-40px"/>
            <div class="margin-top-40px">
                <p class="form-paragraph_89rem no-right-margin">GoConex is proudly manufacturered by Levven Electronics in Alberta, Canada. </p>
            </div>
            <div class="pdf_column left_float">
                <p class="form-paragraph_89rem">Levven Electronics Ltd <br/> 9741 54 Ave  <br/>  Edmonton, Alberta, Canada <br/>  T6E 5J4</p>
                <p class="form-paragraph_89rem">Email:<a href="mailto:sales@levven.com ">sales@levven.com </a> <br/> Phone: 780-391-3000 <br/> Web: <a href="http://levven.com">http://levven.com</a></p>
            </div>
            <div class="pdf_column left_float padding-top-20">
                <img src="img/company_icon_03.jpg" alt="company_icon" />                
            </div>
            <div class="clear_both"></div>
        </div>
    </body>
</html>';

echo $html;