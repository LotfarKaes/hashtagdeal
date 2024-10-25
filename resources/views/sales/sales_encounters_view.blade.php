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

                                    
                
                             <div class="py-3 px-2">
                            <h6 class="mb-2">About</h6>
                                    <div class="text-secondary">{{$data->about_info}}</div>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-2">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                    <span class="text-secondary">{{$data->website}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-2">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;" class="me-2"><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg>LinkedIn</h6>
                                    <span class="text-secondary">{{$data->social_link}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-2">
                                    <h6><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;" class="me-2"><path d="M16.75 2h-10c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-10 18V4h10l.002 16H6.75z"></path><circle cx="11.75" cy="18" r="1"></circle></svg>Phone</h6>
                                    <span class="text-secondary">{{$data->phone}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-2">
                                <h6><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;" class="me-2"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>Email</h6>
                                    <span class="text-secondary">{{$data->email}}</span>
                                </li>
                               
                            </ul>

                            <div class="py-2 px-2">
                                <h6 class="mb-1">Industry</h6>
                                <span class="mb-2">{{$data->position}}</span>
                            </div>
                            <div class="py-2 px-2">
                                <h6 class="mb-1">Specialties</h6>
                                <span class="mb-2">{{$data->skills}}</span>
                            </div>
                            <div class="py-2 px-2">
                                <h6 class="mb-1">Founded</h6>
                                <span class="mb-2">{{$data->age}}</span>
                            </div>

                            <div class="row">
                                <div class="w-50">
                                            <input type="submit" class="btn btn-secondary" value="Interested">
                                </div>
                            </div>
                                    
                            </div>
                                    

                                    <div class="tab-pane fade" id="Products">
                                        <h1>Prodcuts list</h1>
                                    </div>

                            
                                    <div class="tab-pane fade" id="Jobs">
                                        <table class="font-md">
                                            <tbody>
                                                <tr class="stand-up">
                                                    <th>Stand Up</th>
                                                    <td>
                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-wo-wheels">
                                                    <th>Folded (w/o wheels)</th>
                                                    <td>
                                                        <p>32.5″L x 18.5″W x 16.5″H</p>
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