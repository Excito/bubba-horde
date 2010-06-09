#!/bin/bash

cat \
../horde3/scripts/sql/create.mysql.sql \
../imp4/scripts/sql/imp.sql \
../turba2/scripts/sql/turba.sql \
../kronolith2/scripts/sql/kronolith.mysql.sql \
../mnemo2/scripts/sql/mnemo.sql | sed '/^USE mysql;/,/USE horde;$/d' > database.sql
