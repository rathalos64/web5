<?php

set_error_handler(
    function ($errno, $errstr, $errfile = null, $errline = null, $errcontext = [])
    {
        chdir(getenv("PROJECT_ROOT"));
        App\View::view("error.error", [
            "message" => "[$errno] $errstr in $errfile on line $errline",
        ]);
    }
);

set_exception_handler(
    function ($exception)
    {
        chdir(getenv("PROJECT_ROOT"));
        App\View::view("error.error", [
            "message" => $exception->getMessage(),
        ]);
    }
);