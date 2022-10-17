<!DOCTYPE html>
<html lang="es-es">
   <head>
      <meta charset="utf-8">
      <title>@yield('title')</title>
      <!-- mobile responsive meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
      <meta name="description" content="This is meta description">
      <meta name="author" content="Themefisher">
      <!-- plugins -->
      <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2" style="font-display: optional;">
      <link rel="stylesheet" href="{{ asset('plugins/bulma/bulma.min.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">
      <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
      <link rel="stylesheet" href="/plugins/slick/slick.css">
      <!-- Main Stylesheet -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <!--Favicon-->
      <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}images/favicon.png" type="image/x-icon">
      <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
   </head>
   <body>
    <!DOCTYPE html>
    <body>
        <div class="hero is-fullheight">
            <div class="hero-body is-justify-content-center is-align-items-center">

                <div class="columns is-flex is-flex-direction-column box">
                    <h3>Regístrate en el Blog</h3>
                    <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                    <div class="column">
                        <label for="name">Nombre</label>
                        <input type="text" placeholder="Name" id="name" class="input is-primary" name="name"
                                    required autofocus>
                                    <input type="hidden" id="rol" name="rol" value="0">
                                    <input type="hidden" id="avatar" name="avatar" value="team-2">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                    </div>
                        <div class="column">
                        <label for="email">Email</label>
                    <input type="text" placeholder="Email" id="email_address" class="input is-primary"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                    <div class="column">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" id="password" class="input is-primary"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                        <a href="forget.html" class="is-size-7 has-text-primary">Do you have a account?</a>
                    </div>
                    <div class="column">

                        <button class="button is-primary is-fullwidth" type="submit">Login</button>
                    </div>
                    <div class="has-text-centered">
                        <p class="is-size-7"> Don't have an account? <a href="#" class="has-text-primary">Sign up</a>
                        </p>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </body>

</html>




