<h1>Lista de Atividades</h1>
<hr>
@foreach($atividades as $a)
	<hr>
	<h3>{{\Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/atividades/{{$a->id}}">{{$a->title}}</a></p>
	<p>{{$a->description}}</p>
	<br>
	<hr>
@endforeach

<!--Mensagem -->
@if ($errors->any())
	<hr>
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
	<hr>
@endif

<!--Mensagem -->
@if (\Session::has('success'))
	<hr>
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
	<hr>
@endif