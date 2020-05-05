<HTML>
    <head>
        <meta charset="UTF-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        
        <title>
            @yield('title')
        </title>
    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">To Do's App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/todos">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/new-todos">New Task <span class="sr-only">(current)</span></a>
              </li>
          </ul> 
        </div>
      </nav>
    <div class="container">
      @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
      @endif
      @if(session()->has('update'))
        <div class="alert alert-success">
          {{ session()->get('update') }}
        </div>
      @endif
      @if(session()->has('delete'))
      <div class="alert alert-warning">
        {{ session()->get('delete') }}
      </div>
    @endif
    @if(session()->has('complete'))
    <div class="alert alert-success">
      {{ session()->get('complete') }}
    </div>
  @endif
        @yield('content')
    </div>
</body>

</HTML>