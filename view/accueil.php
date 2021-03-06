<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/M2l/css/accueil.css">

<div class="container" >
    <div class="row">
        <h1 style="color:white" class="text-center">Bienvenue sur le site des Maisons des Ligues de Lorraine</h1><hr>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                <h2>LOGIN</h2>
                                <div class="form-group">
                                    <input type="text" name="login" id="login" tabindex="1" class="form-control" placeholder="Identifiant" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
                                </div>
                                <div class="col-xs-6 form-group pull-left checkbox">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label for="checkbox1">Remember Me</label>
                                </div>
                                <div class="col-xs-6 form-group pull-right">
                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                </div>
                            </form>

                            <form id="register-form" action="#" method="post" role="form" style="display: none;">
                                <h2>Mot de passe oublié</h2>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-mail" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="mdp-submit" id="mdp-submit" tabindex="4" class="form-control btn btn-register" value="Envoyer">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 tabs">
                            <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
                        </div>
                        <div class="col-xs-6 tabs">
                            <a href="#" id="register-form-link"><div class="register">MOT DE PASSE OUBLIE</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>