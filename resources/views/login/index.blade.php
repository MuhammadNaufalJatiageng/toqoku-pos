<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monomaniac+One&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Local Css -->
    <link rel="stylesheet" href="/css/login.css">
  </head>
  <body>

   <div class="wrapper">
      <div class="intro">
         <h2>Selamat Datang di</h2>
         <img src="brand.png" alt="">
         <h3>Aplikasi Point of Sales berbasis web.</h3>
      </div>

      <div class="login-wrapper">
         <div class="main">  	
            <input type="checkbox" id="chk" aria-hidden="true">
      
            <div class="login">
               <form class="form" action="/login" method="post">
                  @csrf
                  <label for="chk" aria-hidden="true">Log in</label>
                  <input class="input" type="email" name="email" placeholder="Email" required="">
                  <input class="input" type="password" name="password" placeholder="Password" required="">
                  <button>Log in</button>
               </form>
            </div>
      
            <div class="register">
                  <form class="form">
                     <label for="chk" aria-hidden="true">Register</label>
                     <input class="input" type="text" name="txt" placeholder="Username" required="">
                     <input class="input" type="email" name="email" placeholder="Email" required="">
                     <input class="input" type="password" name="pswd" placeholder="Password" required="">
                     <button>Register</button>
                  </form>
            </div>
         </div>
      </div>
   </div>

  </body>
</html>