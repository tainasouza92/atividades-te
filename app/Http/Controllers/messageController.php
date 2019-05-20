<?php

namespace App\Http\Controllers;

use App\messages;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Response;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMessages = Messages::all();
        return view('messages.list',['messages' => $listaMessages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        
            $mensagens = array(
                'titulo.required' => 'É obrigatório um título para a mensagem',
                'texto.required' => 'É obrigatória uma descrição para a mensagem',
                'autor.required' => 'É obrigatório o cadastro do autor da mensagem',
            );
           
            $regras = array(
                'titulo' => 'required|string|max:255',
                'texto' => 'required',
                'autor' => 'required',
            );
            
            $validador = Validator::make($request->all(), $regras, $mensagens);
           {
                return redirect('mensagem/create')
                ->withErrors($validador)
                ->withInput($request->all);
            }
            
            $obj_Message = new Messages();
            $obj_Message->titulo = $request['titulo'];
            $obj_Message->texto = $request['texto'];
            $obj_Message->autor = $request['autor'];
            $obj_Message->save();
            return redirect('/messages')->with('success', 'Mensagem criada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messages = Messages::find($id);
        return view('messages.show',['messages' => $messages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj_Message = Messages::find($id);
        return view('messages.edit',['messages' => $obj_Message]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
              
            $mensagem = array(
                'titulo.required' => 'É obrigatório um título para a mensagem',
                'texto.required' => 'É obrigatória uma descrição para a mensagem',
                'autor.required' => 'É obrigatório o cadastro do autor da mensagem',
            );
  
            $regras = array(
                'titulo' => 'required|string|max:255',
                'texto' => 'required',
                'autor' => 'required',
            );
           
            $validador = Validator::make($request->all(), $regras, $mensagem);
            
            if ($validador->fails()) {
                return redirect("messages/$id/edit")
                ->withErrors($validador)
                ->withInput($request->all);
            }
            
            $obj_Mensagem = Messages::findOrFail($id);
            $obj_Mensagem->titulo = $request['titulo'];
            $obj_Mensagem->texto = $request['texto'];
            $obj_Mensagem->autor = $request['autor'];
            $obj_Mensagem->save();
            return redirect('/messages')->with('success', 'Mensagem editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(messages $messages)
    {
        //
    }
}
