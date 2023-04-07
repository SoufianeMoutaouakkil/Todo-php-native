<h1 class="mb-3">Task List</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($tasks)) { ?>
            <tr>
                <td colspan="5" class="text-center">No tasks for the user, whose id is '<?= $userId ?>'.</td>
            </tr>
        <?php } else { ?>
            <?php foreach ($tasks as $task) { ?>
                <tr>
                    <td>
                        <?= $task['id'] ?>
                    </td>
                    <td>
                        <?= $task['title'] ?>
                    </td>
                    <td>
                        <?= $task['description'] ?>
                    </td>
                    <td>
                        <?= $task['created_at'] ?>
                    </td>
                    <td>
                        <?= $task['status'] ?>
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>