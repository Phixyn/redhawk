@echo off
"C:\Program Files\MySQL\MySQL Server 5.6\bin\mysql.exe" -vvv -u root -p < script.sql > log.txt
pause