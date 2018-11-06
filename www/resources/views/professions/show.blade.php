@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right row margin-bottom">
        <fieldset class="actions">
            <legend>{{ trans('locale.actions') }}</legend>
            <a class="margin-left" href="{{ url('/professions') }}"><button class="btn btn-action">{{ trans('pagination.previous') }}</button></a>
            <a class="margin-left" href="{{ $profession->id }}/edit"><button class="btn btn-action">{{ trans('locale.edit') }}</button></a>
        </fieldset>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>{{ trans('locale.name') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $profession->name }}</td>
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
                <td>{{ $profession->strength }}</td>
                <td>{{ $profession->agility }}</td>
                <td>{{ $profession->resistance }}</td>
                <td>{{ $profession->mindfullness }}</td>
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
                <td>{{ $profession->intelligence }}</td>
                <td>{{ $profession->wisdom }}</td>
                <td>{{ $profession->intuition }}</td>
                <td>{{ $profession->charisma }}</td>
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
                <td><p>{{ $profession->description }}</p></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection