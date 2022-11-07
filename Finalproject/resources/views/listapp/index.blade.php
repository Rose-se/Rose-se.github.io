<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutant List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
<body>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-10 text center">
                <h2>List Mutant</h2>
            </div>
            <div>
                <a href="{{url('mutant-create')}}" class="btn btn-success">Create List</a>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{   $message    }}</p>
            </div>
            @endif
                <table borderd="1" class="table table-bordered">
                <tr>
                <th>No.</th>
                <th>list name</th>
                <th>list fullname</th>
                <th>list codename</th>
                <th>list address</th>
                <th width="300px">Action</th>
                </tr>
            @foreach ($object as $item)
                <tr>
                <td>{{$item->name}} </td>
                <td>{{$item->fullname}} </td>
                <td>{{$item->codename}} </td>
                <td>{{$item->address}} </td>
                <td>
                    <form action="{{ route('listapp.destroy',$item->id)}}" method="POST">
                    <a href="{{ route('listapp.edit',$item->id)}}"class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
                </table> 
        </div>
    </div>   
</body>
</html>