@echo off

echo Problema 3

pause

::for /F %%i in (alumnos.txt) do (
::    mkdir %%i
::)

for /F %%i in (notas.txt) do (
    if %%i<5 ( echo No hay suspensos ) 
)