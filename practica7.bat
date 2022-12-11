@echo off

echo Problema 1

pause

(date /T
time /T
hostname
ipconfig) > datos.txt

ipconfig /release

msg * Ha perdido la conexion a internet...

ipconfig /renew

msg * Se ha restablecido la conexion a internet...

(date /T
time /T
hostname
ipconfig) >> datos.txt

mkdir revisionip
copy datos.txt revisionip


msg * Restauracion de ip concluida y con exito. Copia de seguridad del archivo de la accion realizado

echo Done

echo Problema 2

pause

set lista2= System32 Temp Notas Documents Music Paco

for /d %%i in (*) (
    for /d %%i in (%lista2%) do (
    if exist %%i ( echo %p% ) else ( echo No existe )
    )
)

::type direccion.txt

echo Done

echo Problema 3

pause