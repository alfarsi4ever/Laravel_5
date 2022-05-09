@extends('layout')
@section('title','Companies')
@section('content')


<form action="companies" method="POST">
    <div class="form-group">

      <label class="mt-2 font-weight-bold">Manufacture Name</label>
      <input type="text" name="companyName" class="form-control" placeholder="Manufacture Name">
      <label class="mt-2 font-weight-bold">Contact</label>
      <input type="text" name="contact" class="form-control" placeholder="Contact">
      
    </div>
   
    <button class=" btn btn-primary" type="submit">Submit</button>
    <h4 class="text-danger">{{$errors->first('name')}}</h4>
    @csrf
</form>


<h2 class="text-primary font-weight-bold">Companies</h2>
        <table class="table table-striped table-dark text-center">
            <tr>
            
              <th>Company ID</th>
              <th>Company Name</th>
              <th>Contact</th>
            </tr>
        @foreach ($manufactures as $manufacture)
                
                <td>{{$manufacture->id}}</td>
                <td>{{$manufacture->companyName}}</td>
                <td>{{$manufacture->contact}}</td>
                {{-- @php
                    $result = ($manufacture->status == 0) ? 'active' : 'Inactive'
                @endphp --}}
              </tr>
            
        @endforeach

        </table>

@endsection