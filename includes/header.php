<body>
    <header id="header" class="top-head">
        <!-- Static navbar -->
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="row">

                <div class="left-rs">

                    <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="index.html" class="navbar-brand" style="margin-left: 10px;"><img src="assets/images/LostCard.png" alt="" /></a>
                    </div>

                </div>

                <div class="" >

                    <div class="right-nav">

                        <div class="login-sr">
                            <div class="login-signup" >
                                <ul>
                                    <li><a class="btn btn-default" data-toggle="modal" data-target="#myModal2" href="#" style="color:black;">Connexion</a></li>
                                    <li><a class="btn btn-success" data-toggle="modal" data-target="#myModal3" href="#" style="color:white;">Inscription</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="help-r hidden-xs">
                            <div class="help-box">
                                <ul>
                                    <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Lange</span><img src="assets/images/traduction.png" alt="" /> </a> </li>
                                    <li> <a href="#"><img class="h-i" src="assets/images/user.png" alt="" />Profile </a> </li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-b hidden-xs">
                            <div class="nav-box">
                                <ul>
                                    <li><a href="index.php">Accueil</a></li>
                                    <li><a href="objettrouver.php">Objets trouvés</a></li>
                                    <li><a href="recherche.php">Recherche d'une pièce</a></li>
                                    <li><a href="declaration.php">Déclaration de perte</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!--/.container-fluid --> 
        </nav>
    </header>

    <!-- Modal traduction -->
    <div class="modal fade lug" id="myModal" role="dialog" >
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color:#0b9444;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Traduction</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <li><a href="#"><img src="assets/images/flag-up-1.png" alt="" /> English</a></li>
                    <li><a href="#"><img src="assets/images/flag-up-2.png" alt="" /> Français </a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Connexion -->
    <div class="modal fade lug" id="myModal2" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color:#0b9444;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Connexion</h4>
            </div>
            <div class="modal-body">
            <form class="md-float-material form-material" action='dashboard.php' >

                <div class="auth-box card">
                    <div class="card-block">

                        <div class="form-group form-primary">
                            <input type="email" name="email" class="form-control" required=""
                                placeholder="Addresse email">
                            <span class="form-bar"></span>
                        </div>
                        <div class="form-group form-primary">
                            <input type="password" name="password" class="form-control" required=""
                                placeholder="Mot de passe">
                            <span class="form-bar"></span>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="submit"
                                    class="btn btn-success btn-md btn-block waves-effect waves-light text-center m-b-20">Se connecter</button>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-10">
                                <p class="text-inverse text-left">Pas de compte ? <a href="register.php"><b class="f-w-600">Inscrivez-vous ici</b></a></p>
                                <p class="text-inverse text-left"><a href="register.php"><b class="f-w-600">Mot de passe oublié ?</b></a></p>
                            </div>

                        </div>

                    </div>

                </div>

            </form>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Inscription -->
    <div class="modal fade lug" id="myModal3" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color:#0b9444;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inscription</h4>
            </div>
            <div class="modal-body">
                <form class="md-float-material form-material">

                    <div class="auth-box card">

                        <div class="card-block">

                            <div class="form-group form-primary">
                                <input type="text" name="nom" class="form-control" required=""
                                    placeholder="Nom">
                                <span class="form-bar"></span>
                            </div>

                            <div class="form-group form-primary">
                                <input type="text" name="email" class="form-control" required=""
                                    placeholder="Addresse email">
                                <span class="form-bar"></span>
                            </div>

                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group form-primary">
                                        <input type="text" name="locality" class="form-control" required=""
                                            placeholder="Localité">
                                        <span class="form-bar"></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                
                                    <div class="form-group form-primary">
                                        <input type="text" name="numero" class="form-control"
                                            required="" placeholder="Numéro de tél">
                                        <span class="form-bar"></span>
                                    </div>

                                </div>

                            </div>
                            
                            <div class="form-group form-primary">
                                <input type="text" name="password" class="form-control" required=""
                                    placeholder="Mot de passe (8 carractères minimum, majuscule et chiffres compris)">
                                <span class="form-bar"></span>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" name="password" class="form-control" required=""
                                    placeholder="Confirmé le mot de passe">
                                <span class="form-bar"></span>
                            </div>


                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit"
                                        class="btn btn-success btn-md btn-block waves-effect text-center m-b-20">
                                        Créer
                                    </button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="text-inverse text-left m-b-0">Vous avez déjà un compte ?</p>
                                    <p class="text-inverse text-left"><a href="index.php"><b class="f-w-600">Se connecter</b></a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>


    <div id="sidebar" class="top-nav" >
        <ul id="sidebar-nav" class="sidebar-nav">       
        <li><a href="index.php">Accueil</a></li>
        <li><a href="objettrouver.php">Objets trouvés</a></li>
        <li><a href="recherche.php">Recherche d'une pièce</a></li>
        <li><a href="declaration.php">Déclaration de perte</a></li>
        <li><a data-toggle="modal" data-target="#myModal" href="#">Traduction</a></li>
        <li><a href="profile.php">Profile</a></li>
        </ul>
    </div>
