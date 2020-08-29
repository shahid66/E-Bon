@extends('users/layout/layout')
@section('content')

 <!-- end of navbar -->
 <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="shippingPage-title">
                    <h2 >Shipping Address</h2>
                </div>
                
                <div class="fill-section">
                    <h2 class="pl-3">Fill Out Your Information</h2>
                    <hr>
                    <form>
                        <div class="form-group">
                            <fieldset class="form-group ">
                                <div class="row">
                                  <legend class="col-form-label col-sm-4 pl-4 pt-0">Pick Up Your Parcel:</legend>
                                  
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        Home
                                      </label>
                                    </div>
                                    <div class="form-check pl-5">
                                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                      <label class="form-check-label" for="gridRadios2">
                                        Office
                                      </label>
                                    </div>
                                </div>
                              </fieldset>
                          <fieldset class="pr-3 pl-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            
                          </fieldset>
                          <div class="number-section d-flex justify-content-between">
                              <fieldset class="group">
                                
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  
                              </fieldset>
                              <fieldset class="group">
                                
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              
                          </fieldset>
                          </div>
                          <div class="country-section d-flex justify-content-between">
                            <fieldset class="group">
                              
                                <label  for="inlineFormCustomSelect">Preference</label>
                                <select class="custom-select " id="inlineFormCustomSelect">
                                  <option selected>Choose...</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                                
                            </fieldset>
                            <fieldset class="group">
                              
                                <label  for="inlineFormCustomSelect">Preference</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                  <option selected>Choose...</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            
                        </fieldset>

                        </div>
                        <div class="area-section d-flex justify-content-between">
                            <fieldset class="group">
                              
                                <label  for="inlineFormCustomSelect">Preference</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                  <option selected>Choose...</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                                
                            </fieldset>

                        </div>
                        <fieldset class="pl-3 pr-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                        </fieldset>
                        </div>


                        <button type="submit" class="btn btn-primary ml-3 mb-3">Submit</button>
                      </form>
                </div>
            </div>
            <div class="col-6">
                <div class="summary">
                    <h2>Check Out Summary</h2>
                    <hr>
                    <h4>Payment Details</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Product name</td>
                                    <td class="text-right">price</td>
                                </tr>
                                <tr>
                                    <td>Product name</td>
                                    <td class="text-right">price</td>
                                </tr>
                                <tr>
                                    <td>Product name</td>
                                    <td class="text-right">price</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="text-right">Price</td>
                                </tr>

                            </tbody>
                            
                                
                            
                        </table>
                </div>
            </div>
        </div>
    </div>

@endsection()