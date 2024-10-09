<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@extends('companies.companies_dashboard')
@section('companies')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

<!-- Modal -->
<div class="modal fade" id="eventsModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Booking time</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <input type="text" class="form-control" id="title">
       <span id="titleError" class="text-danger"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <div class="container">
    <div class="main-body">
            <div class="row">
            <div id='calendar'></div>
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

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script>

    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });  


        var event = @json($events);
        //console.log(events);
        $('#calendar').fullCalendar({
            header:{
                left:'prev,next today',
                right:'title',
                center:'month,agendaWeek,agendaDay'
            },

            events:event,
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDays) {
                $('#eventsModel').modal('toggle');
                
                $('#saveBtn').click(function() {
                    var title = $('#title').val();
                    var start_date = moment(start).format('Y-MM-DD HH:mm:ss');
                    var end_date = moment(end).format('Y-MM-DD HH:mm:ss');

                    $.ajax({
                        url:"{{ route('companies.event.store') }}",
                        type:"POST",
                        dataType:'json',
                        data:{ title, start_date, end_date },
                        success:function(response)
                        {
                            $('#eventsModel').modal('hide');
                            $('#calendar').fullCalendar('renderEvent', {
                                'title': response.title,
                                'start': response.start_date,
                                'end': response.end_date,

                            });
                            //console.log(response)
                        },
                        error:function(error)
                        {
                            if (error.responseJSON.errors) {
                                $('#titleError').html(error.responseJSON.errors.title);
                                
                            }
                        },
                       
                    });
         
                });
            },

            editable: true,
            eventDrop: function(event){
                var id = event.id;

                console.log(id);
                var start_date = moment(event.start).format('YYYY-MM-DD');
                var end_date = moment(event.end).format('YYYY-MM-DD');

                $.ajax({
                        url:"{{route('companies.event.update', '')}}/"+id,
                        type:"PATCH",
                        dataType:'json',
                        data:{start_date, end_date },
                        success:function(response)
                        {
                           
                            swal("Done!", "Event updated sucessfully!", "success");
                        },
                        error:function(error)
                        {
                            console.log(error)
                           
                        },
                       
                    });
         


                 //console.log(event);
            }
        })
    });
    </script>



@endsection