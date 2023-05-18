<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/assets/css/test.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="/login/verif" method="post">
                        @csrf
                        {{ csrf_field() }}
                        <div class="group">
                            <label for="user" class="label">Email</label>
                            <input id="user" type="email" name="email" class="input">
                        </div>
                        <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" name="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
                    </form>
                <div class="sign-up-htm">
                    <form action="/regis/verif" method="post">
                        @csrf
                        {{ csrf_field() }}
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input" name="username">
                        </div>
                    <div class="group">
                        <label for="email" class="label">Email Address</label>
                        <input id="pass" type="email" class="input" name="email">
                    </div>
                    <div class="group">
                        <label for="jenkel" class="label">Jenis Kelamin</label>
                        <select class="input" id="exampleInputEmail1" name="jenkel" required>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                    <div class="group">
                        <label for="no_telp" class="label">No Telp</label>
                        <input id="pass" type="number" class="input" name="no_telp">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="password">
                    </div>
                    <div class="group">
                        <button type="submit" class="button" value="Sign Up">Sign Up</button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/test.js"></script>
  </body>
</html>
