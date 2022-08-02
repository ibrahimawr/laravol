<form action="{{route ('vols.update', $avionflana->id) }}" method="post">
@csrf
@method('patch')
    <div>
        <label>CODE VOL</label>
        <input type="text" name="code_vol" value="{{$avionflana->codevol}}">
    </div>
    <div>
        <label>DEPART</label>
        <input type="date" name="date_depart"value="{{$avionflana->date_depart}}">
    </div>
    <div>
        <label>HEURE</label>
        <input type="time" name="heure_depart" value="{{$avionflana->heure_depart}}">
    <div>
        <label>DESTINATION</label>
        <input type="text" name="destination" value="{{$avionflana->destination}}">
    </div>
    <div>
        <label>NOMBRE PLACE A</label>
        <input type="number" name="nbre_placeA" value="{{$avionflana->nbre_placeA}}">
    </div>
    <div>
        <label>NOMBRE PLACE B</label>
        <input type="number" name="nbre_placeB" value="{{$avionflana->nbre_placeB}}">
    </div>
    <div>
        <label>PRIX A</label>
        <input type="number" name="prix_placeA" value="{{$avionflana->prix_placeA}}">
    </div>
    <div>
        <label>PRIX B</label>
        <input type="number" name="prix_placeB" value="{{$avionflana->prix_placeB}}">
    </div>
    
</form>