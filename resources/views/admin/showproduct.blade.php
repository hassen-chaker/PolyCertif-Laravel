<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head> 
  <body>
 
      <!-- partial -->

      @include('admin.sidebar')
      @include('admin.navbar') 
        <!-- partial -->
  

  <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
        <div class="container" align="center">


        @if(session()->has('message'))

<div class="alert alert-success">

{{session()->get('message')}}

<button type="button" class="close" data-dismiss="alert">x
    
</button>

</div>

@endif

            <table>
                <tr style="background-color:grey">
                    <td style="padding:60px;" >Title</td>
                    <td style="padding:60px;">Domain</td>
                    <td style="padding:60px;">Description</td>
                    <td style="padding:60px;">Image</td>
                    <td style="padding:20px;">Upload</td>
                    <td style="padding:20px;">Delete</td>
                </tr>

                @foreach($data as $product)

                <tr align="center" style="background-color:black;">
                    <td >{{$product->title}}</td>
                    <td >{{$product->domain}}</td>
                    <td >{{$product->description}}</td>
                    <td > <img height="100" width="100" src="/certifimage/{{$product->image}}" > </td>
                    
                    <td>
                        <a class="btn btn-primary" href="
                        {{url('updateview',$product->id)}}">Update</a>
                    </td>

                    <td>
                        <a class="btn btn-danger"  onclick="return confirm('Are You Sure ?')" href="
                        {{url('deleteproduct',$product->id)}}" 
                        >Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>


      </div>
  </div>

          <!-- partial -->
     @include('admin.scripte')
  </body>
</html>