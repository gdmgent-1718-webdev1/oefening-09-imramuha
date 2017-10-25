<?php


$isSubmitted = isset($_REQUEST['submit']);                                                  // isSubmitted when we press submit (see name="submit")

if ($isSubmitted){
    $userInput = $_GET['searchInput'];                                                     // after submit we GET the userinput from searchInput (see name="searchInput") and assign it to $userInput
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Formulier GET-methode></title>
</head>
<body>
    <div class="container">
    <?php if($isSubmitted): ?>                                                              <!-- if the searchfield is surely not empty -->   
       <h1> Zoekresultaten voor zoekopdracht:<br> <?= $userInput ?> </h1>                   <!-- text that has been submitted into that field-->
       <?php else: ?>                                                                       <!-- else show the form -->
        
           <form action="" method="get">                                                    <!-- the method is GET -->         
               Zoekveld: <input type="text" name="searchInput"><br>                           <!-- the input that we'll get is in the "name" key --> 
            Verzendknop<input type="submit" name="submit">                                  <!-- with _POST we the the value from name-->
        </form>
        <?php endif ?>
        
    </div>

 
    


</body>
</html>
