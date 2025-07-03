<?php

use Illuminate\Support\Facades\Route;

// Importa todos os controllers necessários
use App\Http\Controllers\Api\MrBgl225Controller;
use App\Http\Controllers\Api\MrDmg211Controller;
use App\Http\Controllers\Api\MrDmg212Controller;
use App\Http\Controllers\Api\MrHgl14Controller;
use App\Http\Controllers\Api\MrHgl22Controller;
use App\Http\Controllers\Api\MrRgl018Controller;
use App\Http\Controllers\Api\MrRgl235Controller;
use App\Http\Controllers\Api\MrRgl303Controller;
use App\Http\Controllers\Api\MrRgl304Controller;
use App\Http\Controllers\Api\MrRgl305Controller;
use App\Http\Controllers\Api\MrRgl306Controller;
use App\Http\Controllers\Api\MrSgd00Controller;
use App\Http\Controllers\Api\MrSgd05Controller;
use App\Http\Controllers\Api\MrSgd10Controller;
use App\Http\Controllers\Api\MrSgd13Controller;
use App\Http\Controllers\Api\MrSgl12Controller;
use App\Http\Controllers\Api\MrSgl23sController;
use App\Http\Controllers\Api\MrSgl23xController;
use App\Http\Controllers\Api\MrSgl206Controller;
use App\Http\Controllers\Api\MrSgl306Controller;
use App\Http\Controllers\Api\MrSgl514Controller;
use App\Http\Controllers\Api\MrSgl636Controller;
use App\Http\Controllers\Api\MrSgr26Controller;

use App\Http\Controllers\Api\ContatoController;

// Agrupa as rotas para melhor organização. Cada linha define duas rotas:
// uma para listar todos os itens (index) e outra para buscar um item específico (show).
Route::prefix('/')->group(function () {
    Route::apiResource('mr_bgl225', MrBgl225Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_dmg211', MrDmg211Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_dmg212', MrDmg212Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_hgl14', MrHgl14Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_hgl22', MrHgl22Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_rgl018', MrRgl018Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_rgl235', MrRgl235Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_rgl303', MrRgl303Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_rgl304', MrRgl304Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_rgl305', MrRgl305Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_rgl306', MrRgl306Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgd00', MrSgd00Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgd05', MrSgd05Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgd10', MrSgd10Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgd13', MrSgd13Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgl12', MrSgl12Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgl23s', MrSgl23sController::class)->only(['index', 'show']);
    Route::apiResource('mr_sgl23x', MrSgl23xController::class)->only(['index', 'show']);
    Route::apiResource('mr_sgl206', MrSgl206Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgl306', MrSgl306Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgl514', MrSgl514Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgl636', MrSgl636Controller::class)->only(['index', 'show']);
    Route::apiResource('mr_sgr26', MrSgr26Controller::class)->only(['index', 'show']);
});

Route::post('/contato', [ContatoController::class, 'enviar']);