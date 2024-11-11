@extends('sales.sales_dashboard')
@section('sales')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<style>



</style>
<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sales encounters view</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">salers view</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">

        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
    <div class="main-body">
            <div class="row">
            @foreach($companiesData as $data)
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ (!empty($data->photo)) ? url('upload/companies_images/'.$data->photo):url('upload/no_image.jpg') }}" alt="sales" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3">
                               
                                    <h4>{{$data->name}}</h4>
                                    <p class="text-secondary mb-1">{{$data->address}}</p>
                                   
                                </div>
                            </div>

                         
                             <hr class="my-3" />

                            
                            
                        <div class="profile-nav-info ">
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Overview">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="products-tab" data-bs-toggle="tab" href="#Products">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="jobs-info-tab" data-bs-toggle="tab" href="#Jobs">Jobs</a>
                                    </li>
                                </ul>
                                
                                
                                
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Overview">
                                        <h1>OVERVIEW</h1>
                                    </div>
                                    

                                    <div class="tab-pane fade" id="Products">
                                        <h1>Prodcuts list</h1>
                                    </div>

                            
                                    <div class="tab-pane fade" id="Jobs">
                                      <h1>JOBS</h1>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                            
                        
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>


@endsection