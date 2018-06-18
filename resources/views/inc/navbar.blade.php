<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/Todo">Ayoub</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/Todo') ? 'active' : '') }}">
                    <a href="/Todo">Home</a>
                </li>
                <li class="{{ (Request::is('todos/create') ? 'active' : '') }}">
                    <a href="Todo/create">Create todo</a>
                </li>
                
            </ul>

        </nav>