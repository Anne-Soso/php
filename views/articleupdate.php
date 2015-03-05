<form class="form form--main" action="index.php" method="post" enctype="multipart/form-data">
  <div class="form__division">

    <label class="form__label" for="titreArticle">Titre</label>
    <input class="form__texte" type="text" name="titreArticle" id="titreArticle" value="<?php echo($data['data']->title);?>">
  </div>
  <div class="form__division">
    <label class="form__label" for="texteArticle">Texte</label>
    <textarea class="form__area" name="texteArticle" id="texteArticle" rows="8" cols="40"><?php echo($data['data']->body)?></textarea>
  </div>
  <div class="form__division form__division--petit">
    <label class="form__label" for="fichierImage">Ajouter une image</label>
    <input class="form__file" type="file" name="fichierImage" id="fichierImage">
  </div><!--
  --><div class="form__division form__division--petit">
    <label class="form__label" for="categorie">Catégorie de l'article</label>
    <select class="form__select" name="categorie" id="categorie">
      <?php foreach($data['categories'] as $categorie):?>
        <option value="<?php echo($categorie->id);?>"<?php echo($categorie->id==$data['data']->category_id?'selected ':' ');?>><?php echo $categorie->name;?></option>
      <?php endforeach;?>
    </select>
  </div>
  <input type="hidden" name="a" value="update">
  <input type="hidden" name="e" value="article">
  <input type="hidden" name="id" value="<?php echo($data['data']->id);?>">
  <input class="form__button" type="submit" value="Ajouter l'article">
</form>
