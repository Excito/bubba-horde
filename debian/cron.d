# vim: ft=crontab sw=2 sts=2
# Regular cron jobs for the bubba-horde package
#

# Horde Alarms
*/5 * * * *	root	test -x /usr/bin/php && /usr/bin/php /usr/share/horde3/scripts/alarms.php

# Temp Cleanup
0 23 * * *	root	test -x /usr/share/horde3/scripts/temp-cleanup.cron && /usr/share/horde3/scripts/temp-cleanup.cron

# Kronolith reminders
0 2 * * *	root	test -x /usr/bin/php && /usr/bin/php -q /usr/share/horde3/kronolith/scripts/reminders.php > /dev/null 2>&1
