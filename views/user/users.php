<h1 class="mb-3">User List</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($users)) { ?>
            <tr>
                <td colspan="5" class="text-center">No user Created.</td>
            </tr>
        <?php } else { ?>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td>
                        <a href="/user/<?= $user['id'] ?>"><?= $user['id'] ?></a>
                    </td>
                    <td>
                        <?= $user['username'] ?>
                    </td>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td>
                        <?= $user['created_at'] ?>
                    </td>
                    <td>
                        <?= $user['updated_at'] ?>
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>
