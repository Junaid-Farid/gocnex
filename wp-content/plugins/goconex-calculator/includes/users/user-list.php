<?php

function user_calc_detail_html() {
    if (is_user_logged_in()) {

        global $wpdb;
        $user_id = get_current_user_id();
        //$posts = $wpdb->get_results("SELECT ip_address, COUNT(ip_address) AS ip_count FROM $table GROUP BY ip_address");
        $table_name = $wpdb->prefix . 'estimate';
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE user_id =' . $user_id, OBJECT);
        ?>
        <div class="large-12 columns">
            <div class="entry-content">
                <div class="woocommerce">
                    <div class="row">
                        <div class="xxlarge-6 xlarge-8 large-12 large-centered columns class-form" id="report_list">
                            <h2>My Report</h2>
                            <table class="shop_table shop_table_responsive my_account_orders ">
                                <thead>
                                    <tr>
                                        <th class="order-number"><span class="nobr">Report #</span></th>
                                        <th class="order-status"><span class="nobr">Wire 2 Conductor</span></th>
                                        <th class="order-total"><span class="nobr">Wire 3 Conductor</span></th>
                                        <th class="order-total"><span class="nobr">Pipe / Conduit</span></th>
                                        <th class="order-actions">  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($results as $result) {
                                        ?>
                                        <tr class="order">
                                            <td class="order-number" data-title="Order Number">
                                                <a href="#"><?php echo $result->id; ?></a>
                                            </td>
                                            <td class="order-date" data-title="Date">
                                                <?php echo $result->wire_two_cond_qnty; ?>
                                            </td>
                                            <td class="order-status" data-title="Status" style="text-align:left; white-space:nowrap;">                                    
                                                <?php echo $result->wire_three_cond_qnty; ?>    
                                            </td>
                                            <td class="order-total" data-title="Total">                                   
                                                <?php echo $result->pip_cond_qnty; ?>                                            
                                            </td>
                                            <td class="order-actions">
                                                <a href="http://localhost/goconex/docalculation/?id=<?php echo$result->id ?>" class="account_view_link view">Edit</a>					
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        ?>

        <div class="large-12 columns">
            <div class="entry-content">
                <div class="woocommerce">
                    <div class="row">
                        <div class="xxlarge-6 xlarge-8 large-12 large-centered columns class-form">
                            <div class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Login</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Please Logged In For Your Report Detail</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

function user_calc_detail_process() {
    
}

function dwp_include_calc_detail() {
    ob_start();
    // user_calc_detail_process();
    user_calc_detail_html();

    return ob_get_clean();
}

add_shortcode('add_user_calculation_detail', 'dwp_include_calc_detail');

