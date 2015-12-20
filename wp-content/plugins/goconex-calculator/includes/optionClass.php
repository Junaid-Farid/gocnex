<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once( plugin_dir_path(__FILE__) . 'goconexClass.php' );

$obj = unserialize($_SESSION['obj']);



class optionClass extends goconex{
    
    private $mater = array();
    private $zon = array();
    private $portable = array();
    
    function __construct() {
        global $obj;
        $this->session_object = $obj;
    
    }
    
    //getter and setter
    //master switch feature sell price
    public function set_ms_feature_sell_price($feature_sell_price)
    {
        $this->mater["feature_sell_price"] = $feature_sell_price;
    }
    public function get_ms_feature_sell_price()
    {
        return $this->mater["feature_sell_price"];
    }
    public function set_ms_paired_sw_cost($ms_paird_sw_cst)
    {
        $this->mater["ms_paird_sw_cost"] = $ms_paird_sw_cst;
    }
    public function get_ms_paired_sw_cost()
    {
        return $this->mater["ms_paird_sw_cost"];
    }
    
    //getting the gross profit of master switch
    public function get_ms_gross_profit()
    {
        return number_format((float)($this->get_ms_feature_sell_price() - $this->get_ms_paired_sw_cost()), 2, '.' ,'');
    }
    
    //zone control
    public function set_zn_feature_sell_price($zn_feature_sell_price)
    {
        $this->zon["zn_feature_sell_price"] = $zn_feature_sell_price;
    }
    public function get_zn_feature_sell_price()
    {
        return $this->zon["zn_feature_sell_price"];
    }
    public function set_zn_paired_sw_cost($zn_paird_sw_cst)
    {
        $this->zon["zn_paird_sw_cost"] = $zn_paird_sw_cst;
    }
    public function get_zn_paired_sw_cost()
    {
        return $this->zon["zn_paird_sw_cost"];
    }
    
    //getting the gross profit of zone controll
    public function get_zn_gross_profit()
    {
        return number_format((float)($this->get_zn_feature_sell_price() - $this->get_zn_paired_sw_cost()), 2, '.' ,'');
    }
    
    //portable switch
    
    public function set_ps_feature_sell_price($ps_feature_sell_price)
    {
        $this->portable["ps_feature_sell_price"] = $ps_feature_sell_price;
    }
    public function get_ps_feature_sell_price()
    {
        return $this->portable["ps_feature_sell_price"];
    }
    public function set_ps_paired_sw_cost($ps_paird_sw_cst)
    {
        $this->portable["ps_paird_sw_cost"] = $ps_paird_sw_cst;
    }
    public function get_ps_paired_sw_cost()
    {
        return $this->portable["ps_paird_sw_cost"];
    }
    
    //getting the gross profit of zone controll
    public function get_ps_gross_profit()
    {
        return number_format((float)($this->get_ps_feature_sell_price() - $this->get_ps_paired_sw_cost()), 2, '.' ,'');
    }
    
    //% of Home Buyers That Would Purchase master switch
    public function set_ms_prcnt_home_buyer($ms_prcnt_home_buyer)
    {
        $this->mater["ms_prcnt_home_buyer"] = $ms_prcnt_home_buyer;
    }
    public function get_ms_prcnt_home_buyer()
    {
        return number_format((float)($this->mater["ms_prcnt_home_buyer"] / 100) , 2, '.', '');
    }
    //Number Purchased Per Home
    public function set_ms_nm_purchased_pr_home($ms_nm_purchased_pr_home)
    {
        $this->mater["ms_nm_purchased_pr_home"] = $ms_nm_purchased_pr_home;
    }
    public function get_ms_nm_purchased_pr_home()
    {
        return $this->mater["ms_nm_purchased_pr_home"];
    }
    
    //Total Purchased master switch
    public function get_ms_total_purchased()
    {
        return number_format((float) ($this->session_object->get_completed_per_year()["quantity"] * $this->get_ms_prcnt_home_buyer() * $this->get_ms_nm_purchased_pr_home()) , '0', '.', '');
    }
    //get the master switch Profit Dollars
    public function get_ms_profit_dollar()
    {
        return number_format((float)($this->get_ms_gross_profit() * $this->get_ms_total_purchased()), 2, '.', '');
    }

        //% of Home Buyers That Would Purchase zone control
    public function set_zn_prcnt_home_buyer($zn_prcnt_home_buyer)
    {
        $this->zon["zn_prcnt_home_buyer"] = $zn_prcnt_home_buyer;
    }
    public function get_zn_prcnt_home_buyer()
    {
        return number_format((float)($this->zon["zn_prcnt_home_buyer"] / 100) , 2, '.', '');
    }
    //Number Purchased Per Home zone control
    public function set_zn_nm_purchased_pr_home($zn_nm_purchased_pr_home)
    {
        $this->zon["zn_nm_purchased_pr_home"] = $zn_nm_purchased_pr_home;
    }
    public function get_zn_nm_purchased_pr_home()
    {
        return $this->zon["zn_nm_purchased_pr_home"];
    }
    //Total Purchased master switch
    public function get_zn_total_purchased()
    {
        return number_format((float) ($this->session_object->get_completed_per_year()["quantity"] * $this->get_zn_prcnt_home_buyer() * $this->get_zn_nm_purchased_pr_home()) , '0', '.', '');
    }
    //get the master switch Profit Dollars
    public function get_zn_profit_dollar()
    {
        return number_format((float)($this->get_zn_gross_profit() * $this->get_zn_total_purchased()), 2, '.', '');
    }
    
    ///portable switch
    
    //% of Home Buyers That Would Purchase zone control
    public function set_ps_prcnt_home_buyer($ps_prcnt_home_buyer)
    {
        $this->portable["ps_prcnt_home_buyer"] = $ps_prcnt_home_buyer;
    }
    public function get_ps_prcnt_home_buyer()
    {
        return number_format((float)($this->portable["ps_prcnt_home_buyer"] / 100), 2, '.', '');
    }
    //Number Purchased Per Home zone control
    public function set_ps_nm_purchased_pr_home($ps_nm_purchased_pr_home)
    {
        $this->portable["ps_nm_purchased_pr_home"] = $ps_nm_purchased_pr_home;
    }
    public function get_ps_nm_purchased_pr_home()
    {
        return $this->portable["ps_nm_purchased_pr_home"];
    }
    
    //Total Purchased master switch
    public function get_ps_total_purchased()
    {
        return number_format((float) ($this->session_object->get_completed_per_year()["quantity"] * $this->get_ps_prcnt_home_buyer() * $this->get_ps_nm_purchased_pr_home()) , '0', '.', '');
    }
    //get the master switch Profit Dollars
    public function get_ps_profit_dollar()
    {
        return number_format((float)($this->get_ps_gross_profit() * $this->get_ps_total_purchased()), 2, '.', '');
    }
    
     // getting the sum of master switch , zone control and portable switch profit dollar
    public function get_sum_of_ms_zn_ps_profit_dollar()
    {
        return number_format((float)($this->get_ms_profit_dollar() + $this->get_zn_profit_dollar() + $this->get_ps_profit_dollar()), 2, '.', '');
    }
    
    //
}