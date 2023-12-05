# Custom Preset for Kirby CMS Websites

## Get the latest kirby plainkit
`git clone https://github.com/getkirby/plainkit.git`  
Replace the **site** and **assets** folder from the **plainkit** with the same folders from this template.


The heart of this build is the **`site/snippets/layout.php`** which is used in every page template.  
In the **`site/templates/default.php`** you can find a prebuilt use of the layout snippet and the `slots()` method.  
  
## There are the slot methods:
`slot('default')`   most used: this will fill in content inside the `<main>` element  
  
`slot('head')`      here you can add `<link>` or `<script>` tags to the **head** of the document  
  
`slot('header')`    here you can ad elements to display in the **header** of the page (often unused)  
  
`slot('footer')`    here you can ad elements to display in the **footer** of the page (often unused)  
  
`slot('foot')`      here you can add `<link>` or `<script>` tags right before the `<body>` tag closes
