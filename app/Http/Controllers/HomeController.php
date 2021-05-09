<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\customerMenu;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;

use Auth;

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

    public function orderPost(Request $req) {
        $order = order::where('id',$req->input('searchBar'))->paginate(10);
        return view('orders',[
                'orders'=>$order
        ]);
    }

    public function completedOrders() {
        $orders = order::where('EventState', '=' ,'Completed')->paginate(10);
        return view('orders',[
            'orders'=>$orders
        ]);
    }

    public function deleteOrder($id) {
        $order = order::find($id);
        $customerMenu = customerMenu::where('OrderID',$id)->delete();
        if ($order) {
            $order->delete();
        }
        return redirect('orders');
    }

     public function deleteMenu($id) {
        $customerMenu = customerMenu::find($id);
        if ($customerMenu) {
            $customerMenu->delete();
        }
        return redirect('menu');
    }

    public function menu()  {
        $menus = customerMenu::paginate(10);
        return view('menus',[
            'menus'=>$menus
        ]);
    }
    public function menuPost(Request $req) {
        $menus = customerMenu::where('OrderID',$req->input('searchBar'))->paginate(10);
        return view('menus',[
                'menus'=>$menus
        ]);
    }
    public function customerMenu()  {
        $orders=null;
        return view('customerMenu',['order'=>$orders]);
    }

    public function CustomerMenuPost(Request $req) {
        try {
            $orders = order::findOrFail($req->input('searchBar'));


            $menus = customerMenu::where('OrderID',$req->input('searchBar'))->get();
            return view('customerMenu',[
                'order'=>$orders,
                'menus'=>$menus
            ]);
        } catch( Exception $ex) {
            $orders=null;
            return view('customerMenu',['order'=>$orders]);
        }
    }

    public function orders() {
        $orders = order::paginate(10);
        return view('orders',[
            'orders'=>$orders
        ]);
    }

    public function profile() {
        $user = User::find(Auth::id());

         return view('profile',['User'=>$user]);
    }
}