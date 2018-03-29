<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method

*/
$route['user_signup_form'] = 'Form_manage/userSignupForm';

$route['dtc_shipper'] = 'Domestic_shipment_manage/domesticShipperForm';
$route['dtc_receiver'] = 'Domestic_shipment_manage/domesticReceiverForm';
$route['dtc_product_detail'] = 'Domestic_shipment_manage/domesticProductDetailForm';
$route['dtc_shipment_overview'] = 'Domestic_shipment_manage/domesticShipmentOverview';

$route['tk_shipper'] = 'Trucking_shipment_manage/tkShipperForm';
$route['tk_receiver'] = 'Trucking_shipment_manage/tkReceiverForm';
$route['tk_product_detail'] = 'Trucking_shipment_manage/tkProductDetailForm';


$route['int_shipper'] = 'International_shipment_manage/shipperForm';
$route['int_receiver'] = 'International_shipment_manage/receiverForm';
$route['int_product_detail'] = 'International_shipment_manage/productDetailForm';
$route['int_agreement'] = 'International_shipment_manage/agreementForm';

$route['internatinal_quote'] = 'Cost_manage/international_quote';
$route['test'] = 'Cost_manage/test_get';
$route['testOne'] = 'Cost_manage/test_getOne';

$route['truck'] = 'Frontend/truck';
$route['aboutUs'] = 'Frontend/aboutUs';
$route['contactUs'] = 'Frontend/contactUs';
$route['courier'] = 'Frontend/courier';
$route['signUp'] = 'Frontend/signUp';
$route['userLogin'] = 'Frontend/userLogin';
$route['volumetricCalcualator'] = 'Frontend/volumetricCalcualator';
$route['refund_policy'] = 'Frontend/refundPolicy';
$route['faq'] = 'Frontend/faq';
$route['prohibited_item_list'] = 'Frontend/prohibitedItemList';
$route['term_and_condition'] = 'Frontend/tos';
$route['privacy_policy'] = 'Frontend/privacyPolicy';
$route['cost_preview'] = 'Cost_preview_manage/costPreview';
$route['dtc_cost_preview'] = 'Cost_preview_manage/dtcCostPreview';

$route['user_panel'] = 'Member_manage/user_panel';
$route['personal_profile'] = 'Member_manage/personal_profile';
$route['unpaid_orders'] = 'Frontend/unpaid_orders';
$route['domestic_report'] = 'Member_manage/domestic_report';
$route['international_report'] = 'Member_manage/international_report';
$route['address_book'] = 'Member_manage/address_book';

$route['home'] = 'Frontend/index';
$route['default_controller'] = 'Frontend/index';

$route['admin_test'] = 'Admin_manage/admin_test';
$route['admin_login'] = 'Admin_manage/admin_login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
