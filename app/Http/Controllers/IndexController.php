<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Dates;
use App\Models\Option;
use App\Models\Seos;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $mSeos = Seos::all()->first();
        $mOption = Option::all()->first();
        $mDates = Dates::all()->first();

        return view('index', [

            'title'         => isset($mSeos->title) ? $mSeos->title : 'Заголовок по умолчанию',
            'description'   => isset($mSeos->description) ? $mSeos->description : 'Описание по умолчанию',
            'keywords'      => isset($mSeos->keywords) ? $mSeos->keywords : 'Ключи по умолчанию',
            'h1'            => isset($mSeos->h1) ? $mSeos->h1 : 'Такси Иркутск-Братск-Иркутск',
            'route_title'   => isset($mSeos->route_title) ? $mSeos->route_title : 'Маршруты и остановки',
            'advantages_title'  => isset($mSeos->advantages_title) ? $mSeos->advantages_title : 'Преимущества',
            'gallery_title'     => isset($mSeos->gallery_title) ? $mSeos->gallery_title : 'Фотогалерея микроавтобуса',

            'phone'         => isset($mOption->phone) ? $mOption->phone : '',
            'price_one'     => isset($mOption->price_one) ? $mOption->price_one : '',
            'price_all'     => isset($mOption->price_all) ? $mOption->price_all : '',
            'text'          => isset($mOption->text) ? $mOption->text : '',

            'city'      => isset($mDates->city) ? $mDates->city : '',
            'date'      => isset($mDates->date) ? $mDates->date : '',
            'time'      => isset($mDates->time) ? date('H:i', strtotime($mDates->time)) : '',
            'places'    => isset($mDates->places) ? $mDates->places : '',
        ]);
    }

    public function post(Request $request)
    {
        $mOption = Option::findOrFail(1);
        $phone = $request->get('phone');

        $request->validate([
            'phone' =>  'required|numeric'
        ]);

        \Mail::raw($phone, function($message) use ($mOption, $phone)
        {
            $message->from('no-reply@taxi-bratsk-irkutsk.ru', 'Сообщение с сайта');
            $message->to($mOption->email);
            $message->subject($phone);
        });

        echo json_encode('ок');
    }
}
