<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery - Piazo's Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Website for Piazo's Pizza">
    <meta name="author" content="">
    <meta name="keywords" content="Piazo's Pizza, Pizza, Italian Food, Italian Kitchen, Yummy, Restaurant">

    <?php include 'libs/components/style.php' ?>

    <!--voor <script> tags-->
</head>

<body id="gallery">
<?php include 'libs/components/header.php' ?>
    <main>
        <section flex>
            <?php
            $images = "assets/dishes/pizza.png";
            for ($i = 0; $i < 9; $i++) {
                echo "
                <article class=\"blok\" flex>
                    <img src=\"$images\" alt=\"placeholder pizza ($i+1)\">
                    <p>Lorem ipsum ik ben de rest vergeten</p>
                </article>
                ";
            }
            
            
            ?>
        </section>
        

    </main>
<?php include 'libs/components/footer.php' ?>
</body>
</html>
<!---->