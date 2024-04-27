<h1>salamo aalaaikom {{$nom}} {{$prenom}}</h1>
@if(count($cours) > 0)
<h2>Cours : </h2>
<ul>
    @Foreach($cours as $cour)
        <li>{{$cour}}</li>
    @endforeach
</ul>
<button></button>