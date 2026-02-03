<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <!-- alternative boostrap styled CSS method (package manager compiled file extraction individual .text js an css files), otherwise use CDN ->
    CSS: <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    JS: <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    -->
    <!-- The compiled Bootstrap CSS and JavaScript files were used 
      rather than source files to ensure browser compatibility, 
      performance, and ease of maintenance. -->
    <!-- Compiled boostrap vs source files URL boostrap -->

</head>
<body>
    <button class="btn btn-success">Bootstrap Test</button>
    <script src="bootstrap/js/boostrap.bundle.min.js"></script>
</body>
</html>

<!-- Final Maintainable Folder Structure (Folder organisation) ^

     ✔ maintainability
     ✔ reusability
     ✔ scalability

    "produce code that can be maintained by a third party", Centralised configuration -> configuration in one place using outside 
    sources (included modual .php files such as footer.php) 

    Separation of concerns

    Reusable components

    Centralised configuration

    Minimal duplication

    Easier debugging and updates
    -->

    <!-- The solution was developed using a modular structure with reusable components such as headers, footers, 
     database connections (seperation of data dependencies inbetween php and html), and shared functions. This approach improves 
     maintainability, reduces code duplication, and enables third-party developers to understand, modify, 
     and extend the system efficiently. -->