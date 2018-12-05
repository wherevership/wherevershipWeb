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

$route['dtc_shipment'] = 'Domestic_shipment_manage/domesticShipmentForm';
$route['dtc_shipment_process'] = 'Domestic_shipment_manage/domesticShipmentFormProcess';
$route['dtc_shipment_overview_process'] = 'Domestic_shipment_manage/domesticShipmentOverviewProcess';
$route['dtc_shipment_overview'] = 'Domestic_shipment_manage/domesticShipmentOverview';
$route['dtc_payment_process'] = 'Domestic_shipment_manage/domesticPaymentProcess';
$route['dtc_payment'] = 'Domestic_shipment_manage/domesticPayment';
$route['dtc_cost_preview'] = 'Cost_preview_manage/dtcCostPreview';
$route['dtc_cost_preview_process'] = 'Cost_preview_manage/dtcCostPreviewProcess';

$route['tk_shipper'] = 'Trucking_shipment_manage/tkShipperForm';
$route['tk_receiver'] = 'Trucking_shipment_manage/tkReceiverForm';
$route['tk_product_detail'] = 'Trucking_shipment_manage/tkProductDetailForm';


$route['int_shipper'] = 'International_shipment_manage/shipperForm';
$route['int_shipper_process'] = 'International_shipment_manage/shipperFormProcess';
$route['int_custom_process'] = 'International_shipment_manage/customProcess';
$route['int_custom'] = 'International_shipment_manage/custom';
$route['int_product_detail'] = 'International_shipment_manage/productDetailForm';
$route['int_product_detail_Process'] = 'International_shipment_manage/productDetailFormProcess';
$route['to_int_payment'] = 'International_shipment_manage/toIntPayment';
$route['to_int_payment_Process'] = 'International_shipment_manage/toIntPaymentProcess';

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
$route['cost_preview_process'] = 'Cost_preview_manage/costPreviewProcess';

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
$route['member/login_process'] = 'User_manage/login_process';
$route['member/logOut'] = 'User_manage/logout';
$route['member/signUp'] = 'User_manage/signUpProcess';
$route['member/updateMemberProfile/(:num)'] = 'User_manage/updateMemberProfile/$1';


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
$route['admin/login_process'] = 'Admin_manage/login_process';
$route['admin/LogOut'] = 'Admin_manage/logout';
$route['admin/admin_delete/(:num)'] = 'Admin_process_manage/admin_delete/$1';
$route['admin/requester_delete/(:num)'] = 'Admin_process_manage/requester_delete/$1';
$route['admin/driver_delete/(:num)'] = 'Admin_process_manage/driver_delete/$1';
$route['api/adminDetail/(:num)'] = 'User_api_manage/adminDetail/$1';
$route['api/userDetail/(:num)'] = 'User_api_manage/userDetail/$1';
$route['admin/update_profile/(:num)'] = 'User_manage/updateAdminProfile/$1';
$route['admin/searchAdmin'] = 'Admin_manage/search_admin';
$route['admin/searchRequster'] = 'User_manage/searchRequester';
$route['admin/searchDriver'] = 'User_manage/searchDriver';
$route['admin/adminBulkDelete'] = 'Admin_process_manage/bulk_delete';
$route['admin/userBulkDelete'] = 'Admin_process_manage/userBulkDelete';
$route['admin/shipmentDetail/(:any)'] = 'Shipment_api_manage/shipmentDetail/$1';
$route['admin/searchShipmentByOther/(:any)'] = 'Shipment_api_manage/search_shipment/$1';
$route['admin/searchShipmentByDate/(:any)'] = 'Shipment_api_manage/search_shipment_by_date/$1';
$route['admin/updateStatus/(:any)/(:any)'] = 'Shipment_api_manage/updateStatus/$1/$2';
$route['admin/updateDomesticStatus/(:any)/(:any)'] = 'Shipment_api_manage/updateDomesticStatus/$1/$2';
$route['admin/bulkUpdateStatus'] = 'Shipment_api_manage/bulkUpdateStatus';
$route['admin/updateAdminStatus'] = 'User_api_manage/updateAdmin';
$route['admin/bulkUpdateAdminStatus'] = 'User_api_manage/bulkUpdateAdmin';
$route['admin/UpdateUserStatus'] = 'User_api_manage/updateUser';
$route['admin/bulkUpdateUserStatus'] = 'User_api_manage/bulkUpdateUser';

$route['internatinal/fuel_charge_update'] = 'International_shipment_manage/fuel_charge_update';
$route['internatinal/internatinal_price/(:any)'] = 'International_shipment_manage/internatinal_price/$1';
$route['internatinal/internatinal_price_update'] = 'International_shipment_manage/international_price_update';
$route['internatinal/search_price'] = 'International_shipment_manage/search_shipment_price'; 
$route['internatinal/bulk_international_price_update'] = 'International_shipment_manage/bulk_internatinal_price_update'; 
$route['internatinal/cleareanceDetail'] = 'International_shipment_manage/custom_detail';

$route['domestic/domestic_price/(:any)'] = 'Domestic_shipment_manage/domestic_price/$1';
$route['domestic/domestic_price_update'] = 'Domestic_shipment_manage/domestic_price_update';
$route['domestic/search_price'] = 'Domestic_shipment_manage/search_shipment_price';
$route['domestic/bulk_domestic_price_update'] = 'Domestic_shipment_manage/bulk_domestic_price_update';

$route['admin/testOne'] = 'Admin_testing/test_get_one';
$route['admin/testAll'] = 'Admin_testing/test_get_all';
$route['admin/testSession1'] = 'Admin_testing/test_session';
$route['admin/testSession'] = 'Admin_manage/test_session';
$route['admin/testLogOut'] = 'Admin_testing/test_logout';



$route['testEmail'] = 'Email_manage/testEmail';
$route['contactSend'] = 'Email_manage/sendContactUs';

$route['api/domesticCost/(:any)/(:any)'] = 'Price_api_manage/domestic_price/$1/$2';
$route['api/intCost/(:any)/(:any)'] = 'Price_api_manage/int_price/$1/$2';
$route['api/add_admin'] = 'User_manage/addAdmin'; 
$route['api/add_driver'] = 'User_manage/addDriver'; 
$route['api/add_requester'] = 'User_manage/addRequester'; 

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
