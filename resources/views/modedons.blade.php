</br></br>
<a href="modedon/new"><button>Crée un nouveau mode de don</button></a>
</br></br>

<table>
        <tr>
            <th>nom</th>
            <th calspan="2">Actions</th>
        </tr>
        <tr>

@foreach(App\modeDon::all() as $modedons)

    <tr>
        
        <td><a href="modedon/{{$modedons->id}}">{{$modedons->nom}}</a></td>

        <td><a href="modedon/{{$modedons -> id}}"><button>Destroy</button><a></td>
        <td><a href="modedon/{{$modedons -> id}}"><button>Update</button><a></td>


       

    </tr>
@endforeach
</table>