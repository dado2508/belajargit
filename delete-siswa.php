<?php
include('config.php');
$id=$_GET['id'];
if($id){
    $mysqli = new mysqli($host, $user,$pass,$dbname,$port);
    $query = "DELETE FROM siswa where id=".$id." ;";
    try {
        if ($mysqli->query($query)){
          echo "Success delete siswa <br/>";
          header('Location: /daftar-siswa.php');
          exit();
        }else{
           echo "gagal";
        }
    } catch (\Throwable $th) {
        echo $query;
        printf("%s ",$th);
        //throw $th;
    }
    

}
else {
   echo "please masukan id";
}
?>
