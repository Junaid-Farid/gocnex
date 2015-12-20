<?php
add_action('admin_menu', 'Options_settings_menu');

function Options_settings_menu() {
    add_submenu_page('estimates', 'Options', 'Options Slider', 'manage_options', 'option_settings', 'Option_option');
    add_action('admin_init', 'pluginoptionssettings');
}

function pluginoptionssettings() {
    //max min step option 
    register_setting('options-settings', 'options-label-1-1');
    register_setting('options-settings', 'options-label-1-2');
    register_setting('options-settings', 'options-label-1-3');
    register_setting('options-settings', 'options-label-1-4');
    register_setting('options-settings', 'options-label-1-5');
    register_setting('options-settings', 'options-label-2-1');
    register_setting('options-settings', 'options-label-2-2');
    register_setting('options-settings', 'options-label-2-3');
    register_setting('options-settings', 'options-label-2-4');
    register_setting('options-settings', 'options-label-2-5');
    register_setting('options-settings', 'options-label-3-1');
    register_setting('options-settings', 'options-label-3-2');
    register_setting('options-settings', 'options-label-3-3');
    register_setting('options-settings', 'options-label-3-4');
    register_setting('options-settings', 'options-label-3-5');
    register_setting('options-settings', 'options-label-4-1');
    register_setting('options-settings', 'options-label-4-2');
    register_setting('options-settings', 'options-label-4-3');
    register_setting('options-settings', 'options-label-4-4');
    register_setting('options-settings', 'options-label-4-5');
    register_setting('options-settings', 'options-label-5-1');
    register_setting('options-settings', 'options-label-5-2');
    register_setting('options-settings', 'options-label-5-3');
    register_setting('options-settings', 'options-label-5-4');
    register_setting('options-settings', 'options-label-5-5');
    register_setting('options-settings', 'options-label-6-1');
    register_setting('options-settings', 'options-label-6-2');
    register_setting('options-settings', 'options-label-6-3');
    register_setting('options-settings', 'options-label-6-4');
    register_setting('options-settings', 'options-label-6-5');
    register_setting('options-settings', 'options-label-7-1');
    register_setting('options-settings', 'options-label-7-2');
    register_setting('options-settings', 'options-label-7-3');
    register_setting('options-settings', 'options-label-7-4');
    register_setting('options-settings', 'options-label-7-5');
    register_setting('options-settings', 'options-label-8-1');
    register_setting('options-settings', 'options-label-8-2');
    register_setting('options-settings', 'options-label-8-3');
    register_setting('options-settings', 'options-label-8-4');
    register_setting('options-settings', 'options-label-8-5');
    register_setting('options-settings', 'options-label-9-1');
    register_setting('options-settings', 'options-label-9-2');
    register_setting('options-settings', 'options-label-9-3');
    register_setting('options-settings', 'options-label-9-4');
    register_setting('options-settings', 'options-label-9-5');
    register_setting('options-settings', 'options-label-10-1');
    register_setting('options-settings', 'options-label-10-2');
    register_setting('options-settings', 'options-label-10-3');
    register_setting('options-settings', 'options-label-10-4');
    register_setting('options-settings', 'options-label-10-5');
    register_setting('options-settings', 'options-label-11-1');
    register_setting('options-settings', 'options-label-11-2');
    register_setting('options-settings', 'options-label-11-3');
    register_setting('options-settings', 'options-label-11-4');
    register_setting('options-settings', 'options-label-11-5');
    register_setting('options-settings', 'options-label-12-1');
    register_setting('options-settings', 'options-label-12-2');
    register_setting('options-settings', 'options-label-12-3');
    register_setting('options-settings', 'options-label-12-4');
    register_setting('options-settings', 'options-label-12-5');
    register_setting('options-settings', 'options-label-13-1');
    register_setting('options-settings', 'options-label-13-2');
    register_setting('options-settings', 'options-label-13-3');
    register_setting('options-settings', 'options-label-13-4');
    register_setting('options-settings', 'options-label-13-5');
    register_setting('options-settings', 'options-label-14-1');
    register_setting('options-settings', 'options-label-14-2');
    register_setting('options-settings', 'options-label-14-3');
    register_setting('options-settings', 'options-label-14-4');
    register_setting('options-settings', 'options-label-14-5');
    register_setting('options-settings', 'options-label-15-1');
    register_setting('options-settings', 'options-label-15-2');
    register_setting('options-settings', 'options-label-15-3');
    register_setting('options-settings', 'options-label-15-4');
    register_setting('options-settings', 'options-label-15-5');
    register_setting('options-settings', 'options-label-16-1');
    register_setting('options-settings', 'options-label-16-2');
    register_setting('options-settings', 'options-label-16-3');
    register_setting('options-settings', 'options-label-16-4');
    register_setting('options-settings', 'options-label-16-5');
    
    register_setting('options-settings', 'options-label-17-1');
    register_setting('options-settings', 'options-label-17-2');
    register_setting('options-settings', 'options-label-17-3');
    register_setting('options-settings', 'options-label-17-4');
    register_setting('options-settings', 'options-label-17-5');
    
    register_setting('options-settings', 'options-label-18-1');
    register_setting('options-settings', 'options-label-18-2');
    register_setting('options-settings', 'options-label-18-3');
    register_setting('options-settings', 'options-label-18-4');
    register_setting('options-settings', 'options-label-18-5');
    
    register_setting('options-settings', 'options-label-19-1');
    register_setting('options-settings', 'options-label-19-2');
    register_setting('options-settings', 'options-label-19-3');
    register_setting('options-settings', 'options-label-19-4');
    register_setting('options-settings', 'options-label-19-5');
    
    register_setting('options-settings', 'options-label-20-1');
    register_setting('options-settings', 'options-label-20-2');
    register_setting('options-settings', 'options-label-20-3');
    register_setting('options-settings', 'options-label-20-4');
    register_setting('options-settings', 'options-label-20-5');
    
    register_setting('options-settings', 'options-label-21-1');
    register_setting('options-settings', 'options-label-21-2');
    register_setting('options-settings', 'options-label-21-3');
    register_setting('options-settings', 'options-label-21-4');
    register_setting('options-settings', 'options-label-21-5');
    
    register_setting('options-settings', 'options-label-22-1');
    register_setting('options-settings', 'options-label-22-2');
    register_setting('options-settings', 'options-label-22-3');
    register_setting('options-settings', 'options-label-22-4');
    register_setting('options-settings', 'options-label-22-5');
    
    register_setting('options-settings', 'options-label-23-1');
    register_setting('options-settings', 'options-label-23-2');
    register_setting('options-settings', 'options-label-23-3');
    register_setting('options-settings', 'options-label-23-4');
    register_setting('options-settings', 'options-label-23-5');
    
    register_setting('options-settings', 'options-label-24-1');
    register_setting('options-settings', 'options-label-24-2');
    register_setting('options-settings', 'options-label-24-3');
    register_setting('options-settings', 'options-label-24-4');
    register_setting('options-settings', 'options-label-24-5');
    
    register_setting('options-settings', 'options-label-25-1');
    register_setting('options-settings', 'options-label-25-2');
    register_setting('options-settings', 'options-label-25-3');
    register_setting('options-settings', 'options-label-25-4');
    register_setting('options-settings', 'options-label-25-5');
    
    register_setting('options-settings', 'options-label-26-1');
    register_setting('options-settings', 'options-label-26-2');
    register_setting('options-settings', 'options-label-26-3');
    register_setting('options-settings', 'options-label-26-4');
    register_setting('options-settings', 'options-label-26-5');
    
}

function Option_option() {
    ?>
    <form id="mail-form" method="post" action="options.php">
        <?php settings_fields('options-settings'); ?>
        <?php do_settings_sections('options-settings'); ?>
        <h3><?php echo _e("Slider Options Min Max Step", "options-menu") ?></h3>
        <table  class="form-table">
            <thead>
                <tr>
                    <th>Labels</th>
                    <th style="padding-left: 11px !important;">Minimum</th>
                    <th style="padding-left: 11px !important;">Maximum</th>
                    <th style="padding-left: 11px !important;">Step</th>
                    <th style="padding-left: 11px !important;">Prefix</th>
                    <th style="padding-left: 11px !important;">Suffix</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 26; $i++) {
                    ?>
                    <tr valign="top">
                        <th scope="row"><label><?php echo _e("Option Form Slider " . $i, "ams-admin-menu") ?></label></th>
                        <?php for ($j = 1; $j <= 5; $j++) {
                            ?>
                            <td >
                                <input type="text" value="<?php echo get_option('options-label-' . $i . '-' . $j); ?>" name="options-label-<?php echo $i . '-' . $j; ?>" placeholder="<?php
                                if ($j == 1) {
                                    echo "Min";
                                } else if ($j == 2) {
                                    echo "Max";
                                } else if ($j == 3) {
                                    echo "Step";
                                } else if ($j == 4) {
                                    echo "Prefix";
                                } else {
                                    echo "Suffix";
                                }
                                ?>">
                            </td>
                        <?php } ?>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table> 
        <?php submit_button(); ?>
    </form>
    <?php
}
