<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    public function __construct() {
        $this->middleware('can:create role')->only('create');
    }

    public function index(Request $request)
    {
        // $this->authorize('read role');
        if(!Gate::allows('read role')) {
            abort(403, 'Tidak Memilik Akses!');
        }
        return view('setting.role.index');
    }

    public function create()
    {
        return 'create page';
    }
}