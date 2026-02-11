<?php

use Illuminate\Support\Facades\Vite;

if ( ! function_exists( 'image' ) ) {
    function image( string $path ): string {
        return Vite::asset( 'resources/images/' . ltrim( $path, '/' ) );
    }
}
