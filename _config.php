<?php

Director::addRules(50, array(
	OgonePayment_Handler::$URLSegment . '/$Action/$ID' => 'OgonePayment_Handler'
));

// copy to myste/_config and set as required...
// __________________________________ START OGONE PAYMENT MODULE CONFIG __________________________________
//DO NOT FORGET...
//Payment::set_site_currency('NZD');
//Payment::set_supported_methods(array('OgonePayment' => 'Ogone Payment'));

// MUST SET
//OgonePayment::set_payment_options_array(array('CredtiCard' => 'Credit Card','iDeal' => 'iDeal','PayPal' => 'Paypal'));
	//OgonePayment::add_payment_option($key, $title);
	//OgonePayment::remove_payment_option($key) ;
//OgonePayment::set_test_mode(false);
//OgonePayment::set_account_pspid("myaccountcode");
//OgonePayment::set_sha_passphrase("hello");

//  FORMATTING
//OgonePayment::set_page_title("");
//OgonePayment::set_back_color();
//OgonePayment::set_text_color();
//OgonePayment::set_table_back_color();
//OgonePayment::set_table_text_color();
//OgonePayment::set_button_back_color();
//OgonePayment::set_button_text_color();
//OgonePayment::set_font_type();
//OgonePayment::set_image_url();
// --- OR ----
//OgonePayment::set_template();

// UNLIKELY TO NEED CHANGING
//OgonePayment::set_privacy_link('http://www.ogone.com/en/About%20Ogone/Privacy%20Policy.aspx');
//OgonePayment::set_logo('mysite/images/ogone.gif');
//OgonePayment::set_url('https://secure.ogone.com/ncol/prod/orderstandard.asp');
//OgonePayment::set_test_url('https://secure.ogone.com/ncol/test/orderstandard.asp');
// __________________________________ END OGONE PAYMENT MODULE CONFIG __________________________________

