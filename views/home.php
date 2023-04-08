<div class="container py-5 text-center">
    <h1 class="display-1">Welcome
        <?= ucfirst(getSession("username", "")) ?>!
    </h1>
    <p class="display-4 lead mb-5">
        You are now on the home page of the best <span class="text-success fw-bold">ToDo App</span>.
    </p>
    <?php if (is_null(getSession("user_id"))) { ?>
        <a href="/login" class="btn btn-lg btn-outline-primary">Sign in</a>
        <a href="/register" class="btn btn-lg btn-outline-primary">Sign up</a>
    <?php } else { ?>
        <a href="/tasks" class="btn btn-lg btn-outline-primary">Show my Tasks</a>
        <a href="/profile" class="btn btn-lg btn-outline-primary">Show my profile</a>
    <?php } ?>
</div>
