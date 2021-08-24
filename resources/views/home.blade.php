


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      @include('include.head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Alenov Rent a Car</title>

        <!-- Fonts -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
         
    <body>
      @include('include.navbar')

  
    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/car-travelling-by-sunny-road.jpg'); height: calc(100vh - 80px);">
        <div class="container" style="top:150px;">
          <div class="row align-items-center justify-content-start">
            <div>
              <h1 style="position: absolute; top: -50px;">Enjoy your privacy.</h1>
            </div>
             <form class="trip-form" method="POST" action="{{ Route('home.store') }}" id="rentForm">
              @csrf
                <div class="row align-items-center mb-4">
                  <div class="col-md-6">
                    <h3 class="m-0">Begin your trip here</h3>
                  </div>
                  <div class="col-md-6 text-md-right">
                    <span class="text-light">32</span> <span class="text-light">cars available</span></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                      <label for="from_destination" class="text-light">FROM</label>
                      <input type="text" name="from_destination" id="autocomplete" class="form-control fill" placeholder="Choose Location">
                    </div>
                    <div class="form-group col-12">
                        <label for="to_destination" class="text-light">TO</label>
                        <input type="text" name="to_destination" id="autocomplete2" class="form-control fill" placeholder="Choose Location">
                    </div>
              
                   <!--  <div class="form-group" id="latitudeArea">
                        <label>Latitude</label>
                        <input type="text" id="latitude" name="latitude" class="form-control">
                    </div> -->
              
                    <!-- <div class="form-group" id="longtitudeArea">
                        <label>Longitude</label>
                        <input type="text" name="longitude" id="longitude" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label for="start_date" class="text-light" for="">Start date</label>
                    <input type="text" id="cf-3" name="start_date" placeholder="Your pickup address" class="form-control datepicker px-3">
                  </div>
                  <div class="form-group col-6">
                    <label for="end_date" class="text-light" for="cf-4">Return date</label>
                    <input type="text" id="cf-4" name="end_date" placeholder="Your pickup address" class="form-control datepicker px-3">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3" style="width: 100%;">
                    @guest
                      <a class="btn btn-primary d-flex align-items-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @else
                      <input type="submit" value="Submit" class="btn btn-primary" form="rentForm">
                    @endguest
                  </div>
                   <div class="col-lg-9 d-flex" style="justify-content: flex-end;">
                     
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    @guest
      
    @else
      
    <div class="site-section bg-light scrollLink" id="cars">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Naša vozila</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
            <p>
              <a href="#" class="btn btn-primary custom-prev">Previous</a>
              <span class="mx-2">/</span>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>
          <div class="row">
            <div class="col-6 item-1">
              <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                <h3><a href="#">Ford Kuga</a></h3>
                <div class="rating">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>$250/</span>day</div>
                </div>
                <ul class="specs">
                  <li>
                    <span>Doors</span>
                    <span class="spec">4</span>
                  </li>
                  <li>
                    <span>Seats</span>
                    <span class="spec">5</span>
                  </li>
                  <li>
                    <span>Transmission</span>
                    <span class="spec">Automatic</span>
                  </li>
                  <li>
                    <span>Minium age</span>
                    <span class="spec">18 years</span>
                  </li>
                </ul>
                <div class="d-flex action">
                  <a href="contact.html" class="btn btn-primary">Rent Now</a>
                </div>
              </div>
            </div>
            <div class="col-6 item-1">
              <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                <h3><a href="#">Range Rover S64 Coupe</a></h3>
                <div class="rating">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>$250/</span>day</div>
                </div>
                <ul class="specs">
                  <li>
                    <span>Doors</span>
                    <span class="spec">4</span>
                  </li>
                  <li>
                    <span>Seats</span>
                    <span class="spec">5</span>
                  </li>
                  <li>
                    <span>Transmission</span>
                    <span class="spec">Automatic</span>
                  </li>
                  <li>
                    <span>Minium age</span>
                    <span class="spec">18 years</span>
                  </li>
                </ul>
                <div class="d-flex action">
                  <a href="contact.html" class="btn btn-primary">Rent Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section section-3 scrollLink" style="background-image: url('images/hero_2.jpg');" id="services">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-white">Our services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-car-1"></span>
              </span>
              <div class="service-1-contents">
                <h3>Repair</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-traffic"></span>
              </span>
              <div class="service-1-contents">
                <h3>Car Accessories</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-valet"></span>
              </span>
              <div class="service-1-contents">
                <h3>Own a Car</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container site-section mb-5 scrollLink" id="anchor3">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>How it works</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
        </div>
      </div>
      <div class="how-it-works d-flex">
        <div class="step">
          <span class="number"><span>01</span></span>
          <span class="caption">Time &amp; Place</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Car</span>
        </div>
        <div class="step">
          <span class="number"><span>03</span></span>
          <span class="caption">Details</span>
        </div>
        <div class="step">
          <span class="number"><span>04</span></span>
          <span class="caption">Checkout</span>
        </div>
        <div class="step">
          <span class="number"><span>05</span></span>
          <span class="caption">Done</span>
        </div>

      </div>
    </div>
    
    
    <div class="site-section bg-light scrollLink" id="anchor4">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2>Customer Testimony</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Mike Fisher</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Jean Stanley</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Katie Rose</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-white scrollLink" id="blog">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2>Our Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/post_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html"></a></h2>
                <h5><a href="single.html"></a></h>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">The best car rent in the entire planet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">The best car rent in the entire planet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


@endguest


    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        $( "a.scrollLink" ).click(function( event ) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
        });
      });
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


{{-- javascript code --}}
  <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places" ></script>
    <script>
       $(document).ready(function() {
            $("#lat_area").addClass("d-none");
            $("#long_area").addClass("d-none");
       });
    </script>
    <script>
       google.maps.event.addDomListener(window, 'load', initialize);

       function initialize() {
           var input = document.getElementById('autocomplete');
           var autocomplete = new google.maps.places.Autocomplete(input);
           autocomplete.addListener('place_changed', function() {
               var place = autocomplete.getPlace();
               $('#latitude').val(place.geometry['location'].lat());
               $('#longitude').val(place.geometry['location'].lng());
               $("#lat_area").removeClass("d-none");
               $("#long_area").removeClass("d-none");
           });
       }
    </script>
    <script>
       google.maps.event.addDomListener(window, 'load', initialize);

       function initialize() {
           var input = document.getElementById('autocomplete2');
           var autocomplete = new google.maps.places.Autocomplete(input);
           autocomplete.addListener('place_changed', function() {
               var place = autocomplete.getPlace();
               $('#latitude').val(place.geometry['location'].lat());
               $('#longitude').val(place.geometry['location'].lng());
               $("#lat_area").removeClass("d-none");
               $("#long_area").removeClass("d-none");
           });
       }
    </script>
   


   
    </body>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>

   