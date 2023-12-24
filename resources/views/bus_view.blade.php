<!-- bus_view.blade.php -->

@extends('layouts.home_app') <!-- Adjust this based on your layout setup -->

@section('content')
   <div class="container min-vh-100">
       <div class="row">
          <div class="col-12">
            <div class="shadow p-3 mt-3 bg-body rounded alert-primary">
                <p>Total Number of Buses: {{ $total_no }}</p>
              <h4><b><span class="alert-danger">Search Result :</span>Leaving From:</b>&nbsp;<span>{{$from}}</span>&nbsp;&nbsp;<b>Going To:</b>&nbsp;<span>{{$to}}</span> &nbsp;&nbsp;<br><b>Journey Date:</b>&nbsp;<span>{{$doj}}</span></h4>
            </div>
          </div>
        </div>
        <div class="row mt-2 mb-5">
			<div class="col-12 ">
				<div class="card mt-3 border border-primary ">
					<div class="card-body table-responsive">
                        <table class="table table-striped table-hover responsive">
                        <thead class="bg-info">
                            <tr>    
                                <th>Coach No</th>
                                <th>Starting Counter</th>                   
                                <th>Departing Time </th>
                                <th>End Counter</th> 
                                <th>Arrival Time</th>  
                                <th>Coach Type</th>                     
                                <th>Fare</th> 
                                <th>Seats Available</th>                           
                                <th>View</th>  
                            </tr>
                        </thead>
                        <tbody>

                            <tr> 
                            @if ($busInfoResults->isEmpty())
                                <td class='text-center' colspan='9'>No buses found for the selected criteria.</td>
                                @else
                                    @foreach ($busInfoResults as $bus)
                                    <td>{{ $bus->coach_name }}</td>
                                    <td>{{ $bus->boarding_point }}</td>
                                    <td>{{ $bus->boarding_time }}</td>
                                    <td>{{ $bus->dropping_point }}</td>
                                    <td>{{ $bus->dropping_time }}</td>
                                    <td>{{ $bus->coach_type }}</td>
                                    <td>{{ $bus->fare }}</td>
                                    <td>{{ $bus->total_seats-$total_ticket_sold}} /{{ $bus->total_seats }} </td>
                                    <td>
                                        <form action="{{ route('buy_now') }}" method="post">
                                            @csrf
                                            <input name="bus_id" value="{{ $bus->bus_id }}" hidden>
                                            <input name="coach_name" value="{{ $bus->coach_name }}" hidden>
                                            <input name="coach_type" value="{{ $bus->coach_type }}" hidden>
                                            <input name="boarding_point" value="{{ $bus->boarding_point }}" hidden>
                                            <input name="dropping_point" value="{{ $bus->dropping_point }}" hidden>
                                            <input name="doj" value="{{$doj}}" hidden>
                                            <input name="from" value="{{$from}}" hidden>
                                            <input name="to" value="{{$to}}" hidden>
                                            <input name="fare" value="{{ $bus->fare }}" hidden>
                                            
                                           
                                                @php
                                                    $difference = $total_ticket_sold - $bus->total_seats;
                                                @endphp
                                                <input name="available_seat" value="{{ $difference }}" hidden>
                                                @if ($difference >= 0)
                                                    <button type="submit" class="btn btn-danger btn-sm" disabled>Sold out</button>
                                                @else
                                                    <button type="submit" class="btn btn-success btn-sm">Buy Now</button>
                                                @endif
                                        </form>
                                     </td>
                                    @endforeach
                            @endif    
                              </tr>
                        </tbody>
                        </table>
					</div>
				  </div>
			</div>
        </div>	
</div>
@endsection