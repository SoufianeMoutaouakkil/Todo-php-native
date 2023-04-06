<h2>User details :</h2>
<?php if (empty($user)) { ?>
    <p>No user found with the id '<?= $id ?>'</p>
<?php } else { ?>
    <ul>
        <li>ID :
            <?= $user['id'] ?>
        </li>
        <li>Username :
            <?= $user['username'] ?>
        </li>
        <li>Email :
            <?= $user['email'] ?>
        </li>
        <li>Created At :
            <?= $user['created_at'] ?>
        </li>
        <li>Updated At :
            <?= $user['updated_at'] ?>
        </li>
    </ul>
<?php } ?>

<div>
    <a href="/tasks">Show my tasks</a>
</div>