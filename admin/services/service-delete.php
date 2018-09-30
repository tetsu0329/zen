<?php
include '../../includes/dbh.inc.php';
$id = $_GET["id"];
mysqli_query($conn,"DELETE FROM service WHERE service_id=$id");
 ?>

<script type="text/javascript">
  window.location="service.php";

</script>
