<html>

<head>
    <title>fuck u</title>
</head>

<body>
<h1>Send email mutherfucker</h1>
<form method="post" action="{{ url('/sendmail') }}" >
    @csrf

    <div>
        <input id="email" name="email" type="text" placeholder="example@your.domen" required>
    </div>
    <div>
        <input id="message" name="message" type="text" placeholder="your message" required>
    </div>
    <div>
        <button type="submit">send</button>
    </div>
</form>
</body>

</html>