//  en cas SQLSTATE[2002] de conection refused
//ajouter le  port MySQL  à database.php:
    'unix_socket' => env('UNIX_SOCKET', '/Applications/MAMP/tmp/mysql/mysql.sock');
