<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\RecoverPassword;
use App\Models\debtors;
use App\Models\recoveries as ModelsRecoveries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Recoveries extends Controller
{
    public function recoverPassword(Request $request)
    {




        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'data' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $type = $request->type;
        $data = $request->data;

        $debtor = null;

        if ($type == 'cel') {
            $debtor = debtors::where('phone', $data)->first();
        } else if ($type == 'email') {
            $debtor = debtors::where('email', $data)->first();
        }

        if (!$debtor) {

            ModelsRecoveries::create([
                'type' => $type,
                'data' => $data,
                'status' => 'desconocido',
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'No se encontro el usuario, pronto un administrador lo contactara',
            ], 404);
        }

        if ($type == 'cel') {

            if ($debtor->email) {
                Mail::to($debtor->email)->send(new RecoverPassword($debtor));
                ModelsRecoveries::create([
                    'debtor_id' => $debtor->id,
                    'type' => $type,
                    'data' => $data,
                    'status' => 'enviado',
                ]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Se ha enviado un correo de recuperación',
                ], 200);
            } else {
                ModelsRecoveries::create([
                    'debtor_id' => $debtor->id,
                    'type' => $type,
                    'data' => $data,
                    'status' => 'pendiente',
                ]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'pronto un administrador lo contactara',
                ], 200);
            }
        } else if ($type == 'email') {
            Mail::to($debtor->email)->send(new RecoverPassword($debtor));

            ModelsRecoveries::create([
                'debtor_id' => $debtor->id,
                'type' => $type,
                'data' => $data,
                'status' => 'enviado',
            ], 200);

            return response()->json([
                'status' => 'success',
                'message' => 'Se ha enviado un correo de recuperación',
            ], 200);
        }
    }
}
