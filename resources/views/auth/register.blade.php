
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>
        CMARS sign in
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
        }
        #cancel {
            background-color: #069817;
        }

    </style>
</head>

<body>
    <div class="main">
        <h1>COVID-19 Case Management And Reporting Tool For Uganda</h1>

        <div class="sub">
            <h2>New Account</h2>
            <b>Are you:</b><br />
                <div id="user">
                    A system administrator? <input type="radio" name="user" value="admin" checked><br />
                    A director? <input type="radio" name="user" value="director"><br><br>
                </div>

    <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('First Name') }}" />
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            </div><br>

            <div>
                <x-jet-label for="name" value="{{ __('Sur Name') }}" />
                <x-jet-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
            </div><br>

            <div>
                <x-jet-label for="username" value="{{ __('User Name') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div><br>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div><br>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
<br>
            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div><br>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>


                <x-jet-button class="ml-4">
                    {{ __('create my account') }}
                </x-jet-button>
            </div>
            <input type="reset" value="Cancel" id="cancel">
        </form>
    </x-jet-authentication-card>
    </div>
    </div>
</body>

</html>
