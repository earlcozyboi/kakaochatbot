<?php
    echo '
   {
        "type": "buttons",
        "buttons": ["메뉴1", "메뉴2", "메뉴3"]
    }';
?> 
RewriteEngine on
RewriteCond %{THE_REQUEST} /([^.]+)\.php [NC]
RewriteRule ^ /%1 [NC,L,R]
RewriteCond %{REQUEST_FILENAME}.php -f 
RewriteRule ^(.*?)/?$ /$1.php [NC,L]
