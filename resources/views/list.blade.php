
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contats list</title>
  </head>


<body>
@if($success=session('success'))
<div class="alert alert-success">
<p class="text-center">{{$success}}</p>
</div>
@endif
@if($error=session('error'))
<div class="alert alert-danger">
<p class="text-center">{{$error}}</p>
</div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Photo</th>
      <th scope="col">Created_by</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($contact as $key=>$values) 

    <tr>
        
    <td>{{ $values->name }}</td>
    <td>{{ $values->phone }}</td>
    <td>{{ $values->address }}</td>
    <td>{{ $values->email }}</td>
    <td><img src="<?php echo url('images/'.$values->photo ); ?>" width="30"></td>
    <td>{{ $values->created_by }}</td>
     <td>
        <a href="/contact/list/edit/{{ $values->id }}" class="btn btn-primary">EDIT</a>
        <a href="/contact/list/delete/{{ $values->id }}" class="btn btn-danger">DELETE</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>