@echo off
cd ..
cd scriptFast

rem Inicie o servidor PHP embutido
start /B php -S localhost:8000

rem 
ping -n 1 127.0.0.1 > nul

rem Execute o seu script PHP
php "enviar.php"
exit