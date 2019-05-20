<h1>Lista de Mensagens</h1>
<hr>
@if (Session::has('sucess'))
    <div class="container">
        <div class="alert alert-sucess">
            {{\Session::get('sucess')}}
        </div>
    </div>
@endif
@foreach($messages as $m)
	<h3>{{\Carbon\Carbon::parse($m->created_at)->format('d/m/Y h:m') }}</h3>
	<p><a href="/messages/{{$m->id}}">{{$m->titulo}}</a></p>
	<p>{{$m->texto}}</p>
    <p>{{$m->autor}}</p>
	<br>
@endforeach