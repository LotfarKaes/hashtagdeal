<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('adminbackend/assets/images/favicon-32x32.png') }} " type="image/png" />
	<!--plugins-->
	<link href="{{ asset('adminbackend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('adminbackend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('adminbackend/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('adminbackend/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('adminbackend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('adminbackend/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('adminbackend/assets/css/icons.css') }}" rel="stylesheet">
	<title>Admin login</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<!-- <img src="{{ asset('adminbackend/assets/images/logo-img.png') }}" width="180" alt="" /> -->
							<h4 class="logo-text">#TagDeals</h4>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign up to hire talent or find work</h3>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
										<span>Sign up with LinkednIn</span>	
										</a> 
										<a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign up with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR</span>
										<hr/>
									</div>
                        <div class="form-body">
                            <form id="myForm"  class="row g-3" method="POST" action="{{ route('add.register') }}">
                                @csrf
                                <div class="row g-3">
                                    <div class="form-group col-md-6">
                                        <label for="inputPrice" class="form-label fw-bold">Full name</label>
                                        <input type="text" name="name" class="form-control" id="inputPrice" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCompareatprice" class="form-label fw-bold">User name </label>
                                        <input type="text" name="username" class="form-control" id="inputCompareatprice" placeholder="">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label fw-bold">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label fw-bold">Enter Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input required="" type="password" name="password" class="form-control border-end-0" id="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label fw-bold">Enter Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input required="" type="password" name="password_confirmation" class="form-control border-end-0" id="password_confirmation" placeholder="Confirm password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputProductType" class="form-label fw-bold">Registration with</label>
                                        <select name="role" class="form-select" id="inputProductType">
                                            <option></option>
                                            <option value="companies">Company</option>
                                            <option value="sales">Worker</option>
                                        </select>
                                </div>


                                    <div class="col-md-12">
                                        <input class="form-check-input" name="hot_deals" type="checkbox" value="1" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault"> Send me helpful emails.</label>
                                            </div>
                                     

                                        <div class="col-md-12">
                                                <input class="form-check-input" name="featured" type="checkbox" value="1" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Yes, I understand and agree to the HashTagDeal Terms of Service.</label>
                                        </div>
                             



                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success"><i class="bx bxs-lock-open"></i>Create my account</button>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                                <label class="form-check-label" for="flexCheckDefault"> Already have an account?</label><a href="{{ route('login') }}"> Log In</a>
                                        </div>

                               

                            </form>
                        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>

    <script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                first_name: {
                    required : true,
                }, 
                 last_name: {
                    required : true,
                }, 
                 email: {
                    required : true,
                }, 
                registration: {
                    required : true,
                }, 
                 
 
            },
            messages :{
                first_name: {
                    required : 'Please Enter First Name',
                },
                last_name: {
                    required : 'Please Enter Last Name',
                },
                email: {
                    required : 'Please Select Email',
                },
                password: {
                    required : 'Please Enter Your Password',
                },
                registration: {
                    required : 'Please Select Role',
                }, 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('adminbackend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('adminbackend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ asset('adminbackend/assets/js/app.js') }}"></script>
</body>

</html>