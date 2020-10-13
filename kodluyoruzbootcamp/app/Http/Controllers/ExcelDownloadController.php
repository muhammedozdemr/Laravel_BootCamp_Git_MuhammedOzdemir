<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;


class ExcelDownloadController extends Controller
{
    public function userDownload()
    {
    	return Excel::download(new UserExport, 'users.xlsx');
    	
    }
}
