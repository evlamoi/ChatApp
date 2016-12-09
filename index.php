<!DOCTYPE html>
<html>
    <head>
        <title>ChatApp</title>
        <!-- MATERIALIZE Base CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
        <!-- MATERIALIZE Fonts/Icons -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- MATERIALIZE Base JS -->   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        <!-- Mobile Optimization -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>       
    </head>
    <body> 
        <div class="container">
            <div class="row"></div>
            <div class="row">
                <div class="col s6 welcome">Welcome, $user<b></b></div>
                <div class="col s6 logout"><a style="float:right" id="exit" href="#">Exit Chat</a></div>
            </div>
             
            <div id="chatbox"></div>
             
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                    <label for="icon_prefix2">Type a message...</label>
                  </div>
                </div>
              </form>
            </div>
        </div>

        <script type="text/javascript">
        // jQuery Script
        $(document).ready(function(){
         
        });
        </script>
    </body>
</html>