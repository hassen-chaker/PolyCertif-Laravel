<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
  @include('admin.css')



  <style type="text/css">
      .title 
      {
         color:white;
         padding-top: 25px;
         font-size: 25px;
      }

      label 
      {
          display: inline-block;
          width: 200px;
      }
  </style>
  </head> 
  <body>
 
      <!-- partial -->

      @include('admin.sidebar')
      @include('admin.navbar') 
        <!-- partial -->
  
        <div class="container-fluid page-body-wrapper">
     <div class="container" align="center">

     <h1 class="title"> Add certificate</h1>

     @if(session()->has('message'))

     <div class="alert alert-success">

     {{session()->get('message')}}
     
     <button type="button" class="close" data-dismiss="alert">x
         
     </button>

     </div>

     @endif


        <form action="{{url('updateproduct',$data->id)}}" method="post" 
        enctype="multipart/form-data">

           @csrf

    <div style="padding:15px";>
        <label>
            Title
        </label>
        <input style="color:black;" 
        type="text" 
        name="title"
        value="{{$data->title}}"
        require="" >
    </div>

    <div style="padding:15px"; >
        <label>
        Domain
        </label>
        <input style="color:black;"
         type="text"
          name="domain"
          value="{{$data->domain}}"
        require="" >
    </div>

    
    <div style="padding:15px"; >
        <label>
            Description
        </label>
        <input type="text"
         style="color:black;" 
         name="des" 
         value="{{$data->description}}"
        require="" >
    </div>


       
    <div style="padding:15px"; >
        <label>
            Old Image
        </label>
        <img height="100" width="100"src="/certifimage/{{$data->image}}">
    </div>

    <div style="padding:15px">
    <label>Change the image</label>
        <input type="file" name="file">
    </div>

    <div style="padding:15px">
        <input class="btn btn-success" type="submit">
    </div>
</form>
</div>
</div>


          <!-- partial -->
     @include('admin.scripte')
  </body>
</html>