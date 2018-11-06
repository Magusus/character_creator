@extends('layouts.app')

@section('content')
<div class="container">
    <div class="float-right row margin-bottom">
            <fieldset class="actions">
                <legend>{{ trans('locale.actions') }}</legend>
                <a class="margin-left" href="{{ url('/races') }}"><button class="btn btn-action">{{ trans('pagination.previous') }}</button></a>
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input id="name" type="text" class="form-control{{ $errors->has('name')? ' is-invalid': ''}}" name="name" value="{{ $race->name }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </td>
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
                    <td>
                        <input id="strength" type="text" class="form-control{{ $errors->has('strength') ? ' is-invalid' : '' }}" name="strength" value="{{ $race->strength }}">
                        @if ($errors->has('strength'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('strength') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="agility" type="text" class="form-control{{ $errors->has('agility') ? ' is-invalid' : '' }}" name="agility" value="{{ $race->agility }}">
                        @if ($errors->has('agility'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('agility') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="resistance" type="text" class="form-control{{ $errors->has('resistance') ? ' is-invalid' : '' }}" name="resistance" value="{{ $race->resistance }}">
                        @if ($errors->has('resistance'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('resistance') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="mindfullness" type="text" class="form-control{{ $errors->has('mindfullness') ? ' is-invalid' : '' }}" name="mindfullness" value="{{ $race->mindfullness }}">
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
                    <th>{{ trans('locale.mindfullness') }}</th>
                    <th>{{ trans('locale.wisdom') }}</th>
                    <th>{{ trans('locale.intuition') }}</th>
                    <th>{{ trans('locale.charisma') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input id="intelligence" type="text" class="form-control{{ $errors->has('intelligence') ? ' is-invalid' : '' }}" name="intelligence" value="{{ $race->intelligence }}">
                        @if ($errors->has('intelligence'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('intelligence') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="wisdom" type="text" class="form-control{{ $errors->has('wisdom') ? ' is-invalid' : '' }}" name="wisdom" value="{{ $race->wisdom }}">
                        @if ($errors->has('wisdom'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('wisdom') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="intuition" type="text" class="form-control{{ $errors->has('intuition') ? ' is-invalid' : '' }}" name="intuition" value="{{ $race->intuition }}">
                        @if ($errors->has('intuition'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('intuition') }}</strong>
                            </span>
                        @endif
                    </td>
                    <td>
                        <input id="charisma" type="text" class="form-control{{ $errors->has('charisma') ? ' is-invalid' : '' }}" name="charisma" value="{{ $race->charisma }}">
                        @if ($errors->has('charisma'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('charisma') }}</strong>
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
                        <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description">{{ $race->description }}</textarea>
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