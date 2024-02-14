<!DOCTYPE html>
<html lang="en">
<head>
    <title>Piazo's Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Website for Piazo's Pizza">
    <meta name="author" content="Levy Pondman">
    <meta name="keywords" content="Piazo's Pizza, Pizza, Italian Food, Italian Kitchen, Yummy, Restaurant">

    <?php include 'libs/components/style.php' ?>

    <script src="libs/slideshow.js" type="text/javascript" defer></script>
</head>

<body id="home">
<?php include 'libs/components/header.php' ?>
    <main>
        <section flex id="slideshow">
            <article flex>
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <span class="loading"><figure></figure></span>
            </article>
            <img src="assets/dishes/pizza.png">
            <article flex>
                <img src="assets/dishes/pizza.png">
                <img src="assets/dishes/pizza.png">
                <img src="assets/dishes/pizza.png">
            </article>
        </section>
    </main>
<?php include 'libs/components/footer.php' ?>
</body>
</html>