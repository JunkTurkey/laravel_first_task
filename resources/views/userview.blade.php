<html>

<head>
    <title>user</title>
</head>

<body>
<h1>Welcome, user</h1>
<div>
    <img src="{{ asset('/storage/'.DB::table('picture')->where('id', $user->picture_id)->first()->picture_path) }}" >
</div>

<form method="post" enctype="multipart/form-data" action="{{ url('/uploadPicture') }}" >
    @csrf
    <div>
        <label>user select picture to upload</label>
    </div>
    <div>
        <input type="file" name="picture" id="picture" >
    </div>
    <div>
        <button type="submit">upload</button>
    </div>
</form>
<div id="App"></div>
<script src="js/app.js"></script>
<h3>Send email mutherfucker</h3>
<form method="post" action="{{ url('/sendmail') }}" >
    @csrf
    <div>
        <input id="email" name="email" type="text" placeholder="example@your.domen" required>
    </div>
    <div>
        <input id="message" name="message" type="text" placeholder="your message"  required>
    </div>
    <div>
        <button type="submit">send</button>
    </div>
</form>
</body>

</html>