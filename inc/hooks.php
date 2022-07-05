<?php

function akonbariagro_header_style() {
	if ( is_admin() || ! is_user_logged_in() ) {
		return;
	}
	?>
	<style>
        #header{
            top:32px;
        }
        @media only screen and (max-width: 782px) {
            #header{
                top:46px;
            }
        }
	</style>
	<?php
}
add_action( 'wp_head', 'akonbariagro_header_style' );

function akonbariagro_get_custom_logo_image_attributes( $custom_logo_attr ) {
	if ( ! is_admin() ) {
		$custom_logo_attr['class'] = 'img-fluid';
	}
    return $custom_logo_attr;
}
add_filter( 'get_custom_logo_image_attributes', 'akonbariagro_get_custom_logo_image_attributes' );

function akonbariagro_get_custom_logo( $html ) {
    if ( is_admin() || ! has_custom_logo() ) {
        return $html;
    }
    $new_html = str_replace( 'class="custom-logo-link"', 'class="scrollto"', $html );
    return $new_html;
}
add_filter( 'get_custom_logo', 'akonbariagro_get_custom_logo' );

//add_filter( 'gettext', 'wps_translate_words_array' );
//add_filter( 'ngettext', 'wps_translate_words_array' );
function wps_translate_words_array( $translated ) {

	$words = array(
		'Classes'   => 'Courses',
		'Class'     => 'Course',
		'Sections'  => 'Batches',
		'Section'   => 'Batch',
		'Subject'   => 'Course Name',
		'Teacher'   => 'Trainer',
		'SM School' => 'Training Center',
		'School'    => 'Training Center',
	);

	$translated = str_ireplace( array_keys( $words ), $words, $translated );

	return $translated;
}

function akonbariagro_send_sms(){
    if ( isset( $_GET['action'] ) && 'send-sms' == $_GET['action'] ) {
	    $mobileNo = isset( $_GET['phone'] ) && $_GET['phone'] ? $_GET['phone'] : '';
        if ( ! $mobileNo ) {
            wp_send_json_error( "Phone number empty" );
        }
        //var_dump( $mobileNo );exit();
	    //$mobileNo='01771222060';
	    $sender_id='401';
	    $apiKey='UmFodWxzYXJrZXI6UmFodWwyMDYw';
	    $message='This is test SMS';
	    $response = akonbariagro_techno_bulk_sms_get($sender_id,$apiKey,$mobileNo,$message);
        echo $response;
        exit();
    }
}

add_action( 'template_redirect', 'akonbariagro_send_sms' );

function akonbariagro_techno_bulk_sms_get( $sender_id,$apiKey,$mobileNo,$message ) {
	$url = 'https://24smsbd.com/api/bulkSmsApi';
	$data = array('sender_id' => $sender_id,
	              'apiKey' => $apiKey,
	              'mobileNo' => $mobileNo,
	              'message' =>$message
	);

	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	$output = curl_exec($curl);
	curl_close($curl);
    return $output;
}