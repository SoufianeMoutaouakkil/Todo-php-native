<h1 class="display-4 lead mb-5">My profile</h1>
<div class="col-md-8">
    <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Full Name</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $user["fullname"] ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Username</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $user["username"] ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <h6 class="mb-0">Email</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <?= $user["email"] ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <a class="btn col-3 btn-outline-primary " href="/profile/edit">Edit your profile</a>
            <a class="btn col-3 btn-danger " href="/profile/delete">Delete your account</a>
        </div>
    </div>
</div>
