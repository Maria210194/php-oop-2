<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Care</title>
    </head>
<body>

<?php

include './entities/User.php';

$user = new User ('Mary','Stachie','m.s@gmail.com');

echo('<pre><div>'.
'<p> Name: ' . $user->getUserName() . '</p>'.
'<p> Surname: ' . $user->setUserSurame() . '</p>'.
'<p> Email: ' . $user->userEmail() . '</p>'.
'</div></pre>');


echo ('<pre>');
var_dump($user);
echo ('</pre>');

?>



</body>
</html>