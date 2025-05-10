<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Installation extends Controller
{
    public function show(Request $request) {
        $page = $request->query('page', 1);
        if($page == 1) {
            return view('installation.installation_page_one');
        }
        if($page == 2) {
            return view('installation.installation_page_two');
        }
    }
    public function set_database(Request $request) {
        $data = $request->json()->all();
        $validated = $request->validate([
            'name' => 'required|string',
            'user' => 'required|string',
            'psw' => 'required|string',
            'server' => 'required|string',
        ]);
        if($validated) {
            $this->setEnv([
                'SESSION_DRIVER' => 'array',
                'DB_CONNECTION' => 'pgsql',
                'DB_HOST' =>$validated['server'],
                'DB_DATABASE' => $validated['name'],
                'DB_USERNAME' => $validated['user'],
                'DB_PASSWORD' => $validated['psw'],
                'DB_PORT' => 5432,
            ]);
            Artisan::call('config:cache');
            Artisan::call('config:clear');
            Artisan::call('migrate', ['--force' => true]);
            $this->setEnv([
                'SESSION_DRIVER' => 'database',
            ]);
            return response()->json([
                'status' => 'success'
            ]);
        }
    }
    public function set_options(Request $request) {
        $data = $request->json()->all();
        $validated = $request->validate([
            'name' => 'required|string',
            'language' => 'required|string',
            'mail' => 'required|string',
            'login' => 'required|string',
            'psw' => 'required|string',
        ]);
        if($validated) {
            $name = $validated['name'];
            $language = $validated['language'];
            $mail = $validated['mail'];
            $login = $validated['login'];
            $psw = $validated['psw'];
            $language_id = 1;
            if($language == "Русский") {
                $language_id = 1;
            }
            else if($language == "English") {
                $language_id = 2;
            }
            DB::table('language')->insert([
                ['name' => 'ru'],
                ['name' => 'en'],
            ]);
            DB::table('option')->insert([
                ['name' => $name, 'language_id' => $language_id],
            ]);
            DB::table('users')->insert([
                ['name' => $login, 'email' => $mail, 'password' => Hash::make($psw)],
            ]);
        }
        $this->setEnv([
            'INSTALLATION' => true,
        ]);
        Artisan::call('config:cache');
        Artisan::call('config:clear');
        return response()->json([
            'status' => 'success'
        ]);
    }
    protected function setEnv(array $data)
    {
        $envPath = base_path('.env');

        if (!file_exists($envPath)) {
            return;
        }

        $envContent = file_get_contents($envPath);

        foreach ($data as $key => $value) {
            $pattern = "/^{$key}=.*/m";
            $replacement = "{$key}=\"{$value}\"";

            if (preg_match($pattern, $envContent)) {
                $envContent = preg_replace($pattern, $replacement, $envContent);
            } else {
                $envContent .= "\n{$replacement}";
            }
        }

        file_put_contents($envPath, $envContent);
    }
}