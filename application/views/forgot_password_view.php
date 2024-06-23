<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h1 id="page-title" class="text-center">Forgot Password Page</h1>
    <hr id="title_hr" class="mx-auto">
    <div id="login-wrapper">
        <div class="text-muted"><small><em>Please Fill all the required fields</em></small></div>
        <?php if($this->session->flashdata('msg_error')): ?>
            <div class="message-error"><?= $this->session->flashdata('msg_error') ?></div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" id="email" name="email" value="<?= set_value('email') ?>" required="required">
            </div>
            <div class="input-field">
                <a href="<?= site_url('auth/login_view') ?>" tabindex="-1"><small><strong>Go back to login page</strong></small></a>
            </div>
            <button class="login-btn">Reset Password</button>
        </form>
    </div>
</body>
</html>
