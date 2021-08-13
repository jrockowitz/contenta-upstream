# Contenta Readme

Contenta CMS is a Fork & Go solution. There is no supported upgrade path. 
You may update your Drupal like you usually do.

- https://www.contentacms.org/ 
- https://github.com/contentacms/contenta_jsonapi 
- https://packagist.org/packages/contentacms/contenta_jsonapi 

## Pantheon: Installation

- Go to your Pantheon dashboard. 
- Click 'Site Admin' button.
- Install Contenta.
- **IMPORTANT!!!** In the "Configure additional modules," make sure to enable the "Consumer Image Styles" module. Do NOT install the "​​GraphQL integration in Contenta JS."
- Visit your Contenta site
- If you see any error, go to your Pantheon dashboard and click "Clear Caches" button.

## Pantheon: Local Development

@see <https://docs.lando.dev/config/pantheon.html>

## Questions

For Contenta

- Does including UUIDs in the Contenta configuration files cause potential 
  problems?  
  @see web/profiles/composer/contenta_jsonapi/config/sync
  
For Lando

- How is lando setting the database settings?

For Pantheon 

- Why use /composer/ as the directory name over the standard /contrib/ directory
  name for profiles, modules, and themes.
  
  > This makes it simpler to install modules using e.g. Drush or the Drupal
module installation UI in OSD mode without fear of IC-imposed .gitignore
issues. @see https://github.com/pantheon-upstreams/drupal-project/commit/fc94e4c212aae6c22731e8ab5e560aa8ffe3d528
                                                                                                                 
- How can I add custom repositories to  
  contenta-upstream/upstream-configuration/composer.json?
  
## Resources

Articles

- [My Headless / Decoupled CMS Comparison Matrix](https://krynsky.medium.com/my-headless-decoupled-cms-comparison-matrix-98c926f5378d) 
- [Contenta: Drupal’s API Distribution - VIDEO](https://www.youtube.com/watch?v=-KiMgk4wx2c) 
- [Decoupled Drupal: Is it right for your business?](https://www.lullabot.com/sites/default/files/white-papers/1749/whitepaper_decoupled-drupal.pdf) 
- [In the Pursuit of Headless with Contenta](https://opensenselabs.com/blog/articles/pursuit-headless-contenta) 
- [Building Confidence in APIs with Postman](https://events.drupal.org/nashville2018/sessions/building-confidence-apis-postman) 

Presentations

- [Demystifying Decoupled Drupal with Contenta CMS](https://events.drupal.org/seattle2019/sessions/demystifying-decoupled-drupal-contenta-cms) 
  \- [Video](https://www.youtube.com/watch?v=-ZoIqUd6P5o)

## Known Issues (with fixes)

- During the installation of Contenta the 'Contenta GraphQL' module is missing.
  - Do not install the 'Contenta GraphQL' module during installation

- Installer is missing configuration via 'config_sync_directory'  
  @see web/sites/default/settings.php
  - Updated settings.php to uses 
    `$settings['config_sync_directory'] = 'profiles/composer/contenta_jsonapi/config/sync';` 

- Patching not supported via upstream
  - Added `"enable-patching": true,`to `"extras"` in /composer.json  

- Homepage logo is a broken image  
  - Pantheon's composer.json settings is using web/profiles/composer/ instead of web/profiles/contrib/
  - Editing the homepage's content will break the page's layout.

- Unable to install and install module 
  - Must switch to SFTP mode in the Pantheon admin UI.

- Error: __clone method called on non-object in Drupal\Core\Routing\UrlGenerator->getRoute() (/admin/people)
  - Must clear cache to fix routing errors. (/admin/config/development/performance)

- Debug: Key file "file:///code/keys/public.key" permissions are not correct, recommend changing to 600 or 660 instead of 644
(/*)
  - [Issue #3021054: Allow bypassing permissions check on public/private key files](https://www.drupal.org/project/simple_oauth/issues/3021054) 

- InvalidArgumentException: Field image_styles is unknown. (/admin/config/services/consumer) 
  - Must enable the "Consumer Image Styles" module during or after installation

## Changes

- Added Contenta JSON:API to composer.json via `"contentacms/contenta_jsonapi": "dev-8.x-3.x"`  
  @see upstream-configuration/composer.json
  
- Added "Issue #3021054: Allow bypassing permissions check on public/private key files" 
  patch.    
  @see contenta-upstream/upstream-configuration/composer.json 
  
- Added `"enable-patching": true,`to `"extras"` in /composer.json  

- Added patch to change 'profiles/contrib/contenta_jsonapi/modules/contenta_enhancements/logo.svg' 
  to profiles/composer/contenta_jsonapi/modules/contenta_enhancements/logo.svg     
  @see patches/contenta_jsonapi-fix_system_theme_global.patch

- Enabled CORS in services.yml    
  @see https://github.com/contentacms/contenta_jsonapi#cors    
  @see web/sites/default/services.yml  
  
- Added contenta_demo module from sandbox on Drupa.org (IN-PROGRESS)
  @see composer.json
  @see docs/CONTENTA-DEMO.md
