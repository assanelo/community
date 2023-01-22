
<?php
session_start();
if(isset($_SESSION['login'])){//Si la variable session a été créé
    header("location:index.php");
    exit();
}
if(isset($_POST['loginSubmit'])){//SI on clique sur le bouton connexion

    //Appel du fichier de connexion à la bd
    require_once('connexion_db/conn_db.php');

    //Récupération des données par la méthode POST
    $login=$_POST['login'];
    $mdp=$_POST['password'];
    //$mdpHash=sha1($mdp);

    //Définition de la requète de selection
    $sql_auth="select count(*) nbl from customers where email='$login' and password='$mdp'";
    $query_auth=mysqli_query($conn,$sql_auth) or die(mysqli_error($conn));
    $auth=mysqli_fetch_object($query_auth);
    if($auth->nbl==1){//Si l'authentification est correcte
        //Création d'une variable session
        $_SESSION['login']=$login;
        header("location:index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login & Register</title>
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>

						<div class="card-3d-wrap mx-auto" id="contain"   style="height: 500px;">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group" style="margin-bottom: 5%;">
												<input type="text" name="login" class="form-style" placeholder="Login" id="login" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2" style="margin-bottom: 5%;">
												<input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<input type="submit" name="loginSubmit" value="submit" class="btn mt-4" style="margin-bottom: 5%;">
											
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                            				</form>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<form method="POST" action="inscription.php">
												<h4 class="mb-4 pb-3">Sign Up</h4>
												<div class="form-group" style="margin-bottom: 5%;">
													<input type="text" name="prenom" class="form-style" placeholder="Prénom" id="prenom" autocomplete="off" required>
													<i class="input-icon uil uil-user"></i>
												</div>	
												<div class="form-group" style="margin-bottom: 5%;">
													<input type="text" name="nom" class="form-style" placeholder="Nom" id="nom" autocomplete="off" required>
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="form-group" style="margin-bottom: 5%;">
													<input type="text" name="phone" class="form-style" placeholder="Téléphone" id="phone" autocomplete="off">
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="field">
											        <label>Sexe : </label>
												        <input type="radio" name="sexe" value="Femme">Femme
												        <input type="radio" name="sexe" value="Homme">Homme
										    	</div>
												<div class="form-group mt-2" style="margin-bottom: 5%;">
													<input type="email" name="email" class="form-style" placeholder="Email" id="email" autocomplete="off" required>
													<i class="input-icon uil uil-at"></i>
												</div>	
												<div class="form-group mt-2" style="margin-bottom: 5%;">
													<input type="password" name="password" class="form-style" placeholder="Mot de Passe" id="password" autocomplete="off" required>
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												
												<input type="submit" name="RegisterSubmit" value="submit" class="btn mt-4">
											</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      			<div class="container">
			      				<div class="row">
			      					<div class="col-md-2 col-md-offset-5">
			      						<img src="assets/img/login.jpg" style="height: 500px;
																			  width: 700px;
																			  border: 2px solid;
																			  border-radius: 5px;">
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      		
			      			
			      			
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>