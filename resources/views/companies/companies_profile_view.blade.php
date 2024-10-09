@extends('companies.companies_dashboard')
@section('companies')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">companies User Profile</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">companies Profile</li>
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
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ (!empty($companiesData->photo)) ? url('upload/companies_images/'.$companiesData->photo):url('upload/no_image.jpg') }}" alt="sales" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3">
                                    <h4>{{$companiesData->name}}</h4>
                                    <p class="text-secondary mb-1">{{$companiesData->location}}</p>
              
                                </div>
                            </div>
                            <hr class="my-4" />

                            <div class="py-3 px-2">
                            <h6 class="mb-2">About</h6>
                                    <div class="text-secondary">{{$companiesData->about_info}}</div>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-2">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                    <span class="text-secondary">{{$companiesData->website}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-2">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;" class="me-2"><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg>LinkedIn</h6>
                                    <span class="text-secondary">{{$companiesData->social_link}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-2">
                                    <h6><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;" class="me-2"><path d="M16.75 2h-10c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-10 18V4h10l.002 16H6.75z"></path><circle cx="11.75" cy="18" r="1"></circle></svg>Phone</h6>
                                    <span class="text-secondary">{{$companiesData->phone}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap px-2">
                                <h6><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;" class="me-2"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>Email</h6>
                                    <span class="text-secondary">{{$companiesData->email}}</span>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">

                        <form method="post" action="{{ route('companies.profile.store') }}" enctype="multipart/form-data" >
                            @csrf

                            <div class="row mb-3">
                                <div class="col-sm-3 pt-2">
                                    <h6 class="mb-0">User name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$companiesData->username}}" disabled />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Company name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="name" class="form-control" value="{{$companiesData->name}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Company size</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="company_size" class="form-control" value="{{$companiesData->company_size}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Location</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <select name="location" class="form-select mb-3" aria-label="Default select example">
                                    <option value="Copenhagen" {{ $companiesData->location == 'Copenhagen'  ? 'selected' : '' }} >Copenhagen</option>
                                    <option value="Arthus" {{ $companiesData->location == 'Arthus'  ? 'selected' : '' }} >Arthus</option>
                                    <option value="Malmo" {{ $companiesData->location == 'Malmo'  ? 'selected' : '' }} >Malmo</option>
                                    <option value="Lund" {{ $companiesData->location == 'Lund'  ? 'selected' : '' }} >Lund</option>
                                    <option value="Stockholm" {{ $companiesData->location == 'Stockholm'  ? 'selected' : '' }} >Stockholm</option>
                                </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email"  name="email" class="form-control" value="{{$companiesData->email}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="phone" class="form-control" value="{{$companiesData->phone}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="address" class="form-control" value="{{$companiesData->address}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">About</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea name="about_info" class="form-control" id="inputAddress2" placeholder="About me " rows="3">{{$companiesData->about_info}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Founded</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="age" class="form-control" value="{{$companiesData->age}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Industry</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="position" class="form-control" value="{{$companiesData->position}}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Specialties</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="skills" class="form-control" value="{{$companiesData->skills}}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Website</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="website" class="form-control" value="{{$companiesData->website}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">LinkedIn</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="social_link" class="form-control" value="{{$companiesData->social_link}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Photo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="file" name="photo" class="form-control" id="image" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0"></h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <img id="showImage" src="{{ (!empty($companiesData->photo)) ? url('upload/companies_images/'.$companiesData->photo):url('upload/no_image.jpg') }}" alt="companies" style="width:100px; height: 100px;"  >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
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