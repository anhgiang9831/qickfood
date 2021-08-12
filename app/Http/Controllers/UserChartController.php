<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Charts\UserChart;
use Charts;
use App\User;
use DB;
use App\Product;
class UserChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $usersChart = new UserChart;
        // $usersChart->labels(['Jan', 'Feb', 'Mar']);
        // $usersChart->dataset('Users by trimester', 'line', [10, 25, 13]);
        $data = Product::all() ->toJSON();
;
        // dd($data);
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();
                
        $chart = 1;
        return view('frontend.pages.thong-ke-kh', [ 'chart' => $chart ] );
    }


    public function getDataKH()
    {
         // $range = CarbonCarbon::now()->subDays($days);
    $stats = DB::table("orders_detail")
    ->select('products.*', 'orders_detail.*', DB::raw('SUM(orders_detail.qty) as total'))->
    join('products','orders_detail.pro_id', '=', 'products.id')
    ->where('orders_detail.id', '>', 0)->

    groupBy("orders_detail.pro_id")->orderBy('total','DESC')
          

    ->limit(10)->get();
    // dd($stats);
        return $stats;
    }

    public function getDataKHMua()
    {
        // code...
        $stats = DB::table("orders")
    ->select('orders.*', DB::raw('SUM(orders.qty) as total'))
    ->where('orders.id', '>', 0)->

    groupBy("orders.name")->orderBy('total','DESC')
          

    ->limit(10)->get();

    // dd($stats);
 return $stats;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
