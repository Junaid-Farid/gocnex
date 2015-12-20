<?php
add_action('admin_menu', 'Calculators_settings_menu');

function Calculators_settings_menu() {
    add_submenu_page('estimates', 'Calculators', 'Labels', 'manage_options', 'settings', 'Calculator_option');
    add_action('admin_init', 'pluginestimatessettings');
}

function pluginestimatessettings() {
    register_setting('estimates-settings', 'estimates-label-1');
    register_setting('estimates-settings', 'estimates-label-2');
    register_setting('estimates-settings', 'estimates-label-3');
    register_setting('estimates-settings', 'estimates-label-4');
    register_setting('estimates-settings', 'estimates-label-5');
    register_setting('estimates-settings', 'estimates-label-6');
    register_setting('estimates-settings', 'estimates-label-7');
    register_setting('estimates-settings', 'estimates-label-8');
    register_setting('estimates-settings', 'estimates-label-9');
    register_setting('estimates-settings', 'estimates-label-10');
    register_setting('estimates-settings', 'estimates-label-11');
    register_setting('estimates-settings', 'estimates-label-12');
    register_setting('estimates-settings', 'estimates-label-13');
    register_setting('estimates-settings', 'estimates-label-14');
    register_setting('estimates-settings', 'estimates-label-15');
    register_setting('estimates-settings', 'estimates-label-16');
    register_setting('estimates-settings', 'estimates-label-17');
    register_setting('estimates-settings', 'estimates-label-18');
    register_setting('estimates-settings', 'estimates-label-19');
    register_setting('estimates-settings', 'estimates-label-20');
    register_setting('estimates-settings', 'estimates-label-21');
    register_setting('estimates-settings', 'estimates-label-22');
    register_setting('estimates-settings', 'estimates-label-23');
    register_setting('estimates-settings', 'estimates-label-24');
    register_setting('estimates-settings', 'estimates-label-25');
    register_setting('estimates-settings', 'estimates-label-26');
    register_setting('estimates-settings', 'estimates-label-27');
    register_setting('estimates-settings', 'estimates-label-28');
    register_setting('estimates-settings', 'estimates-label-29');
    register_setting('estimates-settings', 'estimates-label-30');
    register_setting('estimates-settings', 'estimates-label-31');
    register_setting('estimates-settings', 'estimates-label-32');
    register_setting('estimates-settings', 'estimates-label-33');
    register_setting('estimates-settings', 'estimates-label-34');
    register_setting('estimates-settings', 'estimates-label-35');
    register_setting('estimates-settings', 'estimates-label-36');
    register_setting('estimates-settings', 'estimates-label-37');
    register_setting('estimates-settings', 'estimates-label-38');
    register_setting('estimates-settings', 'estimates-label-39');
    register_setting('estimates-settings', 'estimates-label-40');
    register_setting('estimates-settings', 'estimates-label-41');
    register_setting('estimates-settings', 'estimates-label-42');
    register_setting('estimates-settings', 'estimates-label-43');
    register_setting('estimates-settings', 'estimates-label-44');

    //options labels

    register_setting('estimates-settings', 'estimates-label-45');
    register_setting('estimates-settings', 'estimates-label-46');
    register_setting('estimates-settings', 'estimates-label-47');
    register_setting('estimates-settings', 'estimates-label-48');
    register_setting('estimates-settings', 'estimates-label-49');
    register_setting('estimates-settings', 'estimates-label-50');
    register_setting('estimates-settings', 'estimates-label-51');
    register_setting('estimates-settings', 'estimates-label-52');
    register_setting('estimates-settings', 'estimates-label-53');
    register_setting('estimates-settings', 'estimates-label-54');
    register_setting('estimates-settings', 'estimates-label-55');
    register_setting('estimates-settings', 'estimates-label-56');
    register_setting('estimates-settings', 'estimates-label-57');
    register_setting('estimates-settings', 'estimates-label-58');
    register_setting('estimates-settings', 'estimates-label-59');
    register_setting('estimates-settings', 'estimates-label-60');
    register_setting('estimates-settings', 'estimates-label-61');
    register_setting('estimates-settings', 'estimates-label-62');
    register_setting('estimates-settings', 'estimates-label-63');
    register_setting('estimates-settings', 'estimates-label-64');
    register_setting('estimates-settings', 'estimates-label-65');
    register_setting('estimates-settings', 'estimates-label-66');

    // comparison 
    register_setting('estimates-settings', 'estimates-label-67');
    register_setting('estimates-settings', 'estimates-label-68');
    register_setting('estimates-settings', 'estimates-label-69');
    register_setting('estimates-settings', 'estimates-label-70');

    //additional lables
//    register_setting('estimates-settings', 'estimates-label-70');
//    register_setting('estimates-settings', 'estimates-label-71');
//    register_setting('estimates-settings', 'estimates-label-72');
//    register_setting('estimates-settings', 'estimates-label-73');
//    register_setting('estimates-settings', 'estimates-label-74');
//    register_setting('estimates-settings', 'estimates-label-75');
//    register_setting('estimates-settings', 'estimates-label-76');
//    register_setting('estimates-settings', 'estimates-label-77');
//    register_setting('estimates-settings', 'estimates-label-78');
//    register_setting('estimates-settings', 'estimates-label-79');
//    register_setting('estimates-settings', 'estimates-label-80');
}

function Calculator_option() {
    ?>
    <form id="mail-form" method="post" action="options.php">
        <?php settings_fields('estimates-settings'); ?>
        <?php do_settings_sections('estimates-settings'); ?>
        <h3><?php echo _e("Calculators Form Labels", "estimates-menu") ?></h3>
        <p><?php echo _e("Use / to add lablel after input", "estimates-menu") ?></p>
        <table  class="form-table">
            <tbody>
                <?php
                for ($i = 1; $i <= 70; $i++) {
                    if ($i >= 39 && $i <= 44) {
                        
                    } else {
                        ?>
                        <tr valign="top">
                            <th scope="row"><label><?php echo _e("Calculator Form Label " . $i, "ams-admin-menu") ?></label></th>
                            <td>
                                <input style="width:80%;" type="text" value="<?php echo get_option('estimates-label-' . $i); ?>" name="estimates-label-<?php echo $i; ?>"><br>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table> 
        <?php submit_button(); ?>
    </form><?php
}
