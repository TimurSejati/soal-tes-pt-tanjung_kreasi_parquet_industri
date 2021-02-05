<?php

use App\Http\Controllers\Item\ItemController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\Transaksi\TransaksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', App\Http\Controllers\HomeController::class)->name('home');

Route::prefix('items')->group(function () {
    route::get('list', [ItemController::class, 'index'])->name('item');
    route::get('create', [ItemController::class, 'create'])->name('item.create');
    route::post('create', [ItemController::class, 'store'])->name('item.store');;
});

Route::prefix('transactions')->group(function () {
    route::get('logindex', [TransaksiController::class, 'logIndex'])->name('log');
    route::get('lumberindex', [TransaksiController::class, 'lumberIndex'])->name('lumber');
    route::get('list', [TransaksiController::class, 'list'])->name('list.transaksi');
    route::post('create', [TransaksiController::class, 'store'])->name('transaksi.store');

    route::get('ajaxGetBarang', [TransaksiController::class, 'ajaxRequestBarang']);
    route::get('ajaxGetKodeMutasi', [TransaksiController::class, 'ajaxRequestKode']);
});

Route::prefix('reports')->group(function () {
    route::get('index', [ReportController::class, 'index'])->name('report');
});
