<?php
// header('content-type: application/json; charset=utf-8');
// header("access-control-allow-origin: *");

// Proccess the stuff from the form:
$name = if $_POST["InputName"] ? $_POST["InputName"] : "not provided"; 
$email = if $_POST["InputEmail"] ? $_POST["InputEmail"] : "not provided"; 

?>

<html>
<body>

Welcome <?= $name ?><br>
Your email address is: <?php= $email ?>

</body>
</html>

?>