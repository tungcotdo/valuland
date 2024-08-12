<?php
// Copyright (c) Microsoft Corporation.
// Licensed under the MIT License.

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use PhpParser\Node\FunctionLike;
use DB;
use Illuminate\Http\Request;
use Redirect;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
