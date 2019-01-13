@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="public/js/sms.js"></script>
@section('content')
    <div class="container" id="container">
        <main role="main" style="width: 600px; margin-top:20px;">
            <h1 class="h3 mb-3 font-weight-normal">Отправить сообщение</h1>
            <form action="/" method="GET">
                @csrf
                <label for="phone">Телефон:</label>
                <input type="text"
                       class="form-control"
                       id="phone"
                       name="phone">
                <br><br>
                <label for="sms">Сообщение:</label>
                <textarea class="form-control" id="sms" name="sms" rows="5"></textarea>
                <br><br>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="latin" name="latin" value="latin">
                    <label class="custom-control-label" for="latin">Перевести в латиницу</label>
                    <div id="log" style="display: none">
                        &nbsp
                    </div>
                    <div id="test">
                        &nbsp
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col">
                        Введено символов:
                        <div id="counter">
                            &nbsp
                        </div>
                    </div>
                    <div class="col">
                        Количество SMS:
                        <div id="smsCounter">
                            &nbsp
                        </div>
                    </div>
                </div>
                <br><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
            </form>
        </main>
    </div>
@endsection
