<?php 
if (isset($_POST['submit'])) {
  $imgUrl = $_POST['imgurl'];
  $ch = curl_init($imgUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $downloadImg = curl_exec($ch);
  curl_close($ch);
  header('Content-type: image/jpg');
  header('Content-Disposition: attachment;filename="thumbnail.jpg"');
  echo $downloadImg;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>download thumbnail using php</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="box">
    <div class="header_point"></div>
    <div class="right_point"></div>
    <div class="body">
      <form action="" method="POST">
        <div class="card_header">
          <span>Paste Your Link Here:-</span><br />
          <input type="text" name="" id="" placeholder="https://www.google.com" />
          <input class="hidden-input" type="hidden" name="imgurl">
        </div>
        <div class="card_body">
          <i class="fa fa-cloud-download" aria-hidden="true"></i>
          <span>click here to button download for image.</span>
          <img src="" class="thumbnail" alt="">
        </div>
        <button class="download_Btn"  name= "submit">Download image</button>
      </form>
    </div>
    <div class="nav_panel">
      <svg xmlns="http://www.w3.org/2000/svg" opacity=".5" width="18" height="18" viewBox="0 0 24 24">
        <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" opacity=".5" width="18" height="18" viewBox="0 0 24 24">
        <path d="M19 2c1.654 0 3 1.346 3 3v14c0 1.654-1.346 3-3 3h-14c-1.654 0-3-1.346-3-3v-14c0-1.654 1.346-3 3-3h14zm0-2h-14c-2.762 0-5 2.239-5 5v14c0 2.761 2.238 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5z" />
      </svg>
      <svg width="18" height="24" opacity=".5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
        <path d="M20 .755l-14.374 11.245 14.374 11.219-.619.781-15.381-12 15.391-12 .609.755z" />
      </svg>
    </div>
  </div>
  <!-- <script src="titt.js"></script> -->
  <!-- <script>
      VanillaTilt.init(document.querySelector(".box"), {
        max: 25,
        speed: 900,
        glare: true,
      });
    </script> -->
    <script src="js/script.js"></script>
</body>

</html>
