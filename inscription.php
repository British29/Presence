<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>  
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
  <script type="text/javascript">
  $(document).ready(function() {
    $('#Enregistrer').click(function() {
      $.ajax({
        type: "POST",
        url: 'send.php',
        data: {
              nom: $("#nom").val(),
              email: $("#email").val(),
              password: $("#password").val(),
        }
      });
      window.location.replace('index.php');
    });
  });
  </script>
</head>
<body>



        <center>
         <div class="container pt-3 my-3 border">
             <h1>Formulaires</h1>
        <form>

                 <div class="form-group">
                   <label for="nom">Nom et Prenoms</label>
                   <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer votre nom et Prenoms">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre Email</label>
                   <input type="email" class="form-control" id="email" name="email" placeholder="votre Email">
                 </div>

                <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" class="form-control" id="password" name="password" placeholder="votre mot de passe">
                 </div>

                 <div class="form-group">
                    <button class="btn btn-lg btn-primary" id="Enregistrer">Enregistrer</button>
                 </div>
             </form>
           </center>
         </div>




</body>
</html>