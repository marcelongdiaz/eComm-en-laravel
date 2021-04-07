<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
$total = 0;
$current_path = Route::getFacadeRoot()->current()->uri();
if(Session::has('user')){
    $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">E-Comm</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="{{$current_path=='/'?'active':''}}"><a href="/">Home</a></li>
          <li class="{{$current_path=='ordernow'?'active':''}}"><a href="ordernow">Orders</a></li>
          <li>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
          </li>
        </ul>



            <ul class="nav navbar-nav navbar-right">

            <li class="{{$current_path=='cartlist'?'active':''}}"><a href="/cartlist">Cart({{ $total }})</a></li>

            @if(Session::has('user'))
            <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Session::get('user')['name'] }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/session/logout">Logout</a></li>
                    </ul>
                </li>
            @else
            <li><a href="/login">SignIn</a></li>
            @endif
            </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
