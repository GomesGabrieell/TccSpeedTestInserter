@echo off

setlocal enabledelayedexpansion

cd /d "%~dp0\php-7.4.32-nts-Win32-vc15-x64"

set "caminho_real=!CD!"

if "!PATH:;%caminho_real%;=!"=="%PATH%" (
    setx PATH "%PATH%;%caminho_real%" /M
    echo O caminho foi adicionado ao ambiente PATH.
) else (
    echo O caminho já está no ambiente PATH.
)

@echo off
start /B php -S localhost:8000 -t "%~dp0"
start "" "http://localhost:8000/index.html"
