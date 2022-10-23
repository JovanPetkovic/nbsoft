<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>NBSoft - Jovan Petkovic</title>
    <link rel="stylesheet" href="public/css/html.css">
    <link rel="stylesheet" href="public/css/form.css">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/public/css/slider.css">
    <link rel="stylesheet" type="text/css" href="/public/css/folder.css">
</head>
<body>
    <header>
        <form action="/index.php" method="POST">
            <button type="submit" name="task" value="html">Task 1</button>
            <button type="submit" name="task" value="form">Task 2</button>
            <button type="submit" name="task" value="slider">Task 3</button>
            <button type="submit" name="task" value="folder">Task 4</button>
            <button type="submit" name="task" value="sql">Task 5</button>
        </form>
</header>
    <div id="task-container container">

        <?php
            if(isset($_POST['task']))
            {
                $d = "templates/" . $_POST['task'] . ".php";
                include $d;
            }
        ?>
    </div>
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/contact.js"></script>\
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
            integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script type="text/javascript" src="/public/js/slider.js"></script>
</body>
</html>