<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Certificates</h2>
              <a href="/">view all certificates <i class="fa fa-angle-right"></i></a>
           
             <form action="{{url('/search')}}" method="get"
             class="form-inline" style="float: right"; padding="10px";>
               <input class="form-control" type="search" name="search"
                placeholder="search">
                <input type="submit" value="Search" class="btn btn-success">
             </form>
           
            </div>
          </div>
          
        @foreach($data as $product)

          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="150" src="/certifimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>{{$product->domain}}</h6>
                <p>{{$product->description}}</p>
                <a class="btn btn-primary" href="
                        {{url('detail',$product->id)}}">Read More</a>
                <form action="{{url('participate',$product->id)}}"
                 method="POST">

                @csrf
                  <input  class="btn btn-secondary" type="submit" value="Participate">


                
                  <button type="button" class="btn btn-success">Like
                  <span class="glyphicon glyphicon-thumbs-up">
                  </span> <b>10</b>
                  <a href=" href={{url('home')}}"></a>
                </button>

                <button type="button" class="btn btn-danger">Dislike
                
                <span class="glyphicon glyphicon-thumbs-down">
                </span> <b>2</b>
                </button>
                
                </form>
               
                
              </div>
            </div>
          </div>
        @endforeach

        @if(method_exists($data,'link'))
         
        <div class="d-flex justify-content-center">

        {!! $data->links() !!}

        </div>

        @endif
        </div>
      <br><br><br>
    <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Certificates</h2>
              <a href="products.html"> <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
    <div>
                      @comments(['model' => $product])
      
                   </div>

                   </div>
    </div>