<?php
include_once __DIR__ . '/classes/magazzino.php';
include_once __DIR__ . '/classes/dipendenti.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazzino</title>
</head>
<body>
    <main>
        <h2>Magazzini principali</h2>
        <div>
            <div>
               <?php
                  $magazzino1->show();
                  $dipendenti1->show();
                ?>
            </div>

            <div>
                <?php
                  $magazzino2->show();
                  $dipendenti2->show();
                ?>
            </div>

            <div>
            <?php
                  $magazzino3->show();
                  $dipendenti3->show();
                ?>
            </div>
        </div>
       
        
    </main>
</body>
</html>