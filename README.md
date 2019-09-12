# Web-App-Developer-Task

Steps taken to complete the task

Step 1
I've included the latest jquery library via cdn ('/app/views/common/frame.tpl.php' on line 6).

Step 2
Inserted hidden container for the quick view overlay ('/app/views/common/frame.tpl.php' on line 16).

Step 3
Added a 'quick-view' class to the button that will trigger the overlay to avoid confusion with future buttons ('/app/views/products/item.tpl.php', on line 8).

Step 4
Written the jquery that handles the click event and triggers an ajax call to get the product data ('/www/js/app.js').

Step 5
Created the css that displays the quick view overlay ('/www/css/style.css' starting on line 63).

Step 5
Added a new route config controller so that the 'product' uri can be handled by the app ('/config/routes.json' lines 16 - 22).

Step 6
Created the new controller called 'getProduct' that will load a single product based on the sku ('/app/controller/ProductsController.php' lines 24 - 40).

Step 7
Created a new template file that's used as a placeholder for a 'quick view' products ('/app/views/products/quickView.tpl.php').
