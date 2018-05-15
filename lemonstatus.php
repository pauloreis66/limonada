<!-- Updating status -->
<?php
	Session_start(); 
	if(!isset($_SESSION["user_id"])) {
		header("Location: lemonzone.php");
		exit;
	}
	
	if (!empty($_POST) AND empty($_POST['status']) OR strcmp($_POST['status'], "Status: Feeling Lime!")==0) {
		header("Location: lemonzone.php");
		exit;
	}
		
	//echo "/".$_POST['status']."/";
	
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		$status = $_POST["status"];
			
		if (strcmp($status, "Status: Feeling Lime!")!=0) {
					
			include 'mysql.php';
		
			if($resid) {
				$user_id = $_SESSION['user_id'];
				$query = "insert into status_here (status,user_id,timestamp,future_use) values ('$status',$user_id,NOW(),NULL)";
				$qwer = MySQLi_Query($resid,$query);
				if($qwer) {
					?>
					<script type="text/javascript" src="notify.js"></script>
					<script>
						$(document).ready(function() {
						$.notify(
						"Status Updated!","success");
						});
					</script>
					<?php
				}
				else {
						//echo "<font color='green'> Sorry, Something went wrong! Refresh the page and try again! </font>";
						MySQLi_Close($resid);
						header("Location: lemonzone.php?error=1");
						exit;
						
				}
				MySQLi_Close($resid);
			}
		}
	}
	header("Location: lemonzone.php?status=ok");
	exit;
?>
<!--- fim de status --->