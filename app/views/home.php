<?php require_once '../app/views/layout/header.php' ;

?>
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

                    <button class="btn btn-primary float-right "><?= '_LOGIN_' ?> </button>
                    <a class="btn btn-link" href="createAccount"><?= '_CREATE_ACCOUNT_' ?> </a>

                </form>
            </div>

            <div class="col-9">Derecha</div>
        
        </div>    
<?php require_once '../app/views/layout/footer.php' ;

?>