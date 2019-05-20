<h1>Formulário de Cadastro de Atividades</h1>
<hr>

<form action="/atividades" method="post"> 
    {{ csrf_field() }}
    Título:         <input type="text" name="title">                 <br><br>
    Descrição:      <input type="text" name="description">           <br><br>
    Agendado para:  <input type="datetime-local" name="scheduledto"> <br><br>
    <hr>
    <input type="submit" value="Salvar">
</form>


<!--Mensagem -->
@if ($errors->any())
    <div class="container">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif