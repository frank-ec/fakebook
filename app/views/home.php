<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel = "stylesheet" href="../public/css/bootstrap.min.css">
    <link rel = "stylesheet" href="../public/css/all.min.css">
    <link rel = "stylesheet" href="../public/css/general.css">
</head>
<body>
        
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" > <li class="fas fa-user" ></li> </span>
                            <input type="text" name= "user" class="form-control" placeholder="<?= '_USER_' ?>">
                        </div>    
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" > <li class="fas fa-key" ></li> </span>
                            <input type="text" name="password" class="form-control" placeholder="<?= '_LOGIN_' ?>">
                        </div>    
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" > <li class="fas fa-key" ></li> </span>
                            <input type="text" name="password" class="form-control" placeholder="<?= '_LOGIN_' ?>">
                        </div>    
                    </div>


                    <button class="btn btn-primary float-right "><?= '_LOGIN_' ?> </button>
                    <a class="btn btn-link" href="?url=createAccount"><?= '_CREATE_ACCOUNT_' ?> </a>

                </form>
            </div>

            <div class="col-9">Derecha</div>
        
        </div>    
    </div>

</body>
</html>