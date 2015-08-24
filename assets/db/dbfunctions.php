<?php
session_start();
/*write to database*/
$sql
/*get data from db*/
$sql = "SELECT * FROM 'schedule'";
$result = $dbh->query($sql);
foreach($result as $row) {
	echo "<tr>
			<td>{$row['']}</td>
			<td>{$row['']}</td>
			<td>{$row['']}</td>
			<td>{$row['']}</td>
			<td>{$row['']}</td>
			<td>{$row['']}</td>
			<td>{$row['']}</td>
			<td>{$row['']}</td>
			<td>{$row['']}</td>
		</tr>";
}


?>