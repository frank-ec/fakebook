<?php require_once '../app/views/layout/header.php' ;
?>

<h1><?= '_CREATE_ACCOUNT_' ?> </h1>

<div class="row">
            <div class="col-12">
                <form action="processAccount">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" > <li class="fas fa-user" ></li> </span>
                        </div>    
                        <input type="text" name= "" class="form-control" placeholder="<?= '_NAME_' ?>">

                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" > <li class="fas fa-key" ></li> </span>
                        </div>    
                        <input type="text" name="" class="form-control" placeholder="<?= '_USERNAME_' ?>">

                    </div>
                    
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" > <li class="fas fa-envelope" ></li> </span>
                        </div>    
                        <input type="email" name="" class="form-control" placeholder="<?= '_EMAIL_' ?>">

                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" > <li class="fas fa-key" ></li> </span>
                        </div>    
                        <input type="password" name="" class="form-control" placeholder="<?= '_PASSWORD_' ?>">

                    </div>

                    <button class="btn btn-success float-right" type="submit"> <li class="fas fa-user-plus" ></li> <?= '_CREATE_ACCOUNT_' ?> </button>
                    

                </form>
            </div>


<?php require_once '../app/views/layout/footer.php' ;

?>