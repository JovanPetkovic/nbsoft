<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>NBSoft - Jovan Petkovic</title>
    <link rel="stylesheet" href="public/css/html.css">
    <link rel="stylesheet" href="public/css/form.css">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <header>
        <form action="modules/Task">
            <button type="submit" value="html">Task 1</button>
            <button type="submit" value="form">Task 2</button>
            <button type="submit" value="slider">Task 3</button>
            <button type="submit" value="folder">Task 4</button>
            <button type="submit" value="sql">Task 5</button>
        </form>
</header>
    <div id="task-container container">
        <?php include "templates/form.php"?>
    </div>
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/contact.js"></script>
</body>
</html>