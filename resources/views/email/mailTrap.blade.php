<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
 

    @if (Session::has('xx')))
    @dd(1)
    @endif
    
    ss
    <form action="message-sent" method="post">
        @csrf
        <h1> Set Mail Trap Varaibles </h1>
        <button type="submit"> fff </button>
    </form>
</body>
</html>