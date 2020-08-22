@extends('adminView/include/layout')
@section('content')
<div class="col-md-9">

    <br>
    <a class="btn btn-success mb-3" href="{{url('/category/create')}}"> Create Category </a>
    
    <table class="table table-sm text-center my-0">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Mark</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
