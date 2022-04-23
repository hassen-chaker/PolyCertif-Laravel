

<!DOCTYPE html>
<html lang="en">
  <head>
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
     @if(session()->has('message'))

<div class="alert alert-success">

{{session()->get('message')}}

<button type="button" class="close" data-dismiss="alert">x
    
</button>

</div>

@endif
     
    

     <h1 class="title"> Add certificate</h1>


        <form action="{{url('uploadcertif')}}" method="post" 
        enctype="multipart/form-data">

           @csrf

    <div style="padding:15px";>
        <label>
            Title
        </label>
        <input style="color:black;" type="text" name="title" placeholder="Give a certif title"
        require="" >
    </div>

    <div style="padding:15px"; >
        <label>
        Domain
        </label>
        <input style="color:black;" type="text" name="domain" placeholder="Give a certif domain"
        require="" >
    </div>

    
    <div style="padding:15px"; >
        <label>
            Description
        </label>
        <input type="text" style="color:black;" name="des" placeholder="Give a Description"
        require="" >
    </div>

    <div style="padding:15px">
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