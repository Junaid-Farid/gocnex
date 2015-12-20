<?php
add_action('admin_menu', 'Values_settings_menu');

function Values_settings_menu() {
    add_submenu_page('estimates', 'Values', 'Estimate Value', 'manage_options', 'value_settings', 'Value_option');
    add_action('admin_init', 'pluginvaluessettings');
}

function pluginvaluessettings() {
    //max min step value 
    register_setting('values-settings', 'values-label-1-1');
    register_setting('values-settings', 'values-label-1-2');
    register_setting('values-settings', 'values-label-1-3');
    register_setting('values-settings', 'values-label-1-4');
    register_setting('values-settings', 'values-label-1-5');
    register_setting('values-settings', 'values-label-2-1');
    register_setting('values-settings', 'values-label-2-2');
    register_setting('values-settings', 'values-label-2-3');
    register_setting('values-settings', 'values-label-2-4');
    register_setting('values-settings', 'values-label-2-5');
    register_setting('values-settings', 'values-label-3-1');
    register_setting('values-settings', 'values-label-3-2');
    register_setting('values-settings', 'values-label-3-3');
    register_setting('values-settings', 'values-label-3-4');
    register_setting('values-settings', 'values-label-3-5');
    register_setting('values-settings', 'values-label-4-1');
    register_setting('values-settings', 'values-label-4-2');
    register_setting('values-settings', 'values-label-4-3');
    register_setting('values-settings', 'values-label-4-4');
    register_setting('values-settings', 'values-label-4-5');
    register_setting('values-settings', 'values-label-5-1');
    register_setting('values-settings', 'values-label-5-2');
    register_setting('values-settings', 'values-label-5-3');
    register_setting('values-settings', 'values-label-5-4');
    register_setting('values-settings', 'values-label-5-5');
    register_setting('values-settings', 'values-label-6-1');
    register_setting('values-settings', 'values-label-6-2');
    register_setting('values-settings', 'values-label-6-3');
    register_setting('values-settings', 'values-label-6-4');
    register_setting('values-settings', 'values-label-6-5');
    register_setting('values-settings', 'values-label-7-1');
    register_setting('values-settings', 'values-label-7-2');
    register_setting('values-settings', 'values-label-7-3');
    register_setting('values-settings', 'values-label-7-4');
    register_setting('values-settings', 'values-label-7-5');
    register_setting('values-settings', 'values-label-8-1');
    register_setting('values-settings', 'values-label-8-2');
    register_setting('values-settings', 'values-label-8-3');
    register_setting('values-settings', 'values-label-8-4');
    register_setting('values-settings', 'values-label-8-5');
}

function Value_option() {
    ?>
    <form id="mail-form" method="post" action="options.php">
        <?php settings_fields('values-settings'); ?>
        <?php do_settings_sections('values-settings'); ?>
        <h3><?php echo _e("Slider Values Min Max Step", "values-menu") ?></h3>
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
                for ($i = 1; $i <= 8; $i++) {
                    ?>
                    <tr valign="top">
                        <th scope="row"><label><?php echo _e("Value Form Label " . $i, "ams-admin-menu") ?></label></th>
                        <?php for ($j = 1; $j <= 5; $j++) {
                            ?>
                            <td >
                                <input type="text" value="<?php echo get_option('values-label-' . $i . '-' . $j); ?>" name="values-label-<?php echo $i . '-' . $j; ?>" placeholder="<?php if ($j == 1) {
                    echo "Min";
                } else if ($j == 2) {
                    echo "Max";
                } else if ($j == 3) {
                    echo "Step";
                } else if ($j == 4) {
                    echo "Prefix";
                } else {
                    echo "Suffix";
                } ?>">
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
