<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php // PUT YOUR settings_fields name and your input // ?>
<?php settings_fields('ns_product_brand_options_group'); ?>
<table>
	<tr valign="top">
	    <th scope="row">
	   		 <label>Active</label>
	    </th>
	    <td>
			<input type="checkbox" disabled="disabled" name="ns_product_brand_active" id="ns_product_brand_active" checked="checked" value="1" <?php checked( get_option('ns_product_brand_active'), 1); ?>> 
            <span class="description"><?php _e('Check to active', $ns_text_domain); ?></span><br/>
		</td>
	</tr>

	<tr valign="top">
	    <td colspan="2">
	    	<hr>
            <span class="description"><?php _e('Go to Product -> Brands and start to add your Brands! See the image below', $ns_text_domain); ?></span><br/><br/>
            <span class="description"><?php _e('If link to brand doesn\'t work, try to save permalik page', $ns_text_domain); ?>s</span><br/><br/>
            <img src="<?php echo plugin_dir_url( __FILE__ ); ?>img/productbrand-01-guide.png">
		</td>
	</tr>
</table>


