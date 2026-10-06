<?= view('layout/header', ['title' => 'New Task']) ?>

<h1>New Task</h1>

<?php if (session()->getFlashdata('errors')): ?>
    <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <p><?= esc($error) ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form action="<?= url_to('tasks.create') ?>" method="post">

    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input
        type="text"
        name="title"
        id="title"
        value="<?= esc(old('title')) ?>"
        required
    >

    <label for="description">Description</label>
    <textarea
        name="description"
        id="description"
    ><?= esc(old('description')) ?></textarea>

    <label for="task_date">Task Date</label>
    <input
        type="date"
        name="task_date"
        id="task_date"
        value="<?= esc(old('task_date')) ?>"
        required
    >

    <button type="submit">Create Task</button>

</form>

<?= view('layout/footer') ?>