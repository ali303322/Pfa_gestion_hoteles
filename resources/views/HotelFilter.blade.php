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

    <section class="section__container popular__container">
        @foreach ($city as $c)
            <h2 class="section__header">Popular Hotels on {{ $c->city }}</h2>
        @endforeach
      <div class="popular__grid">
        @foreach ($Hotels as $item)
          <a href="{{ route('description', ['id' => $item->id]) }}">
            <div class="popular__card w-100 h-100">
              <div class="popular__image">
                <img src="{{ $item->image_url }}" alt="popular hotel" class="h-100" />
              </div>
              <div class="popular__content m-auto">
                <div class="popular__card__header">
                  <h4>{{ $item->name }}</h4>
                  <h4>{{ $item->rating }} <img src="{{ asset('assets/star.png') }}" alt="star" style="width: 20px; height: 20px" /></h4>
                </div>
                <p>{{ $item->city }}, {{ $item->country }}</p>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
