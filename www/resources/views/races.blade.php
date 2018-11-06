@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right row margin-bottom">
        <a href="races/create"><button class="btn btn-action">{{ trans('locale.newRace') }}</button></a>
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
            @foreach($races as $race)
                <tr>
                    <td>{{ $race->name }}</td>
                    <td>
                        {{ $race->strength }}/{{ $race->agility }}/{{ $race->resistance }}
                        /{{ $race->mindfullness }}/{{ $race->intelligence }}/{{ $race->wisdom }}
                        /{{ $race->intuition }}/{{ $race->charisma }}
                    </td>
                    <td>{{ $race->description }}</td>
                    <td>
                        <a href="races/{{ $race->id }}">
                            <img class="icon" src="{{ asset('images/personIcon.png') }}">
                        </a>
                        <a href="races/{{ $race->id }}/edit">
                            <img class="icon" src="{{ asset('images/editIcon.png') }}">
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
