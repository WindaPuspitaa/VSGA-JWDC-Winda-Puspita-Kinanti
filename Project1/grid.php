<html>

<head>
    <title>Grid Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="display-4">DIGITAL TALENT | Grid Layout Bootstrap</h1>
        <div class="d-grid gap-1">
            <div class="row">
                <div class="col text-center bg-primary padding">
                    Ini header
                </div>
            </div>
            <div class="row" style="height: 200px;">
                <div class="col-9 text-center bg-primary">
                    Ini konten
                </div>
            </div>
            <div class="row" style="height: 200px;">
                <div class="col-4 text-center bg-primary">
                    Ini sidebar
                </div>
            </div>
            <div class="row">
                <div class="col text-center bg-primary">
                    Ini footer
                </div>
            </div>
        </div>
    </div>
</body>

</html>