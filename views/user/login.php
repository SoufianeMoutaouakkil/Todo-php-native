<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <h1 class="text-center mb-4">Login page</h1>
        <?php if (isset($errorMessage)) { ?>
            <div class="alert alert-danger">
                <?= $errorMessage ?>
            </div>
        <?php } ?>
        <form action="/login" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value='<?= $username ?? null ?>'
                    placeholder="Enter your username...">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    value='<?= $password ?? null ?>' placeholder="Enter your password...">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
</div>