<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminFile;
use Illuminate\Http\Request;
use App\Models\AdminTemporaryFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminFileController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required']
        ]);

        $tmp_file = AdminTemporaryFile::where('folder', $request->image)->first();

        if ($validator->fails() && $tmp_file) 
        {
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();   
            return redirect('/create-officer')->withErrors($validator)->withInput(); 
        }
        elseif ($validator->fails())
        {
            return redirect('/create-officer')->withErrors($validator)->withInput(); 
        }

        if($tmp_file)
        {
            Storage::copy('posts/tmp/' . $tmp_file->folder . '/' . $tmp_file->file, 'posts/' . $tmp_file->folder . '/' . $tmp_file->file);
            
            AdminFile::create([
                'name' => 'test_image',
                'image' => $tmp_file->folder . '/' . $tmp_file->file
            ]);
            Storage::deleteDirectory('posts/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return "Done";
        }

        return "WithOut image";
    }


    public function tmpUpload(Request $request, Admin $admin)
    {
        
        if($request->hasFile('picture'))
        {
            $picture = $request->file('picture');
            $file_name = $picture->getClientOriginalName();
            $folder = uniqid('admin_files', true);
            $picture->storeAs('admin_files/tmp/' . $folder, $file_name);
            AdminTemporaryFile::create([
                'admin_id' => $admin->id,
                'folder' => $folder,
                'file' => $file_name
            ]);
            return $folder;    
        }
        return 'without picture';
    }
    public function tmpDelete(Admin $admin)
    {
        $tmp_file = AdminTemporaryFile::where('admin_id', $admin->id)->first();
        if($tmp_file)
        {
            Storage::deleteDirectory('admin_files/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            return response('');
        }
    }
}
