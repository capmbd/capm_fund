@extends('BackEnd.master_one')

@section('title')
	Day End / Day Start
@endsection

@section('class2')
	active
@endsection

@push('css')
	<style type="text/css">
		.ckbx span{
			font-weight: 700 !important;
		}
		.ckbx input{
			cursor: pointer;
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
							<a href=" {{ url('/calender/dayedays') }} ">
								<i class="feather icon-layers"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href=" {{ url('/calender/dayedays') }} ">Day End / Day Start</a> {{date('d-M-Y', strtotime($date_ck->CL_DATE))}}</li>
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
									<h5>Day End / Day Start</h5>
									<p class="text-success insert_message"> <b> {{ Session::get('message') }} </b> </p>
								</div>
								<div class="card-block">

									<div class="table-responsive">
                                        <table class="table table-bordered tbl_dta" style="border-top: 1px solid #dee2e6;">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Day</th>
                                                    <th>Status</th>
                                                    <th>Holiday</th>
                                                    <th>Note</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $data)
                                                <tr>
                                                    <td>{{$data->CL_DATE}}</td>
                                                    <td>{{$data->DAY}}</td>
                                                    @if($data->STATUS == 'N')
                                                    	<td>Pending</td>
                                                    @elseif($data->STATUS == 'O')
                                                    	<td class="bg-success">Open</td>
                                                    @elseif($data->STATUS == 'H' || $data->STATUS == 'C')
                                                    	<td>Closed</td>
                                                    @endif
                                                    
                                                    @if($data->STATUS == 'H')
                                                    	<td class="bg-danger">Yes</td>
                                                    @else
                                                    	<td>No</td>
                                                    @endif
                                                    
                                                    <td>{{$data->NOTE}} By Admin</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    @if($date_ck->STATUS == 'N')
                                        <a href="{{url('calender/day-start/'.$date_ck->calender_id)}}" class="btn my_bg_one btn-sm text-white">Day Start</a>
                                    @elseif($date_ck->STATUS == 'O')
                                        <a href="{{url('calender/day-end/'.$date_ck->calender_id)}}" class="btn btn-danger btn-sm">Day End</a>
                                    @endif

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