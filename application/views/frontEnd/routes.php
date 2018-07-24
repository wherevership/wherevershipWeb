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


$route['forgotPass'] = 'Frontend/forgotPass';
$route['forgotEmail'] = 'Frontend/forgotEmail';
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
$route['tracking'] = 'track_manage/track';
$route['price'] = 'Frontend/price';

$route['member/user_panel'] = 'Member_manage/user_panel';
$route['member/personal_profile'] = 'Member_manage/personal_profile';
$route['member/unpaid_orders'] = 'Member_manage/unpaid_orders';
$route['member/domestic_report'] = 'Member_manage/domestic_report';
$route['member/international_report'] = 'Member_manage/international_report';
$route['member/truck_report'] = 'Member_manage/truck_report';
$route['member/address_book'] = 'Member_manage/address_book';
$route['member/edit_address_book/(:any)'] = 'Member_manage/edit_address_book/$1';
$route['member/courier'] = 'Member_manage/courier';
$route['member/pending_items'] = 'Member_manage/pending_items';
$route['member/actions_required'] = 'Member_manage/actions_required';
$route['member/partial_paid_order'] = 'Member_manage/partial_paid_order';
$route['member/invoice'] = 'Member_manage/invoice';
$route['member/credit_history'] = 'Member_manage/credit_history';
$route['member/top_up_history'] = 'Member_manage/top_up_history';
$route['member/top_up'] = 'Member_manage/top_up';
$route['member/bulk_upload'] = 'Member_manage/bulk_upload';

$route['order/(:any)/(:num)'] = 'Order_manage/detail/$1/$2';
$route['dtc_shipment/(:any)'] = 'Shipment_manage/dtcDetail/$1';
$route['int_shipment/(:any)'] = 'Shipment_manage/intDetail/$1';

$route['home'] = 'Frontend/index';
$route['default_controller'] = 'Frontend/index';

$route['admin/login'] = 'Admin_manage/admin_login';
$route['admin/dashboard'] = 'Admin_manage/dashboard';
$route['admin/add_requester'] = 'Admin_manage/add_requester';
$route['admin/requester_list'] = 'Admin_manage/requester_list';
$route['admin/add_driver'] = 'Admin_manage/add_driver';
$route['admin/driver_list'] = 'Admin_manage/driver_list';
$route['admin/add_admin'] = 'Admin_manage/add_admin';
$route['admin/admin_list'] = 'Admin_manage/admin_list';
$route['admin/domestic'] = 'Admin_manage/domestic';
$route['admin/international'] = 'Admin_manage/international';
$route['admin/trucking'] = 'Admin_manage/trucking';
$route['admin/international_cost'] = 'Admin_manage/international_cost';
$route['admin/domestic_cost'] = 'Admin_manage/domestic_cost';
$route['admin/trucking_cost'] = 'Admin_manage/trucking_cost';
$route['admin/profile_setting'] = 'Admin_manage/profile_setting';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
