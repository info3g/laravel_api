<div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
    <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                <div class="auto-form-wrapper">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="label">Username</label>
                            <div class="input-group">                                
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Username">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                    <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                </div>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label class="label">Password</label>
                            <div class="input-group">
                                <!-- <input type="password" class="form-control" placeholder="*********"> -->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="*********" value="12345678" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                    <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                </div>
                            </div>                           
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary submit-btn btn-block">Login</button>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="form-check form-check-flat mt-0">
                                <label class="form-check-label">
                                <!-- <input type="checkbox" class="form-check-input" checked> Keep me signed in -->
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Keep me signed in
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="text-small forgot-password text-black" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                            <!-- <a href="#" class="text-small forgot-password text-black">Forgot Password</a> -->
                        </div>
                        <!-- <div class="form-group">
                            <button class="btn btn-block g-login">
                            <img class="mr-3" src="{{ asset('BS_v4/images/file-icons/icon-google.svg')}}" alt="">Log in with Google</button>
                        </div> -->
                       <!--  <div class="text-block text-center my-3">
                            <span class="text-small font-weight-semibold">Not a member ?</span>
                            <a href="register.html" class="text-black text-small">Create new account</a>
                        </div> -->
                    </form>
                </div>
                <!-- <ul class="auth-footer">
                    <li>
                        <a href="#">Conditions</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <a href="#">Terms</a>
                    </li>
                </ul>
                <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p> -->
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>