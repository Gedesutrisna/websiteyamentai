<?php
include "fungsi.php";

if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat_email = $_POST['alamat_email'];
    $telephone = $_POST['telephone'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO form (nama, alamat_email, telephone, pesan)
    VALUES ('$nama', '$alamat_email', '$telephone', '$pesan')";

    if ($conn->query($sql) === TRUE){
        echo "<script> alert ('pesan anda terkirim')</script>";
    } else {
        echo "error:" . $sql . "<br>". $conn->error;
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yamentai</title>
    <link rel="stylesheet" href="web.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="check">
    <div class="sidebar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="testimoni.html">Testimoni</a></li>
            <li><a href="product.html">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="Galery.html">Galery</a></li>
        </ul>
    </div>
    <header>
        <div class="container">
        <h1><a href=""><span class="efek-ngetik"></span></a></h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="testimoni.html">Testimoni</a></li>
            <li><a href="product.html">Products</a></li>
            <li><div class="utama"><a href="contact.php">Contact</a></div></li>
            <li><a href="Galery.html">Galery</a></li>
        </ul>
        <label for="check" class="mobile-menu"><i class="fa-solid fa-bars fa-2x"></i></label>
    </div>
    </header>
    <section class="contact">
        <div class="container">
        <div class="container1">

            <div class="card-container">
                <div class="kiri">
                    <div class="kiri-container">
                        <h2>Contact</h2>
                        <h3>Email</h3>
                        <p> <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=gedesutrisna9@gmail.com">gedesutrisna9@gmail.com</a></p>
                        <h3>Telephone</h3>
                        <p> <a href="https://wa.me/62881037418040">+62-881-0374-18040</a></p>
                        <h3>Address</h3>
                        <p> <a href="https://www.google.com/search?q=jalan+imam+bonjol+no+597&oq=jalan+imam+bonjol+no+597&aqs=chrome..69i57j33i160l3.9356j0j15&sourceid=chrome&ie=UTF-8#">JL. Imam Bonjol No. 597</a></p>
                    </div>
                </div>
                <div class="kanan">
                    <div class="kanan-container">
                        <form action="" method="post">
                            <h2>Contact Us</h2>
                            <input name="nama" type="text" placeholder="Nama">
                            <input name="alamat_email" type="email" placeholder="Alamat Email">
                            <input name="telephone" type="phone" placeholder="Telephone" autocomplete="off">
                            <textarea name="pesan" rows="10" placeholder="Pesan"></textarea>
                            <button name="submit" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
        </div>
    </section>
<footer>
    <div class="container">
        <small>Copyright &copy; 2022 - Gede Sutrisna.</small>
    </div>
</footer>
</body>
<script src="tulisan.js">
</script>
</html>