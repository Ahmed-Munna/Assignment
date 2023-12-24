      $(document).ready(function() {
        let selectedSeats = 0;
        // if seat booked then btn disabled
        $(".booked").prop("disabled", true);
  
        $('.bus-seat').click(function() {
          const $this = $(this);  
          if (selectedSeats < 4 || $this.hasClass('selected')) {
            $this.toggleClass('selected');
            selectedSeats = $('.bus-seat.selected').length;
            updateTable();
          } else {
            // $this.addClass('disabled');
            alert ('You can select only 4 seats. Thank You')
          }
        });
        
        function updateTable() {
        var selectedValues = [];
        var sum = 0;
        var sl = 1;
            

        $(".bus-seat.selected").each(function () {
          selectedValues.push($(this).val());
        });

        var tableBody = $("#resultTable tbody");
        tableBody.empty();
        // ok

        if (selectedValues.length > 0) {
          for (var i = 0; i < selectedValues.length; i++) {
            // var values = selectedValues[i].split(', ');
            var button = selectedValues[i];
            var buttonValue = button.val();
            var values = buttonValue.split(', ');
            
            
            if (values.length >= 2) {
              
              var seat = values[0];
              var fare = values[1];
              
              var newRow = $("<tr><td>" + sl + "</td><td>" + seat + "</td><td>" + fare + "</td></tr>");
              tableBody.append(newRow);
              
            } sl=sl+1;
            
          }
          sl++ ;
          // serial=sl;
          // $("#counter").text(serial);
          currentSum = sum; // Update the current sum
          // Update the sum value in the span
          $("#sumValue").text(currentSum);
        } 
        // else {
          
        //   currentSum = 0; // Update the current sum
        //   // Update the sum value in the span
        //   $("#sumValue").text(currentSum);
        //   var newRow = $("<tr><td colspan='4' style='background-color: red;'>No Seat(s) selected.</td></tr>");
        //   tableBody.append(newRow);
        // }
      }
     // AJAX Operation For Inserting Data to DB
    $("#checkout-button").click(function() {
        var selectedValues = [];
        $(".bus-seat.selected").each(function () {
            selectedValues.push($(this).val());
        });

        $.ajax({
            type: "POST",
            url: "insert_selected_seats.php", // Replace with the actual path to your PHP script
            data: { selected_seats: selectedValues },
            success: function(response) {
                // Handle the response from the server if needed
            }
        });
    });

});
