<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function saveBatch(Request $request)
    {
        if($request->batch_id!=null) {
            Batch::saveBatch($request);
            return back()->with('success','Successfully Added');
        }else{
            return back()->with('warning','Please Enter Value');
        }

    }
    public function manageBatch()
    {
        return view('admin.setting.batch.manage-batch',[
            'batches' => Batch::all(),
        ]);
    }
    public function deleteBatch($id)
    {
        Batch::deleteBatch($id);
        return back();
    }
}
