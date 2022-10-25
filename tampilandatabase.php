<form action="" method="post">
    <h3>DataBase Contact</h3>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>nam</th>
            <th>alamat_email</th>
            <th>telephone</th>
            <th>pesan</th>
        </tr>
        <?php
include "koneksi.php";
$no=1;
$ambildata = mysqli_query($conn,"select * from form");
while($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
    <td>$no</td>
    <td>$tampil[nama]</td>
    <td>$tampil[alamat_email]</td>
    <td>$tampil[telephone]</td>
    <td>$tampil[pesan]</td>
    </tr>";

    $no++;

}
?>
        
    </table>
</form>