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

    <form action="{{url('/')}}/customer" method="post">
        @csrf
        <div class="container mt-5">
            <h2>Customer Form</h2>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="">
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="">
              </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="" placeholder="Password">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>
  </body>
</html>