<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Product;

class AdminController extends Controller
{
    public function product()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.product');
            }
            else
            {
                return redirect()->back();
            }
            
        }
        else 
        {
            return redirect('login');
        }
    }
//********************Uplaod ***************/

    public function uploadcertif(Request $request)
    {
        $data=new product;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('certifimage',$imagename);

        $data->image=$imagename;
         
        $data->title=$request->title;

        $data->domain=$request->domain;

        $data->description=$request->des;

        $data->save();

        return redirect()->back()->with('message','Certificate Added Successfully');

    }

/*********************Show ***********/
    public function showproduct()
    {
        $data=product::all();
        return view('admin.showproduct',compact('data'));
    }
/************************Delete******** */
    public function deleteproduct($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Certificate Deleted');;
    }

/****************Update view*************** */
    public function updateview($id)
    {
        $data=product::find($id);
        return view('admin.updateview',compact('data'));
    }
/*************** Update Product***********/

    public function updateproduct(Request $request ,$id)
    {
        $data=product::find($id);
        
        $image=$request->file;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('certifimage',$imagename);

        $data->image=$imagename;
        }


         
        $data->title=$request->title;

        $data->domain=$request->domain;

        $data->description=$request->des;

        $data->save();

        return redirect()->back()->with('message','Certificate Updated Successfully');

    }
}
