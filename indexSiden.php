<!doctype html> <!-- Forteller at koden er html 5 -->
<html lang="no"> <!--Angir hvilket språk siden er på-->
<head>  <!--Metainformasjon om siden-->
    <title>Home</title>
    <?php include 'php/head.php' ?>
</head>

<style>
        <?php include 'css/mainLayout.css'; ?>
    </style>

<body>
    <div id="container"> 
        <?php include 'php/mainNav.php' ?>
        <main>
            <section>
                <h1>GainsGarantisten.no</h1>
                KJØP STEROIDER OG PEPTIDER PÅ NETT
            <?php include 'html/kategorier.html'; ?>
            <?php include 'html/produkter.html'; ?>
            </section>
        </main>
        <?php include 'php/footer.php' ?>
    </div>
</body>
</html> 
