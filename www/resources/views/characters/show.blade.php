@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right row margin-bottom">
        <fieldset class="actions">
            <legend class="center">{{ trans('locale.actions') }}</legend>
            <a class="margin-left" href="{{ url('/') }}"><button class="btn btn-action">{{ trans('pagination.previous') }}</button></a>
            <a class="margin-left" href="{{ $character->id }}/edit"><button class="btn btn-action">{{ trans('locale.edit') }}</button></a>
        </fieldset>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>{{ trans('locale.name') }}</th>
                <th>{{ trans('locale.race') }}</th>
                <th>{{ trans('locale.profession') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $character->name }}</td>
                <td>{{ $character->race }}</td>
                <td>{{ $character->profession }}</td>
            </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col-md-6">
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
                        <td>{{ $character->strength }}</td>
                        <td>{{ $character->agility }}</td>
                        <td>{{ $character->resistance }}</td>
                        <td>{{ $character->mindfullness }}</td>
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
                        <td>{{ $character->intelligence }}</td>
                        <td>{{ $character->wisdom }}</td>
                        <td>{{ $character->intuition }}</td>
                        <td>{{ $character->charisma }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>{{ trans('locale.level') }}</th>
                        <th>{{ trans('locale.exp') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $character->level }}</td>
                        <td>{{ $character->experience_points }}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>{{ trans('locale.health') }}</th>
                        <th>{{ trans('locale.stamina') }}</th>
                        <th>{{ trans('locale.mana') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $character->health_points }}</td>
                        <td>{{ $character->stamina_points }}</td>
                        <td>{{ $character->mana_points}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>{{ trans('locale.age') }}</th>
                <th>{{ trans('locale.height') }}</th>
                <th>{{ trans('locale.weight') }}</th>
                <th>{{ trans('locale.eyes') }}</th>
                <th>{{ trans('locale.hair') }}</th>
                <th>{{ trans('locale.body') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $character->age }}</td>
                <td>{{ $character->height }}</td>
                <td>{{ $character->weight }}</td>
                <td>{{ $character->eye_color }}</td>
                <td>{{ $character->hair_color }}</td>
                <td>{{ $character->body_color }}</td>
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
                <td><p>{{ $character->description }}</p></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection