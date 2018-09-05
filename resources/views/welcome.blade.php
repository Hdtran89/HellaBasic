<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <link rel="icon" href="{!! asset('images/logo_size_invert.jpg') !!}"/>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" 
    crossorigin="anonymous">
    <title>Hella Basic</title>
  </head>
    <body class="is-preload">
    <div id="root">
      <!-- Header -->
      <header id="header">
        <div class="col-md-3" id="logo"><img width="150px" height="150px"  src="{{ asset('/images/logo.png') }}"
          ></div>
        <p><i>Basic doesn't have to be boring.</i></p>
        <h1><b>Coming Soon!</b></h1>
      </header>
      <p><b>Sign up</b> for discount and free samples when we launch!</p>
    </div>
        <!-- Signup Form -->
        <div>
          <form id="signup-form" method="post" action="#">
            <input type="email" name="email" id="email" placeholder="Email Address" />
            <input type="submit" value="Sign Up" />
          </form>
        </div>
    <!-- Footer -->
        <footer id="footer">
          <ul class="icons">
            <li><a href="https://www.facebook.com/wehellabasic" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/wehellabasic/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="mailto:wehellabasic@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
          </ul>
          <ul class="copyright">
            <li>&copy; 2018 Hella Basic</li>
          </ul>
        </footer>

    <!-- Scripts -->
      <script src="js/main.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" 
    crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </body>
</html>
