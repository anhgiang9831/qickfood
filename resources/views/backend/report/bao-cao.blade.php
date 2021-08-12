@extends('backend.master')
@section("title-page", "Thống kế")
@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<h3>Thống kê số lượng món bán chạy</h3>
 <div id="chart" style="height: 250px;margin-bottom: 60px;"></div>
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
    labels: ['Số lượng bán'] // Set the label when bar is rolled over
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
        <div class="table-responsive text-center">
                
                <table id="product_table" class="table">
                    <thead>
                    <tr>
                       

                        <th>Tên món</th>
                        <th>Số lượng bán </th>
                       
                    </tr>
                    </thead>
                    <tbody id="myTable">

                    @foreach($data as $item)
                        <tr style="text-align:left;">
                            <td>
                                {{ $item->name }}
                            </td>
                            
                            <td>{{ $item->total }}</td>

                            


                        </tr>
                    @endforeach

                    </tbody>
                </table>

              
            </div>
<div class="clear:both"></div>
            <h3>Thống kê khách hàng mua nhiều nhất</h3>
       <div id="chartKH" style="height: 250px;margin-bottom: 60px;"></div>

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
    element: 'chartKH',
    data: [0, 0], // Set initial data (ideally you would provide an array of default data)
    xkey: 'name', // Set the key for X-axis
    ykeys: ['total'], // Set the key for Y-axis
    labels: ['Số lượng mua'] // Set the label when bar is rolled over
  });

  // Fire off an AJAX request to load the data
  $.ajax({
      type: "GET",
      dataType: 'json',
      url: "api-kh", // This is the URL to the API
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
<div class="table-responsive text-center">
                
                <table id="product_table" class="table">
                    <thead>
                    <tr>
                       

                        <th>Tên KH</th>
                        <th>Số lượng mua </th>
                       
                    </tr>
                    </thead>
                    <tbody id="myTable">

                    @foreach($data_kh as $item)
                        <tr style="text-align:left;">
                            <td>
                                {{ $item->name }}
                            </td>
                            
                            <td>{{ $item->total }}</td>

                            


                        </tr>
                    @endforeach

                    </tbody>
                </table>

              
            </div>
@endsection