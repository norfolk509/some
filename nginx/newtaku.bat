@ECHO off
IF "%1%"=="start"   SET restart=0 && GOTO Start
IF "%1%"=="close"   SET restart=0 && GOTO Close
IF "%1%"=="restart" SET restart=1 && GOTO Close
ENDLOCAL
GOTO:EOF
 
:Close
taskkill /t /f /IM nginx.exe
taskkill /t /f /IM php-cgi.exe
IF NOT %restart%==1 GOTO:EOF
 
:Start
;SET cgiCount=0
;ECHO Starting PHP CGI's
;FOR /L %%i IN (0,1,%cgiCount%) DO C:/nginx/RunHiddenConsole.exe C:/PHP7/php-cgi.exe -b 127.0.0.1:900%%i
C:/nginx/RunHiddenConsole.exe C:/PHP7/php-cgi.exe -b 127.0.0.1:9000
C:/nginx/RunHiddenConsole.exe C:/PHP7/php-cgi.exe -b 127.0.0.1:9001
C:/nginx/RunHiddenConsole.exe C:/PHP7/php-cgi.exe -b 127.0.0.1:9002
C:/nginx/RunHiddenConsole.exe C:/PHP7/php-cgi.exe -b 127.0.0.1:9003
ECHO Starting ngix
nginx -t -c C:/nginx/conf/newtaku.conf
start nginx -c C:/nginx/conf/newtaku.conf
