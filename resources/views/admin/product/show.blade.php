@extends('adminView/include/layout')
@section('content')
<section class="products">

    <div class="products-center">
        <!-- single product  -->
        <article class="product">
            <div class="img-container">
                <img src="{{asset('images/product-1.jpeg')}}" alt="product" class="product-img">
            </div>
            <h3>Product name</h3>
            <p>catagories</p>
            <p>author</p> 
            <h4>price</h4>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, aspernatur? Nemo molestias cumque neque accusantium sit fugiat vel ratione officia, cupiditate id aperiam nihil, dolore veniam? Optio delectus sapiente quam!</h5>
        </article>
        <!-- end of single product -->
        <!-- single product  -->
        <article class="product">
            <div class="img-container">
                <img src="{{asset('images/product-1.jpeg')}}" alt="product" class="product-img">
            </div>
            <h3>Product name</h3>
            <p>catagories</p>
            <p>author</p> 
            <h4>price</h4>
            <h5>Here is Something details about this product </h5>
        </article>
        <!-- end of single product -->
        

    </div>
</section>




<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="item w-60">
                            <h2 class="pt-3 pb-3">Title</h2>
                            <img class="card-img-top" src="{{('/assets/images/bird-1.jpg')}}" alt="Card image cap">
                            <p>author</p>
                            <p>author</p>
                            <h3>Details</h3>
                            <h4>price</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
