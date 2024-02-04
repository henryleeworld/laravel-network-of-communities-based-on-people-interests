@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ $community->name }}{{ trans('frontend.posts.content.colon') }}{{ trans('frontend.posts.content.edit_post') }}</div>

        <div class="card-body">
            <form method="POST"
                  action="{{ route('communities.posts.update', [$community, $post]) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ trans('frontend.posts.content.title') }}
                        *</label>

                    <div class="col-md-6">
                        <input id="title" type="text"
                               class="form-control @error('title') is-invalid @enderror" name="title"
                               value="{{ $post->title }}" required autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="post_text"
                           class="col-md-4 col-form-label text-md-right">{{ trans('frontend.posts.content.post_text') }}</label>

                    <div class="col-md-6">
                                    <textarea rows="10" class="form-control @error('post_text') is-invalid @enderror"
                                              name="post_text">{{ $post->post_text }}</textarea>

                        @error('post_text')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="post_url"
                           class="col-md-4 col-form-label text-md-right">{{ trans('frontend.posts.content.url_link') }}</label>

                    <div class="col-md-6">
                        <input id="post_url" type="text"
                               class="form-control @error('post_url') is-invalid @enderror" name="post_url"
                               value="{{ $post->post_url }}">

                        @error('post_url')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="post_image"
                           class="col-md-4 col-form-label text-md-right">{{ trans('frontend.posts.content.image') }}</label>

                    <div class="col-md-6">
                        <input type="file" name="post_image"/>

                        @error('post_image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ trans('frontend.posts.content.save_post') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
