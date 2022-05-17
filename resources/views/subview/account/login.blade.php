<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <div class="input-group mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div> -->
                    <!-- /.col -->
                    <div class="col-12">
                        <button id="btlogin" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div style="margin-top:10px">
                    <p class="mb-1">
                        <a type="button" data-dismiss="modal" data-toggle="modal" data-target="#forgot" class="text-center">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a type="button" data-dismiss="modal" data-toggle="modal" data-target="#register" class="text-center">Register a new membership</a>
                    </p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>