<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Возвращает вид страницы Portfolio
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // Переменные, которые передаются в вид
        $data = array(
            'title' => 'Portfolio',
            'brand' => 'Kogotok'
        );

        return view('portfolio', $data);
    }
}
