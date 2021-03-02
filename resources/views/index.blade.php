<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    a {
      color: red;
    }
    a:hover {
      text-decoration: underline;
    }
    p {
      color: grey;
      font-size: 20px;
    }
    .flex {
      background: white;
      box-shadow: none;
    }
    .flex a {
      color: #6B7280;
      font-size: 17px;
      padding-right: 60px;
    }
    form input[type="text"]:focus:not([readonly]) {
      border: 0.5px solid #9CA3AF;
      -webkit-box-shadow: 0 0.5px 0 0 #a0aec0;
      box-shadow: 0 0.5px 0 0 #a0aec0;
      background-color: #6B7280;
    }
    form input[type="text"]:not(.browser-default) {
      background-color: #6B7280;
      border: none;
      border-radius: 4px;
      outline: none;
      height: 40px;
      width: 100%;
      font-size: 1rem;
      color: white;
      margin: 50px 0px 50px 200px;
      padding-left: 10px;
      -webkit-box-shadow: none;
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }
  </style>
</head>

<body>
  <div class="section container">
    <div class="row">
      <form class="col s12 " method="get" action="{{ route('index')}}" role="search">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Name,email,phone" id="search_term" name="search_term" type="text" class="validate">
            <a href="/users">Clear query</a>
          </div>
        </div>
      </form>

      @if (count($users) > 0)
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>email</th>
            <th>telephone</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>
              {{$user->id}}
            </td>
            <td>
              {{$user->first_name}}
            </td>

            <td>
              {{$user->last_name}}
            </td>

            <td>
              {{$user->email}}
            </td>
            <td>
              {{$user->telephone}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="center nav">
        <!-- {{ $users->links()}} -->
        {!!$users->render()!!}
      </div>
      @else
      <div class="center">
        <p>I don't have any records!</p>
      </div>
      @endif


    </div>
    <br>
</body>

</html>