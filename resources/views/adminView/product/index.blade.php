@extends('adminView/include/layout')
@section('content')

<div class="col-md-10 ">
    <br>
    <a href="{{url('/product/create')}}" class="btn btn-success mb-3"> Create Product </a>
    <a href="{{url('/product/show')}}" class="btn btn-success mb-3">  Show Product </a>
<table class="table border table-sm text-center">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Catagory</th>
      <th scope="col">Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Description</th>
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
      <td>@mdo</td>
      
    </tr>
  </tbody>
</table>

@endsection
