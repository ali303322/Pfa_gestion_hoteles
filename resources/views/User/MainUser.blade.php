@extends('User.UserMaster')



@section('userContent')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <style>
    .popular__image{
        height: 66%;
    }

    .popular__content{
        height: 34%;
    }
</style>
        <header class="section__container header__container">
        <div class="header__image__container">
            <div class="header__content">
            <h1>Enjoy Your Dream Vacation</h1>
            <p>Book Hotels, Flights and stay packages at lowest price.</p>
            </div>
            <div class="booking__container">
                <form method="POST" action="{{ route('Hotel.filter') }}" id="Sform">
                    @csrf
                    <div class="form__group">
                    <div class="input__group">
                        <select name="city" id="">
                            @foreach ($city as $c)
                                <option value="{{ $c->city }}" >{{ $c->city }}</option>
                            @endforeach
                        </select>
                        <label>Location</label>
                    </div>
                    <p>Where are you going?</p>
                    </div>
                    <div class="form__group">
                    <div class="input__group">
                        <input type="date" name="dateArrive"/>
                        <label>Check In</label>
                    </div>
                    <p>Add date</p>
                    </div>
                    <div class="form__group">
                    <div class="input__group">
                        <input type="date" name="dateSort" />
                        <label>Check Out</label>
                    </div>
                    <p>Add date</p>
                    </div>
                    <div class="form__group">
                    <div class="input__group">
                        <input type="number" name="Nguest"/>
                        <label>Guests</label>
                    </div>
                    <p>Add guests</p>
                    </div>
                </form>
                <button class="btn" type="submit" form="Sform"><i class="ri-search-line"></i></button>
            </div>
        </div>
        </header>

        <section class="section__container popular__container">
        <h2 class="section__header">Popular Hotels</h2>
        <div class="popular__grid">
            @foreach ($hotels as $item)
                <a href="{{ route('description', ['id'=> $item->id]) }}">
                    <div class="popular__card w-100 h-100">
                        <div class="popular__image">
                            <img src={{ $item->image_url }} alt="popular hotel" class="h-100"/>
                        </div>
                        <div class="popular__content m-auto">
                            <div class="popular__card__header">
                            <h4>{{ $item->name }}</h4>
                            <h4>{{ $item->rating }}    <img src="assets/star.png" alt="" style="width: 20px ; height : 20px"></h4>
                            </div>
                            <div class="popular__card__header2">
                            <p>{{ $item->city}} , {{ $item->country  }}</p>
                            </div>
                        </div>
                        </div>
                </a>
            @endforeach

        </div>
        </section>

        <section class="client">
        <div class="section__container client__container">
            <h2 class="section__header">What our client say</h2>
            <div class="client__grid">
            <div class="client__card">
                <img src="assets/client-1.jpg" alt="client" />
                <p>
                The booking process was seamless, and the confirmation was
                instant. I highly recommend WDM&Co for hassle-free hotel bookings.
                </p>
            </div>
            <div class="client__card">
                <img src="assets/client-2.jpg" alt="client" />
                <p>
                The website provided detailed information about hotel, including
                amenities, photos, which helped me make an informed decision.
                </p>
            </div>
            <div class="client__card">
                <img src="assets/client-3.jpg" alt="client" />
                <p>
                I was able to book a room within minutes, and the hotel exceeded
                my expectations. I appreciate WDM&Co's efficiency and reliability.
                </p>
            </div>
        </div>
      </div>
    </section>

    <section class="section__container">
      <div class="reward__container">
        <p>Benefits from our offers</p>
        <h4>Join VIP Team </h4>
        <button class="reward__btn">Join Rewards</button>
      </div>
    </section>
@endsection
