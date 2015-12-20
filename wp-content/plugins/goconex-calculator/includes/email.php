<?php

function estimate_email() {
    $upload_dir = wp_upload_dir();
    if (!is_dir($upload_dir['basedir'] . '/reports/'))
        mkdir($upload_dir['basedir'] . '/reports/');
    $id = $_POST['id'];
    $email = $_POST['email'];
    $profit_you_need = $_POST['profit_you_need'];
    $your_compnay_name = $_POST['your_compnay_name'];
    if(isset($_POST['email']) && $_POST['email'] != ''){
    savereport($id,$profit_you_need, $your_compnay_name);
    if (null == username_exists($email)) {

        // Generate the password and create the user
        $password = wp_generate_password(12, false);
        $user_id = wp_create_user($email, $password, $email);
        // Set the nickname
        wp_update_user(
                array(
                    'ID' => $user_id,
                    'nickname' => $email
                )
        );

        // Set the role
        $user = new WP_User($user_id);
        $user->set_role('contributor');

        global $wpdb;
        $table_name = $wpdb->prefix . 'estimate';
        $wpdb->update($table_name, array('user_id' => $user_id), array('ID' => $id));

        // Email the user
        wp_mail($email, 'Welcome!', 'Your Password: ' . $password);
     
    } // end if

    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.bigthinkdevsite.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'test@bigthinkdevsite.com';                 // SMTP username
    $mail->Password = 'p455w0rd';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    $mail->setFrom('test@bigthinkdevsite.com', 'Goconex');
    $mail->addAddress($email);     // Add a recipient

    $mail->addAttachment($upload_dir['basedir'] . '/reports/report_' . $id . '.pdf');         // Add attachments     // Add attachments

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is your goconex report';
    $mail->Body = 'please see attached reports';
    $mail->AltBody = 'please see attached reports';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        wp_die('Message has been sent');
    }
    wp_die();
    }
    else{
        wp_die('Please enter a valid email!');
    }
}

function savereport($id,$profit_you_need, $your_compnay_name) {
    $upload_dir = wp_upload_dir();
    if (!is_dir($upload_dir['basedir'] . '/reports/'))
        mkdir($upload_dir['basedir'] . '/reports/');
    $file = get_bloginfo('url') . '/wp-content/plugins/goconex-calculator-pdf-vendor/result_table.php?id=' . $id.'&profit_you_need='.$profit_you_need.'&your_compnay_name='.$your_compnay_name;
    $returned_content = get_data($file);
    $file = $upload_dir['basedir'] . '/reports/report_' . $id . '.pdf';
    file_put_contents($file, $returned_content);
}

function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

add_action('wp_ajax_estimate_email', 'estimate_email'); // Call when user logged in
add_action('wp_ajax_nopriv_estimate_email', 'estimate_email'); // Call when user in not logged in