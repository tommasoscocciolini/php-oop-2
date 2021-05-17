<?php
require_once('user.php');
require_once('product.php');


$user1 = new User('Pino', 'Pineta', 22);
// $user2 = new User('Pippo', 'Baudo', 63);

try {
  $user1->setUsername('pinop');
  $user1->setPassword('123456a');
} catch (Exception $e) {
  var_dump($e->getMessage());
}

// login utente
var_dump($user1->login('pinoop', '1222456a'));
var_dump($user1->login('pinop', '123456a'));

?>






<!-- <html>
<body>

<form action="logged.php" method="get">
Name: <input type="text" name="name"><br>
Lastname: <input type="text" name="lastname"><br>
Age: <input type="text" name="age"><br>
<input type="submit">
</form>

</body>
</html> -->
