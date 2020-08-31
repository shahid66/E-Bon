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
      <th scope="col">product_img</th>
      <th scope="col">product_id</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>
      <th scope="col">discount </th>
      <th scope="col">total_price</th>
      <th scope="col">isdeleted</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>
          <img src="{{asset('images/product-1.jpeg')}}" alt="" style="width:250px; height:150px;">
      </td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        panding
      </td>
      
    </tr>
  </tbody>
</table>

@endsection
