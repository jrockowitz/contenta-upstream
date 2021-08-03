# Contenta Demo

## Adding the Content Demo module to this installation

Below are the changes that need to made to /composer.json to include 
sandbox contenta_demo.module.
@see https://www.drupal.org/docs/extending-drupal/installing-sandbox-modules

    {
        "repositories": [
            {
                "type": "package",
                "package": {
                    "type": "drupal-module",
                    "name": "sandbox/contenta_demo",
                    "version": "dev-1.0.x",
                    "source": {
                        "url": "git@git.drupal.org:sandbox/jrockowitz-3225951.git",
                        "type": "git",
                        "reference": "1.0.x"
                    }
                }
            }
        ],
        "require": {
            "sandbox/contenta_demo": "dev-1.0.x"
        },
    }
