<?= view('_header', ['title' => 'Login']) ?>

<h1>Login</h1>

<?php if (session()->getFlashdata('error')): ?>
    <p><?= esc(session()->getFlashdata('error')) ?></p>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
    <p><?= esc(session()->getFlashdata('success')) ?></p>
<?php endif; ?>

<?php if (session()->getFlashdata('errors')): ?>
    <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <p><?= esc($error) ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form action="<?= url_to('login.attempt') ?>" method="post">

    <?= csrf_field() ?>

    <label for="username">Username</label>
    <input
        type="text"
        name="username"
        id="username"
        value="<?= esc(old('username')) ?>"
        required
    >

    <label for="password">Password</label>
    <input
        type="password"
        name="password"
        id="password"
        required
    >

    <button type="submit">Login</button>

</form>

<?= view('_footer') ?>