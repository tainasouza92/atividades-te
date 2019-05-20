<h1>Formulário de Edição de Atividades (Editando Mensagem nº{{$messages->id}})</h1>
<hr>

<form action="/messages/{{$messages->id}}" method="post"> 
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Título:         <input type="text" name="titulo" value="{{$messages->titulo}}">     <br><br>
    Texto:      <input type="text" name="texto" value="{{$messages->texto}}">           <br><br>
    Autor:  <input type="text" name="autor" value="{{$messages->autor}}">                <br><br>
    <hr>
    <input type="submit" value="Salvar">
</form>

<!-- MENSAGEM DE ERRO -->
@if ($errors->any())
    <div class="row">
	    <div class="alert alert-danger">
		    <ul>
		      @foreach ($errors->all() as $error)
		      <li>{{ $error }}</li>
		      @endforeach
		    </ul>
		</div>
	</div>
@endif

@if (Session::has('sucess'))
    <div class="container">
        <div class="alert alert-sucess">
            {{\Session::get('sucess')}}
        </div>
    </div>
@endif