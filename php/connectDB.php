<?php

// $link = mysqli_connect("127.0.0.1:3325","root","","test");
// $link = pg_connect("127.0.0.1:5432","postgres","R!shabh","fachione");
// $link = pg_connect("host=localhost dbname=fachione user=postgres password=R!shabh");
$link = (function(){
    $parts = (parse_url(getenv('DATABASE_URL')));
    extract($parts);
    $path = ltrim($path, "/");
    return new PDO("pgsql:host={$host};port={$port};dbname={$path}", $user, $pass);
})();
/* check connection */
if (pg_last_error()) {
    printf("Connect failed: %s\n", pg_last_error());
    exit();
}

?>