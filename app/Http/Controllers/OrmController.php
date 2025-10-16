<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Center;
use App\Models\Ability;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Son;

class OrmController extends Controller
{
    public function testAllRelations(Request $request)
{
$models = [
    'son' => [Son::class, ['employee']],
    'ability' => [Ability::class, ['employees']],
    'center' => [Center::class, ['departments','employee']],
    'department' => [Department::class, ['employees','center']],
    'employee' => [Employee::class, ['sons','department','centers','abilities']]
];

$results = [];

foreach ($models as $name => [$class, $relations]) { if ($record = $class::first()) {
$record->load($relations);
$results[$name] = $record;
}
}

return response()->json([ 'success' => true,
'message' => 'Relaciones cargadas correctamente', 'total_models_tested' => count($results), 'models_found' => array_keys($results),
'data' => $results,
]);

}
}
