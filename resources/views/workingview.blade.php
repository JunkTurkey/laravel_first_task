<html>

@extends('layouts.layout')
<head><title>admin</title></head>

<body>
<div>
    <?php dd(Auth::user()) ?>
<table class="table table-hover">
    <thead class="thead-light">
    <tr>
        <td>id</td>
        <td>email</td>
        <td>role</td>
        <td>picture</td>
        <td></td>
    </tr>
    </thead>
    <?php foreach ($users as $user) : ?>
    <tr>
            <td><?= $user->email; ?> </td>
            <td><?= $user->password; ?> </td>
            <td><?= $userrole = DB::table('roles')->where('id', $user->role)->first()->name; ?> </td>
            <td><img src="{{ asset('/storage/'.DB::table('picture')->where('id', $user->picture_id)->first()->picture_path) }}" ></td>
            <td><a href=" {{ url('/viewmails/'.$user->id)  }}">view mails</a> </td>
            <td><a href=" {{ url('/appointAs/'.$user->id) }}">appoint as
                    <?php echo($userrole=="admin" ? "user" : "admin") ?></a></td>
    </tr>
    <?php endforeach; ?>

</table>
</div>
</body>

</html>