<?php

namespace App\Http\Controllers\Setting;

use App\DataTables\RoleDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    public function __construct() {
        $this->middleware('can:create role')->only('create');
    }

    public function index(RoleDataTable $dataTable)
    {
        $this->authorize('read role');
        return $dataTable->render('konfigurasi.role');
    }

    public function create()
    {
        return 'create page';
    }
}