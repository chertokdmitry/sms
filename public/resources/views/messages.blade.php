@extends('layouts.app')

@section('content')
    <div class="container" id="container">
        <main role="main" style="width: 600px; margin-top:20px;">
            <br><br>
            <h2>Сообщения</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Телефон</th>
                        <th>Сообщение</th>
                        <th>Кол-во SMS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message['id'] }}</td>
                            <td>{{ $message['phone'] }}</td>
                            <td>{{ $message['message'] }}</td>
                            <td>{{ $message['amount'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
