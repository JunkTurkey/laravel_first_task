<html>

<head>
    <title>refisterform</title>
</head>

<body>
<h1>refisterform</h1>
<form method="post" action="{{ url('/register') }}" >
    @csrf

    <div>
        <input id="email" name="email" type="text" placeholder="email" required>
    </div>
    <div>
        <input id="password" name="password" type="password" placeholder="password" required>
    </div>
    <div>
        <button type="submit">in</button>
    </div>
</form>
</body>

</html>