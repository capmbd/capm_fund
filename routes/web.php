<?php

/*
|-----------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', 'FrontEndController@login_mgmt');
Route::post('/employee_reset', 'PageController@reset_pass');

Route::get('/emp_forg/{email}', 'FrontEndController@forgot');
Route::get('/emp_pass_res/{code}/{email}/{pass}', 'FrontEndController@getReset');

Route::get('/home', 'PageController@dashboard');
Route::get('/control-panel', 'PageController@ctrlpnl');
Route::get('/instruments-investment', 'PageController@investment');
Route::get('/corporate-action', 'PageController@corporate');
Route::get('/employee-setup', 'EmployeeSetupController@emp_add');

Route::post('/user/photo/cng', 'PageController@phcn');

/* Parameters Setup */
Route::Group([
	'prefix' => '/parameters-setup'
],	function(){
	Route::get('/', 'PortfolioParameterSetupController@parameters');
	Route::get('/portfolio-type', 'PortfolioParameterSetupController@pro_type');
	Route::post('/portfolio-type/save', 'PortfolioParameterSetupController@pro_type_store');
	Route::get('/portfolio-type/edit/{PORTFOLIO_TYPE_ID}', 'PortfolioParameterSetupController@pro_type_edit');
	Route::post('/portfolio-type/update', 'PortfolioParameterSetupController@pro_type_update');

	Route::get('/sponsor-add', 'PortfolioParameterSetupController@sponsor');
	Route::post('/sponsor/save', 'PortfolioParameterSetupController@sponsor_store');
	Route::get('/sponsor/edit/{SPON_ID}', 'PortfolioParameterSetupController@sponsor_edit');
	Route::post('/sponsor/update', 'PortfolioParameterSetupController@sponsor_update');

	Route::get('/assetmanager', 'PortfolioParameterSetupController@asset_mgr');
	Route::post('assetmanager/save', 'PortfolioParameterSetupController@asset_mgr_store');
	Route::get('assetmanager/edit/{MANAGER_ID}', 'PortfolioParameterSetupController@asset_mgr_edit');
	Route::post('assetmanager/update', 'PortfolioParameterSetupController@asset_mgr_update');

	Route::get('/trustee', 'PortfolioParameterSetupController@trustee_add');
	Route::post('/trustee/save', 'PortfolioParameterSetupController@trustee_store');
	Route::get('/trustee/edit/{TRUSTEE_ID}', 'PortfolioParameterSetupController@trustee_edit');
	Route::post('/trustee/update', 'PortfolioParameterSetupController@trustee_update');

	Route::get('/auditor', 'PortfolioParameterSetupController@auditor_add');
	Route::post('/auditor/save', 'PortfolioParameterSetupController@auditor_store');
	Route::get('/auditor/edit/{AUDITOR_ID}', 'PortfolioParameterSetupController@auditor_edit');
	Route::post('/auditor/update', 'PortfolioParameterSetupController@auditor_update');

	Route::get('/custodian', 'PortfolioParameterSetupController@custodian_add');
	Route::post('/custodian/save', 'PortfolioParameterSetupController@custodian_store');
	Route::get('/custodian/edit/{CUSTODIAN_ID}', 'PortfolioParameterSetupController@custodian_edit');
	Route::post('/custodian/update', 'PortfolioParameterSetupController@custodian_update');

	Route::get('/bank', 'PortfolioParameterSetupController@bank_add');
	Route::post('/bank/save', 'PortfolioParameterSetupController@bank_store');
	Route::get('/bank/edit/{BANK_ID}', 'PortfolioParameterSetupController@bank_edit');
	Route::post('/bank/update', 'PortfolioParameterSetupController@bank_update');

	Route::get('/bank-account', 'PortfolioParameterSetupController@bank_account_add');
	Route::post('/bank-account/save', 'PortfolioParameterSetupController@bank_account_store');
	Route::get('/bank-account/edit/{BANK_ACCOUNT_ID}', 'PortfolioParameterSetupController@bank_account_edit');
	Route::post('/bank-account/update', 'PortfolioParameterSetupController@bank_account_update');

	Route::get('/district', 'PortfolioParameterSetupController@district_add');
	Route::post('/district/save', 'PortfolioParameterSetupController@district_store');
	Route::get('/district/edit/{DISTRICT_ID}', 'PortfolioParameterSetupController@district_edit');
	Route::post('/district/update', 'PortfolioParameterSetupController@district_update');

	Route::get('/agentarea', 'PortfolioParameterSetupController@agentarea_add');
	Route::post('/agentarea/save', 'PortfolioParameterSetupController@agentarea_store');
	Route::get('/agentarea/edit/{AGENT_AREA_ID}', 'PortfolioParameterSetupController@agentarea_edit');
	Route::post('/agentarea/update', 'PortfolioParameterSetupController@agentarea_update');

	Route::get('/investor-type', 'PortfolioParameterSetupController@investortype_add');
	Route::post('/investor-type/save', 'PortfolioParameterSetupController@investortype_store');
	Route::get('/investor-type/edit/{INVESTOR_TYPE_ID}', 'PortfolioParameterSetupController@investortype_edit');
	Route::post('/investor-type/update', 'PortfolioParameterSetupController@investortype_update');

	Route::get('/mgmtfeerule', 'PortfolioParameterSetupController@mgmtfeerule_add');
	Route::post('/mgmtfeerule/save', 'PortfolioParameterSetupController@mgmtfeerule_store');
	Route::get('/mgmtfeerule/edit/{MANAGEMENTFEE_RULE_ID}', 'PortfolioParameterSetupController@mgmtfeerule_edit');
	Route::post('/mgmtfeerule/update', 'PortfolioParameterSetupController@mgmtfeerule_update');

	Route::get('/custfeerule', 'PortfolioParameterSetupController@custfeerule_add');
	Route::post('/custfeerule/save', 'PortfolioParameterSetupController@custfeerule_store');
	Route::get('/custfeerule/edit/{CUSTODIANFEE_RULE_ID}', 'PortfolioParameterSetupController@custfeerule_edit');
	Route::post('/custfeerule/update', 'PortfolioParameterSetupController@custfeerule_update');

	Route::get('/trstfeerule', 'PortfolioParameterSetupController@trstfeerule_add');
	Route::post('/trstfeerule/save', 'PortfolioParameterSetupController@trstfeerule_store');
	Route::get('/trstfeerule/edit/{TRUSTEEFEE_RULE_ID}', 'PortfolioParameterSetupController@trstfeerule_edit');
	Route::post('/trstfeerule/update', 'PortfolioParameterSetupController@trstfeerule_update');

	Route::get('/invcountry', 'PortfolioParameterSetupController@invCountry_add');
	Route::post('/invcountry/save', 'PortfolioParameterSetupController@invCountry_store');
	Route::get('/invcountry/edit/{APPLICANT_COUNTRY_ID}', 'PortfolioParameterSetupController@invCountry_edit');
	Route::post('/invcountry/update', 'PortfolioParameterSetupController@invCountry_update');

	Route::get('/foreign-currency', 'PortfolioParameterSetupController@currency_view');


	Route::get('/portfolio-registration', 'PortfolioParameterSetupController@portfolio_reg');
	Route::post('/portfolio-registration/save', 'PortfolioParameterSetupController@portfolio_store');
	Route::get('/portfolio-registration/view', 'PortfolioParameterSetupController@portfolio_show');
	Route::get('/portfolio-registration/edit/{PRO_REG_ID}', 'PortfolioParameterSetupController@portfolio_edit');
	Route::post('/portfolio-registration/update', 'PortfolioParameterSetupController@portfolio_update');

	Route::get('/investmenttype', 'PortfolioParameterSetupController@invstmnt_type');
	Route::post('/investmenttype/save', 'PortfolioParameterSetupController@invstmnt_store');
	Route::get('/investmenttype/edit/{INVESTMENT_TYPE_SETUP_ID}', 'PortfolioParameterSetupController@invstmnt_edit');
	Route::post('/investmenttype/update', 'PortfolioParameterSetupController@invstmnt_update');

	Route::get('/investment-type', 'PortfolioParameterSetupController@inv_type_add');
	Route::post('/investment-type/save', 'PortfolioParameterSetupController@inv_type_store');
	Route::get('/investment-type/edit/{INVESTMENT_TYPE_ID}', 'PortfolioParameterSetupController@inv_type_edit');
	Route::post('/investment-type/update', 'PortfolioParameterSetupController@inv_type_update');
});

Route::Group([
	'prefix' => '/subscription-redumption'
],	function(){
	Route::get('/', 'SubscriptionRedumptionController@subred');
	Route::get('/s-a-registration', 'SubscriptionRedumptionController@sa_add');
	Route::post('/s-a-registration/save', 'SubscriptionRedumptionController@sa_store');
	Route::get('/s-a-registration/view', 'SubscriptionRedumptionController@sa_view');
	Route::get('/s-a-registration/edit/{SALESAGENT_ID}', 'SubscriptionRedumptionController@sa_edit');
	Route::post('/s-a-registration/update', 'SubscriptionRedumptionController@sa_update');

	Route::get('/s-c-registration', 'SubscriptionRedumptionController@sc_add');
	Route::get('/findWithacId/{id}', 'SubscriptionRedumptionController@get_currency');
	Route::get('/findWithdId/{id}', 'SubscriptionRedumptionController@get_area');
	Route::post('/s-c-registration/save', 'SubscriptionRedumptionController@sc_store');
	Route::get('/s-c-registration/view', 'SubscriptionRedumptionController@sc_view');

	Route::get('/inv-reginfo', 'SubscriptionRedumptionController@inv_view');

	Route::get('/inv-profile-edit/{PRINCIPAL_APPLICANT_ID}', 'SubscriptionRedumptionController@inv_pro_edit');
	Route::post('inv-reginfo/updata', 'SubscriptionRedumptionController@inv_reginfo_update');

	Route::get('/inst-profile-edit/{INSTAPP_ID}', 'SubscriptionRedumptionController@inst_pro_edit');
	Route::post('/inst-reginfo/updata', 'SubscriptionRedumptionController@inst_reginfo_update');

	Route::get('/auth_per/add/{REGISTRATION_NO}', 'SubscriptionRedumptionController@authper_add');
	Route::post('/auth_per/save', 'SubscriptionRedumptionController@authper_store');

	Route::get('/auth-per-edit/{AUTH_PER_ID}', 'SubscriptionRedumptionController@authper_edit');
	Route::post('/auth_per/updata', 'SubscriptionRedumptionController@authper_update');

	Route::get('/assign-sc', 'SubscriptionRedumptionController@assign_sc');
	Route::post('/assign-sc/save', 'SubscriptionRedumptionController@save_assign_sc');
	Route::get('/assigned/delete/{id}', 'SubscriptionRedumptionController@assigned_delete');

	Route::get('/check-sa-code/{code}', 'SubscriptionRedumptionController@check_sa_code');
	Route::get('/unit-holder-profile', 'SubscriptionRedumptionController@profile_holding_view');
	Route::get('/pending-purchase', 'SubscriptionRedumptionController@pend_purchase');
	Route::get('/pending-purchase/approve/{apl_id}/{id}', 'SubscriptionRedumptionController@e_approve');
	Route::get('/pending-purchase-manager', 'SubscriptionRedumptionController@pend_purchase_manager');
	Route::get('/pending-purchase/approve/man/{apl_id}/{id}', 'SubscriptionRedumptionController@manager_app');
	Route::get('/pending-purchase/disapprove/man/{apl_id}/{reg_no}/{buy_unit}/{id}', 'SubscriptionRedumptionController@manager_disapp');
	Route::get('/block-units/{id}/{f_id}', 'SubscriptionRedumptionController@block_units');
	Route::get('/holding-mail/{id}/{f_id}', 'SubscriptionRedumptionController@holding_mail');
	Route::post('/block/save', 'SubscriptionRedumptionController@block_units_save');
    Route::get('/pending-sell', 'SubscriptionRedumptionController@pend_sell');
	Route::get('/pending-sell/approve/{apl_id}/{id}', 'SubscriptionRedumptionController@sell_e_approve');
	Route::get('/pending-sell-manager', 'SubscriptionRedumptionController@pend_sell_manager');
	Route::get('/pending-sell/approve/man/{apl_id}/{id}', 'SubscriptionRedumptionController@manager_app_sell');
	Route::get('/pending-sell/disapprove/man/{apl_id}/{reg_no}/{buy_unit}/{id}', 'SubscriptionRedumptionController@manager_disapp_sell');
	Route::get('/Tax-Certificate', 'SubscriptionRedumptionController@tax_certificate');
	Route::get('/tax_certificatebyid/{id}/{year}', 'SubscriptionRedumptionController@get_tax_cert');
	Route::get('/tax_cer_mail/{id}/{year}', 'SubscriptionRedumptionController@send_tax_cert');
	Route::get('/subscription_report', 'SubscriptionRedumptionController@sub_report');
	Route::get('/subsreport/{id}/{fid}/{fd}/{td}', 'SubscriptionRedumptionController@get_sub_report');
	Route::get('/surrender_report', 'SubscriptionRedumptionController@sur_report');
	Route::get('/surreport/{id}/{fid}/{fd}/{td}', 'SubscriptionRedumptionController@get_sur_report');
	Route::get('/purchdisap', 'SubscriptionRedumptionController@get_purchdisap');
	Route::get('/repurchdisap', 'SubscriptionRedumptionController@get_repurchdisap');
	Route::get('/datewiseholding', 'SubscriptionRedumptionController@datewise');
	Route::get('/datewise/{fid}/{hd}', 'SubscriptionRedumptionController@get_datewise');

});

Route::get('/', 'FrontEndController@client_home');
Route::post('/ta-login/attempt', 'TALoginController@login');
Route::get('/ta-logout', 'TALoginController@logout');
Route::get('/digital-sign', 'FrontEndController@digital_sign');
Route::Group([
	'prefix' => '/ta'
],	function(){
	Route::get('/', 'TALoginController@dashboard');
	Route::get('/indv', 'TALoginController@indv_add');
	Route::post('/indv/excel_import', 'TALoginController@indv_excel_import');
	Route::post('/indv/save', 'TALoginController@indv_store');

	Route::get('/inst', 'TALoginController@inst_add');
	Route::post('/inst/excel_import', 'TALoginController@inst_excel_import');
	Route::post('/inst/save', 'TALoginController@inst_store');

	Route::get('/buy', 'TALoginController@ta_buy');
	Route::post('/buy/save', 'TALoginController@ta_buy_store');
	Route::get('/findWithapplid/{id}/{fundid}', 'TALoginController@get_applicant');
	Route::get('/findWithapplidone/{id}', 'TALoginController@get_applicant_info');

	Route::get('/sell', 'TALoginController@ta_sell');
	Route::post('/sell/save', 'TALoginController@ta_sell_store');
	Route::post('/ta-reset','TALoginController@ta_pass_reset');

	Route::get('/buy_rate/{f_id}', 'TALoginController@getTaBuyRate');
	Route::get('/sell_rate/{f_id}', 'TALoginController@getTaSellRate');
	Route::get('/app_list', 'TALoginController@app_list_view');
	Route::get('/unit_sub_list', 'TALoginController@sub_list_view');
	Route::get('/unit_sur_list', 'TALoginController@sur_list_view');
});

Route::post('/inv-login', 'InvestorLoginController@invlogin');
Route::get('/inv-logout', 'InvestorLoginController@invlogout');

Route::Group([
	'prefix' => '/inv'
],	function(){
	Route::get('/', 'InvestorLoginController@inv_dashboard');
	Route::get('/buy/{id}/{proid}', 'InvestorLoginController@inv_buy');
	Route::post('/buy/save', 'InvestorLoginController@inv_buy_store');
	Route::get('/sell/{id}/{proid}', 'InvestorLoginController@inv_sell');
	Route::post('/sell/save', 'InvestorLoginController@inv_sell_store');
	Route::post('/inv-reset','InvestorLoginController@pass_reset');
	Route::get('/buy_rate/{f_id}', 'InvestorLoginController@getBuyRate');
	Route::get('/sell_rate/{f_id}', 'InvestorLoginController@getSellRate');
	Route::get('/buy_sell_rate/{f_id}/{r_id}', 'InvestorLoginController@getBuySellRate');
	Route::get('/pass-id/{id}', 'InvestorLoginController@inv_pass_id');
	Route::get('/pass-code/{code}/{id}/{pass}', 'InvestorLoginController@inv_pass_code');
	Route::get('/sub_rpt', 'InvestorLoginController@invSubReport');
	Route::get('/sur_rpt', 'InvestorLoginController@invSurReport');
	Route::get('/holding-download/{f_id}/{r_id}/{c_name}', 'InvestorLoginController@getDown');
});


Route::Group([
	'prefix' => '/portfolio-accounts'
],	function(){
	Route::get('/', 'PortfolioAccountsController@accounts');
	Route::get('/pending-purchase-accounts', 'PortfolioAccountsController@pend_purchase_accounts');
	Route::get('/pending-purchase/prepared/acc/{apl_id}/{id}', 'PortfolioAccountsController@prepared_app');
	Route::post('/pending-purchase/approve/acc', 'PortfolioAccountsController@accountant_app');
	Route::get('/pending-sell-accounts', 'PortfolioAccountsController@pend_sell_accounts');
	Route::get('/pending-sell/prepared/acc/{apl_id}/{id}', 'PortfolioAccountsController@sell_prepared_app');
	Route::post('/pending-sell/approve/acc', 'PortfolioAccountsController@accountant_app_sell');
	Route::get('/findWithbId/{id}', 'PortfolioAccountsController@get_ac_no');
	Route::get('/findWithbaId/{id}', 'PortfolioAccountsController@get_ac');
});

Route::Group([
	'prefix' => '/trading'
],	function(){
	Route::get('/', 'TradingController@trading');
	Route::get('/eod', 'TradingController@eod_process');
	Route::post('/eod/save', 'TradingController@eod_save');
	Route::get('/eod/edit/{id}', 'TradingController@eod_edit');
	Route::post('eod/update', 'TradingController@eod_update');
	Route::get('/broker', 'TradingController@broker_setup');
	Route::post('/broker/save', 'TradingController@broker_add');
	Route::get('/broker/edit/{id}', 'TradingController@broker_edit');
	Route::post('/broker/update', 'TradingController@broker_update');
	Route::get('/sector', 'TradingController@sector_setup');
	Route::post('/sector/save', 'TradingController@sector_add');
	Route::get('/sector/edit/{id}', 'TradingController@sector_edit');
	Route::post('/sector/update', 'TradingController@sector_update');
	Route::get('/stock', 'TradingController@stock_setup');
	Route::post('/stock/save', 'TradingController@stock_add');
	Route::get('/stock/edit/{id}', 'TradingController@stock_edit');
	Route::post('/stock/update', 'TradingController@stock_update');
	Route::get('/torder', 'TradingController@torder_setup');
	Route::get('/findWithsecId/{id}', 'TradingController@get_stock');
	Route::post('/torder/save', 'TradingController@torder_add');
	Route::get('/pending/buy/{id}', 'TradingController@torder_conf');
	Route::get('/delete/buy/{id}', 'TradingController@torder_del');
	Route::get('/torder/conf', 'TradingController@torder_conf_rpt');
	Route::get('/torderconfbybrokId/{brk}/{trd}', 'TradingController@get_torder_rpt');
	Route::get('/torder_mail/{brk}/{trd}', 'TradingController@send_torder_mail');
	Route::get('/torder/conf/report', 'TradingController@getTOConfRpt');
	Route::get('/persetup', 'TradingController@perSetup');
	Route::post('/percent/update', 'TradingController@perUpdate');
	Route::get('/sellorder', 'TradingController@sell_order');
	Route::post('/soder/save', 'TradingController@soder_add');
	Route::get('/pending/sell/{id}', 'TradingController@sorder_conf');
	Route::get('/sorder/conf', 'TradingController@sorder_conf_rpt');
	Route::get('/sorderconfbybrokId/{brk}/{trd}', 'TradingController@get_sorder_rpt');
	Route::get('/sorder_mail/{brk}/{trd}', 'TradingController@send_sorder_mail');

	Route::get('/instrument_cate', 'TradingController@instrument_cate_setup');
	Route::post('/InstrumentCat/save', 'TradingController@instrument_cate_add');
	Route::get('/instrumentCate/edit/{id}', 'TradingController@inst_cat_edit');
	Route::post('/inst_cat/update', 'TradingController@inst_update');

    Route::get('/instrument', 'TradingController@instrument_setup');
    Route::post('/Instrument/save', 'TradingController@instrument_add');
    Route::get('/instrument/edit/{id}', 'TradingController@instrument_edit');
    Route::post('/instrument/update', 'TradingController@instrument_update');

	Route::get('/sellorder', 'TradingController@sell_order');
	Route::post('/soder/save', 'TradingController@soder_add');
	Route::get('/pending/sell/{id}', 'TradingController@sorder_conf');
	Route::get('/delete/sell/{id}', 'TradingController@sorder_del');
	Route::get('/sorder/conf/report', 'TradingController@getSOConfRpt');

});


Route::Group([
	'prefix' => '/corporate-action'
],	function(){
	Route::get('/', 'CorporateActionController@ca_index');
	Route::get('/uf-export', 'CorporateActionController@ex_uf');
	Route::get('/dividend', 'CorporateActionController@dividend_setup');
	Route::post('/dividend/save', 'CorporateActionController@dividend_store');
	Route::get('/view_dividend', 'CorporateActionController@show_dividend');
	Route::get('/dividend/edit/{DVS_ID}', 'CorporateActionController@dividend_edit');
	Route::post('/dividend/update', 'CorporateActionController@dividend_update');
	Route::get('/dividend/delete/{DVS_ID}', 'CorporateActionController@dividend_del');
	Route::get('/calculation', 'CorporateActionController@import_text');
	Route::post('/dividend/import_uf', 'CorporateActionController@uf_calculation');
	Route::get('/dividend-warrant', 'CorporateActionController@dividend_warrant');
	Route::get('/dividend-warrantbyid/{fund}/{id}/{year}', 'CorporateActionController@get_div_wr');
	Route::get('/dvd_wrn_mail/{fund}/{id}/{year}', 'CorporateActionController@mail_div_wr');
	Route::get('/dvdn-report', 'CorporateActionController@dividend_report');
	Route::get('/recon', 'CorporateActionController@recon_sl');
	Route::get('/reconbyid/{fund}/{year}', 'CorporateActionController@getRecon_sl');
	
});

Route::Group([
	'prefix' => '/calender'
],	function(){
	Route::get('/settings', 'CalenderSetupController@cl_set');
	Route::post('/month/save', 'CalenderSetupController@mnth_store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

Route::get('/mpassresm','PassResetController@passindex');
Route::post('/preset','PassResetController@reset');

Route::get('/appslogin','FrontEndController@get_apps_login');

Route::get('/website-inv-login','FrontEndController@wbinvlgin');
Route::get('/website-ta-login','FrontEndController@wbtalgin');

Route::get('/talog','FrontEndController@taLoginMy');
