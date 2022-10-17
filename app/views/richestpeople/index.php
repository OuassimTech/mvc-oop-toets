<?php echo $data["title"]; ?>
<table>
  <thead>
    <th>Naam</th>
    <th>Vermogen</th>
    <th>Leeftijd</th>
    <th>Bedrijf</th>
    <th>Delete</th>
  </thead>
  <tbody>
    <?=$data['richestPeople']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>
