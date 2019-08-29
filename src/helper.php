<?php
\think\facade\Route::any( 'doc$', function () {
    return redirect( '/doc/document?name=explain' );
} );
\think\facade\Route::get( 'doc/assets', "\\ric\\apidoc\\Controller@assets", [ 'deny_ext' => 'php|.htacess' ] );
\think\facade\Route::get( 'doc/module', "\\ric\\apidoc\\Controller@module" );
\think\facade\Route::get( 'doc/action', "\\ric\\apidoc\\Controller@action" );
\think\facade\Route::get( 'doc/document', "\\ric\\apidoc\\Controller@document" );
\think\facade\Route::any( 'doc/login$', "\\ric\\apidoc\\Controller@login" );
\think\facade\Route::any( 'doc/format_params', "\\ric\\apidoc\\Controller@format_params" );