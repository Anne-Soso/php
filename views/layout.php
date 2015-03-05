<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Elevage de la Chavée</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,700,300,600,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/packed.js"></script>
</head>
<body>
  <div role="navigation" class="site-nav">
          <div class="wrapper">
            <a href="?a=index&e=article" class="site-nav__element">Blog</a>
            <a href="#"class="site-nav__element">À propos</a>
            <a href="index.php" title="Aller page d'accueil" class="site-nav__element site-nav__element--logo">
                <img src="img/chavee2.png" class="site-nav__logo" alt="Aller page d'accueil de l'élevage de la Chavée">
            </a>
            <a href="#" class="site-nav__element">Chevaux</a>
            <a href="#" class="site-nav__element">Contact</a>
          </div>
  </div>
  <div class="site-video" >
    <img src="img/video.jpg" class="site-video__image"alt="" />
  </div>
  <div class="wrapper">
    <section class="site-main clearfix">
      <h1 class="main-title"><?php echo($data['titre']);?></h1>
      <?php include($data['view']);?>
    </section>
  </div>
  <footer class="site-footer">
    <div>
        <?php if(!isset($_SESSION['connected'])):?>
          <a href="?a=collect&e=user">Identifiez-vous</a>
        <?php else:?>
          <a href="?a=disconnect&e=user">Déconnectez-vous</a>
        <?php endif;?>
      </div>
  </footer>
  <script type="text/javascript">
  var editor=new TINY.editor.edit('editor',{
  	id:'texteArticle',
  	width:584,
  	height:175,
  	cssclass:'te',
  	controlclass:'tecontrol',
  	rowclass:'teheader',
  	dividerclass:'tedivider',
  	controls:['bold','italic','underline','strikethrough','|','subscript','superscript','|',
  			  'orderedlist','unorderedlist','|','outdent','indent','|','leftalign',
  			  'centeralign','rightalign','blockjustify','|','unformat','|','undo','redo','n',
  			  'font','size','style','|','image','hr','link','unlink','|','cut','copy','paste','print'],
  	footer:true,
  	fonts:['Verdana','Arial','Georgia','Trebuchet MS'],
  	xhtml:true,
  	cssfile:'css/style.css',
  	bodyid:'editor',
  	footerclass:'tefooter',
  	toggle:{text:'source',activetext:'wysiwyg',cssclass:'toggle'},
  	resize:{cssclass:'resize'}
  });

  </script>
</body>
</html>
