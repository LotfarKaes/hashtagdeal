@extends('sales.sales_dashboard')
@section('sales')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAudJEgdf5Mc0-FZJXFeiU6CP6NlG4hh3o&callback=initMap" async defer></script>
<script src="https://use.fontawesome.com/releases/v6.2.0/js/all.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sales User Profile</div>

        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sales Profile</li>
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
                
            

            @foreach($mapData as $data)
            @once
                <div class="col-lg-4">
                <input  name="salerId" value="{{$data->id}}" type="hidden"/>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ (!empty($data->photo)) ? url('upload/companies_images/'.$data->photo):url('upload/no_image.jpg') }}" alt="sales" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3 pb-3">
                               
                                    <h4>{{$data->name}}</h4>
                                    <p class="text-secondary mb-1">{{$data->address}}</p>
                                </div>
                            <div>
                               

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <span class="btn btn-sm border border-warning border-3 btn btn-primary btn-md rounded-pill">{{$data->name}}</span>
                                    <span class="btn btn-sm border border-warning border-3 btn btn-primary btn-md rounded-pill">Software</span>
                                    <span class="btn btn-sm border border-warning border-3 btn btn-primary btn-md rounded-pill">dev</span>
                                    <span class="btn btn-sm border border-warning border-3 btn btn-primary btn-md rounded-pill">Php</span>
                                </div>
                            </div>



                                </div>
                            </div>
                                <hr class="my-4" />

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
                            
                            <div class="row"></div>
        

                        </div>
                    </div>
                </div>

                @endonce
                @endforeach
   




                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">

                        <form method="post" action="{{ route('sales.profile.store') }}" enctype="multipart/form-data" >
                            @csrf

                         

                            <div id="map"></div>
                            </div>
                            
                            <!-- <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                </div>
                            </div> -->
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

<!-- 
<script>
        // Array of user locations from the server-side (PHP)
        var locations = @json($locations);

        // Initialize and add the map
        function initMap() {
            // Map options

            //console.log(locations[0].lat);

            var latitude = locations[0].lat;
            var longitude = locations[0].lng;
           
            var options = {
                zoom: 10, // Set the zoom level
                center: { lat: latitude, lng: longitude }, // Center of the map (USA)
            };

            // Create a map object
            var map = new google.maps.Map(document.getElementById('map'), options);

            // Loop through the locations array and place markers
            locations.forEach(function(location) {
                addMarker(location);
            });
            
            // Add Marker Function
            function addMarker(coords) {
                var marker = new google.maps.Marker({
                    position: coords, // Latitude and Longitude
                    map: map,         // The map object
                   
                });
            }
        }
    </script> -->


<!-- Another map view interface creation  -->

<script>

async function initMap() {
  // Request needed libraries.
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  var locations = @json($locations);

  console.log(locations);

//   var latitude = parseFloat(locations[0].latitude);
//   var longitude = parseFloat(locations[0].longitude);
           
  const center = locations[0].position;


  const map = new Map(document.getElementById("map"), {
    zoom: 11,
    center,
    mapId: "4504f8b37365c3d0",
  });

  //var properties = @json($locations);

    for (const property of locations) {
    const AdvancedMarkerElement = new google.maps.marker.AdvancedMarkerElement({
      map,
      content: buildContent(property),
      position: property.position,
      title: property.description,
    });

    AdvancedMarkerElement.addListener("click", () => {
      toggleHighlight(AdvancedMarkerElement, property);
    });
  }
}


function toggleHighlight(markerView, property) {
  if (markerView.content.classList.contains("highlight")) {
    markerView.content.classList.remove("highlight");
    markerView.zIndex = null;
  } else {
    markerView.content.classList.add("highlight");
    markerView.zIndex = 1;
  }
}

function buildContent(property) {
  const content = document.createElement("div");
  var basePath = $('#basePath').val();

  var imgDomain = basePath+'upload/companies_images/'+property.photo;
  var noImgDomain = basePath+'upload/no_image.jpg';
  let photo = property.photo == null ? noImgDomain : imgDomain;
  content.classList.add("property");
  content.innerHTML = `

  <div class="icon">
    <img src="${photo}" alt="sales" class="rounded-circle p-1 bg-primary" width="60">
    <span class="fa-sr-only">${property.type}</span>
    </div>
    <div class="details">
        <div class="price">${property.name}</div>
        <div class="address">${property.profession}</div>
        <div class="">
        <div>
            <span>About: ${property.description}</span>
        </div>
        <div>
            <span>Skills: ${property.skills}</span>
        </div>

       
        <button type="submit" class="btn-xs px-1 rounded-pill" id="company-id-map" name="company_id" value="${property.id}">Show profile</button>
       

        </div>
    </div>

    `;
  return content;
}

initMap();



// $('#company-id-map').on('click', function (event) {
//     event.preventDefault();
//     $.ajax({
//         method: 'POST',
//         url: urlVisit,
//         data: {
//             place_id: $(event.target).data("id"),
//             _token: token
//         }
//     }).done(function() {
//         // add button change here
//         // select the buttons I'd and manipulate e.g.
//        $('#buttonID').html('change');
//    });
// });



 </script>

@endsection