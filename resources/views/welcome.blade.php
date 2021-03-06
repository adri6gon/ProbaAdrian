<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="container">
                    <div class="col-md-8">
                                <div class="card-header">{{ __('Add incidence') }}</div>
                                   <form method="POST" action="/add-incidence" enctype=”multipart/form-data”>
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="name">{{ __('Name') }}</label>

                                                  <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" required autofocus>

                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lastname" >{{ __('Lastname') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                                        @if ($errors->has('lastname'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('lastname') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email">{{ __('Email') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="phone" >{{ __('Phone') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                                        @if ($errors->has('phone'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="image">{{ __('Image') }}</label>

                                                    <div class="col-md-6">
                                                        <input type="file" id="image" name="image"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="location" >{{ __('Location') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required autofocus>

                                                        @if ($errors->has('location'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('location') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="state" >{{ __('State') }}</label>

                                                    <div class="col-md-6">
                                                        <select id="state" name="state">
                                                            <option>Recibida</option>
                                                            <option>En Gestión</option>
                                                            <option>Solucionada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="category" >{{ __('Category') }}</label>

                                                    <div class="col-md-6">
                                                        <select id="category" name="category">
                                                            <option>Iluminación</option>
                                                            <option>Jardinería</option>
                                                            <option>Alcantarillado</option>
                                                            <option>Basura</option>
                                                            <option>Otros</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="description" >{{ __('Description') }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="description" name="description"></textarea>
                                                    </div>
                                                </div>


                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Añadir') }}
                                                        </button>
                                                    </div>
                                                </div>
                                        </form>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



