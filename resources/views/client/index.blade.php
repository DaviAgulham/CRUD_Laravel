<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Client Management</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('client.index')}}" method="get">
                    <div class="row">
                        <div class="col-sm-4 my-2">
                            <input type="text" class="form-control" name="texto" value="{{$text}}">
                        </div>
                        <div class="col-auto my-2">
                            <input type="submit" class="btn btn-primary" value="Search">
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Firt</th>
                                <th>Last</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Hobby</th>  
                                <th>Actions</th> 
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($clientList)<=0)
                            <tr>
                                <td colspan="8">
                                    Client Not Found
                                </td>
                            </tr>
                        @else    
                        @foreach($clientList as $clientlist)    
                            <tr>
                                <td> {{$clientlist->id}}</td>
                                <td>{{$clientlist->first}}</td>
                                <td>{{$clientlist->last}}</td>
                                <td>{{$clientlist->email}}</td>
                                <td>{{$clientlist->phone}}</td>
                                <td>{{$clientlist->location}}</td>
                                <td>{{$clientlist->hobby}}</td>
                                <td> 
                                    <a href="{{route('client.edit', $clientlist->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$clientlist->id}}">
                                        Del
                                    </button>
                                </td>
                                
                            </tr>
                            @include('client.delete')
                        @endforeach  
                        @endif    
                        </tbody>
                    </table>
                    {{$clientList->links()}}
                </div>
            </div>
        </div>
        <div class="col-auto my-2">
            <a href="{{route('client.create')}}" class="btn btn-success">Add Client</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>