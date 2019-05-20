<h1>Lista de Atividades - Detalhes da Atividade nº {{$atividade->id}}</h1>
<hr>
<h3><b>ID:</b> {{$atividade->id}} </h3>
<h3><b>Título:</b> {{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}} </h3>
<h3><b>Descrição:</b> {{$atividade->description}} </h3>
<h3><b>Criada em:</b> {{\Carbon\Carbon::parse($atividade->created_at)->format('d/m/Y h:m')}} </h3>
<h3><b>Atualizada em:</b> {{\Carbon\Carbon::parse($atividade->updated_at)->format('d/m/Y h:m')}} </h3>
<hr>
