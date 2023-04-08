<div class="container py-5 text-center">
    <h1 class="display-1">404</h1>
    <h2 class="display-4">Oops! Page not found</h2>
    <p class="lead mb-5">We can't seem to find the page you're looking for.</p>
    <a href="/" class="btn btn-lg btn-outline-primary">Go back to homepage</a>
    <a href="<?= getSession("last_path", "/") ?>" class="btn btn-lg btn-outline-primary">Go back to my last page</a>
</div>
