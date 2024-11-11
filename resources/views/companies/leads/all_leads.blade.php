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
		@foreach($products as $key => $item)		
			<tr>
				<td> {{ $key+1 }} </td>				
				<td>{{ $item->product_name }}</td>
				<td>{{ $item->selling_price }}</td>
				<td>{{ $item->product_qty }}</td>
				<td>{{ $item->discount_price }}</td>
				<td>{{ $item->product_qty }}</td>
				<td>{{ $item->discount_price }}</td>

				<td> @if($item->status == 1)
					<span class="badge rounded-pill bg-success">Active</span>
					@else
					<span class="badge rounded-pill bg-danger">InActive</span>
					@endif
				   </td>


				   <td>{{$item->selling_price}}</td>
				   <td>LinkeIn</td>
				   <td>Company details</td>
				
				<td>
			
					<a href="{{ route('companies.edit.basic.product',$item->id) }}" title="Edit Data"> <i class="fa fa-pencil fa-xl" style="color:orange; padding-right:5px;"></i> </a>
					<a href="{{ route('delete.basic.product',$item->id) }}" id="delete" title="Delete Data" ><i class="fa fa-trash fa-xl" style="color:purple; padding-right:5px;"></i></a>			
					<a href="#" title="Details Page"> <i class="fa fa-eye fa-xl" style="color:gray; padding-right:5px;"></i> </a>
					
					@if($item->status == 1)
					<a href="{{ route('basic.product.inactive',$item->id) }}" title="Inactive"> <i class="fa-solid fa-thumbs-down fa-xl"></i> </a>
					@else
					<a href="{{ route('basic.product.active',$item->id) }}"  title="Active"> <i class="fa-solid fa-thumbs-up fa-xl"></i> </a>
					@endif




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