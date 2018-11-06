@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right row margin-bottom">
        <a href="characters/create"><button class="btn btn-action">{{ trans('locale.newCharacter') }}</button></a>
    </div>
    
    <table class="table table-hover table-striped margin-top">
        <thead>
            <tr>
                <th>{{ trans('locale.name') }}</th>
                <th>{{ trans('locale.race') }}</th>
                <th>{{ trans('locale.profession') }}</th>
                <th>{{ trans('locale.level') }}</th>
                <th>{{ trans('locale.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->race }}</td>
                    <td>{{ $character->profession }}</td>
                    <td>{{ $character->level }}</td>
                    <td>
                        <a href="characters/{{ $character->id }}">
                            <img class="icon" src="{{ asset('images/personIcon.png') }}">
                        </a>
<!--                            <a href="">
                            <img class="icon" src="{{ asset('images/equipIcon.png') }}">
                        </a>-->
<!--                            <a href="">
                            <img class="icon" src="{{ asset('images/skillIcon.png') }}">
                        </a>-->
                        <a href="characters/{{ $character->id }}/edit">
                            <img class="icon" src="{{ asset('images/editIcon.png') }}">
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
