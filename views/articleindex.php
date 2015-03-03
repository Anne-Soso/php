<div id="articles">
  <?php foreach($data['data'] as $article):?>
    <div class="article">
      <h2 class="article__titre"><?php echo($article->title); ?></h2>
      <div>
        <?php echo($article->name)?>
      </div>
      <div>
        <?php echo($article->date)?>
      </div>
      <p>
        <?php echo($article->body)?>
      </p>
    </div>

  <?php endforeach;?>
</div>
