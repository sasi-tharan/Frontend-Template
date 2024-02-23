<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login</span></div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row button">
                    <button type="submit" class="btn btn-success">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 text-center">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #1abc9c;
        overflow: hidden;
    }

    ::selection {
        background: rgba(26, 188, 156, 0.3);
    }

    .container {
        max-width: 440px;
        padding: 0 20px;
        margin: 170px auto;
    }

    .wrapper {
        width: 100%;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
    }

    .wrapper .title {
        height: 90px;
        background: #16a085;
        border-radius: 5px 5px 0 0;
        color: #fff;
        font-size: 30px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapper form {
        padding: 30px 25px 25px 25px;
    }

    .wrapper form .row {
        height: 45px;
        margin-bottom: 15px;
        position: relative;
    }

    .wrapper form .row input {
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 60px;
        border-radius: 5px;
        border: 1px solid lightgrey;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    form .row input:focus {
        border-color: #16a085;
        box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
    }

    form .row input::placeholder {
        color: #999;
    }

    .wrapper form .row i {
        position: absolute;
        width: 47px;
        height: 100%;
        color: #fff;
        font-size: 18px;
        background: #16a085;
        border: 1px solid #16a085;
        border-radius: 5px 0 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapper form .pass {
        margin: -8px 0 20px 0;
    }

    .wrapper form .pass a {
        color: #16a085;
        font-size: 17px;
        text-decoration: none;
    }

    .wrapper form .pass a:hover {
        text-decoration: underline;
    }

    .wrapper form .button input {
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding-left: 0px;
        background: #16a085;
        border: 1px solid #16a085;
        cursor: pointer;
    }

    form .button input:hover {
        background: #12876f;
    }

    .wrapper form .signup-link {
        text-align: center;
        margin-top: 20px;
        font-size: 17px;
    }

    .wrapper form .signup-link a {
        color: #16a085;
        text-decoration: none;
    }

    form .signup-link a:hover {
        text-decoration: underline;
    }
    .wrapper form .button {
        text-align: center;
    }

    .wrapper form .button button {
    display: block;
    margin: 0 auto;
    width: 150px; /* Set your desired width */
    background: #2ecc71; /* Green color */
    border: 10px solid #2ecc71;
}

</style>