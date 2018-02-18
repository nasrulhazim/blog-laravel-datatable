<?php

namespace App\Http\Controllers\Datatable;

use App\Http\Controllers\Controller;
use App\User;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function __invoke()
    {
        return Datatables::of(User::query())->make(true);
    }
}
