@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../laminas/laminas-composer-autoloading/bin/laminas-composer-autoloading
php "%BIN_TARGET%" %*
