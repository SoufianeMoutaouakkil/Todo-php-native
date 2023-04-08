<div class="container py-5 text-center">
    <h1 class="display-1">401</h1>
    <h2 class="display-4">Oops! Unauthorized Access</h2>
    <p class="lead mb-5">You do not have permission to access this page.</p>
    <a href="/" class="btn btn-lg btn-outline-primary">Go back to homepage</a>
    <a href="<?= getSession("last_path", "/") ?>" class="btn btn-lg btn-outline-primary">Go back to my last page</a>
</div>
