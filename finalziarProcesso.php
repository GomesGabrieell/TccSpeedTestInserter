<?php
$nomeDoArquivo = 'finalFest.php';
unlink($nomeDoArquivo);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FastVelocidade Final da Verificação</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }

        .row p {
            font-size: 18px;
            margin: 10px 0;
        }

        .row p:first-child {
            font-weight: bold;
        }

        .row p:last-child {
            color: #666;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        a.button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Final da Verificação</h1>

        <?php
        include 'resultTest.php';

        $tag_5a = substr($tag_5, 0, 26);
        if (strlen($tag_5) > 26) {
            $tag_5a .= '...';
        }

        $tag_7a = substr($tag_7, 0, 26);
        if (strlen($tag_7) > 26) {
            $tag_7a .= '...';
        }
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <p><?php echo $tag_5a; ?></p>
                <p><?php echo $tag_7a; ?></p>
                <p style="color: green;"><i class="fas fa-wifi"></i> Internet estável</p>
            </div>
            <a class="button" href="index.html">Reinicie a Verificação</a>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>


