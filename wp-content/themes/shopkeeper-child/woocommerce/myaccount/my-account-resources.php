<?php

/**
 * My Account Resources
 *
 * Shows link to account resources page
 *
 * @author 		Nathan Smith
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

	<h2><?php echo apply_filters( 'woocommerce_my_account_my_orders_title', __( 'Account Resources', 'woocommerce' ) ); ?></h2>

	<table class="shop_table my_account_orders">
		<thead>
			<tr>
				<th class="order-number" colspan="2"><span class="nobr"><?php _e( 'Page', 'woocommerce' ); ?></span></th>
			</tr>
		</thead>

	<tbody>
       
       	<tr class="order">
            	<td class="order-status" style="text-align:left; padding-left: 0;">
				Purchase GoConex products using the online store.
			</td>
            	<td class="order-actions">
               	<a class="button" href="/shop">Shop</a>
               </td>
			</tr>
           
			<?php // shortcode to hide distributor/reseller link from unauthorized users
			echo do_shortcode( '[eyesonly level="administrator, distributor, sales_manager"]' . "

        	<tr class=\"order\">

            	<td class=\"order-status\" style=\"text-align:left; padding-left: 0;\">
					Resources for GoConex resellers.
				</td>

            	<td class=\"order-actions\">
                	<a class=\"button\" href=\"/support/resellers\">Resellers</a>
                </td>

			</tr>" . '[/eyesonly]' );
			?>
            
            <?php // shortcode to hide sales rep link from unauthorized users
			echo do_shortcode( '[eyesonly level="administrator, sales_rep, sales_manager"]' . "

        	<tr class=\"order\">

            	<td class=\"order-status\" style=\"text-align:left; padding-left: 0;\">
					Resources for GoConex sales agents.
				</td>

            	<td class=\"order-actions\">
                	<a class=\"button\" href=\"/support/agents\">Agents</a>
                </td>

			</tr>" . '[/eyesonly]' );
			?>

        	<tr class="order">

            	<td class="order-status" style="text-align:left; padding-left: 0;">
					Information and Technical Support documents for GoConex customers.
				</td>

            	<td class="order-actions">
                	<a class="button" href="/support">Support</a>
                </td>

			</tr>
            
        	<tr class="order">

            	<td class="order-status" style="text-align:left; padding-left: 0;">
					Edit your password and account details.
				</td>

            	<td class="order-actions">
                	<a class="button" href="<?php _e(wc_customer_edit_account_url()); ?>">Edit Account</a>
                </td>

			</tr>
            
        	<tr class="order">

            	<td class="order-status" style="text-align:left; padding-left: 0;">
					Sign out of the GoConex.com web site.
				</td>

            	<td class="order-actions">
                	<a class="button" href="<?php _e(wp_logout_url( home_url() )); ?>">Sign Out</a>
                </td>

			</tr>
		</tbody>

	</table>

