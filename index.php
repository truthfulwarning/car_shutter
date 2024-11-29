<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Database connection
    $con = new mysqli("localhost", "root", "magic123", "cars_db");  //change first_db to my db name

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Insert user data
    $sql = "INSERT INTO users (username, email, password, confirm_password) VALUES ('$username','$email', '$password', ;'$confirm_password')";
                        //change users to my table name
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diecast Car Collection</title>
    <link rel="stylesheet" href="hp.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>CarShutter52</h1>
            </div>
            <ul class="nav-links">
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to My Diecast Car Collection</h2>
            <p>Explore my collection of diecast cars.</p>
        </div>
    </section>

<section id="gallery" class="gallery">
    <h2>Gallery</h2>
    <div class="gallery-grid">
        <a href="brabus_g.html"><img src="brabus_g.jpg" alt="Diecast Car 1"></a>

        <a href="6x6.html"><img src="6x6.jpg" alt="Diecast Car 2"></a>

        <a href="90.html"><img src="90.jpg" alt="Diecast Car 3"></a>

        <a href="110.html"><img src="110.jpg" alt="Diecast Car 4"></a>

        <a href="maynbach.html"><img src="maynbach.jpg" alt="Diecast Car 5"></a>

        <a href="302_boss.html"><img src="302_boss.jpg" alt="Diecast Car 6"></a>

        <a href="917.html"><img src="917.jpg" alt="Diecast Car 7"></a>

        <a href="934.html"><img src="934.jpg" alt="Diecast Car 8"></a>

        <a href="a35.html"><img src="a35.jpg" alt="Diecast Car 9"></a>

        <a href="aventador.html"><img src="aventador.jpg" alt="Diecast Car 10"></a>

        <a href="aventador_j.html"><img src="aventador_j.jpg" alt="Diecast Car 11"></a>

        <a href="svj.html"><img src="svj.jpg" alt="Diecast Car 12"></a>

        <a href="sv.html"><img src="sv.jpg" alt="Diecast Car 13"></a>

        <a href="gt350.html"><img src="gt350.jpg" alt="Diecast Car 14"></a>

        <a href="gt500.html"><img src="gt500.jpg" alt="Diecast Car 15"></a>

        <a href="brz.html"><img src="brz.jpg" alt="Diecast Car 16"></a>

        <a href="challenger.html"><img src="challenger.jpg" alt="Diecast Car 17"></a>

        <a href="chiron.html"><img src="chiron.jpg" alt="Diecast Car 18"></a>

        <a href="civic.html"><img src="civic.jpg" alt="Diecast Car 19"></a>

        <a href="cvcc.html"><img src="cvcc.jpg" alt="Diecast Car 20"></a>

        <a href="dbx.html"><img src="dbx.jpg" alt="Diecast Car 21"></a>

        <a href="dodge_truck.html"><img src="dodge_truck.jpg" alt="Diecast Car 22"></a>

        <a href="f_pace.html"><img src="f_pace.jpg" alt="Diecast Car 23"></a>

        <a href="g_wagon.html"><img src="g_wagon.jpg" alt="Diecast Car 24"></a>

        <a href="gt.html"><img src="gt.jpg" alt="Diecast Car 25"></a>

        <a href="gt3rs.html"><img src="gt3rs.jpg" alt="Diecast Car 26"></a>

        <a href="gtr.html"><img src="gtr.jpg" alt="Diecast Car 27"></a>

        <a href="hiace.html"><img src="hiace.jpg" alt="Diecast Car 28"></a>

        <a href="hilux.html"><img src="hilux.jpg" alt="Diecast Car 29"></a>

        <a href="la_ferrari.html"><img src="la_ferrari.jpg" alt="Diecast Car 30"></a>

        <a href="mb_gtr.html"><img src="mb_gtr.jpg" alt="Diecast Car 31"></a>

        <a href="senna.html"><img src="senna.jpg" alt="Diecast Car 32"></a>

        <a href="sian.html"><img src="sian.jpg" alt="Diecast Car 33"></a>

        <a href="sto.html"><img src="sto.jpg" alt="Diecast Car 34"></a>

        <a href="uni.html"><img src="uni.jpg" alt="Diecast Car 35"></a>

        <a href="urus.html"><img src="urus.jpg" alt="Diecast Car 36"></a>

        <a href="v_60.html"><img src="v_60.jpg" alt="Diecast Car 37"></a>

        <a href="viper.html"><img src="viper.jpg" alt="Diecast Car 38"></a>

        <a href="wrangler.html"><img src="wrangler.jpg" alt="Diecast Car 39"></a>

        <a href="moped.html"><img src="moped.jpg" alt="Diecast Car 40"></a>

    </div>
</section>

 <footer>
        <p>&copy; 2024 CarShutter52. All rights reserved.</p>
    </footer>
</body>
</html> 
