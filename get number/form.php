<!DOCTYPE >
<html>
            <head>
              <link rel="stylesheet" href="form.css"> 
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                     <title>print number </title>
              </head>
              <body class="container" >

                             <div class="col " id="div1">             
                            <form action="" method="post">
                            <label>enter your number: </label> <input type="text" name="num" class="form-control" id="input1">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                            </form>
                            <?php
                           include 'backend.php';
                           if($_POST["num"]){
                            echonumber ($_POST["num"]);
                           }
                           else 
                           {echo "!!!!please enter number !!!!";}
                           ?> 
                           </div> 
                        
              </body>
</html>