@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">AI Tool</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Generate by AI</li>
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
       
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="mt-3">
                                               
                                </div>
                            </div>
                            
                        <div class="profile-nav-info ">
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item"  style="padding-right: 150px;">
                                        <a class="nav-link active fw-bold" id="Description-tab" data-bs-toggle="tab" href="#Overview">AI Job post </a>
                                    </li>
                                    <li class="nav-item"  style="padding-right: 150px;">
                                        <a class="nav-link fw-bold" id="products-tab" data-bs-toggle="tab" href="#proposal">Proposal write by AI</a>
                                    </li>
                                    <li class="nav-item"  style="padding-right: 150px;">
                                        <a class="nav-link fw-bold" id="products-tab" data-bs-toggle="tab" href="#mail">AI mail</a>
                                    </li>
                                    <li class="nav-item"  style="padding-right: 150px;">
                                        <a class="nav-link fw-bold" id="jobs-info-tab" data-bs-toggle="tab" href="#cv">AI CV & Resume</a>
                                    </li>
                                    <li class="nav-item"  style="padding-right: 150px;">
                                        <a class="nav-link fw-bold" id="jobs-info-tab" data-bs-toggle="tab" href="#interview">AI interview questions</a>
                                    </li>
                                </ul>
                                
                                
                                
  <div class="tab-content shop_info_tab entry-main-content">
     <div class="tab-pane fade show active" id="Overview">
    <div class="form-body mt-4">                                
      <div class="row">
		   <div class="col-lg-12">
          <div class="border border-3 p-4 rounded">
        
          <div class="mb-4"><h5>Job details</h5></div>

        <div class="row g-3">   
        <div class="form-group mb-3 col-md-6">
				<label for="inputProductTitle" class="form-label">Job title</label><span class="required-label"> *</span>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" value="{{ $products->product_name ?? '' }}">
			  </div>

			  <div class="form-group mb-3 col-md-6">
				<label for="inputProductTitle" class="form-label">Company</label><span class="required-label"> *</span>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" value="{{ $products->product_name ?? '' }}">
			  </div>    
      </div>
			  
        <div class="row g-3">
        <div class="form-group mb-3 col-md-6">
				<label for="inputProductTitle" class="form-label">Workplace type</label><span class="required-label"> *</span>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" value="{{ $products->product_name ?? '' }}">
			  </div>

				  <div class="col-md-6">
				  <label for="inputProductType" class="form-label">Job location</label>
					<select name="brand_id" class="form-select" id="inputProductType">
						<option></option>
						<option value="1">Malmö</option>
						<option value="2">Stockholm</option>
						<option value="3">Lund</option>
						<option value="4">Copenhagen</option>
					  </select>
				  </div>
			 </div>

       <div class="mt-3"></div>
       
       <div class="col-md-6">
				  <label for="inputProductType" class="form-label">Job type</label>
					<select name="brand_id" class="form-select" id="inputProductType">
						<option></option>
						<option value="1">Part time</option>
						<option value="2">Full time</option>
						<option value="3">Temporary job</option>
						<option value="4">Parmanent</option>
					  </select>
				  </div>

       <div class="mt-5"></div>
        <div class="col-2">
					  <div class="d-grid">
					  	<input onclick="typeWriter()" type="submit" class="btn btn-secondary btn-sm " value=" ✨ Rewrite with AI" />
					  </div>
				  </div>
                    
        
        <div class="mt-5"></div>
        <div class="mb-10">
				<label for="inputProductDescription" class="form-label">Description</label><span class="required-label"> *</span>
				<textarea style="height:500px;" name="short_descp" class="form-control" id="inputProductDescription" rows="3"></textarea>
			  
			  </div>
       

    </div>
   
  </div>

  </div></div>
</div>
                                    


  <div class="tab-pane fade" id="proposal">
        <div class="form-body mt-4">                                
      <div class="row">
		   <div class="col-lg-12">
          <div class="border border-3 p-4 rounded">
        
          <div class="mb-4"><h5>Proposal write by AI</h5></div>

        <div class="row g-3">   
        <div class="form-group mb-3 col-md-6">
				<label for="inputProductTitle" class="form-label">Title</label><span class="required-label"> *</span>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" value="{{ $products->product_name ?? '' }}">
			  </div>

			  <div class="form-group mb-3 col-md-6">
				<label for="inputProductTitle" class="form-label">Company</label><span class="required-label"> *</span>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" value="{{ $products->product_name ?? '' }}">
			  </div>    
      </div>
			  
        <div class="row g-3">
        <div class="form-group mb-3 col-md-6">
				<label for="inputProductTitle" class="form-label">Workplace type</label><span class="required-label"> *</span>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" value="{{ $products->product_name ?? '' }}">
			  </div>

				  <div class="col-md-6">
				  <label for="inputProductType" class="form-label">Job location</label>
					<select name="brand_id" class="form-select" id="inputProductType">
						<option></option>
						<option value="1">Malmö</option>
						<option value="2">Stockholm</option>
						<option value="3">Lund</option>
						<option value="4">Copenhagen</option>
					  </select>
				  </div>
			 </div>

       <div class="mt-3"></div>
       
       <div class="col-md-6">
				  <label for="inputProductType" class="form-label">Job type</label>
					<select name="brand_id" class="form-select" id="inputProductType">
						<option></option>
						<option value="1">Part time</option>
						<option value="2">Full time</option>
						<option value="3">Temporary job</option>
						<option value="4">Parmanent</option>
					  </select>
				  </div>

       <div class="mt-5"></div>
        <div class="col-2">
					  <div class="d-grid">
					  	<input onclick="typeWriter()" type="submit" class="btn btn-secondary btn-sm " value=" ✨ Rewrite with AI" />
					  </div>
				  </div>
                    
        
        <div class="mt-5"></div>
        <div class="mb-10">
				<label for="inputProductDescription" class="form-label">Description</label><span class="required-label"> *</span>
				<textarea style="height:500px;" name="short_descp" class="form-control" id="inputProductDescription" rows="3"></textarea>
			  
			  </div>
    </div>
        </div>
                        

<script>
var i = 0;
var txt = ' \n\
        \n\
        About us \
        \n\
        \n\
        Talentme is an innovative and fast-growing recruiting agency dedicated to bridging the gap between talented professionals and leading companies. Based in Malmö, we pride ourselves on creating impactful digital solutions that simplify recruitment and empower career growth. \
        \n\
        \n\
        Job Overview \
        \n\
        \n\
        We are seeking a skilled and motivated Web Developer to join our team. In this role, you will work collaboratively with our development and design teams to build and maintain high-quality web applications that drive Talentmes digital transformation. If you have a passion for web development and a keen eye for clean and efficient code, we’d love to hear from you! \
        \n\
        \n\
        Key Responsibilities \
        \n\
        \n\
        Design, develop, and maintain web applications, ensuring optimal performance and responsiveness. \
        \n\
        Collaborate with designers and other developers to transform UI/UX designs into functional applications. \
        \n\
        Integrate third-party services and APIs as needed to enhance application functionality. \
        \n\
        Participate in code reviews and ensure coding best practices are followed. \
        \n\
        Stay updated on industry trends, emerging technologies, and best practices in web development. \
        \n\
        Requirements \
        \n\
        \n\
        Bachelor’s degree in Computer Science, Web Development, or a related field. \
        \n\
        2+ years of experience in web development, with a strong portfolio of past projects. \
        \n\
        Proficiency in HTML, CSS, JavaScript, and modern JavaScript frameworks (such as React or Vue.js). \
        \n\
        Familiarity with backend development using Node.js, Python, or similar languages. \
        \n\
        Stay updated on industry trends, emerging technologies, and best practices in web development. \
        \n\
        \n\
        How to Apply \
        \n\
        \n\
        If you are ready to take your career to the next level and join a passionate team, we would love to hear from you! Please send your resume, a cover letter, and a link to your portfolio to careers@talentme.com with the subject line “Web Developer Application – Malmö. \
        \n\
        ';

var speed = 5;

function typeWriter() {

  if (i < txt.length) {
    document.getElementById("inputProductDescription").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>


@endsection