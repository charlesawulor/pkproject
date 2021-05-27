	
       @extends('layouts.app1')

@section('content')  
      
       
        <div class="login-register-area pb-100 pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                
                                <a data-bs-toggle="tab" href="">
                                    <h4> register </h4>
                                </a>
                            </div>

                          

                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                                <input type="text" name="name" placeholder="Full Name">
                                                
                                                <input name="email" placeholder="Email" type="email">
                                                <input type="password" id="password" name="password" placeholder="Password">
                                                <input type="password" id="password-confirm" name="password" placeholder="Password">

                                                <div class="button-box btn-hover">
                                                    <button type="submit">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection