<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon"  type="image/png" href="./images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel = "stylesheet" href="{{asset('css/login.css')}}">
     <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="./js/index.js"></script>
    <title>Register - Naijaswift Forum</title>
  </head>
  <body>
        <div class="login-page">
            <center>
                 <img src="./images/ns.png" alt="" height="150px">
            </center>
           
                <div class="form">
                  <form method="POST" action="{{ route('register') }}" class="register-form">
                    @csrf
                    <div>
                      <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus/>
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div>
                    <input type="text" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>
                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address"/>
                    <select name="usertype">
                      <option>Select Usertype</option>
                     
                      <option value="1">Landlord</option>
                      <option value="2">Agent</option>
                      <option value="3">Tenant</option>
                      
                    </select>
                    <input type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                    <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
                    <button>{{ __('Register') }}</button>
                    <p class="message">Already registered? <a href="/login">Sign In</a></p>
                    <p class="message"><a href="/">Go back to homepage</a></p>
                  </form>
                </div>
              </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>