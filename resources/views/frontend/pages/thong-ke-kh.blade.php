<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chartisan example</title>
    {{-- <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

{{-- <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script> --}}
  </head>
  <body>
    <div id="chart" style="height: 250px;"></div>

<script>
    // Morris.Bar({
    //   element: 'chart',
    //   data: [
    //     { date: 'Mon 1', value: 3 },
    //     { date: 'Mon 2', value: 10 },
    //     { date: 'Mon 3', value: 5 },
    //     { date: 'Mon 4', value: 47 },
    //     { date: 'Mon 5', value: 6 },
    //     { date: 'Mon 6', value: 6 },
    //     { date: 'Mon 7', value: 6 },
    //     { date: 'Mon 8', value: 6 },
    //     { date: 'Mon 9', value: 66 },
             
    //   ],
    //   xkey: 'date',
    //   ykeys: ['value'],
    //   labels: ['Orders']
    // });

    $(function() {

  // Create a Bar Chart with Morris
  var chart = Morris.Bar({
    // ID of the element in which to draw the chart.
    element: 'chart',
    data: [0, 0], // Set initial data (ideally you would provide an array of default data)
    xkey: 'name', // Set the key for X-axis
    ykeys: ['total'], // Set the key for Y-axis
    labels: ['Số '] // Set the label when bar is rolled over
  });

  // Fire off an AJAX request to load the data
  $.ajax({
      type: "GET",
      dataType: 'json',
      url: "api", // This is the URL to the API
      // data: { days: 7 } // Passing a parameter to the API to specify number of days
        })
        .done(function( data ) {
          console.log(data);
          // When the response to the AJAX request comes back render the chart with new data
          chart.setData(data);
        })
        .fail(function() {
          // If there is no communication between the server, show an error
          alert( "error occured" );
        });
    });
</script>
  </body>
</html>