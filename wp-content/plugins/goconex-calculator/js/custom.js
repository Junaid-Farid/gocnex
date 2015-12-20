jQuery(document).ready(function ($) {
    $('#checkbox-2-1').click(function () {
        if ($('#checkbox-2-1').is(':checked')) {
            $('#Doesyourbuilder').show('slow');
        }
    });
    $('#checkbox-2-2').click(function () {
        if ($('#checkbox-2-2').is(':checked')) {
            $('#Doesyourbuilder').hide('slow');
        }
    });
    if ($('#checkbox-2-2').is(':checked')) {
        $('#Doesyourbuilder').hide('slow');
    }
    if ($('#checkbox-2-1').is(':checked')) {
        $('#Doesyourbuilder').show('slow');
    }

    $("#ms_feature_sell_price").slider();
    $("#zn_feature_1sell_pric").slider();

    $("#nm_men_pr_final").slider();
    $("#cmbnd_hrly_rate_final_crews").slider();
    $("#nm_crews_doing_final").slider();

    $("#mnt_repair_dmg_switch_box").slider();
    $("#nm_eight_days_roughin").slider();
    $("#prcntg_eliminating_sw_con_final").slider();
    $("#avg_mnt_to_wire_sw").slider();   
   
    //on laod  of option form first

    $('#ms_paired_sw_cost').on("change", function (event, ui) {
        // Instantiate a slider
        var ms_paired_sw_cost = $("#ms_paired_sw_cost").slider();
        //Call a method on the slider
        var ms_paired_sw_cost_value = ms_paired_sw_cost.slider('getValue');

        // Instantiate a slider
        var ms_nm_purchased_pr_home = $("#ms_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var ms_nm_purchased_pr_home_value = ms_nm_purchased_pr_home.slider('getValue');

        // Instantiate a slider
        var ms_prcnt_home_buyer = $("#ms_prcnt_home_buyer").slider();
        //Call a method on the slider
        var ms_prcnt_home_buyer_value = ms_prcnt_home_buyer.slider('getValue');

        optionCalculation(ms_paired_sw_cost_value, ms_nm_purchased_pr_home_value, ms_prcnt_home_buyer_value, 'ms_box_price', 0.00, $('#es_completed_yr').val(), 'ms_gross_proftit', 'ms_total_prchsd', 'ms_total_purchase', 'ms_nm_buyer_pragraph', 'ms_num_buyer', 'ms_total_prchsd_box');
    });
    $('#ms_nm_purchased_pr_home').on("change", function (event, ui) {
        // Instantiate a slider
        var ms_paired_sw_cost = $("#ms_paired_sw_cost").slider();
        //Call a method on the slider
        var ms_paired_sw_cost_value = ms_paired_sw_cost.slider('getValue');

        // Instantiate a slider
        var ms_nm_purchased_pr_home = $("#ms_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var ms_nm_purchased_pr_home_value = ms_nm_purchased_pr_home.slider('getValue');

        // Instantiate a slider
        var ms_prcnt_home_buyer = $("#ms_prcnt_home_buyer").slider();
        //Call a method on the slider
        var ms_prcnt_home_buyer_value = ms_prcnt_home_buyer.slider('getValue');
        optionCalculation(ms_paired_sw_cost_value, ms_nm_purchased_pr_home_value, ms_prcnt_home_buyer_value, 'ms_box_price', 0.00, $('#es_completed_yr').val(), 'ms_gross_proftit', 'ms_total_prchsd', 'ms_total_purchase', 'ms_nm_buyer_pragraph', 'ms_num_buyer', 'ms_total_prchsd_box');
    });

    $('#ms_prcnt_home_buyer').on("change", function (event, ui) {
        // Instantiate a slider
        var ms_paired_sw_cost = $("#ms_paired_sw_cost").slider();
        //Call a method on the slider
        var ms_paired_sw_cost_value = ms_paired_sw_cost.slider('getValue');

        // Instantiate a slider
        var ms_nm_purchased_pr_home = $("#ms_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var ms_nm_purchased_pr_home_value = ms_nm_purchased_pr_home.slider('getValue');

        // Instantiate a slider
        var ms_prcnt_home_buyer = $("#ms_prcnt_home_buyer").slider();
        //Call a method on the slider
        var ms_prcnt_home_buyer_value = ms_prcnt_home_buyer.slider('getValue');
        optionCalculation(ms_paired_sw_cost_value, ms_nm_purchased_pr_home_value, ms_prcnt_home_buyer_value, 'ms_box_price', 0.00, $('#es_completed_yr').val(), 'ms_gross_proftit', 'ms_total_prchsd', 'ms_total_purchase', 'ms_nm_buyer_pragraph', 'ms_num_buyer', 'ms_total_prchsd_box');
    });

    //second

    //on load of page


    $('#zn_feature_sell_price').on("change", function (event, ui) {
        // Instantiate a slider
        var zn_feature_sell_price = $("#zn_feature_sell_price").slider();
        //Call a method on the slider
        var zn_feature_sell_price_value = zn_feature_sell_price.slider('getValue');

        // Instantiate a slider
        var zn_nm_purchased_pr_home = $("#zn_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var zn_nm_purchased_pr_home_value = zn_nm_purchased_pr_home.slider('getValue');
        // Instantiate a slider
        var zn_prcnt_home_buyer = $("#zn_prcnt_home_buyer").slider();
        //Call a method on the slider
        var zn_prcnt_home_buyer_value = zn_prcnt_home_buyer.slider('getValue');

        optionCalculation(zn_feature_sell_price_value, zn_nm_purchased_pr_home_value, zn_prcnt_home_buyer_value, 'zn_box_price', 0.00, $('#es_completed_yr').val(), 'zn_gross_proftit', 'zn_total_prchsd', 'zn_total_purchase', 'zn_nm_buyer_pragraph', 'zn_num_buyer', 'zn_total_prchsd_box');
    });
    $('#zn_nm_purchased_pr_home').on("change", function (event, ui) {
        // Instantiate a slider
        var zn_feature_sell_price = $("#zn_feature_sell_price").slider();
        //Call a method on the slider
        var zn_feature_sell_price_value = zn_feature_sell_price.slider('getValue');

        // Instantiate a slider
        var zn_nm_purchased_pr_home = $("#zn_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var zn_nm_purchased_pr_home_value = zn_nm_purchased_pr_home.slider('getValue');

        // Instantiate a slider
        var zn_prcnt_home_buyer = $("#zn_prcnt_home_buyer").slider();
        //Call a method on the slider
        var zn_prcnt_home_buyer_value = zn_prcnt_home_buyer.slider('getValue');

        optionCalculation(zn_feature_sell_price_value, zn_nm_purchased_pr_home_value, zn_prcnt_home_buyer_value, 'zn_box_price', 0.00, $('#es_completed_yr').val(), 'zn_gross_proftit', 'zn_total_prchsd', 'zn_total_purchase', 'zn_nm_buyer_pragraph', 'zn_num_buyer', 'zn_total_prchsd_box');
    });

    $('#zn_prcnt_home_buyer').on("change", function (event, ui) {
        // Instantiate a slider
        var zn_prcnt_home_buyer = $("#zn_prcnt_home_buyer").slider();
        //Call a method on the slider
        var zn_prcnt_home_buyer_value = zn_prcnt_home_buyer.slider('getValue');

        var zn_nm_purchased_pr_home = $("#zn_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var zn_nm_purchased_pr_home_value = zn_nm_purchased_pr_home.slider('getValue');

        var zn_feature_sell_price = $("#zn_feature_sell_price").slider();
        //Call a method on the slider
        var zn_feature_sell_price_value = zn_feature_sell_price.slider('getValue');

        optionCalculation(zn_feature_sell_price_value, zn_nm_purchased_pr_home_value, zn_prcnt_home_buyer_value, 'zn_box_price', 0.00, $('#es_completed_yr').val(), 'zn_gross_proftit', 'zn_total_prchsd', 'zn_total_purchase', 'zn_nm_buyer_pragraph', 'zn_num_buyer', 'zn_total_prchsd_box');
    });

    //third
    //onload


    $('#ps_feature_sell_price').on("change", function (event, ui) {
        // Instantiate a slider
        var ps_feature_sell_price = $("#ps_feature_sell_price").slider();
        //Call a method on the slider
        var ps_feature_sell_price_value = ps_feature_sell_price.slider('getValue');
        // Instantiate a slider
        var ps_nm_purchased_pr_home = $("#ps_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var ps_nm_purchased_pr_home_value = ps_nm_purchased_pr_home.slider('getValue');
        // Instantiate a slider
        var ps_prcnt_home_buyer = $("#ps_prcnt_home_buyer").slider();
        //Call a method on the slider
        var ps_prcnt_home_buyer_value = ps_prcnt_home_buyer.slider('getValue');
        optionCalculation(ps_feature_sell_price_value, ps_nm_purchased_pr_home_value, ps_prcnt_home_buyer_value, 'ps_box_price', 0.00, $('#es_completed_yr').val(), 'ps_gross_proftit', 'ps_total_prchsd', 'ps_total_purchase', 'ps_nm_buyer_pragraph', 'ps_num_buyer', 'ps_total_prchsd_box');
    });
    $('#ps_nm_purchased_pr_home').on("change", function (event, ui) {
        // Instantiate a slider
        var ps_feature_sell_price = $("#ps_feature_sell_price").slider();
        //Call a method on the slider
        var ps_feature_sell_price_value = ps_feature_sell_price.slider('getValue');
        // Instantiate a slider
        var ps_nm_purchased_pr_home = $("#ps_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var ps_nm_purchased_pr_home_value = ps_nm_purchased_pr_home.slider('getValue');
        // Instantiate a slider
        var ps_prcnt_home_buyer = $("#ps_prcnt_home_buyer").slider();
        //Call a method on the slider
        var ps_prcnt_home_buyer_value = ps_prcnt_home_buyer.slider('getValue');
        optionCalculation(ps_feature_sell_price_value, ps_nm_purchased_pr_home_value, ps_prcnt_home_buyer_value, 'ps_box_price', 0.00, $('#es_completed_yr').val(), 'ps_gross_proftit', 'ps_total_prchsd', 'ps_total_purchase', 'ps_nm_buyer_pragraph', 'ps_num_buyer', 'ps_total_prchsd_box');
    });
    $('#ps_prcnt_home_buyer').on("change", function (event, ui) {
        // Instantiate a slider
        var ps_feature_sell_price = $("#ps_feature_sell_price").slider();
        //Call a method on the slider
        var ps_feature_sell_price_value = ps_feature_sell_price.slider('getValue');
        // Instantiate a slider
        var ps_nm_purchased_pr_home = $("#ps_nm_purchased_pr_home").slider();
        //Call a method on the slider
        var ps_nm_purchased_pr_home_value = ps_nm_purchased_pr_home.slider('getValue');
        // Instantiate a slider
        var ps_prcnt_home_buyer = $("#ps_prcnt_home_buyer").slider();
        //Call a method on the slider
        var ps_prcnt_home_buyer_value = ps_prcnt_home_buyer.slider('getValue');
        optionCalculation(ps_feature_sell_price_value, ps_nm_purchased_pr_home_value, ps_prcnt_home_buyer_value, 'ps_box_price', 0.00, $('#es_completed_yr').val(), 'ps_gross_proftit', 'ps_total_prchsd', 'ps_total_purchase', 'ps_nm_buyer_pragraph', 'ps_num_buyer', 'ps_total_prchsd_box');
    });



    //optin forms last means third form
    //onload of option form third mean last form

    $('#ms_feature_sell_price_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#ms_feature_sell_price_cntrctr').val(), $('#ms_nm_purchased_pr_home_cntrctr').val(), $('#ms_prcnt_home_buyer_cntrctr').val(), 'ms_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'ms_gross_proftit_cntrctr', 'ms_total_purchase_cntrctr_pra', 'ms_total_purchase_cntrctr', 'ms_nm_buyer_pragraph_cntrctr', 'ms_num_buyer_cntrctr', 'ms_total_prchsd_box_cntrctr');
    });
    $('#ms_nm_purchased_pr_home_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#ms_feature_sell_price_cntrctr').val(), $('#ms_nm_purchased_pr_home_cntrctr').val(), $('#ms_prcnt_home_buyer_cntrctr').val(), 'ms_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'ms_gross_proftit_cntrctr', 'ms_total_purchase_cntrctr_pra', 'ms_total_purchase_cntrctr', 'ms_nm_buyer_pragraph_cntrctr', 'ms_num_buyer_cntrctr', 'ms_total_prchsd_box_cntrctr');
    });
    $('#ms_prcnt_home_buyer_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#ms_feature_sell_price_cntrctr').val(), $('#ms_nm_purchased_pr_home_cntrctr').val(), $('#ms_prcnt_home_buyer_cntrctr').val(), 'ms_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'ms_gross_proftit_cntrctr', 'ms_total_purchase_cntrctr_pra', 'ms_total_purchase_cntrctr', 'ms_nm_buyer_pragraph_cntrctr', 'ms_num_buyer_cntrctr', 'ms_total_prchsd_box_cntrctr');
    });

    //second of last form


    $('#zn_feature_sell_price_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#zn_feature_sell_price_cntrctr').val(), $('#zn_nm_purchased_pr_home_cntrctr').val(), $('#zn_prcnt_home_buyer_cntrctr').val(), 'zn_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'zn_gross_proftit_cntrctr', 'zn_total_purchase_cntrctr_pra', 'zn_total_purchase_cntrctr', 'zn_nm_buyer_pragraph_cntrctr', 'zn_num_buyer_cntrctr', 'zn_total_prchsd_box_cntrctr');
    });
    $('#zn_nm_purchased_pr_home_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#zn_feature_sell_price_cntrctr').val(), $('#zn_nm_purchased_pr_home_cntrctr').val(), $('#zn_prcnt_home_buyer_cntrctr').val(), 'zn_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'zn_gross_proftit_cntrctr', 'zn_total_purchase_cntrctr_pra', 'zn_total_purchase_cntrctr', 'zn_nm_buyer_pragraph_cntrctr', 'zn_num_buyer_cntrctr', 'zn_total_prchsd_box_cntrctr');
    });
    $('#zn_prcnt_home_buyer_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#zn_feature_sell_price_cntrctr').val(), $('#zn_nm_purchased_pr_home_cntrctr').val(), $('#zn_prcnt_home_buyer_cntrctr').val(), 'zn_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'zn_gross_proftit_cntrctr', 'zn_total_purchase_cntrctr_pra', 'zn_total_purchase_cntrctr', 'zn_nm_buyer_pragraph_cntrctr', 'zn_num_buyer_cntrctr', 'zn_total_prchsd_box_cntrctr');
    });

    //third of last form

    $('#ps_feature_sell_price_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#ps_feature_sell_price_cntrctr').val(), $('#ps_nm_purchased_pr_home_cntrctr').val(), $('#ps_prcnt_home_buyer_cntrctr').val(), 'ps_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'ps_gross_proftit_cntrctr', 'ps_total_purchase_cntrctr_pra', 'ps_total_purchase_cntrctr', 'ps_nm_buyer_pragraph_cntrctr', 'ps_num_buyer_cntrctr', 'ps_total_prchsd_box_cntrctr');
    });
    $('#ps_nm_purchased_pr_home_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#ps_feature_sell_price_cntrctr').val(), $('#ps_nm_purchased_pr_home_cntrctr').val(), $('#ps_prcnt_home_buyer_cntrctr').val(), 'ps_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'ps_gross_proftit_cntrctr', 'ps_total_purchase_cntrctr_pra', 'ps_total_purchase_cntrctr', 'ps_nm_buyer_pragraph_cntrctr', 'ps_num_buyer_cntrctr', 'ps_total_prchsd_box_cntrctr');
    });
    $('#ps_prcnt_home_buyer_cntrctr').on("change", function (event, ui) {
        optionCalculation($('#ps_feature_sell_price_cntrctr').val(), $('#ps_nm_purchased_pr_home_cntrctr').val(), $('#ps_prcnt_home_buyer_cntrctr').val(), 'ps_box_price_cntrctr', 0.00, $('#option_home_completed').val(), 'ps_gross_proftit_cntrctr', 'ps_total_purchase_cntrctr_pra', 'ps_total_purchase_cntrctr', 'ps_nm_buyer_pragraph_cntrctr', 'ps_num_buyer_cntrctr', 'ps_total_prchsd_box_cntrctr');
    });




    //option second forms calculation
    $('#ms_build_prft_mrgn_cntrctr_price').on("change", function (event, ui) {
        // Instantiate a slider
        var ms_build_prft_mrgn_cntrctr_price = $("#ms_build_prft_mrgn_cntrctr_price").slider();
        //Call a method on the slider
        var ms_build_prft_mrgn_cntrctr_price_value = ms_build_prft_mrgn_cntrctr_price.slider('getValue');

        optionCalculationForm2(ms_build_prft_mrgn_cntrctr_price_value, 'ms_builder_total_prchsed', 'ms_builder_total_prchased', 'ms_builder_prft', 'ms_builder_profit', 'ms_builder_nm_buyer');
    });
    $('#zn_build_prft_mrgn_cntrctr_price').on("change", function (event, ui) {
        // Instantiate a slider
        var zn_build_prft_mrgn_cntrctr_price = $("#zn_build_prft_mrgn_cntrctr_price").slider();
        //Call a method on the slider
        var zn_build_prft_mrgn_cntrctr_price_value = zn_build_prft_mrgn_cntrctr_price.slider('getValue');

        optionCalculationForm2(zn_build_prft_mrgn_cntrctr_price_value, 'zn_builder_total_prchsed', 'zn_builder_total_prchased', 'zn_builder_prft', 'zn_builder_profit', 'zn_builder_nm_buyer');
    });
    $('#ps_build_prft_mrgn_cntrctr_price').on("change", function (event, ui) {
        // Instantiate a slider
        var ps_build_prft_mrgn_cntrctr_price = $("#ps_build_prft_mrgn_cntrctr_price").slider();
        //Call a method on the slider
        var ps_build_prft_mrgn_cntrctr_price_value = ps_build_prft_mrgn_cntrctr_price.slider('getValue');

        optionCalculationForm2(ps_build_prft_mrgn_cntrctr_price_value, 'ps_builder_total_prchsed', 'ps_builder_total_prchased', 'ps_builder_prft', 'ps_builder_profit', 'ps_builder_nm_buyer');
    });
    // on page load last_result_sheet();
    $('#builder_share').on("change", function (event, ui) {
        // Instantiate a slider
        var builder_share = $("#builder_share").slider();
        //Call a method on the slider
        var builder_share_value = builder_share.slider('getValue');

        last_result_sheet(builder_share_value);
    });
    //for num home completed pr yr debuguging
    //result sheet one option one business
    //onload 
    $('.showstep10').load(function () {
        var estimate_trgt_grs_prft_1 = $("#estimate_trgt_grs_prft_1").slider();
        //Call a method on the slider
        var estimate_trgt_grs_prft_1_value = estimate_trgt_grs_prft_1.slider('getValue');
        result_sheet_one_expand_bsns();
        // Instantiate a slider
        var lbr_rate_journyman = $("#lbr_rate_journyman").slider();
        //Call a method on the slider
        var lbr_rate_journyman_value = lbr_rate_journyman.slider('getValue');
        result_sheet_one_expand_time_sving(lbr_rate_journyman_value);
    });

    $('#estimate_trgt_grs_prft_1').on("change", function (event, ui) {
        //alert('here');
        var estimate_trgt_grs_prft_1 = $("#estimate_trgt_grs_prft_1").slider();
        //Call a method on the slider
        var estimate_trgt_grs_prft_1_value = estimate_trgt_grs_prft_1.slider('getValue');
        $('#targt_gross_proft_1').html(estimate_trgt_grs_prft_1_value);
        result_sheet_one_expand_bsns(estimate_trgt_grs_prft_1_value);
        //$('#targt_gross_proft_1').html(event.value);
    });

    //onload 

    $('#lbr_rate_journyman').on("change", function (event, ui) {
        // Instantiate a slider
        var lbr_rate_journyman = $("#lbr_rate_journyman").slider();
        //Call a method on the slider
        var lbr_rate_journyman_value = lbr_rate_journyman.slider('getValue');
        result_sheet_one_expand_time_sving(lbr_rate_journyman_value);
    });

    //sum of all
    function survey(selector, callback) {
        var input = $(selector);
        var oldvalue = input.val();
        setInterval(function () {
            if (input.val() != oldvalue) {
                oldvalue = input.val();
                callback();
            }
        }, 100);
    }
    survey('#ms_gross_proftit', function () {
        summ_of_all();
    });
    survey('#zn_gross_proftit', function () {
        summ_of_all();
    });
    survey('#ps_gross_proftit', function () {
        summ_of_all();
    });

//    $('#ms_gross_proftit').live('change', function() {  
//        alert('here');
//        console.log(this);
//        summ_of_all();
//    })
//    $('#zn_gross_proftit').bind('DOMSubtreeModified', function (event) {
//        summ_of_all();
//    })
//    $('#ps_gross_proftit').bind('DOMSubtreeModified', function (event) {
//        summ_of_all();
//    })

    //second form

    survey('#ms_builder_profit', function () {
        builder_summ_of_all();
    });
    survey('#zn_builder_profit', function () {
        builder_summ_of_all();
    });
    survey('#ps_builder_profit', function () {
        builder_summ_of_all();
    });
//    $('#ms_builder_prft').bind('DOMSubtreeModified', function (event) {
//        builder_summ_of_all();
//    })
//    $('#zn_builder_prft').bind('DOMSubtreeModified', function (event) {
//        builder_summ_of_all();
//    })
//    $('#ps_builder_prft').bind('DOMSubtreeModified', function (event) {
//        builder_summ_of_all();
//    })

    //last form of option contactor ps_box_price_cntrctr

    survey('#ms_gross_proftit_cntrctr', function () {
        summ_of_all_last_form();
    });
    survey('#zn_gross_proftit_cntrctr', function () {
        summ_of_all_last_form();
    });
    survey('#ps_gross_proftit_cntrctr', function () {
        summ_of_all_last_form();
    });
//    $('#ms_box_price_cntrctr').bind('DOMSubtreeModified', function (event) {
//        summ_of_all_last_form();
//    })
//    $('#zn_box_price_cntrctr').bind('DOMSubtreeModified', function (event) {
//        summ_of_all_last_form();
//    })
//    $('#ps_box_price_cntrctr').bind('DOMSubtreeModified', function (event) {
//        summ_of_all_last_form();
//    })

    // show hide result detail
    $('#result_detail').hide();
    $('#toggle').click(function (ev) {
        $('#result_detail').slideToggle('slow', function () {
            $('#toggle').html(($('#toggle').text() == 'Show Calculation Detail') ? 'Hide Calculation Detail' : 'Show Calculation Detail');
        });
    });
// on show of div
    $(".showstep1 .progressbar").progressbar({
        max: 100,
        value: 0
    });
    $(".showstep2 .progressbar").progressbar({
        max: 100,
        value: 10
    });
    $(".showstep3 .progressbar").progressbar({
        max: 100,
        value: 20
    });
    $(".showstep4 .progressbar").progressbar({
        max: 100,
        value: 30
    });
    $(".showstep5 .progressbar").progressbar({
        max: 100,
        value: 40
    });
    $(".showstep6 .progressbar").progressbar({
        max: 100,
        value: 50
    });
    $(".showstep7 .progressbar").progressbar({
        max: 100,
        value: 60
    });
    $(".showstep8 .progressbar").progressbar({
        max: 100,
        value: 70
    });
    $(".showstep9 .progressbar").progressbar({
        max: 100,
        value: 80
    });
    $(".showstep10 .progressbar").progressbar({
        max: 100,
        value: 90
    });
    $(".showstep11 .progressbar").progressbar({
        max: 100,
        value: 100
    });

    $("#txtNoCrewsRoughIn").slider({
        tooltip: 'always',
        tooltip_position: 'bottom'
    });
    function loadStep(id, step) {
        $("#" + id).load(step);
    }
    $('#frmEstimatorstep1').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'estimate_form_process',
            operation: 'firstform',
            importData: $(this).serializeArray()
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('.showstep2 #lastid').val(data);
                showstep('.showstep2', '.showstep1');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }
        });
        e.preventDefault();
    });
    $('#frmEstimatorStep2').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'estimate_form_process',
            operation: '2ndform',
            importData: $(this).serializeArray()
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('.showstep3 #lastid').val(data.lastid);
                showstep('.showstep3', '.showstep2');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }
        });
        e.preventDefault();
    });
    $('#frmEstimatorStep3').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'estimate_form_process',
            operation: '3rdform',
            importData: $(this).serializeArray()
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('.showstep4 #lastid').val(data);
                showstep('.showstep4', '.showstep3');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }
        });
        e.preventDefault();
    });
    $('#frmEstimatorStep4').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'estimate_form_process',
            operation: '4rdform',
            importData: $(this).serializeArray()
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('.showstep6 #lastid').val(data);
                showstep('.showstep6', '.showstep4');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }
        });
        e.preventDefault();
    });

    $('#frmEstimatorStep5').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'estimate_form_process',
            operation: '5thform',
            importData: $(this).serializeArray()
        };
        //remove from here
        console.log(data);
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {

                console.log(data);
                $('.showstep6 #lastid').val(data);
                showstep('.showstep6', '.showstep5');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }
        });
        e.preventDefault();
    });

    $('#frmEstimatorStep6').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'estimate_form_process',
            operation: '6thform',
            importData: $(this).serializeArray()
        };
        //remove from here
        console.log(data);
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {

                console.log(data);
                console.log(data.formData.num_home_completed_pr_year);
                $('#es_completed_yr').val(data.formData.num_home_completed_pr_year);
                $('#print_it').html(data.formData.num_home_completed_pr_year);

                $('.showstep7 #lastid').val(data.lastid);
                showstep('.showstep7', '.showstep6');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    //code for option 
    function loadOptionStep(id, step) {
        $("#" + id).load(step);
    }

    $('#frmoption1').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'option_form_process',
            operation: 'firstoptionform',
            importData: $(this).serializeArray()
        };
        console.log(data);

        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#ms_builder_total_prchsed').html(data.posteddata.ms_total_purchase);
                $('#zn_builder_total_prchsed').html(data.posteddata.zn_total_purchase);
                $('#ps_builder_total_prchsed').html(data.posteddata.ps_total_purchase);
                $('#ms_builder_nm_buyer').html(data.posteddata.ms_num_buyer);
                $('#zn_builder_nm_buyer').html(data.posteddata.zn_num_buyer);
                $('#ps_builder_nm_buyer').html(data.posteddata.ps_num_buyer);
                optionCalculationForm2($('#ms_build_prft_mrgn_cntrctr_price').val(), 'ms_builder_total_prchsed', 'ms_builder_total_prchased', 'ms_builder_prft', 'ms_builder_profit', 'ms_builder_nm_buyer');
                optionCalculationForm2($('#zn_build_prft_mrgn_cntrctr_price').val(), 'zn_builder_total_prchsed', 'zn_builder_total_prchased', 'zn_builder_prft', 'zn_builder_profit', 'zn_builder_nm_buyer');
                optionCalculationForm2($('#ps_build_prft_mrgn_cntrctr_price').val(), 'ps_builder_total_prchsed', 'ps_builder_total_prchased', 'ps_builder_prft', 'ps_builder_profit', 'ps_builder_nm_buyer');
                $('.showstep8 #lastid').val(data.lastid);
                $('.showstep8 #ms_builder_total_prchsed').html(data.posteddata.ms_total_purchase);
                $('.showstep8 #zn_builder_total_prchsed').html(data.posteddata.zn_total_purchase);
                $('.showstep8 #ps_builder_total_prchsed').html(data.posteddata.ps_total_purchase);
                $('.showstep8 #ms_builder_nm_buyer').html(data.posteddata.ms_num_buyer);
                $('.showstep8 #zn_builder_nm_buyer').html(data.posteddata.zn_num_buyer);
                $('.showstep8 #ps_builder_nm_buyer').html(data.posteddata.ps_num_buyer);
                showstep('.showstep8', '.showstep7')
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    $('#frmoption2').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'option_form_process',
            operation: '2ndOptionform',
            importData: $(this).serializeArray()
        };
        console.log(data);
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
//                var val1 = $("#ms_box_price_cntrctr").html();
//                var val2 = $("#zn_box_price_cntrctr").html();
//                var val2 = $("#ps_box_price_cntrctr").html();
                //onload_summ_of_all_last_form(val1, val2, val2);
                $('#nm_mn_crew_roughin_pragraph').html(data.formData.get_men_per_rough_crew);
                $('#nm_eight_days_roughin_pragraph').html(data.formData.get_eight_hr_days_rough_in);
                $('#total_switches_in_home_para').html(data.formData.total_switches_in_home);
                $('#total_nm_sw_in_home').val(data.formData.total_switches_in_home);
                $('#mnt_roughin_one_sw_1').html(data.formData.mnt_pr_switch);
                $('.traditional_wired_hrs_pragraph').html(data.formData.get_rough_in_labor_hr);
                $('#roughgin_lbr_pr_home').val(data.formData.get_rough_in_labor_hr);
                $('#tr_mtrial_cst_pr_instltion').val(data.formData.mtrl_cst_pr_inst);
                $('#tr_mtrial_cst_pr_switch').val(data.formData.mtrl_cst_pr_sw);
                $('#tr_lbr_cst_pr_installtion').val(data.formData.lbr_cst_pr_inst);
                $('#tr_lbr_cst_pr_sw').val(data.formData.lbr_cst_pr_sw); 
                $('#tr_matrial_and_lbr_cst').val(data.formData.metrial_and_lbr_cst);                 
                $('.hour_saved_faster_rough_in_gc').html(data.formData.hour_saved_faster_gc);
                $('#hour_saved_faster_rough_in_gc_1').html(data.formData.hour_saved_faster_gc);
                $('#roughin_hr_svd_pr_home_no_leg').val(data.formData.hour_saved_faster_gc);
                $('#hr_saved_faster_rough_in').html(data.formData.hour_saved_faster_gc);
                $('.hours_saved_pr_home_installation').html(data.formData.hrs_saved_pr_home_installation);
                $('#hour_saved_pr_home').val(data.formData.hrs_saved_pr_home_installation);
                $('.num_completed_pr_yr').html(data.formData.nm_completed_pr_yr);
                $('#hours_saved_annually_1').html(data.formData.hrs_saved_annually);
                $('#hours_saved_annually_2').html(data.formData.hrs_saved_annually);
                $('#hours_saved_annually_3').html(data.formData.hrs_saved_annually);
                $('#annual_hrs_svd_exsting_roughin').val(data.formData.hrs_saved_annually);
                $('#possible_additional_roughin_pr_yr_1').html(data.formData.additional_houses);
                $('#possible_additional_roughin_pr_yr_2').html(data.formData.possible_additional_rf_in_pr_yr);
                $('#possible_additional_roughin_pr_yr_3').html(data.formData.possible_additional_rf_in_pr_yr);
                $('#possible_additional_roughin_pr_yr_4').html(data.formData.possible_additional_rf_in_pr_yr);
                $('#possible_additional_roughin_pr_yr_5').html(data.formData.possible_additional_rf_in_pr_yr);
                $('#possible_additional_roughin_pr_yr_6').html(data.formData.possible_additional_rf_in_pr_yr);
                $('#total_pssble_added_roughin_pr_anm').val(data.formData.possible_additional_rf_in_pr_yr);
                $('#estimate_trgt_grs_prft_1').val(data.formData.target_gross_profit);
                $('#targt_gross_proft_1').html(data.formData.target_gross_profit);
                $('#profit_increase_1').html(data.formData.profit_increase_additional);
                $('#profit_increase_2').html(data.formData.profit_increase_additional);
                $('#prcnt_time_saved_1').html(data.formData.prcnt_time_saved_no_leg);
                $('#efficiency_gain').val(data.formData.prcnt_time_saved_no_leg);
                $('#prcnt_time_saved_2').html(data.formData.prcnt_time_saved_no_leg);
                $('#prcnt_time_saved_3').html(data.formData.prcnt_time_saved_no_leg);
                $('#profit_increase_additional').val(data.formData.profit_increase_additional);
                $('#annual_gross_prft').html(data.formData.annual_gross_proft);
                $('#gross_profit_from_opt').val(data.formData.annual_gross_proft);
                $('#annual_gross_profit_increase_add_home').html(data.formData.annual_grs_pft_inr_add_home);
                $('#annual_grs_prft_potential').val(data.formData.annual_grs_pft_inr_add_home);
                $('#annual_man_hours').html(data.formData.annual_man_hrs);
                $('#gc_annual_man_hrs').val(data.formData.annual_man_hrs);
                //$('#annual_man_hours_1').html(data.formData.annual_man_hrs);
                $('#staff_svng_hr_svd_mn_avl_pr_hr').val(data.formData.possible_staff_svng);
                $('#possible_staff_saving_1').html(data.formData.possible_staff_svng);
                $('#possible_staff_saving_2').html(data.formData.possible_staff_svng);
                $('#lbr_rate_journyman').val(data.formData.labour_rate);
                //$('#lbr_rate_journyman_1').html(data.formData.labour_rate);
                //$('#annual_wages').html(data.formData.annual_wages);
                //$('#anuual_wages_hrs').val(data.formData.annual_wages);
                //$('#last_annual_saving').html(data.formData.annual_saving_last);
                //$('#annual_saving').val(data.formData.annual_saving_last);

                //loading the result of next page
                var estimate_trgt_grs_prft_1 = $("#estimate_trgt_grs_prft_1").slider();
                //Call a method on the slider
                var estimate_trgt_grs_prft_1_value = estimate_trgt_grs_prft_1.slider('getValue');
                result_sheet_one_expand_bsns(estimate_trgt_grs_prft_1_value);
                // Instantiate a slider
                var lbr_rate_journyman = $("#lbr_rate_journyman").slider();
                //Call a method on the slider
                var lbr_rate_journyman_value = lbr_rate_journyman.slider('getValue');
                result_sheet_one_expand_time_sving(lbr_rate_journyman_value);

                $('.showstep10 #lastid').val(data.lastid);
                $('.showstep9 #lastid').val(data.lastid);
                showstep('.showstep10', '.showstep8');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    $('#frmoption3').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'builder_form_process',
            operation: '3rdOptionform',
            importData: $(this).serializeArray()
        };
        console.log(data);
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                window.location.href = scriptParams.report_url + "?id=" + data;
                //showstep('.showstep12', '.showstep11');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    //code for the result
    //code for option 
    function loadResultStep(id, step) {
        $("#" + id).load(step);
    }

    $('#frmResultOne').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'process_result',
            operation: 'processResultOne',
            importData: $(this).serializeArray()
        };
        console.log(data);
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);

                $('#nm_home_completed_per_year').html(data.formData.nm_home_completed_pr_year);
                $('#nm_home_completed_per_year_2').html(data.formData.nm_home_completed_pr_year);
                $('#nm_home_completed_per_year_3').html(data.formData.nm_home_completed_pr_year);
                $('#nm_home_completed_per_year_4').html(data.formData.best_hme_pr_yr_ttl_possible);
                $('#best_nm_hme_cmpltd_total_possible').val(data.formData.best_hme_pr_yr_ttl_possible);
                $('#total_gc_exstng').html(data.formData.total_gc_existing);

                $('#gc_pwr_cntrl_total').val(data.formData.total_gc_existing);

                $('#good_gc_pwr_cntrl').html(data.formData.gc_value_pr_home);

                $('#gc_value_pr_home_bsns_2').html(data.formData.gc_value_pr_home);
                $('#gc_pwr_cntrl_value_pr_home').val(data.formData.gc_value_pr_home);


                $('#total_builder_opt').html(data.formData.total_gc_profit_builder);
                $('#possible_additional_roughin_pr_yr_6').html(data.formData.possible_additional_rf_in_pr_yr);

                $('#gc_pwr_cntrl_bldr_option_prce_pr_hme').val(data.formData.total_gc_profit_builder);
                //$('#prcnt_time_saved_3').html(data.formData.prcnt_time_saved_no_leg);

                $('#builder_price_price_per_home_pra').html(data.formData.builder_profit_option_home);
                $('#builder_price_price_per_home').val(data.formData.builder_profit_option_home);

                $('#builder_willing_share_1').html(data.formData.builder_willing_t_share);
                $('#builder_willing_share_2').html(data.formData.builder_willing_t_share);
                $('#builder_willing_share_3').html(data.formData.builder_willing_t_share);
                $('#builder_willing_share').val(data.formData.builder_willing_t_share);

                $('#gc_pwr_cntrl_total_vlu_dlr_pr_hme').val(data.formData.good_gc_total_value);
                $('#good_gc_total_value_pra').html(data.formData.good_gc_total_value);

                $('#btr_total_existing').html(data.formData.btr_total_from_existing);

                $('#gc_pwr_cntrl_total_adjust_staff').val(data.formData.btr_total_from_existing);
                $('#btr_gc_value_pr_home').html(data.formData.btr_gc_value_pr_home);
                $('#btr_gc_value_pr_home_2').html(data.formData.btr_gc_value_pr_home);
                $('#gc_pwr_cntrl_adjust_staff_vlue_pr_hme').val(data.formData.btr_gc_value_pr_home);

                $('#btr_total_value_pr_home').html(data.formData.btr_gc_total_vlue_pr_home);
                $('#gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme').val(data.formData.btr_gc_total_vlue_pr_home);


                $('#bst_gc_value_pr_home_p').html(data.formData.bst_total_from_existing);

                $('#gc_pwr_cntrl_do_more_exstng_rsrces_total').val(data.formData.bst_total_from_existing);

                $('#best_gc_value_pr_home').html(data.formData.bst_gc_value_pr_home);
                $('#bst_gc_value_pr_home_2').html(data.formData.bst_gc_value_pr_home);
                $('#gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme').val(data.formData.bst_gc_value_pr_home);

                $('#bst_total_value_pr_home').html(data.formData.bst_gc_total_vlue_pr_home);
                $('#gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme').val(data.formData.bst_gc_total_vlue_pr_home);

                //loading the result when the page is display

                // Instantiate a slider
                var builder_share = $("#builder_share").slider();
                //Call a method on the slider
                var builder_share_value = builder_share.slider('getValue');
                last_result_sheet(builder_share_value);

                $('.showstep11 #lastid').val(data.lastid);

                showstep('.showstep11', '.showstep10');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    $('#frmResultTwo').submit(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var data = {
            action: 'process_result',
            operation: 'processResultTwo',
            importData: $(this).serializeArray()
        };
        console.log(data);
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                window.location.href = scriptParams.report_url + "?id=" + data;
                //showstep('.showstep12', '.showstep11');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });

    function showstep(steptoshow, steptohide) {
        if (steptoshow == '.showstep7')
        {
            optionCalculation($('#ms_paired_sw_cost').val(), $('#ms_nm_purchased_pr_home').val(), $('#ms_prcnt_home_buyer').val(), 'ms_box_price', 0.00, $('#es_completed_yr').val(), 'ms_gross_proftit', 'ms_total_prchsd', 'ms_total_purchase', 'ms_nm_buyer_pragraph', 'ms_num_buyer', 'ms_total_prchsd_box');
            optionCalculation($('#zn_feature_sell_price').val(), $('#zn_nm_purchased_pr_home').val(), $('#zn_prcnt_home_buyer').val(), 'zn_box_price', 0.00, $('#es_completed_yr').val(), 'zn_gross_proftit', 'zn_total_prchsd', 'zn_total_purchase', 'zn_nm_buyer_pragraph', 'zn_num_buyer', 'zn_total_prchsd_box');
            optionCalculation($('#ps_feature_sell_price').val(), $('#ps_nm_purchased_pr_home').val(), $('#ps_prcnt_home_buyer').val(), 'ps_box_price', 0.00, $('#es_completed_yr').val(), 'ps_gross_proftit', 'ps_total_prchsd', 'ps_total_purchase', 'ps_nm_buyer_pragraph', 'ps_num_buyer', 'ps_total_prchsd_box');
            on_load_summ_of_all($('#zn_gross_proftit').val(), $('#ms_gross_proftit').val(), $('#ps_gross_proftit').val());
        }

        $(steptoshow).show();
        $(steptohide).hide();
    }

    //second to first form
    $(".showstep2 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#lastidfirstform').val(data.id);
                $('#txtWire2Cond').val(data.wire_two_cond_qnty);
                $('#txtWire2CondPrice').val(data.wire_two_cond_price);
                $('#txtWire3Cond').val(data.wire_three_cond_qnty);
                $('#txtWire3CondPrice').val(data.wire_three_cond_price);
                $('#txtPipCond').val(data.pip_cond_qnty);
                $('#txtPipCondPrice').val(data.pip_cond_price);
                showstep('.showstep1', '.showstep2');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    //end second to first form

    //start third to second form
    $(".showstep3 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#txtOneGangQ').val(data.one_gang_box_qnty);
                $('#txtOneGangP').val(data.one_gang_box_price);
                $('#txtTwoGangQ').val(data.two_gang_box_qnty);
                $('#txtTwoGangP').val(data.two_gang_box_price);
                $('#txtThreeGangQ').val(data.three_gang_box_qnty);
                $('#txtThreeGangP').val(data.three_gang_box_price);
                $('#txtFourGangQ').val(data.four_gang_box_qnty);
                $('#txtFourGangP').val(data.four_gang_box_price);
                showstep('.showstep2', '.showstep3');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });

    //end third to second form

    //start fourth to third form
    $(".showstep4 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#txtOneGangVPRQ').val(data.one_gang_vpr_boot_qnty);
                $('#txtOneGangVPRprice').val(data.one_gang_vpr_boot_price);
                $('#txtTwoGangVPRQ').val(data.twp_gang_vpr_boot_qnty);
                $('#txtTwoGangVPRprice').val(data.two_gang_vpr_boot_price);
                $('#txtThreeGangVPRQ').val(data.three_gang_vpr_boot_qnty);
                $('#txtThreeGangVPRprice').val(data.three_gang_vpr_boot_price);
                $('#txtFourGangVPRQ').val(data.four_gang_vpr_boot_qnty);
                $('#txtFourGangVPRprice').val(data.four_gang_vpr_boot_price);
                showstep('.showstep3', '.showstep4');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });

    //end four to third form

    //start fifth to fourth form
    $(".showstep5 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#txtDecoraSinglePoleQ').val(data.decra_single_pool_qnty);
                $('#txtDecoraSinglePolePrice').val(data.decra_single_pool_price);
                $('#txtDecoraThreeWyQ').val(data.decra_three_wy_switch_qnty);
                $('#txtDecoraThreeWyPrice').val(data.decra_three_wy_switch_price);
                $('#txtDecoraFourWyQ').val(data.decra_four_wy_switch_qnty);
                $('#txtDecoraFourWyPrice').val(data.decra_four_wy_switch_price);
                $('#txtWireConnectorQ').val(data.wire_conductor_qnty);
                $('#txtWireConnectorPrice').val(data.wire_conductor_price);
                showstep('.showstep4', '.showstep5');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });

    //end fifth to fourth form

    //start sixth to fifth form
    $(".showstep6 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#txtDecoraSinglePoleQ').val(data.decra_single_pool_qnty);
                $('#txtDecoraSinglePolePrice').val(data.decra_single_pool_price);
                $('#txtDecoraThreeWyQ').val(data.decra_three_wy_switch_qnty);
                $('#txtDecoraThreeWyPrice').val(data.decra_three_wy_switch_price);
                $('#txtDecoraFourWyQ').val(data.decra_four_wy_switch_qnty);
                $('#txtDecoraFourWyPrice').val(data.decra_four_wy_switch_price);
                $('#txtWireConnectorQ').val(data.wire_conductor_qnty);
                $('#txtWireConnectorPrice').val(data.wire_conductor_price);

                showstep('.showstep4', '.showstep6');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
            }

        });
        e.preventDefault();
    });

    //end sixth to fifth form



    $(".showstep7 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#nm_crews_roughin_qnty').val(data.nm_crews_roughin_qnty);
                $('#nm_men_rough_in').val(data.nm_men_rough_in);
                $('#cmbnd_hrly_lbr_rate_crews_roughin').val(data.cmbnd_hrly_lbr_rate_crews_roughin);
                $('#nm_eight_hr_for_roughin').val(data.nm_eight_hr_for_roughin);
                $('#mnt_pr_home_seal_switch_vpr_brr').val(data.mnt_pr_home_seal_switch_vpr_brr);
                $('#nm_home_cmpltd_pr_yr_1').val(data.nm_home_cmpltd_pr_yr);
                $('#prcntge_without_switch').val(data.prcntge_without_switch);
                $('#trgt_gross_prft_dlr').val(data.trgt_gross_prft_dlr);
                showstep('.showstep6', '.showstep7');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
                $.loader('close');
            }

        });
        e.preventDefault();
    });
    $(".showstep8 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#es_completed_yr').val(data.es_completed_yr);

                $('#ms_paired_sw_cost').val(data.ms_paired_sw_cost);
                $('#ms_nm_purchased_pr_home').val(data.ms_nm_purchased_pr_home);
                $('#ms_prcnt_home_buyer').val(data.ms_prcnt_home_buyer);

                $('#ms_total_purchase').val(data.ms_total_purchase);
                $('#ms_total_prchsd').html(data.ms_total_purchase);
                $('#ms_total_prchsd_box').html(data.ms_total_purchase);

                $('#ms_num_buyer').val(data.ms_num_buyer);
                $('#ms_nm_buyer_pragraph').html(data.ms_num_buyer);

                $('#ms_gross_proftit').val(data.ms_gross_proftit);
                $('#ms_box_price').html(data.ms_gross_proftit);

                $('#zn_num_buyer').val(data.zn_num_buyer);
                $('#zn_nm_buyer_pragraph').html(data.ms_num_buyer);

                $('#zn_feature_sell_price').val(data.zn_feature_sell_price);
                $('#zn_nm_purchased_pr_home').val(data.zn_nm_purchased_pr_home);
                $('#zn_prcnt_home_buyer').val(data.zn_prcnt_home_buyer);

                $('#zn_total_purchase').val(data.zn_total_purchase);
                $('#zn_total_prchsd').html(data.zn_total_purchase);
                $('#zn_total_prchsd_box').html(data.zn_total_purchase);

                $('#zn_gross_proftit').val(data.zn_gross_proftit);
                $('#zn_box_price').html(data.zn_gross_proftit);

                $('#ps_feature_sell_price').val(data.ps_feature_sell_price);
                $('#ps_nm_purchased_pr_home').val(data.ps_nm_purchased_pr_home);
                $('#ps_prcnt_home_buyer').val(data.ps_prcnt_home_buyer);

                $('#ps_num_buyer').val(data.ps_num_buyer);
                $('#ps_nm_buyer_pragraph').html(data.ps_num_buyer);

                $('#ps_total_purchase').val(data.ps_total_purchase);
                $('#ps_total_prchsd').html(data.ps_total_purchase);
                $('#ps_total_prchsd_box').html(data.ps_total_purchase);

                $('#ps_gross_proftit').val(data.ps_gross_proftit);
                $('#ps_box_price').html(data.ps_gross_proftit);

                $('#sum_ms_zn_ps').val(data.sum_ms_zn_ps);
                $('#sum_all').html(data.sum_ms_zn_ps);


                showstep('.showstep7', '.showstep8');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    $(".showstep9 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#ms_build_prft_mrgn_cntrctr_price').val(data.ms_build_prft_mrgn_cntrctr_price);

                $('#ms_builder_total_prchased').val(data.ms_builder_total_prchased);
                $('#ms_builder_total_prchsed').html(data.ms_builder_total_prchsed);

                $('#ms_builder_profit').val(data.ms_builder_profit);
                $('#ms_builder_prft').html(data.ms_builder_profit);

                $('#ms_builder_nm_buyer').html(data.ms_num_buyer);
                $('#zn_builder_nm_buyer').html(data.zn_num_buyer);
                $('#ps_builder_nm_buyer').html(data.ps_num_buyer);

                $('#zn_build_prft_mrgn_cntrctr_price').val(data.zn_build_prft_mrgn_cntrctr_price);

                $('#zn_builder_total_prchased').val(data.zn_builder_total_prchased);
                $('#zn_builder_total_prchsed').html(data.zn_builder_total_prchased);

                $('#zn_builder_profit').val(data.zn_builder_profit);
                $('#zn_builder_prft').html(data.zn_builder_profit);

                $('#ps_build_prft_mrgn_cntrctr_price').val(data.ps_build_prft_mrgn_cntrctr_price);

                $('#ps_builder_total_prchased').val(data.ps_builder_total_prchased);
                $('#ps_builder_total_prchsed').html(data.ps_builder_total_prchsed);

                $('#ps_builder_profit').val(data.ps_builder_profit);
                $('#ps_builder_prft').html(data.ps_builder_profit);

                $('#sum_ms_zn_ps_builder_proft').val(data.sum_ms_zn_ps_builder_proft);
                $('#sum_ms_zn_ps_builder_prft').html(data.sum_ms_zn_ps_builder_proft);


                showstep('.showstep8', '.showstep9');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    $(".showstep10 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);
                $('#option_home_completed').val(data.option_home_completed);
                $('#ms_feature_sell_price_cntrctr').val(data.ms_feature_sell_price_cntrctr);
                $('#ms_nm_purchased_pr_home_cntrctr').val(data.ms_nm_purchased_pr_home_cntrctr);
                $('#ms_prcnt_home_buyer_cntrctr').val(data.ms_prcnt_home_buyer_cntrctr);

                $('#ms_total_purchase_cntrctr').val(data.ms_total_purchase_cntrctr);
                $('#ms_total_purchase_cntrctr_pra').html(data.ms_total_purchase_cntrctr);
                $('#ms_total_prchsd_box_cntrctr').html(data.ms_total_purchase_cntrctr);

                $('#ms_total_purchase').val(data.ms_total_purchase);
                $('#ms_nm_buyer_pragraph_cntrctr').html(data.ms_total_purchase);

                $('#ms_gross_proftit_cntrctr').val(data.ms_gross_proftit_cntrctr);
                $('#ms_box_price_cntrctr').html(data.ms_gross_proftit_cntrctr);

                $('#zn_feature_sell_price_cntrctr').val(data.zn_feature_sell_price_cntrctr);
                $('#zn_nm_purchased_pr_home_cntrctr').val(data.zn_nm_purchased_pr_home_cntrctr);
                $('#zn_prcnt_home_buyer_cntrctr').val(data.zn_prcnt_home_buyer_cntrctr);

                $('#zn_total_purchase_cntrctr').val(data.zn_total_purchase_cntrctr);
                $('#zn_total_purchase_cntrctr_pra').html(data.zn_total_purchase_cntrctr);
                $('#zn_total_prchsd_box_cntrctr').html(data.zn_total_purchase_cntrctr);

                $('#zn_gross_proftit_cntrctr').val(data.zn_gross_proftit_cntrctr);
                $('#zn_box_price_cntrctr').html(data.zn_gross_proftit_cntrctr);

                $('#ps_feature_sell_price_cntrctr').val(data.ps_feature_sell_price_cntrctr);
                $('#ps_nm_purchased_pr_home_cntrctr').val(data.ps_nm_purchased_pr_home_cntrctr);
                $('#ps_prcnt_home_buyer_cntrctr').val(data.ps_prcnt_home_buyer_cntrctr);

                $('#ps_total_purchase_cntrctr').val(data.ps_total_purchase_cntrctr);
                $('#ps_total_purchase_cntrctr_pra').html(data.ps_total_purchase_cntrctr);
                $('#ps_total_prchsd_box_cntrctr').html(data.ps_total_purchase_cntrctr);

                $('#ps_gross_proftit_cntrctr').val(data.ps_gross_proftit_cntrctr);
                $('#ps_box_price_cntrctr').html(data.ps_gross_proftit_cntrctr);

                $('#sum_ms_zn_ps_cntrctr').val(data.sum_ms_zn_ps_cntrctr);
                $('#sum_all_cntrctr').html(data.sum_ms_zn_ps_cntrctr);


                showstep('.showstep8', '.showstep10');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
    $(".showstep11 #back").click(function (e) {
        $.loader({
            content: '<img src="' + scriptParams.plugin_url + '/images/ajax-loader.gif">'
        });
        var id = $('#lastid').val();
        var data = {
            action: 'estimate_form_process',
            operation: 'getData',
            importData: id
        };
        $.ajax({
            url: scriptParams.ajaxurl,
            type: 'POST',
            data: data,
            success: function (data, textStatus, jqXHR)
            {
                console.log(data);

                showstep('.showstep10', '.showstep11');
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $.loader('close');
                $('body, html').animate({scrollTop: $('body').offset().top}, 'slow');
            }

        });
        e.preventDefault();
    });
});
function optionCalculation(f_sell_price, num_prchased_pr_home, prcnt_home_buyer, p_id, p_cost_sw, num_home_completed_pr_yr, gross_proftit, total_prchsed, input_total_purchsed, nm_buyer_pragraph, num_buyer_input, total_purchased_box)
{
    var gross_profit;
    var total_purchased;
    var profit_dollar;
    var prcent_home_buyer;
    var number_of_buyer;

    prcent_home_buyer = prcnt_home_buyer / 100.00;
    gross_profit = f_sell_price - p_cost_sw;

    total_purchased = num_home_completed_pr_yr * prcent_home_buyer * num_prchased_pr_home;

    number_of_buyer = num_home_completed_pr_yr * prcent_home_buyer;

    document.getElementById(nm_buyer_pragraph).innerHTML = CurrencyFormat(Math.round(number_of_buyer * 100 ) / 100 );
    document.getElementById(num_buyer_input).value = Math.round(number_of_buyer * 100 ) / 100 ;

    profit_dollar = gross_profit * total_purchased;
    document.getElementById(p_id).innerHTML = CurrencyFormat(Math.round(profit_dollar * 100 ) / 100 );
    document.getElementById(gross_proftit).value = Math.round(profit_dollar * 100 ) / 100 ;
    document.getElementById(total_prchsed).innerHTML = CurrencyFormat(Math.round(total_purchased * 100 ) / 100 );
    document.getElementById(total_purchased_box).innerHTML = CurrencyFormat(Math.round(total_purchased * 100 ) / 100 );
    document.getElementById(input_total_purchsed).value = Math.round(total_purchased * 100 ) / 100 ;

    //returning the values
    return profit_dollar ;
}
function summ_of_all()
{
    // args val_1, val_2, val_3
    var val_1;
    var val_2;
    var val_3;
    var sum;

    val_1 = document.getElementById("ms_gross_proftit").value;
    val_2 = document.getElementById("zn_gross_proftit").value;
    val_3 = document.getElementById("ps_gross_proftit").value;

    sum = parseFloat(val_1) + parseFloat(val_2) + parseFloat(val_3);
    document.getElementById('sum_all').innerHTML = CurrencyFormat(Math.round(sum * 100 ) / 100 );
    document.getElementById('sum_ms_zn_ps').value = Math.round(sum * 100 ) / 100 ;

    return sum ;
}
function on_load_summ_of_all(val_1, val_2, val_3)
{
    // args val_1, val_2, val_3
    var sum;
    val_1 = document.getElementById("ms_gross_proftit").value;
    val_2 = document.getElementById("zn_gross_proftit").value;
    val_3 = document.getElementById("ps_gross_proftit").value;

    sum = parseFloat(val_1) + parseFloat(val_2) + parseFloat(val_3);
    document.getElementById('sum_all').innerHTML = CurrencyFormat(Math.round(sum * 100 ) / 100 );
    document.getElementById('sum_ms_zn_ps').value = Math.round(sum * 100 ) / 100 ;

    return sum ;
}

// secon form option
// optionCalculationForm2($('#ms_build_prft_mrgn_cntrctr_price').val(),  0.00,  'ps_builder_total_prchsed', 'ps_builder_total_prchased', 'ps_builder_prft', 'ps_builder_profit');
function optionCalculationForm2(build_profit, total_prchsed_p, total_prchsed_input, builder_prft_p, builder_profit_input, number_buyer_paragraph)
{
    //var gross_profit;
    var total_purchased;
    var profit_dollar;
    var number_buyer_para;
    // var prcent_home_buyer;
    //var hidden_vl;
    //hidden_vl = document.getElementById('es_completed_yr').value;
//    
//   
//
//    prcent_home_buyer = prcnt_home_buyer_previous / 100.00;
//    gross_profit = build_profit - p_cost_sw;
//    total_purchased = num_home_completed_pr_yr * prcent_home_buyer * num_prchased_pr_home;

    total_purchased = document.getElementById(total_prchsed_p).innerHTML;

    number_buyer_para = document.getElementById(number_buyer_paragraph).innerHTML;

    profit_dollar = build_profit * total_purchased;

    document.getElementById(builder_prft_p).innerHTML = CurrencyFormat(Math.round(profit_dollar * 100 ) / 100 );
    document.getElementById(total_prchsed_input).value = Math.round(total_purchased * 100 ) / 100 ;
    document.getElementById(builder_profit_input).value = Math.round(profit_dollar * 100 ) / 100 ;
//    document.getElementById(gross_proftit).value = Math.round(profit_dollar * 100 ) / 100 ;
//    document.getElementById(total_prchsed).innerHTML = Math.round(total_purchased * 100 ) / 100 ;
//    document.getElementById(input_total_purchsed).value = Math.round(total_purchased * 100 ) / 100 ;

    //returning the values
    return profit_dollar ;
}
// builder sum of all
function builder_summ_of_all()
{
    // args val_1, val_2, val_3
    var val_1;
    var val_2;
    var val_3;
    var sum;


    val_1 = document.getElementById("ms_builder_profit").value;
    val_2 = document.getElementById("zn_builder_profit").value;
    val_3 = document.getElementById("ps_builder_profit").value;
    sum = parseFloat(val_1) + parseFloat(val_2) + parseFloat(val_3);

    document.getElementById('sum_ms_zn_ps_builder_prft').innerHTML = CurrencyFormat(Math.round(sum * 100 ) / 100 );
    document.getElementById('sum_ms_zn_ps_builder_proft').value = Math.round(sum * 100 ) / 100 ;

    return sum ;
}

function summ_of_all_last_form()
{
    // args val_1, val_2, val_3
    var val_1;
    var val_2;
    var val_3;
    var sum;

    val_1 = document.getElementById("ms_gross_proftit_cntrctr").value;
    val_2 = document.getElementById("zn_gross_proftit_cntrctr").value;
    val_3 = document.getElementById("ps_gross_proftit_cntrctr").value;

    sum = parseFloat(val_1) + parseFloat(val_2) + parseFloat(val_3);
    document.getElementById('sum_all_cntrctr').innerHTML = CurrencyFormat(Math.round(sum * 100 ) / 100 );
    document.getElementById('sum_ms_zn_ps_cntrctr').value = Math.round(sum * 100 ) / 100 ;

    return sum ;
}
function onload_summ_of_all_last_form(val_1, val_2, val_3)
{
    var sum;

    sum = parseFloat(val_1) + parseFloat(val_2) + parseFloat(val_3);
    document.getElementById('sum_all_cntrctr').innerHTML = CurrencyFormat(Math.round(sum * 100 ) / 100 );
    document.getElementById('sum_ms_zn_ps_cntrctr').value = Math.round(sum * 100 ) / 100 ;

    return sum ;
}

//result sheet one 
function result_sheet_one_expand_bsns(estimate_trgt_prft)
{
    var gross_profit;
    var profit_increase;
    var possible_rough_in;
    var gross_profit_option;
    var annual_grs_profit;
    var annual_prft;


//    var estimate_trgt_grs_prft_1 = $("#estimate_trgt_grs_prft_1").slider();
//    //Call a method on the slider
//    var estimate_trgt_grs_prft_1_value = estimate_trgt_grs_prft_1.slider('getValue');

    gross_profit = estimate_trgt_prft
    possible_rough_in = document.getElementById("total_pssble_added_roughin_pr_anm").value;


    //document.getElementById("targt_gross_proft_1").innerHTML = document.getElementById("estimate_trgt_grs_prft_1").value;
    // console.log('gross profit pr hm ' + document.getElementById("targt_gross_proft_1").innerHTML);
    // document.getElementById("targt_gross_proft_1").innerHTML = Math.round(gross_profit * 100 ) / 100 ;

    profit_increase = gross_profit * possible_rough_in;
    document.getElementById("profit_increase_1").innerHTML = CurrencyFormat(Math.round(profit_increase * 100 ) / 100 );
    document.getElementById("profit_increase_2").innerHTML = CurrencyFormat(Math.round(profit_increase * 100 ) / 100 );
    document.getElementById("profit_increase_additional").value = Math.round(profit_increase * 100 ) / 100 ;

    //annual_grs_profit = document.getElementById("annual_gross_prft").innerHTML;
    annual_grs_profit = document.getElementById("gross_profit_from_opt").value;
    document.getElementById("annual_gross_prft").innerHTML = CurrencyFormat(Math.round(annual_grs_profit * 100 ) / 100 );
    document.getElementById("gross_profit_from_opt").value = Math.round(annual_grs_profit * 100 ) / 100 ;


    gross_profit_option = parseFloat(profit_increase) + parseFloat(annual_grs_profit);

    document.getElementById("annual_gross_profit_increase_add_home").innerHTML = CurrencyFormat(Math.round(gross_profit_option * 100 ) / 100 );
    document.getElementById("annual_grs_prft_potential").value = Math.round(gross_profit_option * 100 ) / 100 ;

    return gross_profit_option;

}

//result sheet second result sheet 
// sheet second part



function result_sheet_one_expand_time_sving(journy_lbr_rate)
{
    var journey_labor_rate;

    var annual_wagess;
    var new_annual_wagess;
    var possible_saving;
    var annual_man_hrs;
    var annual_saving_inpt;
    var annual_saving_last;

    // Instantiate a slider

    // first result sheet calculation formula was => journey_labor_rate = parseFloat(journy_lbr_rate / 100);
    journey_labor_rate = parseFloat(journy_lbr_rate);

    document.getElementById("lbr_rate_journyman_1").innerHTML = CurrencyFormat(journy_lbr_rate);

    annual_wagess = parseFloat(document.getElementById("annual_wages").innerHTML);

    possible_saving = parseFloat(document.getElementById("possible_staff_saving_2").innerHTML);
    annual_man_hrs = parseFloat(document.getElementById("gc_annual_man_hrs").value);
    parseFloat(document.getElementById("gc_annual_man_hrs").value);
    annual_saving_inpt = document.getElementById("last_annual_saving").innerHTML;



    // fourmula $annual_wages = $annual_man_hr * $labour_rate;
    new_annual_wagess = annual_man_hrs * journey_labor_rate;

    annual_saving_last = parseFloat(new_annual_wagess) * parseFloat(possible_saving);

    document.getElementById("annual_wages").innerHTML = CurrencyFormat(Math.round(new_annual_wagess * 100 ) / 100 );
    document.getElementById("anuual_wages_hrs").value = Math.round(new_annual_wagess * 100 ) / 100 ;

    document.getElementById("last_annual_saving").innerHTML = CurrencyFormat(Math.round(annual_saving_last * 100 ) / 100 );
    document.getElementById("annual_saving").value = Math.round(annual_saving_last * 100 ) / 100 ;



    return annual_saving_last;

}

//result sheet second 
//last result sheet
function last_result_sheet(builder_share_inpt)
{

    var builder_slider;
    var builder_slider_prncnt;
    var builder_price_per_home;
    var builder_willing_to_share;
    var gc_value_pr_home;
    var good_gc_total;

    //better
    var btr_total_gocnex;
    var btr_value_pr_home;

    //best
    var bst_total_gocnex;
    var bst_value_pr_home;

    builder_slider = builder_share_inpt;

    document.getElementById("builder_share_1").innerHTML = builder_share_inpt
    document.getElementById("builder_share_2").innerHTML = builder_share_inpt
    document.getElementById("builder_share_3").innerHTML = builder_share_inpt

    builder_price_per_home = document.getElementById("builder_price_price_per_home").value;
    gc_value_pr_home = document.getElementById("gc_pwr_cntrl_value_pr_home").value;

//       parseFloat(document.getElementById("btr_gc_value_pr_home").innerHTML);

    builder_slider_prncnt = builder_slider / 100;
    builder_willing_to_share = builder_slider_prncnt * builder_price_per_home;

    good_gc_total = parseFloat(gc_value_pr_home) + parseFloat(builder_willing_to_share);

    document.getElementById("builder_willing_share").value = Math.round(builder_willing_to_share * 100 ) / 100 ;
    document.getElementById("builder_willing_share_1").innerHTML = CurrencyFormat(Math.round(builder_willing_to_share * 100 ) / 100 );
    document.getElementById("builder_willing_share_2").innerHTML = CurrencyFormat(Math.round(builder_willing_to_share * 100 ) / 100 );
    document.getElementById("builder_willing_share_3").innerHTML = CurrencyFormat(Math.round(builder_willing_to_share * 100 ) / 100 );


    document.getElementById("gc_pwr_cntrl_total_vlu_dlr_pr_hme").value = Math.round(good_gc_total * 100 ) / 100 ;
    document.getElementById("good_gc_total_value_pra").innerHTML = CurrencyFormat(Math.round(good_gc_total * 100 ) / 100 );
    //builder_price_price_per_home 

    //better calculation
    //better
    //btr_existing_total = parseFloat(document.getElementById("gc_pwr_cntrl_total_adjust_staff").value);        
    btr_value_pr_home = document.getElementById("gc_pwr_cntrl_adjust_staff_vlue_pr_hme").value;
    btr_total_gocnex = parseFloat(btr_value_pr_home) + parseFloat(builder_willing_to_share);

    document.getElementById("gc_pwr_cntrl_adjust_staff_dlr_vlue_pr_hme").value = Math.round(btr_total_gocnex * 100 ) / 100 ;
    document.getElementById("btr_total_value_pr_home").innerHTML = CurrencyFormat(Math.round(btr_total_gocnex * 100 ) / 100 );

    //best
    bst_value_pr_home = document.getElementById("gc_pwr_cntrl_do_more_exstng_rsrces_vlue_pr_hme").value;
    bst_total_gocnex = parseFloat(bst_value_pr_home) + parseFloat(builder_willing_to_share);

    document.getElementById("gc_pwr_cntrl_do_more_exstng_rsrces_dlr_vlue_pr_hme").value = Math.round(bst_total_gocnex * 100 ) / 100 ;
    document.getElementById("bst_total_value_pr_home").innerHTML = CurrencyFormat(Math.round(bst_total_gocnex * 100 ) / 100 );
}

//number and currency formate

function CurrencyFormat(number)
{
    var decimalplaces = 2;
    var decimalcharacter = ".";
    var thousandseparater = ",";
    number = parseFloat(number);
    var sign = number < 0 ? "-" : "";
    var formatted = new String(number.toFixed(decimalplaces));
    if (decimalcharacter.length && decimalcharacter != ".") {
        formatted = formatted.replace(/\./, decimalcharacter);
    }
    var integer = "";
    var fraction = "";
    var strnumber = new String(formatted);
    var dotpos = decimalcharacter.length ? strnumber.indexOf(decimalcharacter) : -1;
    if (dotpos > -1)
    {
        if (dotpos) {
            integer = strnumber.substr(0, dotpos);
        }
        fraction = strnumber.substr(dotpos + 1);
    }
    else {
        integer = strnumber;
    }
    if (integer) {
        integer = String(Math.abs(integer));
    }
    while (fraction.length < decimalplaces) {
        fraction += "0";
    }
    temparray = new Array();
    while (integer.length > 3)
    {
        temparray.unshift(integer.substr(-3));
        integer = integer.substr(0, integer.length - 3);
    }
    temparray.unshift(integer);
    integer = temparray.join(thousandseparater);
    return sign + integer + decimalcharacter + fraction;
}


