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
            <form method="post" action="/contact/list/edit" enctype="multipart/form-data">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" value="{{$details['name']}}" class="form-control" placeholder="Your Name *"  />
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" value="{{$details['phone']}}" class="form-control" placeholder="Your Phone Number *"  />
                        </div>

                        <div class="form-group">
                            <input type="text" name="address" class="form-control"value="{{$details['email']}}" placeholder="Your Address *"  />
                        </div>

                        <div class="form-group">
                            <input type="text"  class="form-control"value="{{$details['address']}}" placeholder="Your Email *" />
                        </div>
                        
                        <div class="form-group">
                        <img src="<?php echo url('images/' . $details['photo']); ?>" style="width:100px;height:50px"/>
                            <input type="file" name="photo" class="form-control" value="{{$details['photo']}}" placeholder="Your Photo *"  />
                        </div>

                        <input type="hidden" name="photo_val" value="{{ $details['photo'] }}"/>
                       
                    </div>
                    <input type="hidden" value="{{ $details['id']}}" name="id" >
                    <input type="hidden" value="{{ csrf_token()}}" name="_token" >
  

  <!-- <a class="btn btn-primary" href="/admin/question" role="button">List</a> -->
<button class="btn btn-primary" type="submit">Submit</button>
                    
                </div>
            </form>
</div>

</body>
</html>