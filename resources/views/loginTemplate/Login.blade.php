. Formulaire HTML de Réservation :
<!DOCTYPE html>
<html>
<head>
    <title>Réservation d'Hôtel</title>
</head>
<body>
    <h2>Formulaire de Réservation d'Hôtel</h2>
    <form id="hotelForm">
        <label for="name">Nom:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="checkin">Date d'arrivée:</label><br>
        <input type="date" id="checkin" name="checkin"><br>
        <label for="checkout">Date de départ:</label><br>
        <input type="date" id="checkout" name="checkout"><br>
        <button type="button" onclick="submitReservation()">Réserver</button>
    </form>
    <script src="app.js"></script>
</body>
</html>
