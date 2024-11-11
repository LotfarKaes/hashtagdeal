




@extends('companies.companies_dashboard')
@section('companies')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">All Leads</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Leads</li>
							</ol>
						</nav>
					</div>


					<div style= "padding-left:100px;">
						<a href="{{ route('companies.add.leads')}}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Lead</a> 	
						<a href="{{ route('companies.import.view')}}" class="btn btn-secondary"><i class="fa-solid fa-file-import"></i> Import files</a> 			
					</div>


					<div class="ms-auto">
						<div class="btn-group">

						<a href="{{ route('companies.item.listing')}}" class="fa fa-times fa-2xl"></a> 		
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<hr/>


				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							
						<div class="profile-nav-info ">
                            <div class="tab-style3">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Deal">💲 Deals <span class="badge rounded-pill bg-primary text-white">{{$dealDataCount}}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="products-tab" data-bs-toggle="tab" href="#People">👤 People <span class="badge rounded-pill bg-primary text-white">{{$peopleDataCount}}</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="jobs-info-tab" data-bs-toggle="tab" href="#Organizations">🏢 Organizations <span class="badge rounded-pill bg-primary text-white">{{$orgDataCount}}</span></a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="jobs-info-tab" data-bs-toggle="tab" href="#Activities">🛠 Activities <span class="badge rounded-pill bg-primary text-white">{{$activitiesDataCount}}</span></a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="jobs-info-tab" data-bs-toggle="tab" href="#Notes">📋 Notes <span class="badge rounded-pill bg-primary text-white">{{$noteDataCount}}</span></a>
                                    </li>
									
                                </ul>
                                
                                <div class="pb-3"></div>
                                
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Deal">
			
										<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
											<th>Sl</th>
											<th>Title </th>
											<th>Value</th>
											<th>Currency of Value</th>
											<th>Contact person</th>
											<th>Organizations</th>


											</tr>
											</thead>
										<tbody>
										@foreach($dealData as $key => $item)		
											<tr>
											<td> {{ $key+1 }} </td>				
											<td>{{ $item->deal_title }}</td>
											<td>{{ $item->deal_value }}</td>
											<td>{{ $item->deal_currency_of_value }}</td>
											<td>{{ $item->person_name }}</td>
											<td>{{ $item->organization_name }}</td>

											</td> 
											</tr>
										@endforeach

										</tbody>
										</table>
                                    </div>
                                    

                                    <div class="tab-pane fade" id="People">
									<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
											<th>Sl</th>
											<th>Name</th>
											<th>First name</th>
											<th>Last name</th>
											<th>Phone</th>
											<th>Email</th>
											<th>Organizations</th>
											</tr>
											</thead>
										<tbody>
										@foreach($peopleData as $key => $item)		
											<tr>
											<td> {{ $key+1 }} </td>				
											<td>{{ $item->person_name }}</td>
											<td>{{ $item->person_first_name }}</td>
											<td>{{ $item->person_last_name }}</td>
											<td>{{ $item->person_phone }}</td>
											<td>{{ $item->person_email }}</td>
											<td>{{ $item->organization_name }}</td>

											</td> 
											</tr>
										@endforeach

										</tbody>
										</table>
                                    </div>

                            
                                    <div class="tab-pane fade" id="Organizations">
									<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
											<th>Sl</th>
											<th>Name </th>
											<th>Address</th>
											</tr>
											</thead>
										<tbody>
										@foreach($organizationsData as $key => $item)		
											<tr>
											<td> {{ $key+1 }} </td>				
											<td>{{ $item->organization_name }}</td>
											<td>{{ $item->organization_address }}</td>

											</td> 
											</tr>
										@endforeach

										</tbody>
										</table>
                                    </div>

									<div class="tab-pane fade" id="Activities">
									<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
											<th>Sl</th>
											<th>Subject </th>
											<th>Due date</th>
											<th>Deal</th>
											<th>Contact person</th>
											<th>Organization</th>

											</tr>
											</thead>
										<tbody>
										@foreach($activitiesData as $key => $item)		
											<tr>
											<td> {{ $key+1 }} </td>				
											<td>{{ $item->activity_subject }}</td>
											<td>{{ $item->activity_due_date }}</td>
											<td>{{ $item->deal_title }}</td>
											<td>{{ $item->person_name }}</td>
											<td>{{ $item->organization_name }}</td>

											</td> 
											</tr>
										@endforeach

										</tbody>
										</table>
                                    </div>


									<div class="tab-pane fade" id="Notes">
									<table id="example" class="table table-striped table-bordered" style="width:100%">
											<thead>
											<tr>
											<th>Sl</th>
											<th>Note content </th>
											<th>Deal title</th>
											<th>Contact person </th>
											<th>Organization </th>
											
											</tr>
											</thead>
										<tbody>
										@foreach($notesData as $key => $item)		
											<tr>
											<td> {{ $key+1 }} </td>				
											<td>{{ $item->note_content }}</td>
											<td>{{ $item->deal_title }}</td>
											<td>{{ $item->person_name }}</td>
											<td>{{ $item->organization_name }}</td>

											</td> 
											</tr>
										@endforeach

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

@endsection