<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>My Post</title>

</head>

<body class="page-sub-page page-my-properties page-account">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Navigation -->
    <div class="navigation" >
        
        <div class="container" >
            <header class="navbar" >
                
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav">
                        <a href="index-google-map-fullscreen.html"><img style ="width:50px; margin:-15px; padding:-15px;;"src="assets/img/back2.png" alt="HOME"><font style="font-style:bold; color:black;"> Home</font></a>              
            </div>
                
               
            </header><!-- /.navbar -->
        </div><!-- /.container -->
    </div><!-- /.navigation -->
    <!-- end Navigation -->
	
    <!-- Page Content -->
    <div id="page-content">
      

        <div class="container">
            <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 col-sm-2">
                <section id="sidebar">
                    
                    <aside>
					<nav class="collapse navbar-collapse bs-navbar-collapse">
					<header><h3>Account</h3></header>
                        <ul class="sidebar-navigation">
                            <li><a href="profile.php"><i class="fa fa-user"></i><span>Profile</span></a></li>
                            <li class="active"><a href="my-properties.php"><i class="fa fa-camera"></i><span>My Post</span></a></li>
                            <li><a href="pass.php"><i class="fa fa-lock"></i><span>Change Password</span></a></li>
                        </ul>
						</nav>
                    </aside>
                </section><!-- /#sidebar -->
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
                <!-- My Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="my-properties">
                       
                        <div class="my-properties">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>My Post</th>
                                        <th>Caption</th>
										
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
include('session.php');
$conn = new mysqli("localhost","root","","vcond");

$user = $login_session;
$data = "SELECT * from map where user='$user'";
$result = mysqli_query($conn,$data);

if(mysqli_num_rows($result) == 0){
	echo '<tr><td colspan="5"><center><h3 style="color:blue;">There no post yet!<h3></center></td></tr>';
	}else{

while($view= mysqli_fetch_assoc($result)){
?> 
                                    <tr>
                                        <td class="image">
                                            <a href="#"><img alt="" src="upload/<?php echo $view["file"];?>"></a>
                                        </td>
                                        <td><div class="inner">
                                            <?php echo $view["caption"];?>
											<figure style="color:green">(GMT+7)<?php echo $view["time"];?></figure>
                                            <div class="tag price"><?php echo $view["situation"];?></div>
											
											<a href="#" class="edit"><i class="fa fa-pencil"></i>Edit</a>
                                        </div>
                                        </td>
										
                                        <td class="actions">
                                            
                                            <a href="#"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <?php
}
	}
?>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
							
                            <!-- Pagination -->
                        <!--      <div class="center">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                            </div>        -->
							
                        </div><!-- /.my-properties -->
                    </section><!-- /#my-properties -->
                </div><!-- /.col-md-9 -->
                <!-- end My Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
   
   </div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->

</body>
</html>