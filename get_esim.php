<?php include "menu.php"; ?>

<h1>Get-esimerkki</h1>

<form action="get_esim.php" method="get">
  <TABLE border="0">
    <tr>
        <td><label for="">Etunimi</label></td>
        <td><input type="text" name="en"></td>
      </tr>
      <tr>
        <td><label for="sn">Sukunimi</label></td>
        <td><input type="text" id="sn" name="en"></td>
      </tr>
  </table>
<input type="submit" name="btnSend" value="Lähetä">
</form>

<?php
//$btn=$_GET['btnSend'];
if(isset($_GET['btnSend'])) {
    $etu=$_GET['en'];
    $etu=$_GET['sn'];
    echo 'Hei'.$Etu.''.$Suk;
}
?>
<?php include "footer.php"; ?>
