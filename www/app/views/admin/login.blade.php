<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>School of Light | Admin Panel</title>
    {{ HTML::style('css/admin/pure-min.css') }}
    {{ HTML::style('css/admin/main.css') }}
    {{ HTML::style('css/admin/side-menu.css') }}
    {{ HTML::style('css/admin/font-awesome.min.css')}}
  </head>
  <body class="login">
    <div class="overlay"></div>
    <div class="center">
      <form class="pure-form pure-form-stacked" action="{{ URL::to('do_login') }}" method="POST">
        <fieldset>
            <legend>Admin Panel</legend>
            <div class="inner-addon left-addon">
              <i class="fa fa-envelope"></i>
              <input id="username" name="username" type="text" placeholder="Email">
            </div>
            <div class="inner-addon left-addon">
              <i class="fa fa-lock"></i>
              <input id="password" name="password" type="password" placeholder="Password">
            </div>
            <!--
            <label for="remember" class="pure-checkbox">
                <input id="remember" type="checkbox"> Remember me
            </label>
   -->
            <button type="submit" class="pure-button pure-button-primary">Login</button>
            @if(Session::has('notice'))
              <div style="margin: 20px auto; color:red"><i class="fa fa-warning"></i> {{ Session::get('notice') }}</div>
            @endif
        </fieldset>
      </form>
    </div>
  </body>
</html>