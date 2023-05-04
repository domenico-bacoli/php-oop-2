<?php 
require_once './db.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- link al Css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="app-container">
            <!-- importo l'header con la navbar  -->
    <?php include './Views/partials/header.php'; ?>
        <div class="card-container">
            <?php foreach($products as $product) { ?>
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo $product->image; ?>" alt="Frisbee">
                </div>
                <div class="card-details">
                    <div><strong>NOME:</strong><?php echo $product->name; ?></div>
                    <div><strong>PREZZO:</strong><?php echo $product->price; ?>€</div>
                    <div><strong>MARCA:</strong><?php echo $product->brand; ?></div>
                    <div><strong>DISPONIBILITA':</strong><?php echo $product->availability; ?></div>
                    <div><strong>CODICE PRODOTTO:</strong><?php echo $product->productCode; ?></div>
                    <div><strong>CATEGORIA:</strong><?php echo $product->category; ?></div>
                    <div><strong>DESCRIZIONE:</strong><?php echo $product->description; ?></div>
                </div>    
            </div>
            <?php
            }
            ?>
        </div>

    <!-- importo il footer -->
    <?php include './Views/partials/footer.php'; ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>