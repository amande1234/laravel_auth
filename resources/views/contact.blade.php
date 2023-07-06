<html>

<head>
 
</head>

<body>

@if (session('error'))
     <div class="alert alert-danger">
         {{ session('error') }}
     </div>
  
@endif


@if (session('success'))
     <div class="alert alert-success">
         {{ session('success') }}
     </div>
  
@endif




@if($errors->any())

<div class="alert alert-danger">

@foreach($errors->all() as $key=>$value )

<p class="text-align-center">{{$value}}</p>
@endforeach
</div>

@endif<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="/contact" enctype="multipart/form-data">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="Name" class="form-control" placeholder="Your Name *"  />
                        </div>

                        <div class="form-group">
                            <input type="text" name="Phone" class="form-control" placeholder="Your Phone Number *"  />
                        </div>

                        <div class="form-group">
                            <input type="text" name="Address" class="form-control" placeholder="Your Address *"  />
                        </div>

                        <div class="form-group">
                            <input type="text" name="Email" class="form-control" placeholder="Your Email *" />
                        </div>
                        
                        <div class="form-group">
                            <input type="file" name="Photo" class="form-control" placeholder="Your Photo *"  />
                        </div>
                       
                    </div>
                    <input type="hidden" value="{{ csrf_token()}}" name="_token" >
  

  <!-- <a class="btn btn-primary" href="/admin/question" role="button">List</a> -->
<button class="btn btn-primary" type="submit">Submit</button>
                    
                </div>
            </form>
</div>

</body>
</html>