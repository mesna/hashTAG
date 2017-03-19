<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="kaskaad.css">
	<title>#hashTAG</title>
  </head> 
  <body>
  <textarea id="tekstiala" maxlength="255" form="vorm" name="postitus" rows="8" cols="50" placeholder="Maksimaalne sõnumipikkus on 255 tähemärki, seega mõtle hoolikalt, mida kirjutad!"></textarea>
  <form method="POST" action="form.php" id="vorm">
      <input type="submit" name="saada" value="Postita"> 
  </form>
  <div id="kaunter"></div>
  <div class="frame">
  <?php include "database.php"; ?>
  </div>
 	<a href="http://validator.w3.org/check?uri=referer">
  		<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 	</a>
  <script src="skript.js" type="text/javascript"></script>
  </body>
</html>