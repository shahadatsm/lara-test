<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .order_list {
               font-weight: normal;
               font-size: 16px;
            }
            .order_list th{
                padding: 5px;
                font-weight: bold;

            }
            .order_list td{
                padding: 5px;
                
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    

                    <h1>Order Details</h1>
                    <table class="order_list">
                       <tr>
                         <th>ID</th>
                         <th>Product Name</th>
                         <th>Quantity</th>
                         <th>Price</th>
                         <th>Total</th>
                       </tr> 
                     @foreach($orders as $key => $value)
                         <?php $total=0; ?>       
                        @foreach($value->orderDetails as $k => $v)
                         @php
$total = 0;
@endphp
                       <tr>
                        <td> {{ $v->id }}</td>
                        <td> {{ $v->product->product_name }}</td>
                        <td> {{ $v->product->quantity }}</td>
                        <td> {{ $v->product->price }}</td>
                        <td> {{ $v->product->quantity*$v->product->price }}</td>
                          
                       
                      </tr>  
                       @endforeach  
                    @endforeach  
                   </table>

</div>
                </div>

                 
            </div>
        </div>
    </body>
</html>
