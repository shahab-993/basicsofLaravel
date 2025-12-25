<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class CustomExceptionHandler extends ExceptionHandler {

    public function render( $request, Throwable $exception ) {

        if ( config( 'app.env' ) === 'production' ) {
            return response()->view( 'customerrors.productionerrors',
            [ 'exception' => $exception ] );
        }

        return response()->view( 'customerrors.localErrors',
        [ 'exception' => $exception ] );

    }

}