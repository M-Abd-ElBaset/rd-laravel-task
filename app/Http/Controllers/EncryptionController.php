<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class EncryptionController extends Controller
{
     public function encrypt(Request $request) {
        
        $request->validate([
            'raw_file' => 'required',
        ]);

        if ($request->hasFile('raw_file')) {
            $path = $request->raw_file->path();
            $extension = $request->raw_file->extension();
            // $file = Input::file('raw_file'); // get the file user sent via POST
            // $content = Storage::get($path);
            $content = file_get_contents($path);
            // dd($content);
            $encryptedContent = Crypt::encryptString($content);
            
            if($request->encrypted_file_name){
                $file_name = $request->encrypted_file_name;
            }else{
                $file_name = time() .  '.' . $extension;
            }

            if($request->encryption_save_location){
                file_put_contents($request->encryption_save_location . '/' . $file_name, $encryptedContent);
            }
            else{
                Storage::put('encrypted_files/' . $file_name, $encryptedContent);
            }

            return back();
        }

        return view('home');
    }

    public function decrypt(Request $request) {
        
        $request->validate([
            'encrypted_file' => 'required',
        ]);

        if ($request->hasFile('encrypted_file')) {
            $path = $request->encrypted_file->path();
            $extension = $request->encrypted_file->extension();
            $content = file_get_contents($path);
            $decryptedContent = Crypt::decryptString($content);
            
            if($request->decrypted_file_name){
                $file_name = $request->decrypted_file_name;
            }else{
                $file_name = time() .  '.' . $extension;
            }

            if($request->decryption_save_location){
                file_put_contents($request->decryption_save_location . '/' . $file_name, $decryptedContent);
            }
            else{
                Storage::put('decrypted_files/' . time() .  '.' . $extension, $decryptedContent);
            }

            return back();
        }

        return view('home');
    }
}
