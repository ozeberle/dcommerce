#!/bin/bash

if [ "$1" = "init" ]; then

	## Checking database readyness
	echo "Checking drupal database status"

	# Installing site if database is missing
	drupal_status=$(php vendor/bin/drush status --field=bootstrap)

	if [ "$drupal_status" != "Successful" ]; then
		echo "Creating site."
		php vendor/bin/drush si standard --db-url=mysql://${DATABASE_USERNAME}:${DATABASE_PASSWORD}@mysql_db/${DATABASE_NAME}
	else
		echo "Site bootstrap successful, using existing database."
	fi

	echo "Setting 777 permissions to sites/default folder."
	chmod -R 777 /var/www/html/sites/default
fi

echo "executing \"$@\"..."
