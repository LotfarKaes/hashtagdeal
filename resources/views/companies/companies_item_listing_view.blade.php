@extends('companies.companies_dashboard')
@section('companies')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">All type of item listing view</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add item</li>
                </ol>
            </nav>
        </div>

</div>


<section>
    <div class="row">
        <hr class="hr-style">
        <sapn class="pe-3 listing-title-css "> <i class="bx bxl-product-hunt mt-3 mb-3 listing-title-css"></i>Add product</sapn>
        <div class="item-listing-circle">
            <a href="{{ route('companies.basic.product.add') }}"><i class="bx bx-package bx-md"><diV class="circle-font-css">Basic product</div></i></a>
            <a href="#"><i class="bx bxs-package bx-md"><diV class="circle-font-css">Tools & Hardware</div></i></a>
            <a href="#"><i class="bx bx-box bx-md"><diV class="circle-font-css">Mother, Kids & Toys</div></i></a>
            <a href="#"><i class="bx bxs-box bx-md"><diV class="circle-font-css">Vehicle Parts & Accessories</div></i></a>
            <a href="#"><i class="bx bx-home bx-md"><diV class="circle-font-css">Home & Garden</div></i></a>
        </div>
    </div>
    <div class="row pt-5">
        <hr class="hr-style">
        <sapn class="pe-3 listing-title-css "> <i class="bx bx-grid mt-3 mb-3 listing-title-css"></i>Add job</sapn>
        <div class="item-listing-circle">
            <a href="#"><i class="bx bx-briefcase-alt-2 bx-md"><diV class="circle-font-css">Basic job post</div></i></a>
            <a href="#"><i class="bx bxs-briefcase-alt-2 bx-md"><diV class="circle-font-css">IT job post</div></i></a>
            <a href="#"><i class="bx bx-briefcase bx-md"><diV class="circle-font-css">Busniess Job</div></i></a>
            <a href="#"><i class="bx bxs-briefcase bx-md"><diV class="circle-font-css">Sales job</div></i></a>
            <a href="#"><i class="bx bx-briefcase-alt bx-md"><diV class="circle-font-css">Degital marketing</div></i></a>
        </div>
    </div>

    <div class="row pt-5">
        <hr class="hr-style">
        <sapn class="pe-3 listing-title-css "> <i class="bx bx-cog mt-3 mb-3 listing-title-css"></i>Add service</sapn>
        <div class="item-listing-circle">
            <a href="#"><i class="bx bx-group bx-md"><diV class="circle-font-css">Basic service</div></i></a>
            <a href="#"><i class="bx bxs-group bx-md"><diV class="circle-font-css">Expert service</div></i></a>
            <a href="#"><i class="bx bx-group bx-md"><diV class="circle-font-css">Quick service</div></i></a>

        </div>
    </div>

    <div class="row pt-5 pb-5">
    <hr class="hr-style">
        <sapn class="pe-3 listing-title-css "> <i class="bx bx-task mt-3 mb-3 listing-title-css"></i>Add Project</sapn>
        <div class="item-listing-circle">
            <a href="#"><i class="bx bx-book-content bx-md"><diV class="circle-font-css">Basic Job post</div></i></a>
            <a href="#"><i class="bx bxs-book-content bx-md"><diV class="circle-font-css">IT Job post</div></i></a>
            <a href="#"><i class="bx bx-book-open bx-md"><diV class="circle-font-css">Busniess Job</div></i></a>
            <a href="#"><i class="bx bxs-book-open bx-md"><diV class="circle-font-css">Sales job</div></i></a>
            <a href="#"><i class="bx bx-book-content bx-md"><diV class="circle-font-css">Degital marketing</div></i></a>
        </div>
    </div>
</section>
    
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