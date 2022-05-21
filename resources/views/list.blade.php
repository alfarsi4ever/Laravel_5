@extends('layout')
@section('title','List')
@section('content')
    
        <form action="list" method="POST">
            <div class="form-group">

              <label class="mt-2 font-weight-bold">Product Name</label>
              <input type="text" name="name" class="form-control" placeholder="name">
              <label class="mt-2 font-weight-bold">Color</label>
              <input type="text" name="color" class="form-control" placeholder="color">
              <label class="mt-2 font-weight-bold">Price</label>
              <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="form-group">
                <label class="mt-2 font-weight-bold">Product status</label>
                <select name="status" id="active" class="form-control">
                    <option value="" disabled>Select Product status</option>
                    <option value="0">Active</option>
                    <option value="1">Inactive</option>
                  </select>
            </div>

            <div class="form-group">
                <label class="mt-2 font-weight-bold">Manufacture</label>
                <select name="company_id" id="company_id" class="form-control">
                    <option value="" disabled>Select Product status</option>
                    @foreach ($Manufactures as $manufacture)
                        <option value={{$manufacture->id}}>{{$manufacture->companyName}}</option>
                    
                    @endforeach
                  </select>
            </div>
                

                
            <button class=" btn btn-primary" type="submit">Submit</button>
            <h4 class="text-danger">{{$errors->first('name')}}</h4>
            @csrf
        </form>

        <h2 class="text-primary font-weight-bold">Active</h2>
        <table class="table table-striped table-dark text-center">
            <tr>
              <th>Product Number:</th>
              <th>Product Name:</th>
              <th>Product Color:</th>
              <th>Product Price $:</th>
              <th>Product Manufacture:</th>
              <th>Product Status:</th>
            </tr>
        @foreach ($ProductsActive as $product)
                
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->manufacture->companyName}}</td>
                {{-- @php
                    $result = ($product->status == 0) ? 'active' : 'Inactive'
                @endphp --}}
                <td>Active</td>
              </tr>
            
        @endforeach

        </table>
        {{-- <ul>
        @foreach ($ProductsActive as $product)
            <li>{{$product->Manufacture1}}</li>
        @endforeach
    </ul> --}}
        <h2 class="text-primary font-weight-bold">Inactive</h2>
        <table class="table table-striped table-dark text-center">
            <tr>
              <th>Product Number:</th>
              <th>Product Name:</th>
              <th>Product Color:</th>
              <th>Product Price $:</th>
              <th>Product Manufacture:</th>
              <th>Product Status:</th>
            </tr>
        @foreach ($ProductsInactive as $product)
                
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->manufacture->companyName}}</td>
                {{-- @php
                    $result = ($product->status == 0) ? 'active' : 'Inactive'
                @endphp --}}
                <td>Inactive</td>
              </tr>
            
        @endforeach
        </table>
        
    
@endsection
    






    {{-- <form>
        <label>First Number</label><br>
        <input type="text" id="fnum" placeholder="First Number"><br>
        <label >Last Number</label><br>
        <input type="text" id="Lnum" placeholder="Last Name"><br>
    </form><br>

    <button onclick="writein()" id="writer">Get Sum</button>

        <h1 id="fnumText"></h1>
        <h1 id="LnumText"></h1>

        <script>
            function writein() {
                var sum=0;
                for (var index = +fnum.value; index < +Lnum.value+1; index++) {
                    sum = sum +index;
                    
                }
                let a=`the sum ism${sum}`
            document.getElementById("fnumText").innerHTML = a;
            
        }
        </script> --}}
