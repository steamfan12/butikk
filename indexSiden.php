<!doctype html> <!-- Forteller at koden er html 5 -->
<html lang="no"> <!--Angir hvilket språk siden er på-->
<head>  <!--Metainformasjon om siden-->
    <title>Home</title>
    <?php include 'php/head.php' ?>
    <style>
        <?php include 'css/mainLayout.css'; ?>
    </style>
</head>



<body>
    
    <div id="container"> 
        <?php include 'php/mainNav.php' ?>
        <main>
            <section>
                <h1>Kvaløya fornøyelsespark</h1>
                Den eneste fornøyelsesparken i arktis
            <?php include 'html/kategorier.html'; ?>
            <?php include 'html/produkter.php'; ?>
            </section>
        </main>
        <?php include 'php/footer.php' ?>
    </div>
</body>

</html> 
