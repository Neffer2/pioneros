<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithSkipDuplicates;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;

class DataImport implements ToModel, SkipsEmptyRows, WithSkipDuplicates, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        try {
            Validator::make($row, [
                'fecha_registro' => 'required|string',
                'kpi' => 'required|string',
                'agente_comercial' => 'required|string',
                'asesor' => 'required|string',
                'pdv' => 'required|string',
                'referencia' => 'required|string',
                'presentacion' => 'required|string',
                'galonaje' => 'required|string',
                'cantidad' => 'required|string',
                'valor_unitario' => 'required|string',
            ])->validate();

            return new Data([
                'fecha_registro'    => $row['fecha_registro'],
                'kpi'               => $row['kpi'],
                'agente_comercial'  => $row['agente_comercial'],
                'asesor'            => $row['asesor'],
                'pdv'               => $row['pdv'],
                'referencia'        => $row['referencia'],
                'presentacion'      => $row['presentacion'],
                'galonaje'          => $row['galonaje'],
                'cantidad'          => $row['cantidad'],
                'valor_unitario'    => $row['valor_unitario'],
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Personaliza los mensajes de error
            $customErrors = [];
            foreach ($e->errors() as $key => $messages) {
                preg_match('/\d+/', $key, $matches);
                $rowIndex = isset($matches[0]) ? $matches[0] + 2 : 'desconocida';
                $field = explode('.', $key)[1] ?? 'campo';

                foreach ($messages as $message) {
                    $customErrors[] = str_replace($key, "$field de la fila $rowIndex", $message);
                }

                session()->flash('import_error', $customErrors);
            }
        }
    }
}
