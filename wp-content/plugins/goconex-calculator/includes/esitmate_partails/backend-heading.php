<?php
add_action('admin_menu', 'Headings_settings_menu');
//Heading, subheading and images
function Headings_settings_menu() {
    add_submenu_page('estimates', 'Headings', 'Headings', 'manage_options', 'heading_settings', 'Heading_option');
    add_action('admin_init', 'pluginheadingssettings');
}

function pluginheadingssettings() {
    register_setting('headings-settings', 'headings-label-1-1');
    register_setting('headings-settings', 'headings-label-1-2');
    register_setting('headings-settings', 'headings-label-1-3');
    register_setting('headings-settings', 'headings-label-2-1');
    register_setting('headings-settings', 'headings-label-2-2');
    register_setting('headings-settings', 'headings-label-2-3');
    register_setting('headings-settings', 'headings-label-3-1');
    register_setting('headings-settings', 'headings-label-3-2');
    register_setting('headings-settings', 'headings-label-3-3');
    register_setting('headings-settings', 'headings-label-4-1');
    register_setting('headings-settings', 'headings-label-4-2');
    register_setting('headings-settings', 'headings-label-4-3');
    register_setting('headings-settings', 'headings-label-5-1');
    register_setting('headings-settings', 'headings-label-5-2');
    register_setting('headings-settings', 'headings-label-5-3');
    register_setting('headings-settings', 'headings-label-6-1');
    register_setting('headings-settings', 'headings-label-6-2');
    register_setting('headings-settings', 'headings-label-6-3');
    register_setting('headings-settings', 'headings-label-7-1');
    register_setting('headings-settings', 'headings-label-7-2');
    register_setting('headings-settings', 'headings-label-7-3');
    register_setting('headings-settings', 'headings-label-8-1');
    register_setting('headings-settings', 'headings-label-8-2');
    register_setting('headings-settings', 'headings-label-8-3');
    register_setting('headings-settings', 'headings-label-9-1');
    register_setting('headings-settings', 'headings-label-9-2');
    register_setting('headings-settings', 'headings-label-9-3');
    register_setting('headings-settings', 'headings-label-10-1');
    register_setting('headings-settings', 'headings-label-10-2');
    register_setting('headings-settings', 'headings-label-10-3');
}

function Heading_option() {
    ?>
    <form id="mail-form" method="post" action="options.php">
        <?php settings_fields('headings-settings'); ?>
        <?php do_settings_sections('headings-settings'); ?>
        <h3><?php echo _e("Form Heading, Subheading and Images", "headings-menu") ?></h3>
        <table  class="form-table">
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    ?>   <tr valign="top"><td text-align: center"><h2><?php echo _e("From # " . $i);?></h2></td></tr><?php
                    for ($j = 1; $j <= 3; $j++) {
                        if ($j === 1) {
                            ?>
                            <tr valign="top">
                                <th scope="row"><label><?php echo _e("Heading ", "ams-admin-menu") ?></label></th>
                                <td>
                                    <input style="width:80%;" type="text" value="<?php echo get_option('headings-label-' . $i . '-' . $j); ?>" name="headings-label-<?php echo $i . '-' . $j; ?>"><br>
                                </td>
                            </tr>
                            <?php
                        } else if ($j == 2) {
                            ?>

                            <tr valign="top">
                                <th scope="row"><label><?php echo _e("Sub Heading ", "ams-admin-menu") ?></label></th>
                                <td>
                                    <input style="width:80%;" type="text" value="<?php echo get_option('headings-label-' . $i . '-' . $j); ?>" name="headings-label-<?php echo $i . '-' . $j; ?>"><br>
                                </td>
                            </tr>
                            <?php
                        } else {
                            ?>

                            <tr valign="top">
                                <th scope="row"><label><?php echo _e("Image URL", "ams-admin-menu") ?></label></th>
                                <td>
                                    <input style="width:80%;" type="text" value="<?php echo get_option('headings-label-' . $i . '-' . $j); ?>" name="headings-label-<?php echo $i . '-' . $j; ?>"><br>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table> 
        <?php submit_button(); ?>
    </form><?php
    }    