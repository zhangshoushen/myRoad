@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../laminas/laminas-migration/bin/laminas-migration
php "%BIN_TARGET%" %*
