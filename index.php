<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyNote</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="styles.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">    <!-- navbar default na navbar cusotm - po dodaniu css styles -->
        <div class = container-fluid>
            <div class="navbar-header">
            <a class="navbar-brand"> MyNotes</a>
            
            <button type="button" class="navbar-toggle" data-target="#navbatCollapsexxx" data-toggle="collapse"> 
                <!-- chowające się menu ( przycisk). data target  i data toogle dają rozwijane listy <tutaj z # w id bez #> -->
                <span class="sr-only">Toggle Navigation</span>   
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                
            
            </button>
            

            </div>
            <div class="navbar-collapse collapse" id="navbatCollapsexxx">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Login Page</a></li> <!-- pierwsza pozycja podświetlona-->
                    <li><a href="#">Notes</a></li>
                    <li> <a href="&">Other</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right"> <!-- pull-right <-przesuwa w prawo// navbar nie przesuwa w liscie przewijanej - poprawione -->
                    <li><a href="#">Login</a></li> <!-- pierwsza pozycja podświetlona-->
                </ul>
            </div>

        </div>
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>