// Create a Date object with Dhaka's timezone offset (Bangladesh Standard Time: UTC+6)
var currentDate = new Date();
currentDate.setHours(currentDate.getHours() + 6);

// Calculate the date 7 days from now
var next7Days = new Date(currentDate);
next7Days.setDate(currentDate.getDate() + 7);

// Format the dates to "YYYY-MM-DD" format
var formattedCurrentDate = currentDate.toISOString().slice(0, 10);
var formattedNext7Days = next7Days.toISOString().slice(0, 10);

// Set the minimum and maximum date attributes for the input element
document.getElementById("doj").setAttribute("min", formattedCurrentDate);
document.getElementById("doj").setAttribute("max", formattedNext7Days);


    // Get references to the select elements
    var fromSelect = document.getElementById("from");
    var toSelect = document.getElementById("to");

    // Add an event listener to the "from" select element
    fromSelect.addEventListener("change", function () {
        // Get the selected option value
        var selectedValue = fromSelect.value;

        // Loop through the "to" select options and remove the selected value
        // for (var i = 0; i < toSelect.options.length; i++) {
        //     if (toSelect.options[i].value === selectedValue) {
        //         toSelect.options[i].disabled = true;
        //     } else {
        //         toSelect.options[i].disabled = false;
        //     }
        // }
		// Loop through the "to" select options and hide the selected value
        for (var i = 0; i < toSelect.options.length; i++) {
            if (toSelect.options[i].value === selectedValue) {
                toSelect.options[i].style.display = "none";
            } else {
                toSelect.options[i].style.display = "block";
            }
        }

    });
	toSelect.addEventListener("change", function () {
        // Get the selected option value
        var selectedValue = toSelect.value;
		// Loop through the "from" select options and hide the selected value
        for (var i = 0; i < fromSelect.options.length; i++) {
            if (fromSelect.options[i].value === selectedValue) {
                fromSelect.options[i].style.display = "none";
            } else {
                fromSelect.options[i].style.display = "block";
            }
        }


    });