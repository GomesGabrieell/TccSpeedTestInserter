@echo off
setlocal enabledelayedexpansion

rem Obter o nome do computador
for /f "tokens=*" %%a in ('hostname') do (
    set "nome_do_computador=%%a"
)

rem Obter o endereço IPv4
for /f "tokens=2 delims=:" %%a in ('ipconfig ^| find "IPv4"') do (
    set "ipv4=%%a"
)

rem Obter o endereço MAC
for /f "tokens=*" %%a in ('ipconfig ^| find "Physical"') do (
    set "mac_address=%%a"
)

rem Limpar as variáveis para remover espaços em branco extras
set "ipv4=!ipv4:~1!"
set "mac_address=!mac_address:~1!"

rem Caminho para o arquivo .exe que você deseja executar
set "caminho_do_exe=speedtest.exe"

rem Argumentos para o comando .exe
set "argumento1=argumento1"
set "argumento2=argumento2"

rem Nome do arquivo de saída
set "nome_arquivo_saida=resultTest.php"

rem Inicialize o contador
set contador=1

rem Crie o arquivo de saída e escreva a tag PHP inicial
echo ^<?php > "%nome_arquivo_saida%"

rem Escreva o nome do computador, endereço IPv4 e endereço MAC no arquivo de saída
echo ^$nome_do_computador = '%nome_do_computador%'; >> "%nome_arquivo_saida%"
echo ^$ipv4 = '%ipv4%'; >> "%nome_arquivo_saida%"
echo ^$mac_address = '%mac_address%'; >> "%nome_arquivo_saida%"

rem Tente executar o arquivo .exe e redirecionar a saída (stdout e stderr) para o arquivo
for /f "tokens=*" %%a in ('"%caminho_do_exe%" %argumento1% %argumento2% 2^>^&1') do (
    echo ^$tag_!contador! = '%%a'; >> "%nome_arquivo_saida%"
    set /a contador+=1
)

rem Adicione o fechamento do PHP e uma função de impressão para o array
echo ^?^>^
echo foreach (^$tag as ^$key => ^$value) {
echo     echo ^"<tag id=" . ^$key . ">" . ^$value . "^</tag^>";^

rem Verifique o código de saída do comando
if %errorlevel% equ 0 (
    echo Execução concluída com sucesso. Resultados salvos em "%nome_arquivo_saida%"
) else (
    echo Ocorreu um erro durante a execução. Código de saída: %errorlevel%
)

echo. > finalFest.php

exit