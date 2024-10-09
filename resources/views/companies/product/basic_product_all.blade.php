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
					<div class="breadcrumb-title pe-3">All Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Product</li>
							</ol>
						</nav>
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
				<th>Image </th>
				<th>Product Name </th>
				<th>Price </th>
				<th>QTY </th>
				<th>Discount </th>
				<th>Status </th> 
				<th>Action</th> 
			</tr>
		</thead>
		<tbody>
		@foreach($products as $key => $item)		
			<tr>
				<td class="table-column-value"> {{ $key+1 }} </td>				
				<td> <img src="{{ asset($item->product_thambnail) }}" style="width: 70px; height:40px;" >  </td>
				<td class="table-column-value">{{ $item->product_name }}</td>
				<td class="table-column-value">{{ $item->selling_price }}</td>
				<td class="table-column-value">{{ $item->product_qty }}</td>
				<td class="table-column-value">{{ $item->discount_price }}</td>

				<td class="table-column-value"> @if($item->status == 1)
					<span class="badge rounded-pill bg-success">Active</span>
					@else
					<span class="badge rounded-pill bg-danger">InActive</span>
					@endif
				   </td>
				
				<td class="table-column-value">
			
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
		<tfoot>
			<tr>
				<th>Sl</th>
				<th>Image </th>
				<th>Product Name </th>
				<th>Price </th>
				<th>QTY </th>
				<th>Discount </th>
				<th>Status </th> 
				<th>Action</th> 
			</tr>
		</tfoot>
	</table>
						</div>
					</div>
				</div>
 

				 
			</div>




@endsection