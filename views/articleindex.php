<div id="articles">
  Les messages
  <?php foreach($data['data'] as $article):?>
    <h2><?php echo($article->title); ?></h2>
    <div>
      <?php echo($article->name)?>
    </div>
    <div>
      <?php echo($article->date)?>
    </div>
    <p>
      <?php echo($article->body)?>
    </p>
  <?php endforeach;?>
</div>
