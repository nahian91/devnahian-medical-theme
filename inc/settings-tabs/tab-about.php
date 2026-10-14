<h2><?php esc_html_e( 'About Us Page Configuration', 'devnahian-auracare' ); ?></h2>
<table class="form-table" role="presentation">
    <tr>
        <th scope="row"><label><?php esc_html_e( 'About Us Slug', 'devnahian-auracare' ); ?></label></th>
        <td><input type="text" name="devnahian_auracare_slug_about" value="<?php echo esc_attr( get_option( 'devnahian_auracare_slug_about', 'about' ) ); ?>" class="regular-text"></td>
    </tr>
</table>