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
        $profilePic = Auth::user()->profilePic;
        $completed_orders = order::where('EventState','=','Completed')->count();
        $in_progress_orders = order::where('EventState','=','In Progress')->count();
        $cancelled_orders = order::where('EventState','=','Cancelled')->count();
        $new_orders = order::where('EventState','=','Not Started')->count();
        return view('admin',[
            'profilePic' =>$profilePic,
            'new_orders' =>$new_orders,
            'completed_orders' => $completed_orders,
            'in_progress_orders' =>$in_progress_orders,
            'cancelled_orders' =>$cancelled_orders
        ]);
    }

    public function addOrder() {
        $profilePic=Auth::user()->profilePic;
        $totalOrders=order::all()->count();
        $totalOrders++;
        return view('addOrder',[
            'id'=>$totalOrders,
            'profilePic'=>$profilePic
        ]);
    }

    public function newOrders() {
        $profilePic = Auth::user()->profilePic;
        $orders = order::where('EventState', '=' ,'Not Started')->paginate(10);
        return view('orders',[
            'orders'=>$orders,
            'profilePic'=>$profilePic
        ]);
    }

    public function orderPost(Request $req) {
        $profilePic = Auth::user()->profilePic;
        $order = order::where('id',$req->input('searchBar'))->paginate(10);
        return view('orders',[
                'orders'=>$order,
                'profilePic'=>$profilePic
        ]);
    }

    public function completedOrders() {
        $profilePic = Auth::user()->profilePic;
        $orders = order::where('EventState', '=' ,'Completed')->paginate(10);
        return view('orders',[
            'orders'=>$orders,
            'profilePic'=>$profilePic
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
        $profilePic = Auth::user()->profilePic;
        $menus = customerMenu::paginate(10);
        return view('menus',[
            'menus'=>$menus,
            'profilePic'=>$profilePic
        ]);
    }
    public function menuPost(Request $req) {
        $profilePic = Auth::user()->profilePic;
        $menus = customerMenu::where('OrderID',$req->input('searchBar'))->paginate(10);
        return view('menus',[
                'menus'=>$menus,
                'profilePic'=>$profilePic
        ]);
    }
    public function customerMenu()  {
        $profilePic = Auth::user()->profilePic;
        $orders=null;
        return view('customerMenu',[
            'order'=>$orders,
            'profilePic'=>$profilePic
            ]);
    }

    public function CustomerMenuPost(Request $req) {
        try {
            $profilePic = Auth::user()->profilePic;
            $orders = order::findOrFail($req->input('searchBar'));

            $menus = customerMenu::where('OrderID',$req->input('searchBar'))->get();
            if ($menus->count()==0) {
                $menus=null;
            }
            return view('customerMenu',[
                'order'=>$orders,
                'menus'=>$menus,
                'profilePic'=>$profilePic
            ]);
        } catch( Exception $ex) {
            $orders=null;
            return view('customerMenu',[
                'order'=>$orders,
                'profilePic'=>$profilePic
            ]);
        }
    }

    public function orders() {
        $profilePic = Auth::user()->profilePic;
        $orders = order::paginate(10);
        return view('orders',[
            'orders'=>$orders,
            'profilePic'=>$profilePic
        ]);
    }

    public function profile() {
        $profilePic = Auth::user()->profilePic;
        $user = User::find(Auth::id());

         return view('profile',['User'=>$user,
            'profilePic'=>$profilePic
         ]);
    }

    public function addOrderPost(Request $req) {
        $req->validate([
            'name' =>'required',
            'contact' => 'required'
        ]);
        $order=new Order();
        $order->CustomerName = $req->input('name');
        $order->ContactNo = $req->input('contact');
        $order->EventState = $req->input('EventState');
        $order->EventType = $req->input('EventType');
        $order->Bill = 0;
        $order->save();
        return redirect('addCustomerMenu');
    }

    public function addCustomerMenu() {
        $profilePic=Auth::user()->profilePic;
        $totalOrders=order::all()->count();
        $totalOrders++;
        return view('addCustomerMenu',[
            'id'=>$totalOrders,
            'profilePic'=>$profilePic
        ]);
    }
}