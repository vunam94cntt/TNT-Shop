@extends('frontend.index')    
@section('main')
@section('title','Login')
    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Log In</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Product</a></li>
                <li class="active">Log In</li>
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Login ===-->
    <div class="log-reg-v3 content-md">
        <div class="container">
            <div class="row">
                <div class="col-md-7 md-margin-bottom-50">
                    <h2 class="welcome-title">Welcome to Unify</h2>
                    <p>Suspendisse et tincidunt ipsum, et dignissim urna. Vestibulum nisl tortor, gravida at magna et, suscipit vehicula massa.</p><br>
                    <div class="info-block-v2">
                        <i class="icon icon-layers"></i>
                        <div class="info-block-in">
                            <h3>Pellentesque vulputate</h3>
                            <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                        </div>    
                    </div>    
                    <div class="info-block-v2">
                        <i class="icon icon-settings"></i>
                        <div class="info-block-in">
                            <h3>Curabitur tincidunt</h3>
                            <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                        </div>    
                    </div>
                    <div class="info-block-v2">
                        <i class="icon icon-paper-plane"></i>
                        <div class="info-block-in">
                            <h3>Aenean condimentum</h3>
                            <p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
                        </div>    
                    </div>
                </div>

                <div class="col-md-5">
                    <form id="sky-form1" class="log-reg-block sky-form">
                        <h2>Log in to your account</h2>

                        <section>
                            <label class="input login-input">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" placeholder="Email Address" name="email" class="form-control">
                                </div>
                            </label>
                        </section>        
                        <section>
                            <label class="input login-input no-border-top">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="Password" name="password" class="form-control">
                                </div>    
                            </label>
                        </section>
                        <div class="row margin-bottom-5">
                            <div class="col-xs-6">
                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox"/>
                                    <i></i>
                                    Remember me
                                </label>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="#">Forget your Password?</a>
                            </div>
                        </div>
                        <button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Log in</button>

                        <div class="border-wings">
                            <span>or</span>
                        </div>
                            
                        <div class="row columns-space-removes">
                            <div class="col-lg-6 margin-bottom-10">
                                <button type="button" class="btn-u btn-u-md btn-u-fb btn-block"><i class="fa fa-facebook"></i> Facebook Log In</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="btn-u btn-u-md btn-u-tw btn-block"><i class="fa fa-twitter"></i> Twitter Log In</button>
                            </div>
                        </div>
                    </form>
                    
                    <div class="margin-bottom-20"></div>
                    <p class="text-center">Don't have account yet? Learn more and <a href="shop-ui-register.html">Sign Up</a></p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Login ===-->     

    <!--=== Shop Suvbscribe ===-->
    <div class="shop-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-8 md-margin-bottom-20">
                    <h2>subscribe to our weekly <strong>newsletter</strong></h2>
                </div>  
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email your email...">
                        <span class="input-group-btn">
                            <button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
                        </span>
                    </div>    
                </div>
            </div>
        </div><!--/end container-->
    </div>
    <!--=== End Shop Suvbscribe ===-->
@stop
    