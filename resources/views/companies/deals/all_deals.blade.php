@extends('companies.companies_dashboard')
@section('companies')


<style>
.table-column-value{
	padding-top: 18px !important;
}
</style>
<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">All Deals</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Deals</li>
							</ol>
						</nav>
					</div>


					<div style= "padding-left:100px;">
						<a href="{{ route('companies.add.deals')}}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Deal</a> 	
						<a href="{{ route('companies.import.view')}}" class="btn btn-secondary"><i class="fa-solid fa-file-import"></i> Import file</a> 			
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
					</div>
				</div>
 

				 
			</div>




@endsection