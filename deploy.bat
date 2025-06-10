@echo off
cd /d C:\xampp\htdocs\ambientesplanejados

:: Verifica se o Composer está instalado
where composer >nul 2>&1
if %errorlevel% neq 0 (
    echo Composer não encontrado. Baixando e instalando...
    powershell -Command "Invoke-WebRequest -Uri https://getcomposer.org/installer -OutFile composer-setup.php"
    php composer-setup.php
    del composer-setup.php
    move composer.phar C:\composer\composer.phar
    setx PATH "%PATH%;C:\composer"
    echo Composer instalado com sucesso!
)

:: Verifica se a pasta vendor existe (então o projeto já tem as dependências)
if not exist vendor (
    echo Instalando dependências do projeto via Composer...
    composer install
) else (
    echo Dependências já instaladas.
)