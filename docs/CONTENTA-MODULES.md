# Headless distributions

Below is a list of all the headless distributions that inspired or influences 
the Contenta distribution.

[Acquia Reservoir](https://dev.acquia.com/blog/introducing-reservoir-a-distribution-for-decoupling-drupal/19/06/2017/18296) - DEPRECATED
A back end for your front end: a content repository. Powered by Drupal 8, JSON API and OAuth2.
 
[Headless (Acquia) Lightning](https://github.com/acquia/headless_lightning) - EOL
Headless Lightning is a more opinionated version of the Lightning Drupal distribution intended for use as a backend for decoupled applications. 

--------------------------------------------------------------------------------

# Contenta modules

Below is a list of all the modules which are included with the 
Contenta distribution.  These modules are the ingredients to a recipe for
building out a headless website. 

## Contenta Installation Profile

**Contenta Enhancements**  
Enhancements for the Contenta CMS profile.
- Alters the admin toolbar @see contenta_enhancements_toolbar_alter()
- Minor enhancement to the admin theme's CSS.
- Add additiona local tasks
- Enhances the node edit form
- Enables COR via a service provider

**Recipes Magazin**  
Create the content model and default content for a food magazine application.
Adds a huge amount of extra configuration. That should never be used on production.

**[Contenta JS](https://www.drupal.org/project/contentajs)**   
Provides server side configuration options for Contenta JS.

## Administration UI

**[Admin Toolbar](https://www.drupal.org/project/admin_toolbar)**  
The Admin Toolbar module intends to improve the default Toolbar (the administration menu at the top of your site) to transform it into a drop-down menu, providing a fast access to all administration pages.

**[Environment Indicator](https://www.drupal.org/project/environment_indicator)**  
This module will help you to keep sane while working on your different environments by adding a configurable color bar to each one of your environments. 
 
**[Material Admin (theme)](https://www.drupal.org/project/material_admin)**  
Drupal 8 admin theme based on Google Material Design Language and utilizing the CSS framework materializecss

## Content Authoring

**[Inline Entity Form](https://www.drupal.org/project/inline_entity_form)**  
Provides a widget for inline management (creation, modification, removal) of referenced entities.
 
**[Video Embed Field](https://www.drupal.org/project/video_embed_field)**  
Provides a field type for displaying videos from 3rd party providers such as YouTube and Vimeo.

**[Image Widget Crop](https://www.drupal.org/project/image_widget_crop)**  
Provides an interface for using the features of the Crop API.

**[JSON-RPC](https://www.drupal.org/project/jsonrpc)**  
This module implements a framework for creating non-RESTful services. It is intended to be the platform on which a decoupled Drupal administration and introspection interface can be built. https://www.drupal.org/project/jsonrpc 

## Authentication

**[Consumers](https://www.drupal.org/project/consumers)**  
Consumers is a module that does not do much on its own. Instead, it's used by other modules to provide functionality for decoupled scenarios. 

**[Simple OAuth](https://www.drupal.org/project/simple_oauth)**  
Simple OAuth is an implementation of the OAuth 2.0 Authorization Framework RFC. 

## API

**[JSON:API Extras](https://www.drupal.org/project/jsonapi_extras)**
The JSON:API module in code provides zero configuration out of the box. Use JSON:API Extras to customize your API. JSON:API Extras provides a means to override and provide limited configurations to the default zero-configuration implementation provided by the JSON:API in Core.
 
**[Consumer Image Styles](https://www.drupal.org/project/consumer_image_styles)** (Optional)  
Consumer Image Styles integrates with JSON:API to provide image styles to your images in your decoupled project. Use this module if you need image styles when working with decoupled Drupal using the JSON API module.

## Documentation

**[OpenAPI](https://www.drupal.org/project/openapi)**   
This module allows you to make your RESTful webservices and JSON:API discoverable using the OpenAPI standard (A.K.A. Swagger).

**[Schemata](https://www.drupal.org/project/schemata)**
Facilitate generation of schema definitions of Drupal 8 data models as produced by Serialization for Drupal 8 REST. Currently supported: JSON Schema for JSON, HAL JSON, and JSON API serialized Drupal Content Entities.
 
## Performance

**[JSON:API Boost](https://www.drupal.org/project/jsonapi_boost)**   
Improves the performance of the JSON:API module by cache warming your resource types.  

**[Warmer](https://www.drupal.org/project/warmer)**  
This module provides all the necessary infrastructure to orchestrate your cache warming processes.
 
**[Subrequests](https://www.drupal.org/project/subrequests)**  
Tell the system to execute several requests in a single bootstrap. 
 
**[Decoupled Router](https://www.drupal.org/project/decoupled_router)**  
Decoupled Router provides an endpoint that will help you resolve path aliases and redirects for entity related routes.
 
