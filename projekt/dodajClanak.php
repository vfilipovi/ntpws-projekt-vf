<?php

if (isset($naslov) && isset($kratkiOpis) && isset($naslov) && isset($imeAutora) && isset($tekst) && isset($kategorija)) {
    echo "prva provjera-  sve postavljeno";
}
$target_dir = "uploads/";
$target_file_name = $target_dir . basename($_FILES["file"]["name"]);
$response = array();

$vrijemeObjave = date('Y-m-d H:i:s');
$naslov = $_POST['naziv'];
$kratkiOpis = $_POST['kratkiopis'];
$imeAutora = $_POST['autor'];
$tekst = $_POST['tekst'];
$kategorija = $_POST['kategorija'];

if (strlen($kratkiOpis) > 105) {
    echo "Kratki opis ima previše znakova";
} else {
    if ($naslov != '' && $kratkiOpis != '' && $naslov != '' && $imeAutora != '' && $tekst != '' && $kategorija != '') {

        echo "svi podaci su postavljeni";
        // get details of the uploaded file
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        //rename
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        // directory in which the uploaded file will be moved
        $uploadFileDir = 'uploads/';
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path) && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "jpeg" || $fileExtension == "webp")) {

            $sql = "insert into vijesti (naslov,slikaPath,vrijemeObjave,tekst,kategorija,imeAutora,kratkiOpis) values ('$naslov','$dest_path','$vrijemeObjave','$tekst','$kategorija','$imeAutora','$kratkiOpis')";
            mysqli_query($conn, $sql) or die(mysqli_error($conn));
        } else {
            echo "Članak nije poslan! Greška!";
        }
    } else {
        echo "Unesite sve polja";
    }
}
?>
</div>
<!-- /.row -->

</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white"> &copy; Online Novine HR 2020</p>
    </div>
    <!-- /.container -->
</footer>


</body>

</html>