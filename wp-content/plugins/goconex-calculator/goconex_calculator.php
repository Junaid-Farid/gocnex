<?php
/*
  Plugin Name: Goconex Calculator
  Plugin URI: http://optimageeks.com
  Description: Plugin for Goconex calculator estimate form short code [add_estimate_form], option form [add_option_form]
  Version: 0.01
  Author: OptimaGeeks
  Author URI: http://optimageeks.com
 */
if (!class_exists('WP_List_Table')) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
global $estimate_table_db_version;
$estimate_table_db_version = 1.1; //it can be change to 1.2

/**
 * register_activation_hook Implementation
 * 
 * will be called when user activates plugin first time
 * must create needed dabase tables
 */
function estimate_table_install() {
    global $wpdb;
    global $estimate_table_db_version;

    $table_name = $wpdb->prefix . 'estimate'; // do not forget about the prefix

    /*
     * sql to create the table
     * Note:  
     * 1. each field must in the seperate line
     * 2. There must be two spaces between PRIMARY KEY and its name
     *     Like this: PRIMARY KEY[space][space](id)
     * otherwise dbDelta will not work
     */
    $sql = "CREATE TABLE " . $table_name . " ( 
            id int(11) NOT NULL AUTO_INCREMENT,
            user_id BIGINT NOT NULL,
            wire_two_cond_qnty VARCHAR(255) NOT NULL,
            wire_two_cond_price VARCHAR(255) NOT NULL,
            wire_three_cond_qnty VARCHAR(255) NOT NULL,
            wire_three_cond_price VARCHAR(255) NOT NULL,
            pip_cond_qnty VARCHAR(255) NOT NULL,
            pip_cond_price VARCHAR(255) NOT NULL,
            one_gang_box_qnty VARCHAR(255) NOT NULL,
            one_gang_box_price VARCHAR(255) NOT NULL,
            two_gang_box_qnty VARCHAR(255) NOT NULL,
            two_gang_box_price VARCHAR(255) NOT NULL,
            three_gang_box_qnty VARCHAR(255) NOT NULL,
            three_gang_box_price VARCHAR(255) NOT NULL,
            four_gang_box_qnty VARCHAR(255) NOT NULL,
            four_gang_box_price VARCHAR(255) NOT NULL,
            one_gang_vpr_boot_qnty VARCHAR(255) NOT NULL,
            one_gang_vpr_boot_price VARCHAR(255) NOT NULL,
            twp_gang_vpr_boot_qnty VARCHAR(255) NOT NULL,
            two_gang_vpr_boot_price VARCHAR(255) NOT NULL,
            three_gang_vpr_boot_qnty VARCHAR(255) NOT NULL,
            three_gang_vpr_boot_price VARCHAR(255) NOT NULL,
            four_gang_vpr_boot_qnty VARCHAR(255) NOT NULL,
            four_gang_vpr_boot_price VARCHAR(255) NOT NULL,
            decra_single_pool_qnty VARCHAR(255) NOT NULL,
            decra_single_pool_price VARCHAR(255) NOT NULL,
            decra_three_wy_switch_qnty VARCHAR(255) NOT NULL,
            decra_three_wy_switch_price VARCHAR(255) NOT NULL,
            decra_four_wy_switch_qnty VARCHAR(255) NOT NULL,
            decra_four_wy_switch_price VARCHAR(255) NOT NULL,
            wire_conductor_qnty VARCHAR(255) NOT NULL,
            wire_conductor_price VARCHAR(255) NOT NULL,
            nm_crews_roughin_qnty VARCHAR(255) NOT NULL,
            nm_men_rough_in VARCHAR(255) NOT NULL,
            cmbnd_hrly_lbr_rate_crews_roughin VARCHAR(255) NOT NULL,
            nm_crews_doing_final VARCHAR(255) NOT NULL,
            nm_men_pr_final VARCHAR(255) NOT NULL,
            cmbnd_hrly_rate_final_crews VARCHAR(255) NOT NULL,
            nm_eight_hr_for_roughin VARCHAR(255) NOT NULL,
            avg_mnt_to_wire_sw VARCHAR(255) NOT NULL,
            prcntge_without_switch  VARCHAR(255) NOT NULL,
            mnt_pr_home_seal_switch_vpr_brr VARCHAR(255) NOT NULL,
            mnt_repair_dmg_switch_box VARCHAR(255) NOT NULL,
            nm_eight_days_roughin VARCHAR(255) NOT NULL,
            prcntg_eliminating_sw_con_final VARCHAR(255) NOT NULL,
            nm_home_cmpltd_pr_yr VARCHAR(255) NOT NULL,
            trgt_gross_prft_dlr VARCHAR(255) NOT NULL,
            mnt_in_hour int(20) NOT NULL,
            total_nm_sw_in_home VARCHAR(100) NOT NULL,
            roughgin_lbr_pr_home VARCHAR(100) NOT NULL,
            roughin_hr_svd_pr_home_no_leg VARCHAR(100) NOT NULL,
            mnt_pr_home_roughin_sw VARCHAR(100) NOT NULL,
            roughin_mnt_pr_sw VARCHAR(100) NOT NULL,
            fnl_lbr_hr_pr_home VARCHAR(100) NOT NULL,
            fnl_hr_svd_pr_home_eliminating_sw VARCHAR(100) NOT NULL, 
            mnt_conct_sw_fnl VARCHAR(100) NOT NULL,                    
            fnl_mnt_pr_sw VARCHAR(100) NOT NULL, es_completed_yr VARCHAR(220) NOT NULL,
            ms_feature_sell_price VARCHAR(100) NOT NULL,
            ms_feature_sell_price_cntrctr VARCHAR(100) NOT NULL,
            ms_paired_sw_cost VARCHAR(100) NOT NULL,
            ms_build_prft_mrgn_cntrctr_price VARCHAR(200) NOT NULL,
            zn_build_prft_mrgn_cntrctr_price VARCHAR(200) NOT NULL,
            ps_build_prft_mrgn_cntrctr_price VARCHAR(200) NOT NULL,            
            ms_prcnt_home_buyer VARCHAR(100) NOT NULL,
            ms_prcnt_home_buyer_cntrctr VARCHAR(100) NOT NULL,
            ms_nm_purchased_pr_home VARCHAR(100) NOT NULL,
            ms_nm_purchased_pr_home_cntrctr VARCHAR(100) NOT NULL,
            ms_gross_proftit VARCHAR(100) NOT NULL,
            ms_total_purchase VARCHAR(100) NOT NULL,
            ms_profit_dlr VARCHAR(100) NOT NULL,
            option_home_completed VARCHAR(100) NOT NULL,
            zn_feature_sell_price VARCHAR(100) NOT NULL,
            zn_feature_sell_price_cntrctr VARCHAR(100) NOT NULL,
            zn_paired_sw_cost VARCHAR(100) NOT NULL,
            zn_prcnt_home_buyer VARCHAR(100) NOT NULL,
            zn_prcnt_home_buyer_cntrctr VARCHAR(100) NOT NULL,
            zn_nm_purchased_pr_home VARCHAR(100) NOT NULL,
            zn_nm_purchased_pr_home_cntrctr VARCHAR(100) NOT NULL,
            zn_gross_proftit VARCHAR(100) NOT NULL,
            zn_total_purchase VARCHAR(100) NOT NULL,
            zn_profit_dlr VARCHAR(100) NOT NULL,
            ps_feature_sell_price VARCHAR(100) NOT NULL,
            ps_feature_sell_price_cntrctr VARCHAR(100) NOT NULL,
            ps_paired_sw_cost VARCHAR(100) NOT NULL,
            ps_prcnt_home_buyer VARCHAR(100) NOT NULL,
            ps_nm_purchased_pr_home VARCHAR(100) NOT NULL,
            ps_nm_purchased_pr_home_cntrctr VARCHAR(100) NOT NULL,
            ps_gross_proftit VARCHAR(100) NOT NULL,
            ps_total_purchase VARCHAR(100) NOT NULL,
            ps_profit_dlr VARCHAR(100) NOT NULL,
            sum_ms_zn_ps VARCHAR(100) NOT NULL,available_wrk_day_pr_yr VARCHAR(100) NOT NULL,
            ms_total_purchase_cntrctr VARCHAR(200) NOT NULL,
            zn_total_purchase_cntrctr VARCHAR(200) NOT NULL,
            ps_total_purchase_cntrctr VARCHAR(200) NOT NULL,
            ms_gross_proftit_cntrctr VARCHAR(200) NOT NULL,
            zn_gross_proftit_cntrctr VARCHAR(200) NOT NULL,
            ps_gross_proftit_cntrctr VARCHAR(200) NOT NULL,
            sum_ms_zn_ps_cntrctr VARCHAR(200) NOT NULL,
            tr_labor_rate VARCHAR(100) NOT NULL,  
            estimate_trgt_grs_prft VARCHAR(100) NOT NULL,    
            lbr_rate_journyman VARCHAR(100) NOT NULL,     
            builder_share VARCHAR(100) NOT NULL,    
            gc_profit_dsire VARCHAR(100) NOT NULL, 
            gc_available_wrk_day_pr_yr VARCHAR(100) NOT NULL, 
            tr_wire2cond_total VARCHAR(100) NOT NULL,            
            tr_wire3cond_total VARCHAR(100) NOT NULL,
            tr_pipe_conduit_total VARCHAR(100) NOT NULL,
            tr_one_gang_box_total VARCHAR(100) NOT NULL,
            tr_two_gang_box_total VARCHAR(100) NOT NULL,
            tr_three_gang_box_total VARCHAR(100) NOT NULL,
            tr_four_gang_box_total VARCHAR(100) NOT NULL,
            tr_one_gang_vpr_bt_total VARCHAR(100) NOT NULL,
            tr_two_gang_vpr_bt_total VARCHAR(100) NOT NULL,
            tr_three_gang_vpr_bt_total VARCHAR(100) NOT NULL,
            tr_four_gang_vpr_bt_total VARCHAR(100) NOT NULL,
            dec_snglepol_sw_total VARCHAR(100) NOT NULL,
            dec_three_wy_sw_total VARCHAR(100) NOT NULL,
            dec_four_wy_sw_total VARCHAR(100) NOT NULL,
            wire_connctr_stple_total VARCHAR(100) NOT NULL,
            tr_mtrial_cst_pr_instltion VARCHAR(100) NOT NULL,
            tr_mtrial_cst_pr_switch VARCHAR(100) NOT NULL,
            tr_nm_sw_pr_home VARCHAR(100) NOT NULL,
            tr_roughin_hr_svd_pr_home_no_leg VARCHAR(100) NOT NULL,
            tr_mnt_instl_vpr_barriar VARCHAR(100) NOT NULL,
            tr_mnt_dmge_sw_loc VARCHAR(100) NOT NULL,
            tr_fnl_hr_svd_eliminating_sw_legs VARCHAR(100) NOT NULL,
            tr_lbr_cst_pr_installtion VARCHAR(100) NOT NULL,
            tr_lbr_cst_pr_sw VARCHAR(100) NOT NULL,
            tr_matrial_and_lbr_cst VARCHAR(100) NOT NULL,
            tr_installed_sw_cst VARCHAR(100) NOT NULL,
            cost_diff_bt_tr_gc VARCHAR(100) NOT NULL,
            avl_vlue_option_exsting_bsns VARCHAR(100) NOT NULL,
            total_option_profit_exsting_bsns VARCHAR(100) NOT NULL,
            tr_annual_man_hrs VARCHAR(100) NOT NULL,
            ms_num_buyer VARCHAR(200) NOT NULL,
            zn_num_buyer VARCHAR(200) NOT NULL,
            ps_num_buyer VARCHAR(200) NOT NULL,
            ms_num_buyer_cntrctr VARCHAR(200) NOT NULL,
            zn_num_buyer_cntrctr VARCHAR(200) NOT NULL,
            ps_num_buyer_cntrctr VARCHAR(200) NOT NULL,
            hour_saved_pr_home VARCHAR(100) NOT NULL,
            profit_increase_additional VARCHAR(100) NOT NULL,
            gross_profit_from_opt VARCHAR(100) NOT NULL,
            anuual_wages_hrs VARCHAR(100) NOT NULL,
            efficiency_gain VARCHAR(100) NOT NULL,
            gc_annual_man_hrs VARCHAR(100) NOT NULL,
            gc_avg_hrs_roughin_pr_home VARCHAR(100) NOT NULL,
            tr_avg_hrs_roughin_pr_home VARCHAR(100) NOT NULL,
            tr_days_pr_roughin VARCHAR(100) NOT NULL,
            gc_days_pr_roughin VARCHAR(100) NOT NULL,
            annual_hrs_svd_exsting_roughin VARCHAR(100) NOT NULL,            
            hr_saved_faster_rough_in  VARCHAR(100) NOT NULL,
            check_yes VARCHAR(100) NOT NULL,
            total_pssble_added_roughin_pr_anm VARCHAR(100) NOT NULL,
            avg_gross_prft_pr_home VARCHAR(100) NOT NULL,
            gc_avg_option_prft_increase_instl VARCHAR(100) NOT NULL,
            annual_grs_prft_potential VARCHAR(100) NOT NULL,
            staff_svng_hr_svd_mn_avl_pr_hr VARCHAR(100) NOT NULL,
            annual_saving VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_total VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_value_pr_home VARCHAR(100) NOT NULL,            
            builder_price_price_per_home VARCHAR(100) NOT NULL,
            builder_willing_share VARCHAR(100) NOT NULL, 
            best_nm_hme_cmpltd_total_possible VARCHAR(100) NOT NULL, 
            gc_pwr_cntrl_bldr_option_prce_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_total_vlu_dlr_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_total_adjust_staff VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_adjust_staff_vlue_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_do_more_exstng_rsrces_total VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme VARCHAR(100) NOT NULL,                 
            profit_you_need VARCHAR(100) NOT NULL,                 
            PRIMARY KEY  (id)
           );";
    //we don't execute sql directly
    //we are calling dbDelta which cann't migrate database
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    //save the current database version for later use (on upgrade)
    add_option('estimate_table_db_version', $estimate_table_db_version);

    $installed_ver = get_option('estimate_table_db_version');
    //checking the version if similar the no change occur otherwise upgrade the version
    if ($installed_ver != $estimate_table_db_version) {
        $sql = "CREATE TABLE " . $table_name . " ( 
            id int(11) NOT NULL AUTO_INCREMENT,
            user_id BIGINT NOT NULL,
            wire_two_cond_qnty VARCHAR(255) NOT NULL,
            wire_two_cond_price VARCHAR(255) NOT NULL,
            wire_three_cond_qnty VARCHAR(255) NOT NULL,
            wire_three_cond_price VARCHAR(255) NOT NULL,
            pip_cond_qnty VARCHAR(255) NOT NULL,
            pip_cond_price VARCHAR(255) NOT NULL,
            one_gang_box_qnty VARCHAR(255) NOT NULL,
            one_gang_box_price VARCHAR(255) NOT NULL,
            two_gang_box_qnty VARCHAR(255) NOT NULL,
            two_gang_box_price VARCHAR(255) NOT NULL,
            three_gang_box_qnty VARCHAR(255) NOT NULL,
            three_gang_box_price VARCHAR(255) NOT NULL,
            four_gang_box_qnty VARCHAR(255) NOT NULL,
            four_gang_box_price VARCHAR(255) NOT NULL,
            one_gang_vpr_boot_qnty VARCHAR(255) NOT NULL,
            one_gang_vpr_boot_price VARCHAR(255) NOT NULL,
            twp_gang_vpr_boot_qnty VARCHAR(255) NOT NULL,
            two_gang_vpr_boot_price VARCHAR(255) NOT NULL,
            three_gang_vpr_boot_qnty VARCHAR(255) NOT NULL,
            three_gang_vpr_boot_price VARCHAR(255) NOT NULL,
            four_gang_vpr_boot_qnty VARCHAR(255) NOT NULL,
            four_gang_vpr_boot_price VARCHAR(255) NOT NULL,
            decra_single_pool_qnty VARCHAR(255) NOT NULL,
            decra_single_pool_price VARCHAR(255) NOT NULL,
            decra_three_wy_switch_qnty VARCHAR(255) NOT NULL,
            decra_three_wy_switch_price VARCHAR(255) NOT NULL,
            decra_four_wy_switch_qnty VARCHAR(255) NOT NULL,
            decra_four_wy_switch_price VARCHAR(255) NOT NULL,
            wire_conductor_qnty VARCHAR(255) NOT NULL,
            wire_conductor_price VARCHAR(255) NOT NULL,
            nm_crews_roughin_qnty VARCHAR(255) NOT NULL,
            nm_men_rough_in VARCHAR(255) NOT NULL,
            cmbnd_hrly_lbr_rate_crews_roughin VARCHAR(255) NOT NULL,
            nm_crews_doing_final VARCHAR(255) NOT NULL,
            nm_men_pr_final VARCHAR(255) NOT NULL,
            cmbnd_hrly_rate_final_crews VARCHAR(255) NOT NULL,
            nm_eight_hr_for_roughin VARCHAR(255) NOT NULL,            
            prcntge_without_switch  VARCHAR(255) NOT NULL,
            prcntge_without_switch VARCHAR(255) NOT NULL,
            mnt_pr_home_seal_switch_vpr_brr VARCHAR(255) NOT NULL,
            mnt_repair_dmg_switch_box VARCHAR(255) NOT NULL,
            nm_eight_days_roughin VARCHAR(255) NOT NULL,
            prcntg_eliminating_sw_con_final VARCHAR(255) NOT NULL,
            nm_home_cmpltd_pr_yr int(24) NOT NULL,
            trgt_gross_prft_dlr VARCHAR(255) NOT NULL,
            mnt_in_hour int(20) NOT NULL,
            total_nm_sw_in_home VARCHAR(100) NOT NULL,
            roughgin_lbr_pr_home VARCHAR(100) NOT NULL,
            roughin_hr_svd_pr_home_no_leg VARCHAR(100) NOT NULL,
            mnt_pr_home_roughin_sw VARCHAR(100) NOT NULL,
            roughin_mnt_pr_sw VARCHAR(100) NOT NULL,
            fnl_lbr_hr_pr_home VARCHAR(100) NOT NULL,
            fnl_hr_svd_pr_home_eliminating_sw VARCHAR(100) NOT NULL, 
            mnt_conct_sw_fnl VARCHAR(100) NOT NULL,                    
            fnl_mnt_pr_sw VARCHAR(100) NOT NULL, es_completed_yr VARCHAR(220) NOT NULL,
            ms_feature_sell_price VARCHAR(100) NOT NULL,
            ms_feature_sell_price_cntrctr VARCHAR(100) NOT NULL,
            ms_paired_sw_cost VARCHAR(100) NOT NULL,
            ms_num_buyer VARCHAR(200) NOT NULL,
            zn_num_buyer VARCHAR(200) NOT NULL,
            ps_num_buyer VARCHAR(200) NOT NULL,            
            ms_num_buyer_cntrctr VARCHAR(200) NOT NULL,
            zn_num_buyer_cntrctr VARCHAR(200) NOT NULL,
            ps_num_buyer_cntrctr VARCHAR(200) NOT NULL,            
            ms_build_prft_mrgn_cntrctr_price VARCHAR(200) NOT NULL,
            ms_build_prft_mrgn_cntrctr_price VARCHAR(200) NOT NULL,
            ms_build_prft_mrgn_cntrctr_price VARCHAR(200) NOT NULL,
            zn_build_prft_mrgn_cntrctr_price VARCHAR(200) NOT NULL,
            ps_build_prft_mrgn_cntrctr_price VARCHAR(200) NOT NULL,
            ms_builder_total_prchased VARCHAR(200) NOT NULL, 
            zn_builder_total_prchased VARCHAR(200) NOT NULL, 
            ps_builder_total_prchased VARCHAR(200) NOT NULL, 
            ms_builder_profit VARCHAR(200) NOT NULL, 
            zn_builder_profit VARCHAR(200) NOT NULL, 
            ps_builder_profit VARCHAR(200) NOT NULL, 
            sum_ms_zn_ps_builder_proft VARCHAR(200) NOT NULL, 
            homes_cmpltd_your_cmpny_annuly VARCHAR(200) NOT NULL, 
            ms_prcnt_home_buyer VARCHAR(100) NOT NULL,
            ms_prcnt_home_buyer_cntrctr VARCHAR(200) NOT NULL,
            ps_prcnt_home_buyer_cntrctr VARCHAR(100) NOT NULL,
            ms_nm_purchased_pr_home VARCHAR(100) NOT NULL,
            ms_nm_purchased_pr_home_cntrctr VARCHAR(100) NOT NULL,
            ms_gross_proftit VARCHAR(100) NOT NULL,
            ms_total_purchase VARCHAR(100) NOT NULL,
            ms_profit_dlr VARCHAR(100) NOT NULL,
            option_home_completed VARCHAR(100) NOT NULL,
            zn_feature_sell_price VARCHAR(100) NOT NULL,
            zn_feature_sell_price_cntrctr VARCHAR(100) NOT NULL,
            zn_paired_sw_cost VARCHAR(100) NOT NULL,
            zn_prcnt_home_buyer VARCHAR(100) NOT NULL,
            zn_prcnt_home_buyer_cntrctr VARCHAR(100) NOT NULL,
            zn_nm_purchased_pr_home VARCHAR(100) NOT NULL,
            zn_nm_purchased_pr_home_cntrctr VARCHAR(100) NOT NULL,
            zn_gross_proftit VARCHAR(100) NOT NULL,
            zn_total_purchase VARCHAR(100) NOT NULL,
            zn_profit_dlr VARCHAR(100) NOT NULL,
            ps_feature_sell_price VARCHAR(100) NOT NULL,
            ps_feature_sell_price_cntrctr VARCHAR(100) NOT NULL,
            ps_paired_sw_cost VARCHAR(100) NOT NULL,
            ps_prcnt_home_buyer VARCHAR(100) NOT NULL,
            ps_nm_purchased_pr_home VARCHAR(100) NOT NULL,
            ps_nm_purchased_pr_home_cntrctr VARCHAR(100) NOT NULL,
            ps_gross_proftit VARCHAR(100) NOT NULL,
            ps_total_purchase VARCHAR(100) NOT NULL,
            ps_profit_dlr VARCHAR(100) NOT NULL,
            sum_ms_zn_ps VARCHAR(100) NOT NULL, 
            available_wrk_day_pr_yr VARCHAR(100) NOT NULL,            
            ms_total_purchase_cntrctr VARCHAR(200) NOT NULL,
            zn_total_purchase_cntrctr VARCHAR(200) NOT NULL,
            ps_total_purchase_cntrctr VARCHAR(200) NOT NULL,            
            ms_gross_proftit_cntrctr VARCHAR(200) NOT NULL,
            zn_gross_proftit_cntrctr VARCHAR(200) NOT NULL,
            ps_gross_proftit_cntrctr VARCHAR(200) NOT NULL,            
            sum_ms_zn_ps_cntrctr VARCHAR(200) NOT NULL,  
            hour_saved_pr_home VARCHAR(100) NOT NULL,
            profit_increase_additional VARCHAR(100) NOT NULL,
            gross_profit_from_opt VARCHAR(100) NOT NULL,
            anuual_wages_hrs VARCHAR(100) NOT NULL,
            tr_labor_rate VARCHAR(100) NOT NULL,  
            estimate_trgt_grs_prft VARCHAR(100) NOT NULL,    
            lbr_rate_journyman VARCHAR(100) NOT NULL,     
            builder_share VARCHAR(100) NOT NULL,    
            gc_profit_dsire VARCHAR(100) NOT NULL, 
            gc_available_wrk_day_pr_yr VARCHAR(100) NOT NULL, 
            tr_wire2cond_total VARCHAR(100) NOT NULL,            
            tr_wire3cond_total VARCHAR(100) NOT NULL,
            tr_pipe_conduit_total VARCHAR(100) NOT NULL,
            tr_one_gang_box_total VARCHAR(100) NOT NULL,
            tr_two_gang_box_total VARCHAR(100) NOT NULL,
            tr_three_gang_box_total VARCHAR(100) NOT NULL,
            tr_four_gang_box_total VARCHAR(100) NOT NULL,
            tr_one_gang_vpr_bt_total VARCHAR(100) NOT NULL,
            tr_two_gang_vpr_bt_total VARCHAR(100) NOT NULL,
            tr_three_gang_vpr_bt_total VARCHAR(100) NOT NULL,
            tr_four_gang_vpr_bt_total VARCHAR(100) NOT NULL,
            dec_snglepol_sw_total VARCHAR(100) NOT NULL,
            dec_three_wy_sw_total VARCHAR(100) NOT NULL,
            dec_four_wy_sw_total VARCHAR(100) NOT NULL,
            wire_connctr_stple_total VARCHAR(100) NOT NULL,
            tr_mtrial_cst_pr_instltion VARCHAR(100) NOT NULL,
            tr_mtrial_cst_pr_switch VARCHAR(100) NOT NULL,
            tr_nm_sw_pr_home VARCHAR(100) NOT NULL,
            tr_roughin_hr_svd_pr_home_no_leg VARCHAR(100) NOT NULL,
            tr_mnt_instl_vpr_barriar VARCHAR(100) NOT NULL,
            tr_mnt_dmge_sw_loc VARCHAR(100) NOT NULL,
            tr_fnl_hr_svd_eliminating_sw_legs VARCHAR(100) NOT NULL,
            tr_lbr_cst_pr_installtion VARCHAR(100) NOT NULL,
            tr_lbr_cst_pr_sw VARCHAR(100) NOT NULL,
            tr_matrial_and_lbr_cst VARCHAR(100) NOT NULL,
            tr_installed_sw_cst VARCHAR(100) NOT NULL,
            cost_diff_bt_tr_gc VARCHAR(100) NOT NULL,
            avl_vlue_option_exsting_bsns VARCHAR(100) NOT NULL,
            total_option_profit_exsting_bsns VARCHAR(100) NOT NULL,
            tr_annual_man_hrs VARCHAR(100) NOT NULL,
            gc_annual_man_hrs VARCHAR(100) NOT NULL,
            gc_avg_hrs_roughin_pr_home VARCHAR(100) NOT NULL,
            tr_avg_hrs_roughin_pr_home VARCHAR(100) NOT NULL,
            tr_days_pr_roughin VARCHAR(100) NOT NULL,
            gc_days_pr_roughin VARCHAR(100) NOT NULL,
            annual_hrs_svd_exsting_roughin VARCHAR(100) NOT NULL,
            total_pssble_added_roughin_pr_anm VARCHAR(100) NOT NULL,
            avg_gross_prft_pr_home VARCHAR(100) NOT NULL,
            gc_avg_option_prft_increase_instl VARCHAR(100) NOT NULL,
            annual_grs_prft_potential VARCHAR(100) NOT NULL,
            staff_svng_hr_svd_mn_avl_pr_hr VARCHAR(100) NOT NULL,
            annual_saving VARCHAR(100) NOT NULL,
            check_yes VARCHAR(100) NOT NULL,
            hr_saved_faster_rough_in  VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_total VARCHAR(100) NOT NULL,
            best_nm_hme_cmpltd_total_possible VARCHAR(100) NOT NULL, 
            gc_pwr_cntrl_value_pr_home VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_bldr_option_prce_pr_hme VARCHAR(100) NOT NULL,
            builder_price_price_per_home VARCHAR(200) NOT NULL,            
            builder_willing_share VARCHAR(200) NOT NULL,            
            gc_pwr_cntrl_total_vlu_dlr_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_total_adjust_staff VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_adjust_staff_vlue_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_do_more_exstng_rsrces_total VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme VARCHAR(100) NOT NULL,
            gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme VARCHAR(100) NOT NULL,         
            profit_you_need VARCHAR(100) NOT NULL,                             
            PRIMARY KEY  (id)
           );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        update_option('estimate_table_db_version', $estimate_table_db_version);
    }
}

register_activation_hook(__FILE__, 'estimate_table_install');

//updating plugin
function estimate_table_updata_db_check() {
    global $estimate_table_db_version;
    if (get_site_option('estimate_table_db_version') != $estimate_table_db_version) {
        estimate_table_install();
    }
}

add_action('plugins_loaded', 'estimate_table_updata_db_check');
/*
 * Estimate form backend
 */

class Estimate_List_Table extends WP_List_Table {

    /**
     * [REQUIRED] You must declare constructor and give some basic params
     */
    function __construct() {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'estimate',
            'plural' => 'estimates',
        ));
    }

    /**
     * [REQUIRED] this is a default column renderer
     *
     * @param $item - row (key, value array)
     * @param $column_name - string (key)
     * @return HTML
     */
    function column_default($item, $column_name) {
        return $item[$column_name];
    }

    /**
     * [OPTIONAL] this is example, how to render column with actions,
     * when you hover row "Edit | Delete" links showed
     *
     * @param $item - row (key, value array)
     * @return HTML
     */
    function column_name($item) {
        // links going to /admin.php?page=[your_plugin_page][&other_params]
        // notice how we used $_REQUEST['page'], so action will be done on curren page
        // also notice how we use $this->_args['singular'] so in this example it will
        // be something like &estimate=2
        $actions = array(
            'edit' => sprintf('<a href="?page=estimates_form&id=%s">%s</a>', $item['id'], __('Edit', 'estimate_table')),
            'delete' => sprintf('<a href="?page=%s&action=delete&id=%s">%s</a>', $_REQUEST['page'], $item['id'], __('Delete', 'estimate_table')),
        );

        return sprintf('%s %s', $item['id'], $this->row_actions($actions)
        );
    }

    /**
     * [REQUIRED] this is how checkbox column renders
     *
     * @param $item - row (key, value array)
     * @return HTML
     */
    function column_cb($item) {
        return sprintf(
                '<input type="checkbox" name="id[]" value="%s" />', $item['id']
        );
    }

    /**
     * [REQUIRED] This method return columns to display in table
     * you can skip columns that you do not want to show
     * like content, or description
     *
     * @return array
     */
    function get_columns() {
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'name' => 'ID',
            //'user_id' => __('User ID', 'estimate_table'),
            'wire_two_cond_qnty' => __('Two conductor wire', 'estimate_table'),
            'wire_two_cond_price' => __('Two conductor wire price', 'estimate_table'),
            'wire_three_cond_qnty' => __('Three conductor wire', 'estimate_table'),
            'wire_three_cond_price' => __('Three conductor wire price', 'estimate_table'),
        );
        return $columns;
    }

    /**
     * [OPTIONAL] This method return columns that may be used to sort table
     * all strings in array - is column names
     * notice that true on name column means that its default sort
     *
     * @return array
     */
    function get_sortable_columns() {
        $sortable_columns = array(
            'ID' => array('id', true),
            //'user_id' => array('user_id', true),
            'wire_two_cond_qnty' => array('wire_two_cond_price', false),
        );
        return $sortable_columns;
    }

    /**
     * [OPTIONAL] Return array of bult actions if has any
     *
     * @return array
     */
    function get_bulk_actions() {
        $actions = array(
            'delete' => 'Delete'
        );
        return $actions;
    }

    /**
     * [OPTIONAL] This method processes bulk actions
     * it can be outside of class
     * it can not use wp_redirect coz there is output already
     * in this example we are processing delete action
     * message about successful deletion will be shown on page in next part
     */
    function process_bulk_action() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'estimate'; // do not forget about tables prefix

        if ('delete' === $this->current_action()) {
            $ids = isset($_REQUEST['id']) ? $_REQUEST['id'] : array();
            if (is_array($ids))
                $ids = implode(',', $ids);

            if (!empty($ids)) {
                $wpdb->query("DELETE FROM $table_name WHERE id IN($ids)");
            }
        }
    }

    /**
     * [REQUIRED] This is the most important method
     *
     * It will get rows from database and prepare them to be showed in table
     */
    function prepare_items() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'estimate'; // do not forget about tables prefix

        $per_page = 10; // constant, how much records will be shown per page

        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();

        // here we configure table headers, defined in our methods
        $this->_column_headers = array($columns, $hidden, $sortable);

        // [OPTIONAL] process bulk action if any
        $this->process_bulk_action();

        // will be used in pagination settings
        $total_items = $wpdb->get_var("SELECT COUNT(id) FROM $table_name");

        // prepare query params, as usual current page, order by and order direction
        $paged = isset($_REQUEST['paged']) ? max(0, intval($_REQUEST['paged']) - 1) : 0;
        $orderby = (isset($_REQUEST['orderby']) && in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns()))) ? $_REQUEST['orderby'] : 'user_id';
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : 'asc';

        // [REQUIRED] define $items array
        // notice that last argument is ARRAY_A, so we will retrieve array
        $this->items = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged), ARRAY_A);

        // [REQUIRED] configure pagination
        $this->set_pagination_args(array(
            'total_items' => $total_items, // total items defined above
            'per_page' => $per_page, // per page constant defined at top of method
            'total_pages' => ceil($total_items / $per_page) // calculate pages count
        ));
    }

}

/**
 * PART 3. Admin page
 * ============================================================================
 *
 * In this part you are going to add admin page for custom table
 *
 * http://codex.wordpress.org/Administration_Menus
 */

/**
 * admin_menu hook implementation, will add pages to list estimates and to add new one
 */
function estimate_table_admin_menu() {
    add_menu_page(__('Calculators', 'estimate_table'), __('Calculators', 'estimate_table'), 'activate_plugins', 'estimates', 'estimate_table_estimates_page_handler');
    add_submenu_page('estimates', __('Calculators', 'estimate_table'), __('Calculators', 'estimate_table'), 'activate_plugins', 'estimates', 'estimate_table_estimates_page_handler');

    // add new will be described in next part
    add_submenu_page('estimates', __('Add new', 'estimate_table'), __('Add new', 'estimate_table'), 'activate_plugins', 'estimates_form', 'estimate_table_estimates_form_page_handler');
}

add_action('admin_menu', 'estimate_table_admin_menu');

/**
 * List page handler
 *
 * This function renders our custom table
 * Notice how we display message about successfull deletion
 * Actualy this is very easy, and you can add as many features
 * as you want.
 *
 * Look into /wp-admin/includes/class-wp-*-list-table.php for examples
 */
function estimate_table_estimates_page_handler() {
    global $wpdb;

    $table = new Estimate_List_Table();
    $table->prepare_items();

    $message = '';
    if ('delete' === $table->current_action()) {
        $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('Items deleted: %d', 'estimate_table'), count($_REQUEST['id'])) . '</p></div>';
    }
    ?>
    <div class="wrap">

        <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
        <h2><?php _e('Estimates', 'estimate_table') ?> 
        </h2>
        <?php echo $message; ?>

        <form id="estimates-table" method="GET">
            <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>"/>
            <?php $table->display() ?>
        </form>

    </div>
    <?php
}

/**
 * PART 4. Form for adding andor editing row
 * ============================================================================
 *
 * In this part you are going to add admin page for adding andor editing items
 * You cant put all form into this function, but in this example form will
 * be placed into meta box, and if you want you can split your form into
 * as many meta boxes as you want
 *
 * http://codex.wordpress.org/Data_Validation
 * http://codex.wordpress.org/Function_Reference/seleestimated
 */

/**
 * Form page handler checks is there some data posted and tries to save it
 * Also it renders basic wrapper in which we are callin meta box render
 */
function estimate_table_estimates_form_page_handler() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'estimate'; // do not forget about tables prefix

    $message = '';
    $notice = '';

    // this is default $item which will be used for new records
    $default = array(
        'id' => 0,
        'wire_two_cond_qnty' => null,
        'wire_two_cond_price' => null,
        'wire_three_cond_qnty' => null,
        'wire_three_cond_price' => null,
        'pip_cond_qnty' => null,
        'pip_cond_price' => null,
        'one_gang_box_qnty' => null,
        'one_gang_box_price' => null,
        'two_gang_box_qnty' => null,
        'two_gang_box_price' => null,
        'three_gang_box_qnty' => null,
        'three_gang_box_price' => null,
        'four_gang_box_qnty' => null,
        'four_gang_box_price' => null,
        'one_gang_vpr_boot_qnty' => null,
        'one_gang_vpr_boot_price' => null,
        'twp_gang_vpr_boot_qnty' => null,
        'two_gang_vpr_boot_price' => null,
        'three_gang_vpr_boot_qnty' => null,
        'three_gang_vpr_boot_price' => null,
        'four_gang_vpr_boot_qnty' => null,
        'four_gang_vpr_boot_price' => null,
        'decra_single_pool_qnty' => null,
        'decra_single_pool_price' => null,
        'decra_three_wy_switch_qnty' => null,
        'decra_three_wy_switch_price' => null,
        'decra_four_wy_switch_qnty' => null,
        'decra_four_wy_switch_price' => null,
        'wire_conductor_qnty' => null,
        'wire_conductor_price' => null,
        'nm_crews_roughin_qnty' => null,
        'nm_men_rough_in' => null,
        'cmbnd_hrly_lbr_rate_crews_roughin' => null,
        'nm_crews_doing_final' => null,
        'nm_men_pr_final' => null,
        'cmbnd_hrly_rate_final_crews' => null,
        'nm_eight_hr_for_roughin' => null,
        'prcntge_without_switch' => null,
        'prcntge_without_switch' => null,
        'mnt_pr_home_seal_switch_vpr_brr' => null,
        'mnt_repair_dmg_switch_box' => null,
        'nm_eight_days_roughin' => null,
        'prcntg_eliminating_sw_con_final' => null,
        'nm_home_cmpltd_pr_yr' => null,
        'trgt_gross_prft_dlr' => null,
        'mnt_in_hour' => null,
        'total_nm_sw_in_home' => null,
        'roughgin_lbr_pr_home' => null,
        'roughin_hr_svd_pr_home_no_leg' => null,
        'mnt_pr_home_roughin_sw' => null,
        'roughin_mnt_pr_sw' => null,
        'fnl_lbr_hr_pr_home' => null,
        'fnl_hr_svd_pr_home_eliminating_sw' => null,
        'mnt_conct_sw_fnl' => null,
        'fnl_mnt_pr_sw' => null, 'ms_feature_sell_price' => null,
        'ms_paired_sw_cost' => null,
        'ms_prcnt_home_buyer ' => null,
        'ms_nm_purchased_pr_home ' => null,
        'ms_gross_proftit ' => null,
        'ms_build_prft_mrgn_cntrctr_price ' => null,
        'zn_build_prft_mrgn_cntrctr_price ' => null,
        'ps_build_prft_mrgn_cntrctr_price ' => null,
        'ms_total_purchase ' => null,
        'ms_profit_dlr ' => null,
        'zn_feature_sell_price ' => null,
        'zn_paired_sw_cost ' => null,
        'zn_prcnt_home_buyer ' => null,
        'zn_nm_purchased_pr_home ' => null,
        'zn_gross_proftit ' => null,
        'zn_total_purchase ' => null,
        'zn_profit_dlr ' => null,
        'ps_feature_sell_price ' => null,
        'ps_paired_sw_cost ' => null,
        'ps_prcnt_home_buyer ' => null,
        'ps_nm_purchased_pr_home ' => null,
        'ps_gross_proftit ' => null,
        'ps_total_purchase ' => null,
        'ps_profit_dlr ' => null,
        'sum_ms_zn_ps ' => null, 'available_wrk_day_pr_yr' => null,
        'tr_labor_rate' => null,
        'builder_share' => null,
        'gc_profit_dsire' => null,
        'gc_available_wrk_day_pr_yr ' => null,
        //'gc_mtrial_cst_pr_instltion ' => null,
//            'gc_mtrial_cst_pr_switch ' => null,
//            'gc_dec_snglepol_sw_total ' => null,
//            'gc_dec_three_wy_sw_total ' => null,
//            'gc_dec_four_wy_sw_total ' => null,
//            'gc_matrial_and_lbr_cst ' => null,
//            'gc_installed_sw_cst ' => null,
        'tr_wire2cond_total ' => null,
        'tr_wire3cond_total ' => null,
        'tr_pipe_conduit_total ' => null,
        'tr_one_gang_box_total ' => null,
        'tr_two_gang_box_total ' => null,
        'tr_three_gang_box_total ' => null,
        'tr_four_gang_box_total ' => null,
        'tr_one_gang_vpr_bt_total ' => null,
        'tr_two_gang_vpr_bt_total ' => null,
        'tr_three_gang_vpr_bt_total ' => null,
        'tr_four_gang_vpr_bt_total ' => null,
        'dec_snglepol_sw_total ' => null,
        'dec_three_wy_sw_total ' => null,
        'dec_four_wy_sw_total ' => null,
        'wire_connctr_stple_total ' => null,
        'tr_mtrial_cst_pr_instltion ' => null,
        'tr_mtrial_cst_pr_switch ' => null,
        'tr_nm_sw_pr_home ' => null,
        'tr_roughin_hr_svd_pr_home_no_leg ' => null,
        'tr_mnt_instl_vpr_barriar ' => null,
        'tr_mnt_dmge_sw_loc ' => null,
        'tr_fnl_hr_svd_eliminating_sw_legs ' => null,
        'tr_lbr_cst_pr_installtion ' => null,
        'tr_lbr_cst_pr_sw ' => null,
        'tr_matrial_and_lbr_cst ' => null,
        'tr_installed_sw_cst ' => null,
        'cost_diff_bt_tr_gc ' => null,
        'avl_vlue_option_exsting_bsns ' => null,
        'total_option_profit_exsting_bsns ' => null,
        'tr_annual_man_hrs ' => null,
        'gc_annual_man_hrs ' => null,
        'gc_avg_hrs_roughin_pr_home ' => null,
        'tr_avg_hrs_roughin_pr_home ' => null,
        'tr_days_pr_roughin ' => null,
        'gc_days_pr_roughin ' => null,
        'annual_hrs_svd_exsting_roughin ' => null,
        'total_pssble_added_roughin_pr_anm ' => null,
        'avg_gross_prft_pr_home ' => null,
        'gc_avg_option_prft_increase_instl ' => null,
        'annual_grs_prft_potential ' => null,
        'staff_svng_hr_svd_mn_avl_pr_hr ' => null,
        'annual_saving ' => null,
        'gc_pwr_cntrl_total' => null,
        'gc_pwr_cntrl_value_pr_home' => null,
        'gc_pwr_cntrl_bldr_option_prce_pr_hme' => null,
        'gc_pwr_cntrl_total_vlu_dlr_pr_hme' => null,
        'gc_pwr_cntrl_total_adjust_staff' => null,
        'gc_pwr_cntrl_adjust_staff_vlue_pr_hme' => null,
        'gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme' => null,
        'gc_pwr_cntrl_do_more_exstng_rsrces_total' => null,
        'gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme' => null,
        'gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme' => null,
            //'avg_dy_roughin_wired_sw ' => null,
            //'ms_roughin_pr_crews_pr_yr_wsw ' => null,
            //'dys_svd_pr_roughin_gc ' => null,
            //'nm_dys_requied_roughin_gc ' => null,
            //'nm_roughin_psble_pr_crew_pr_yr_gc ' => null,
            //'annul_increase_cmpltd_gc_pr_crew ' => null,
            //'trgt_gross_prft_dlr_pr_home ' => null,
//            'annul_gross_prft_increasePr_crews ' => null,
//            'annul_grs_prft_cmplting_additional ' => null,
//            'cst_sving_wsw_vs_gc ' => null,
//            'cst_sving_pr_yr ' => null,
//            'prft_from_gc_added_pr_home ' => null,
//            'prft_from_gc_added_pr_yr ' => null,
//            'change_in_annual_grs_prft ' => null,
    );

    // here we are verifying does this request is post back and have correct nonce
    if (wp_verify_nonce($_REQUEST['nonce'], basename(__FILE__))) {
        // combine our default item with request params
        $item = shortcode_atts($default, $_REQUEST);
        // validate data, and if all ok save item to database
        // if id is zero insert otherwise update
        $item_valid = estimate_table_validate_estimate($item);
        if ($item_valid === true) {
            if ($item['id'] == 0) {
                $result = $wpdb->insert($table_name, $item);
                $item['id'] = $wpdb->insert_id;
                if ($result) {
                    $message = __('Item was successfully saved', 'estimate_table');
                } else {
                    $notice = __('There was an error while saving item', 'estimate_table');
                }
            } else {
                $result = $wpdb->update($table_name, $item, array('id' => $item['id']));
                if ($result) {
                    $message = __('Item was successfully updated', 'estimate_table');
                } else {
                    $notice = __('There was an error while updating item', 'estimate_table');
                }
            }
        } else {
            // if $item_valid not true it contains error message(s)
            $notice = $item_valid;
        }
    } else {
        // if this is not post back we load item to edit or give new one to create
        $item = $default;
        if (isset($_REQUEST['id'])) {
            $item = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id=%d", $_REQUEST['id']), ARRAY_A);
            if (!$item) {
                $item = $default;
                $notice = __('Item not found', 'estimate_table');
            }
        }
    }

    // here we adding our custom meta box
    add_meta_box('estimates_form_meta_box', 'Estimate Form', 'estimate_table_estimates_form_meta_box_handler', 'estimate', 'normal', 'default');
    ?>
    <div class="wrap">
        <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
        <h2><?php _e('Estimate', 'estimate_table') ?> <a class="add-new-h2"
                                                         href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=estimates'); ?>"><?php _e('back to list', 'estimate_table') ?></a>
        </h2>

        <?php if (!empty($notice)): ?>
            <div id="notice" class="error"><p><?php echo $notice ?></p></div>
        <?php endif; ?>
        <?php if (!empty($message)): ?>
            <div id="message" class="updated"><p><?php echo $message ?></p></div>
        <?php endif; ?>

        <form id="form" method="POST">
            <input type="hidden" name="nonce" value="<?php echo wp_create_nonce(basename(__FILE__)) ?>"/>
            <?php /* NOTICE: here we storing id to determine will be item added or updated */ ?>
            <input type="hidden" name="id" value="<?php echo $item['id'] ?>"/>

            <div class="metabox-holder" id="poststuff">
                <div id="post-body">
                    <div id="post-body-content">
                        <?php /* And here we call our custom meta box */ ?>
                        <?php do_meta_boxes('estimate', 'normal', $item); ?>
                        <input type="submit" value="<?php _e('Save', 'estimate_table') ?>" id="submit" class="button-primary" name="submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
}

/**
 * This function renders our custom meta box
 * $item is row
 *
 * @param $item
 */
function estimate_table_estimates_form_meta_box_handler($item) {
    ?>

    <table cellspacing="1" cellpadding="1" style="width: 100%;" class="form-table">
        <tbody>
            <tr class="form-field">
                <th valign="top" scope="row" style="width: 30%" >
                    <label for="wire_two_cond_qnty"><?php _e('Wire - 2 conductor (price per foot or meter)', 'estimate_table') ?></label>
                </th>
                <td>
                    <input id="wire_two_cond_qnty" name="wire_two_cond_qnty"  type="text" style="width: 15%" value="<?php echo esc_attr($item['wire_two_cond_qnty']) ?>"
                           class="code" placeholder="<?php _e('Quantity', 'estimate_table') ?>" required>
                    <input id="wire_two_cond_price" name="wire_two_cond_price"  type="text" style="width: 15%" value="<?php echo esc_attr($item['wire_two_cond_price']) ?>"
                           class="code" placeholder="<?php _e('Price', 'estimate_table') ?>" required>
                </td>
            </tr>

        </tbody>
    </table>
    <?php
}

/**
 * Simple function that validates data and retrieve bool on success
 * and error message(s) on error
 *
 * @param $item
 * @return bool|string
 */
function estimate_table_validate_estimate($item) {
    $messages = array();

    if (empty($item['wire_two_cond_qnty']))
        $messages[] = __('Wire 2 Cond Required', 'estimate_table');
    if (empty($item['wire_two_cond_price']))
        $messages[] = __('Wire 2 Conductor Wrong Price Wrong', 'estimate_table');
    if (empty($item['wire_three_cond_qnty']))
        $messages[] = __('Wire 3 Conductor Wrong', 'estimate_table');
    //if(!empty($item['age']) && !absint(intval($item['age'])))  $messages[]=__('Age can not be less than zero');
    //if(!empty($item['age']) && !preg_match('/[0-9]+/', $item['age'])) $messages[]=__('Age must be number');
    //...

    if (empty($messages))
        return true;
    return implode('<br />', $messages);
}

/**
 * Do not forget about translating your plugin, use __('english string', 'your_uniq_plugin_name') to retrieve translated string
 * and _e('english string', 'your_uniq_plugin_name') to echo it
 * in this example plugin your_uniq_plugin_name == estimate_table
 *
 * to create translation file, use poedit FileNew catalog...
 * Fill name of project, add "." to path (ENSURE that it was added - must be in list)
 * and on last tab add "__" and "_e"
 *
 * Name your file like this: [my_plugin]-[ru_RU].po
 *
 * http://codex.wordpress.org/Writing_a_Plugin#Internationalizing_Your_Plugin
 * http://codex.wordpress.org/I18n_for_WordPress_Developers
 */
function estimate_table_languages() {
    load_plugin_textdomain('estimate_table', false, dirname(plugin_basename(__FILE__)));
}

add_action('init', 'estimate_table_languages');

//creating second form table in database
// option form



include_once( plugin_dir_path(__FILE__) . 'includes/goconexClass.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/comparisonClass.php' );
/*
 * Estimate form code start here
 */
include_once( plugin_dir_path(__FILE__) . 'includes/esitmate_partails/step1.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/option_partails/optionStep3.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/esitmate_partails/backend-settings.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/esitmate_partails/backend-settings-slider-values.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/option_partails/backend-settings-slider-values.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/esitmate_partails/backend-heading.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/esitmate_partails/backend-content.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/esitmate_partails/process.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/report/save_report.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/report/save_report_process.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/email.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/users/user-list.php' );
//include_once( plugin_dir_path(__FILE__) . 'includes/sugar_crm/sugar_crm.php' );
//excel sheet second options
//include_once( plugin_dir_path(__FILE__) . 'includes/option_partails/optionStep1.php' );
include_once( plugin_dir_path(__FILE__) . 'includes/option_partails/processOption.php' );

//excel sheet second results comparison
include_once( plugin_dir_path(__FILE__) . 'includes/results/process_result.php' );

//include_once( plugin_dir_path(__FILE__) . 'includes/results/result_sheet_one.php' );

function dwp_cf_shortcode() {
    ob_start();
    html_form_code();
    return ob_get_clean();
}

add_shortcode('add_estimate_form', 'dwp_cf_shortcode');
/*
 * Estimate form code end here
 */

//option form shortcode


function dwp_include_builder_form() {
    ob_start();

    builder_form_process();
    builder_form_html();
    return ob_get_clean();
}

add_shortcode('add_builder_form', 'dwp_include_builder_form');

function dwp_include_option_form() {
    ob_start();
    option_form_html();
    return ob_get_clean();
}

add_shortcode('add_option_form', 'dwp_include_option_form');

//comparison form
function comparison_form_html() {
    ?>

    <form id="frmComparison" name="frmComparison" method="POST" action="#" enctype="multipart/form-data" role="form">
        <div class="col-sm-12 padding-top-20px">
            <div class="row">
                <div class="col-sm-7 padding-left-right-2">
                    <strong>Do More With Your Existing People Resources</strong>
                </div>
                <div class="col-sm-2 padding-left-right-2">
                    <strong>Traditional</strong>
                </div>
                <div class="col-sm-2 padding-left-right-2">
                    <strong>GoConex</strong>
                </div>
            </div>
        </div>
        <div class="col-sm-12 padding-top-20px">
            <div class="row">
                <div class="col-sm-7 padding-left-right-2"> 
                    <label class="control-label">Available work days per year (allowing 2 weeks vacation)</label>
                </div>
                <div class="col-sm-2 padding-left-right-2"> 
                    <input name="txtAvailbleWrkDay" type="text"  class="form-control" id="txtAvailbleWrkDay" placeholder="244" value="244"/>
                </div>
                <div class="col-sm-2 padding-left-right-2"> 
                    <input name="txtGC_avlWrkD_prYr" type="text"  class="form-control" id="txtGC_avlWrkD_prYr" placeholder="244" value="244"/>
                </div>
            </div>
        </div>

        <div class="col-sm-12 padding-top-20px">
            <div class="row">
                <div class="col-sm-7 padding-left-right-2"> 
                    <label class="control-label">Labour Rate</label>
                </div>
                <div class="col-sm-4 padding-left-right-2">
                    <input name="txt_lbr_rate" type="text"  class="form-control" id="txt_lbr_rate" placeholder="$36.00" value="36.00"/>
                </div>
            </div>
        </div>
        <div class="col-sm-12 padding-top-20px">
            <div class="row">
                <div class="col-sm-7 padding-left-right-2"> 
                    <label class="control-label">What % Would The Builder Share?</label>
                </div>
                <div class="col-sm-4 padding-left-right-2"> 
                    <input name="txtPrcnt_builderShare" type="text"  class="form-control" id="txtPrcnt_builderShare" placeholder="50%" value="50"/>
                </div>
            </div>
        </div>
        <div class="col-sm-12 padding-top-20px">
            <div class="row">
                <div class="col-sm-7 padding-left-right-2"> 
                    <label class="control-label">What profit outcome is desired to switch your business to the value of GoConex?</label>
                </div>
                <div class="col-sm-4 padding-left-right-2"> 
                    <input name="txtPrftDsireGC" type="text" class="form-control" id="txtPrftDsireGC" placeholder="$50000" value="50000" />
                </div>
            </div>
        </div>

                                                                                                                                                                                                                                                                                            <!--- <tr>
                                                                                                                                                                                                                                                                                            <td>Wire conectors & staples</td>
                                                                                                                                                                                                                                                                                            <td><input type="text" name="goConexWireConStple" id="goConexWireConStple" /></td>
                                                                                                                                                                                                                                                                                            </tr> -->
        <div class="col-sm-12 padding-top-20px">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-7 padding-left-right-2"> 
                    <input type="submit" name="btnComprison" id="btnComprison" value="Calculate">
                </div>
            </div>
        </div>
    </form>
    <?php
}

function comparison_form_process() {
    if (isset($_POST['btnComprison'])) {
        $test_comp = new comparisonClass();

//        $test_comp->set_goConex_single_switch_price($_POST['goConexSnglPole']);
//        $test_comp->set_goConex_three_switch_price($_POST['goConexDcro3Wy']);
//        $test_comp->set_goConex_four_way_switch($_POST['goConexDcro4Wy']);
        //$test_comp->set_goConex_lbr_cst_pr_inst($_POST['goConexWireConStple']);

        $test_comp->set_work_days($_POST['txtAvailbleWrkDay']);
        $test_comp->set_avl_wrk_dy_pr_yr($_POST['txtGC_avlWrkD_prYr']);
        $test_comp->set_lbr_rate_tr($_POST['txt_lbr_rate']);
        $test_comp->set_bldr_share($_POST['txtPrcnt_builderShare']);
        $test_comp->set_prft_dsire_gc($_POST['txtPrftDsireGC']);
        global $wpdb;

        $table_name = $wpdb->prefix . 'comparison_tbl';

        $wpdb->insert(
                $table_name, array(
            'user_id' => get_current_user_id(),
            'gc_available_wrk_day_pr_yr' => $_POST['txtAvailbleWrkDay'],
            'available_wrk_day_pr_yr' => $_POST['txtGC_avlWrkD_prYr'],
            'tr_labor_rate' => $_POST['txt_lbr_rate'],
            'builder_share' => $_POST['txtPrcnt_builderShare'],
            'gc_profit_dsire' => $_POST['txtPrftDsireGC'],
            'tr_wire2cond_total' => $test_comp->get_two_wire_total(),
            'tr_wire3cond_total' => $test_comp->get_three_wire_total(),
            'tr_pipe_conduit_total' => $test_comp->get_pip_conduit_total(),
            'tr_one_gang_box_total' => $test_comp->get_one_gang_box_total(),
            'tr_two_gang_box_total' => $test_comp->get_two_gang_box_total(),
            'tr_three_gang_box_total' => $test_comp->get_three_gang_box_total(),
            'tr_four_gang_box_total' => $test_comp->get_four_gang_box_total(),
            'tr_one_gang_vpr_bt_total' => $test_comp->get_one_gang_vapour_total(),
            'tr_two_gang_vpr_bt_total' => $test_comp->get_secon_gang_vapour_total(),
            'tr_three_gang_vpr_bt_total' => $test_comp->get_third_gang_vapour_total(),
            'tr_four_gang_vpr_bt_total' => $test_comp->get_fourth_gang_vapour_total(),
            'dec_snglepol_sw_total' => $test_comp->get_dec_single_switch_total(),
            'dec_three_wy_sw_total' => $test_comp->get_three_way_switch_total(),
            'dec_four_wy_sw_total' => $test_comp->get_four_way_switch_total(),
            'wire_connctr_stple_total' => $test_comp->get_wire_conduct_total(),
            'tr_mtrial_cst_pr_instltion' => $test_comp->get_material_cost_pr_inst(),
            'tr_mtrial_cst_pr_switch' => $test_comp->get_material_cost_pr_switch(),
            'tr_nm_sw_pr_home' => $test_comp->get_switces_per_home(),
            'tr_roughin_hr_svd_pr_home_no_leg' => $test_comp->get_total_combined_hrly_rate_per_home(),
            'tr_mnt_instl_vpr_barriar' => $test_comp->get_total_combined_hrly_rate_install_switch_vpr(),
            'tr_mnt_dmge_sw_loc' => $test_comp->get_total_combined_hrly_rate_dmge_switch_loc(),
            'tr_fnl_hr_svd_eliminating_sw_legs' => $test_comp->get_total_combined_hrly_rate_eliminatingSwLeg(),
            'tr_lbr_cst_pr_installtion' => $test_comp->get_labour_cost_pr_inst(),
            'tr_lbr_cst_pr_sw' => $test_comp->get_labour_cost_pr_switch(),
            'tr_matrial_and_lbr_cst' => $test_comp->get_material_and_labour_cost(),
            'tr_installed_sw_cst' => $test_comp->get_installed_switch_cost(),
            'avl_vlue_option_exsting_bsns' => $test_comp->get_new_AvlvalueOptionExistingBsns(),
            'total_option_profit_exsting_bsns' => $test_comp->get_totalOptionProfitExistingBsns(),
            'tr_annual_man_hrs' => $test_comp->get_annualManHrsTR(),
            'gc_annual_man_hrs' => $test_comp->get_annualManHrsGC(),
            'tr_avg_hrs_roughin_pr_home' => $test_comp->get_avg_hrs_roughInPrHomeTR(),
            'gc_avg_hrs_roughin_pr_home' => $test_comp->get_avg_hrs_roughInPrHomeGC(),
            'tr_days_pr_roughin' => $test_comp->get_daysPrRoughInTR(),
            'gc_days_pr_roughin' => $test_comp->get_daysPrRoughInGC(),
            'annual_hrs_svd_exsting_roughin' => $test_comp->get_AnnualHrsSvdExistingRoughIn(),
            'total_pssble_added_roughin_pr_anm' => $test_comp->get_TotalPossibleAddRoughInPrAnm(),
            'avg_gross_prft_pr_home' => $test_comp->get_avg_grossProfitPrHome(),
            'gc_avg_option_prft_increase_instl' => $test_comp->get_gc_OptionProfitIncrease_Instl(),
            'annual_grs_prft_potential' => $test_comp->get_annual_grsPrftPotential(),
            'staff_svng_hr_svd_mn_avl_pr_hr' => $test_comp->get_staff_svngHrSvdMnHrAvlPrYr(),
            'annual_saving' => $test_comp->get_Annual_Savings(),
            'gc_pwr_cntrl_total' => $test_comp->get_totalOptionProfitExistingBsns(), //Using GoConex For All Your Power Control Needs
            'gc_pwr_cntrl_value_pr_home' => $test_comp->get_GC_pwr_Conrol_needs(),
            'gc_pwr_cntrl_bldr_option_prce_pr_hme' => $test_comp->get_bldr_option_prce_pr_home(),
            'gc_pwr_cntrl_total_vlu_dlr_pr_hme' => $test_comp->get_GC_total_value_dlr_pr_home(),
            'gc_pwr_cntrl_total_adjust_staff' => $test_comp->get_GC_total_PwrCntrl_adjust_staff(),
            'gc_pwr_cntrl_adjust_staff_vlue_pr_hme' => $test_comp->get_GC_PwrCntrl_adjust_staff_VluPrHome(),
            'gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme' => $test_comp->get_GC_PwrCntrl_value_dlr_pr_home(),
            'gc_pwr_cntrl_do_more_exstng_rsrces_total' => $test_comp->get_PwrCntrl_doMoreExistingRsrcs(),
            'gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme' => $test_comp->get_PwrCntrl_doMoreExistingRsrcs_VluePrHome(),
            'gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme' => $test_comp->get_PwrCntrl_doMoreExistingRsrcs_TotalVluDlrPrHome(),
                )
        );



        echo '<br/>';
        echo '<hr/>';
        echo '<h2>Results:</h2>';
        echo '<br/>';
        echo '<table width="60%">';
        echo '<tbody>';

        echo '<tr style="padding-bottom:30px;">';
        echo '<th colspan="2" style="text-align:right"><strong>Traditional Wiring</strong></th>';
        echo '<th colspan="3" style="text-align:right"><strong>GoConex</strong></th>';
        echo '</tr>';

        echo '<tr>';
        echo '<td><strong>Switch Leg Materials</strong></td>';
        echo '<td><strong>No. Switches per home</strong></td>';
        echo '<td><strong>Total</strong></td>';
        echo '<td><strong>&nbsp;</strong></td>';
        echo '<td><strong>Price</strong></td>';
        echo '<td><strong>Total</strong></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Wire - 2 conductor (price per foot or meter)</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_two_wire_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Wire - 3 conductor (price per foot or meter)</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_three_wire_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Pipe / Conduit (price per unit of length)</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_pip_conduit_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>1 gang boxes</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_one_gang_box_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>2 gang boxes</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_two_gang_box_total() . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>3 gang boxes</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_three_gang_box_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>3 gang boxes</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_four_gang_box_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_switces_per_home() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo ' <td>1 gang vapour boot</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_one_gang_vapour_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>2 gang vapour boot</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_secon_gang_vapour_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>3 gang vapour boot</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_third_gang_vapour_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>4 gang vapour boot</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_fourth_gang_vapour_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Decora single pole switches</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_dec_single_switch_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Decora 3 way switch</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_three_way_switch_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Decora 4 way switch</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_four_way_switch_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Wire conectors & staples</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_wire_conduct_total() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Material cost per installation</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_material_cost_pr_inst() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>'; // . $test_comp->get_goConex_material_cost_pr_inst() . 
        echo '</tr>';

        echo '<tr>';
        echo '<td>Material cost per switch</td>';
        echo '<td>&nbsp;</td>';
        // echo '<td>$' . $test_comp->get_material_cost_pr_switch() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        // echo '<td>$' . $test_comp->get_goConex_material_cost_pr_switch() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td colspan="5"><br/><hr/><h2>Labour</h2></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td><strong>Total</strong></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Rough in hours saved per home/unit no switch legs</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_total_combined_hrly_rate_per_home() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Minutes per unit to install switch vapour barrier</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_total_combined_hrly_rate_install_switch_vpr() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Minutes per unit to manage damage to switch locations</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_total_combined_hrly_rate_dmge_switch_loc() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Final hours saved per home/unit eliminating switch legs</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_total_combined_hrly_rate_eliminatingSwLeg() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Labour cost per installation</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_labour_cost_pr_inst() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Labour cost per switch</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_labour_cost_pr_switch() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Materials & labour cost</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_material_and_labour_cost() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        //echo '<td>$' . $test_comp->get_goConex_material_cost_pr_inst() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Installed switch cost</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_installed_switch_cost() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        //echo '<td>$' . $test_comp->get_goConex_material_cost_pr_switch() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>New Available Value Options per home/unit on existing business</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_new_AvlvalueOptionExistingBsns() . '</td>';
        // echo '<td>$' . $test_comp->get_cost_diff_trad_goConex() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Total Options Profits existing business</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>$' . $test_comp->get_totalOptionProfitExistingBsns() . '</td>';
        // echo '<td>$' . $test_comp->get_cost_diff_trad_goConex() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td colspan="5"><br/><hr/></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Do More With Your Existing People Resources</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>Traditional</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>GoConex</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Annual Man Hours (8 Hour Day)</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_annualManHrsTR() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_annualManHrsGC() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Average hours for rough-in per home</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_avg_hrs_roughInPrHomeTR() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_avg_hrs_roughInPrHomeGC() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Days Per Rough-in</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_daysPrRoughInTR() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_daysPrRoughInGC() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Annual Hours Saved Existing Rough-ins</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_AnnualHrsSvdExistingRoughIn() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Total Possible Additional Rough-ins per Annum</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_TotalPossibleAddRoughInPrAnm() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Average Gross Profit Per Home</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_avg_grossProfitPrHome() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>GoConex Options Profit Increase For Added Installations</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_gc_OptionProfitIncrease_Instl() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Annual Gross Profit Increase Potential</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_annual_grsPrftPotential() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>&nbsp;</td>';
        echo '<td colspan="2"><strong>OR</strong></td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Staff Savings, Hours Saved vs Man Hours Available Per Year</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_staff_svngHrSvdMnHrAvlPrYr() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Annual Savings</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>' . $test_comp->get_Annual_Savings() . '</td>';
        echo '<td>&nbsp;</td>';
        echo '<td>&nbsp;</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td><strong>Available Value Dollars</strong></td>';
        echo '<td colspan="2"> GOOD, BETTER, BEST </td>';
        echo '<td rowspan="2">BUILDER OPTION PRICING PER HOME</td>';
        echo '<td rowspan="2">What % Would The Builder Share?</td>';
        echo '<td rowspan="2">Total Value Dollars Per Home</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>&nbsp;</td>';
        echo '<td>Total</td>';
        echo '<td>Value Per Home</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Using GoConex For All Your Power Control Needs</td>';
        echo '<td>' . $test_comp->get_totalOptionProfitExistingBsns() . ' </td>';
        echo '<td>' . $test_comp->get_GC_pwr_Conrol_needs() . '</td>';
        echo '<td rowspan="3">' . $test_comp->get_bldr_option_prce_pr_home() . '</td>';
        echo '<td rowspan="3">' . ($test_comp->get_bldr_share() * 100) . '</td>';
        echo '<td>' . $test_comp->get_GC_total_value_dlr_pr_home() . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>Using GoConex For All Your Power Control Needs AND Adjust Staff Resources For Efficiency</td>';
        echo '<td>' . $test_comp->get_GC_total_PwrCntrl_adjust_staff() . ' </td>';
        echo '<td>' . $test_comp->get_GC_PwrCntrl_adjust_staff_VluPrHome() . ' </td>';
        echo '<td>' . $test_comp->get_GC_PwrCntrl_value_dlr_pr_home() . '</td>';
        echo '</tr>';
        echo '<tr>';

        echo '<td>Using GoConex For All Your Power Control Needs AND Do More With Your Existing People Resources</td>';
        echo '<td>' . $test_comp->get_PwrCntrl_doMoreExistingRsrcs() . ' </td>';
        echo '<td>' . $test_comp->get_PwrCntrl_doMoreExistingRsrcs_VluePrHome() . ' </td>';
        echo '<td>' . $test_comp->get_PwrCntrl_doMoreExistingRsrcs_TotalVluDlrPrHome() . '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
    }
}

function dwp_include_comparison_form() {
    ob_start();
    comparison_form_process();
    comparison_form_html();

    return ob_get_clean();
}

add_shortcode('add_comparison_form', 'dwp_include_comparison_form');

/**
 * Include CSS file for MyPlugin.
 */
function goconexform_scripts() {
    wp_register_style('goconexform', plugin_dir_url(__FILE__) . 'css/grid12.css');
    wp_register_style('goconexslidercss', plugin_dir_url(__FILE__) . 'css/slider.css', array('goconexformstyle'));
    wp_register_style('goconexformstyle', plugin_dir_url(__FILE__) . 'css/style.css');
    wp_register_style('goconexformstyle2', plugin_dir_url(__FILE__) . 'css/style2.css');
    wp_register_style('goconexslidercssless', plugin_dir_url(__FILE__) . 'css/slider.less');
    wp_register_style('loadercss', plugin_dir_url(__FILE__) . 'js/loader/min/jquery.loader.min.css');
    wp_register_style('jquery_ui', plugin_dir_url(__FILE__) . 'css/jquery-ui.css');
    wp_enqueue_style('goconexform');
    wp_enqueue_style('goconexslidercss');
    wp_enqueue_style('goconexformstyle');
    wp_enqueue_style('goconexformstyle2');
    wp_enqueue_style('goconexslidercssless');
    wp_enqueue_style('jquery_ui');
    wp_enqueue_style('loadercss');
    wp_register_script('the_js', plugin_dir_url(__FILE__) . 'js/slider-js.js', array('jquery'), '2.1.0', true);
    wp_register_script('bootstrap_slider', plugin_dir_url(__FILE__) . 'js/bootstrap-slider.js', array('jquery'), '2.1.0', true);
    wp_register_script('loader', plugin_dir_url(__FILE__) . 'js/loader/min/jquery.loader.min.js', array('jquery'), '2.1.0', true);
    //wp_register_script('progress_bar', plugin_dir_url(__FILE__) . 'js/jquery_simple_progressbar.js', array('jquery'), '2.1.0', true);
    wp_register_script('jquery_js', plugin_dir_url(__FILE__) . 'js/jquery-ui.js', array('jquery'), '2.1.0', true);


    wp_enqueue_script('the_js');
    wp_enqueue_script('bootstrap_slider');
    wp_enqueue_script('loader');
    //wp_enqueue_script('progress_bar');
    wp_enqueue_script('jquery_js');
}

add_action('wp_enqueue_scripts', 'goconexform_scripts');

function wpse_96370_scripts() {
    wp_register_script('custom_js', plugin_dir_url(__FILE__) . 'js/custom.js', array('jquery'), '2.1.0', true);
    wp_enqueue_script('custom_js');
    $script_params = array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'plugin_url' => plugin_dir_url(__FILE__),
        'report_url' => get_bloginfo('url') . '/report',
    );
    wp_localize_script('custom_js', 'scriptParams', $script_params);
}

add_action('wp_enqueue_scripts', 'wpse_96370_scripts');

//////////////////// Result Page ////////////
//option form shortcode

function dwp_include_result_form() {
    ob_start();
    process_result();
    result_one_html();
    return ob_get_clean();
}

add_shortcode('add_result_one', 'dwp_include_result_form');


function dwp_include_result_report_form() {
    ob_start();
    result_report_process();
    result_report_html();

    return ob_get_clean();
}

add_shortcode('add_result_repor', 'dwp_include_result_report_form');
////////////////////////end result sheet two//////////////

