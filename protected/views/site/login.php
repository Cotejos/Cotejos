<style TYPE="text/css">
    .redes_sociales{
        width: 60px;
    }
</style> 
<div class="row">
    <div class="col-lg-12">
        <header class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-contents">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand">Cotejos</a>
                </div>
            </div>
    </div>

    <div class="col-lg-12">

        <div class="col-lg-1">

        </div>

        <div class="col-lg-4">
            <button type="button" class="btn btn-primary">Ingreso Manual</button><br><br>
            <img src="<?php echo Yii::app()->theme->baseUrl . '/imagenes/Social-Network-Facebook-icon.png' ?>" alt="Facebook" class ="redes_sociales">
            <img src="<?php echo Yii::app()->theme->baseUrl . '/imagenes/Google-plus-icon.png' ?>" class ="redes_sociales" alt="Google Plus">
        </div>

        <div class="col-lg-2">

        </div>

        <div class="col-lg-4">
            <form role="form">
                <div class="form-group">
                    <label for="user_email">Usuario</label>
                    <input type="email" class="form-control" id="user_email" placeholder="Ingresa tu email">
                </div>

                <div class="form-group">
                    <label for="user_password">Contraseña</label>
                    <input type="password" class="form-control" id="user_password" placeholder="Ingresa tu contraseña">
                </div>
            </form>
            <button type="button" class="btn btn-primary">Ingresar</button>
        </div>

        <div class="col-lg-1">

        </div>

    </div>
</div>