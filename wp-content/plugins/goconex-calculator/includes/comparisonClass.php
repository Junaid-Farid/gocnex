<?php

if (!isset($_SESSION)) {
    session_start();
}
include("optionClass.php");


$estimateFormObj = unserialize($_SESSION['obj']);

$masterObj = unserialize($_SESSION["masterObj"]);
//$zoneObj = unserialize($_SESSION["zoneObj"]);
//$portableObj = unserialize($_SESSION["portableObj"]);

class comparisonClass extends optionClass {

    //Available work days per year (allowing 2 weeks vacation) traditional
    private $avlWrkDyPrYrGC = 0;
    private $labour_rate_TR = 0;
    private $builder_share = 0;
    private $profit_dsire_GC= 0;
    public $sum_ms_zn_ps= 10;

    private $work_days = 0;
    public $masterObject = 15;
    public $estimateObject = 10;

    //constructor
    public function __construct() {
        global $estimateFormObj, $masterObj, $zoneObj, $portableObj;
        $this->masterObject = $masterObj;
        //$this->zoneObject = $zoneObj;
        //$this->portableObject = $portableObj;
    }

     public function set_avl_wrk_dy_pr_yr($day_pr_yr)
     {
         //// set Available work days per year (allowing 2 weeks vacation) traditional
         $this->avlWrkDyPrYrGC  = $day_pr_yr;
     }
     public function get_avl_wrk_dy_pr_yr()
     {
         // get Available work days per year (allowing 2 weeks vacation) traditional
         return $this->avlWrkDyPrYrGC;
     }
     public function set_lbr_rate_tr($lbr_rate)
     {
         //TR Labour Rate
         $this->labour_rate_TR = $lbr_rate;
     }
     public function get_lbr_rate_tr()
     {
         //get TR Labour Rate
         return $this->labour_rate_TR;
     }
     public function set_bldr_share($builder_share)
     {
         //What % Would The Builder Share? 
         $this->builder_share = $builder_share;
     }
     public function get_bldr_share()
     {
         //get What % Would The Builder Share? 
         return number_format((float)($this->builder_share / 100), 2,'.', '');
     }
     public function set_prft_dsire_gc($profit_desire)
     {
         //get What profit outcome is desired to switch your business to the value of GoConex?
          $this->profit_dsire_GC = $profit_desire;
     }
     public function get_prft_dsire_gc()
     {
         //get What profit outcome is desired to switch your business to the value of GoConex?
         return $this->profit_dsire_GC;
     }
    //getter and setter
//    public function set_goConex_single_switch_price($price_ea) {
//        $this->goConex_single_pole_switch_price = $price_ea;
//    }
//
//    public function get_goConex_single_switch_price() {
//        return $this->goConex_single_pole_switch_price;
//    }
//
//    public function set_goConex_three_switch_price($price_ea) {
//        $this->goConex_three_switch_price = $price_ea;
//    }
//
//    public function get_goConex_three_way_switch() {
//        return $this->goConex_three_switch_price;
//    }
//
//    public function set_goConex_four_way_switch($price_ea) {
//        $this->goConex_four_way_switch_price = $price_ea;
//    }
//
//    public function get_goConex_four_way_switch() {
//        return $this->goConex_four_way_switch_price;
//    }
//
//    //goConex labour cost per installation
//    public function set_goConex_lbr_cst_pr_inst($cost) {
//        $this->goConex_lbr_cst_pr_inst = $cost;
//    }
//
//    public function get_goConex_lbr_cst_pr_inst() {
//        return $this->goConex_lbr_cst_pr_inst;
//    }

    //////////////////////////////Traditional Wiring////////////////////////////////
   
   


    /////////////////////////////GoConex////////////////////////////
    //get goConex Decora single pole switches
//    public function get_goConex_single_switch_total_price() {
//        return number_format((float) ($this->estimateObject->get_decora_single_pole_switches()["quantity"] * $this->get_goConex_single_switch_price()), 2, '.', '');
//    }
//
//    //get goConex Decora single pole switches
//    public function get_goConex_three_way_switch_total_price() {
//        return number_format((float) (($this->estimateObject->get_decora_three_switch_way()["quantity"] * $this->get_goConex_three_way_switch()) / 2), 2, '.', '');
//    }
//
//    //get goConex Decora single pole switches
//    public function get_goConex_four_way_switch_total_price() {
//        return number_format((float) ($this->estimateObject->get_decora_four_switch_way()["quantity"] * $this->get_goConex_four_way_switch()), 2, '.', '');
//    }
//
//    // goConex Material cost per installation 
//    public function get_goConex_material_cost_pr_inst() {
//        return number_format((float) ($this->get_goConex_single_switch_total_price() + $this->get_goConex_three_way_switch_total_price() + $this->get_goConex_four_way_switch_total_price()), 2, '.', '');
//    }
//
//    //go conex Material cost per switch
//    public function get_goConex_material_cost_pr_switch() {
//        return number_format((float) ($this->get_goConex_material_cost_pr_inst() / $this->get_switces_per_home()), 2, '.', '');
//    }
//
//    //goConex Labour cost per installation above is defined but the formul is not give please provide formula 
//    //goConex Materials & labour cost
//    public function get_goConex_mtrl_lbr_cost() {
//        return number_format((float) ($this->get_goConex_lbr_cst_pr_inst() + $this->get_goConex_material_cost_pr_inst()), 2, '.', '');
//    }
//
//    //Installed switch cost
//    public function get_goConex_instld_swtch_cst() {
//        return number_format((float) ($this->get_goConex_mtrl_lbr_cost() / $this->get_switces_per_home()), 2, '.', '');
//    }
//
//    // Cost difference between traditional & GoConex
//    public function get_cost_diff_trad_goConex() {
//        return number_format((float) ($this->get_installed_switch_cost() - $this->get_goConex_instld_swtch_cst()), 2, '.', '');
//    }

    ////////////////////////////// /////////////////////////////////
    //Available work days per year (allowing 2 weeks vacation)
    public function set_work_days($days) {
        $this->work_days = $days;
    }

    public function get_work_days() {
        return $this->work_days;
    }
    
    public function get_average_roughIn(){
        return number_format((float) ($this->estimateObject->get_eight_hr_days_rough_in()["quantity"]), 2, '.', '');
    }
    
    public function get_faster_roughInGoConex(){
        return number_format((float) ($this->estimateObject->get_percnt_rough_not_switch_legs() * 100), 2, '.', '');
    }
    //Target gross profit dollars per house
    public function get_estimator_targetGrsPrft(){
        return number_format((float) ($this->estimateObject->get_target_gross_profit()["quantity"]), 2, '.', '');
    }
    
    //Number of rough-in crews
    public function get_estimate_crews(){
        return number_format((float) ($this->estimateObject->get_no_crews_rough_in()["quantity"]), 2, '.', '');
    }
    //Max rough-ins per crew per year (wired switches)
    public function get_rough_in_pr_yr() {
        return round(number_format((float) ($this->get_work_days() / $this->estimateObject->get_eight_hr_days_rough_in()["quantity"]), 2, '.', ''));
    }

    //Days saved per rough-in with GoConex
    public function get_goConex_saved_days() {
        return number_format((float) ($this->estimateObject->get_eight_hr_days_rough_in()["quantity"] * $this->estimateObject->get_percnt_rough_not_switch_legs()), 2, '.', '');
    }

    //Number of days required for rough-in with GoConex
    public function goConex_days_required() {
        return number_format((float) ($this->estimateObject->get_eight_hr_days_rough_in()["quantity"] - $this->get_goConex_saved_days()), 2, '.', '');
    }

    //Number of rough-ins possible per crew per year with GoConex
    public function goConex_rough_ins() {
        return round(number_format((float) ($this->get_work_days() / $this->goConex_days_required()), 2, '.', ''));
    }

    //Annual increase in units completed with GoConex per crew
    public function goConex_annual_increase() {
        return round(number_format((float) ($this->goConex_rough_ins() - $this->get_rough_in_pr_yr()), 2, '.', ''));
    }

    //Target gross profit dollars per house from the goconex.php class =Estimator!C40 this->get_target_gross_profit()
    //="Annual gross profit increase with "&C51&" additional homes/units per crew" ($this->goConex_annual_increase()) 
    public function annual_gross_profit() {
        return number_format((float) ($this->goConex_annual_increase() * $this->estimateObject->get_target_gross_profit()["quantity"]), 2, '.', '');
    }

    //Number of rough-in crews =Estimator!C25 goconex.php $this->get_no_crews_rough_in()
    //="Annual gross profit from "&C55&" crews completing an additional "&C51*C55&" homes/units with $"&C52&" gross profit"
    public function annual_gross_profit_additional() {
        return number_format((float) ($this->annual_gross_profit() * $this->estimateObject->get_no_crews_rough_in()["quantity"]), 2, '.', '');
    }

    //="Cost "&IF(C58>0,"savings","increase")&" from wired switch vs and GoConex per home/unit"
    // or Cost savings from wired switch vs and GoConex per home/unit
//    public function wired_cost_saving() {
//        return number_format((float) ($this->get_cost_diff_trad_goConex() * $this->get_switces_per_home()), 2, '.', '');
//    }

    //="Cost "&IF(C58>0,"savings","increase")&" on "&C49*C55&" homes/units per year"
    //Cost savings on 696 homes/units per year
//    public function cost_saving_pr_yr() {
//        return number_format((float) ($this->wired_cost_saving() * $this->goConex_rough_ins() * $this->estimateObject->get_no_crews_rough_in()["quantity"]), 2, '.', '');
//    }

    //="Profit from GoConex options on "&C49*C55&" homes/units per year"
    //Profit from GoConex options on 696 homes/units per year
    //------------complete it later------------------//
//    public function profit_frm_goConex_pr_yr() {
//
//        return number_format((float) (($this->goConex_rough_ins() * $this->estimateObject->get_no_crews_rough_in()["quantity"] * $this->masterObject->get_prcnt_ordering() * $this->masterObject->get_gross_margin_dollar()) +
//                ($this->goConex_rough_ins() * $this->estimateObject->get_no_crews_rough_in()["quantity"] * $this->zoneObject->get_prcnt_ordering() * $this->zoneObject->get_gross_margin_dollar()) +
//                ($this->goConex_rough_ins() * $this->estimateObject->get_no_crews_rough_in()["quantity"] * $this->portableObject->get_prcnt_ordering() * $this->portableObject->get_gross_margin_dollar() )), 2, '.', '');
//    }

    //="Profit from GoConex options on "&C49*C55&" homes/units per year"
    //Profit from GoConex options added per home/unit
//    public function profit_frm_goConex_added() {
//        return number_format((float) ($this->profit_frm_goConex_pr_yr() / ($this->goConex_rough_ins() * $this->estimateObject->get_no_crews_rough_in()["quantity"])), 2, '.', '');
//    }
//
//    //Change in Annual Gross Profit
//    public function annual_gross_prft_chnge() {
//        return number_format((float) ($this->annual_gross_profit_additional() + $this->cost_saving_pr_yr() + $this->profit_frm_goConex_pr_yr()), 2, '.', '');
//    }

    //New Available Value Options per home/unit on existing business
    public function get_new_AvlvalueOptionExistingBsns(){  
        return number_format((float) ($this->sum_ms_zn_ps / $this->estimateObject->get_completed_per_year()["quantity"]), 2, '.', '');
    }
    //Total Options Profits existing business
    public function get_totalOptionProfitExistingBsns(){        
        return number_format((float) ($this->sum_ms_zn_ps), 2, '.', '');
    }
    
    //Annual Man Hours (8 Hour Day) traditional
    public function get_annualManHrsTR(){        
        return number_format((float) ($this->get_work_days() * 8), 2, '.', '');
    }
    
    //Annual Man Hours (8 Hour Day) goconex
    public function get_annualManHrsGC(){        
        return number_format((float) ($this->get_avl_wrk_dy_pr_yr() * 8), 2, '.', '');
    }
    //Average hours for rough-in per home Traditional
    public function get_avg_hrs_roughInPrHomeTR(){        
        return number_format((float) ($this->estimateObject->get_rough_in_labor_hr()), 2, '.', '');
    }
    //Average hours for rough-in per home GoConex
    public function get_avg_hrs_roughInPrHomeGC(){        
        return number_format((float) ($this->estimateObject->get_rough_in_labor_hr() - $this->estimateObject->get_hr_saved_no_switches_legs()), 2, '.', '');
    }
    
    //Days Per Rough-in traditional
    public function get_daysPrRoughInTR()
    {
        return number_format((float)(($this->get_avg_hrs_roughInPrHomeTR() / 8 ) / 2 ),2,'.','');
    }
    
    //Days Per Rough-in goconex
    public function get_daysPrRoughInGC()
    {
        return number_format((float)(($this->get_avg_hrs_roughInPrHomeGC() / 8 ) / 2 ),2,'.','');
    }
    //Annual Hours Saved Existing Rough-ins
    public function get_AnnualHrsSvdExistingRoughIn()
    {
        return number_format((float)(($this->get_avg_hrs_roughInPrHomeTR() - $this->get_avg_hrs_roughInPrHomeGC()) * $this->estimateObject->get_completed_per_year()["quantity"]), 2,'','');
    }
    //Total Possible Additional Rough-ins per Annum
    public function get_TotalPossibleAddRoughInPrAnm()
    {
        return round(number_format((float)($this->get_AnnualHrsSvdExistingRoughIn() / $this->get_avg_hrs_roughInPrHomeGC()), 2, '.', ''));
    }
    //Average Gross Profit Per Home
    public function get_avg_grossProfitPrHome()
    {
        return number_format((float)($this->estimateObject->get_target_gross_profit()["quantity"]), 2, '.', '');
    }
    
    //GoConex Options Profit Increase For Added Installations
    public function get_gc_OptionProfitIncrease_Instl()
    {
        return number_format((float)($this->get_new_AvlvalueOptionExistingBsns() * $this->get_TotalPossibleAddRoughInPrAnm()), 2, '.', '');
    }
    
    
    
    //Annual Gross Profit Increase Potential 
    public function get_annual_grsPrftPotential()
    {
        return round(number_format((float)(($this->get_TotalPossibleAddRoughInPrAnm() * $this->get_avg_grossProfitPrHome()) + $this->get_gc_OptionProfitIncrease_Instl()), 2, '.', ''));
    }
    
    
    //Staff Savings, Hours Saved vs Man Hours Available Per Year
    public function get_staff_svngHrSvdMnHrAvlPrYr()
    {
        return number_format((float)($this->get_AnnualHrsSvdExistingRoughIn() / $this->get_annualManHrsTR() ), 2, '.', '');
    }
    
    ///Annual Savings
    public function get_Annual_Savings()
    {
        return number_format((float)($this->get_annualManHrsTR() * $this->get_staff_svngHrSvdMnHrAvlPrYr() * $this->get_lbr_rate_tr()), 2, '.', '');
    }
    
    //Using GoConex For All Your Power Control Needs Value Per Home
    public function get_GC_pwr_Conrol_needs()
    {
        return number_format((float)($this->get_totalOptionProfitExistingBsns() / $this->estimateObject->get_completed_per_year()["quantity"]), 2, '.', '');
    }
    
    //Using GoConex For All Your Power Control Needs BUILDER OPTION PRICING PER HOME
    public function get_bldr_option_prce_pr_home()
    {
        return number_format((float)($this->get_totalOptionProfitExistingBsns() / $this->estimateObject->get_completed_per_year()["quantity"]), 2, '.', '');
    }
    
    //Using GoConex For All Your Power Control Needs Total Value Dollars Per Home
    public function get_GC_total_value_dlr_pr_home()
    {
        return number_format((float)( $this->get_GC_pwr_Conrol_needs() + ($this->get_bldr_option_prce_pr_home() * $this->get_bldr_share())), 2, '.', '');
    }
    //Using GoConex For All Your Power Control Needs AND Adjust Staff Resources For Efficiency Total 
    public function get_GC_total_PwrCntrl_adjust_staff()
    {
        return number_format((float)( $this->masterObject->get_sum_of_ms_zn_ps_profit_dollar() + $this->get_Annual_Savings()), 2, '.', '');
    }
    //Using GoConex For All Your Power Control Needs AND Adjust Staff Resources For Efficiency Total Value Per home
    public function get_GC_PwrCntrl_adjust_staff_VluPrHome()
    {
        return number_format((float)( $this->get_GC_total_PwrCntrl_adjust_staff() / $this->estimateObject->get_completed_per_year()["quantity"]), 2, '.', '');
    }
    //Using GoConex For All Your Power Control Needs AND Adjust Staff Resources For Efficiency Total Value Dollars Per Home
    public function get_GC_PwrCntrl_value_dlr_pr_home()
    {
        return number_format((float)( $this->get_GC_PwrCntrl_adjust_staff_VluPrHome() + ($this->get_bldr_option_prce_pr_home() * $this->get_bldr_share())), 2, '.', '');
    }
    
    
    
    //Using GoConex For All Your Power Control Needs AND Do More With Your Existing People Resources total
    public function get_PwrCntrl_doMoreExistingRsrcs()
    {
        return number_format((float)($this->get_totalOptionProfitExistingBsns() + $this->get_annual_grsPrftPotential()), 2, '.', '');
    }
    //Using GoConex For All Your Power Control Needs AND Do More With Your Existing People Resources Value Per Home
    public function get_PwrCntrl_doMoreExistingRsrcs_VluePrHome()
    {
        return number_format((float)($this->get_PwrCntrl_doMoreExistingRsrcs() / ($this->get_TotalPossibleAddRoughInPrAnm() + $this->get_bldr_option_prce_pr_home())), 2, '.', '');
    }
    
    //Using GoConex For All Your Power Control Needs AND Do More With Your Existing People Resources Total Value Dollars Per Home
    public function get_PwrCntrl_doMoreExistingRsrcs_TotalVluDlrPrHome()
    {
        return number_format((float)( $this->get_PwrCntrl_doMoreExistingRsrcs_VluePrHome() + ($this->get_bldr_option_prce_pr_home() * $this->get_bldr_share())), 2, '.', '');
    }
}