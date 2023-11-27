<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>Happy Birthday!!</title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="love.svg" />
        <p>Click Love</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Next ]</button>
        <button class="btn send">[ Send Text ]</button>
      </div>
    </div>
<script>
konten = [
  {
    gambar: "stiker1.gif",
    ucapan: "Hai alyy",
  },
  { gambar: "stiker2.gif",
    ucapan: "Happy Birthdayy!",
  },
  { gambar: "stiker3.gif",
    ucapan: "May everything you dream of come true",
  },
  { gambar: "stiker4.gif",
    ucapan: "Stay healthy :D",
  },
  { gambar: "stiker5.gif",
    ucapan: "May you be happy forever",
  },
  { gambar: "stiker6.gif",
  },
  {  ucapan: "I love youu.",
  },
];

musik = "music.mp3";
nomorWhatsapp = "6281xxx";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>