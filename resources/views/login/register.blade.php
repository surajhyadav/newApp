<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container mt-5">

           



        <div class="row">

            <div class="col-md-6">
                
            @if (session('success'))
                        
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>    
            @endif

            @if (session('error'))
                            
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>    
            @endif
                

            

                <div class="card">
                    <div class="card-header">
                        Register Form
                    </div>
                    <div class="card-body">
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" /><br>

                            <label>Email Id:</label>
                            <input type="email" class="form-control" name="email" /><br>

                            <label>Password:</label>
                            <input type="password" class="form-control" name="password" /><br>

                            <input type="submit" class="btn btn-primary" name="submit" value="Register" /><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>