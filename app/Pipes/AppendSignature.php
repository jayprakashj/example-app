<?php

namespace App\Pipes;
use Closure;

class AppendSignature
{
    public function handle($content, Closure $next)
    {
        $content .= ' ~ Laravel 12';

        return $next($content);
    }
}
