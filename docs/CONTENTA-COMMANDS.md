# Contenta Cheatsheet

## Lando

    Commands:
      lando composer          Runs composer commands
      lando config            Displays the lando configuration
      lando db-export [file]  Exports database from a database service to a file
      lando db-import <file>  Imports a dump file into a database service
      lando destroy           Destroys your app
      lando drupal            Runs drupal console commands
      lando drush             Runs drush commands
      lando info              Prints info about your app
      lando init              Initializes code for use with lando
      lando list              Lists all running lando apps and containers
      lando logs              Displays logs for your app
      lando mysql             Drops into a MySQL shell on a database service
      lando php               Runs php commands
      lando poweroff          Spins down all lando related containers
      lando pull              Pull code, database and/or files from Pantheon
      lando push              Push code, database and/or files to Pantheon
      lando rebuild           Rebuilds your app from scratch, preserving data
      lando redis-cli         Runs redis-cli commands
      lando restart           Restarts your app
      lando share             Shares your local site publicly
      lando ssh               Drops into a shell on a service, runs commands
      lando start             Starts your app
      lando stop              Stops your app
      lando switch            Switch to a different multidev environment
      lando terminus          Runs terminus commands
      lando varnishadm        Runs varnishadm commands
      lando version           Displays the lando version

## Status        

    # Export status 
    lando drush status
    
    # List installed modules
    lando drush pm:list
    
    # Check for pending updates.
    lando drush updatedb:status 

    # Check for security updates
    lando drush pm:security    
    lando drush pm:security-php    
    
    # Show dblog messages
    lando drush watchdog:show
    
## Management

    # Display USER1 name and email using SQL.
    lando drush sql:query 'SELECT name,mail  FROM users_field_data WHERE uid=1';    

    # Display USER1 information.
    lando drush user:information webmaster
    
    # Login as USER1.
    lando drush user:login webmaster
    
    # Reset webteam (USER1) password.
    lando drush user:password webmaster drupal.admin
     
    # Cache Rebuild.
    lando drush cache:rebuild
    
    # List pending updates.
    lando drush deploy:hook-status   
    
    # Run database updates.
    lando drush updatedb

    # Run database updates and import configuration.
    lando drush deploy  

## Installing Modules

    # Download module.
    lando composer require drupal/token    

    # Install module.
    lando drush pm:enable -y token
    
    # Uninstall module. 
    lando drush pm:uninstall -y token

    # Remove module.
    lando composer remove drupal/token
    
# Updating Modules

    # Update all composer dependencies and update the database.
    lando composer update     
    lando drush updatedb

## Pulling from Pantheon

    # Pull code, database, and files.     
    lando pull --code=dev --database=dev --files=dev

    # Pull database, and files. (RECOMMENDED)     
    lando pull --code=none --database=dev --files=dev

## Export/Import configuration

    # Export configuration. 
    lando drush config-export

    # Import configuration. 
    lando drush config-import

## Backup/Restore

    # Export. 
    lando db-export database.sql

    # Import.
    lando db-import database.sql
