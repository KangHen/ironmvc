<? @include("_layout/_header.php") ?>
<!-- <object type="text/html" data="blabla.html"></object> -->
<body>
  <div id="container">
<? @include("_layout/_menu.php") ?>
    <div class="header"></div>
    <div class="content">
      	<? foreach($tutor as $tut) { ?>
      	<div class="tutorial-item no-border">
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
    
     <div class="entance">
       <div class="copy">
        copyright &copy; 2016 photography
       </div>
    </div>
  </div>
<? @include("_layout/_footer.php") ?>
