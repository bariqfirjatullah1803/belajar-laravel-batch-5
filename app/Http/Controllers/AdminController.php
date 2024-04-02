<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function chart()
    {
        return view('admin.chart');
    }

    public function table()
    {
        $data = [
            [
                "name" => "Malcolm Howard",
                "phone" => "(836) 628-7827",
                "email" => "nisl@yahoo.edu",
                "address" => "P.O. Box 599, 3762 Sapien. Rd."
            ],
            [
                "name" => "Xenos Vega",
                "phone" => "(876) 831-4623",
                "email" => "varius@protonmail.ca",
                "address" => "P.O. Box 535, 8138 Id Avenue"
            ],
            [
                "name" => "Nerea Williams",
                "phone" => "1-426-883-9210",
                "email" => "blandit.viverra.donec@protonmail.couk",
                "address" => "421-4927 Nisi Ave"
            ],
            [
                "name" => "Fitzgerald Aguirre",
                "phone" => "1-472-202-6888",
                "email" => "pede@protonmail.net",
                "address" => "4108 Tempor St."
            ],
            [
                "name" => "Pamela Stout",
                "phone" => "(171) 769-7713",
                "email" => "eu.euismod@aol.edu",
                "address" => "2171 Cum Ave"
            ],
            [
                "name" => "Stella Ball",
                "phone" => "1-356-388-7737",
                "email" => "phasellus.dolor@hotmail.ca",
                "address" => "Ap #961-6679 Aptent St."
            ],
            [
                "name" => "Mona Kirby",
                "phone" => "(505) 430-0224",
                "email" => "tristique.senectus@protonmail.com",
                "address" => "Ap #584-9660 Et Road"
            ],
            [
                "name" => "Todd Horn",
                "phone" => "(331) 116-1528",
                "email" => "quisque.porttitor@yahoo.ca",
                "address" => "982-633 Curabitur Av."
            ],
            [
                "name" => "Edward Clayton",
                "phone" => "(527) 471-9997",
                "email" => "vivamus.rhoncus@outlook.couk",
                "address" => "240-3715 Aliquam St."
            ],
            [
                "name" => "Fletcher Goodwin",
                "phone" => "1-625-245-2435",
                "email" => "est@hotmail.com",
                "address" => "786-818 Amet Av."
            ]
        ];
        return view('admin.table', compact('data'));
    }
}
