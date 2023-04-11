<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <h1 class="text-center mb-4">Register page</h1>
        <?php
            if (isset($user) && !empty($user)) {
                extract($user);
            }
            if (isset($message)) {
        ?>
            <div class="alert alert-<?= $message["type"] ?>">
                <?= $message["body"] ?>
            </div>
        <?php } ?>
        <form method="POST">
            <div class="mb-3">
                <label for="fullname" class="form-label">Full name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value='<?= $fullname ?? null ?>'
                    placeholder="Enter your full name...">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value='<?= $username ?? null ?>'
                    placeholder="Enter your username...">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value='<?= $email ?? null ?>'
                    placeholder="Enter your e-mail...">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    value='<?= $password ?? null ?>' placeholder="Enter your password...">
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                    value='<?= $password ?? null ?>' placeholder="Enter your password...">
            </div>
            <div>
                <button type="submit" class="btn btn-outline-success col-4">Sign up</button>
                <a class="btn btn-outline-danger col-4" href="/">Cancel</a>
            </div>
        </form>
    </div>
</div>
