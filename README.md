# Test suite for server testing
Upload and testing :)

Tests will be added as needed.

Special for https://chosten.com/

# Bitrix Cron

Only this file good to create ALL cron task on Bitrix24 (dont ask why)

Steps
Add file cron_events.php to /local/php_interface/cron_events.php

Next. Start this code in console ( /bitrix/admin/php_command_line.php?lang=ru )

```php
COption::SetOptionString("main", "agents_use_crontab", "N"); 
echo COption::GetOptionString("main", "agents_use_crontab", "N"); 

COption::SetOptionString("main", "check_agents", "N"); 
echo COption::GetOptionString("main", "check_agents", "Y");
```

Must be NN

Next. Go to /bitrix/php_interface/dbconn.php and replace
From
define("BX_CRONTAB_SUPPORT", true);
define("BX_CRONTAB", true);

TO

if(!(defined("CHK_EVENT") && CHK_EVENT===true))
   define("BX_CRONTAB_SUPPORT", true);

Next. Add to cron php -f www/YOUR_DOMAIN/local/php_interface/cron_events.php
