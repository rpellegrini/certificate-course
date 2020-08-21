<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Exception;
use Carbon\Carbon;
Use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{

    public function createCertificate ()
    {
      return view('certificate.create');
    }

    public function generateCertificate (Request $request)
    {

      $rules = [
                'nome' => ['required', 'max:50'],
                'curso' => ['required', 'max:50'],
            ];
            $messages = [
                'required' => 'Campo :attribute é obrigatório.',
                'max' => 'O campo :attribute, deverá ter no máximo :max caracteres.',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                $msgs = [];
                $errors = $validator->errors();
                foreach ($errors->all() as $message) {
                    $msgs[] = $message;
                }
                return redirect()->route('create.certificate')->withErrors($validator);
            }

      $nome = $request->nome;
      $curso = $request->curso;
      $dataConclusao = Carbon::now('America/Sao_Paulo');
      $nameFile = date('dmY', strtotime($dataConclusao))."-".$nome.".pdf";

      return \PDF::loadView('certificate.generate', compact('nome', 'curso', 'dataConclusao'))
        ->setPaper('a4', 'landscape')
        ->download($nameFile);
    }

}
