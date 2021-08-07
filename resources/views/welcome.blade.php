@extends('layouts.layout')

@section('content')


    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/"><img src="/images/header_logo.png" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">MENU</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">SERVICE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CONTACT</a>
                </li>
              </ul>
            </div>
        </nav>
      </div>
    </header>


    <div class="top-section">
      <div class="container">
        <div class="row">
          <div class="col left-side">
            <img src="images/top_section.png" class="img-fluid" alt="big pizza">
          </div>
          <div class="col right-side">
            <h3>SALE 18:00-21:00 </h3>
            <h1>50%</h1>
            <h4>for the second pizza</h4>
            <button type="button" name="button">KNOW MORE</button>
          </div>
        </div>
      </div>
    </div>



    <div class="middle-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col left-side">
            <h1>go <span>25% OFF</span></h1>
            <h1>vegan</h1>
            <p>Lorem ipsum best sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
               dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
               Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            <button type="button" name="button">KNOW MORE</button>
          </div>
          <div class="col right-side">
            <img src="images/last_section.png" class="img-fluid" alt="big pizza">
          </div>
        </div>
      </div>
    </div>


    <div class="category-section">
      <div class="container">

        <div class="first-row">
          <div class="row">
            <h1>MENU PREMIUM</h1>
          </div>

          <div class="row">
            <div class="col left-side">
              <img class="img-fluid" src="images/pizza_one.png" alt="pizza category">
            </div>
            <div class="col right-side">
              <h1>FOOD CATEGORY</h1>
              <div class="meal">
                <h2>Lorem 01</h2>
                <h3>$30</h3>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <div class="meal">
                  <h2>Lorem 01</h2>
                  <h3>$30</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>

        <div class="second-row">
          <div class="row">
            <div class="col left-side">
              <img class="img-fluid" src="images/pizza_two.png" alt="pizza category">
            </div>
            <div class="col right-side">
              <h1>FOOD CATEGORY</h1>
              <div class="meal">
                <h2>Lorem 01</h2>
                <h3>$40</h3>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <div class="meal">
                  <h2>Lorem 01</h2>
                  <h3>$50</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>

        <div class="last-row">
          <div class="row">
            <div class="col left-side">
              <img class="img-fluid" src="images/pizza_three.png" alt="pizza category">
            </div>
            <div class="col right-side">
              <h1>FOOD CATEGORY</h1>
              <div class="meal">
                <h2>Lorem 01</h2>
                <h3>$35</h3>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <div class="meal">
                  <h2>Lorem 01</h2>
                  <h3>$65</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>

      </div>
   </div>


   <div class="drink-dessert-section">
     <div class="container">
       <div class="row">

         <div class="col">
           <img class="img-fluid" src="images/juice.png" alt="Juice">
           <h1>FOOD CATEGORY</h1>
           <div class="drink-menu">
             <h2>Lorem drink</h2>
             <h3>$65</h3>
           </div>
           <div class="drink-menu">
             <h2>Lorem drink</h2>
             <h3>$89</h3>
           </div>
           <div class="drink-menu">
             <h2>Lorem drink</h2>
             <h3>$45</h3>
           </div>
         </div>

         <div class="col">
           <img class="img-fluid dessert-img" src="images/dessert.png" alt="Juice">
           <h1>dessert CATEGORYY</h1>
           <div class="drink-menu">
             <h2>Lorem dessert</h2>
             <h3>$12</h3>
           </div>
           <div class="drink-menu">
             <h2>Lorem dessert</h2>
             <h3>$14</h3>
           </div>
         </div>

       </div>
     </div>
   </div>


   <div class="offer-section">
     <div class="container">
       <div class="row justify-content-center last-pizza-img">
         <div class="col-8"><img class="img-fluid" src="images/middle_section.png" alt="last section"></div>
       </div>
       <div class="row last-pizza-txt">
         <h1>2X1 <span>Monday 18hrs.</span></h1>
         <h1>PEPPERONI</h1>
       </div>
     </div>
   </div>

   <div class="order-pizza">
     <div class="container">
       <div class="row">
         <div class="col-5">
           <img class="img-fluid" src="images/order_pizza.png" alt="order pizza">
         </div>
         <div class="col-7 order-txt">
           <h1>DELIVERY SERVICE</h1>
           <h2>EVERYDAY 12:00 a 23:00</h2>
           <h3>FREE DELIVERY</h3>

           <div class="call-us">Call Nown <br/> +1 3727- 2766</div>
         </div>
       </div>
     </div>
   </div>

@endsection
