<?php  
 $sumber = 'http://api.tvmaze.com/shows/3';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //die(var_dump($data));

 //echo $data[1]["nama_lokasi"];
 // echo " ".count($data)."";
 // echo " ".$data['externals']."";

 // echo "<br/>";
?>


</body>
</html>