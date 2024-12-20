<?php

setcookie('user_id', $id, time() - 60 * 60, '/');
setcookie('user_role', $res_role, time() - 60 * 60, '/');

header('Location: ./login.php');
?>