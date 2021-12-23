<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\LeaveApplicationController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Logocontroller;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Inner_bannerController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Settingcontroller;
use App\Http\Controllers\packageController;
use App\Http\Controllers\BudgetRangeController;
use App\Http\Controllers\OrderPlacedController;
use App\Http\Controllers\showClientsPackagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [IndexController::class, 'index'])->name('welcome');
Route::get('/about-us ', [IndexController::class, 'about_us'])->name('about_us');
//Route::get('/', [IndexController::class, 'home'])->name('welcome');

// --------- Start Webho Route --------- //


Route::get('/web-design', [IndexController::class, 'webDesign'])->name('webDesign');
Route::get('/web-app-dev', [IndexController::class, 'webAppDev'])->name('webAppDev');
Route::get('/video-animation', [IndexController::class, 'videoAnimation'])->name('videoAnimation');
Route::get('/log-animation', [IndexController::class, 'logAnimation'])->name('logAnimation');
Route::get('/seo-services', [IndexController::class, 'seoServices'])->name('seoServices');
Route::get('/smm-services', [IndexController::class, 'smmServices'])->name('smmServices');
Route::get('/orm-services', [IndexController::class, 'ormServices'])->name('ormServices');

Route::get('/packages', [IndexController::class, 'packages'])->name('packages');
Route::get('/portfolio', [IndexController::class, 'portfolio'])->name('portfolio');
Route::get('/terms-condition', [IndexController::class, 'termsCondition'])->name('termsCondition');
Route::get('/privacy-policy', [IndexController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/return-policy', [IndexController::class, 'returnPolicy'])->name('returnPolicy');
Route::get('/review', [IndexController::class, 'review'])->name('review');
Route::get('/ecommerce-development', [IndexController::class, 'ecommerceDevelopment'])->name('ecommerceDevelopment');
Route::get('/combo-package', [IndexController::class, 'comboPackage'])->name('comboPackage');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact');

Route::post('/inquiry-submit', [IndexController::class, 'inquiry_submit'])->name('inquiry_submit');
Route::post('/inquiry_project_submit', [IndexController::class, 'inquiry_project_submit'])->name('inquiry_project_submit');
Route::post('/order_placed_submit', [IndexController::class, 'order_placed_submit'])->name('order_placed_submit');


Route::get('/3d-design', [IndexController::class, '_3DDesign'])->name('3dDesign');
Route::get('/advanced-ecommerce-details', [IndexController::class, 'advancedEcommerceDetails'])->name('advancedEcommerceDetails');
Route::get('/basic-combo', [IndexController::class, 'basicCombo'])->name('basicCombo');
Route::get('/basic-website', [IndexController::class, 'basicWebsite'])->name('basicWebsite');
Route::get('/business-website-package-detail', [IndexController::class, 'businessWebsitePackageDetail'])->name('businessWebsitePackageDetail');
Route::get('/classic-video-details', [IndexController::class, 'classicVideoDetails'])->name('classicVideoDetails');
Route::get('/collateral-classic-details', [IndexController::class, 'collateralClassicDetails'])->name('collateralClassicDetails');
Route::get('/complete-branding-details', [IndexController::class, 'completeBrandingDetails'])->name('completeBrandingDetails');
Route::get('/corporate-combo-details', [IndexController::class, 'corporateComboDetails'])->name('corporateComboDetails');
Route::get('/corporate-website-package-detail', [IndexController::class, 'corporateWebsitePackageDetail'])->name('corporateWebsitePackageDetail');

Route::get('/custom-crm-erp-portal-details', [IndexController::class, 'customCrmErpPortalDetails'])->name('customCrmErpPortalDetails');
Route::get('/custom-ecommerce-marketplace-details', [IndexController::class, 'customEcommerceMarketplaceDetails'])->name('customEcommerceMarketplaceDetails');
Route::get('/customized-web-portal-details', [IndexController::class, 'customizedWebPortalDetails'])->name('customizedWebPortalDetails');
Route::get('/delux-video-details', [IndexController::class, 'deluxVideoDetails'])->name('deluxVideoDetails');
Route::get('/e-commerce-package', [IndexController::class, 'eCommercePackage'])->name('eCommercePackage');
Route::get('/elite-ecommerce-details', [IndexController::class, 'eliteEcommerceDetails'])->name('eliteEcommerceDetails');
Route::get('/elite-seo-details', [IndexController::class, 'eliteSeoDetails'])->name('eliteSeoDetails');
Route::get('/elite-website-package-detail', [IndexController::class, 'eliteWebsitePackageDetail'])->name('eliteWebsitePackageDetail');
Route::get('/erp-portal-website-package', [IndexController::class, 'erpPortalWebsitePackage'])->name('erpPortalWebsitePackage');
Route::get('/identity-seo-details', [IndexController::class, 'identitySeoDetails'])->name('identitySeoDetails');
Route::get('/illustration', [IndexController::class, 'illustration'])->name('illustration');
Route::get('/logo-animation-basic', [IndexController::class, 'logoAnimationBasic'])->name('logoAnimationBasic');
Route::get('/logo-animation-professional', [IndexController::class, 'logoAnimationProfessional'])->name('logoAnimationProfessional');
Route::get('/logo-animation-startup', [IndexController::class, 'logoAnimationStartup'])->name('logoAnimationStartup');
Route::get('/logo-basic', [IndexController::class, 'logoBasic'])->name('logoBasic');
Route::get('/logo-Infinity', [IndexController::class, 'logoInfinity'])->name('logoInfinity');
Route::get('/logo-plus', [IndexController::class, 'logoPlus'])->name('logoPlus');
Route::get('/mascot', [IndexController::class, 'mascot'])->name('mascot');
Route::get('/orm-basic', [IndexController::class, 'ormBasic'])->name('ormBasic');
Route::get('/orm-business', [IndexController::class, 'ormBusiness'])->name('ormBusiness');
Route::get('/orm-premium', [IndexController::class, 'ormPremium'])->name('ormPremium');
Route::get('/orm-standard', [IndexController::class, 'ormStandard'])->name('ormStandard');
Route::get('/orm-value', [IndexController::class, 'ormValue'])->name('ormValue');
Route::get('/portal-package', [IndexController::class, 'portalPackage'])->name('portalPackage');
Route::get('/premium-collateral-details', [IndexController::class, 'premiumCollateralDetails'])->name('premiumCollateralDetails');
Route::get('/premium-video-details', [IndexController::class, 'premiumVideoDetails'])->name('premiumVideoDetails');
Route::get('/professional-combo', [IndexController::class, 'professionalCombo'])->name('professionalCombo');
Route::get('/professional-ecommerce-details', [IndexController::class, 'professionalEcommerceDetails'])->name('professionalEcommerceDetails');
Route::get('/professional-seo-details', [IndexController::class, 'professionalSeoDetails'])->name('professionalSeoDetails');
Route::get('/professional-website', [IndexController::class, 'professionalWebsite'])->name('professionalWebsite');
Route::get('/seo-startup-details', [IndexController::class, 'seoStartupDetails'])->name('seoStartupDetails');
Route::get('/smm-basic-3-months-plan', [IndexController::class, 'smmBasic3MonthsPlan'])->name('smmBasic3MonthsPlan');
Route::get('/smm-plus-6-months-plan-1', [IndexController::class, 'smmPlus6MonthsPlan1'])->name('smmPlus6MonthsPlan1');
Route::get('/smm-plus-6-months-plan-2', [IndexController::class, 'smmPlus6MonthsPlan2'])->name('smmPlus6MonthsPlan2');
Route::get('/smm-startup-one-time', [IndexController::class, 'smmStartupOneTime'])->name('smmStartupOneTime');
Route::get('/startup-collateral-details', [IndexController::class, 'startupCollateralDetails'])->name('startupCollateralDetails');
Route::get('/startup-combo', [IndexController::class, 'startupCombo'])->name('startupCombo');
Route::get('/startup-ecommerce-details', [IndexController::class, 'startupEcommerceDetails'])->name('startupEcommerceDetails');
Route::get('/startup-video-details', [IndexController::class, 'startupVideoDetails'])->name('startupVideoDetails');
Route::get('/startup-website', [IndexController::class, 'startupWebsite'])->name('startupWebsite');
Route::get('/teaser-intro-video-details', [IndexController::class, 'teaserIntroVideoDetails'])->name('teaserIntroVideoDetails');
Route::get('/unlimited-collateral-details', [IndexController::class, 'unlimitedCollateralDetails'])->name('unlimitedCollateralDetails');
Route::get('/elite-combo', [IndexController::class, 'eliteCombo'])->name('eliteCombo');
Route::get('/terms-condition', [IndexController::class, 'termsCondition'])->name('termsCondition');


// --------- End Webho Route --------- //



//Route::get('/employee-registration', [RegistrationController::class, 'index'])->name('employee_registration');
// Route::post('/employee-registration-submit', [RegistrationController::class, 'registration_submit'])->name('registration_submit');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // Inquiry
    Route::post('/inquiry_create_update_delete', [HomeController::class, 'inquiry_create_update_delete'])->name('inquiry_create_update_delete');
    Route::post('/inquiry_project_create_update_delete', [HomeController::class, 'inquiry_project_create_update_delete'])->name('inquiry_project_create_update_delete');

    // Budget Range
    Route::get('/budget_range', [BudgetRangeController::class, 'budget_range_index'])->name('budget_range_index');
    Route::post('/budget_range_create_update_delete', [BudgetRangeController::class, 'budget_range_create_update_delete'])->name('budget_range_create_update_delete');

    // Order Placed
    Route::get('/order_placed', [OrderPlacedController::class, 'order_place_index'])->name('order_place_index');
    Route::post('/order_place_create_update_delete', [OrderPlacedController::class, 'order_place_create_update_delete'])->name('order_place_create_update_delete');

    // logo
    Route::get('/logo-listing', [Logocontroller::class, 'logo_index'])->name('logo_index');
    Route::post('/update_logo', [Logocontroller::class, 'logo_update'])->name('logo_update');

    // logo
    Route::get('/logo-listing', [Logocontroller::class, 'logo_index'])->name('logo_index');
    Route::post('/update_logo', [Logocontroller::class, 'logo_update'])->name('logo_update');

    // banner
    Route::get('/banner-listing', [BannerController::class, 'banner_index'])->name('banner_index');
    Route::post('/store-banner/{id?}', [BannerController::class, 'banner_store'])->name('banner_store');
    Route::get('/show-banner/{id?}', [BannerController::class, 'banner_show'])->name('banner_show');
    Route::get('/edit-banner/{id?}', [BannerController::class, 'banner_edit'])->name('banner_edit');
    Route::post('/update_banner', [BannerController::class, 'banner_update'])->name('banner_update');
    Route::any('/destroy_banner/{id?}', [BannerController::class, 'banner_destroy'])->name('banner_destroy');

    // Inner Banner
    Route::get('/inner_banner-listing', [Inner_bannerController::class, 'inner_banner_index'])->name('inner_banner_index');
    Route::post('/store-inner_banner/{id?}', [Inner_bannerController::class, 'inner_banner_store'])->name('inner_banner_store');
    Route::get('/show-inner_banner/{id?}', [Inner_bannerController::class, 'inner_banner_show'])->name('inner_banner_show');
    Route::get('/edit-inner_banner/{id?}', [Inner_bannerController::class, 'inner_banner_edit'])->name('inner_banner_edit');
    Route::post('/update_inner_banner', [Inner_bannerController::class, 'inner_banner_update'])->name('inner_banner_update');
    Route::any('/destroy_inner_banner/{id?}', [Inner_bannerController::class, 'inner_banner_destroy'])->name('inner_banner_destroy');

    // Showing Clients Packages
    Route::get('/show_clients_packages', [showClientsPackagesController::class, 'showClientsPackages_index'])->name('showClientsPackages_index');
    Route::post('/client_package_store/{id?}', [showClientsPackagesController::class, 'client_package_store'])->name('client_package_store');
    Route::post('/update_client_package/{id?}', [showClientsPackagesController::class, 'client_package_update'])->name('client_package_update');
    Route::post('/destroy_client_package/{id?}', [showClientsPackagesController::class, 'client_package_destroy'])->name('client_package_destroy');


    // cms
    Route::get('/cms-listing', [CmsController::class, 'cms_index'])->name('cms_index');
    Route::post('/store-cms/{id?}', [CmsController::class, 'cms_store'])->name('cms_store');
    Route::get('/show-cms/{id?}', [CmsController::class, 'cms_show'])->name('cms_show');
    Route::get('/edit-cms/{id?}', [CmsController::class, 'cms_edit'])->name('cms_edit');
    Route::post('/update_cms', [CmsController::class, 'cms_update'])->name('cms_update');
    Route::any('/destroy_cms/{id?}', [CmsController::class, 'cms_destroy'])->name('cms_destroy');

    // testimonials
    Route::get('/testimonials-listing', [TestimonialsController::class, 'testimonials_index'])->name('testimonials_index');
    Route::post('/store-testimonials/{id?}', [TestimonialsController::class, 'testimonials_store'])->name('testimonials_store');
    Route::get('/show-testimonials/{id?}', [TestimonialsController::class, 'testimonials_show'])->name('testimonials_show');
    Route::get('/edit-testimonials/{id?}', [TestimonialsController::class, 'testimonials_edit'])->name('testimonials_edit');
    Route::post('/update_testimonials', [TestimonialsController::class, 'testimonials_update'])->name('testimonials_update');
    Route::any('/destroy_testimonials/{id?}', [TestimonialsController::class, 'testimonials_destroy'])->name('testimonials_destroy');

        // technology
    Route::get('/technology-listing', [TechnologyController::class, 'technology_index'])->name('technology_index');
    Route::post('/store-technology/{id?}', [TechnologyController::class, 'technology_store'])->name('technology_store');
    Route::get('/show-technology/{id?}', [TechnologyController::class, 'technology_show'])->name('technology_show');
    Route::get('/edit-technology/{id?}', [TechnologyController::class, 'technology_edit'])->name('technology_edit');
    Route::post('/update_technology', [TechnologyController::class, 'technology_update'])->name('technology_update');
    Route::any('/destroy_technology/{id?}', [TechnologyController::class, 'technology_destroy'])->name('technology_destroy');

        // client
    Route::get('/client-listing', [ClientController::class, 'client_index'])->name('client_index');
    Route::post('/store-client/{id?}', [ClientController::class, 'client_store'])->name('client_store');
    Route::get('/show-client/{id?}', [ClientController::class, 'client_show'])->name('client_show');
    Route::get('/edit-client/{id?}', [ClientController::class, 'client_edit'])->name('client_edit');
    Route::post('/update_client', [ClientController::class, 'client_update'])->name('client_update');
    Route::any('/destroy_client/{id?}', [ClientController::class, 'client_destroy'])->name('client_destroy');
    // setting
    Route::get('/setting-listing', [Settingcontroller::class, 'setting_index'])->name('setting_index');
    Route::post('/update_setting', [Settingcontroller::class, 'setting_update'])->name('setting_update');


    // blog
    Route::get('/blog-listing', [blogController::class, 'blogs_index'])->name('blogs_index');
    Route::post('/store-blog/{id?}', [blogController::class, 'blogs_store'])->name('blogs_store');
    Route::get('/show-blog/{id?}', [blogController::class, 'blogs_show'])->name('blogs_show');
    Route::get('/edit-blog/{id?}', [blogController::class, 'blogs_edit'])->name('blogs_edit');
    Route::post('/update_blog', [blogController::class, 'blogs_update'])->name('blogs_update');
    Route::any('/destroy_blog/{id?}', [blogController::class, 'blogs_destroy'])->name('blogs_destroy');

    // package
    Route::get('/package-listing', [PackageController::class, 'package_index'])->name('package_index');
    Route::post('/store-package/{id?}', [PackageController::class, 'package_store'])->name('package_store');
    Route::get('/show-package/{id?}', [PackageController::class, 'package_show'])->name('package_show');
    Route::get('/edit-package/{id?}', [PackageController::class, 'package_edit'])->name('package_edit');
    Route::post('/update_package', [PackageController::class, 'package_update'])->name('package_update');
    Route::any('/destroy_package/{id?}', [PackageController::class, 'package_destroy'])->name('package_destroy');

    Route::get('/steps', [HomeController::class, 'steps'])->name('steps');
    Route::get('/switch-project/{id}', [HomeController::class, 'switch_project'])->name('switch_project');
    Route::get('/profile', [HomeController::class, 'user_profile'])->name('user_profile');
    Route::get('/user-profile', [HomeController::class , 'user_profile'])->name('user_profile');
    Route::post('/user-info-update', [HomeController::class, 'user_infoupdate'])->name('user_infoupdate');
    Route::get('/user-office-details', [HomeController::class , 'user_office_details'])->name('user_office_details');
    Route::post('/user-office-info-update', [HomeController::class, 'user_office_infoupdate'])->name('user_office_infoupdate');
    Route::post('/user-file-info-update', [HomeController::class, 'user_file_infoupdate'])->name('user_file_infoupdate');
    Route::get('/user-file-details', [HomeController::class , 'user_file_details'])->name('user_file_details');
    Route::post('/user-photo-update', [HomeController::class, 'upload_image'])->name('upload_image');
    Route::post('/profile-submit', [HomeController::class, 'profile_submit'])->name('profile_submit');
    Route::get('/user-rights', [HomeController::class , 'user_rights'])->name('user_rights');
    // Reports Routes
    Route::post('/user-updates', [HomeController::class , 'user_updates'])->name('user_updates');
    Route::post('/shift-change', [HomeController::class , 'shift_change'])->name('shift_change');



    Route::get('/registered-user-report', [ReportController::class , 'registered_user_report'])->name('registered_user_report');
    Route::get('/all-user-report/{slug?}', [ReportController::class , 'all_registered_user_report'])->name('all_registered_user_report');


    Route::get('/attendance-sheet-import', [ReportController::class , 'attendance_sheet_import'])->name('attendance_sheet_import');
    Route::post('attendance-import-submit', [ReportController::class, 'attendance_import_submit'])->name('attendance_import_submit');

    Route::get('/all-leave-application-report', [ReportController::class , 'all_leave_application_report'])->name('all_leave_application_report');

    Route::get('/birthday-list', [ReportController::class , 'birthday_list'])->name('birthday_list');

    // Reports Routes End


    Route::get('/attributes', [GenericController::class , 'roles'])->name('roles');
    Route::get('/attribute/{slug}', [GenericController::class , 'listing'])->name('listing');
    Route::get('/report/{slug}', [GenericController::class , 'report_user'])->name('report_user');
    Route::post('/custom-report', [GenericController::class , 'custom_report'])->name('custom_report');
    Route::get('/custom-report/{slug}/{slug2}', [GenericController::class , 'custom_report_user'])->name('custom_report_user');
    Route::post('/generic-submit', [GenericController::class , 'generic_submit'])->name('generic_submit');
    Route::post('/assign-role-submit', [GenericController::class , 'roleassign_submit'])->name('roleassign_submit');
    Route::post('/role-assign-modal', [GenericController::class , 'role_assign_modal'])->name('role_assign_modal');

    // Payroll Routes
    Route::get('/payroller', [PayrollController::class , 'payroller'])->name('payroller');
    Route::post('/payroll-month-report', [PayrollController::class , 'payroll_month_report'])->name('payroll_month_report');

    Route::get('/payslips', [PayrollController::class , 'payslips'])->name('payslips');
    Route::get('/view-payslip/{id}', [PayrollController::class , 'view_payslip'])->name('view_payslip');
    Route::post('/payslip-generate', [PayrollController::class , 'payslip_generate'])->name('payslip_generate');
    // Payroll Routes End

    // Chat Room
    Route::get('chat', [ChatController::class , 'chat'])->name('chat');
    Route::post('save-msg', [ChatController::class , 'save_msg'])->name('save_msg');
    Route::post('fetch-messages', [ChatController::class , 'fetch_msg'])->name('fetch_msg');

    // Leave Application Form
    Route::get('all-leave-application', [LeaveApplicationController::class , 'all_leave_application'])->name('all_leave_application');
    Route::get('leave-applicaton/show', [LeaveApplicationController::class , 'leave_show'])->name('leave_show');
    Route::get('leave-applicaton/team-show', [LeaveApplicationController::class , 'leave_teamshow'])->name('leave_teamshow');
    Route::post('leave-applicaton-submit', [LeaveApplicationController::class , 'leave_submit'])->name('leave_submit');
    Route::get('leave-applicaton-delete/{id}', [LeaveApplicationController::class , 'application_delete'])->name('application_delete');
    Route::post('update-team-leave-applicaton', [LeaveApplicationController::class , 'update_leave_form'])->name('update_leave_form');
    Route::post('leave-form-validate', [LeaveApplicationController::class , 'leave_form_validate'])->name('leave_form_validate');


    // Candidate Form
    Route::get('candidate-application', [CandidateController::class , 'candidate_form'])->name('candidate_form');


});





