<?php
require_once('User.php');
require_once('Product.php');
require_once('CreditCard.php');
require_once('Ordine.php');


$user1 = new User('Pino', 'Pineta', 22, 'user', 'psw');
$maglia = new Product('Maglia sportiva', 15.99, '10/12/2021', 4);
$pantalone = new Product('Pantalone sportiva', 25.99, '12/12/2021', 2);

$card1 = new CreditCard('1223521522', 'Pineta&Co', '22/12/2023', 758);

$user1->setCartaDiCredito($card1);

$user1->aggiungiAlCarrello($maglia, 1);
$user1->aggiungiAlCarrello($pantalone, 3);

$ordine1 = new Ordine($user1->getCarrello());


var_dump($ordine1);

// $user2 = new User('Pippo', 'Baudo', 63);

// try {
//   $user1->setUsername('pinop');
//   $user1->setPassword('123456a');
// } catch (Exception $e) {
//   var_dump($e->getMessage());
// }

// login utente
// var_dump($user1->login('pinoop', '1222456a'));
// var_dump($user1->login('pinop', '123456a'));

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
