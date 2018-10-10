<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>user</title>
</head>

<body>
<h1>Welcome, user</h1>
<a href="{{ url('/admin') }}">admin mode</a>
<div>
    <?php $user = Auth::user(); ?>
   <img src="{{ asset($user->picture->picture_path) }}" >    <!-- asset('/storage/'.DB::table('picture')->where('id', $user->picture_id)->first()->picture_path) -->
</div>

<form method="post" enctype="multipart/form-data" action="{{ url('/uploadPicture') }}" >

    <div>
        <label>select picture to upload</label>
    </div>
    <div>
        <input type="file" name="picture" id="picture" >
    </div>
    <div>
        <button type="submit">upload</button>
    </div>
</form>

<div id="App"><App/></div>
<script src="js/app.js"></script>

<a href="{{ url('/signout') }}">sign out</a>
</body>

</html>