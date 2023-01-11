<div class="header_section">
         <div class="container">
            <nav class="navbar navbar-dark bg-dark">
               <a class="logo" href="/"><img src="images/logo.png"></a>
               <div class="search_section">
                  <ul>
                     <li><a class="nav-link" href="{{ URL::to('login') }}"></a>Log In</li>
                     <li><a href="#"><img src="images/shopping-bag.png"></a></li>
                     <li><a href="#"><img src="images/search-icon.png"></a></li>
                  </ul>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExample01">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('category') }}">Category</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('produk') }}">Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('client') }}">Client</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('contact') }}">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>