<form class="form form--main" action="index.php" method="post">
  <div class="form__division">
    <label class="form__label" for="titreArticle">Titre</label>
    <input class="form__texte" type="text" name="titreArticle" id="titreArticle">
  </div>
  <div class="form__division">
    <label class="form__label" for="texteArticle">Texte</label>
    <textarea class="form__area" name="texteArticle" id="texteArticle" rows="8" cols="40"></textarea>
  </div>
  <div class="form__division">
    <label class="form__label" for="categorie">Catégorie de l'article</label>
    <select class="form__select" name="categorie" id="categorie">
      <?php foreach($data['categories'] as $categorie):?>
        <option value="<?php echo($categorie->id);?>"><?php echo $categorie->name;?></option>
      <?php endforeach;?>
    </select>
  </div>
  <input type="hidden" name="a" value="create">
  <input type="hidden" name="e" value="article">
  <input class="form__button" type="submit" value="Ajouter l'article">
</form>
