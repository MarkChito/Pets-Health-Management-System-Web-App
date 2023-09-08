<div class="container-fluid">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Forgot Password</h4>
        <h1 class="display-4 m-0">Let's reset your<span class="text-primary"> Password</span></h1>
    </div>
    <?php if (!$this->session->userdata("reset_password_status")) : ?>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <form action="server/send_reset_code" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-form-label" for="forgot_password_email">Email</label>
                                <input type="email" class="form-control" id="forgot_password_email" name="forgot_password_email" placeholder="Enter your Email" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="forgot_password_current_tab" value="<?= $this->session->userdata("current_tab") ?>">
                            <button type="submit" class="btn btn-primary w-100" name="forgot_password">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php else : ?>
        <?php if ($this->session->userdata("reset_password_status") == "check_email") : ?>
            <div class="container justify-content-center">
                <div class="alert alert-info text-center">
                    Please check your email to reset your password.
                </div>
            </div>
        <?php elseif ($this->session->userdata("reset_password_status") == "expired") : ?>
            <div class="container justify-content-center">
                <div class="alert alert-danger text-center">
                    The link is no longer valid.
                </div>
            </div>
        <?php elseif ($this->session->userdata("reset_password_status") == "success") : ?>
            <div class="container justify-content-center">
                <div class="alert alert-success text-center">
                    Your password has been successfully reset!
                </div>
            </div>
        <?php else : ?>
            <div class="container justify-content-center">
                <div class="card">
                    <form action="server/update_new_password" method="POST" id="update_new_password_form">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-form-label" for="update_new_password_new_password">New Password</label>
                                <input type="password" class="form-control" id="update_new_password_new_password" name="update_new_password_new_password" placeholder="Enter New Password" required>
                                <small id="error_update_new_password_new_password" class="d-none"></small>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label" for="update_new_password_confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="update_new_password_confirm_password" name="update_new_password_confirm_password" placeholder="Confirm New Password" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="update_new_password_reset_code" value="<?= $this->session->userdata("reset_code") ?>">
                            <button type="submit" class="btn btn-primary w-100" name="update_new_password">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php endif ?>
    <?php endif ?>
</div>