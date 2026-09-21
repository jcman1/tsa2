<?= $this->include('layout/header') ?>

<h1>Task List</h1>

<p>All tasks in the system.</p>

<?php $tasks = $tasks ?? []; ?>

<table>
    <thead>
        <tr>
            <th>Task</th>
            <th>Status</th>
            <th>Date</th>
            <th>Created At</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
                <td><?= esc($task['task_date']) ?></td>
                <td><?= esc($task['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->include('layout/footer') ?>