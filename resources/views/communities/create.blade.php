@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ trans('frontend.communities.content.new_community') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('communities.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ trans('frontend.communities.content.name') }}*</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ trans('frontend.communities.content.description') }}
                        *</label>

                    <div class="col-md-6">
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                  required>{{ old('description') }}</textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="topics" class="col-md-4 col-form-label text-md-right">{{ trans('frontend.communities.content.topics') }}</label>

                    <div class="col-md-6">
                        <select name="topics[]" multiple class="form-control select2">
                            @foreach ($topics as $topic)
                                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('frontend.communities.content.create_community') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
