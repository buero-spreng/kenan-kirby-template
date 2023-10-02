# Custom Preset for Kirby CMS Websites

The heart of this build is the `site/snippets/layout.php` which should be loaded in every page template.  
In the `site/templates/default.php` you can find a prebuild use of the layout snippet. There you can see how you are supposed to work with `slots()`.  
  
There are the slot methods:
`slot('default')` -> most used: this will fill in content inside the `<main>` element  
`slot('head')` -> here you can add `<link>` or `<script>` tags to the **head** of the document  
`slot('header')` -> here you can ad elements to display in the **header** of the page (often unused)  
`slot('footer')` -> here you can ad elements to display in the **footer** of the page (often unused)  
`slot('foot')` -> here you can add `<link>` or `<script>` tags right before the `<body>` tag closes  
 
