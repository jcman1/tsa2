<?= $this->include('layout/header') ?>

<h1>Tasks for Today</h1>

<p>Here are the tasks for today.</p>

<?php $tasks = $tasks ?? []; ?>

<?php if (empty($tasks)): ?>

    <p>No tasks for today.</p>

<?php else: ?>

    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<?= $this->include('layout/footer') ?>