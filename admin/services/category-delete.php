<?php
include '../../includes/dbh.inc.php';
$id = $_GET["id"];
mysqli_query($conn,"DELETE FROM service_category WHERE category_id=$id");
 ?>

<script type="text/javascript">
  window.location="service-category.php";

</script>
