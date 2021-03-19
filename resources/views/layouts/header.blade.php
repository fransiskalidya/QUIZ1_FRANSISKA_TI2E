
        <section class="templatemo-top-section">
            <div class="templatemo-header">
              <img class="templatemo-header-img" src="img/header.png" alt="Header">
              <h1 class="templatemo-site-name">Motor</h1>
              <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
              </div>
              <div class="templatemo-nav-container">
                <nav class="templatemo-nav">
                  <ul>
                   <li><a href="{{url('/')}}" class="{{Request::is('/')? 'active' :''}}">Home</a></li>
                   <li><a href="{{url('/products')}}" class="{{Request::is('products')? 'active' :''}}">Products</a></li>
                   <li><a href="{{url('/services')}}" class="{{Request::is('services')? 'active' :''}}">Services</a></li>
                   <li><a href="{{url('/gallery')}}" class="{{Request::is('gallery')? 'active' :''}}">Gallery</a></li>
                   <li><a href="{{url('/contact')}}" class="{{Request::is('contact')? 'active' :''}}">Contact</a></li>
                 </ul>
               </nav>
             </div>
           </div>

