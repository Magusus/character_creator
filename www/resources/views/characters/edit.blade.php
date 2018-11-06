@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right row margin-bottom">
        <fieldset class="actions">
            <legend>{{ trans('locale.actions') }}</legend>
            <a class="margin-left" href="{{ url('/') }}"><button class="btn btn-action">{{ trans('pagination.previous') }}</button></a>
            <input type="submit" form="saveForm" class="btn btn-action margin-left" value="{{ trans('locale.save') }}">
            <input id="deleteButton" type="button" form="deleteForm" class="btn btn-action margin-left" value="{{ trans('locale.delete') }}">
        </fieldset>
    </div>
    
    <form id="saveForm" method="POST" action="edit/save">
        @csrf

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
                    <td>
                        <input id="name" type="text" class="form-control{{ $errors->has('name')? ' is-invalid': ''}}" name="name" value="{{ $character->name }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <select id="race" class="form-control{{ $errors->has('race')? ' is-invalid': ''}}" name="race" required>
                            <option>{{ $character->race }}</option>
                            @foreach($races as $race)
                                @if($race->name !== $character->race)
                                    <option>{{ $race->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if ($errors->has('race'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('race') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <select id="profession" class="form-control{{ $errors->has('profession')? ' is-invalid': ''}}" name="profession" required>
                            <option>{{ $character->profession }}</option>
                            @foreach($professions as $profession)
                                @if($profession->name !== $character->profession)
                                    <option>{{ $profession->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if ($errors->has('profession'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('profession') }}</strong>
                            </span>
                        @endif
                    </td>
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
                            <td>
                                <input id="strength" type="text" class="form-control{{ $errors->has('strength') ? ' is-invalid' : '' }}" name="strength" value="{{ $character->strength }}">
                                @if ($errors->has('strength'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('strength') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="agility" type="text" class="form-control{{ $errors->has('agility') ? ' is-invalid' : '' }}" name="agility" value="{{ $character->agility }}">
                                @if ($errors->has('agility'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('agility') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="resistance" type="text" class="form-control{{ $errors->has('resistance') ? ' is-invalid' : '' }}" name="resistance" value="{{ $character->resistance }}">
                                @if ($errors->has('resistance'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('resistance') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="mindfullness" type="text" class="form-control{{ $errors->has('mindfullness') ? ' is-invalid' : '' }}" name="mindfullness" value="{{ $character->mindfullness }}">
                                @if ($errors->has('mindfullness'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mindfullness') }}</strong>
                                    </span>
                                @endif
                            </td>
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
                            <td>
                                <input id="intelligence" type="text" class="form-control{{ $errors->has('intelligence') ? ' is-invalid' : '' }}" name="intelligence" value="{{ $character->intelligence }}">
                                @if ($errors->has('intelligence'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('intelligence') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="wisdom" type="text" class="form-control{{ $errors->has('wisdom') ? ' is-invalid' : '' }}" name="wisdom" value="{{ $character->wisdom }}">
                                @if ($errors->has('wisdom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('wisdom') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="intuition" type="text" class="form-control{{ $errors->has('intuition') ? ' is-invalid' : '' }}" name="intuition" value="{{ $character->intuition }}">
                                @if ($errors->has('intuition'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('intuition') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="charisma" type="text" class="form-control{{ $errors->has('charisma') ? ' is-invalid' : '' }}" name="charisma" value="{{ $character->charisma }}">
                                @if ($errors->has('charisma'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('charisma') }}</strong>
                                    </span>
                                @endif
                            </td>
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
                            <td>
                                <input id="level" type="text" class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" name="level" value="{{ $character->level }}">
                                @if ($errors->has('level'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="experience_points" type="text" class="form-control{{ $errors->has('experience_points') ? ' is-invalid' : '' }}" name="experience_points" value="{{ $character->experience_points }}">
                                @if ($errors->has('experience_points'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('experience_points') }}</strong>
                                    </span>
                                @endif
                            </td>
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
                            <td>
                                <input id="health_points" type="text" class="form-control{{ $errors->has('health_points') ? ' is-invalid' : '' }}" name="health_points" value="{{ $character->health_points }}">
                                @if ($errors->has('health_points'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('health_points') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="stamina_points" type="text" class="form-control{{ $errors->has('stamina_points') ? ' is-invalid' : '' }}" name="stamina_points" value="{{ $character->stamina_points }}">
                                @if ($errors->has('stamina_points'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stamina_points') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input id="mana_points" type="text" class="form-control{{ $errors->has('mana_points') ? ' is-invalid' : '' }}" name="mana_points" value="{{ $character->mana_points }}">
                                @if ($errors->has('mana_points'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mana_points') }}</strong>
                                    </span>
                                @endif
                            </td>
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
                    <td>
                        <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ $character->age }}">
                        @if ($errors->has('age'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="height" type="text" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height" value="{{ $character->height }}">
                        @if ($errors->has('height'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('height') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="weight" type="text" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" name="weight" value="{{ $character->weight }}">
                        @if ($errors->has('weight'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('weight') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="eye_color" type="text" class="form-control{{ $errors->has('eye_color') ? ' is-invalid' : '' }}" name="eye_color" value="{{ $character->eye_color }}">
                        @if ($errors->has('eye_color'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('eye_color') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="hair_color" type="text" class="form-control{{ $errors->has('hair_color') ? ' is-invalid' : '' }}" name="hair_color" value="{{ $character->hair_color }}">
                        @if ($errors->has('hair_color'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('hair_color') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="body_color" type="text" class="form-control{{ $errors->has('body_color') ? ' is-invalid' : '' }}" name="body_color" value="{{ $character->body_color }}">
                        @if ($errors->has('body_color'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('body_color') }}</strong>
                            </span>
                        @endif
                    </td>
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
                    <td>
                        <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description">{{ $character->description }}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>  
    </form>
    
    <form id="deleteForm" method="POST" action="delete">
        @csrf
        <input type="hidden" id="deleteTitle" value="{{ trans('locale.deleteTitle') }}">
        <input type="hidden" id="deleteMessage" value="{{ trans('locale.deleteMessage') }}">
    </form>
</div>
@endsection

@section('assets')
<script src="{{ asset('js/delete.js') }}" defer></script>
@endsection