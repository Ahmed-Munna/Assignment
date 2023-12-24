@extends('layouts.home_app')

    @section('content')
    <div class="container mt-5">
    <div class="row mt-5 mb-5">
			<div class="col-md-6 ">
				<div class="card mt-3 border border-primary ">
					<div class="card-body">
						<form action = "{{ route('bus_view') }}" method="POST">  
                        @csrf
						  <div class="form-group my-2">
							<label for="from">Boarding Point:</label>
							<select class="form-control" name="from" id="from" required>
								<option value="">Select Boarding Point</option>
                                @foreach($busStops as $stopName)
                                    <option value="{{ $stopName }}">{{ $stopName }}</option>
                                @endforeach
							</select>
						   </div>
														
						   <div class="form-group my-2">
							<label for="to">Dropping Point:</label>
							<select class="form-control" name="to" id="to" required>
								<option value="">Select Dropping Point</option>
                                @foreach($busStops as $stopName)
                                    <option value="{{ $stopName }}">{{ $stopName }}</option>
                                @endforeach
							</select>
						   </div>
							
							<div class="my-2"> 
								<label for = "doj"> Date Of Journey: </label>  
								<input type = "date"  id="doj" class = "form-control" name = "doj" placeholder = "Select Date Of Journey" required>  
							</div>   
							<button type = "submit" name="submit" class = "btn btn-danger text-center"> Search Bus </button>  
							</form>   
					</div>
				  </div>
				
			</div>
			<div class="col-md-4 order-first order-md-last">
				<span><img src="{{asset('assets/img/home_bus.jpg')}}" alt="Image Missing" style="width: 500px; height: 300px;" ></span>
			  </div>
		  </div>
    </div>
    @endsection
