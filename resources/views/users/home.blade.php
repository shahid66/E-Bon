@extends('users/layout/layout')
@section('content')

<section class="products">
    <div class="section-title">
        <h2>our products</h2>
    </div>
    <div class="products-center">

    @foreach($rows as $row)
        <!-- single product -->
        <div class="product-centerItem">
            <div class="image__content">
                <img class="image__img " data-toggle="modal" data-target=".bd-example-modal-lg" src="{{asset('images/bird-1.jpg')}}" alt="">
                <div class="details pt-4">
                    <h2>{{$row->name}}</h2>
                    <h3>price</h3>
                </div>

                <button class="t">Review</button>
            </div>
            <button id="addBtn" class="f">Add To bag</button>
            <div id="addBtn2" class="addButton">
                <button id="minus" class="minus"><i class="fa fa-minus" aria-hidden="true"></i>
                </button>
                <input id="case-count" type="text" class="inputField " value="1" disabled>
                <div class="textContent">in bag</div>
                <button id="plus"  class="plus"><i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    @endforeach





    </div>

</section>




        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="contentWrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contentImage">
                                <img src="images/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="itemDetails">
                                <h2>product name</h2>
                                <h3>price</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="itemDetailsBtn" class="itemDetailsBtn">
                                            <button id="minus" class="minus"><i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                            <input id="case-count" type="text" class="itemInputF" value="1" disabled>
                                            <div class="itemDetailsText">in bag</div>
                                            <button id="plus"  class="plus "><i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="buyNowBtn">Buy Now</button>
                                    </div>
                                </div>
                                <p>details: <span>Age:</span></p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

@endsection()
