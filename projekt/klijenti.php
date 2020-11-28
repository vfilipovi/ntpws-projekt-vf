<?php


print'<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">email</th>
      <th scope="col">ovlast</th>
    </tr>
  </thead>
  <tbody>';


  // Retrieve news data sets:
  $sql = "SELECT id, ime, prezime,email,role FROM korisnici";
  $result = mysqli_query($conn,$sql);


  while($row = mysqli_fetch_array($result)) {

        echo'
        <tr>
        <th scope="row"></th>
        <td>' . $row["ime"] . '</td>
        <td>' . $row["prezime"] . '</td>
        <td>' . $row["email"] . '</td>
        <td>' . $row["role"] . '</td>';
        

        if(isset($_SESSION['user']['role'])){
            if ($_SESSION['user']['role'] == 'admin') {
                
            echo "<td><a href='index.php?menu=13&klijentid=" . $row['id'] ."'> <button type='button' class='btn btn-warning'>Uredi</button> </a></td>";
            echo "<td><a href='izbrisiKlijent.php?id=" . $row['id'] . "'> <button type='button' class='btn btn-danger'>Izbrisi</button> </a></td>";
            }
          }

      print'</tr>';
  }
    
    
  print'</tbody>
</table>';

?>

