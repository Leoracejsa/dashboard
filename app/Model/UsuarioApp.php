<?php

namespace App\Model;

class UsuarioApp extends BaseModel
{
    public static function all()
    {
        return static::makeReturn(
            static::getClientApi()->request('GET', 'users')
        );
    }

    public static function find($universityId)
    {
        return static::makeReturn(
            static::getClientApi()->request('GET', "users", [
                'query' => ['userUniversityId' => $universityId]
            ])
        )->first();
    }
}
