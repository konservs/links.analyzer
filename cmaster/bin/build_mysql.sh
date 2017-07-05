#/!bin/bash

cd $CMASTERROOT;
vendor/bin/phinx migrate
vendor/bin/phinx seed:run
