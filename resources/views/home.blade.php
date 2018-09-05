<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="theme-color" content="#000000">
    <link rel="icon" href="{!! asset('images/logo_size_invert.jpg') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/main.css') !!}" />
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
          <form id="signup-form" method="post" action="/subscribe">
            <input type="email" name="email" id="email" placeholder="Email Address" />
            <input type="submit" value="Sign Up" id="submit" />
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
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
    crossorigin="anonymous"></script>

        <!-- Scripts -->
    <script type="text/javascript">
    // // Signup Form.
      (function() {
        // Vars.
          var $form = document.querySelectorAll('#signup-form')[0],
            $submit = document.querySelectorAll('#signup-form input[type="submit"]')[0],
            $message;

        // Bail if addEventListener isn't supported.
          if (!('addEventListener' in $form))
            return;

        // Message.
          $message = document.createElement('span');
            $message.classList.add('message');
            $form.appendChild($message);

          $message._show = function(type, text) {

            $message.innerHTML = text;
            $message.classList.add(type);
            $message.classList.add('visible');

            window.setTimeout(function() {
              $message._hide();
            }, 3000);

          };

          $message._hide = function() {
            $message.classList.remove('visible');
          };

        // Events.
        // Note: If you're *not* using AJAX, get rid of this event listener.
          $('#submit').click(function(event) {
            event.stopPropagation();
            event.preventDefault();
            $.ajaxSetup({
              headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
            });
            $.ajax({
              url:"{{url('/subscribe')}}",
              method:'post',
              data:{
                name: $("email").val(),
              },
              success: function(result){
                // Hide message.
                $message._hide();

              // Disable submit.
                $submit.disabled = true;

              // Process form.
              // Note: Doesn't actually do anything yet (other than report back with a "thank you"),
              // but there's enough here to piece together a working AJAX submission call that does.
                window.setTimeout(function() {

                  // Reset form.
                    $form.reset();

                  // Enable submit.
                    $submit.disabled = false;

                  // Show message.
                    $message._show('success', 'Thank you!');
                    //$message._show('failure', 'Something went wrong. Please try again.');

                }, 750);
              }});
          });
      })();
    </script>
  </body>
</html>
