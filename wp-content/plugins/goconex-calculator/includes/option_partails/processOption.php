<?php

function option_form_process() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'estimate';

    if (isset($_POST['operation']) && $_POST['operation'] == 'firstoptionform') {
        $userArr = array('user_id' => get_current_user_id());
        //remove from here
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);
        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        header('Content-Type: application/json');
        wp_die(json_encode(array('lastid' => $lastid, 'posteddata' => $posteddata)));
    }

    if (isset($_POST['operation']) && $_POST['operation'] == 'updatefirstoptionform') {
        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);
        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        wp_die($lastid);
    }
    if (isset($_POST['operation']) && $_POST['operation'] == '2ndOptionform') {
        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);

        /*
         * Results Process statrs
         */
        $table_name = $wpdb->prefix . 'estimate';
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $lastid, OBJECT);

        $goconex = new goconex();

        //estimate excel sheet 
        //two wire conductor form one
        $goconex->set_two_wire_conductor($results[0]->wire_two_cond_qnty, $results[0]->wire_two_cond_price);
        $goconex->set_three_wire_conductor($results[0]->wire_three_cond_qnty, $results[0]->wire_three_cond_price);
        $goconex->set_pipe_or_conduit($results[0]->pip_cond_qnty, $results[0]->pip_cond_price);

        //gang box quantity setter form two
        $goconex->set_gang_box($results[0]->one_gang_box_qnty, $results[0]->one_gang_box_price);
        $goconex->set_two_gang_box($results[0]->two_gang_box_qnty, $results[0]->two_gang_box_price);
        $goconex->set_three_gang_box($results[0]->three_gang_box_qnty, $results[0]->three_gang_box_price);
        $goconex->set_four_gang_box($results[0]->four_gang_box_qnty, $results[0]->four_gang_box_price);

        //gang vapour boot form three
        $goconex->set_first_gang_vapour_boot($results[0]->one_gang_vpr_boot_qnty, $results[0]->one_gang_vpr_boot_price);
        $goconex->set_second_gang_vapour_boot($results[0]->twp_gang_vpr_boot_qnty, $results[0]->two_gang_vpr_boot_price);
        $goconex->set_third_gang_vapour_boot($results[0]->three_gang_vpr_boot_qnty, $results[0]->three_gang_vpr_boot_price);
        $goconex->set_four_gang_vapour_boot($results[0]->four_gang_vpr_boot_qnty, $results[0]->four_gang_vpr_boot_price);

        // decora form four
        $goconex->set_decora_single_pole_switches($results[0]->decra_single_pool_qnty, $results[0]->decra_single_pool_price);
        $goconex->set_decora_three_switch_way($results[0]->decra_three_wy_switch_qnty, $results[0]->decra_three_wy_switch_price);
        $goconex->set_decora_four_switch_way($results[0]->decra_four_wy_switch_qnty, $results[0]->decra_four_wy_switch_price);
        $goconex->set_wire_connector($results[0]->wire_conductor_qnty, $results[0]->wire_conductor_price);

        //Time form fifth
        $goconex->set_eight_hr_days_rough_in($results[0]->nm_eight_hr_for_roughin);
//        $goconex->set_percnt_rough_not_switch_legs($results[0]->prcntge_without_switch);
        $goconex->set_seal_switch_vapour(0);
        $goconex->set_repair_demage_switches(0);
        $goconex->set_eight_hr_days_final_rough($results[0]->nm_eight_days_roughin);
        $goconex->set_eliminating_switch_con_final($results[0]->prcntg_eliminating_sw_con_final);

        // Labor form sixth 

        $goconex->set_no_crews_rough_in($results[0]->nm_crews_roughin_qnty);
        $goconex->set_men_per_rough_crew($results[0]->nm_men_rough_in);
        $goconex->set_hourly_labour_rate_rough($results[0]->cmbnd_hrly_lbr_rate_crews_roughin);
        $goconex->set_crew_doing_final($results[0]->nm_crews_doing_final);
        $goconex->set_men_per_final_crew($results[0]->nm_men_pr_final);
        $goconex->set_hourly_final_crews($results[0]->cmbnd_hrly_rate_final_crews);
        //business
        $goconex->set_completed_per_year($results[0]->nm_home_cmpltd_pr_yr);
        $goconex->set_target_gross_profit(1100); //$results[0]->trgt_gross_prft_dlr
        //Material and labor cost

        $comparison = new comparisonClass();
        $comparison->estimateObject = $goconex;
        $comparison->sum_ms_zn_ps = $results[0]->sum_ms_zn_ps;



        //Option excel sheet
        //option form one
        //setter
        $comparison->set_avl_wrk_dy_pr_yr(244);
        $comparison->set_work_days(244);
        $comparison->set_lbr_rate_tr(36);
        $labour_rate = $comparison->get_lbr_rate_tr();


        $hrs_fstr_gc = $comparison->get_avg_hrs_roughInPrHomeGC();

        $total_switches_in_home = $goconex->get_total_switches_in_home();
        $roughin_labor_hr = $goconex->get_rough_in_labor_hr();
        $mint_per_switch = $results[0]->mnt_pr_home_seal_switch_vpr_brr;
        $hour_pr_house_rough_in = ($total_switches_in_home * $mint_per_switch) / 60;

        $hrs_saved_pr_home_installation = number_format((float) ($total_switches_in_home * ($mint_per_switch / 60)), 2, '.', '');

        $prcnt_faster = round(number_format((float) ( $roughin_labor_hr - $hrs_saved_pr_home_installation), 2, '.', ''), 2);

        $completed_yr = $results[0]->nm_home_cmpltd_pr_yr;
        
        
        //efficiency gain 
        $prnct_roughin_sw_no_lg = ($hour_pr_house_rough_in / $roughin_labor_hr) * 100;
        
        $goconex->set_percnt_rough_not_switch_legs($prnct_roughin_sw_no_lg);
        
        $efficiency_gain_prcnt = round(number_format((float) ( ($hrs_saved_pr_home_installation / $roughin_labor_hr) * 100), 2, '.', ''), 2);
        $hour_saved_annually = $hrs_saved_pr_home_installation * $completed_yr;
        


        $possible_additional_roughin_pr_yr = round($hour_saved_annually / $prcnt_faster);
        $addition_houses = round( $possible_additional_roughin_pr_yr );
        $target_gross_proft = 1100; //$results[0]->trgt_gross_prft_dlr;
        // first he said use contractor option sum $contractor_prift_options =  $posteddata['sum_ms_zn_ps_builder_proft'];
        // then he said use first form option sum 
        $sum_ms_zn_ps = $results[0]->sum_ms_zn_ps;
        $contractor_prift_options = $sum_ms_zn_ps;

        $annual_gross_profit = round(number_format((float) (($contractor_prift_options / $completed_yr) * $possible_additional_roughin_pr_yr), 2, '.', ''), 2);

        $profit_increase_additional_unit = $target_gross_proft * $addition_houses; // first was that $target_gross_proft * $possible_additional_roughin_pr_yr;
        $annual_gross_proft_increase_add_home = $profit_increase_additional_unit + $annual_gross_profit;

        $annual_man_hr = $comparison->get_annualManHrsGC();

        //possible staff saving 
        $staff_hrs_saving = round(number_format((float) ( $hour_saved_annually / $annual_man_hr), '3', '.', ''), 3);

        $annual_wages = $annual_man_hr * $labour_rate;

        $last_annual_saving = $comparison->get_Annual_Savings();

        $labour_cost_pr_inst = $goconex->get_labour_cost_pr_inst();
        $material_cost_pr_inst = $goconex->get_material_cost_pr_inst();
        $material_cost_pr_switch = $goconex->get_material_cost_pr_switch();

        $labour_cost_pr_switch = $goconex->get_labour_cost_pr_switch();
        $metrial_and_labour_cost = $goconex->get_material_and_labour_cost();


        $comparison->masterObject = $sum_ms_zn_ps;

        /// i replace $prcnt_faster with $prcnt_faster ; 
        $formData = array(
            'get_eight_hr_days_rough_in' => $goconex->get_eight_hr_days_rough_in()["quantity"],
            'get_men_per_rough_crew' => $goconex->get_men_per_rough_crew()["quantity"],
            'get_rough_in_labor_hr' => $goconex->get_rough_in_labor_hr(),
            'total_switches_in_home' => $total_switches_in_home,
            'mnt_pr_switch' => $mint_per_switch,
            'get_hr_saved_no_switches_legs' => $goconex->get_hr_saved_no_switches_legs(),
            'target_gross_profit' => $target_gross_proft,
            'hour_saved_faster_gc' => $prcnt_faster,
            'hrs_saved_pr_home_installation' => $hrs_saved_pr_home_installation,
            'nm_completed_pr_yr' => $completed_yr,
            'hrs_saved_annually' => $hour_saved_annually,
            'possible_additional_rf_in_pr_yr' => $possible_additional_roughin_pr_yr,
            'additional_houses' => $addition_houses,
            //'target_gross_profit' => $target_gross_proft,
            'profit_increase_additional' => $profit_increase_additional_unit,
            'annual_gross_proft' => $annual_gross_profit,
            'annual_grs_pft_inr_add_home' => $annual_gross_proft_increase_add_home,
            'annual_man_hrs' => $annual_man_hr,
            'possible_staff_svng' => $staff_hrs_saving,
            'labour_rate' => $labour_rate,
            'prcnt_time_saved_no_leg' => $efficiency_gain_prcnt,
            'annual_wages' => $annual_wages,
            'annual_saving_last' => $last_annual_saving,
            'mtrl_cst_pr_inst' => $material_cost_pr_inst,
            'mtrl_cst_pr_sw' => $material_cost_pr_switch,
            'lbr_cst_pr_inst' => $labour_cost_pr_inst,
            'lbr_cst_pr_sw' => $labour_cost_pr_switch,
            'metrial_and_lbr_cst' => $metrial_and_labour_cost,
        );
        /*
         * Results Process end
         */

        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));

        header('Content-Type: application/json');
        wp_die(json_encode(array('lastid' => $lastid, 'posteddata' => $posteddata, 'formData' => $formData)));
    }
    if (isset($_POST['operation']) && $_POST['operation'] == '3rdOptionform') {

        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);

        /*
         * Results Process statrs
         */
        $table_name = $wpdb->prefix . 'estimate';
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $lastid, OBJECT);

        $goconex = new goconex();

        //estimate excel sheet 
        //two wire conductor form one
        $goconex->set_two_wire_conductor($results[0]->wire_two_cond_qnty, $results[0]->wire_two_cond_price);
        $goconex->set_three_wire_conductor($results[0]->wire_three_cond_qnty, $results[0]->wire_three_cond_price);
        $goconex->set_pipe_or_conduit($results[0]->pip_cond_qnty, $results[0]->pip_cond_price);

        //gang box quantity setter form two
        $goconex->set_gang_box($results[0]->one_gang_box_qnty, $results[0]->one_gang_box_price);
        $goconex->set_two_gang_box($results[0]->two_gang_box_qnty, $results[0]->two_gang_box_price);
        $goconex->set_three_gang_box($results[0]->three_gang_box_qnty, $results[0]->three_gang_box_price);
        $goconex->set_four_gang_box($results[0]->four_gang_box_qnty, $results[0]->four_gang_box_price);

        //gang vapour boot form three
        $goconex->set_first_gang_vapour_boot($results[0]->one_gang_vpr_boot_qnty, $results[0]->one_gang_vpr_boot_price);
        $goconex->set_second_gang_vapour_boot($results[0]->twp_gang_vpr_boot_qnty, $results[0]->two_gang_vpr_boot_price);
        $goconex->set_third_gang_vapour_boot($results[0]->three_gang_vpr_boot_qnty, $results[0]->three_gang_vpr_boot_price);
        $goconex->set_four_gang_vapour_boot($results[0]->four_gang_vpr_boot_qnty, $results[0]->four_gang_vpr_boot_price);

        // decora form four
        $goconex->set_decora_single_pole_switches($results[0]->decra_single_pool_qnty, $results[0]->decra_single_pool_price);
        $goconex->set_decora_three_switch_way($results[0]->decra_three_wy_switch_qnty, $results[0]->decra_three_wy_switch_price);
        $goconex->set_decora_four_switch_way($results[0]->decra_four_wy_switch_qnty, $results[0]->decra_four_wy_switch_price);
        $goconex->set_wire_connector($results[0]->wire_conductor_qnty, $results[0]->wire_conductor_price);

        //Time form fifth
        $goconex->set_eight_hr_days_rough_in($results[0]->nm_eight_hr_for_roughin);
        $goconex->set_percnt_rough_not_switch_legs($results[0]->prcntge_without_switch);
        $goconex->set_seal_switch_vapour(0); //
        $goconex->set_repair_demage_switches(0);
        $goconex->set_eight_hr_days_final_rough($results[0]->nm_eight_days_roughin);
        $goconex->set_eliminating_switch_con_final(10);

        // Labor form sixth 

        $goconex->set_no_crews_rough_in($results[0]->nm_crews_roughin_qnty);
        $goconex->set_men_per_rough_crew($results[0]->nm_men_rough_in);
        $goconex->set_hourly_labour_rate_rough($results[0]->cmbnd_hrly_lbr_rate_crews_roughin);
        $goconex->set_crew_doing_final($results[0]->nm_crews_doing_final);
        $goconex->set_men_per_final_crew($results[0]->nm_men_pr_final);
        $goconex->set_hourly_final_crews($results[0]->cmbnd_hrly_rate_final_crews);
        //business
        $goconex->set_completed_per_year($results[0]->nm_home_cmpltd_pr_yr);
        $goconex->set_target_gross_profit($results[0]->trgt_gross_prft_dlr);

        $comparison = new comparisonClass();
        $comparison->estimateObject = $goconex;
        $comparison->sum_ms_zn_ps = $results[0]->sum_ms_zn_ps;

        //Option excel sheet
        //option form one
        //setter
        $comparison->set_avl_wrk_dy_pr_yr(244);
        $comparison->set_work_days(244);
        $comparison->set_lbr_rate_tr(36);

        $labour_rate = $comparison->get_lbr_rate_tr();

        $hrs_fstr_gc = $comparison->get_avg_hrs_roughInPrHomeGC();
        $hrs_saved_pr_home_installation = $roughin_labor_hr - $hrs_fstr_gc;
        $completed_yr = $results[0]->nm_home_cmpltd_pr_yr;
        $hour_saved_annually = $hrs_saved_pr_home_installation * $completed_yr;
        $possible_additional_roughin_pr_yr = round(number_format((float) ($hour_saved_annually / $hrs_fstr_gc), 2, '.', ''));
        $target_gross_proft = $results[0]->trgt_gross_prft_dlr;
        $annual_gross_profit = $comparison->get_annual_grsPrftPotential();
        $profit_increase_additional_unit = $target_gross_proft * $possible_additional_roughin_pr_yr;
        $annual_gross_proft_increase_add_home = $profit_increase_additional_unit + $annual_gross_profit;

        $annual_man_hr = $comparison->get_annualManHrsGC();
        $staff_hrs_saving = $comparison->get_staff_svngHrSvdMnHrAvlPrYr();

        $annual_wages = $annual_man_hr * $labour_rate;

        $last_annual_saving = $comparison->get_Annual_Savings();

        $sum_ms_zn_ps = $results[0]->sum_ms_zn_ps;
        $comparison->masterObject = $sum_ms_zn_ps;


        $formData = array(
            'get_eight_hr_days_rough_in' => $goconex->get_eight_hr_days_rough_in()["quantity"],
            'get_men_per_rough_crew' => $goconex->get_men_per_rough_crew()["quantity"],
            'get_rough_in_labor_hr' => $goconex->get_rough_in_labor_hr(),
            'get_hr_saved_no_switches_legs' => $goconex->get_hr_saved_no_switches_legs(),
            'target_gross_profit' => $results[0]->trgt_gross_prft_dlr,
            'hour_saved_faster_gc' => $prcnt_faster,
            'hrs_saved_pr_home_installation' => $hrs_saved_pr_home_installation,
            'nm_completed_pr_yr' => $completed_yr,
            'hrs_saved_annually' => $hour_saved_annually,
            'possible_additional_rf_in_pr_yr' => $possible_additional_roughin_pr_yr,
            'target_gross_profit' => $target_gross_proft,
            'profit_increase_additional' => $profit_increase_additional_unit,
            'annual_gross_profit' => $annual_gross_profit,
            'annual_grs_pft_inr_add_home' => $annual_gross_proft_increase_add_home,
            'annual_man_hrs' => $annual_man_hr,
            'possible_staff_svng' => $staff_hrs_saving,
            'labour_rate' => $labour_rate,
            'annual_wages' => $annual_wages,
            'annual_saving_last' => $last_annual_saving,
        );
        /*
         * Results Process end
         */

        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));

        header('Content-Type: application/json');
        wp_die(json_encode(array('lastid' => $lastid, 'posteddata' => $posteddata, 'formData' => $formData)));
    }
    if (isset($_POST['operation']) && $_POST['operation'] == 'getDataestimateform') {
        $table_name = $wpdb->prefix . 'estimate';
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $_POST['importData'], OBJECT);
        header('Content-Type: application/json');
        wp_die(json_encode($results[0]));
    }
    if (isset($_POST['operation']) && $_POST['operation'] == 'getData') {
        $table_name = $wpdb->prefix . 'option_tbl';
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $_POST['importData'], OBJECT);
        header('Content-Type: application/json');
        wp_die(json_encode($results[0]));
    }
}

add_action('wp_ajax_option_form_process', 'option_form_process'); // Call when user logged in
add_action('wp_ajax_nopriv_option_form_process', 'option_form_process'); // Call when user in not logged in
?>