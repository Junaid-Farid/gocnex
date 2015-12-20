<?php
class goconex {

    //Switch Leg Materials
    private $wire_two_conductor = array();
    private $wire_three_conductor = array();
    private $pipe_or_conduit = array();
    private $gang_box = array();
    private $two_gang_box = array();
    private $three_gang_box = array();
    private $four_gang_box = array();
    private $one_gang_vapour_boot = array();
    private $two_gang_vapour_boot = array();
    private $three_gang_vapour_boot = array();
    private $four_gang_vapour_boot = array();
    private $decora_single_pole_switches = array();
    private $decora_three_switch_way = array();
    private $decora_four_switch_way = array();
    private $wire_connector = array();
    //Labor 
    private $no_of_crews_rough_in = array();
    private $no_of_men_per_rough_crew = array();
    private $hourly_labour_rate_rough_in = array();
    private $crew_doing_final = array();
    private $men_per_final_crew = array();
    private $hourly_final_crews = array();
    //Time
    private $eight_hr_days_rough_in = array();
    private $percnt_rough_not_switch_legs = array();
    private $seal_switch_vapour = array();
    private $repair_demage_switches = array();
    private $eight_hr_days_final_rough = array();
    private $eliminating_switch_con_final = array();
    //Business
    private $completed_per_year = array();
    private $target_gross_profit = array();
    //Summary
    private $mint_pr_hour = 0;

    public function __construct() {
        //not now
    }

    //Switch Leg Materials setter 

    public function set_two_wire_conductor($qnty, $price_ea) {
        /*
         * set Wire - 2 conductor (price per foot or meter)
         */
        $this->wire_two_conductor = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_two_wire_conductor() {
        return $this->wire_two_conductor;
    }

    public function set_three_wire_conductor($qnty, $price_ea) {
        /*
         * set Wire - 3 conductor (price per foot or meter)
         */
        $this->wire_three_conductor = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_three_wire_conductor() {
        return $this->wire_three_conductor;
    }

    public function set_pipe_or_conduit($qnty, $price_ea) {
        /*
         * set Pipe / Conduit (price per unit of length)
         */
        $this->pipe_or_conduit = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_pipe_or_conduit() {
        /*
         * get Pipe / Conduit (price per unit of length)
         */
        return $this->pipe_or_conduit;
    }

    public function set_gang_box($qnty, $price_ea) {
        /*
         *  set 1 gang boxes
         */
        $this->gang_box = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_gang_box() {
        /*
         *  get 1 gang boxes
         */
        return $this->gang_box;
    }

    public function set_two_gang_box($qnty, $price_ea) {
        /*
         * set 2 gang boxes
         */
        $this->two_gang_box = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_two_gang_box() {
        /*
         * get 2 gang boxes
         */
        return $this->two_gang_box;
    }

    public function set_three_gang_box($qnty, $price_ea) {
        /*
         * set 3 gang boxes
         */
        $this->three_gang_box = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_three_gang_box() {
        /*
         * get 3 gang boxes
         */
        return $this->three_gang_box;
    }

    public function set_four_gang_box($qnty, $price_ea) {
        /*
         * set 4 gang boxes
         */
        $this->four_gang_box = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_four_gang_box() {
        /*
         * get 4 gang boxes
         */
        return $this->four_gang_box;
    }

    public function set_first_gang_vapour_boot($qnty, $price_ea) {
        /*
         * 1 gang vapour boot
         */
        $this->one_gang_vapour_boot = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_first_gang_vapour_boot() {
        /*
         * get 1 gang vapour boot
         */
        return $this->one_gang_vapour_boot;
    }

    public function set_second_gang_vapour_boot($qnty, $price_ea) {
        /*
         * 2 gang vapour boot
         */
        $this->two_gang_vapour_boot = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_second_gang_vapour_boot() {
        /*
         * get 2 gang vapour boot
         */
        return $this->two_gang_vapour_boot;
    }

    public function set_third_gang_vapour_boot($qnty, $price_ea) {
        /*
         * 3 gang vapour boot
         */
        $this->three_gang_vapour_boot = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_third_gang_vapour_boot() {
        /*
         * get 3 gang vapour boot
         */
        return $this->three_gang_vapour_boot;
    }

    public function set_four_gang_vapour_boot($qnty, $price_ea) {
        /*
         * 4 gang vapour boot
         */
        $this->four_gang_vapour_boot = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_four_gang_vapour_boot() {
        /*
         * get 4 gang vapour boot
         */
        return $this->four_gang_vapour_boot;
    }

    public function set_decora_single_pole_switches($qnty, $price_ea) {
        /*
         * set Decora single pole switches
         */
        $this->decora_single_pole_switches = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_decora_single_pole_switches() {
        /*
         * return Decora single pole switches
         */
        return $this->decora_single_pole_switches;
    }

    public function set_decora_three_switch_way($qnty, $price_ea) {
        /*
         * set Decora 3 of way switch
         */
        $this->decora_three_switch_way = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_decora_three_switch_way() {
        /*
         * get Decora 3 of way switch
         */
        return $this->decora_three_switch_way;
    }

    public function set_decora_four_switch_way($qnty, $price_ea) {
        /*
         * set Decora 4 of way switch
         */
        $this->decora_four_switch_way = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_decora_four_switch_way() {
        /*
         * get Decora 4 of way switch
         */
        return $this->decora_four_switch_way;
    }

    public function set_wire_connector($qnty, $price_ea) {
        /*
         * set Wire Conectors
         */
        $this->wire_connector = ["quantity" => $qnty, "price_ea" => $price_ea];
    }

    public function get_wire_connector() {
        /*
         * get Wire Conectors
         */
        return $this->wire_connector;
    }

    //Labor 
    public function set_no_crews_rough_in($qnty) {
        /*
         * set Number of crews doing Rough-In
         */
        $this->no_of_crews_rough_in = ["quantity" => $qnty];
    }

    public function get_no_crews_rough_in() {
        /*
         * get Number of crews doing Rough-In
         */
        return $this->no_of_crews_rough_in;
    }

    public function set_men_per_rough_crew($qnty) {
        /*
         * set Number of men per Rough-In Crew
         */
        $this->no_of_men_per_rough_crew = ["quantity" => $qnty];
    }

    public function get_men_per_rough_crew() {
        /*
         * get Number of men per Rough-In Crew
         */
        return $this->no_of_men_per_rough_crew;
    }

    public function set_hourly_labour_rate_rough($qnty) {
        /*
         * set Combined hourly labour rate for Rough-In Crew
         */
        $this->hourly_labour_rate_rough_in = ["quantity" => $qnty];
    }

    public function get_hourly_labour_rate_rough() {
        /*
         * get Combined hourly labour rate for Rough-In Crew
         */
        
        return $this->hourly_labour_rate_rough_in;
    }

    public function set_crew_doing_final($qnty) {
        /*
         * set Number of crews doing Final
         */
        $this->crew_doing_final = ["quantity" => $qnty];
    }
    public function get_crew_doing_final() {
        /*
         * set Number of crews doing Final
         */
        return $this->crew_doing_final;
    }

    public function set_men_per_final_crew($qnty) {
        /*
         * set Number of men per Final Crew
         */
        $this->men_per_final_crew = ["quantity" => $qnty];
    }
    public function get_men_per_final_crew() {
        /*
         * set Number of men per Final Crew
         */
        return $this->men_per_final_crew;
    }

    public function set_hourly_final_crews($qnty) {
        /*
         * set Combined hourly rate for Final Crew
         */
        $this->hourly_final_crews = ["quantity" => $qnty];
    }

    public function get_hourly_final_crews() {
        /*
         * get Combined hourly rate for Final Crew
         */
        return $this->hourly_final_crews;
    }

    //Time

    public function set_eight_hr_days_rough_in($qnty) {
        /*
         * set Number of 8-hour days per home/unit for Rough-In
         */
        $this->eight_hr_days_rough_in = ["quantity" => $qnty];
    }

    public function get_eight_hr_days_rough_in() {
        /*
         * get Number of 8-hour days per home/unit for Rough-In
         */
        return $this->eight_hr_days_rough_in;
    }

    public function set_percnt_rough_not_switch_legs($qnty) {
        /*
         * set % faster to rough-in without switch legs
         */
        $this->percnt_rough_not_switch_legs = ["quantity" => $qnty];
    }

    public function set_seal_switch_vapour($qnty) {
        /*
         * set Minutes per home to seal switch box vapour barrier
         */
        $this->seal_switch_vapour = ["quantity" => $qnty];
    }

    public function get_seal_switch_vapour() {
        /*
         * get Minutes per home to seal switch box vapour barrier
         */
        return $this->seal_switch_vapour;
    }

    public function set_repair_demage_switches($qnty) {
        /*
         * set Minutes per home to repair damage to switch boxes
         */
        $this->repair_demage_switches = ["quantity" => $qnty];
    }

    public function get_repair_demage_switches() {
        /*
         * get Minutes per home to repair damage to switch boxes
         */
        return $this->repair_demage_switches;
    }

    public function set_eight_hr_days_final_rough($qnty) {
        /*
         * set Number of 8-hour days per home/unit for Final
         */
        $this->eight_hr_days_final_rough = ["quantity" => $qnty];
    }
    public function get_eight_hr_days_final_rough() {
        /*
         * get Number of 8-hour days per home/unit for Final
         */
        return $this->eight_hr_days_final_rough;
    }

    public function set_eliminating_switch_con_final($qnty) {
        /*
         * set % faster eliminating switch connections at Final
         */
        $this->eliminating_switch_con_final = ["quantity" => $qnty];
    }

    public function get_percnt_rough_not_switch_legs() {
        return ($this->percnt_rough_not_switch_legs["quantity"] / 100);
    }

    public function get_prcnt_eliminating_con_final() {
        return number_format((float) ($this->eliminating_switch_con_final["quantity"] / 100), 2, '.', '');
    }

    //Business
    public function set_completed_per_year($qnty) {
        /*
         * set Number of homes/units completed per year
         */
        $this->completed_per_year = ["quantity" => $qnty];
    }

    public function get_completed_per_year() {
        /*
         * get Number of homes/units completed per year
         */
        return $this->completed_per_year;
    }

    public function set_target_gross_profit($qnty) {
        /*
         * set Target gross profit dollars per house/unit
         */
        $this->target_gross_profit = ["quantity" => $qnty];
    }

    public function get_target_gross_profit() {
        /*
         * get Target gross profit dollars per house/unit
         */

        return $this->target_gross_profit;
    }

    //Summery

    public function set_mint_pr_hour($minute) {
        /*
         * set Minutes in an hour
         */
        $this->mint_pr_hour = ["quantity" => $minute];
    }
    public function get_mint_pr_hour() {
        /*
         * set Minutes in an hour
         */
        return $this->mint_pr_hour;
    }

    //getting Total Number of switches in the home/unit
    public function get_total_switches_in_home() {
        return round(number_format((float) ($this->decora_single_pole_switches["quantity"] + $this->get_decora_three_switch_way()["quantity"] + $this->get_decora_four_switch_way()["quantity"]), 2, '.',''), 2);
         
    }

    //Rough in labor hours per home/unit
    public function get_rough_in_labor_hr() {
        
        $labor_per_hour = number_format((float) (($this->get_men_per_rough_crew()["quantity"]) * ($this->get_eight_hr_days_rough_in()["quantity"]) * 8) , 2, '.', '');      
        return $labor_per_hour;
    }

    //Rough in hours saved per home/unit no switch legs
    public function get_hr_saved_no_switches_legs() {
        //$saved_with_no_switch_leg =
//        print_r(' here get rf in lbr hr ' . $this->get_rough_in_labor_hr() );
//        print_r(' here prcnt no sw leg' . $this->get_percnt_rough_not_switch_legs() );
        return round(number_format((float) ($this->get_rough_in_labor_hr() * $this->get_percnt_rough_not_switch_legs()), 2, '.', ''), 2);
    }

    //Minutes per home/unit to rough-in switches
    public function get_minutes_pr_home_rough() {
        $mnt_pr_rough_in_switches = round(number_format((float) ($this->get_hr_saved_no_switches_legs() * $this->mint_pr_hour["quantity"]), 2, '.', ''), 2);
        return $mnt_pr_rough_in_switches;
    }

    //Rough in minutes per switch
    public function get_rough_mint_pr_switch() {
        $minute_per_switch = number_format((float) ($this->get_minutes_pr_home_rough() / $this->get_total_switches_in_home()), 2, '.', '');
        return $minute_per_switch;
    }

    //Final labor hour per home/unit
    public function get_labor_hr_per_unit() {
        $labor_hour = number_format((float) (($this->men_per_final_crew["quantity"] * $this->eight_hr_days_final_rough["quantity"] ) * 8), 2, '.', '');
        return $labor_hour;
    }

    //Final hours saved per home/unit eliminating switch legs
    public function get_hour_saved_no_switch_legs() {
        $hour_saved = number_format((float) ($this->get_labor_hr_per_unit() * $this->get_prcnt_eliminating_con_final()), 2, '.', '');
        return $hour_saved;
    }

    //Minutes to connect switches at final
    public function get_connect_switches_final() {
        $mints_con_swtiches = number_format((float) ($this->get_hour_saved_no_switch_legs() * $this->mint_pr_hour["quantity"]), 2, '.', '');
        return $mints_con_swtiches;
    }

    //Final minutes per switch
    public function get_minutes_pr_switch() {
        $minute_pr_switch = number_format((float) ($this->get_connect_switches_final() / $this->get_total_switches_in_home()), 2, '.', '');
        return $minute_pr_switch;
    }
    
    //method from the comparison class
     //Wire - 2 conductor (price per foot or meter) Total value
    public function get_two_wire_total() {
        return number_format((float) ($this->get_two_wire_conductor()["quantity"] * $this->get_two_wire_conductor()['price_ea'] * $this->get_decora_single_pole_switches()['quantity']), 2, '.', '');
    }

    //Wire - 3 conductor (price per foot or meter) Total
    public function get_three_wire_total() {
        return number_format((float) ($this->get_three_wire_conductor()["quantity"] * $this->get_three_wire_conductor()["price_ea"] * ($this->get_decora_three_switch_way()["quantity"] + $this->get_decora_four_switch_way()["quantity"])), 2, '.', '');
    }

    //Pipe / Conduit (price per unit of length) Total
    public function get_pip_conduit_total() {
        return number_format((float) ($this->get_pipe_or_conduit()["quantity"] * $this->get_pipe_or_conduit()["price_ea"]), 2, '.', '');
    }

    //1 gang boxes Total
    public function get_one_gang_box_total() {
        return number_format((float) ($this->get_gang_box()["quantity"] * $this->get_gang_box()["price_ea"]), 2, '.', '');
    }

    //2 gang boxes Total
    public function get_two_gang_box_total() {
        return number_format((float) ($this->get_two_gang_box()["quantity"] * $this->get_two_gang_box()["price_ea"]), 2, '.', '');
    }

    //3 gang boxes Total
    public function get_three_gang_box_total() {
        return number_format((float) ($this->get_three_gang_box()["quantity"] * $this->get_three_gang_box()["price_ea"]), 2, '.', '');
    }

    //4 gang boxes Total
    public function get_four_gang_box_total() {
        return number_format((float) ($this->get_four_gang_box()["quantity"] * $this->get_four_gang_box()["price_ea"]), 2, '.', '');
    }
     //1 gang vapour boot
    public function get_one_gang_vapour_total() {
        return number_format((float) ($this->get_first_gang_vapour_boot()["quantity"] * $this->get_first_gang_vapour_boot()["price_ea"]), 2, '.', '');
    }

    //2 gang vapour boot
    public function get_secon_gang_vapour_total() {
        return number_format((float) ($this->get_second_gang_vapour_boot()["quantity"] * $this->get_second_gang_vapour_boot()["price_ea"]), 2, '.', '');
    }

    //3 gang vapour boot
    public function get_third_gang_vapour_total() {
        return number_format((float) ($this->get_third_gang_vapour_boot()["quantity"] * $this->get_third_gang_vapour_boot()["price_ea"]), 2, '.', '');
    }

    //4 gang vapour boot
    public function get_fourth_gang_vapour_total() {
        return number_format((float) ($this->get_four_gang_vapour_boot()["quantity"] * $this->get_four_gang_vapour_boot()["price_ea"]), 2, '.', '');
    }
     //No. Switches per home 
    public function get_switces_per_home() {
        return number_format((($this->get_four_gang_box()["quantity"] * 4) + ( $this->get_three_gang_box()["quantity"] * 3) + ($this->get_two_gang_box()["quantity"] * 2) + $this->get_gang_box()["quantity"]), 2, '.', '');
    }

   

    //Decora single pole switches
    public function get_dec_single_switch_total() {
        return number_format((float) ($this->get_decora_single_pole_switches()["quantity"] * $this->get_decora_single_pole_switches()["price_ea"]), 2, '.', '');
    }

    //Decora 3 way switch
    public function get_three_way_switch_total() {
        return number_format((float) (($this->get_decora_three_switch_way()["quantity"] * $this->get_decora_three_switch_way()["price_ea"]) / 2), 2, '.', '');
    }

    //Decora 4 way switch
    public function get_four_way_switch_total() {
        return number_format((float) (($this->get_decora_four_switch_way()["price_ea"] + $this->get_decora_three_switch_way()["price_ea"] + $this->get_decora_three_switch_way()["price_ea"] ) * $this->get_decora_four_switch_way()["quantity"] ), 2, '.', '');
    }

    //Wire conectors & staples
    public function get_wire_conduct_total() {
        return number_format((float) ($this->get_wire_connector()["quantity"] * $this->get_wire_connector()["price_ea"]), 2, '.', '');
    }

    //Material cost per installation
    public function get_material_cost_pr_inst() {
        return number_format((float) ($this->get_two_wire_total() + $this->get_three_wire_total() + $this->get_pip_conduit_total() + $this->get_one_gang_box_total() + $this->get_two_gang_box_total() + $this->get_three_gang_box_total() + $this->get_four_gang_box_total() + $this->get_one_gang_vapour_total() + $this->get_secon_gang_vapour_total() + $this->get_third_gang_vapour_total() + $this->get_fourth_gang_vapour_total() + $this->get_dec_single_switch_total() + $this->get_three_way_switch_total() + $this->get_four_way_switch_total() + $this->get_wire_conduct_total()), 2, '.', '');
    }

    //Material cost per switch
    public function get_material_cost_pr_switch() {
        return number_format((float) ($this->get_material_cost_pr_inst() / $this->get_switces_per_home()), 2, '.', '');
    }
    
    //Labour 
    //Combined hourly labour rate for rough in crew 
    public function get_combined_hourly_labour_rate_rough() {
        return number_format((float) ($this->get_hourly_labour_rate_rough()["quantity"]), 2, '.', '');
    }

    //Combined hourly labour rate for rough in crew & Rough in hours saved per home/unit no switch legs    

    public function get_total_combined_hrly_rate_per_home() {
        return number_format((float) ($this->get_hourly_labour_rate_rough()["quantity"] * $this->get_hr_saved_no_switches_legs()), 2, '.', '');
    }

    //Combined hourly labour rate for rough in crew & Minutes per unit to install switch vapour barrier
    public function get_total_combined_hrly_rate_install_switch_vpr() {
        return number_format((float) (($this->get_hourly_labour_rate_rough()["quantity"] / 60) * $this->get_seal_switch_vapour()["quantity"]), 2, '.', '');
    }

    //Combined hourly labour rate for rough in crew & Minutes per unit to manage damage to switch locations
    public function get_total_combined_hrly_rate_dmge_switch_loc() {
        return number_format((float) (($this->get_hourly_labour_rate_rough()["quantity"] / 60) * $this->get_repair_demage_switches()["quantity"]), 2, '.', '');
    }

    //Combined hourly labour rate for rough in crew & Final hours saved per home/unit eliminating switch legs
    public function get_total_combined_hrly_rate_eliminatingSwLeg() {
        return number_format((float) ($this->get_hourly_labour_rate_rough()["quantity"] * $this->get_hour_saved_no_switch_legs()), 2, '.', '');
    }

    //Labour cost per installation
    public function get_labour_cost_pr_inst() {
        return number_format((float) ($this->get_total_combined_hrly_rate_per_home() + $this->get_total_combined_hrly_rate_install_switch_vpr() + $this->get_total_combined_hrly_rate_dmge_switch_loc() + $this->get_total_combined_hrly_rate_eliminatingSwLeg()), 2, '.', '');
    }

    // Labour cost per switch
    public function get_labour_cost_pr_switch() {
        return number_format((float) ($this->get_labour_cost_pr_inst() / $this->get_switces_per_home()), 2, '.', '');
    }

    // Materials & labour cost
    public function get_material_and_labour_cost() {
        return number_format((float) ($this->get_material_cost_pr_inst() + $this->get_labour_cost_pr_inst()), 2, '.', '');
    }

    // Installed switch cost
    public function get_installed_switch_cost() {
        return number_format((float) ($this->get_material_and_labour_cost() / $this->get_switces_per_home()), 2, '.', '');
    }

}