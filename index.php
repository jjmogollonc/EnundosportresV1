    <?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Enundosportres</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>


        <style>
        @media screen and (max-width:480px) {
            #search {
                width: 80%;
            }

            #search_btn {
                width: 30%;
                float: right;
                margin-top: -32px;
                margin-right: 10px;
            }
        }
        </style>
    </head>

    <body>
        <header>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#collapse" aria-expanded="false">
                            <span class="sr-only">Navegación</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="http://localhost/enundosportres/profile.php" class="navbar-brand">Enundosportres</a>
                    </div>
                    <div class="collapse navbar-collapse" id="collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Nosotros</a></li>
                            <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Producto</a>
                            </li>
                            <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control"
                                    id="search">
                            </li>
                            <li style="top:10px;left:20px;"><button class="btn btn-primary"
                                    id="search_btn">Buscar</button>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                        class="glyphicon glyphicon-shopping-cart"></span>Cart<span
                                        class="badge">0</span></a>
                                <div class="dropdown-menu" style="width:400px;">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-3">Inicia sesión...</div>

                                            </div>
                                        </div>
                                        <div class="panel-body"></div>
                                        <div class="panel-footer"></div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                        class="glyphicon glyphicon-user"></span>Inicio sesión</a>
                                <ul class="dropdown-menu">
                                    <div style="width:300px;">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">Iniciar sesión</div>
                                            <div class="panel-heading">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" required />
                                                <label for="email">Password</label>
                                                <input type="password" class="form-control" id="password" required />
                                                <p><br /></p>
                                                <a href="#" style="color:white; list-style:none;"> Password
                                                    Olvidado</a><input type="submit" class="btn btn-success"
                                                    style="float:right;" id="login" value="Login">
                                            </div>
                                            <div class="panel-footer" id="e_msg"></div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="customer_registration.php"><span
                                        class="glyphicon glyphicon-user"></span>Regístrate</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           
            <br>
            <br>
            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2 col-xs-12">
                        <div id="get_category">
                        </div>
                        <div id="get_brand">
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-xs-12" id="product_msg">
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">Productos</div>
                            <div class="panel-body">
                                <div id="get_product">

                                </div>

                            </div>
                            <div class="panel-footer">
                                <li><a href="http://localhost/enundosportres/profile.php">Enundosportres</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
    </body>

    </html>