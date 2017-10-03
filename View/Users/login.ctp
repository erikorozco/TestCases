<div class="container">
  <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Bienvenido</h3>
                </div>
                <div class="panel-body">
                    <form role="form" id="UserLoginForm" method="post" action="/Optical/">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario" name="data[User][username]" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="data[User][password]" type="password">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-success btn-block">Entrar</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>