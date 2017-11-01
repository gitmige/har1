<?php include "menu.php"; ?>

<h1>Post-esimerkki</h1>

<form action="post_esim.php" method="post">
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
$btn=$S_POST['btnSend'];
if(isset($btnSend)) {
    $etu=$S_POST['en'];
    $etu=$S_POST['sn'];
    echo 'Hei'.$etu.' '.$Suk;
}
?>
<?php include "footer.php"; ?>
