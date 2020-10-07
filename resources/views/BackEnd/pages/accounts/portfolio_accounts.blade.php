@extends('BackEnd.master_one')
@section('title')
	Portfolio Accounts
@endsection

@section('class6')
	active
@endsection

@section('main-content')
<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=" {{ url('/portfolio-accounts') }} ">
								<i class="feather icon-credit-card"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/portfolio-accounts') }} ">Portfolio Accounts</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Amortization</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Amortization Processing For Portfolio</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Bank Deposits</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Payment For Interest In Bank</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Fund Units Purchase Repurchase</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="{{ url('/portfolio-accounts/pending-purchase-accounts') }}">Approved Fund Units Purchase - Receive Payment (Pending)</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="{{ url('/portfolio-accounts/pending-sell-accounts') }}">Fund Units Repurchase - Dispatch Payment (Pending)</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Annual Return Calculation</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Balance Sheet</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">General Ledger</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">General Ledger Reports</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Income Expenditure</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Journal</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Trial Balance</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Capital</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Capital Deposit History</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Make Capital Deposit</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Cash In House</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Approved Payments</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Approved Withdrow Cash</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Disapproved Payments</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Disapproved Withdrow Cash</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Withdraw Cash For House Account</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Chart of Account</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Chart Of Accounts</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Chart of Account Map Rules</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Chart of Account Mapping</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Navigation Head View</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Currency Record</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Currency Record</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Disapproved Expenditures</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">General Expenditure</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Issue Expenses</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Preliminary Expenses</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> End Of Reports</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">End Of Month Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">End of Halfyear Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">End of Quater Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">End of Week Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">End of Year Report</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Equity Share Dividend</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Cash Dividend Record</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Coupon dividend payment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Stock Dividend Record</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Expenditure Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Expenditure Report:Paidup</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Expenditure Report:Payable</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Issue Expenditure Report:Paidup</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Issue Expenditure Report:Payable</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Fee Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Journal Fee Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Management Fee Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Custodian Fee Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Report Trustee Fee</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Fees</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Custodian Fee Payment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Managment Fee Payment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Trustee Fee Payment</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Fund Dividend</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Dividend Calculation</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Dividend Payment Process</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Dividend Payment Process</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Fund Dividend</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Income Expense Management</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Expense Management</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending General Expenses</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Issue Expenses</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Preliminary Expense</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Investment Bonds</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Make Payment Investment in Bonds</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Receive Payment Bond Encashments</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Receive Payment Interest from Bonds</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Investment FDR</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Payment FDR Account Opening</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Receive Payment FRD Account Closing</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Investment IPO</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Payment IPO Investment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Receive Payment IPO Return</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Investment Open End Funds</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Payment Open End Fund Units Buy</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Receive Payment Open End Fund Units Sell</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Dividend Receivable From Open-end, Non-Listed Funds</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Investment Placement Securities</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Payment Placement Securities Buy</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Receive Payment Placement Securities Sell</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Cash Dividend Payment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Interest Dividend Payment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Stock Dividend Payment</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Portfolio Edit</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Portfolio Edit</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Private Investment</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Cash Dividend Payment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Interest Dividend Payment</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Payment for Unlisted Sec Buy</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Payment for Unlisted Sec Sell</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Stock Dividend Payment</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Quarterly Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Quertarly Disclosure of the Pertfolio</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Right Share</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Pending Right Share Payable</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Sales Agents Commission</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Sales Agent Commission Payments</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Stock Trading</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Payment for Stock Buy</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Payment for Stock Sell</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12">
							<div class="card coin-price-card table-card">
								<div class="coin-title my_bg_one">
									<h6 class="text-white m-b-0"><i class="feather icon-credit-card"></i> Withdraw Cash for House Account Report</h6>
								</div>
								<div class="card-block p-b-0">
									<div>
										<table class="table table-hover m-b-0 without-header">
											<tbody>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Cash Withdraw and Transaction Report</a>
													</td>
												</tr>
												<tr>
													<td class="panel-menu-card">
														<i class="fas fa-hand-point-right"></i><a href="#">Cash Withdraw Report</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('js')
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/pages/widget/widget-statistic.min.js') }} "></script>
@endpush