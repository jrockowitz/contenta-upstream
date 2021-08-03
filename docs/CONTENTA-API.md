# Contenta API

Below are example API calls that can be used to test Contenta's example recipes.

@see <https://cms.contentacms.io/help/tutorials>
@see <https://www.drupal.org/docs/core-modules-and-themes/core-modules/jsonapi-module>

## List

List endpoints (aka entities)  
<https://dev-rockowij-contenta.pantheonsite.io/api> 

List recipes  
<https://dev-rockowij-contenta.pantheonsite.io/api/recipes>

List categories  
<https://dev-rockowij-contenta.pantheonsite.io/api/categories>

List recipes by category  
<https://dev-rockowij-contenta.pantheonsite.io/api/recipes?filter[category.id][value]=feeabdf7-9c32-4aa8-8b04-4cdcda12399b> 

## View

View recipe  
<https://dev-rockowij-contenta.pantheonsite.io/api/recipes/6f510791-ce8b-4d5c-852d-6529cc63d664> 

View recipe including owner and categories    
<https://dev-rockowij-contenta.pantheonsite.io/api/recipes/6f510791-ce8b-4d5c-852d-6529cc63d664?include=owner,category> 


## Paragraphs Demo

View all paragraph demo
<https://dev-rockowij-contenta.pantheonsite.io/api/node/paragraphed_content_demo>

View paragraph demo with individual paragraphs
<https://dev-rockowij-contenta.pantheonsite.io/api/node/paragraphed_content_demo?include=field_paragraphs_demo>
