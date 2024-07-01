<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <title>Web Design Mastery | WDM&Co</title>
  </head>
  <body>
    @include('nav')


<main class="containerP">
        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img src="{{ $specifiqueHotel->image_url }}" alt="">
        </div>


          <!-- Right Column -->
          <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
              <h1>{{ $specifiqueHotel->name }}</h1>
              <p>{{ $specifiqueHotel->description }}</p>
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
              <span>Moyenne prix : {{ $specifiqueHotel->Moyenne_prix }} MAD</span>
            </div>
            <a href="{{ route('Payment',['id' => $specifiqueHotel->id]) }}" class="cart-btn">Book Now</a>
        
          </div>
      </main>











    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


