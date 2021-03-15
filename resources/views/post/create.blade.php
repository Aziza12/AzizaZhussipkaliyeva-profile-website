<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create blog</title>
</head>
<body>

   <form method="POST" action="{{route('add-blog')}}">
   @csrf
   <input type="text" name="title" placeholder="title">
   <input type="text" name="body" placeholder="body">
   <button type="submit">POST</button>
   </form> 
</body>
</html>