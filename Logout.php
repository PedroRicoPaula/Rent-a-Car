<?php
// Destrói a sessão e reencaminha para a Home Page sem sessão iniciada
session_start();
session_destroy();

header("Location: index.php");

?>