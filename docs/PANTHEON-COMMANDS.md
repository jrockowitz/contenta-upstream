# Pantheon Cheatsheet


### Upstreams
        
- [Create a Custom Upstream](https://pantheon.io/docs/create-custom-upstream) 


    # Adding dependencies to upstream-configuration/composer.json
    cd upstream-configuration 
    composer --no-install require drupal/token    

    # Manually apply upstrema changes
    # @see https://pantheon.io/docs/core-updates#overwrite-core
    git pull -Xtheirs https://github.com/jrockowitz/contenta-upstream.git

