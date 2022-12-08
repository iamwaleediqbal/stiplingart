<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => 'D9F8D98372F4B61CF0833C4C3634AC46',
	'url' => 'http://localhost/',
	'homepage_url' => 'http://localhost/index.html',
	'icon' => '',
	'version' => '2022.2.11.0',
	'sitename' => 'Inspirational Art',
	'lang_code' => 'en-GB',
	'public_folder' => '',
	'salt' => 'qrrjpno4qah0v0yvq7yt63251pul8krnvh3huddealq1eeqe86itzprmplh0s2',
	'common_email_sender_addres' => 'noreply@talha-t.websitex5.me'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"mrkoo9gb-imCpt\">Check word:</label><br />
			<input type=\"text\" id=\"mrkoo9gb-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_7rzqjytc.png',
	'notification_public_key' => '1bb572b663f36f4b',
	'notification_private_key' => 'a37af247c00a4591',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'z6xorugt' => array(
		'description' => '',
		'host' => 'localhost',
		'database' => 'trt4kj9m_db',
		'user' => 'trt4kj9m_db',
		'password' => 'bO4#dS3%mK0&',
		'table_prefix' => ''
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://localhost/cart/index.html',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(0, 0, 0, 1); background-color: rgba(255, 255, 255, 1); padding: 8px 30px 8px 30px; border-style: solid; border-width: 2px 2px 2px 2px; border-color: rgba(255, 0, 0, 1) rgba(255, 0, 0, 1) rgba(255, 0, 0, 1) rgba(255, 0, 0, 1); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;',
	'email_opening' => 'Dear Customer,<br /><br />Thank you for your order. Below you will find the list of the products you have ordered; order will be confirmed only after the payment has been made.',
	'email_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, <br />Our Sales Staff.',
	'email_payment_opening' => 'Dear Customer,<br /><br />Thank you for your purchase. We confirm that we have correctly received your payment and that the order will be processed as soon as possible.<br /><br />Below you will find the list of the products you have ordered, the billing and shipping details.',
	'email_payment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_digital_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase.<br />Please find attached the list of download links for the products you have ordered:',
	'email_digital_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_physical_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase. We confirm the order was correctly processed and shipped. <br />Please find attached the list of the ordered products:',
	'email_physical_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(0, 0, 0, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'john-michael@stipplingart.com',
	'vat_type' => 'none',
	'availability_image' => 'cart/images/cart-available.png'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '$',
	'currency_code' => 'USD',
	'currency_name' => 'United States of America, Dollars',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array(
	't6xmj3wi' => array(
		'id' => 't6xmj3wi',
		'name' => 'Ashley & Tyley',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '36"x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'uwj0sss0',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '52o0s8pv',
				'name' => 'Metal',
				'price_variation' => 150.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 100.00,
		'singleFullPrice' => '100.00',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Ashley-n-Tyley.jpg',
				'width' => 1630,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/Ashley-n-Tyley.jpg',
			'width' => 1630,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Ashley-n-Tyley.jpg\',\'width\': 1630,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Ashley-n-Tyley.jpg\',\'width\': 1630,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Ashley-n-Tyley.jpg\',\'width\': 1630,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Ashley-n-Tyley.jpg\',\'width\': 1630,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink6103d40162a8de428acb404d1e27dee4 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Ashley-n-Tyley.jpg\',\'width\': 1630,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink6103d40162a8de428acb404d1e27dee4, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink75592a149c37f03ef39fe035853307c5 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Ashley-n-Tyley.jpg\',\'width\': 1630,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink75592a149c37f03ef39fe035853307c5, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lorem-a',
		'relatedProducts' => array(
			'wa1yxklr'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Ashley & Tyley',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Ashley & Tyley',
			'image' => 'http://localhost/images/Ashley-n-Tyley.jpg',
			'description' => '36"x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'w6y2osup' => array(
		'id' => 'w6y2osup',
		'name' => 'Batman',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '36"x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'yywi1ckz',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '5wqzkdt6',
				'name' => 'Metal',
				'price_variation' => 150.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 100.00,
		'singleFullPrice' => '100.00',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/BMWM.jpg',
				'width' => 740,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/BMWM.jpg',
			'width' => 740,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BMWM.jpg\',\'width\': 740,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BMWM.jpg\',\'width\': 740,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BMWM.jpg\',\'width\': 740,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BMWM.jpg\',\'width\': 740,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkad88096f4defbdf68346642fe3c9244b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BMWM.jpg\',\'width\': 740,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkad88096f4defbdf68346642fe3c9244b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkc9580c290d695827fa17369fce3f36c6 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BMWM.jpg\',\'width\': 740,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc9580c290d695827fa17369fce3f36c6, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lorem-b',
		'relatedProducts' => array(
			'wa1yxklr'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Batman',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Batman',
			'image' => 'http://localhost/images/BMWM.jpg',
			'description' => '36"x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'xecfjb8r' => array(
		'id' => 'xecfjb8r',
		'name' => 'Joker',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '36"x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => '0p7z5eow',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'lgahezlr',
				'name' => 'Metal',
				'price_variation' => 150.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 100.00,
		'singleFullPrice' => '100.00',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/JKWM.jpg',
				'width' => 726,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/JKWM.jpg',
			'width' => 726,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/JKWM.jpg\',\'width\': 726,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/JKWM.jpg\',\'width\': 726,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/JKWM.jpg\',\'width\': 726,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/JKWM.jpg\',\'width\': 726,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink01d5d46a6f26b6d99fd09e436c7f6746 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/JKWM.jpg\',\'width\': 726,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink01d5d46a6f26b6d99fd09e436c7f6746, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink40e2f59900ec709f9bac8ff4c7457106 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/JKWM.jpg\',\'width\': 726,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink40e2f59900ec709f9bac8ff4c7457106, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lorem-c',
		'relatedProducts' => array(
			'wa1yxklr'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Joker',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Joker',
			'image' => 'http://localhost/images/JKWM.jpg',
			'description' => '36"x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'4btnmhvb' => array(
		'id' => '4btnmhvb',
		'name' => 'Christenson Combative',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '36"x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'id54uucw',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'kayfgzzu',
				'name' => 'Metal',
				'price_variation' => 150.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 100.00,
		'singleFullPrice' => '100.00',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/BCWM.jpg',
				'width' => 727,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/BCWM.jpg',
			'width' => 727,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BCWM.jpg\',\'width\': 727,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BCWM.jpg\',\'width\': 727,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BCWM.jpg\',\'width\': 727,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BCWM.jpg\',\'width\': 727,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink47975498e5fadc948a37fd50ee2e97a3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BCWM.jpg\',\'width\': 727,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink47975498e5fadc948a37fd50ee2e97a3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkca9a82570e0fc01450c1285ba5ebe14b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/BCWM.jpg\',\'width\': 727,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkca9a82570e0fc01450c1285ba5ebe14b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lorem-d',
		'relatedProducts' => array(
			'wa1yxklr'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Christenson Combative',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Christenson Combative',
			'image' => 'http://localhost/images/BCWM.jpg',
			'description' => '36"x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'hpqmerre' => array(
		'id' => 'hpqmerre',
		'name' => 'Ganesha',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '36"x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => '7np64wwk',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '7qun4gzg',
				'name' => 'Metal',
				'price_variation' => 150.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 100.00,
		'singleFullPrice' => '100.00',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/GENWM.jpg',
				'width' => 715,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/GENWM.jpg',
			'width' => 715,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GENWM.jpg\',\'width\': 715,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GENWM.jpg\',\'width\': 715,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GENWM.jpg\',\'width\': 715,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GENWM.jpg\',\'width\': 715,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink548983ba2eeb88b85e4877a473a5d620 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GENWM.jpg\',\'width\': 715,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink548983ba2eeb88b85e4877a473a5d620, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink15937c37eba8ccab41e94b29577ed871 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GENWM.jpg\',\'width\': 715,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink15937c37eba8ccab41e94b29577ed871, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lorem-e',
		'relatedProducts' => array(
			'wa1yxklr'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Ganesha',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Ganesha',
			'image' => 'http://localhost/images/GENWM.jpg',
			'description' => '36"x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'qli1140i' => array(
		'id' => 'qli1140i',
		'name' => 'Queen',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '36"x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'pj6dgd77',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'qvfahoii',
				'name' => 'Metal',
				'price_variation' => 150.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 100.00,
		'singleFullPrice' => '100.00',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/QNWM.jpg',
				'width' => 838,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/QNWM.jpg',
			'width' => 838,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/QNWM.jpg\',\'width\': 838,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/QNWM.jpg\',\'width\': 838,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/QNWM.jpg\',\'width\': 838,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/QNWM.jpg\',\'width\': 838,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink43add10bf264bbfb06cbf62b86894a27 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/QNWM.jpg\',\'width\': 838,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink43add10bf264bbfb06cbf62b86894a27, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink878fab3307e7cf57ea333a63021a6f23 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/QNWM.jpg\',\'width\': 838,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink878fab3307e7cf57ea333a63021a6f23, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lorem-f',
		'relatedProducts' => array(
			'wa1yxklr'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Queen',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Queen',
			'image' => 'http://localhost/images/QNWM.jpg',
			'description' => '36"x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'ujdhom3x' => array(
		'id' => 'ujdhom3x',
		'name' => 'Greta Thurnberg',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '36"x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'vkkchsqe',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'fpzzmmfn',
				'name' => 'Metal',
				'price_variation' => 150.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 100.00,
		'singleFullPrice' => '100.00',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/GTWM_cxj8j9lz.jpg',
				'width' => 715,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/GTWM_cxj8j9lz.jpg',
			'width' => 715,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GTWM_cxj8j9lz.jpg\',\'width\': 715,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GTWM_cxj8j9lz.jpg\',\'width\': 715,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GTWM_cxj8j9lz.jpg\',\'width\': 715,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GTWM_cxj8j9lz.jpg\',\'width\': 715,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkb46667358f406baac09aeb8b4986774d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GTWM_cxj8j9lz.jpg\',\'width\': 715,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb46667358f406baac09aeb8b4986774d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink2c6f48a62792c5a429b79aca14e0dfb1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GTWM_cxj8j9lz.jpg\',\'width\': 715,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink2c6f48a62792c5a429b79aca14e0dfb1, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lorem-g',
		'relatedProducts' => array(
			'wa1yxklr'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Greta Thurnberg',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Greta Thurnberg',
			'image' => 'http://localhost/images/GTWM_cxj8j9lz.jpg',
			'description' => '36"x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'j7z8ph31' => array(
		'id' => 'j7z8ph31',
		'name' => 'Imran Khan',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '36"x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'x92i84hg',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '3gzweny4',
				'name' => 'Metal',
				'price_variation' => 150.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 100.00,
		'singleFullPrice' => '100.00',
		'singleFullPricePlusVat' => '100.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IKWM_2bu3eumw.jpg',
				'width' => 727,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/IKWM_2bu3eumw.jpg',
			'width' => 727,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IKWM_2bu3eumw.jpg\',\'width\': 727,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IKWM_2bu3eumw.jpg\',\'width\': 727,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IKWM_2bu3eumw.jpg\',\'width\': 727,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IKWM_2bu3eumw.jpg\',\'width\': 727,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinka2a51926cef7248cd962a0d1d414f888 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IKWM_2bu3eumw.jpg\',\'width\': 727,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka2a51926cef7248cd962a0d1d414f888, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinka666a8eb24d0e920fc90b78db7ecc0c2 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IKWM_2bu3eumw.jpg\',\'width\': 727,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka666a8eb24d0e920fc90b78db7ecc0c2, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lorem-h',
		'relatedProducts' => array(
			'wa1yxklr'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Imran Khan',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Imran Khan',
			'image' => 'http://localhost/images/IKWM_2bu3eumw.jpg',
			'description' => '36"x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '100.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'wa1yxklr' => array(
		'id' => 'wa1yxklr',
		'name' => 'The Wave',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '48" x 24"',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'd9jc4xh7',
				'name' => 'Canvas',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'w39zuij9',
				'name' => 'Metal',
				'price_variation' => 200.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 300.00,
		'singleFullPrice' => '300.00',
		'singleFullPricePlusVat' => '300.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/WVWM_oqpseitt.jpg',
				'width' => 1645,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'http://localhost/images/WVWM_oqpseitt.jpg',
			'width' => 1645,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?the-wave\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?the-wave\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?the-wave\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?the-wave\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?the-wave" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?the-wave" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WVWM_oqpseitt.jpg\',\'width\': 1645,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WVWM_oqpseitt.jpg\',\'width\': 1645,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WVWM_oqpseitt.jpg\',\'width\': 1645,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WVWM_oqpseitt.jpg\',\'width\': 1645,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink16fb2072c03008ee10b051858fbafe74 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WVWM_oqpseitt.jpg\',\'width\': 1645,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink16fb2072c03008ee10b051858fbafe74, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink4946c54b64d24646d1dd5a241540040c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WVWM_oqpseitt.jpg\',\'width\': 1645,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink4946c54b64d24646d1dd5a241540040c, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 7.50,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => '1zcyd6xf',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'the-wave',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 22px; }
#details_tab0 div { line-height: 22px; }
#details_tab0 .imHeading1 { line-height: 52px; }
#details_tab0 .imHeading2 { line-height: 48px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1140.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1139.9px) and (min-width: 768.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 767.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'The Wave',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'The Wave',
			'image' => 'http://localhost/images/WVWM_oqpseitt.jpg',
			'description' => '48" x 24"',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '300.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	)
));
$ecommerce->setSlugToProductIdMap(array(
	'lorem-a' => 't6xmj3wi',
	'lorem-b' => 'w6y2osup',
	'lorem-c' => 'xecfjb8r',
	'lorem-d' => '4btnmhvb',
	'lorem-e' => 'hpqmerre',
	'lorem-f' => 'qli1140i',
	'lorem-g' => 'ujdhom3x',
	'lorem-h' => 'j7z8ph31',
	'the-wave' => 'wa1yxklr'
));
$ecommerce->setCategoriesData(array(
	'9z4z1d8y' => array(
		'id' => '9z4z1d8y',
		'name' => 'New Category',
		'containsProductsWithProductPage' => true,
		'products' => array(
			't6xmj3wi',
			'w6y2osup',
			'xecfjb8r',
			'4btnmhvb',
			'hpqmerre',
			'qli1140i',
			'ujdhom3x',
			'j7z8ph31',
			'wa1yxklr'
		),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_lf7281yi_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'5jndx0mj' => array(
		'id' => '5jndx0mj',
		'name' => 'PayPal',
		'description' => 'Pay via PayPal',
		'email_text' => 'Please make the payment using the PayPal link provided below. Order will only be confirmed after the payment has been made.',
		'enableAfterPaymentEmail' => true,
		'page_ok' => 'http://localhost/index.html',
		'page_ko' => 'http://localhost/index.html'
	)));
$ecommerce->setShippingData(array(
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Delivery',
		'description' => 'The goods will be delivered in 14 days.',
		'email_text' => 'Shipped via Delivery. The goods will be delivered in 14 days.',
		'enable_tracking' => false,
		'tracking_url' => ''
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2022.2.11 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#FFFFFF" style="background-color: #FFFFFF;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 12pt \'Open Sans\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: transparent; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 9pt \'Open Sans\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'This e-mail contains information that is intended solely for the above mentioned addressee.<br>If you have received this e-mail by error, please notify the sender immediately and destroy it, without copying it.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#FFFFFF';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Open Sans\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Open Sans;';

// End of file x5settings.php