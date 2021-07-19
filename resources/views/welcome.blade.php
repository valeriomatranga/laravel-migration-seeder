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
                width: 100%;
                margin: auto;
                display: flex;
                flex-wrap: wrap;
            }

            .card{
                margin: 0.5rem;
                width: calc(100% / 4 - 18px);
                border: 1px solid gray;
                background-color: whitesmoke;
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
        <div class="content">
            @foreach ($offerts as $offert)

            <div class="card">
                <dl>
                    <h3>Name:</h3>
                    <h2>{{$offert->name}}</h2>
                    <img src="{{$offert->img}}" alt="">
                    <div>
                        <span>N.People:</span>
                        <span>{{$offert->people}}</span>
                    </div>
                    <div>
                        <span>Departure:</span>
                        <span>{{$offert->departure}}</span>
                    </div>
                    <div>
                        <span>Arrival:</span>
                        <span>{{$offert->arrival}}</span>
                    </div>
                    <div>
                        <span>Day:</span>
                        <span>{{$offert->day}}</span>
                    </div>
                    <div>
                        <span>Description:</span>
                        <p>{{$offert->description}}</p>
                    </div>
                    <div>
                        <span>Price:</span>
                        <span> € {{$offert->price}}</span>
                    </div>
                </dl>
            </div>
                
            @endforeach
        </div>
    </body>
</html>
