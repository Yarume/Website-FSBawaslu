<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login | BAWASLU BALI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="mt-5 col-5 mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                LOGIN USER
            </div>
            <div class="card-body">
                <form action='auth/admin' method="post">
                    <label for="inputUsername" class="form-label">
                        Username
                    </label>
                    <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Masukkan Username...">
            </div>
            <div class="card-body">

                <label for="inputPassword" class="form-label">
                    Password
                </label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukkan Pasword...">
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>