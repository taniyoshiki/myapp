@extends('layouts.front')
@section('content')
    <div class=“container”>
        <table class=“table”>
            <tr>
                <th>名前</th>
                <th>性別</th>
                <th>趣味</th>
                <th>自己紹介</th>
            </tr>
            @foreach($profiles as $profile)
              <tr>
                  <td>{{$profile->name}}</td>
                  <td>{{$profile->gender}}</td>
                  <td>{{$profile->hobby}}</td>
                  <td>{{$profile->introduction}}</td>
              </tr>
            @endforeach
        </table>
    </div>
@endsection
