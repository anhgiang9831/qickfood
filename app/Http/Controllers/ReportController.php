<?php

namespace App\Http\Controllers;
use App\OrderDetail;
use DB;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
     $data = DB::table("orders_detail")
    ->select('products.*', 'orders_detail.*', DB::raw('SUM(orders_detail.qty) as total'))->
    join('products','orders_detail.pro_id', '=', 'products.id')
    ->where('orders_detail.id', '>', 0)->

    groupBy("orders_detail.pro_id")->orderBy('total','DESC')
          

    ->limit(10)->get();
    $data_kh = DB::table("orders")
    ->select('orders.*', DB::raw('SUM(orders.qty) as total'))
    ->where('orders.id', '>', 0)->

    groupBy("orders.name")->orderBy('total','DESC')
          

    ->limit(10)->get();
        return view('backend.report.bao-cao', compact('data', 'data_kh'));
    }

    public function getBanHangThang(Request $request)
    {
        $thang = $request->thang;
        $data= OrderDetail::whereMonth('created_at', '=', $thang)->get();
        return view('backend.report.doanh-so-ban-thang', compact('data','thang'));
    }

    public function thongKeThang ()
    {
        return view('backend.report.thong-ke-thang');
    }
}
