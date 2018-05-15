<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="icon" href="assets/img/lemonaid-logo.png">
    <title>
        Lemon Aid &#45; inicío de sessão
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/material-kit.css?v=2.0.1">
	
	
	<script type='text/javascript'>
		function sec() {
			var email=document.f1.e1.value;
			var password=document.f1.p1.value;
			
			if(email.length==0||password.length==0) {

				if(email.length==0) {
				s1.innerHTML="<font color='red'>Field is Required</font>";
				}
				
				if(password.length==0) {
				s2.innerHTML="<font color='red'>Field is Required</font>";
				}
			}
			
			else if (email.length>50||password.length>50) {

				if(email.length>50) {
				s3.innerHTML="<font color='red'>Characters should be less than 50 </font>";
				}
				
				if(password.length>50) {
				s4.innerHTML="<font color='red'>Characters should be less than 50 </font>";
				}
			}
			else {
				document.f1.submit();
			}
		}
	</script>

</head>

<body class="signup-page">
    <div class="page-header header-filter" filter-color="purple" style="background-image: url(&apos;assets/img/bg7.jpg&apos;); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ml-auto mr-auto">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Iniciar Sessão</h2>
                        <div class="card-body">
                                    <div class="social text-center">
                                        <button class="btn btn-just-icon btn-round btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-dribbble">
                                            <i class="fa fa-instagram"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-facebook">
                                            <i class="fa fa-facebook"> </i>
                                        </button>
                                        <h4>ou seja clássico:</h4>
                                    </div>
									
                                    <form class="form" name="f1" action="lemonzone.php" method="post">
                                        
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <input type="email" name="e1" maxlength="50" class="form-control" placeholder="Email...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                                <input type="password" name="p1" maxlength="50" placeholder="Palavra-passe..." class="form-control" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="text-center">
											<input type="hidden" name="h1" value="holla">
											<input type="button" value="Login" name="s1" onclick="sec()">
											OR <a href='secure_signup.php'>Sign-up</a>
											<!---
                                            <input type="submit" name="submit" value="Criar Contar" class="btn btn-primary btn-round">
											--->
                                        </div>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer ">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
        </footer>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="assets/js/material-kit.js?v=2.0.1"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="assets/assets-for-demo/js/material-kit-demo.js"></script>
</body>

</html>
