<?php 
	if ($row['is_recommend']){
?>
		<tr>
			<td width="85%">
				<h4><a href=<?php echo "http://".$row['addr']; ?>><?php echo $row['site']; ?></a> <small><?php echo $row['recommendation']; ?></small></h4>
			</td>
			<td width="15%">
				<h5><a href=<?php echo "http://".$row['addr']; ?>><em><small><?php echo $row['addr']; ?></small></em></a></h5>
			</td>
		</tr>
<?php 
	 }

?>