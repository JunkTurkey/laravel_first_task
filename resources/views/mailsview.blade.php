<html>

@extends('layouts.layout')
<head><title>admin</title></head>

<body>
<h1>fucking u right now</h1>
<table class="table table-hover">
    <thead class="thead-light">
    <tr>
        <td>mail</td>
        <td>user_id</td>
    </tr>
    </thead>
    <?php foreach ($mails as $mail) : ?>
    <tr>
        <td><?= $mail->mail; ?> </td>
        <td><?= $mail->user_id; ?> </td>
    </tr>
    <?php endforeach; ?>

</table>
</body>

</html>