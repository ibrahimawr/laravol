<form action="{{route('vols.store')}}" method="post">
    @csrf
    <div>
        <label>CODE VOL</label>
    <input type="text" name="code_vol">
    </div>
    <div>
    <label>DEPART</label>
    <input type="date" name="date_depart">
    </div>
    <div>
    <label>HEURE</label>
    <input type="time" name="heure_depart">
    <div>
    <label>DESTINATION</label>
    <input type="text" name="destination">
    </div>
    <div>
    <label>NOMBRE PLACE A</label>
    <input type="number" name="nbre_placeA">
    </div>
    <div>
    <label>NOMBRE PLACE B</label>
    <input type="number" name="nbre_placeB">
    </div>
    <div>
    <label>PRIX A</label>
    <input type="number" name="prix_placeA">
    </div>
    <div>
    <label>PRIX B</label>
    <input type="number" name="prix_placeB">
    </div>
    <div>
        <input type="submit" value="envoyer">
    </div>
</form>