<h1 class="display-4 lead mb-5">Edit my profile - change password</h1>
<form method="post">
    <div class="col-md-8">
        <div class="row mb-3">
            <div class="col-sm-3">
                <label class="fw-bold mb-0" for="old_password">Old password</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="password" id="old_password" name="old_password" class="form-control"
                    value="<?= $oldPassword ?? "" ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-sm-3">
                <label class="fw-bold mb-0" for="new_password">New password</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="password" id="new_password" name="new_password" class="form-control"
                    value="<?= $newPassword ?? "" ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-sm-3">
                <label class="fw-bold mb-0" for="confirm_password">Confirm password</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="password" id="confirm_password" name="confirm_password" class="form-control"
                    value="<?= $confirmPassword ?? "" ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-sm-12">
                <a class="btn btn-outline-primary" href="/profile/edit/passsword">Save</a>
                <a class="btn btn-outline-danger" href="/profile/edit">Cancel</a>
            </div>
        </div>
    </div>
</form>