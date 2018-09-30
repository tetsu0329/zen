<?php include ("../admin2/navigation.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<style type="text/css">
	.container1{
		padding: 2%;
	}
	.container2, .container3, .container4{
		float:left;
		width:100%;
		padding:0 8px;
	}

	.title{
		text-transform: uppercase;
		font-weight: bold;
	}
	.box{
		background: #fff;
		border-top: 10px solid #1e90ff;
		padding:5%;
	}

	.wcontainer:after, .wcontainer:before{
		float:left;width:100%;
	}
	
	.number{
		color: #1e90ff;
		font-weight: bold;
		}
	.boxtitle{
		color: #000;
		font-weight: bold;
	}
@media (min-width:601px){
		.container2{
			width:49.99999%;
		}
		.container3{
			width:33.33333%;
		}
		.container4{
			width:24.99999%;
		}
</style>
<body>
	<!-- !PAGE CONTENT! -->
	<div style="margin-left:300px;margin-top:43px;">
		<div class="container1">
			<h1 class="title">Dashboard</h1>
			<div class="container4" style="margin-top: 10px;">
	          <div class="wcontainer box">
	           <h1 class="number">4</h1>
	           <h2 class="boxtitle">Users</h2>
	          </div>
        	</div>

        	<div class="container4" style="margin-top: 10px;">
	          <div class="wcontainer box">
	           <h1 class="number">12</h1>
	           <h2 class="boxtitle">Appointment</h2>
	          </div>
        	</div>

        	<div class="container4" style="margin-top: 10px;">
	          <div class="wcontainer box">
	           <h1 class="number">14</h1>
	           <h2 class="boxtitle">Inquiry</h2>
	          </div>
        	</div>

        	<div class="container4" style="margin-top: 10px;">
	          <div class="wcontainer box">
	           <h1 class="number">18</h1>
	           <h2 class="boxtitle">Services</h2>
	          </div>
        	</div>


		</div>	
	</div>

</div>
</body>
</html>