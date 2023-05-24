<?php

namespace Tests;

use App\Modules\Advertisement\tests\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
