<h1 class="display-4 lead mb-5">Edit my profile</h1>
<form method="post">
    <div class="col-md-8">
        <div class="row mb-3">
            <div class="col-sm-3">
                <label class="fw-bold mb-0" for="fullname">Full Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" id="fullname" name="fullname" class="form-control" value="<?= $user["fullname"] ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-sm-3">
                <label class="fw-bold mb-0" for="username">Username</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" id="username" name="username" class="form-control" value="<?= $user["username"] ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-sm-3">
                <label class="fw-bold mb-0" for="email">Email</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" id="email" name="email" class="form-control" value="<?= $user["email"] ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-sm-12">
                <a class="btn btn-outline-success" href="/profile/edit">Save</a>
                <a class="btn btn-outline-danger" href="/profile">Cancel</a>
                <a class="btn" href="/profile/edit/password">Change Password</a>
            </div>
        </div>
    </div>
</form>