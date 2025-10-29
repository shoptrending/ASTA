<?php

namespace app\Contracts;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/** @untested-ignore */
abstract class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
