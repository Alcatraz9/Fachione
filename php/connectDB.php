<?php

$link = mysqli_connect("127.0.0.1:3325","root","","test");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>