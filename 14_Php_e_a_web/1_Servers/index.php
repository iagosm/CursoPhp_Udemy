<?php

#server_software-> identificação do servidor
#Server_Name-> hostname, dns ou ip do server
#server_protocol-> protocolo do servidor
#server_port-> porta do servidor
#query_string->argumentos apos o ? na url

print_r($_SERVER);

echo "<br> <br>";

echo $_SERVER['MYSQL_HOME'] . "<br>";

if($_SERVER['SERVER_NAME'] == 'localhost'){
    echo "Está acessando o Local host <br>";
}