<form class="validate" data-use-loading-class="1" id="login-form" action="{{ route('backend.auth.authenticate') }}">
<fieldset>
    
    <div class="row">
    
        <div class="col-sm-6 form-group">
            <label for="email">*Email</label>
            <input type="email" class="form-control" required id="email" autofocus/>
        </div>
        
        <div class="col-sm-6 form-group">
            <label for="password">*Password</label>
            <input type="password" class="form-control" required id="password" />
        </div>
    
    </div>
    
    <div class="form-group clearfix">
    
        <button type="submit" class="btn btn-primary float-left">
            <i class="icon-login" aria-hidden="true"></i>
            Login
        </button>
        
        <a class="btn float-right text-dark" href="{{ route('frontend.password.lost.form') }}">Forgot Your Password?</a>
        
    </div>

</fieldset>
</form>