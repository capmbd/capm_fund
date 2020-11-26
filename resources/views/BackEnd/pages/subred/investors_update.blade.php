@extends('BackEnd.master_one')

@section('title')
	Investor Registration Info
@endsection

@section('class3')
	active
@endsection

@push('css')
	<style type="text/css">
		label.error {
			color: #CC0000;
			font-weight: 300;
		}
		label span{
			color: red;
		}
		.zoom-img{
			cursor: pointer;
		}
		.zoom{
			width:100%;
			float: right;
			display: none;
		}
		.zoom-img:hover + .zoom{
  			display: block;
		}
	</style>
@endpush
@section('main-content')
<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href=" # ">
								<i class="feather icon-pie-chart"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" # ">Individual Investor Info</a></li>
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
						<div class="col-lg-12 col-xl-12">
							<div class="card">
								<div class="card-header">
									<h5>Individual Investor Info</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">
									<form id="ind_reg" action="{{url('/subscription-redumption/inv-reginfo/updata')}}" method="post" enctype="multipart/form-data">
										@csrf

										<input type="hidden" value="{{$data->REGISTRATION_NO}}" name="rid" required>

										<div class="row">
											<div class="col-md-12 col-sm-12">
												<p class="div_text">Principal Applicant's Details
													<span>
														<input type="radio" value="Mr." name="GENDER" {{ $data->GENDER == 'Mr.' ? 'checked' : '' }} >Mr.
														<input type="radio" value="Mrs." name="GENDER" {{ $data->GENDER == 'Mrs.' ? 'checked' : '' }} >Mrs.
														<input type="radio" value="Ms." name="GENDER" {{ $data->GENDER == 'Ms.' ? 'checked' : '' }} >Ms.
													</span>
												</p>
											</div>
											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="NAME" value="{{$data->NAME}}" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Father's/Husband's Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->FATHER_NAME}}" name="FATHER_NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mother's Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->MOTHER_NAME}}" name="MOTHER_NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Present Address</label>
													</div>
													<div class="col-sm-8">
														<textarea class="form-control autonumber" name="PRESENT_ADDRESS" rows="3">{{$data->PRESENT_ADDRESS}}</textarea>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Permanent Address</label>
													</div>
													<div class="col-sm-8">
														<textarea class="form-control autonumber" value="{{$data->PERMANENT_ADDRESS}}" name="PERMANENT_ADDRESS" rows="3">{{$data->PERMANENT_ADDRESS}}</textarea>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">National ID / Passport No</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->NATIONAL_ID}}" name="NATIONAL_ID" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Town/City</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->CITY}}" name="CITY" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">District/Province</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->DISTRICT}}" name="DISTRICT" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Photo</label>
													</div>
													<div class="col-sm-8">
														<img class="zoom-img" style="height: 220px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->IMAGE) }}" alt="">
														<img class="zoom" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->IMAGE) }}" alt="">
														<input type="file" id="IMAGE" name="IMAGE">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Signature</label>
													</div>
													<div class="col-sm-8">
														<img class="zoom-img" style="height: 100px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->APP_SIGN) }}" alt="">
														<img class="zoom" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->APP_SIGN) }}" alt="">
														<input type="file" id="APP_SIGN" name="APP_SIGN">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">National ID</label>
													</div>
													<div class="col-sm-8">
														<img style="height: 100px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->NID_IMG) }}" alt="">
														<input type="file" id="NID_IMG" name="NID_IMG">
													</div>
												</div>
											</div>


											<div class="col-md-5 col-sm-5">
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Country of Residence</label>
													</div>
													<div class="col-sm-7">
														<select name="COUNTRY" class="col-sm-12 form-select">
															<option value="{{$data->COUNTRY}}">{{$data->APPLICANT_COUNTRY_NAME}}</option>
															<option value="">---Select Country---</option>
															@foreach( $countries as $country )
															<option value="{{$country->APPLICANT_COUNTRY_CODE}}">{{$country->APPLICANT_COUNTRY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">data of Birth</label>
													</div>
													<div class="col-sm-7">
														<input type="date" value="{{$data->BIRTHDAY}}" name="BIRTHDAY" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Contract No.</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->TELEPHONE}}" name="TELEPHONE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">E-mail</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->EMAIL}}" name="EMAIL" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Nationality</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->NATIONALITY}}" name="NATIONALITY" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">BO ID (If Any)</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->BOID}}" name="BOID" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Post-Code</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->POST_CODE}}" name="POST_CODE" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Occupation</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->OCCUPATION}}" name="OCCUPATION" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">E-TIN (If any)</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->ETIN}}" name="ETIN" class="form-control autonumber">
													</div>
												</div>
											</div>


											<div class="col-md-12 col-sm-12">
												<p class="div_text">Bank Details</p>
											</div>

											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Account Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->ACCOUNT_NAME}}" name="ACCOUNT_NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Bank Account No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->ACCOUNT_NO}}" name="ACCOUNT_NO" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Bank Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->BANK_NAME}}" name="BANK_NAME" class="form-control autonumber">
													</div>
												</div>
											</div>


											<div class="col-md-5 col-sm-5">
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Routing No.</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->ROUTING_NO}}" name="ROUTING_NO" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Branch Name</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->BRANCH}}" name="BRANCH" class="form-control autonumber">
													</div>
												</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<p class="div_text">Preferred Dividend Option
													<span>
														<input type="radio" value="CIP" name="DIVIDENT_OPT" {{ $data->DIVIDENT_OPT == 'CIP' ? 'checked' : '' }} >Cumulative Investment Plan (CIP)
														<input type="radio" value="Cash" name="DIVIDENT_OPT" {{ $data->DIVIDENT_OPT == 'Cash' ? 'checked' : '' }} >Cash
													</span>
												</p>
											</div>

											<div class="col-md-12 col-sm-12">
												<p class="div_text">Second Applicant's Details(optional) <input type="checkbox" name="optional" value="optional" id="optional"></p>
											</div>

											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Name</label>
													</div>
													<div class="col-sm-8">
														@if(empty($data->JOINT_NAME))
															<input type="text" id="input_text1" name="SECOND_APL_NAME" class="form-control autonumber" disabled>
														@else
															<input type="text" id="input_text1" name="SECOND_APL_NAME" value="{{$data->JOINT_NAME}}" class="form-control autonumber" disabled>
														@endif
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Father's/Husband's Name</label>
													</div>
													<div class="col-sm-8">
														@if(empty($data->JOINT_FATHER_NAME))
															<input type="text" id="input_text2" name="SECOND_APL_FATHER" class="form-control autonumber" disabled>
														@else
															<input type="text" value="{{$data->JOINT_FATHER_NAME}}" id="input_text2" name="SECOND_APL_FATHER" class="form-control autonumber" disabled>
														@endif
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mother's Name</label>
													</div>
													<div class="col-sm-8">
														@if(empty($data->JOINT_MOTHER_NAME))
															<input type="text" id="input_text3" name="SECOND_APL_MOTHER" class="form-control autonumber" disabled>
														@else
															<input type="text" value="{{$data->JOINT_MOTHER_NAME}}" id="input_text3" name="SECOND_APL_MOTHER" class="form-control autonumber" disabled>
														@endif

													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Present Address</label>
													</div>
													<div class="col-sm-8">
														
														@if(empty($data->JOINT_PRESENT_ADDRESS))
															<textarea class="form-control autonumber" name="SECOND_APL_PRES" id="input_text4" rows="3" disabled></textarea>
														@else
															<textarea class="form-control autonumber" name="SECOND_APL_PRES" id="input_text4" rows="3" disabled>{{$data->JOINT_PRESENT_ADDRESS}}</textarea>
														@endif
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Permanent Address</label>
													</div>
													<div class="col-sm-8">
														@if(empty($data->JOINT_PERMANENT_ADDRESS))
															<textarea class="form-control autonumber" name="SECOND_APL_PER" id="input_text5" rows="3" disabled></textarea>
														@else
															<textarea class="form-control autonumber" name="SECOND_APL_PER" id="input_text5" rows="3" disabled>{{$data->JOINT_PERMANENT_ADDRESS}}</textarea>
														@endif
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">National ID / Passport No</label>
													</div>
													<div class="col-sm-8">
														@if(empty($data->JOINT_NATIONAL_ID))
															<input type="text" id="input_text6" name="SECOND_APL_NID" class="form-control autonumber" disabled>
														@else
															<input type="text" value="{{$data->JOINT_NATIONAL_ID}}" id="input_text6" name="SECOND_APL_NID" class="form-control autonumber" disabled>
														@endif

													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Photo</label>
													</div>
													<div class="col-sm-8">
														
														@if(empty($data->JOINT_IMAGE))
															<input type="file" id="JOINT_IMAGE" name="JOINT_IMAGE">
														@else
															<img style="height: 220px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->JOINT_IMAGE) }}" alt="">
															<input type="file" id="JOINT_IMAGE" name="JOINT_IMAGE">
														@endif
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Signature</label>
													</div>
													<div class="col-sm-8">
														@if(empty($data->JOINT_APP_SIGN))
															<input type="file" id="JOINT_APP_SIGN" name="JOINT_APP_SIGN">
														@else
															<img style="height: 100px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->JOINT_APP_SIGN) }}" alt="">
															<input type="file" id="JOINT_APP_SIGN" name="JOINT_APP_SIGN">
														@endif
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">National ID</label>
													</div>
													<div class="col-sm-8">
														@if(empty($data->JOINT_NID_IMG))
															<input type="file" id="JOINT_NID_IMG" name="JOINT_NID_IMG">
														@else
															<img style="height: 100px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->JOINT_NID_IMG) }}" alt="">
															<input type="file" id="JOINT_NID_IMG" name="JOINT_NID_IMG">
														@endif
													</div>
												</div>


											</div>

											<div class="col-md-5 col-sm-5">
												
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">data of Birth</label>
													</div>
													<div class="col-sm-7">
														@if(empty($data->JOINT_BIRTHDAY))
															<input type="data" id="input_text7" name="SECOND_APL_DOB" class="form-control autonumber" disabled>
														@else
															<input type="data" value="{{$data->JOINT_BIRTHDAY}}" id="input_text7" name="SECOND_APL_DOB" class="form-control autonumber" disabled>
														@endif

													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Contract No.</label>
													</div>
													<div class="col-sm-7">
														@if(empty($data->JOINT_TELEPHONE))
															<input type="text" name="SECOND_APL_CONT" id="input_text8" class="form-control autonumber" disabled>
														@else
															<input type="text" value="{{$data->JOINT_TELEPHONE}}" name="SECOND_APL_CONT" id="input_text8" class="form-control autonumber" disabled>
														@endif

													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Nationality</label>
													</div>
													<div class="col-sm-7">
														@if(empty($data->JOINT_NATIONALITY))
															<input type="text" id="input_text9" name="SECOND_APL_NATION" class="form-control autonumber" disabled>
														@else
															<input type="text" value="{{$data->JOINT_NATIONALITY}}" id="input_text9" name="SECOND_APL_NATION" class="form-control autonumber" disabled>
														@endif

													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Occupation</label>
													</div>
													<div class="col-sm-7">
														@if(empty($data->JOINT_OCCUPATION))
															<input type="text" id="input_text10" name="SECOND_APL_OCU" class="form-control autonumber" disabled>
														@else
															<input type="text" id="input_text10" value="{{$data->JOINT_OCCUPATION}}" name="SECOND_APL_OCU" class="form-control autonumber" disabled>
														@endif
													</div>
												</div>
											</div>

											<div class="col-md-12 col-sm-12">
												<p class="div_text">Nominee Details</p>
											</div>

											<div class="col-md-7 col-sm-7">
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->NOM_NAME}}" name="NOMINEE_NAME" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Father's/Husband's Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="NOMINEE_FATHER" value="{{$data->NOM_FATHER_NAME}}" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Mother's Name</label>
													</div>
													<div class="col-sm-8">
														<input type="text" name="NOMINEE_MOTHER" value="{{$data->NOM_MOTHER_NAME}}" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Relationship with Principal</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->RELATION_APPLICANT}}" name="NOMINEE_RELATION" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Present Address</label>
													</div>
													<div class="col-sm-8">
														<textarea class="form-control autonumber" name="NOMINEE_PRES_ADDRSS" rows="3">{{$data->NOM_PRESENT_ADDRESS}}</textarea>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Permanent Address</label>
													</div>
													<div class="col-sm-8">
														<textarea class="form-control autonumber" name="NOMINEE_PER_ADDRESS" rows="3">{{$data->NOM_PERMANENT_ADDRESS}}</textarea>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">National ID/Passport No.</label>
													</div>
													<div class="col-sm-8">
														<input type="text" value="{{$data->NOM_NATIONAL_ID}}" name="NOMINEE_NID" class="form-control autonumber">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Photo</label>
													</div>
													<div class="col-sm-8">
														<img style="height: 220px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->NOM_IMAGE) }}" alt="">
														<input type="file" id="NOM_IMAGE" name="NOM_IMAGE">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">Signature</label>
													</div>
													<div class="col-sm-8">
														<img style="height: 100px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->NOM_APP_SIGN) }}" alt="">
														<input type="file" id="NOM_APP_SIGN" name="NOM_APP_SIGN">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-sm-4">
														<label class="col-form-label">National ID</label>
													</div>
													<div class="col-sm-8">
														<img style="height: 100px; width: 220px; margin-bottom: 5px;" src="{{ asset('investor/'.$data->REGISTRATION_NO.'/images/'.$data->NOM_NID_IMG) }}" alt="">
														<input type="file" id="NOM_NID_IMG" name="NOM_NID_IMG">
													</div>
												</div>
											</div>

											<div class="col-md-5 col-sm-5">
												
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">data of Birth</label>
													</div>
													<div class="col-sm-7">
														<input type="data" value="{{$data->NOM_BIRTHDAY}}" name="NOMINEE_DOB" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Contract No.</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->NOM_TELEPHONE}}" name="NOMINEE_CONTACT" class="form-control autonumber">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Issuing Country</label>
													</div>
													<div class="col-sm-7">
														<select name="NOMINEE_COUNTRY" class="col-sm-12 form-select">
															<option value="{{$data->NOM_COUNTRY}}">{{$data->APPLICANT_COUNTRY_NAME}}</option>
															<option value="">---Select Country---</option>
															@foreach( $countries as $country )
															<option value="{{$country->APPLICANT_COUNTRY_CODE}}">{{$country->APPLICANT_COUNTRY_NAME}}</option>
															@endforeach
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-sm-5">
														<label class="col-form-label">Occupation</label>
													</div>
													<div class="col-sm-7">
														<input type="text" value="{{$data->NOM_OCCUPATION}}" name="NOMINEE_OCCUPATION" class="form-control autonumber">
													</div>
												</div>
											</div>


											<div class="row form-group">
												<div class="col-sm-2">
													<button type="submit" class="btn btn-primary m-b-0">Submit</button>
												</div>
											</div>
										</div>
										
									</form>

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
<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>
<script type="text/javascript" src="{{asset('BackEnd/files/assets/js/bootbox.min.js')}}"></script>
<script type="text/javascript">
	$().ready(function() {
		$("#ind_reg").validate({
			rules: {
				NAME:{
					required:true
				},
				FATHER_NAME:{
					required:true
				},
				MOTHER_NAME:{
					required:true
				},
				PRESENT_ADDRESS:{
					required:true
				},
				PERMANENT_ADDRESS:{
					required:true
				},
				NATIONAL_ID:{
					required:true
				},
				CITY:{
					required:true
				},
				DISTRICT:{
					required:true
				},
				COUNTRY:{
					required:true
				},
				BIRTHDAY:{
					required:true
				},
				TELEPHONE:{
					required:true
				},
				EMAIL:{
					required:true,
					email:true
				},
				NATIONALITY:{
					required:true
				},
				POST_CODE:{
					required:true
				},
				OCCUPATION:{
					required:true
				},
				GENDER:{
					required:true
				},
				DIVIDENT_OPT:{
					required:true
				},
				ACCOUNT_NAME:{
					required:true
				},
				ACCOUNT_NO:{
					required:true
				},
				BANK_NAME:{
					required:true
				},
				ROUTING_NO:{
					required:true
				},
				BRANCH:{
					required:true
				},
				NOMINEE_NAME:{
					required:true
				},
				NOMINEE_FATHER:{
					required:true
				},
				NOMINEE_MOTHER:{
					required:true
				},
				NOMINEE_RELATION:{
					required:true
				},
				NOMINEE_PRES_ADDRSS:{
					required:true
				},
				NOMINEE_PER_ADDRESS:{
					required:true
				},
				NOMINEE_NID:{
					required:true
				},
				NOMINEE_DOB:{
					required:true
				},
				NOMINEE_CONTACT:{
					required:true
				},
				NOMINEE_COUNTRY:{
					required:true
				},
				NOMINEE_OCCUPATION:{
					required:true
				},
				SECOND_APL_NAME:{
					required:true
				},
				SECOND_APL_FATHER:{
					required:true
				},
				SECOND_APL_MOTHER:{
					required:true
				},
				SECOND_APL_PRES:{
					required:true
				},
				SECOND_APL_PER:{
					required:true
				},
				SECOND_APL_NID:{
					required:true
				},
				SECOND_APL_DOB:{
					required:true
				},
				SECOND_APL_CONT:{
					required:true
				},
				SECOND_APL_NATION:{
					required:true
				},
				SECOND_APL_OCU:{
					required:true
				}
			},
			messages: {
				NAME:{
					required: "Enter Investor Name"
				},
				FATHER_NAME:{
					required: "Enter Father's/Husband's Name"
				},
				MOTHER_NAME:{
					required: "Enter Mother's Name"
				},
				PRESENT_ADDRESS:{
					required: "Enter Present Address"
				},
				PERMANENT_ADDRESS:{
					required: "Enter Permanent Address"
				},
				NATIONAL_ID:{
					required: "Enter National ID / Passport No"
				},
				CITY:{
					required: "Town/City"
				},
				DISTRICT:{
					required: "Enter District/Province"
				},
				COUNTRY:{
					required: "Enter Country of Residence"
				},
				BIRTHDAY:{
					required: "Enter Date of Birth"
				},
				TELEPHONE:{
					required: "Enter Contract No."
				},
				EMAIL:{
					required: "Enter Applicant's Email",
					email: "Enter Valid Email Address"
				},
				NATIONALITY:{
					required: "Enter Nationality"
				},
				POST_CODE:{
					required: "Enter Post Code"
				},
				OCCUPATION:{
					required: "Enter Occupation"
				},
				GENDER:{
					required: "Select Gender"
				},
				DIVIDENT_OPT:{
					required: "Delect Dividend Option"
				},
				ACCOUNT_NAME:{
					required: "Enter Account Name"
				},
				ACCOUNT_NO:{
					required: "Enter Account No"
				},
				BANK_NAME:{
					required: "Enter Bank Name"
				},
				ROUTING_NO:{
					required: "Enter Routing No"
				},
				BRANCH:{
					required: "Enter Branch Name"
				},
				NOMINEE_NAME:{
					required: "Enter Nominee Name"
				},
				NOMINEE_FATHER:{
					required: "Enter Father's Name"
				},
				NOMINEE_MOTHER:{
					required: "Enter Mother's Name"
				},
				NOMINEE_RELATION:{
					required: "Enter Relationship With Applicant"
				},
				NOMINEE_PRES_ADDRSS:{
					required: "Enter Present Address"
				},
				NOMINEE_PER_ADDRESS:{
					required: "Enter Permanent Address"
				},
				NOMINEE_NID:{
					required: "Enter National ID/Passport No."
				},
				NOMINEE_DOB:{
					required: "Enter Nominee Birthday"
				},
				NOMINEE_CONTACT:{
					required: "Enter Contract Number"
				},
				NOMINEE_COUNTRY:{
					required: "Enter Nominee Number"
				},
				NOMINEE_OCCUPATION:{
					required: "Enter Nominee Occupation"
				},
				SECOND_APL_NAME:{
					required: "Enter Applicant Name"
				},
				SECOND_APL_FATHER:{
					required: "Enter Father's Name"
				},
				SECOND_APL_MOTHER:{
					required: "Enter Mother's Name"
				},
				SECOND_APL_PRES:{
					required: "Enter Present Address"
				},
				SECOND_APL_PER:{
					required: "Enter Permanent Address"
				},
				SECOND_APL_NID:{
					required: "Enter National ID / Passport No"
				},
				SECOND_APL_DOB:{
					required: "Enter Birthday"
				},
				SECOND_APL_CONT:{
					required: "Enter Contract Number"
				},
				SECOND_APL_NATION:{
					required: "Enter Nationality"
				},
				SECOND_APL_OCU:{
					required: "Enter Occupation"
				}
			
			}
		});

	});
</script>

		<script type="text/javascript">
            var image = document.getElementById("IMAGE");
            image.onchange = function() {
            	var type = image.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var appsign = document.getElementById("APP_SIGN");
            appsign.onchange = function() {
                var type = appsign.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var nidimg = document.getElementById("NID_IMG");
            nidimg.onchange = function() {
                var type = nidimg.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var jointimg = document.getElementById("JOINT_IMAGE");
            jointimg.onchange = function() {
                var type = jointimg.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var jointsign = document.getElementById("JOINT_APP_SIGN");
            jointsign.onchange = function() {
                var type = jointsign.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var jointnid = document.getElementById("JOINT_NID_IMG");
            jointnid.onchange = function() {
                var type = jointnid.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var nomimg = document.getElementById("NOM_IMAGE");
            nomimg.onchange = function() {
                var type = nomimg.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var nomsign = document.getElementById("NOM_APP_SIGN");
            nomsign.onchange = function() {
                var type = nomsign.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };

            var nomnid = document.getElementById("NOM_NID_IMG");
            nomnid.onchange = function() {
                var type = nomnid.value;
            	var check = /(\.jpg|\.jpeg|\.png)$/i;
                if(!check.exec(type)){
                	bootbox.alert({
							message: "<span style='color: red;'>Please Upload JPG, JPEG or PNG !!!</span>",
							backdrop: true
						});
	                    this.value = "";
                }else{
                	if(this.files[0].size >= 512000){
	                    bootbox.alert({
							message: "<span style='color: red;'>Upload Image Must be Less or Equal 500 KB !!!</span>",
							backdrop: true
						});
	                    this.value = "";
	                };
                }
            };
        </script>

<script type="text/javascript">

	document.getElementById('optional').onchange = function() {
    document.getElementById("input_text1").disabled = !this.checked;
    document.getElementById("input_text2").disabled = !this.checked;
    document.getElementById("input_text3").disabled = !this.checked;
    document.getElementById("input_text4").disabled = !this.checked;
    document.getElementById("input_text5").disabled = !this.checked;
    document.getElementById("input_text6").disabled = !this.checked;
    document.getElementById("input_text7").disabled = !this.checked;
    document.getElementById("input_text8").disabled = !this.checked;
    document.getElementById("input_text9").disabled = !this.checked;
    document.getElementById("input_text10").disabled = !this.checked;
	};
</script>
@endpush