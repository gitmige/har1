<?php include "menu.php"; ?>
    <h1>Assosiatiivinen array</h1>
    <p>Seuraava taulukko on luotu php:llä</p>
    <?php
    $nimet=array(
      array("Etunimi"=>'Ville', "Sukunimi"=>'Virtanen'),
      array("Etunimi"=>'Matti', "Sukunimi"=>'Korhonen'),
      array("Etunimi"=>'Maija', "Sukunimi"=>'Mäkinen' ),
      array("Etunimi"=>'Liisa', "Sukunimi"=>'Nieminen')
    );
    //print_r tulostaa koko taulukon
    //print_r($nimet)
    //ensimmäinen Etunimi
    echo 'Ensimmäinen etunimi on ',$nimet[0]['Etunimi'].'<br>';
    ?>
  <h2>Koko taulukko</h2>
    <table border="1">
      <tr>
        <th>Etunimi</th><th>Sukunimi</th>
      </tr>
      <?php
      foreach ($nimet as $rivi) {
        echo '<tr><td>'.$rivi['Etunimi'].'</td><td>'.$rivi['Sukunimi'].'</td></tr>';
      }

      ?>
    </table>
    <?php include "footer.php"; ?>
  </body>
</html>
