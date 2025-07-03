<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContatoSiteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'primeiro_nome' => ['required', 'string', 'max:255'],
            'ultimo_nome'   => ['required', 'string', 'max:255'],
            'email'         => ['required', 'email', 'max:255'],
            'telefone'      => ['nullable', 'string', 'max:25'], 
            'mensagem'      => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            Mail::to('seu-email-aqui@gmail.com')
                ->send(new ContatoSiteMail($validator->validated()));
            return response()->json(['message' => 'Mensagem enviada com sucesso!'], 200);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Ocorreu um erro ao enviar a mensagem.'], 500);
        }
    }
}