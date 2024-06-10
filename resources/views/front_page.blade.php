<!DOCTYPE html>
<!-- <html>
    <body>
        <h1><Form>Form</Form></h1>
        <form method="post">
            <label>Enter your name: <input name="name"></label><br />
            <label>Enter your email:<input name="email"></label><br />
            <label>Enter your message:<input name="message"></label><br />
            <input type="submit"><br />
        </form>
    </body>
</html> -->

<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-body">
      <form name="front_page" id="front_page" method="post" action="{{url('store-form')}}">
       @csrf
       <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Message</label>
          <input type="text" name="message" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>