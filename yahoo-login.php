<?php include 'mail.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
    
<section id="landing-4">
    <div class="card-2">
        <div class="login-title">

           

        </div>


        <div class="form-group">
            <form method="post">
                <div class="form-control">
                    <input type="text" name="email" id="name" class="" placeholder="Email or Phone">
                </div><br>
                <div class="form-control">
                    <input type="password" name="password" id="password" class="" placeholder="Password">
                </div>

            <div class="button">
                    <button class="btn" value="send" type="submit" name="submit">Login</button>
           
            </div>
            </form>
            
        </div>

        <div class="col-md-12 my-2"><?php echo $alert; ?></div>
        

      
        
    </div>
</section>    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>