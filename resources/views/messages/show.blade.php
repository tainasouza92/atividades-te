<h1>Detalhes da Mensagem {{$messages->id}}</h1>
<hr>
<h3><b>ID: </b>{{$messages->id}}</h3>
<h3><b>Título: </b>{{($messages->titulo) }}</h3>
<h3><b>Texto: </b>{{($messages->texto)}}</h3>
<h3><b>Autor: </b>{{($messages->autor)}}</h3>
<h3><b>Criada em: </b>{{\Carbon\Carbon::parse($messages->created_at)->format('d/m/Y h:m') }}</h3>
<h3><b>Atualizada em: </b>{{\Carbon\Carbon::parse($messages->updated_at)->format('d/m/Y h:m') }}</h3>