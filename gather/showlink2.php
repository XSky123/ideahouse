<?php
if (!$row['is_recommend']){
	if($row['type2']!=$currentType){
		echo "<tr>";
		$currentType=$row['type2'];
?>
		<td width="10%">
			<button class="btn btn-primary" type="button">
				<?php echo $typeName[$row['type2']]; ?> <span class="badge">+</span>
			</button>
		</td>
<?php 
	}
 ?>
		<td width="15%" align="center">
			<h5><a href=<?php echo "http://".$row['addr']; ?>><?php echo $row['site']; ?></a></h5>
		</td>
<?php
	if($row['type2']!=$currentType){
		echo "</tr>";
	}
}
?>