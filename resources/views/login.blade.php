<!DOCTYPE html>
<html>
<head class="mb-4">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <Title>MASUKIN NAMA DISINI</Title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
            <a href="{{ url('/home') }}"></href><img src="../../public/images/logo.png"></a>
            <div class="nav-links-a">
                <ul>
                    <li><a href="{{ url('/home') }}">HOME</a></li>
                    <li><a href="{{ url('/produk') }}">PRODUK</a></li>
                    <li><a href="{{ url('/masuk') }}">MASUK</a></li>
                    <li><a href="{{ url('/tentang') }}">TENTANG KAMI</a></li>
                </ul>
            </div>
        </nav>
    <div class="text-box-login">
        <style>
            Body {
              font-family: Calibri, Helvetica, sans-serif;
              background-color: pink;
            }
            button {
                   background-color: #a1a1a1;
                   width: 100%;
                    color: rgb(0, 0, 0);
                    padding: 15px;
                    margin: 10px 0px;
                    border: none;
                    cursor: pointer;
                     }
             form {
                    border: 3px solid #f1f1f1;
                }
             input[type=text], input[type=password] {
                    width: 100%;
                    margin: 8px 0;
                    padding: 12px 20px;
                    display: inline-block;
                    border: 2px solid green;
                    box-sizing: border-box;
                }
             button:hover {
                    opacity: 0.7;
                }

             .container {
                    padding: 25px;
                    background-color: lightblue;
                }
            </style>
            </head>
            <body>
                <center> <h1>LOGIN</h1> </center>
                <x-auth-card>

                    <x-slot name="logo">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-button class="ml-3">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                </x-auth-card>
            </body>
            </html>
    </div>

    </section>
</body>
</html>


