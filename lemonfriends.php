<!DOCTYPE html>
<html>
<head>
<title>Lemon Aid</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css/w3.css">
<link rel="stylesheet" href="w3css/w3-theme-blue-grey.css">
<link rel='stylesheet' href='w3css/css?family=Open+Sans'>
<link rel="stylesheet" href="w3css\web-fonts-with-css\css\fontawesome-all.min.css">

<style>
	html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

<script src='jquery.js'></script>
<script type='text/javascript'>
	$(document).ready(function() 
	{
		$("#sam").hide(2000);
	});
</script>

<script type='text/javascript'>
	
	function secStatus() {
		var stat=document.f1.status.value;
		stat = stat.trim();

		if(stat.length==0) {
				check.innerHTML="<font color='red'> Field is Required </font>";
		}
		else if(stat.length>300) {
				check.innerHTML="<font color='red'> Maximum 300 Characters!</font>";
			
		}
		else {
				
				document.f1.submit();
		}
	}
	
	$(document).ready(function() 
	{
		$("#sam").hide(2000);
	});
</script>

<script type='text/javascript'>
	function secFriends() {
		var f_search=document.f2.search.value;
		if(f_search==0) {
			s1.innerHTML="<font color='red'>Field is Required</font>";
		}
			
		else if(f_search>50) {
			s2.innerHTML="<font color='red'>Characters should be less than 50 </font>";
		}
			
		else {
				document.f2.submit();
			}
			
		}
</script>

<script type='text/javascript'>
	function secSendRequest() {
		var f_search=document.f3.search.value;
		if(f_search==0) {
			s1.innerHTML="<font color='red'>Field is Required</font>";
		}
			
		else if(f_search>50) {
			s2.innerHTML="<font color='red'>Characters should be less than 50 </font>";
		}
			
		else {
				document.f3.submit();
			}
		}
</script>

	
</head>
<body class="w3-theme-l5">

<?php 
	Session_start(); 
	if(!isset($_SESSION["user_id"])) {
		header("Location: login.php");
		exit;
	}
	
	if (empty($_POST['search'])) {
		header("Location: lemonzone.php");
		exit;
	}
	else {
		$name=$_POST["search"];
	}
?>

	
	<?php
	/***
		Session_start();
		$email=$password=$no_msg="";
			
		if(!isset($_SESSION['user_id']) && !isset($_POST['h1'])) {
			 Header("Location: login.php");
		}
			
		if(isset($_SESSION['user_id'])) {
				$_POST['h1'] = "holla";
				$_POST['e1'] = $_SESSION['email'];
				$_POST['p1'] = $_SESSION['password'];
				$no_msg = 1;
		}
		
		function sec($data) {
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
		
		if($_POST['h1']=="holla") {
			$email=sec($_POST["e1"]);
		    $password=$_POST["p1"];
		}
		
		$query="select * from students where email='$email' and password='$password'";
		$resid=MySQLi_Connect('localhost','root','root','shangout');
		if(MySQLi_Connect_Errno()) {
			echo "Failed to connect to MySQL.";
		}
		else {
			$result=MySQLi_Query($resid,$query);
			$array=MySQLi_Fetch_Assoc($result);
			if($array) {
				$_SESSION["user_id"] = $array["id"]; 
				$user_here = $_SESSION["user_id"];
				$_SESSION["name"] = $array["name"];
				$_SESSION["password"] = $array["password"];
				$_SESSION["age"]  = $array["AGE"];
				$_SESSION["email"] = $array["email"];
				$_SESSION["gender"] = $array["gender"];
				
				if($no_msg!=1) {
					?>
						<script type="text/javascript" src="notify.js"></script>
						<script>
							$(document).ready(function() {
							  $.notify(
							  "Login Successful!","success");
							});
						</script>
				<?php }
			}

			MySQLi_Close($resid);		
		}
		***/
	?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Lemon Aid</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Notícias"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Definições"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Mensagens"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
  </div>
   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Terminar sessão (Logout)">
		<i class="fas fa-sign-out-alt"></i>
   </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">O Meu Perfil</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">O Meu Perfil</h4>
         <p class="w3-center"><img src="images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil-alt fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
			<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-notch fa-fw w3-margin-right"></i> Os Meus Grupos</button>
			<div id="Demo1" class="w3-hide w3-container">
				<p>Some text..</p>
			</div>
			<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check fa-fw w3-margin-right"></i> Os Meus Eventos</button>
			<div id="Demo2" class="w3-hide w3-container">
				<p>Some other text..</p>
			</div>
			<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-camera fa-fw w3-margin-right"></i> As Minhas Fotos</button>
			<div id="Demo3" class="w3-hide w3-container">
				<div class="w3-row-padding">
					<br>
					<div class="w3-half"><img src="images/lights.jpg" style="width:100%" class="w3-margin-bottom"></div>
					<div class="w3-half"><img src="images/nature.jpg" style="width:100%" class="w3-margin-bottom"></div>
					<div class="w3-half"><img src="images/mountains.jpg" style="width:100%" class="w3-margin-bottom"></div>
					<div class="w3-half"><img src="images/forest.jpg" style="width:100%" class="w3-margin-bottom"></div>
					<div class="w3-half"><img src="images/nature.jpg" style="width:100%" class="w3-margin-bottom"></div>
					<div class="w3-half"><img src="images/fjords.jpg" style="width:100%" class="w3-margin-bottom"></div>
				</div>
			</div>
			<button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-file fa-fw w3-margin-right"></i> Os Meus Ficheiros</button>
			<div id="Demo4" class="w3-hide w3-container">
				<p>Some text..</p>
			</div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interesses</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-times"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>Estas pessoas viram o teu perfil. Descobre quem são.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
		<!-- este é o form para colocar mensagens de status -->
		<div class="w3-row-padding">
			<div class="w3-col m12">
				<div class="w3-card w3-round w3-white">
					<div class="w3-container w3-padding">
						<h6 class="w3-opacity">O meu estado...</h6>

						<!--- <form name="f1" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> --->
						
						<form name="f1" method="POST" action="lemonstatus.php">
									
							<!---<p contenteditable="true" name="status" class="w3-border w3-padding">Status: Feeling Lime!</p> --->
							<p><textarea placeholder="Status: Feeling Lime!" name="status" class="w3-border w3-padding"></textarea></p>
				
							<button type="submit" onclick="secStatus()" class="w3-button w3-theme"><i class="fa fa-pencil-alt"></i>  Post</button> 
							&nbsp;&nbsp;<i class="fa fa-camera fa-fw w3-margin-right"></i>
							&nbsp;&nbsp;<i class="fa fa-file fa-fw w3-margin-right"></i>
							
						</form>
						
					</div>
				</div>
			</div>
		</div>
	
		
		<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/addfriends.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4>Procurar amigos <i class='fa fa-search'></i></h4>
        <hr class="w3-clear">
		
		<?php
	
			if(IsSet($_POST["search"])) {
		
				include 'mysql.php';
		
				//$name=$_POST["search"];
				
				echo "<h6 class='w3-opacity'>A procurar: <strong>".$name."</strong></h6>";
				$query="select * from students where name like '%".$name."%' or email like '%".$name."%'";		
		
				$result=MySQLi_Query($resid,$query);
				if($result==true) {
					$f=1;
					while(($rows=MySQLi_Fetch_Row($result))==True) {
						$f++;
						if($f==2) {
							echo "<span class='w3-opacity'>Resultados:</span><br />";
							echo "<table width='75%' align='center'>";
							echo "<tr>";
						}
				
						//START:- Excluir se já foi enviado o pedido;
						$query4="select status, comp from friends where id=(select max(id) from friends where receiver_id=".$rows[0]." and friend_id=".$_SESSION["user_id"].")"; 
						$result4=MySQLi_Query($resid,$query4);
				
						if($result4==true) {
							$res4=MySQLi_Fetch_Row($result4);
						}
							
						if($res4[0]==NULL AND $res4[1]==NULL) {
							$flo=0;
						}
						else if($res4[0]==0 AND $res4[1]==0){  
								$flo=1;
							}
							else {
									$flo=2;
								}
								
						//START:- Excluir o próprio utilizador e os que já são amigos;
						$query2="select status from are_friends where frnd_one_id=".$_SESSION["user_id"]." and frnd_two_id=".$rows[0]."";
						$query3="select status from are_friends where frnd_one_id=".$rows[0]." and frnd_two_id=".$_SESSION["user_id"]."";
							
						$result2=MySQLi_Query($resid,$query2);
						$result3=MySQLi_Query($resid,$query3);
							
						if($result2==true) {
							$res2=MySQLi_Fetch_Row($result2);
						} 
				
						if($result3==true) {
							$res3=MySQLi_Fetch_Row($result3);
						}
							
						if($rows[0]==$_SESSION["user_id"]) {
							$flori=1;
						} else {
									$flori=2;
						}  
							
						if($res2[0]==1 OR $res3[0]==1 OR $flo==1 OR $flori==1) {
							
						}
						else {
							echo "<td>".$rows[1]."</td><td><form method='POST' action='sendfr.php'>
								<input type='hidden' name='h1' value='".$rows[0]."'>
								<input type='hidden' name='h2' value='".$rows[1]."'>
								<button type='submit' name='sfr' value='Send Request' class='w3-button w3-theme'><i class='fa fa-envelope'></i>  Enviar pedido de amizade</button>
							</form></td></tr>";
							
						}
						echo "</table>";
					}
								
				}
							
				echo "<hr>";
							
											
				if($f<2) {
					echo " No such Friends!<br/>";
				}
						
				MySQLi_Close($resid);	
			}
		?>

      </div>
	  
	  
	  
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4>Amigos</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>  

      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Próximos Eventos:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
	<!---- a zona de amigos ---->
    <div class="w3-card w3-round w3-white w3-center">
		<div class="w3-container">
			<p>Amigos</p>
			
			<form method='POST' name='f2' action='lemonfriends.php'>
			
				<i class="fa fa-search"></i>
				<span id='s1'> </span>
				<span id='s2'> </span>
				<input type="text" name="search" maxlength="20" class="w3-input" onclick="secFriends()">
				
			</form>
				
		</div>
	
	  
        <div class="w3-container">
          <p>Pedidos de amizade</p>
          <img src="images/avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
	  
	  <!--- fim da zona de amigos --->
	  
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html> 
