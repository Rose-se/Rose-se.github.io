<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Add Mutant</h2>
            </div>
            <div>
                <a href="{{url('mutant-index')}}" class="btn btn-primary">Back</a>
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            <form action="{{ route('listapp.store')}}" method="POST"enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-g my-2">
                        <strong>Mutant Name</strong>
                        <input type="name" name="name" class="form-control" placeholder="Mutant Name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="form-g my-2">
                        <strong>Fullname</strong>
                        <input type="fullname" name="fullname" class="form-control" placeholder="Fullname">
                        @error('fullname')
                        <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-g my-2">
                        <strong>Codename</strong>
                        <input type="codename" name="codename" class="form-control" placeholder="Codename">
                        @error('codename')
                        <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-g my-2">
                        <strong>Mutant address</strong>
                        <input type="address" name="address" class="form-control" placeholder="Address">
                        @error('address')
                        <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="mt-3 btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>