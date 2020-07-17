<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
         <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


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
        <br/>
         <div class="container">
        <form action="{{url('/search')}}" method="POST" role="search">
          {{csrf_field()}}
          <div class="input-group">
            <input type="text" class="form-control" name="q" placeholder="Search for"><span class="input-group-btn">
             <button type="submit" class="btn btn-info">
         <i class="fas fa-search fa-sm"></i> Search
        </button>
            </span>
            
          </div>
        </form> 
      </div> <br/><br/> <br/><br/> <br/><br/>
      <div class="container">
        @if(isset($data))
                <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                             <th>Email</th>
                        </tr>
                    </thead>
                     <tbody>
                    @foreach($data as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table> 
                {!! $data->render() !!}
                @else{{$message}}
                @endif
            </div>   

    </body>

</html>
