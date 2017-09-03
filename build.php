<?php
/**
 * Created by PhpStorm.
 * User: crea_
 * Date: 03/09/2017
 * Time: 16:52
 */
echo "Hola Mundo";
$con=ssh2_connect('home687786128.1and1-data.host', 22);
ssh2_auth_password($con, "u89720756 ", "Peque1573$");
$shell=ssh2_shell($con, 'xterm');
fwrite( $shell, "rm -r celebration2\n");
fwrite( $shell, "mkdir celebration2\n");
fwrite( $shell, "cd celebration2\n");
fwrite( $shell, "git clone -b master https://git@github.com/Arturo900105/web-celebration.git\n");
fwrite( $shell, "exit\n");