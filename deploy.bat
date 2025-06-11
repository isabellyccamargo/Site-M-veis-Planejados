@echo off
cd /d C:\xampp\htdocs\ribeiroambientesplanejados

:: Verifica se o PHP está no PATH
where php >nul 2>&1
if %errorlevel% neq 0 (
    echo PHP nao encontrado no PATH. Tentando adicionar caminho padrao do XAMPP...
    set "php_dir=C:\xampp\php"
    
    if exist "%php_dir%\php.exe" (
        echo Caminho encontrado: %php_dir%
        setx PATH "%PATH%;%php_dir%" >nul
        echo Caminho do PHP adicionado ao PATH com sucesso. Voce pode precisar reiniciar o terminal.
    ) else (
        echo ERRO: PHP nao encontrado e caminho padrao %php_dir% tambem nao existe.
        echo Por favor, instale um servidor PHP (ex: XAMPP, WAMP)
        echo ou adicione manualmente o caminho do executavel php.exe na variavel de ambiente PATH do Windows.
        pause
        exit /b
    )

    :: Verifica novamente se PHP foi adicionado corretamente
    where php >nul 2>&1
    if %errorlevel% neq 0 (
        echo ERRO: Mesmo apos tentativa automatica, PHP ainda nao foi encontrado no PATH.
        echo Reinicie o terminal ou adicione manualmente o PHP ao PATH.
        pause
        exit /b
    )
)

:: Verifica se o Composer está instalado
where composer >nul 2>&1
if %errorlevel% neq 0 (
    echo Composer nao encontrado. Baixando e instalando...
    powershell -Command "Invoke-WebRequest -Uri https://getcomposer.org/installer -OutFile composer-setup.php"
    php composer-setup.php
    del composer-setup.php
    move composer.phar C:\composer\composer.phar
    setx PATH "%PATH%;C:\composer"
    echo Composer instalado com sucesso!
)

:: Verifica se a pasta vendor existe (entao o projeto ja tem as dependencias)
if not exist vendor (
    echo Instalando dependencias do projeto via Composer...
    composer install
) else (
    echo Dependencias ja instaladas.
)
