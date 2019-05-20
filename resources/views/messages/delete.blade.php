<h1>Formulário para Excluir Mensagem</h1>
<hr>

<form action="/messages/{{$messages->id}}" method="post"> 
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <p>Você deseja realmente excluir a mensagem{{$messages->id}}?</p>
    <hr>
    <input type="submit" value="Deletar">
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