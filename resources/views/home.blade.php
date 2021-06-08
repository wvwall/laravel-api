<!DOCTYPE html>
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
            ul {
                list-style: none;
            }
        </style>
    </head>
    <body>
    
            <div class="content">
                <div class="title m-b-md">
                    API-REST <small>string-random</small>
                </div> 
                <div id="root">
                    <ul v-for = 'random in randoms' :key='random.id'>
                        <li><small>@{{random.id}}</small></li>
                        <li><h1> @{{random.title}} </h1></li>
                        <li><p>@{{random.paragrafo}}</p></li>
                    </ul>
                </div>
            </div>
            


        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
        <script src='https://cdn.jsdelivr.net/npm/vue'></script>
        <script src="{{ asset('js/vue.js') }}"></script>
    </body>
</html>
