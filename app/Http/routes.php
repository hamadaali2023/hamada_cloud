<?php








Route::get('admin/aboutus', 'AboutusController@show');
Route::get('admin/aboutus_trashed', 'AboutusController@restore_trashed');  // show sub_stores
Route::post('admin/aboutus_add', 'AboutusController@store');  // create Category
Route::get('admin/aboutus/{about}/delete', 'AboutusController@destroy');  // create Category
Route::get('admin/aboutus/{about}/restore', 'AboutusController@restore');  // show sub_stores
Route::get('admin/aboutus/{about}/edit', 'AboutusController@edit'); // edit page view
Route::post('admin/aboutus/{about}/edit','AboutusController@update'); // submit form in edit page

Route::get('admin/contactus', 'ContactusController@show');
Route::get('admin/contactus_trashed', 'ContactusController@restore_trashed');  // show sub_stores
Route::post('admin/contactus_add', 'ContactusController@store');  // create Category
Route::get('admin/contactus/{contactus}/delete', 'ContactusController@destroy');  // create Category
Route::get('admin/contactus/{contactus}/restore', 'ContactusController@restore');  // show sub_stores
Route::get('admin/contactus/{contactus}/edit', 'ContactusController@edit'); // edit page view
Route::post('admin/contactus/{contactus}/edit','ContactusController@update'); // submit form in edit page

Route::get('admin/messages', 'MessagesController@show');
Route::get('admin/messages_trashed', 'MessagesController@restore_trashed');  // show sub_stores
Route::get('admin/messages/{id}/delete', 'MessagesController@destroy');  // create Category
Route::get('admin/messages/{id}/restore', 'MessagesController@restore');  // show sub_stores

Route::get('admin/request_price', 'Request_priceController@show');
Route::get('admin/request_price_trashed', 'Request_priceController@restore_trashed');  // show sub_stores
Route::get('admin/request_price/{id}/delete', 'Request_priceController@destroy');  // create Category
Route::get('admin/request_price/{id}/restore', 'Request_priceController@restore');  // show sub_stores


Route::get('admin/offers', 'OffersController@show');
Route::post('admin/offers_add', 'OffersController@store');  // create Category
Route::get('admin/offers/{id}/delete', 'OffersController@destroy');  // create Category
Route::get('admin/offers/{id}/edit', 'OffersController@edit'); // edit page view
Route::post('admin/offers/{id}/edit','OffersController@update'); // submit form in edit page


Route::get('admin/package', 'PackagesController@show');
Route::post('admin/package_add', 'PackagesController@store');  // create Category
Route::get('admin/package/{id}/delete', 'PackagesController@destroy');  // create Category
Route::get('admin/package/{id}/edit', 'PackagesController@edit'); // edit page view
Route::post('admin/package/{id}/edit','PackagesController@update'); // submit form in edit page

Route::get('admin/details', 'DetailsConteroller@show');
Route::post('admin/details_add', 'DetailsConteroller@store');  // create Category
Route::get('admin/details/{id}/delete', 'DetailsConteroller@destroy');  // create Category
Route::get('admin/details/{id}/edit', 'DetailsConteroller@edit'); // edit page view
Route::post('admin/details/{id}/edit','DetailsConteroller@update'); // submit form in edit page

Route::get('admin/package_details', 'PackegesDetailsController@show');
Route::post('admin/package_details_add', 'PackegesDetailsController@store'); 
Route::get('admin/package_details/{id}/delete', 'PackegesDetailsController@destroy'); 
Route::get('admin/package_details/{id}/edit', 'PackegesDetailsController@edit');
Route::post('admin/package_details/{id}/edit','PackegesDetailsController@update'); 

Route::get('admin/booking/', 'BookingController@show');
Route::get('admin/booking/{id}/delete', 'BookingController@destroy');  // create Category

Route::get('admin/services', 'ServicesController@show');
Route::get('admin/services_trashed', 'ServicesController@restore_trashed');  // show sub_stores
Route::post('admin/services_add', 'ServicesController@store');  // create Category
Route::get('admin/services/{id}/delete', 'ServicesController@destroy');  // create Category
Route::get('admin/services/{id}/restore', 'ServicesController@restore');  // show sub_stores
Route::get('admin/services/{id}/edit', 'ServicesController@edit'); // edit page view
Route::post('admin/services/{id}/edit','ServicesController@update'); // submit form in edit page

Route::get('admin/min_services/{id}', 'MinServicesController@show');  // show bill_purchases
Route::get('admin/min_services_trashed/{id}', 'MinServicesController@restore_trashed');  // show sub_stores
Route::post('admin/min_services_add/{id}/store', 'MinServicesController@store');  // create bill_purchases
Route::get('admin/min_services/{id}/delete', 'MinServicesController@destroy');  // show bill_purchases
Route::get('admin/min_services/{id}/restore', 'MinServicesController@restore');  // show sub_stores
Route::get('admin/min_services/{id}/edit', 'MinServicesController@edit'); // edit page view
Route::post('admin/min_services/{id}/edit','MinServicesController@update'); // submit form in edit page

Route::get('admin/feature/{id}', 'FeatureController@show');  // show bill_purchases
Route::get('admin/feature_trashed/{id}', 'FeatureController@restore_trashed');  // show sub_stores
Route::post('admin/feature_add/{id}/store', 'FeatureController@store');  // create bill_purchases
Route::get('admin/feature/{id}/delete', 'FeatureController@destroy');  // show bill_purchases
Route::get('admin/feature/{id}/restore', 'FeatureController@restore');  // show sub_stores
Route::get('admin/feature/{id}/edit', 'FeatureController@edit'); // edit page view
Route::post('admin/feature/{id}/edit','FeatureController@update'); // submit form in edit page

Route::get('admin/ourwork', 'OurworkController@show');
Route::get('admin/ourwork_trashed', 'OurworkController@restore_trashed');  // show sub_stores
Route::post('admin/ourwork_add', 'OurworkController@store');  // create Category
Route::get('admin/ourwork/{id}/delete', 'OurworkController@destroy');  // create Category
Route::get('admin/ourwork/{id}/restore', 'OurworkController@restore');  // show sub_stores
Route::get('admin/ourwork/{id}/edit', 'OurworkController@edit'); // edit page view
Route::post('admin/ourwork/{id}/edit','OurworkController@update'); // submit form in edit page

Route::get('admin/work/{id}', 'WorkController@show');  // show bill_purchases
Route::post('admin/work_add/{id}/store', 'WorkController@store');  // create bill_purchases
Route::get('admin/work/{id}/delete', 'WorkController@destroy');  // show bill_purchases
Route::get('admin/work/{id}/edit', 'WorkController@edit'); // edit page view
Route::post('admin/work/{id}/edit','WorkController 	@update'); // submit form in edit page

Route::get('admin/testimonil', 'TestimonilController@show');
Route::get('admin/testimonil/{id}', 'TestimonilController@show');
Route::get('admin/testimonil_trashed', 'TestimonilController@restore_trashed');  // show sub_stores
Route::post('admin/testimonil_add', 'TestimonilController@store');  // create Category
Route::get('admin/testimonil/{id}/delete', 'TestimonilController@destroy');  // create Category
Route::get('admin/testimonil/{id}/restore', 'TestimonilController@restore');  // show sub_stores
Route::get('admin/testimonil/{id}/edit', 'TestimonilController@edit'); // edit page view
Route::post('admin/testimonil/{id}/edit','TestimonilController@update'); // submit form in edit page

Route::get('admin/quate	', 'QuateController@show');
Route::get('admin/quate_trashed', 'QuateController@restore_trashed');  // show sub_stores
Route::post('admin/quate_add', 'QuateController@store');  // create Category
Route::get('admin/quate/{id}/delete', 'QuateController@destroy');  // create Category
Route::get('admin/quate/{id}/restore', 'QuateController@restore');  // show sub_stores
Route::get('admin/quate/{id}/edit', 'QuateController@edit'); // edit page view
Route::post('admin/quate/{id}/edit','QuateController@update'); // submit form in edit page


Route::get('admin/slider', 'SliderController@show');
Route::get('admin/services_trashed', 'SliderController@restore_trashed');  // show sub_stores
Route::post('admin/slider_add', 'SliderController@store');  // create Category
Route::get('admin/slider/{id}/delete', 'SliderController@destroy');  // create Category
Route::get('admin/slider/{id}/restore', 'SliderController@restore');  // show sub_stores
Route::get('admin/slider/{id}/edit', 'SliderController@edit'); // edit page view
Route::post('admin/slider/{id}/edit','SliderController@update'); // submit form in edit page

Route::get('admin/clients', 'ClientController@show');
Route::get('admin/clients_trashed', 'ClientController@restore_trashed');  // show sub_stores
Route::post('admin/clients_add', 'ClientController@store');  // create Category
Route::get('admin/clients/{id}/delete', 'ClientController@destroy');  // create Category
Route::get('admin/clients/{id}/restore', 'ClientController@restore');  // show sub_stores
Route::get('admin/clients/{id}/edit', 'ClientController@edit'); // edit page view
Route::post('admin/clients/{id}/edit','ClientController@update'); // submit form in edit page

Route::get('admin/landing', 'LandingController@show');
Route::post('admin/landing_add', 'LandingController@store');  // create Category
Route::get('admin/landing/{id}/delete', 'LandingController@destroy');  // create Category
Route::get('admin/landing/{id}/edit', 'LandingController@edit'); // edit page view
Route::post('admin/landing/{id}/edit','LandingController@update'); // submit form in edit page

Route::get('/', 'FrontController@home');
Route::get('/  الرئيسية ', 'FrontController@home');
Route::post('messages_add', 'FrontController@messages');  // create Category
Route::post('newsletter_add', 'FrontController@newsletter');  // create Category
Route::get('/ من-نحن    ', 'FrontController@aboutus');
Route::get('/ إتصل-بنا   ', 'FrontController@contactus');
Route::get('/offers/{id}/{title}', 'FrontController@offers');
Route::get('/booking/{id}', 'FrontController@booking');
Route::post('/sendbooking/{id}', 'FrontController@sendbooking');  // create Category
Route::get('/ طلب-سعر ', 'FrontController@request_price');
Route::get('/landing', 'FrontController@landing');

Route::post('/requestprice_add', 'FrontController@requestprice');  // create Category

Route::get('service/{id}/{title}', 'FrontController@services'); 
Route::get('/ourwork/{id}/{title}', 'FrontController@ourwork');
Route::get('/testimonil', 'FrontController@testimonil');

//Route::post('/quate/{id}	', 'FrontController@sendquote');
Route::post('/quate/{id}', 'FrontController@sendquote'); 













//Route::get('/home', 'HomeController@index');


Route::get('/dash', function () {
    return view('count.dash');
});


Route::auth();

/*
Route::get('/', function () {
    return view('count.index');
});
*/

Route::get('/admnclouds	', 'HomeController@index');



//Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/control', 'HomeController@control');
Route::post('update-role/{user}', 'HomeController@updateRole');
