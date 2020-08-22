@extends('users/layout/layout')
@section('content')

<section class="products">
        <div class="section-title">
            <h2>our products</h2>
        </div>
        <div class="products-center">
            <!-- single product  -->
            <article class="product">
                <div class="img-container">
                    <img src="{{asset('images/product-1.jpeg')}}" alt="product" class="product-img">
                    <button class="bag-btn" id="1">
                        <i  class="fas fa-shopping-cart">add to bag</i>
                    </button>
                </div>
                <h3>Product name</h3>
                <h4>price</h4>
            </article>
            <!-- end of single product -->
                        <!-- single product  -->
                        <article class="product">
                            <div class="img-container">
                                <img src="{{asset('images/product-1.jpeg')}}" alt="product" class="product-img">
                                <button class="bag-btn" id="2">
                                    <i  class="fas fa-shopping-cart">add to bag</i>
                                </button>
                            </div>
                            <h3>Product name</h3>
                            <h4>price</h4>
                        </article>
                        <!-- end of single product -->
                                    <!-- single product  -->
            <article class="product">
                <div class="img-container">
                    <img src="{{asset('images/product-1.jpeg')}}" alt="product" class="product-img">
                    <button class="bag-btn" id="3">
                        <i  class="fas fa-shopping-cart">add to bag</i>
                    </button>
                </div>
                <h3>Product name</h3>
                <h4>price</h4>
            </article>
            <!-- end of single product -->
                        <!-- single product  -->
                        <article class="product">
                            <div class="img-container">
                                <img src="{{asset('images/product-1.jpeg')}}" alt="product" class="product-img">
                                <button class="bag-btn" id="4">
                                    <i  class="fas fa-shopping-cart">add to bag</i>
                                </button>
                            </div>
                            <h3>Product name</h3>
                            <h4>price</h4>
                        </article>
                        <!-- end of single product -->
                                    <!-- single product  -->
            <article class="product">
                <div class="img-container">
                    <img src="{{asset('images/product-1.jpeg')}}" alt="product" class="product-img">
                    <button class="bag-btn" id="5">
                        <i  class="fas fa-shopping-cart">add to bag</i>
                    </button>
                </div>
                <h3>Product name</h3>
                <h4>price</h4>
            </article>
            <!-- end of single product -->

        </div>
    </section>

@endsection()
