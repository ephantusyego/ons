<?php
session_start();
?>
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
                                    <th>category</th>
                                    <th>header</th>
                                    <th>detail</th>
                                    <th>evidence</th>
                                    

                              </tr>
                        </thead>
            		
            		<tbody>
            		
            		
            		<?php
            		require_once 'dbconfig.php';

            		$sender=$_SESSION['pseudonym'];
            		$query = "SELECT * FROM whistles WHERE sender='$sender'";
            		$stmt = $conn->prepare( $query );
            		$stmt->execute();
            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
				?>
						<tr>
				<td><?php echo '' .$row['time']; ?></td>
                        <td><?php echo '' .$row['category']; ?></td>
                        <td><?php echo '' .$row['header'];?></td>
                        <td><?php echo '' .$row['detail'];?></td>
                        <td><?php echo '' .$row['evidence'];?></td>
                        
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