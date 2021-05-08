<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $completed_orders = order::where('EventState','=','Completed')->count();
        $in_progress_orders = order::where('EventState','=','In Progress')->count();
        $cancelled_orders = order::where('EventState','=','Cancelled')->count();
        $new_orders = order::where('EventState','=','Not Started')->count();
        return view('admin',[
            'new_orders' =>$new_orders,
            'completed_orders' => $completed_orders,
            'in_progress_orders' =>$in_progress_orders,
            'cancelled_orders' =>$cancelled_orders
        ]);
    }

    public function newOrders() {
        $orders = order::where('EventState', '=' ,'Not Started')->paginate(10);
        return view('orders',[
            'orders'=>$orders
        ]);
    }

    public function completedOrders() {
        $orders = order::where('EventState', '=' ,'Completed')->paginate(10);
        return view('orders',[
            'orders'=>$orders
        ]);
    }

    public function orders() {
        $orders = order::paginate(10);
        return view('orders',[
            'orders'=>$orders
        ]);
    }
}