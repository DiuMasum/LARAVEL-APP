<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
      <div class="container">
        <x-input type="text" name="name" label="please enter your name"/>
        <x-input type="email" name="email" label="please enter your email"/>
        <x-input type="password" name="password" label="password"/>
        <x-input type="password" name="password_confirmation" label="confirm password"/>
        </div>

          <button class="btn btn-primary">submit</button>
    </div>
</form>
  </body>
</html>