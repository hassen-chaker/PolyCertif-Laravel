<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;
use App\Models\like;


class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            $data = product::paginate(3);
            $user=auth()->user();
            $count=cart::where('phone',$user->phone)->count();

            return view('user.home',compact('data','count'));
        }
    }
    /****************index****************** */
    public function index()
    { 
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
             $data = product::paginate(3);
            return view('user.home',compact('data'));
        }

    }


/***************Search**************** */
        public function search(Request $request)
        {
            $search=$request->search;

            if($search=='')
            {
                $data = product::paginate(3);
                return view('user.home',compact('data'));
            }

            $data=product::where('title','Like','%'.$search.'%')->get();

            return view('user.home',compact('data'));
        }



/*****************Participate*************** */
        public function participate(Request $request ,$id)
        {
            if(Auth::id())
            {

                $user=auth()->user();

                $product=product::find($id);

                $cart=new cart;
                $cart->name=$user->name;
                $cart->phone=$user->phone;
                $cart->address=$user->address;
                $cart->certificate_title=$product->title;
                $cart->save();
                

                return redirect()->back()->with('message','Participate Successfully');

            }
            else
            {
                return redirect('login');
            }

        }

        /***************showcart************* */
        public function showcart()
        {

            $user=auth()->user();
            $cart=cart::where('phone',$user->phone)->get();
            $count=cart::where('phone',$user->phone)->count();


            return view('user.showcart',compact('count','cart'));
        }

        public function deletecart($id)
        {
            $data=cart::find($id);
            $data->delete();
            return redirect()->back()->with('message','Participation Removed Successfully');
        }


/****************detail*************** */
public function detail($id)
{
    $data=product::find($id);
    return view('user.detail',compact('data'));
    
}




  public function test()
{
   
    return view('user.test');
}
/****************like*********** */

public function like(Request $request ,$id)
{
    if(Auth::id())
    {

        $user=auth()->user();

        $product=product::find($id);

        $like=new like;
        $like->user_id=$user->user_id;
        $like->post_id=$user->post_id;
        $like->like=$user->like;
  
        $like->save();
        

        return redirect()->back()->with('message','You like this post');

    }
    else
    {
        return redirect('login');
    }

}

////**************************show like */
public function showlike()
{

    $user=auth()->user();
    $like=like::where('like',$user->like)->get();
    $count=like::where('like',$user->like)->count();


    return view('user.product',compact('count','like'));
}

}
