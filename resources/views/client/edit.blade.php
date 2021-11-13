<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Edit Client</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('client.update', $client->id)}}" method="post">
                @csrf 
                @method('PUT')   
                    <div class="form-group">
                        <label for="first">Frist Name</label>
                        <input type="text" class="form-control" name= "first" required maxlength="50" value="{{$client->first}}">
                    </div>
                    <div class="form-group">
                        <label for="last">Last Name</label>
                        <input type="text" class="form-control" name= "last" required maxlength="50" value="{{$client->last}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name= "email" required maxlength="50" value="{{$client->email}}">
                    </div>
                    <div class="form-group">
                        <label for="phone"> Phone </label>
                        <input type="text" class="form-control" name= "phone" required maxlength="15" value="{{$client->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name= "location" required maxlength="100" value="{{$client->location}}">
                    </div>
                    <div class="form-group">
                        <label for="hobby">Hobby</label>
                        <input type="text" class="form-control" name= "hobby" required maxlength="50" value="{{$client->hobby}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class= "btn btn-primary my-4" value= "Save">
                        
                        <a href="javascript:history.back()" class= "btn btn-danger">Back to the list</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>