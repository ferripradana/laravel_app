<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;


class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $exception){
        if ($exception instanceof ModelNotFoundException) {
            return response()->json(['error' => 'Resource not found'], 404);
        }

        if ($exception instanceof AuthenticationException) {
            return response()->json(['error' => $exception->getMessage()], 401);
        }

        if($exception instanceof \Illuminate\Validation\ValidationException){
            return response()->json(['error' => $exception->getMessage()], 400);
        }

        if($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException){
            return response()->json(['error' => $exception->getMessage()], 404);
        }

        if ($exception instanceof \Exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }


        return parent::render($request, $exception);
    }

}
