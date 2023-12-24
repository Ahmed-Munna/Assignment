@extends('layouts.home_app') <!-- Adjust this based on your layout setup -->

@section('content')
   <div class="container min-vh-100">
       <div class="row justify-content-center">
          <div class="col-md-6">

                <div class="">
                    <h3 class="text-center">Checkout Page</h3>
                    <h3 class="text-center">Coach Name: {{$coach_name}}-[{{$coach_type}}]</h3>
                    <form action="{{ route('checkoutFinal') }}" method="post">
                       @csrf
                       <input type="text" class="form-control" name="user_id" value="{{$user_id}}" hidden>
                       <input type="text" class="form-control" name="bus_id" value="{{$bus_id}}" hidden>
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="text" class="form-control" name="from" value="{{$from}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="text" class="form-control" name="to" value="{{$to}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="doj">Jurny Date</label>
                            <input type="text" class="form-control" name="doj" value="{{$doj}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="seat">Seats [Available seat(s)-{{$available_seat}}]</label>
                            <input type="number" class="form-control" name="seat" id="seatInput" max="4" oninput="calculateAmount()">
                            <input type="text" class="form-control" name="fare" id="fareInput" value="{{$fare}}" hidden>
                        </div>
                        <div class="form-group">
                            <label for="amount">Total Amount</label>
                            <input type="text" class="form-control" name="amount" id="amount" readonly>
                        </div>


                    <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>

			</div>
        </div>	
</div>
<script>
    function calculateAmount() {
        // Get the value of the seat input
        var seatInput = document.getElementById('seatInput').value;
        var fareInput = document.getElementById('fareInput').value;

        // Calculate the total amount (assuming $1000 per seat)
        var amount = seatInput * fareInput;

        // Update the value of the "Total Amount" input field
        document.getElementById('amount').value = amount;
    }
</script>
@endsection