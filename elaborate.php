<!DOCTYPE html>
    <html lang="en">
    <?php 
        $paragraph = $_GET["paragraph"];
        $censure = $_GET["censure"];
        $new_paragraph = str_replace($censure, "***", $paragraph);
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        echo $new_paragraph;
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>