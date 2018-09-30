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

	.table{
		border-collapse:
		collapse;border-spacing:0;
		width:100%;
		display:table;
		border:1px solid #ccc
		}
	}
	table {
    border-collapse: collapse;
	}

	table, th, td {
	    border: 1px solid black;
	}
	.big{
		width: 80%;
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
	<div class="w3-main" style="margin-left:300px;margin-top:43px;">
		<div class="container1">
			<h1 class="title">CONTENT MANAGEMENT | HOME</h1>
			<div class="container1" style="margin-top: 10px;">

	          <div class="wcontainer box">
	           <h5 class="number">HOME UPDATE</h5>
	            <div class="w3-responsive">
					<table class="table">
						<tr>
						  <th><center>Image</center></th>
						  <th class="big"><center>Description</center></th>
						  <th><center>Description</center></th>
						</tr>
						<tr>
						  <td><img src="images/zenlogo.png" width="100%;"></td>
						  <td>DummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummy</td>
						  <td><center><button>edit</button></center></td>
						</tr>
						<tr>
						  <td><img src="images/zenlogo.png" width="100%;"></td>
						  <td>DummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummy</td>
						  <td><center><button>edit</button></center></td>
						</tr>
						<tr>
						  <td><img src="images/zenlogo.png" width="100%;"></td>
						  <td>DummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummyDummy</td>
						  <td><center><button>edit</button></center></td>
						</tr>
					</table>
					</div>
	          </div>
        	</div>

        	


		</div>	
	</div>

</div>
</body>
</html>