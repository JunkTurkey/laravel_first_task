<html>

<head><title>admin</title></head>

<body>
<h1>fucking u right now</h1>
<table>
    <tr>
        <td>id</td>
        <td>email</td>
        <td>role</td>
    </tr>

    <?php foreach ($users as $user) : ?>
    <tr>
            <td><?= $user->email; ?> </td>
            <td><?= $user->password; ?> </td>
            <td><?= DB::table('roles')->where('id', $user->role)->first()->name; ?> </td>
            <td><a href=" {{ url('/viewmails/'.$user->id)  }}">view mails</a> </td>
    </tr>
    <?php endforeach; ?>

</table>
</body>

</html>