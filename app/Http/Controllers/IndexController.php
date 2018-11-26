<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Mail\Callback;
use App\Mail\post;
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
        $request->validate([
            'phone' =>  'required|numeric'
        ]);

        \Mail::send(new Callback($request->get('phone')));

//        \Mail::raw($phone, function($message) use ($mOption, $phone)
//        {
//            $message->from('taxi@taxi-bratsk-irkutsk.ru');
//            $message->to($mOption->email)->subject($phone);
//        });

        echo json_encode('ок');
    }
}
