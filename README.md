# responce_object
php database access pattern

use:
```php
<?php

#include inits a $__RESPONCE variable
include_once('./__RESPONCE.php');

#other boiler plate and database connections

#assuming here mysql setup - so below is boiler plate for that
/* Open a connection */
$mysqli = new mysqli("localhost", "root", "", "example");
/* check connection */
if (mysqli_connect_errno()) {
     #error handling though the responce object
     $__RESPONCE->message="connect failed";
     $__RESPONCE->add_error(mysqli_connect_error()));
     #send calls exit
     $__RESPONCE->send();
}

$sql = "sql query here";
$stmt = $conn->query($sql);
if ($stmt->error){
     $__RESPONCE->message="failed statement";
     $__RESPONCE->add_error($stmt->error);
     $__RESPONCE->send();
} 
else{
	while ($row = $stmt->fetch_assoc()){
          #mysql_table_row_to_object turns a mysql table row... into an object
          $data = $__RESPONCE->mysql_table_row_to_object($row);
          #you may want to modify data before you add it - to mysql_table_row_to_object returns the object
          #or more complicated queries. 
          $__RESPONCE->add_data($data);
     }
}
$__RESPONCE->message = "all clear captain my captain";
$__RESPONCE->send();
?>
```

hopefully this is useful

this is alpha - it will be refined over time :)