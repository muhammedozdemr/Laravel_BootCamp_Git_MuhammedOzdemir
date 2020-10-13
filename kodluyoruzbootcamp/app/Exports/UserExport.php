<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('products')
        	->join('users','users.id','products.created_by')
            ->select('users.name as uname','users.email','products.name','products.price')
            ->where('is_approve','=',1)
            ->get();
    }
}
