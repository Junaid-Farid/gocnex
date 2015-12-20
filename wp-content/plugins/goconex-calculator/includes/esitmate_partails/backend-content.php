<?php
add_action('admin_menu', 'Content_settings_menu');

//Content, subheading and images
function Content_settings_menu()
{
    add_submenu_page('estimates', 'Content', 'Content', 'manage_options', 'content_settings', 'Content_option');
    add_action('admin_init', 'plugincontentsettings');
}

function plugincontentsettings()
{
    register_setting('content-settings', 'content-label-1-1');
    register_setting('content-settings', 'content-label-1-2');
    register_setting('content-settings', 'content-label-1-3');
    register_setting('content-settings', 'content-label-2-1');
    register_setting('content-settings', 'content-label-2-2');
    register_setting('content-settings', 'content-label-2-3');
    register_setting('content-settings', 'content-label-2-4');
    register_setting('content-settings', 'content-label-3-1');
    register_setting('content-settings', 'content-label-3-2');
    register_setting('content-settings', 'content-label-3-3');
    register_setting('content-settings', 'content-label-3-4');
    register_setting('content-settings', 'content-label-4-1');
    register_setting('content-settings', 'content-label-4-2');
    register_setting('content-settings', 'content-label-4-3');
    register_setting('content-settings', 'content-label-4-4');
    register_setting('content-settings', 'content-label-5-1');
    register_setting('content-settings', 'content-label-5-2');
    register_setting('content-settings', 'content-label-5-3');
    register_setting('content-settings', 'content-label-6-1');
    register_setting('content-settings', 'content-label-6-2');
    register_setting('content-settings', 'content-label-6-3');
    register_setting('content-settings', 'content-label-6-4');
}

function Content_option()
{
    ?>
    <form id="mail-form" method="post" action="options.php">
        <?php settings_fields('content-settings'); ?>
        <?php do_settings_sections('content-settings'); ?>
        <h3><?php echo _e("Form Images", "content-menu") ?></h3>
        <table  class="form-table">
            <tbody>
                <?php
                for ($i = 1; $i <= 6; $i++)
                {
                    if ($i == 1)
                        $max = 3;
                    else if ($i == 5)
                        $max = 2;
                    else
                        $max = 4;
                    ?>   <tr valign="top"><td text-align: center"><h2><?php echo _e("Step # " . $i); ?></h2></td></tr><?php
                    for ($j = 1; $j <= $max; $j++)
                    {
                        if ($i == 6 && $j == 1)
                        {
                            ?>
                            <tr valign="top">
                                <th scope="row"><label><?php echo _e("Top Content", "ams-admin-menu") ?></label></th>
                                <td>
                                    <textarea style="width:100%;height: 200px" rows="12" cols="85" name="content-label-<?php echo $i . '-' . $j; ?>"><?php echo get_option('content-label-' . $i . '-' . $j); ?></textarea><br>
                                </td>
                            </tr>
                            <?php
                        } else if ($i == 5 && ($j == 1 || $j == 2))
                        {
                            ?>
                            <tr valign="top">
                                <th scope="row"><label><?php echo _e("Content " . $j, "ams-admin-menu") ?></label></th>
                                <td>
                                    <textarea style="width:100%;height: 200px" rows="12" cols="85" name="content-label-<?php echo $i . '-' . $j; ?>"><?php echo get_option('content-label-' . $i . '-' . $j); ?></textarea><br>
                                </td>
                            </tr>
                            <?php
                        } else
                        {
                            ?>
                            <tr valign="top">
                                <th scope="row"><label><?php echo _e("Image " . $j, "ams-admin-menu") ?></label></th>
                                <td>
                                    <input style="width:80%;" type="text" value="<?php echo get_option('content-label-' . $i . '-' . $j); ?>" name="content-label-<?php echo $i . '-' . $j; ?>"><br>
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
