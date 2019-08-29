<?php
use think\facade\Route;

Route::any( 'doc$', function () {
    return redirect( '/doc/document?name=explain' );
} );
Route::get( 'doc/assets', "\\OkCoder\\ApiDoc\\Controller@assets", [ 'deny_ext' => 'php|.htacess' ] );
Route::get( 'doc/module', "\\OkCoder\\ApiDoc\\Controller@module" );
Route::get( 'doc/action', "\\OkCoder\\ApiDoc\\Controller@action" );
Route::get( 'doc/document', "\\OkCoder\\ApiDoc\\Controller@document" );
Route::any( 'doc/login$', "\\OkCoder\\ApiDoc\\Controller@login" );
Route::any( 'doc/format_params', "\\OkCoder\\ApiDoc\\Controller@format_params" );