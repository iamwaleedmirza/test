<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
</head>

<body>
    <h1>contact us here!</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <label> Name</label>
        <input type="text" name="name"><br>
        <label> Email</label>
        <input type="text" name="email"><br>
        <label> Message</label>
        <input type="text" name="msg"><br>
        <button type="submit">Sent</button>



    </form>

</body>

</html>