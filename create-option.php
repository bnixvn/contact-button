<?php

/* Contact Option Settings Page */
class contactoption_Settings_Page {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'vnfaster_create_settings' ) );
		add_action( 'admin_init', array( $this, 'vnfaster_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'vnfaster_setup_fields' ) );
	}
	public function vnfaster_create_settings() {
		$page_title = 'Contact Option';
		$menu_title = 'Contact Option';
		$capability = 'manage_options';
		$slug = 'contactoption';
		$callback = array($this, 'vnfaster_settings_content');
		$icon = 'dashicons-share';
		$position = 2;
		add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
	}
	public function vnfaster_settings_content() { ?>
		<div class="wrap">
			<h1>Contact Option</h1>
			<?php settings_errors(); ?>
			<form method="POST" action="options.php">
				<?php
					settings_fields( 'contactoption' );
					do_settings_sections( 'contactoption' );
					submit_button();
				?>
			</form>
		</div> <?php
	}
	public function vnfaster_setup_sections() {
		add_settings_section( 'contactoption_section', 'Cấu hình thông tin liên hệ', array(), 'contactoption' );
	}
	public function vnfaster_setup_fields() {
		$fields = array(
			array(
				'label' => 'Hotline',
				'id' => 'bnix-hotline',
				'type' => 'text',
				'section' => 'contactoption_section',
				'desc' => 'Số điện thoại hotline',
			),
			array(
				'label' => 'Zalo Phone Number',
				'id' => 'bnix-zalo-phone',
				'type' => 'text',
				'section' => 'contactoption_section',
				'desc' => 'Số điện thoại sử dụng zalo',
			),
			array(
				'label' => 'Zalo ID',
				'id' => 'bnix-zalo-id',
				'type' => 'text',
				'section' => 'contactoption_section',
				'desc' => 'ID trích từ zalo qr code',
			),
			array(
				'label' => 'Facebook',
				'id' => 'bnix-facebook',
				'type' => 'text',
				'section' => 'contactoption_section',
				'desc' => 'Lấy phần username, ví dụ https://www.facebook.com/legiang.bnix/ -> điền legiang.bnix',
			),
		);
		foreach( $fields as $field ){
			add_settings_field( $field['id'], $field['label'], array( $this, 'vnfaster_field_callback' ), 'contactoption', $field['section'], $field );
			register_setting( 'contactoption', $field['id'] );
		}
	}
	public function vnfaster_field_callback( $field ) {
		$value = get_option( $field['id'] );
		switch ( $field['type'] ) {
			default:
				printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />',
					$field['id'],
					$field['type'],
					$field['placeholder'],
					$value
				);
		}
		if( $desc = $field['desc'] ) {
			printf( '<p class="description">%s </p>', $desc );
		}
	}
}
new contactoption_Settings_Page();
