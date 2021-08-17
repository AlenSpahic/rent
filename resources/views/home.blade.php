


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
             <form class="trip-form">
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
                        <label class="text-light">FROM</label>
                        <input type="text" name="autocomplete" id="autocomplete" class="form-control fill" placeholder="Choose Location">
                    </div>
                     <div class="form-group col-12">
                        <label class="text-light">TO</label>
                        <input type="text" name="autocomplete2" id="autocomplete2" class="form-control fill" placeholder="Choose Location">
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
                    <label class="text-light" for="cf-3">Start date</label>
                    <input type="text" id="cf-3" placeholder="Your pickup address" class="form-control datepicker px-3">
                  </div>
                  <div class="form-group col-6">
                    <label class="text-light" for="cf-4">Return date</label>
                    <input type="text" id="cf-4" placeholder="Your pickup address" class="form-control datepicker px-3">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                     @guest
                      <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @else
                      <input type="submit" value="Submit" class="btn btn-primary">
                    @endguest
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>




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

   