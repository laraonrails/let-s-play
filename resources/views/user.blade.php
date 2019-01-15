@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>
                    <div class="card-body">
                        @foreach ($tags as $tag)
                            <button class="btn btn-danger btn-sm">{{ $tag->tag }}</button>
                        @endforeach
                    </div>
                    <div class="card-header">ひとこと</div>
                        <div class="card-body">
                            {{ $user->bio }}
                        </div>
                    <div class="card-header">連絡先</div>
                    <div class="card-body">
                        {{ $user->contact }}
                    </div>

            </div>
        </div>
    </div>
@endsection