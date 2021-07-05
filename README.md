# responce_object
php database access pattern

use:
```
<?php
include_once('../general/responceObject.php');
#other boiler plate

$sql = "sql query here";

$stmt = $conn->query($sql);
if (!$stmt = $conn-> query($sql))
  {
  $__RESPONCE->error=true;
  array_push($__RESPONCE->error_
  
} 
	{
	while ($row = $stmt->fetch_assoc())
		{
    $trainingData = new stdClass();
    $trainingData->id=$row['key'];
    $trainingData->data1 = $row['data1'];
    $trainingData->data2 = $row['data2'];
    array_push($responseObject->data, $trainingData);
   }
}
$__RESPONCE->message = "all clear captain my captain";
$__RESPONCE->send();

```

to be updated and finished
