@echo off
REM Levanta la landing en http://localhost:8000 (cierra esta ventana para detenerla)
cd /d "%~dp0"
set "PHP=%LOCALAPPDATA%\Microsoft\WinGet\Packages\PHP.PHP.8.3_Microsoft.Winget.Source_8wekyb3d8bbwe\php.exe"
if not exist "%PHP%" set "PHP=php"
start "" http://localhost:8000
"%PHP%" -S localhost:8000
