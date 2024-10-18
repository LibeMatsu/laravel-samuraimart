<nav class="navbar navbar-expand-md navbar-light shadow-sm samuraimart-header-container">
     <div class="container">
         <a class="navbar-brand" href="{{ url('/') }}">
             {{ config('app.name', 'Laravel') }}
         </a>
         <form class="row g-1">
             <div class="col-auto">
                 <input class="form-control samuraimart-header-search-input">
             </div>
             <div class="col-auto">
                 <button type="submit" class="btn samuraimart-header-search-button"><i class="fas fa-search samuraimart-header-search-icon"></i></button>
             </div>
         </form>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
             <span class="navbar-toggler-icon"></span>
         </button>
 
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mr-5 mt-2">
                
                 @guest
                 <!-- ログインしていない場合の処理 -->
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="{{ route('register') }}">登録</a>
                     </li>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                     </li>
                     <hr>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
                     </li>
                     <li class="nav-item mr-5">
                         <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-shopping-cart"></i></a>
                     </li>
                
                 @else
                 <!-- ログインしている場合の処理 -->
                     <li class="nav-item mr-5">
                        <!-- 
                            event.preventDefault(); ←リンクがクリックされたときにページ移動することを防ぐ
                            document.getElementById('logout-form').submit(); ←ID指定でsubmit
                        -->
                         <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             ログアウト
                         </a>
 
                        <!-- 
                            display: none;な見えないform
                            {{ route('logout') }}でログアウト
                        -->
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                     </li>
                 @endguest
             </ul>
         </div>
     </div>
 </nav>