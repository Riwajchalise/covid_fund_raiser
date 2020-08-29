{{-- <!DOCTYPE html>
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
            /* from here  */
            @import "lesshat";

        body {
        font-family: 'Montserrat', sans-serif;
        -webkit-font-smoothing: antialiased;
        background-color: darken(#428bca, 20%) !important;
        }

        .true-center {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        height: 106px;
        width: 690px;
        }

        .btn {
        position: relative;
        border: 0 !important;
        &:focus { outline: 0; }
        &:hover { top: 2px; }
        &:active { top: 6px; }
        cursor: pointer;
        -webkit-font-smoothing: antialiased;
        font-weight: bold !important;

        .border-radius(10);
        .transition(all, 50ms, ease);
        .btn(rgb(204, 204, 204), 20%);

        }

        .btn-primary {
        .btn(#428bca);
        }

        .btn-success {
        .btn(#5cb85c);
        }

        .btn-info {
        .btn(#5bc0de);
        }

        .btn-warning {
        .btn(#f0ad4e);
        }

        .btn-danger {
        .btn(#d9534f);
        }

        .btn-link {
        text-shadow: none;
        background: none !important;
        .box-shadow(none);
        &:hover {
            border: 0;
            background: none !important;
            .box-shadow(none);
            top: 0;
        }
        &:active {
            .box-shadow(none);
            top: 0;
        }
        }

        .btn(@color, @percent: 10%)  {
            border: 0;
            text-shadow: 0px 1px 0px darken(@color, @percent);
            background-color: @color;
            .box-shadow(0px, 6px, 0px, darken(@color, @percent));
            &:hover {
            border: 0;
            background-color: lighten(@color, 5%) !important;
            .box-shadow(0px, 4px, 0px, darken(@color, @percent));
            }
            &:active {
            .box-shadow(inset, 0px, 3px, 0px, darken(@color, @percent));
            }
        }

        /* button added */
        @import "lesshat";

.btn1 {
  position: relative;
  border: 0 !important;
  &:focus { outline: 0; }
  &:hover { top: 2px; }
  &:active { top: 6px; }
  cursor: pointer;
  -webkit-font-smoothing: antialiased;
  font-weight: bold !important;

  .border-radius(10);
  .transition(all, 50ms, ease);
  .btn(rgb(204, 204, 204), 20%);

}



.btn-danger {
  .btn(#d9534f);
}

.btn-link {
  text-shadow: none;
  background: none !important;
  .box-shadow(none);
  &:hover {
    border: 0;
    background: none !important;
    .box-shadow(none);
    top: 0;
  }
  &:active {
    .box-shadow(none);
    top: 0;
  }
}

.btn1(@color, @percent: 10%)  {
    border: 0;
    text-shadow: 0px 1px 0px darken(@color, @percent);
    background-color: @color;
    .box-shadow(0px, 6px, 0px, darken(@color, @percent));
    &:hover {
      border: 0;
      background-color: lighten(@color, 5%) !important;
      .box-shadow(0px, 4px, 0px, darken(@color, @percent));
    }
    &:active {
      .box-shadow(inset, 0px, 3px, 0px, darken(@color, @percent));
    }
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
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
 --}}

 <html>
    <head>
        <title>Corona Cases by countries</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
        <script src="js/papaparse.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
        <script src="js/coronachart.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="css/main.css">
        <style>
            .box{
                padding: 2rem 1rem;
            margin-bottom: 2rem;
                background-color: #e9ecef;
                border-radius: .3rem;

            }
        </style>

    </head>
    <body>
        {{-- @if (Route::has('login'))
                <div class="container">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <!-- <a href="{{ route('login') }}">Login</a> -->
                        <button class = "btn1 btn-lg btn-success" onclick = "location.href = '{{ route('login') }}'">Login</button>


                        @if (Route::has('register'))
                            <!-- <a href="{{ route('register') }}">Register</a> -->
                        <button class = "btn1 btn-lg btn-success" onclick = "location.href = '{{ route('register') }}'">Register</button>

                        @endif
                    @endauth
                </div>
            @endif
            <a href="{{ route('regR') }}">Ask Fund</a> <br>
            <a href="{{ route('regD') }}">Register as Donate</a>
         --}}
        <div class = "container">
        <div class="box">
                <h1>COVID FUND RAISER</h1>
                <h3>People need your help!</h3>
                 <p>As shown in the graph, the corona virus cases are rising everyday. With the economy so hard struck, there are far more less privileged people who need your help. Please Donate.</p>
        </div>


        <header class="navbar">
            <div>
            <!-- <a class="navbar-brand" href="#">Covid19 Chart</a> -->
            <!-- <a href="{{ route('fundReceive') }}">Ask Fund</a> -->
            <button class = "btn1 btn-lg btn-primary" onclick = "location.href = '{{ route('regD') }}'">Ask fund</button>
            <!-- <a href="{{ route('registerAsDonor') }}">Donate</a> -->
            <button class = "btn1 btn-lg btn-primary" onclick = "location.href = '{{ route('regR') }}'">Donate</button>
            <button class = "btn1 btn-lg btn-success" onclick = "location.href = '{{ route('login') }}'">Login</button>
            </div>
            <div>
            <input id="logarithmic-toggle" type="checkbox" data-toggle="toggle">
            <select id="country-select" class="selectpicker" data-live-search="true" title="Choose a Country..." data-max-options="5">
            </div>
            </select>
        </header>

        <div class="container">
        </div>

        <div class="chart-container">
            <canvas id="coronaChart"></canvas>
        </div>
        </div>

    </body>
</html>


