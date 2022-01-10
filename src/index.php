<?php
session_start();
$_SESSION['nombre'] = 0;
if(isset($_GET['plus']))
{
$_SESSION['nombre']++;
}
echo $_SESSION['nombre'];
?>
<form method="GET" action="?plus">
<input type="submit" value="J'incrémente !">
</form>
