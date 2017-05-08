<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Возвращает вид главной страницы
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // Переменные, которые передаются в вид
        $data = array(
            'title' => 'Kogotok',
        );

        // Если вид существует - возвращаем вид
        if(view()->exists('index')){
            return view('index', $data);
        }

        // Если вид не существует - возвращаем сообщение
        abort(404, 'Такая страница не найдена');
    }
}
