<? @include("_layout/_header.php") ?>
<!-- <object type="text/html" data="blabla.html"></object> -->
<body>
  <div id="container">
<? @include("_layout/_menu.php") ?>
    <div class="header"></div>
    <div class="content">
        <? foreach($foto as $ft) {?>
        <a href=<?= url('welcome/foto/'.$ft["IDFOTO"]) ?>>
        <div class="item">
        	<div class="blockout"></div>
        	<img src="<?= asset::getImage($ft['GAMBAR']) ?>" alt="">
        </div>
        </a>
        <? } ?>
      	<? foreach($tutor as $tut) { ?>
      	<div class="tutorial-item">
      		<div class="title"><?= $tut["JUDUL"] ?></div>
      		<div class="img">
          <img src="<?= asset::getImage($tut['GAMBAR']) ?>" alt="">  
          </div>
      		<p>
      			<? $content = substr(strip_tags($tut["DESKRIPSI"]), 0,200); echo $content; ?>
      		</p>
      		<a href ="<?= url('welcome/tutor/'.$tut['IDTUTORIAL']) ?>" class="button">read more &rarr; </a>
      	</div>
      	<? } ?>
    </div>
  </div>
<? @include("_layout/_footer.php") ?>
