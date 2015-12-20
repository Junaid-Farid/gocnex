<?php

function estimate_form_process() {
    //$calculator = new goconex();
    global $wpdb;
    $table_name = $wpdb->prefix . 'estimate';
    if (isset($_POST['operation']) && $_POST['operation'] == 'firstform') {
        if (isset($_POST['importData'][6]['value']) && $_POST['importData'][6]['value'] != '') {
            $userArr = array('user_id' => get_current_user_id());
            foreach ($_POST['importData'] as $data) {
                $posteddata[$data['name']] = $data['value'];
            }
            $lastid = $posteddata['updateid'];
            array_pop($posteddata);
            $wpdb->update($table_name, $posteddata, array('ID' => $lastid));

            wp_die($lastid);
        } else {
            $userArr = array('user_id' => get_current_user_id());
            foreach ($_POST['importData'] as $data) {
                $posteddata[$data['name']] = $data['value'];
            }
            $addData = array_merge($userArr, $posteddata);
            array_pop($addData);
            $wpdb->insert($table_name, $addData);

            wp_die($wpdb->insert_id);
        }
    }

    if (isset($_POST['operation']) && $_POST['operation'] == 'updatefirstform') {
        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);
        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));

        wp_die($lastid);
    }

    if (isset($_POST['operation']) && $_POST['operation'] == '2ndform') {
        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);

        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        header('Content-Type: application/json');
        wp_die(json_encode(array('lastid' => $lastid, 'posteddata' => $posteddata)));
    }
    if (isset($_POST['operation']) && $_POST['operation'] == '3rdform') {
        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);

        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        wp_die($lastid);
    }
    if (isset($_POST['operation']) && $_POST['operation'] == '4rdform') {
        $userArr = array('user_id' => get_current_user_id());
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);
        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        wp_die($lastid);
    }
    if (isset($_POST['operation']) && $_POST['operation'] == '5thform') {
        $userArr = array('user_id' => get_current_user_id());

        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);
        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        wp_die($lastid);
    }
    if (isset($_POST['operation']) && $_POST['operation'] == '6thform') {
        $userArr = array('user_id' => get_current_user_id());
        //remove from here
        foreach ($_POST['importData'] as $data) {
            $posteddata[$data['name']] = $data['value'];
        }
        $lastid = $posteddata['lastid'];
        array_pop($posteddata);
        
        $wpdb->update($table_name, $posteddata, array('ID' => $lastid));
        
        $table_name = $wpdb->prefix . 'estimate';        
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $lastid, OBJECT);
        $formData = array(
            'num_home_completed_pr_year' => $results[0]->nm_home_cmpltd_pr_yr,
        );
        
        header('Content-Type: application/json');        
        wp_die(json_encode(array('lastid' => $lastid, 'posteddata' => $posteddata, 'formData' => $formData)));
    }
    if (isset($_POST['operation']) && $_POST['operation'] == 'getData') {
        $results = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE id =' . $_POST['importData'], OBJECT);
        header('Content-Type: application/json');
        wp_die(json_encode($results[0]));
    }
}

add_action('wp_ajax_estimate_form_process', 'estimate_form_process'); // Call when user logged in
add_action('wp_ajax_nopriv_estimate_form_process', 'estimate_form_process'); // Call when user in not logged in