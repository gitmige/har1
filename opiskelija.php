<?php
class Opiskelija
{
  private $nimet=array(
    array("Etunimi"=>'Ville', "Sukunimi"=>'Virtanen'),
    array("Etunimi"=>'Matti', "Sukunimi"=>'Korhonen'),
    array("Etunimi"=>'Maija', "Sukunimi"=>'Mäkinen' ),
    array("Etunimi"=>'Liisa', "Sukunimi"=>'Nieminen')
  );

  public function get_nimet(){
    return $this->nimet;
  }
}
?>
