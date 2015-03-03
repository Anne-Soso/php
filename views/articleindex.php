<div class="blog">
  <?php if(!isset($_SESSION['connected'])):?>
    <a href="?a=collect&e=user">Identifiez-vous</a>
  <?php else:?>
    <a href="?a=disconnect&e=user">Déconnectez-vous</a>
  <?php endif;?>


  <?php foreach($data['data'] as $article):?>
    <div class="article">
      <h2 class="article__titre"><?php echo($article->title); ?></h2>
      <div class="article__categorie">
        <?php echo($article->name)?>
      </div>
      <div class="article__date">
        <?php echo(date("d / m", strtotime($article->date)));?>
      </div>
      <p class="article__texte">
        <?php echo($article->body)?>
      </p>
    </div>

  <?php endforeach;?>

</div>
<div class="colonne-droite">
  <ul class="blog-categories"><?php foreach($data['categories'] as $categorie):?>
    <li class="blog-categories__item"><a class="blog-categories__link" href="index.php?a=index&e=article&category_id=<?php echo($categorie->id);?>"><?php echo($categorie->name); ?></a></li>
  <?php endforeach;?></ul>
</div>
