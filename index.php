<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>

    <style>
        body,
        html {
            padding: 0;
            margin: 0;
            text-align: center;
            background: #fff;
        }

        body {
            background: url('<?php echo $_GET['image']  ?>') no-repeat center top;
            background-size: <?php echo $_GET['width']  ?>px <?php echo $_GET['height']  ?>px;
            height: <?php echo $_GET['height'] ?>px;
        }
    </style>
</head>

<body></body>

</html>
