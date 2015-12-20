<?php

function process_result() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'estimate';

    if (isset($_POST['operation']) && $_POST['operation'] == 'processResultOne') {
        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];

        array_pop($posteddata);
        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        
        $table_name = $wpdb->prefix . 'estimate';
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $lastid, OBJECT);
        
        
        $time_saving_no_switch_leg_last =  $results[0]->efficiency_gain;
        $gc_existing_business = $results[0]->sum_ms_zn_ps;
        $home_completed_pr_year = $results[0]->nm_home_cmpltd_pr_yr;        
        $gc_value_pr_home_to_your_bsns = round(number_format((float) ($gc_existing_business / $home_completed_pr_year), 2, '.', ''), 2);
             
        $total_gc_builder = $results[0]->sum_ms_zn_ps_builder_proft;
        
        
        $builder_profit_from_option_home = round(number_format((float) ($total_gc_builder / $home_completed_pr_year), 2, '.', ''), 2);
        
        $builder_share_input = round(number_format((float) (50 / 100), 2, '.', ''));
        
        $builder_willing_to_share = round(number_format((float) ($builder_profit_from_option_home * $builder_share_input), 2, '.', ''), 2);
        
        $good_total_gc_value = $gc_value_pr_home_to_your_bsns + $builder_willing_to_share;
        
        //better
        $annual_saving = $results[0]->annual_saving;
        $btr_total_from_exstng = round(number_format((float) ($annual_saving + $gc_existing_business),2, '.', ''), 2) ;
        
        $better_gc_value_per_home = round(number_format((float) ($btr_total_from_exstng / $home_completed_pr_year), 2, '.', ''), 2);
        $better_total_gc_value_pr_home = round(number_format((float) ($better_gc_value_per_home + $builder_willing_to_share), 2, '.', ''), 2);
        
        //best
        $annual_gross_profit = $results[0]->annual_grs_prft_potential;
        
        $total_possible_rf_in = $results[0]->total_pssble_added_roughin_pr_anm;
        $bst_total_from_exstng = $annual_gross_profit + $gc_existing_business;
        $best_home_pr_yr_trl_possible = $home_completed_pr_year + $total_possible_rf_in;
        $best_gc_value_per_home = round(number_format((float) ($bst_total_from_exstng / $best_home_pr_yr_trl_possible), 2, '.', ''), 2);
        $best_total_gc_value_pr_home = round(number_format((float) ($best_gc_value_per_home + $builder_willing_to_share), 2, '.', ''), 2);
        
        $formData = array(
            'total_gc_existing' => $gc_existing_business,
            'nm_home_completed_pr_year' => $home_completed_pr_year,
            'gc_value_pr_home' => $gc_value_pr_home_to_your_bsns,
            'prcnt_time_saved_no_leg_last' => $time_saving_no_switch_leg_last,
            'total_gc_profit_builder' => $total_gc_builder,
            'builder_profit_option_home' => $builder_profit_from_option_home,
            'builder_share_input_field' => $builder_share_input,
            'builder_willing_t_share' => $builder_willing_to_share,
            'good_gc_total_value' => $good_total_gc_value,
            'btr_total_from_existing' => $btr_total_from_exstng,
            'btr_gc_value_pr_home' => $better_gc_value_per_home,
            'btr_gc_total_vlue_pr_home' => $better_total_gc_value_pr_home,
            'bst_total_from_existing' => $bst_total_from_exstng,
            'bst_gc_value_pr_home' => $best_gc_value_per_home,
            'bst_gc_total_vlue_pr_home' => $best_total_gc_value_pr_home,
            'best_hme_pr_yr_ttl_possible' => $best_home_pr_yr_trl_possible,
            
            
        );

        header('Content-Type: application/json');

        wp_die(json_encode(array('lastid' => $lastid, 'posteddata' => $posteddata, 'formData' => $formData)));
    }
    if (isset($_POST['operation']) && $_POST['operation'] == 'processResultTwo') {
        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);
        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        wp_die($lastid);
    }

    if (isset($_POST['operation']) && $_POST['operation'] == 'getData') {
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $_POST['importData'], OBJECT);
        header('Content-Type: application/json');
        wp_die(json_encode($results[0]));
    }
}

add_action('wp_ajax_process_result', 'process_result'); // Call when user logged in
add_action('wp_ajax_nopriv_process_result', 'process_result'); // Call when user in not logged in