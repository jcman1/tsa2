<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>POS System</title>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f4f4f4;
    }

    nav {
        background-color: #222;
        padding: 15px;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
    }

    nav a:hover {
        text-decoration: underline;
    }

    main {
        max-width: 1000px;
        margin: 30px auto;
        background-color: white;
        padding: 30px;
        border-radius: 8px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: white;
    }
</style>

</head>

<body>
<nav>
    <a href="<?= site_url('/') ?>">Home</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('customers') ?>">Customer Accounts</a>
    <a href="<?= site_url('users') ?>">User Accounts</a>
</nav>

<main>

