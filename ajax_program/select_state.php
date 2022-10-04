<?php 
	include('../database_connection/dbconnection.php');
	if(isset($_POST['select_state'])){
		$id = $_POST['select_state'];
		$sql = "select ajax_city.c_id, city from ajax_state LEFT JOIN ajax_city ON ajax_city.s_id = ajax_state.s_id WHERE ajax_state.s_id = '$id'";
		$stmp = $DB->query($sql);
		$DB->execute($sql);
		$data = $DB->fetchAll(PDO::FETCH_OBJ);
?>
		<table border="2" class="table table-hover table-bordered table-responsive table-condensed ">
			<tr class='alert alert-info'>
				<th><center>ID</center></th>
				<th><center>CITY</center></th>
			</tr>
			<?php
			$i=0;$j=1;
			foreach ($data as $c_id=> $city) {
				echo "<tr>";
				echo "<th><center>".$j."</center></th>";
				echo "<th><center>".$city->city."</center></th>";
				echo "<b/>";
				$i++; $j++;
			}
			?>
		</table>
<?php
}
?>