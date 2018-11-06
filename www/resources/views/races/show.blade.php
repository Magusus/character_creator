@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right row margin-bottom">
        <fieldset class="actions">
            <legend>{{ trans('locale.actions') }}</legend>
            <a class="margin-left" href="{{ url('/races') }}"><button class="btn btn-default">{{ trans('pagination.previous') }}</button></a>
            <a class="margin-left" href="{{ $race->id }}/edit"><button class="btn btn-default">{{ trans('locale.edit') }}</button></a>
        </fieldset>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>{{ trans('locale.race') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $race->name }}</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>{{ trans('locale.strength') }}</th>
                <th>{{ trans('locale.agility') }}</th>
                <th>{{ trans('locale.resistance') }}</th>
                <th>{{ trans('locale.mindfullness') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $race->strength }}</td>
                <td>{{ $race->agility }}</td>
                <td>{{ $race->resistance }}</td>
                <td>{{ $race->mindfullness }}</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>{{ trans('locale.intelligence') }}</th>
                <th>{{ trans('locale.wisdom') }}</th>
                <th>{{ trans('locale.intuition') }}</th>
                <th>{{ trans('locale.charisma') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $race->intelligence }}</td>
                <td>{{ $race->wisdom }}</td>
                <td>{{ $race->intuition }}</td>
                <td>{{ $race->charisma }}</td>
            </tr>
        </tbody>
    </table>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>{{ trans('locale.description') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><p>{{ $race->description }}</p></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection