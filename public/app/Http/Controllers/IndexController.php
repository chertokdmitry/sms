<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Message;

class IndexController extends Controller
{
    public $navStatus;

    public function index()
    {
        $this->navStatus = ['active', ''];
        $view = view('index', ['navStatus' => $this->navStatus])->render();

        return (new Response($view));
    }

    public function show(Request $request)
    {
        $translit = $this->translit($request->input('sms'));
        echo $translit;
    }

    public function save(Request $request)
    {
        $item = new Message;
        $item->message = $request->input('sms');
        $item->phone = $request->input('phone');
        $item->amount = $request->input('amount');
        $item->save();

        echo "Сообщение отправлено";
    }

    public function translit($str) {
        $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С',
            'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е',
            'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш',
            'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', '«', '»', '–', '—', '№', '`');
        $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'Yo', 'Zh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S',
            'T', 'U', 'F', 'H', 'Ts', 'Ch', 'Sh', 'Sch', '\'', 'I', '\'', 'E', 'U', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e',
            'yo', 'zh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'ts', 'ch', 'sh',
            'sch', '\'', 'i', '\'', 'e', 'u', 'ya', '"', '"', '-', '-', '#', '\'');

        return str_replace($rus, $lat, $str);
    }
}
