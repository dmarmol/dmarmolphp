<?php
session_start();

if (!isset($_SESSION["cuenta_paginas"])){
    $_SESSION["cuenta_paginas"] = 1;
}else{
    $_SESSION["cuenta_paginas"]++;
}

echo "has entrado ".$_SESSION['cuenta_paginas']. " veces";
?>




