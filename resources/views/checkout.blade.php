
@extends('layouts.app1')

<script src="https://js.stripe.com/v3/"></script>

@section('content')  
		
        <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Checkout </h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="ti-angle-right"></i></li>
                        <li>Checkout </li>
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
        <div class="checkout-main-area pb-100 pt-100">
            <div class="container">
                <div class="customer-zone mb-20">
                    <p class="cart-page-title">Returning customer? <a class="checkout-click1" href="#">Click here to login</a></p>
                    <div class="checkout-login-info">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="sin-checkout-login">
                                        <label>Username or email address <span>*</span></label>
                                        <input type="text" name="user-name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="sin-checkout-login">
                                        <label>Passwords <span>*</span></label>
                                        <input type="password" name="user-password">
                                    </div>
                                </div>
                            </div>
                            <div class="button-remember-wrap">
                                <button class="button" type="submit">Login</button>
                                <div class="checkout-login-toggle-btn">
                                    <input type="checkbox">
                                    <label>Remember me</label>
                                </div>
                            </div>
                            <div class="lost-password">
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="customer-zone mb-20">
                    <p class="cart-page-title">Have a coupon? <a class="checkout-click3" href="#">Click here to enter your code</a></p>
                    <div class="checkout-login-info3">
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <input type="submit" value="Apply Coupon">
                        </form>
                    </div>
                </div>


                <div class="checkout-wrap pt-30">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap">
                                <h3>Billing Details</h3>
                                <div class="row">

                                  <form>


                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <label>First Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <label>Last Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Company Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-select select-style mb-20">
                                            <label>Country <abbr class="required" title="required">*</abbr></label>
                                            <select class="select-two-active">
                                                <option>Select a country</option>
                                                <option>Azerbaijan</option>
                                                <option>Bahamas</option>
                                                <option>Bahrain</option>
                                                <option>Bangladesh</option>
                                                <option>Barbados</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                            <input class="billing-address" placeholder="House number and street name" type="text">
                                            <input placeholder="Apartment, suite, unit etc." type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>State / County <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Postcode / ZIP <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Phone <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                            <input type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">

                                         <div id="card-element">
                                         <!-- Elements will create input elements here -->
                                         </div>

                                         <!-- We'll put the error messages in this element -->
                                         <div id="card-errors" role="alert"></div>

                                    </div>



                                  </form>



                                </div>
                            
                                <div class="checkout-account mt-25">
                                    <input class="checkout-toggle" type="checkbox">
                                    <span>Ship to a different address?</span>
                                </div>
                                <div class="different-address open-toggle mt-30">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>First Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Last Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Company Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-select select-style mb-20">
                                                <label>Country</label>
                                                <select class="select-two-active">
                                                    <option>Select a country</option>
                                                    <option>Azerbaijan</option>
                                                    <option>Bahamas</option>
                                                    <option>Bahrain</option>
                                                    <option>Bangladesh</option>
                                                    <option>Barbados</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Street Address</label>
                                                <input class="billing-address" placeholder="House number and street name" type="text">
                                                <input placeholder="Apartment, suite, unit etc." type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Town / City</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>State / County</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Postcode / ZIP</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Phone</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Email Address</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>



                        <div class="col-lg-5">
                            <div class="your-order-area">
                                <h3>Your order</h3>
                            
                                <div class="your-order-wrap gray-bg-4">

                            
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-info">
                                            <ul>
                                                <li>Product <span>Total</span></li>
                                            </ul>
                                        </div>
                                        <div class="your-order-middle">
                                            <ul>



                                      
                    @foreach (Cart::content() as $item)
                                    <div class="your-order-middle">
                                                <li>{{$item->model->product_name}} 
                                                <span>${{$item->model->product_price}}	</span>
                                               
                                                </li> {{$item->qty}}	
                                          </div>    

                                         @endforeach
                                

                                         <div class="your-order-info order-subtotal">
                                         <li>Subtotal <span>${{ Cart::subtotal() }}</span></li>
                                          </div>

                                          <div class="your-order-info order-subtotal">
                                                <li>Tax <span>${{ Cart::tax() }}</span></li>
                                            </div>

                                            <div class="your-order-info order-total">
                                                <li>Total <span>${{ Cart::total() }}</span></li>

                                              </div>  

                                            </ul>
                                        </div>
                                                 
                                    </div>


                                    <div class="payment-method">
                                        <div class="pay-top sin-payment">
                                            <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                            <label for="payment_method_1"> Direct Bank Transfer </label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                            </div>
                                        </div>
                                        <div class="pay-top sin-payment">
                                            <input id="payment-method-2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                            <label for="payment-method-2">Check payments</label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                            </div>
                                        </div>
                                        <div class="pay-top sin-payment">
                                            <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                            <label for="payment-method-3">Cash on delivery </label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                            </div>
                                        </div>
                                        <div class="pay-top sin-payment sin-payment-3">
                                            <input id="payment-method-4" class="input-radio" type="radio" value="cheque" name="payment_method">
                                            <label for="payment-method-4">PayPal <img alt="" src="assets/images/icon-img/payment.png"><a href="#">What is PayPal?</a></label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                   
                                <div class="Place-order btn-hover">
                                    <a href="#">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection


        <script>
  (function(){

// Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/apikeys
var stripe = Stripe('pk_test_51Io4hXACLwpJgLfCP1iM76xlP9AucwIVzSHSiWgHhoSLdEHyewYIEZv7io7OyDoIiR0PZtOfJJVgz4StvWoIadxl00J9rpgT4v');
var elements = stripe.elements();

// Set up Stripe.js and Elements to use in checkout form
var elements = stripe.elements();
var style = {
  base: {
    color: "#32325d",
  }
};

var card = elements.create("card", { style: style });
card.mount("#card-element"); 


var form = document.getElementById('payment-form');

form.addEventListener('submit', function(ev) {
  ev.preventDefault();
  // If the client secret was rendered server-side as a data-secret attribute
  // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
  stripe.confirmCardPayment(clientSecret, {
    payment_method: {
      card: card,
      billing_details: {
        name: 'Jenny Rosen'
      }
    }
  }).then(function(result) {
    if (result.error) {
      // Show error to your customer (e.g., insufficient funds)
      console.log(result.error.message);
    } else {
      // The payment has been processed!
      if (result.paymentIntent.status === 'succeeded') {
        // Show a success message to your customer
        // There's a risk of the customer closing the window before callback
        // execution. Set up a webhook or plugin to listen for the
        // payment_intent.succeeded event that handles any business critical
        // post-payment actions.
      }
    }
  });
});

})();


</script>
