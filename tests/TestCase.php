<?php

namespace Tests;

use Database\Seeders\InitialUser;
use Database\Seeders\Profiles;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase; //Permite que o banco seja limpo a cada teste
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();

        $this->seed(Profiles::class);
        $this->seed(InitialUser::class);
    }
}
