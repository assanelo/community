<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

	<title></title>
</head>
<body>

<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-between">
    <!-- Left elements -->
    <div class="d-flex">
      <!-- Brand -->
      <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
        <img
          src="assets/img/logo.png"
          height="20"
          width="30"
          alt=""
          loading="lazy"
          style="margin-top: 2px;"
        />
      </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


      <!-- Search form -->
        <div class="navbar-collaps" style="margin-left: 100px;">
          <form class=" navbar-form" role= "search">
            <div class="input-group"  >
              <input type ="text" class="form-control" placeholder="Chercher" name="q">
              <div class="input-group-btn">
                <button class ="btn btn-danger" type="submit" style="color: blue;">
                <i class ="glyphicon glyphicon-search" ></i></button>
              </div>
            </div>
          </form>
        </div>
        
        
      </form>
    </div>
    <!-- Left elements -->


    <!-- Center elements -->
    <ul class="navbar-nav flex-row d-none d-md-flex">
      <li class="nav-item me-3 me-lg-1 active">
        <a class="nav-link" href="#">

          <span><i class="fas fa-home fa-lg"></i></span>
          <span class="badge rounded-pill badge-notification bg-danger"></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
             <img
        src="https://th.bing.com/th/id/OIP.n20LNiiizZgWOaOifB2GjwHaHO?pid=ImgDet&rs=1"
        style="margin-left: -10px;"
        height="30"
        alt="OurApp"
        loading="lazy"
        style="margin-top: -1px;"
        />
        </a>
      </li>&nbsp; &nbsp;

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
        </a>
      </li>&nbsp; &nbsp;&nbsp;

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
            <img
        src="https://th.bing.com/th/id/R.19d203f25574927cd807390866cd637e?rik=D5ae1AsfFTKYsQ&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_470955.png&ehk=3AiIz%2fEYsIpRJy5vC1V9d2%2fNPBoWIYPVXjLGl6yo%2bCs%3d&risl=&pid=ImgRaw&r=0"
        style="margin-left: 30px;"
        height="30"
        alt="OurApp"
        loading="lazy"
        style="margin-top: -1px;"
        />
        </a>
      </li>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
            <img
        src="https://img2.freepng.fr/20180715/zs/kisspng-person-logo-royalty-free-people-travel-5b4bde06c63661.9701405315316986948119.jpg"
        style="margin-left: 20px;"
        height="30"
        alt="OurApp"
        loading="lazy"
        
        />
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
        </a>
      </li>&nbsp; &nbsp;&nbsp; &nbsp;

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
            <img
        src="https://th.bing.com/th/id/OIP.3XVXDKHgj5v6mlLblNQQ1AHaHa?pid=ImgDet&rs=1"
        style="margin-left: 20px;"
        height="30"
        alt="OurApp"
        loading="lazy"
        style="margin-top: -1px;"
      
        />
          <span><i class="fas fa-shopping-bag fa-lg"></i></span>
        </a>
      </li>

      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-users fa-lg"></i></span>
          <span class="badge rounded-pill badge-notification bg-danger"></span>
        </a>
      </li>
    </ul>
    <!-- Center elements -->

    <!-- Right elements -->
    <ul class="navbar-nav flex-row">
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link d-sm-flex align-items-sm-center" href="#">
         
        </a>
      </li>
      <li class="nav-item me-3 me-lg-1">
        <a class="nav-link" href="#">
          <span><i class="fas fa-plus-circle fa-lg"></i></span>
        </a>
      </li>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </li>
      
<a class="navbar-brand me-2" href="deconnexion.php" >
       <img
        src="https://th.bing.com/th/id/R.e87e7f9a5767fe18bcf305ff6cb474b0?rik=%2bbsuRyjG%2bI435A&riu=http%3a%2f%2fmegastuces.com%2fwp-content%2fuploads%2f2014%2f12%2flogout.png&ehk=Azufihblp18pzwzAQkDeYtB%2bQz997ODp8NsY1END48M%3d&risl=&pid=ImgRaw&r=0"
        style="margin-left: 100px;"
        style="margin-top: -100px;"
        height="16"
      />
    </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          

  </div>
</nav>
<br/><br/>
<div class="container" >
    <div class="row">

            <div class="col-md-2" >
                        <div class="well">
                           

<h6>  <a href="#"> 
Groupes</a></h6><br/>
<h6><a href="#"> 
Sciences</a></h6><br/>
<h6><a href="#"> 
Sante</a></h6><br/>
<h6><a href="#"> 
Alimentation</a></h6><br/>
<h6><a href="#"> 
Film</a></h6>

                        </div>

            </div>
             <div class="col-md-6" >
                        <div class="well">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div><br/><br/><br/>
                        <div class="well">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div><br/><br/><br/>

                        <div class="well">
<p> 

                          
<img
        src="https://th.bing.com/th/id/OIP.yHEBEhFfZXy_vgCyqrOrswHaE8?pid=ImgDet&w=5616&h=3744&rs=1"
        style="width:100%;"
         style="margin-top: -100px;"
        height="400"
      />X a partage un <a href="#"> 
lien</a> 
</p>
<p> 

<a class="btn">j'aime</a>
<a class="btn">Commenter</a>
<a class="btn">Partager</a>
    </p>

      <br/><br/>

    
        
        
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div> <br/><br/>


                        <div class="well">
   <br/><br/>

<img
        src="https://th.bing.com/th/id/OIP.8hOkgnKS9NeC7_s_pwLIDAHaGy?pid=ImgDet&w=600&h=550&rs=1"
        style="margin-left: 100px;"
         style="margin-top: -100px;"
        height="400"
      /><br/><br/>

    
        
        
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div>

            </div>
             <div class="col-md-4" >
                        <div class="well">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        </div>

            </div>
    </div>

</div>

 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
    </script>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous">
    </script>
     
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
    </script>
    
<p></p>



</body>
</html>