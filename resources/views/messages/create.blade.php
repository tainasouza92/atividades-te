<h1>Formulário de Cadastro de Mensagens</h1>
<hr>

<form action="/messages" method="POST"> 
    {{ csrf_field() }}
    Título:    <input type="text" name="titulo">          <br><br>
    Texto:     <input type="text" name="texto">           <br><br>
    Autor:     <input type="text" name="autor">           <br><br>
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

@if (Session::has('sucess'))
    <div class="container">
        <div class="alert alert-sucess">
            {{\Session::get('sucess')}}
        </div>
    </div>
@endif