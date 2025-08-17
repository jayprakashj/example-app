<?php

namespace App\Pipes;
use Closure;

class ConvertToLower
{
    public function handle($content, Closure $next)
    {
        $content = strtolower($content);

        return $next($content);
    }
}
