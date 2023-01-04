<div class="row">
    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table">
        <div class="d-table-cell align-middle">

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                        <form action="<?=site_url('login/submit')?>" method="post">
                            
                            <?php
                            if($success == 0) {
                                echo '<div class="alert alert-danger">'.$msg.'</div>';
                            } 
                            ?>
                        
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password">
                                <small>
                                    <a href="index.html">Forgot password?</a>
                                </small>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>