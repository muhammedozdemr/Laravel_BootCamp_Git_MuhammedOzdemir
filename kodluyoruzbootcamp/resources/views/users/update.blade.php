<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Güncelle</title>
  <style type="text/css">
    .container{
      margin-top: 10px;
      border-radius: 0.8em;
      border: 5px solid black;
    }
    .form-control{
      border: 2px solid black;
      border-radius: 0.8em;
      color: #17A2B8;
    }
  </style>
</head>
<body>

    <div class="container p-3 mb-2 bg-info text-white ">
      <h2 class="text-center font-weight-bold text-light mb-5">Kullanıcı Bilgileri Güncelle</h2>
      <div style="padding-left: 380px;" class="row">
     <div class="col-md-6">
<form action="/guncelle/{{$user->id}}" method="post">
    <div class="form-group">
    <label for="exampleName" class=" text-white font-weight-bold">Name</label>
    <input type="text" class="form-control " name="name" value="{{$user->name}}"  id="exampleInputEmail1">
  </div>
</div>
</div>
<div style="padding-left: 380px;" class="row">
<div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-white font-weight-bold">Email Adresi</label>
    <input type="email" class="form-control" name="email" value="{{$user->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  </div>
  </div>
  @csrf
  <div style="padding-left: 460px;" class="row">
<div class="col-md-6">
  <button  type="submit" class="btn btn-success">Güncelle</button>
  <a href="/kisiler"><li class="btn btn-primary">Geri Dön</li></a>
</div>
</div>
</form>
</div>
</div>

</body>
</html>
