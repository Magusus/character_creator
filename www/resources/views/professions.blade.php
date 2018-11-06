@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right row margin-bottom">
        <a href="professions/create"><button class="btn btn-action">{{ trans('locale.newProfession') }}</button></a>
    </div>
    
    <table class="table table-hover table-striped margin-top">
        <thead>
            <tr>
                <th>{{ trans('locale.name') }}</th>
                <th>{{ trans('locale.stats') }}</th>
                <th>{{ trans('locale.description') }}</th>
                <th>{{ trans('locale.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professions as $profession)
                <tr>
                    <td>{{ $profession->name }}</td>
                    <td>
                        {{ $profession->strength }}/{{ $profession->agility }}/{{ $profession->resistance }}
                        /{{ $profession->mindfullness }}/{{ $profession->intelligence }}/{{ $profession->wisdom }}
                        /{{ $profession->intuition }}/{{ $profession->charisma }}
                    </td>
                    <td>{{ $profession->description }}</td>
                    <td>
                        <a href="professions/{{ $profession->id }}">
                            <img class="icon" src="{{ asset('images/personIcon.png') }}">
                        </a>
                        <a href="professions/{{ $profession->id }}/edit">
                            <img class="icon" src="{{ asset('images/editIcon.png') }}">
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
