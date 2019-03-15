<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div id="widow" > <table   >
                        
                        
            		<thead>
                              <tr  >
                                    <th>time</th>
                                    <th>type</th>
                                    <th>notice</th>
                                    
                              </tr>
                        </thead>
            		
            		<tbody>
            		
            		
            		<?php
            		require_once 'dbconfig.php';
            		
            		$query = "SELECT * FROM notice ";
            		$stmt = $conn->prepare( $query );
            		$stmt->execute();
            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
				?>
						<tr>
				<td><?php echo '' .$row['time']; ?></td>
                        <td><?php echo '' .$row['type'];?></td>
                        <td><?php echo '' .$row['notice'];?></td>
                        	     </tr>
			
            		<?php
                  }
                  ?>
            		</tbody>
</div>
</table>
<a href="logout.php"> <input type="button" value="log out" name="LoginUser" ></a>
</body>
</html>