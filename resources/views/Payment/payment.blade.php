<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('tailwindcss-colors.css') }}">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <title>Payment Page</title>
</head>
<body>
    @include('nav')
    <!-- start: Payment -->
    <section class="payment-section">
        <div class="containerPay">
            <div class="payment-wrapper">
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon"><i class="ri-flashlight-fill"></i></div>
                        <div class="payment-header-title">Facture</div>
                        @foreach ($ho as $h )
                            <p class="payment-header-description">vou etes en train de reserver chez {{ $h->name }}.</p>


                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-type">Pro</div>
                                <div class="payment-plan-info">
                                    <div class="payment-plan-info-name">Professional Plan</div>
                                    <div class="payment-plan-info-price">{{ $h->Moyenne_prix }} MAD</div>
                                </div>
                                <div class="payment-summary-item payment-summary-total">
                                    <div class="payment-summary-price">{{ $h->Moyenne_prix}} MAD</div>
                                </div>
                        @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-right">
                    <form action="{{ route('MailSend') }}" class="payment-form" method="POST">
                        @csrf
                        <h1 class="payment-title">Payment Details</h1>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="method-1" checked>
                            <label for="method-1" class="payment-method-item">
                                <img src="{{ asset('images/visa.png') }}" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-2">
                            <label for="method-2" class="payment-method-item">
                                <img src="{{ asset('images/mastercard.png') }}" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-3">
                            <label for="method-3" class="payment-method-item">
                                <img src="{{ asset('images/paypal.png') }}" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-4" value="">
                            <label for="method-4" class="payment-method-item">
                                <img src="{{ asset('assets/surdate.jpg') }}" alt="">
                            </label>
                        </div>



                        <div class="payment-form-group" id="form-method-4">
                        <div class="payment-form-group">
                            <input type="email" placeholder=" " class="payment-form-control" id="email">
                            <label for="email" class="payment-form-label payment-form-label-required">Email Address</label>
                        </div>

                        <div class="payment-form-group">
                            <input type="phone" placeholder=" " class="payment-form-control" id="Phone_Number">
                            <label for="card-number" class="payment-form-label payment-form-label-required">Phone Number</label>
                        </div>
                        <div class="payment-form-group-flex">
                            <div class="payment-form-group">
                                <input type="date" placeholder=" " class="payment-form-control" id="Arive-Date">
                                <label for="expiry-date" class="payment-form-label payment-form-label-required">Arive Date</label>
                            </div>
                        </div>
                    </div>
                        {{--  --}}
                        <div class="payment-form-group" id="form-default">
                            <div class="payment-form-group">
                                <input type="email" placeholder=" " class="payment-form-control" id="email">
                                <label for="email" class="payment-form-label payment-form-label-required">Email Address</label>
                            </div>


                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="card-number">
                            <label for="card-number" class="payment-form-label payment-form-label-required">Card Number</label>
                        </div>
                        <div class="payment-form-group-flex">
                            <div class="payment-form-group">
                                <input type="date" placeholder=" " class="payment-form-control" id="expiry-date">
                                <label for="expiry-date" class="payment-form-label payment-form-label-required">Expiry Date</label>
                            </div>
                            <div class="payment-form-group">
                                <input type="text" placeholder=" " class="payment-form-control" id="cvv">
                                <label for="cvv" class="payment-form-label payment-form-label-required">CVV</label>
                            </div>
                        </div>
                    </div>
                        <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i> Pay</button>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                // Cache tous les formulaires spécifiques au début
                                $('#form-method-4').hide();

                                // Écoute les changements dans les boutons radio de la méthode de paiement
                                $('input[name="payment-method"]').change(function() {
                                    // Cache tous les formulaires spécifiques de méthode de paiement
                                    $('.payment-specific-form').hide();

                                    // Vérifie si la méthode de paiement sélectionnée est la méthode 4 (bank transfer)
                                    if ($(this).attr('id') === 'method-4') {
                                        $('#form-method-4').show();  // Affiche le formulaire spécifique pour la méthode 4
                                        $('#form-default').hide();
                                    } else {
                                        $('#form-default').show();  // Affiche le formulaire par défaut pour les autres méthodes
                                        $('#form-method-4').hide();
                                    }
                                });

                                // Exécute une vérification initiale au chargement de la page
                                $('input[name="payment-method"]:checked').change();
                            });
                        </script>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- end: Payment -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@include('footer')
</body>
</html>

