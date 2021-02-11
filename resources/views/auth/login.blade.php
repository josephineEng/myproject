
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />

    <title>
        CMARS Login Page
    
</title>
    <style>
        body {
            position: relative;
            top: 2cm;
            left: 30%;
            font-family: Arial;
            background-image: url('{{asset('css/image.jpg/')}}');
            background-size: cover;
        }
        
        div.main {
            border: 1px solid;
            padding: 0px 0px 30px;
            width: 40%;
            background: white;
            font-size: medium;
        }

        .text, #cancel, #button {
            font-size: large;
            width: 70%;
            border-radius: 4px;
        }

        div.sub,label{
            padding-left: 1cm;
        }

        h1 {
            padding: 5px;
            border: 1px solid black;
            font-size: x-large;
            text-align: center;
            color: darkblue;
            background-color: lightgray;
            margin-top: 0;
        }

        a:link, a:visited {
            font-weight: bold;
            color: white; 
            text-align: center; 
            text-decoration: none; 
            width: 50%;
            border-radius: 4px;
        }

        button {
            background-color: #ff6a00;
            width: 50%;
            border-radius: 4px;
        }
        #cancel {
            background-color: #069817;
        }

    </style>
</head>

<body>
    <div class="main">
        <h1>COVID-19 Case Management And <br> Reporting Tool For Uganda</h1>
        <br><br>
    <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('YOUR EMAIL ADDRESS') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div><br><br>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('PASSWORD') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
<br><br>
            <div>
                <label for="remember_me">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>
<br><br>
            <div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a><br>
                    <br>
                @endif

                <x-jet-button>
                    {{ __('Login') }}
                </x-jet-button>
            </div>
           
        </form>
        </x-jet-authentication-card>
        </div>
</body>

</html>

