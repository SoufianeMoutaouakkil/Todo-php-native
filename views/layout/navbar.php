<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">My ToDo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">
                            Hello <?= $_SESSION['username'] ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="logout" method="post">
                            <button type="submit" class="btn btn-outline-danger">Log Out</button>
                        </form>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Log In</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>