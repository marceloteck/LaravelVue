<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Exceptions\RegisterValidation;

class registerController extends Controller
{

    public function Register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
            ]);
        
            if ($validator->fails()) {
                throw new ValidationException($validator);
            }
        
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return response()->json([
                'sucesso' => true, 
                'message' => 'Cadastrado com sucesso!'
            ]);
        
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();

            $nameError = $errors->first('name');
            $emailError = $errors->first('email');
            $passwordError = $errors->first('password');

            $RegisterValidation = new RegisterValidation();
            
            if ($nameError) {
                return $RegisterValidation->handleError('name');
            }
            
            if ($emailError) {
                if ($errors->has('email', 'unique')) {
                    return $RegisterValidation->handleError('email_unique');
                } elseif ($errors->has('email', 'email')) {
                    return $RegisterValidation->handleError('email_invalid');
                }
            }
            
            if ($passwordError) {
                return $RegisterValidation->handleError('password');
            }
            








            /*
            $nameError = $errors->first('name');
            $emailError = $errors->first('email');
            $passwordError = $errors->first('password');
        
            // Agora você pode exibir as mensagens de erro como desejar
        
            if ($nameError) {
                return response()->json([
                    'error' => true, 
                    'message' => 'Nome Inválido!'
                ]);
            }
        
            if ($emailError) {
                if ($errors->has('email', 'unique')) {
                    // Mensagem de erro para email já cadastrado
                    return response()->json([
                        'error' => true, 
                        'message' => 'Este E-mail já está cadastrado!'
                    ]);
                } elseif ($errors->has('email', 'email')) {
                    // Mensagem de erro para email inválido
                    return response()->json([
                        'error' => true, 
                        'message' => 'E-mail inválido!'
                    ]);
                }
            }
        
            if ($passwordError) {
                return response()->json([
                    'error' => true, 
                    'message' => 'Senha Insegura, deve ter no minimo 8 caracteres!'
                ]);
            }*/










            


            
        }
    }
}
