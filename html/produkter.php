<?php
 
session_start();
//unset($_SESSION['cart']); //reseter carten til 0 når refresh
 
 
$cartCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
/*Innlogging til databasen vår
    Sikkerhetsmessing bør denne infoen ligge i en egen fil
    utenfor den mappen hvor filene er publisert på internett */
 
    $dbserver = "127.0.0.1"; //Dette er IP adressen til localhost
    $dbuser = "root"; //Brukernavnet ditt til databasen på din egen maskin
    $dbpassword = "root"; //Passordet til databasen din
    $dbname = "butikkDB"; //Navnet til skjemaet til databasen du skal bruke
 
    //Oppretter forbindelse til databasen
    $kobling = new mysqli($dbserver,$dbuser,$dbpassword,$dbname);
    //$kobling = mysqli_connect($dbserver,$dbuser,$dbpassword,$dbname);
 
    if($kobling->connect_error){ //Sjekker om oppkoblingen fungerte
        die("Noe gikk galt: ".$kobling->connect_error);
    }
    $kobling -> set_charset("utf8");  //Setter karaktersettet til utf8
 
    $sql = "SELECT * FROM varer"; //selecter selve vare databasen
 
    $result = $kobling->query($sql); // fikser buggen litt usikker hvorfor?
 
 
 
   
   
?>


<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f4f4f4;
        }
        .product-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px;
            max-width: 1000px;
            margin: auto;
        }
        .product {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        .product h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product p {
            color: #888;
            font-size: 16px;
        }
        .product button {
            background: #333;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .product button:hover {
            background: #555;
        }
    </style>
</head>
<body>

    <div class="product-container">
        <div class="product">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
    <div class="product-card">
        <div class="product-info">
            <h3><?php echo ($row['navn']); ?></h3>
            <p><?php echo ($row['beskrivelse']); ?></p>
            <div class="price">kr <?php echo ($row['pris']); ?></div>
            <!-- Sender nettside som parameter til goToCart-funksjonen -->
            <button class="buy-button" onclick="goToCart('<?php echo $row['nettside']; ?>')">Kjøp</button>
        </div>
    </div>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Ingen varer funnet.</p>
        <?php endif; ?>
        </div>
    </div>
    <script>
            function goToCart(nettsideUrl) {
            window.location.href = nettsideUrl;
            }
</script>
</body>

            
</html>
