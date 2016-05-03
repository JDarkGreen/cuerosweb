<?php
/***********************************************************************************************/
/* Add a menu option to link to the customizer */
/***********************************************************************************************/
add_action('admin_menu', 'display_custom_options_link');
function display_custom_options_link() {
	add_theme_page('Wallpay Options', 'Wallpay Options', 'edit_theme_options', 'customize.php');
}

/***********************************************************************************************/
/* Add options in the theme customizer page */
/***********************************************************************************************/
add_action('customize_register', 'wallpay_customize_register');
function wallpay_customize_register($wp_customize) {
	// Logo 
	$wp_customize->add_section('wallpay_logo', array(
		'title' => __('Logo', LANG ),
		'description' => __('Permite subir tu logo personalizado.', LANG ),
		'priority' => 35
	));
	
	$wp_customize->add_setting('wallpay_custom_settings[logo]', array(
		'default' => IMAGES . '/logo.png',
		'type' => 'option'
	));
	
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
		'label' => __('Carga tu Logo', LANG ),
		'section' => 'wallpay_logo',
		'settings' => 'wallpay_custom_settings[logo]'
	)));

	/*|-----------------------------------------------------------------------|*/
	/*|-----------------------------------------------------------------------|*/

	####>>>>>>>>>>>> MISION Y VISIÓN >>>>>>>>>>>>>>>>>>
	$wp_customize->add_section('wallpay_mision_vision', array(
		'title' => __('Misión y Visión Empresa', LANG ),
		'description' => __('Sección Misión y Visión Empresa', LANG ),
		'priority' => 41
	));	
	/* MISION */
	$wp_customize->add_setting('wallpay_custom_settings[text_mision]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('wallpay_custom_settings[text_mision]', array(
		'label'    => __('Escribe el texto MISIÓN', LANG ),
		'section'  => 'wallpay_mision_vision',
		'settings' => 'wallpay_custom_settings[text_mision]',
		'type'     => 'textarea'
	));	
	/* VISION */
	$wp_customize->add_setting('wallpay_custom_settings[text_vision]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('wallpay_custom_settings[text_vision]', array(
		'label'    => __('Escribe el texto VISIÓN', LANG ),
		'section'  => 'wallpay_mision_vision',
		'settings' => 'wallpay_custom_settings[text_vision]',
		'type'     => 'textarea'
	));

	/*|-----------------------------------------------------------------------|*/
	/*|-----------------------------------------------------------------------|*/

	####>>>>>>>>>>>> REDES SOCIALES >>>>>>>>>>>>>>>>>>
	$wp_customize->add_section('wallpay_redes_sociales', array(
		'title' => __('Redes Sociales', LANG ),
		'description' => __('Sección Redes Sociales', LANG ),
		'priority' => 41
	));	
	//facebook
	$wp_customize->add_setting('wallpay_custom_settings[red_social_fb]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('wallpay_custom_settings[red_social_fb]', array(
		'label'    => __('Coloca el link de facebook de la empresa', LANG ),
		'section'  => 'wallpay_redes_sociales',
		'settings' => 'wallpay_custom_settings[red_social_fb]',
		'type'     => 'text'
	));
	//youtube
	$wp_customize->add_setting('wallpay_custom_settings[red_social_ytube]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('wallpay_custom_settings[red_social_ytube]', array(
		'label'    => __('Coloca el link de youtube de la empresa', LANG ),
		'section'  => 'wallpay_redes_sociales',
		'settings' => 'wallpay_custom_settings[red_social_ytube]',
		'type'     => 'text'
	));
	//twitter
	$wp_customize->add_setting('wallpay_custom_settings[red_social_twitter]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('wallpay_custom_settings[red_social_twitter]', array(
		'label'    => __('Coloca el link de twitter de la empresa', LANG ),
		'section'  => 'wallpay_redes_sociales',
		'settings' => 'wallpay_custom_settings[red_social_twitter]',
		'type'     => 'text'
	));
	//gmail
	$wp_customize->add_setting('wallpay_custom_settings[red_social_gmail]', array(
		'default' => '',
		'type' => 'option'
	));
	$wp_customize->add_control('wallpay_custom_settings[red_social_gmail]', array(
		'label'    => __('Coloca el link de gmail de la empresa', LANG ),
		'section'  => 'wallpay_redes_sociales',
		'settings' => 'wallpay_custom_settings[red_social_gmail]',
		'type'     => 'text'
	));

	
	// Contact Email
	$wp_customize->add_section('wallpay_contact_email', array(
		'title' => __('Correo Contacto de Formulario', LANG ),
		'description' => __('Escribe el Correo Contacto de Formulario', LANG ),
		'priority' => 37
	));
	
	$wp_customize->add_setting('wallpay_custom_settings[contact_email]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('wallpay_custom_settings[contact_email]', array(
		'label'    => __('Dirección Contacto de Formulario', LANG ),
		'section'  => 'wallpay_contact_email',
		'settings' => 'wallpay_custom_settings[contact_email]',
		'type'     => 'text'
	));

	//Customizar celular
	$wp_customize->add_section('wallpay_contact_cel', array(
		'title' => __('Celular de Contacto', LANG ),
		'description' => __('Celular de Contacto', LANG ),
		'priority' => 39
	));
	
	$wp_customize->add_setting('wallpay_custom_settings[contact_cel]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('wallpay_custom_settings[contact_cel]', array(
		'label'    => __('Escribe el o los números de celular del contacto separados por comas', LANG ),
		'section'  => 'wallpay_contact_cel',
		'settings' => 'wallpay_custom_settings[contact_cel]',
		'type'     => 'text'
	));

	//Customizar telefono
	$wp_customize->add_section('wallpay_contact_tel', array(
		'title' => __('Telefono de Contacto', LANG ),
		'description' => __('Telefono de Contacto', LANG ),
		'priority' => 39
	));
	
	$wp_customize->add_setting('wallpay_custom_settings[contact_tel]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('wallpay_custom_settings[contact_tel]', array(
		'label'    => __('Escribe el numero de teléfono', LANG ),
		'section'  => 'wallpay_contact_tel',
		'settings' => 'wallpay_custom_settings[contact_tel]',
		'type'     => 'text'
	));

	//Customizar Direccion
	$wp_customize->add_section('wallpay_contact_address', array(
		'title' => __('Direccion de Contacto', LANG ),
		'description' => __('Direccion de Contacto', LANG ),
		'priority' => 40
	));
	
	$wp_customize->add_setting('wallpay_custom_settings[contact_address]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('wallpay_custom_settings[contact_address]', array(
		'label'    => __('Escribe la Direccion del contacto ', LANG ),
		'section'  => 'wallpay_contact_address',
		'settings' => 'wallpay_custom_settings[contact_address]',
		'type'     => 'text'
	));

	//Customizar MAPA
	$wp_customize->add_section('wallpay_contact_mapa', array(
		'title' => __('Mapa de Contacto', LANG ),
		'description' => __('Mapa de Contacto', LANG ),
		'priority' => 41
	));
	
	$wp_customize->add_setting('wallpay_custom_settings[contact_mapa]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('wallpay_custom_settings[contact_mapa]', array(
		'label'    => __('Escribe latitud y longitud de mapa sepador por coma', LANG ),
		'section'  => 'wallpay_contact_mapa',
		'settings' => 'wallpay_custom_settings[contact_mapa]',
		'type'     => 'text'
	));

	//Customizar WIDGET NOSOTROS
	$wp_customize->add_section('wallpay_widget_nosotros', array(
		'title' => __('Sección WIDGET NOSOTROS', LANG ),
		'description' => __('Sección WIDGET NOSOTROS', LANG ),
		'priority' => 40
	));
	
	//textarea
	$wp_customize->add_setting('wallpay_custom_settings[widget_nosotros]', array(
		'default' => '',
		'type' => 'option'
	));
	
	$wp_customize->add_control('wallpay_custom_settings[widget_nosotros]', array(
		'label'    => __('Escribe contenido que ira en sección nosotros - PORTADA', LANG ),
		'section'  => 'wallpay_widget_nosotros',
		'settings' => 'wallpay_custom_settings[widget_nosotros]',
		'type'     => 'textarea'
	));
	//imagen
	$wp_customize->add_setting('wallpay_custom_settings[image_nosotros]',array(
		'default' => '',
		'type'    => 'option'
	));

	$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'widget_nosotros',array(
		'label'    => __('Imagen Nosotros', LANG ),
		'section'  => 'wallpay_widget_nosotros',
		'settings' => 'wallpay_custom_settings[image_nosotros]',
	)));
	
}	
?>