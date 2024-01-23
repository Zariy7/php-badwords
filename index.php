<!DOCTYPE html>
    <html lang="en">
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
                    <form action="elaborate.php">
                        <label for="paragraph" class="form-label">Paragraph:</label>
                        <input type="text" class="form-control" name="paragraph" required>

                        <label for="censure" class="form-label">Censure:</label>
                        <input type="text" class="form-control" name="censure" required>

                        <input type="submit" class="btn btn-success my-2">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>