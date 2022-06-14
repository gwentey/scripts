
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Tagify - Text Input Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://unpkg.com/@yaireo/tagify/dist/tagify.css'>
<link rel='stylesheet' href='https://yaireo.github.io/tagify/docs/codepen.css'><link rel="stylesheet" href="./style.css">

</head> 

<?php

if(isset($_POST['envoyer'])){
  echo $_POST['tags'];
} else {

?>
<body>
  <form action="" method="POST">
<!-- partial:index.partial.html -->
<input name='tags'
  class='some_class_name'            
  placeholder='write some tags'      
  value='css, html, javascript' of Objects)
  data-blacklist=''></input>
<!-- partial -->
<input name="envoyer" type="submit" value="Send baby">
</form>
  <script src='https://unpkg.com/@yaireo/tagify'></script>
<script src='https://yaireo.github.io/tagify/docs/codepen.js'></script><script  src="./script.js"></script>

</body>
</html>
<?php } ?>

