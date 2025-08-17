<?php

namespace App\Pipes;
use Closure;

class TrimString
{
    public function handle($content, Closure $next)
    {
        $content = trim($content);

        return $next($content);
    }
}
