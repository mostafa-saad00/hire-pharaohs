<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\AdminTemporaryFile;
use App\Models\FreelancerPicture;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class AdminFreelancerController extends Controller
{
    public function show(Freelancer $freelancer)
    {
        return $freelancer;
    }

    public function create()
    {
        return view('admin.freelancer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Freelancer::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $freelancer = Freelancer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $tmp_file = AdminTemporaryFile::where('folder', $request->picture)->first();

        if($tmp_file)
        {
            Storage::copy('admin_files/tmp/' . $tmp_file->folder . '/' . $tmp_file->file, 'freelancer/picture/' . $freelancer->id . '/' . $tmp_file->file);
            
            FreelancerPicture::create([
                'freelancer_id' => $freelancer->id,
                'folder' => $freelancer->id,
                'file' => $tmp_file->file,
            ]);
            
            Storage::deleteDirectory('admin_files/tmp/' . $tmp_file->folder);
            $tmp_file->delete();
            
            return redirect()->route('index-admin-freelancers')->with('message', 'تم اضافة فريلانسر بنجاح');
        }

        return redirect()->route('index-admin-freelancers')->with('message', 'تم اضافة فريلانسر بنجاح');

    }

    
}
