@extends('admin/include/layout')
@section('content')

<div class="col-md-10 ">
    <br>
    <a href="{{url('/admin/product/create ')}}" class="btn btn-success mb-3"> Create Product </a>
    <a href="{{url('/product/show')}}" class="btn btn-success mb-3">  Show Product </a>
<table class="table border table-sm text-center">
  <thead>
    <tr>
      <th scope="col">SL</th>
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
  <?php $SL = 1 ?>
  @foreach($rows as $row)
  <tr>
      <th scope="row">{{$SL++}}</th>

      <td>{{$row->name}}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>

    </tr>
  @endforeach
  </tbody>
</table>

@endsection
