 
 <?php  


 		$conn = new mysqli('127.0.0.1', 'root', '', 'practical_table');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }


?>