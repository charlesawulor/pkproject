@extends('layouts.app1')

@section('content')  




<div class="cart-section container">
   <div>

@if (session()->has('success_message'))

 <div class="alert alert-success">
     {{ session()->get('success_message')}}
</div>

@endif

@if(count($errors)>0)
<div class="alert alert-danger">
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }} </li>
         @endforeach
    </ul>
</div>

@endif
</div>





<div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                    @if (Cart::count() > 0 )
                    @foreach (Cart::content() as $item)
                        <li>
                            <div class="cart-img">
                                <a href="#"><img src="/laravelstore/storage/app/public/{{$item->model->image}}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">{{$item->model->product_name}}</a></h4>
                                <span> ${{$item->model->product_price}}	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>

                        @endforeach

                        @endif
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>${{ Cart::subtotal() }}</span></h4>
                    </div>
                 
                    <div class="checkout-btn btn-hover">
                        <a class="theme-color" href="{{route('checkout')}}">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="ti-angle-right"></i></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-img-1">
                <img src="assets/images/banner/breadcrumb-1.png" alt="">
            </div>
            <div class="breadcrumb-img-2">
                <img src="assets/images/banner/breadcrumb-2.png" alt="">
            </div>
        </div>





        @if (Cart::count() > 0 )

<h5> {{Cart::count()}} item(s) in shopping cart</h5>

        <div class="cart-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="cart-table-content">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="width-thumbnail"></th>
                                                <th class="width-name">Product</th>
                                                <th class="width-price"> Price</th>
                                                <th class="width-quantity">Quantity</th>
                                                <th class="width-remove"></th>
                                                <th class="width-remove">Save for later</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        
                                           @foreach (Cart::content() as $item)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href=""><img src="/laravelstore/storage/app/public/{{$item->model->image}}" alt=""></a>
                                                </td>
                                                <td class="product-name">
                                                    <h5><a href="product-details.html">
                                                    {{$item->model->product_name}}</a></h5>
                                                </td>
                                                <td class="product-cart-price"><span class="amount">${{$item->model->product_price}}</span></td>
                                                <td class="cart-quality">
                                                    <div class="product-quality">
                                                        <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="1">
                                                    </div>
                                                </td>
                                           

                                            

                                            

                                    <td>  


                                    <form style="margin-left:20%; background-color:white" action="{{route('cart.destroy', $item->rowId)}}" method="POST">
                             {{csrf_field()}}
                             {{method_field('DELETE')}}

                             <button style="background-color:white; border:2px solid white" type="submit" class="cart-options">x</button>

                             </form>
                             
                             </td>


                             <td>  


                             <form style="margin-left:20%; background-color:white" action="{{route('cart.switchToSaveForLater', $item->rowId)}}" method="POST">
                                  {{csrf_field()}}
                                <button style="background-color:white; border:2px solid white" type="submit" class="cart-options">Save for later</button>
                            </form>
                               </td>


                                            </tr>

                                            @endforeach
                                   


                                        </tbody>
                                    </table>
                                </div>                            
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update btn-hover">
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear-wrap">
                                            <div class="cart-clear btn-hover">
                                                <button>Update Cart</button>
                                            </div>
                                            <div class="cart-clear btn-hover">
                                                <a href="#">Clear Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cart-calculate-discount-wrap mb-40">
                            <h4>Calculate shipping </h4>
                            <div class="calculate-discount-content">
                                <div class="select-style mb-15">
                                    <select class="select-two-active">
                                        <option>Bangladesh</option>
                                        <option>Bahrain</option>
                                        <option>Azerbaijan</option>
                                        <option>Barbados</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                                <div class="select-style mb-15">
                                    <select class="select-two-active">
                                        <option>State / County</option>
                                        <option>Bahrain</option>
                                        <option>Azerbaijan</option>
                                        <option>Barbados</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                                <div class="input-style">
                                    <input type="text" placeholder="Town / City">
                                </div>
                                <div class="input-style">
                                    <input type="text" placeholder="Postcode / ZIP">
                                </div>
                                <div class="calculate-discount-btn btn-hover">
                                    <a class="btn theme-color" href="#">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="cart-calculate-discount-wrap mb-40">
                            <h4>Coupon Discount </h4>
                            <div class="calculate-discount-content">
                                <p>Enter your coupon code if you have one.</p>
                                <div class="input-style">
                                    <input type="text" placeholder="Coupon code">
                                </div>
                                <div class="calculate-discount-btn btn-hover">
                                    <a class="btn theme-color" href="#">Apply Coupon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="grand-total-wrap">
                            <div class="grand-total-content">
                                <h3>Subtotal <span>${{ Cart::subtotal() }}</span></h3>
                                <h3>Tax <span>${{ Cart::tax() }}</span></h3>
                            

                                <div class="grand-shipping">
                                    <span>Shipping</span>
                                    <ul>
                                        <li><input type="radio" name="shipping" value="info" checked="checked"><label>Free shipping</label></li>
                                        <li><input type="radio" name="shipping" value="info" checked="checked"><label>Flat rate: <span>$100.00</span></label></li>
                                        <li><input type="radio" name="shipping" value="info" checked="checked"><label>Local pickup: <span>$120.00</span></label></li>
                                    </ul>
                                </div>
                                <div class="shipping-country">
                                    <p>Shipping to Bangladesh</p>
                                </div>
                                <div class="grand-total">
                                    <h4>Total <span>${{ Cart::total() }}</span></h4>
                                </div>
                            </div>
                            <div class="grand-total-btn btn-hover">
                                <a class="btn theme-color" href="{{route('checkout')}}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



   @else

   <div class="cart-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <h3 style="margin-left:40%"> No item in cart</h3>

                   </div>
                </div>
          </div>
   </div>


@endif



           @if (Cart::instance('saveForLater')->count() > 0)

            <h5> {{ Cart::instance('saveForLater')->count() }} item(s) saved for later</h5>


      <div class="wishlist-area pb-100 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="wishlist-table-content">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="width-remove"></th>
                                                <th class="width-thumbnail"></th>
                                                <th class="width-name">Product</th>
                                                <th class="width-price"> Unit price </th>
                                                <th class="width-wishlist-cart"></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        @foreach (Cart::instance('saveForLater')->content() as $item)
                                            <tr>
                                              


                                  <td>            
                                    <form style="margin-left:20%; background-color:white" action="{{route('saveForLater.destroy', $item->rowId)}}" method="POST">
                             {{csrf_field()}}
                             {{method_field('DELETE')}}

                             <button style="background-color:white; border:2px solid white" type="submit" class="cart-options">x</button>

                             </form>
                                </td>              



                                                <td class="product-thumbnail">
                                                    <a href="product-details.html"><img src="/laravelstore/storage/app/public/{{$item->model->image}}" alt=""></a>
                                                </td>
                                                <td class="product-name">
                                                    <h5><a href="product-details.html"> {{$item->model->product_name}}</a></h5>
                                                </td>
                                                <td class="product-wishlist-price"><span class="amount">$ {{$item->model->product_price}}</span></td>
                                              
                                                <td class="wishlist-cart btn-hover">
                                                
                                                
                            <form style="margin-left:20%; background-color:white" action="{{route('saveForLater.switchToCart', $item->rowId)}}" method="POST">
                                  {{csrf_field()}}

                                  <button style="background-color:#e97730; border:2px solid white ; color:white ; font-weight:600 ; padding: 8px 15px" type="submit" class="single-product-cart btn-hover" >Move to cart</button>

                            </form>
                                                
                                                
                                                </td>
                                            </tr>
                                    
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

      @else

      <h3 style="margin-left:33%"> You have no item saved for later</h3>

       @endif

                
@endsection