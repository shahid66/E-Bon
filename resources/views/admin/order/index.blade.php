@extends('admin/include/layout')
@section('content')

<div class="col-md-10 ">
    <br>
    <a href="{{url('/product/create')}}" class="btn btn-success mb-3"> Create Order </a>
    
<table class="table border table-sm text-center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">order_no</th>
      <th scope="col">user_id</th>
      <th scope="col">delivery</th>
      <th scope="col">total_price</th>
      <th scope="col">ispaid </th>
      <th scope="col">isdeleted</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <a href=""><h3 class="btn btn-warning">View Details</h3></a>
      </td>
      
    </tr>
  </tbody>
</table>

@endsection
