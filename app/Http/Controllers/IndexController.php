<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\banner;
use App\Models\inner_banner;
use App\Models\User;
use App\Models\attributes;
use App\Models\inquiry;
use App\Models\inquiryProject;
use App\Models\package;
use App\Models\cms;
use App\Models\testimonials;
use App\Models\showClientsPackages;
use App\Models\budget_range;
use App\Models\order_placed;
use App\Models\technology;
use App\Models\setting;
use Illuminate\Support\Str;
use Session;
use Helper;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = banner::find(1);

        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $technologies = technology::get();
        $setting = setting::find(1);
        $showClientsPackages = showClientsPackages::get();

        $content_1 = cms::find(1);
        $content_2 = cms::find(2);
        $content_3 = cms::find(3);
        $content_4 = cms::find(4);
        $content_5 = cms::find(5);
        $content_6 = cms::find(6);
        $content_7 = cms::find(7);
        $content_8 = cms::find(8);
        $content_9 = cms::find(9);

        return view("web.index")
            ->with("title", "Home")
            ->with(compact("showClientsPackages", "setting", "setPackage", "setbudgetRange", "banner", "technologies", "content_1", "content_2", "content_3", "content_4", "content_5", "content_6", "content_7", "content_8", "content_9"));
    }
    public function webDesign()
    {


        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(1);
        $setting = setting::find(1);
        $showClientsPackages = showClientsPackages::get();

        $content_20 = cms::find(20);
        $content_21 = cms::find(21);
        $content_22 = cms::find(22);
        $content_23 = cms::find(23);
        $content_24 = cms::find(24);
        $content_25 = cms::find(25);
        $content_26 = cms::find(26);
        $content_27 = cms::find(27);


        return view('web.webDesign')
            ->with('title', "Web Design")
            ->with(compact('showClientsPackages', 'setting', 'setPackage', 'setbudgetRange', 'inner_banner' , 'content_20', 'content_21', 'content_22' , 'content_23' , 'content_24' , 'content_25' , 'content_26', 'content_27' ));
    }

    public function webAppDev()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(2);
        $setting = setting::find(1);
        $showClientsPackages = showClientsPackages::get();

        $content_28 = cms::find(28);
        $content_29 = cms::find(29);
        $content_30 = cms::find(30);
        $content_31 = cms::find(31);
        $content_32 = cms::find(32);
        $content_33 = cms::find(33);
        $content_34 = cms::find(34);
        $content_156 = cms::find(156);


        return view('web.webAppDev')
            ->with('title', "Web Application Development")
            ->with(compact('showClientsPackages', 'setting', 'setPackage', 'setbudgetRange', 'inner_banner', 'content_28', 'content_29', 'content_30', 'content_31', 'content_32', 'content_33', 'content_34', 'content_156'));
    }

    public function videoAnimation()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(3);
        $setting = setting::find(1);
        $showClientsPackages = showClientsPackages::get();

        $content_35 = cms::find(35);
        $content_36 = cms::find(36);
        $content_37 = cms::find(37);
        $content_38 = cms::find(38);
        $content_39 = cms::find(39);
        $content_40 = cms::find(40);
        $content_41 = cms::find(41);
        $content_42 = cms::find(42);
        $content_43 = cms::find(43);
        $content_44 = cms::find(44);
        $content_157 = cms::find(157);

        return view('web.videoAnimation')
            ->with('title', "Video Animation")
            ->with(compact('showClientsPackages', 'setting', 'setPackage', 'setbudgetRange', 'inner_banner', 'content_35', 'content_36' ,'content_37', 'content_38', 'content_39', 'content_40' , 'content_41' , 'content_42' , 'content_43' , 'content_44', 'content_157'));
    }

    public function logAnimation()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(4);
        $setting = setting::find(1);
        $showClientsPackages = showClientsPackages::get();

        $content_45 = cms::find(45);
        $content_46 = cms::find(46);
        $content_47 = cms::find(47);
        $content_158 = cms::find(158);
        $content_159 = cms::find(159);
        $content_160 = cms::find(160);
        $content_161 = cms::find(161);
        $content_162 = cms::find(162);
        $content_163 = cms::find(163);
        $content_164 = cms::find(164);

        return view('web.logAnimation')
            ->with('title', "Log Animation")
            ->with(compact('showClientsPackages', 'setting', 'setPackage', 'setbudgetRange',
            'inner_banner', 'content_45' , 'content_46' ,'content_47', 'content_158', 'content_159','content_160', 'content_161' , 'content_162' ,'content_163', 'content_164'));
    }

    public function seoServices()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(5);
        $setting = setting::find(1);

        $content_48 = cms::find(48);
        $content_49 = cms::find(49);
        $content_50 = cms::find(50);
        $content_51 = cms::find(51);
        $content_52 = cms::find(52);
        $content_53 = cms::find(53);
        $content_54 = cms::find(54);
        $content_55 = cms::find(55);
        $content_56 = cms::find(56);
        $content_57 = cms::find(57);
        $content_58 = cms::find(58);
        $content_59 = cms::find(59);
        $content_60 = cms::find(60);
        $content_61 = cms::find(61);
        $content_62 = cms::find(62);
        $content_63 = cms::find(63);
        $content_64 = cms::find(64);
        $content_65 = cms::find(65);
        $content_66 = cms::find(66);
        $content_67 = cms::find(67);
        $content_68 = cms::find(68);
        $content_69 = cms::find(69);
        $content_70 = cms::find(70);
        $content_71 = cms::find(71);
        $content_72 = cms::find(72);
        $content_73 = cms::find(73);
        $content_74 = cms::find(74);

        return view('web.seoServices')
            ->with('title', "SEO Services")
            ->with(compact('setting', 'setPackage', 'setbudgetRange', 'inner_banner', 'content_48' ,'content_49' ,'content_50' ,'content_51' ,'content_52' ,'content_53' ,'content_54', 'content_55',
             'content_56', 'content_57' , 'content_58', 'content_59' ,'content_60' , 'content_61', 'content_62', 'content_63' ,'content_64' ,'content_65' ,
             'content_66', 'content_67' , 'content_68' ,'content_69' ,'content_70' ,'content_71' ,'content_72', 'content_73' ,'content_74'));
    }

    public function smmServices()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(6);
        $setting = setting::find(1);

        $content_87 = cms::find(87);
        $content_88 = cms::find(88);
        $content_89 = cms::find(89);
        $content_90 = cms::find(90);
        $content_91 = cms::find(91);
        $content_92 = cms::find(92);
        $content_93 = cms::find(93);
        $content_94 = cms::find(94);
        $content_95 = cms::find(95);
        $content_96 = cms::find(96);
        $content_97 = cms::find(97);
        $content_98 = cms::find(98);
        $content_99 = cms::find(99);
        $content_100 = cms::find(100);
        $content_101 = cms::find(101);

        return view('web.smmServices')
            ->with('title', "SMM Services")
            ->with(compact('setting', 'setPackage', 'setbudgetRange', 'inner_banner','content_87','content_88', 'content_89' ,'content_90','content_91',
            'content_92' , 'content_93' , 'content_94' , 'content_95', 'content_96', 'content_97', 'content_98', 'content_99' ,
            'content_100' , 'content_101' ));
    }

    public function ormServices()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(7);
        $setting = setting::find(1);

        $content_102 = cms::find(102);
        $content_103 = cms::find(103);
        $content_104 = cms::find(104);
        $content_105 = cms::find(105);
        $content_106 = cms::find(106);
        $content_107 = cms::find(107);
        $content_108 = cms::find(108);
        $content_109 = cms::find(109);
        $content_110 = cms::find(110);

        return view('web.ormServices')
            ->with('title', "ORM Services")
            ->with(compact('setting', 'setPackage', 'setbudgetRange', 'inner_banner', 'content_102', 'content_103', 'content_104', 'content_105',
        'content_106' , 'content_107' , 'content_108' , 'content_109' ,'content_110' ));
    }

    public function packages()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(8);
        $setting = setting::find(1);

        $content_75 = cms::find(75);
        $content_76 = cms::find(76);

        return view('web.packages')
            ->with('title', "Packages")
            ->with(compact('setting', 'setPackage', 'setbudgetRange', 'inner_banner' , 'content_75' ,'content_76'));
    }

    public function portfolio()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(9);
        $content_77 = cms::find(77);
        $content_78 = cms::find(78);
        $showClientsPackages = showClientsPackages::get();

        return view('web.portfolio')
            ->with('title', "portfolio")
            ->with(compact('showClientsPackages', 'setPackage', 'setbudgetRange', 'inner_banner', 'content_77' ,'content_78'));
    }

    public function termsCondition()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_165 = cms::find(165);

        return view('web.termsCondition')
            ->with('title', "Terms & Conditions")
            ->with(compact('setPackage', 'setbudgetRange', 'content_165'));
    }

    public function privacyPolicy()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_166 = cms::find(166);

        return view('web.privacyPolicy')
            ->with('title', "Privacy Policy")
            ->with(compact('setPackage', 'setbudgetRange', 'content_166'));
    }

    public function returnPolicy()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $setting = setting::find(1);
        $content_167 = cms::find(167);

        return view('web.returnPolicy')
            ->with('title', "Return Policy")
            ->with(compact('setting', 'setPackage', 'setbudgetRange', 'content_167'));
    }

    public function ecommerceDevelopment()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(10);
        $setting = setting::find(1);

        return view('web.ecommerceDevelopment')
            ->with('title', "Ecommerce Development")
            ->with(compact('setting', 'setPackage', 'setbudgetRange', 'inner_banner'));
    }

    public function comboPackage()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(11);
        return view('web.comboPackage')
            ->with('title', "Combo Package")
            ->with(compact('setPackage', 'setbudgetRange', 'inner_banner'));
    }

    public function review()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(12);

        return view('web.review')
            ->with('title', "Review")
            ->with(compact('setPackage', 'setbudgetRange', 'inner_banner'));
    }

    public function contact()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $inner_banner = inner_banner::find(13);

        return view('web.contact')
            ->with('title', "Contact")
            ->with(compact('setPackage', 'setbudgetRange', 'inner_banner'));
    }

    public function inquiry_submit(Request $request)
    {
        unset($_POST['_token']);
        $inquiry = inquiry::create($_POST);
        return redirect()
            ->back()
            ->with('message', 'Inquiry submitted.');
    }

    public function inquiry_project_submit(Request $request)
    {
        unset($_POST['_token']);
        $inquiryProject = inquiryProject::create($_POST);
        return redirect()
            ->back()
            ->with('message', 'Project inquiry submitted.');
    }

    public function order_placed_submit(Request $request)
    {
        unset($_POST['_token']);

        $order_placed = order_placed::create($_POST);

        return redirect()
            ->back()
            ->with('message', 'Order placed submitted.');
    }

    // View Detail

    public function _3DDesign()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_111 = cms::find(111);

        return view('web.view-details.3dDesign')
            ->with('title', "3D Design")
            ->with(compact('setPackage', 'setbudgetRange', 'content_111'));
    }

    public function advancedEcommerceDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_112 = cms::find(112);

        return view('web.view-details.advancedEcommerceDetails')
            ->with('title', "Advanced Ecommerce Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_112'));
    }

    public function basicCombo()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_113 = cms::find(113);

        return view('web.view-details.basicCombo')
            ->with('title', "Basic Combo")
            ->with(compact('setPackage', 'setbudgetRange', 'content_113'));
    }

    public function basicWebsite()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_79 = cms::find(79);

        return view('web.view-details.basicWebsite')
            ->with('title', "Basic Website")
            ->with(compact('setPackage', 'setbudgetRange', 'content_79'));
    }

    public function businessWebsitePackageDetail()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_84 = cms::find(84);

        return view('web.view-details.businessWebsitePackageDetail')
            ->with('title', "Business Website Package Detail")
            ->with(compact('setPackage', 'setbudgetRange','content_84'));
    }

    public function classicVideoDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_114 = cms::find(114);

        return view('web.view-details.classicVideoDetails')
            ->with('title', "Classic Video Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_114'));
    }

    public function collateralClassicDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_115 = cms::find(115);

        return view('web.view-details.collateralClassicDetails')
            ->with('title', "Collateral Classic Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_115'));
    }

    public function completeBrandingDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_116 = cms::find(116);

        return view('web.view-details.completeBrandingDetails')
            ->with('title', "Complete Branding Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_116'));
    }

    public function corporateComboDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_83 = cms::find(83);

        return view('web.view-details.corporateComboDetails')
            ->with('title', "Corporate Combo Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_83'));
    }

    public function corporateWebsitePackageDetail()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_86 = cms::find(86);

        return view('web.view-details.corporateWebsitePackageDetail')
            ->with('title', "Corporate Website Package Detail")
            ->with(compact('setPackage', 'setbudgetRange', 'content_86'));
    }

    public function customCrmErpPortalDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_117 = cms::find(117);

        return view('web.view-details.customCrmErpPortalDetails')
            ->with('title', "Custom Crm Erp Portal Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_117'));
    }

    public function customEcommerceMarketplaceDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_118 = cms::find(118);

        return view('web.view-details.customEcommerceMarketplaceDetails')
            ->with('title', "Custom Ecommerce Marketplace Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_118'));
    }

    public function customizedWebPortalDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_119 = cms::find(119);

        return view('web.view-details.customizedWebPortalDetails')
            ->with('title', "customized Web Portal Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_119'));
    }

    public function deluxVideoDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_120 = cms::find(120);

        return view('web.view-details.deluxVideoDetails')
            ->with('title', "Delux Video Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_120'));
    }

    public function eCommercePackage()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_121 = cms::find(121);

        return view('web.view-details.eCommercePackage')
            ->with('title', "Ecommerce Package")
            ->with(compact('setPackage', 'setbudgetRange', 'content_121'));
    }

    public function eliteCombo()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_122 = cms::find(122);

        return view('web.view-details.eliteCombo')
            ->with('title', "Elite Combo")
            ->with(compact('setPackage', 'setbudgetRange','content_122'));
    }

    public function eliteEcommerceDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_85 = cms::find(85);

        return view('web.view-details.eliteEcommerceDetails')
            ->with('title', "Elite Ecommerce Details")
            ->with(compact('setPackage', 'setbudgetRange','content_85'));
    }

    public function eliteSeoDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_123 = cms::find(123);

        return view('web.view-details.eliteSeoDetails')
            ->with('title', "Elite Seo Details")
            ->with(compact('setPackage', 'setbudgetRange','content_123'));
    }

    public function eliteWebsitePackageDetail()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_82 = cms::find(82);

        return view('web.view-details.eliteWebsitePackageDetail')
            ->with('title', "Elite Website Package Detail")
            ->with(compact('setPackage', 'setbudgetRange','content_82'));
    }

    public function erpPortalWebsitePackage()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_124 = cms::find(124);

        return view('web.view-details.erpPortalWebsitePackage')
            ->with('title', "Erp Portal Website Package")
            ->with(compact('setPackage', 'setbudgetRange', 'content_124'));
    }

    public function identitySeoDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_125 = cms::find(125);

        return view('web.view-details.identitySeoDetails')
            ->with('title', "Identity Seo Details")
            ->with(compact('setPackage', 'setbudgetRange','content_125'));
    }

    public function illustration()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_126 = cms::find(126);

        return view('web.view-details.illustration')
            ->with('title', "Illustration")
            ->with(compact('setPackage', 'setbudgetRange', 'content_126'));
    }

    public function logoAnimationBasic()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_127 = cms::find(127);

        return view('web.view-details.logoAnimationBasic')
            ->with('title', "logo Animation Basic")
            ->with(compact('setPackage', 'setbudgetRange', 'content_127'));
    }

    public function logoAnimationProfessional()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_128 = cms::find(128);

        return view('web.view-details.logoAnimationProfessional')
            ->with('title', "logo Animation Professional")
            ->with(compact('setPackage', 'setbudgetRange', 'content_128'));
    }

    public function logoAnimationStartup()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_129 = cms::find(129);

        return view('web.view-details.logoAnimationStartup')
            ->with('title', "logo Animation Startup")
            ->with(compact('setPackage', 'setbudgetRange', 'content_129'));
    }

    public function logoBasic()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_130 = cms::find(130);

        return view('web.view-details.logoBasic')
            ->with('title', "logo Basic")
            ->with(compact('setPackage', 'setbudgetRange', 'content_130'));
    }

    public function logoInfinity()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_131 = cms::find(131);

        return view('web.view-details.logoInfinity')
            ->with('title', "logo Infinity")
            ->with(compact('setPackage', 'setbudgetRange','content_131'));
    }

    public function logoPlus()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_132 = cms::find(132);

        return view('web.view-details.logoPlus')
            ->with('title', "logo Plus")
            ->with(compact('setPackage', 'setbudgetRange', 'content_132'));
    }

    public function mascot()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_133 = cms::find(133);

        return view('web.view-details.mascot')
            ->with('title', "Mascot")
            ->with(compact('setPackage', 'setbudgetRange', 'content_133'));
    }

    public function ormBasic()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_134 = cms::find(134);

        return view('web.view-details.ormBasic')
            ->with('title', "Orm Basic")
            ->with(compact('setPackage', 'setbudgetRange', 'content_134'));
    }

    public function ormBusiness()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_135 = cms::find(135);

        return view('web.view-details.ormBusiness')
            ->with('title', "Orm Business")
            ->with(compact('setPackage', 'setbudgetRange', 'content_135'));
    }

    public function ormPremium()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_136 = cms::find(136);

        return view('web.view-details.ormPremium')
            ->with('title', "Orm Premium")
            ->with(compact('setPackage', 'setbudgetRange', 'content_136'));
    }

    public function ormStandard()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_137 = cms::find(137);

        return view('web.view-details.ormStandard')
            ->with('title', "Orm Standard")
            ->with(compact('setPackage', 'setbudgetRange', 'content_137'));
    }

    public function ormValue()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_138 = cms::find(138);

        return view('web.view-details.ormValue')
            ->with('title', "Orm Value")
            ->with(compact('setPackage', 'setbudgetRange', 'content_138'));
    }

    public function portalPackage()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_139 = cms::find(139);

        return view('web.view-details.portalPackage')
            ->with('title', "Portal Package")
            ->with(compact('setPackage', 'setbudgetRange', 'content_139'));
    }

    public function premiumCollateralDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_140 = cms::find(140);

        return view('web.view-details.premiumCollateralDetails')
            ->with('title', "Premium Collateral Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_140'));
    }

    public function premiumVideoDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_141 = cms::find(141);

        return view('web.view-details.premiumVideoDetails')
            ->with('title', "Premium Video Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_141'));
    }

    public function professionalCombo()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_142 = cms::find(142);

        return view('web.view-details.professionalCombo')
            ->with('title', "Professional Combo")
            ->with(compact('setPackage', 'setbudgetRange', 'content_142'));
    }

    public function professionalEcommerceDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_143 = cms::find(143);

        return view('web.view-details.professionalEcommerceDetails')
            ->with('title', "Professional Ecommerce Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_143'));
    }

    public function professionalSeoDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_144 = cms::find(144);

        return view('web.view-details.professionalSeoDetails')
            ->with('title', "Professional Seo Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_144'));
    }

    public function professionalWebsite()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_81 = cms::find(81);

        return view('web.view-details.professionalWebsite')
            ->with('title', "Professional Website")
            ->with(compact('setPackage', 'setbudgetRange', 'content_81'));
    }

    public function seoStartupDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_145 = cms::find(145);

        return view('web.view-details.seoStartupDetails')
            ->with('title', "SEO Startup Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_145'));
    }

    public function smmBasic3MonthsPlan()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_146 = cms::find(146);


        return view('web.view-details.smmBasic3MonthsPlan')
            ->with('title', "SMM Basic 3 Months Plan")
            ->with(compact('setPackage', 'setbudgetRange', 'content_146'));
    }

    public function smmPlus6MonthsPlan1()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_147 = cms::find(147);

        return view('web.view-details.smmPlus6MonthsPlan1')
            ->with('title', "SMM Plus 6 Months Plan")
            ->with(compact('setPackage', 'setbudgetRange', 'content_147'));
    }

    public function smmPlus6MonthsPlan2()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_148 = cms::find(148);


        return view('web.view-details.smmPlus6MonthsPlan2')
            ->with('title', "SMM Plus 6 Months Plan")
            ->with(compact('setPackage', 'setbudgetRange', 'content_148'));
    }

    public function smmStartupOneTime()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_149 = cms::find(149);

        return view('web.view-details.smmStartupOneTime')
            ->with('title', "SMM Startup One Time")
            ->with(compact('setPackage', 'setbudgetRange', 'content_149'));
    }

    public function startupCollateralDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_150 = cms::find(150);

        return view('web.view-details.startupCollateralDetails')
            ->with('title', "Startup Collateral Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_150'));
    }

    public function startupCombo()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_151 = cms::find(151);

        return view('web.view-details.startupCombo')
            ->with('title', "Startup Combo")
            ->with(compact('setPackage', 'setbudgetRange', 'content_151'));
    }

    public function startupEcommerceDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_152 = cms::find(152);

        return view('web.view-details.startupEcommerceDetails')
            ->with('title', "Startup Ecommerce Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_152'));
    }

    public function startupVideoDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_153 = cms::find(153);

        return view('web.view-details.startupVideoDetails')
            ->with('title', "Startup Video Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_153'));
    }

    public function startupWebsite()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_80 = cms::find(80);

        return view('web.view-details.startupWebsite')
            ->with('title', "Startup Website")
            ->with(compact('setPackage', 'setbudgetRange', 'content_80'));
    }

    public function teaserIntroVideoDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_154 = cms::find(154);

        return view('web.view-details.teaserIntroVideoDetails')
            ->with('title', "Teaser Intro Video Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_154'));
    }

    public function unlimitedCollateralDetails()
    {
        $setPackage = package::get();
        $setbudgetRange = budget_range::get();
        $content_155 = cms::find(155);

        return view('web.view-details.unlimitedCollateralDetails')
            ->with('title', "Unlimited Collateral Details")
            ->with(compact('setPackage', 'setbudgetRange', 'content_155'));
    }

    public function steps()
    {
        if (Auth::user()->role_id == 1) {
            $projects = attributes::where('attribute', 'project')
                ->where('is_active', 1)
                ->get();
            return view('steps')->with(compact('projects'));
        } else {
            return redirect()
                ->back()
                ->with('error', 'No Page Found');
        }
    }

    public function switch_project($project_id)
    {
        if (Auth::user()->role_id == 1) {
            $project = attributes::where('id', $project_id)
                ->where('is_active', 1)
                ->first();
            $data['project_id'] = $project_id;
            Session::put("project_id", $project_id);
            Helper::activity_log("login", $data);
            return redirect()
                ->route('user_profile')
                ->with('message', "Welcome to " . $project->name);
        } else {
            return redirect()
                ->back()
                ->with('error', 'No Page Found');
        }
    }
    public function user_profile()
    {
        $user = Auth::user();
        return view('user-profile')
            ->with('title', "Home Page")
            ->with(compact('user'));
    }
    public function user_rights()
    {
        $user = Auth::user();
        //dd(Session::get("project_id" ));
        $roles = attributes::where("is_active", 1)
            ->where('is_deleted', 0)
            ->get();
        return view('user-rights')
            ->with('title', "User Rights")
            ->with(compact('user', 'roles'));
    }
    public function user_infoupdate(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->personal_email = $request->personal_email;
        $user->phonenumber = $request->phonenumber;
        $user->emergency_number = $request->emergency_number;
        $user->cnic = $request->cnic;
        $user->residential_address = $request->residential_address;
        $user->blood_group = $request->blood_group;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->marital_status = $request->marital_status;
        $user->save();
        return redirect()
            ->back()
            ->with('message', 'Information updated successfully');
    }

    public function user_updates(Request $request)
    {
        $user = User::find($_POST['user_id']);
        if (!is_null($request->emp_id) && $request->emp_id != "") {
            $user->emp_id = $request->emp_id;
        }
        if (!is_null($request->role_id) && $request->role_id != "") {
            $user->role_id = $request->role_id;
        }
        if (!is_null($request->department_id) && $request->department_id != "") {
            $user->department = $request->department_id;
        }
        if (!is_null($request->designations) && $request->designations != "") {
            $user->designation = $request->designations;
        }
        if (!is_null($request->reporting_line_id) && $request->reporting_line_id != "") {
            $user->reporting_line = $request->reporting_line_id;
        }
        if (!is_null($request->salary) && $request->salary != "") {
            $user->salary = $request->salary;
        }
        if (!is_null($request->status) && $request->status != "") {
            $user->is_active = $request->status;
        }
        if (!is_null($request->shift_in) && $request->shift_in != "") {
            $user->shift_in = $request->shift_in;
        }
        if (!is_null($request->shift_out) && $request->shift_out != "") {
            $user->shift_out = $request->shift_out;
        }

        $user->save();
        return redirect()
            ->back()
            ->with('message', 'Information updated successfully');
    }

    public function shift_change()
    {
    }

    // office details start
    public function user_office_details()
    {
        $user = Auth::user();
        return view('user-office-details')
            ->with('title', "Office Details")
            ->with(compact('user'));
    }
    public function user_office_infoupdate(Request $request)
    {
        $user = User::find(Auth::user()->id);

        // $user->emp_id = $request->emp_id;
        // $user->email = $request->email;
        // $user->designation = $request->designation;
        // $user->department = $request->department;
        // $user->join_date = $request->join_date;
        // $user->reporting_line = $request->reporting_line;
        $user->bank_account_number = $request->bank_account_number;
        $user->v_model_name = $request->v_model_name;
        $user->v_model_year = $request->v_model_year;
        $user->v_number_plate = $request->v_number_plate;

        $user->save();
        // Session::flash('message', 'This is a message!');
        Session::flash('alert-class', 'alert-danger');
        return redirect()
            ->back()
            ->with('message', 'Information updated successfully');
    }
    // office details end

    // file details start
    public function user_file_details()
    {
        $user = Auth::user();
        return view('user-file-details')
            ->with('title', "file Details")
            ->with(compact('user'));
    }
    public function user_file_infoupdate(Request $request)
    {
        // $user = User::find(Auth::user()->id);

        // $user->emp_id = $request->emp_id;
        // $user->email = $request->email;
        // $user->designation = $request->designation;
        // $user->department = $request->department;
        // $user->join_date = $request->join_date;
        // $user->reporting_line = $request->reporting_line;
        // $user->bank_account_number = $request->bank_account_number;
        // $user->v_model_name = $request->v_model_name;
        // $user->v_model_year = $request->v_model_year;
        // $user->v_number_plate = $request->v_number_plate;

        // $user->save();
        // Session::flash('message', 'This is a message!');
        // Session::flash('alert-class', 'alert-danger');
        // return redirect()->back()->with('success', 'Information updated successfully');
    }
    // file details end

    public function upload_image(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $path = "";
        if ($request->file('pic_attach') != '') {
            $path = $request->file('pic_attach')->store('uploads/avatar/' . md5(Str::random(20)), 'public');
        }
        $user->profile_pic = $path;
        $user->save();
        return redirect()
            ->back()
            ->with('success', 'Image has been successfully updated');
    }
    public function profile_submit(Request $request)
    {
        $user = User::find(Auth::user()->id);
        // Avatar Upload
        if ($request->has('avatar')) {
            if ($request->file('avatar') != '') {
                $request->validate([
                    'avatar' => ['required', 'mimes:jpeg,png,jpg', 'max:2000'],
                ]);
                $path_a = $request->file('avatar')->store('uploads/avatar/' . md5(Str::random(20)), 'public');
                $user->profile_pic = $path_a;
                $user->save();
                return redirect()
                    ->back()
                    ->with('message', 'Profile Picture been updated successfully');
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'File not found, please update your Profile Picture');
            }
        }
        // Resume Upload
        if ($request->has('cnic_file')) {
            if ($request->file('cnic_file') != '') {
                $request->validate([
                    'cnic_file' => ['required', 'mimes:jpeg,png,jpg', 'max:2000'],
                ]);
                $path_c = $request->file('cnic_file')->store('uploads/cnic/' . md5(Str::random(20)), 'public');
                $user->cnic_doc = $path_c;
                $user->save();
                return redirect()
                    ->back()
                    ->with('message', 'NIC Picture has been updated successfully');
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'File not found, please update your NIC Picture');
            }
        }
        // // CNIC Upload
        if ($request->has('cv_file')) {
            if ($request->file('cv_file') != '') {
                $request->validate([
                    'cv_file' => ['required', 'mimes:doc,docs,pdf', 'max:5000'],
                ]);
                $path_r = $request->file('cv_file')->store('uploads/resume/' . md5(Str::random(20)), 'public');
                $user->resume_doc = $path_r;
                $user->save();
                return redirect()
                    ->back()
                    ->with('message', 'Resume/CV Document has been updated successfully');
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'File not found, please update your Resume/CV Document');
            }
        }
        // // Education Upload
        if ($request->has('education_file')) {
            if ($request->file('education_file') != '') {
                $request->validate([
                    'education_file' => ['required', 'mimes:doc,docs,pdf', 'max:5000'],
                ]);
                $path_e = $request->file('education_file')->store('uploads/education/' . md5(Str::random(20)), 'public');
                $user->education_doc = $path_e;
                $user->save();
                return redirect()
                    ->back()
                    ->with('message', 'Education Document has been updated successfully');
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'File not found, please update your Education Document');
            }
        }
    }
}
