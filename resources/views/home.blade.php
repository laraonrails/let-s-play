@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Status</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome {{ Auth::user()->name }}.<br>
                        @foreach ($tags as $tag)
                            <form action="home/{{ $tag->id }}" method="post" class="form-check-inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger btn-sm">{{ $tag->tag }}</button>
                            </form>
                        @endforeach

                        <form action="home" method="post" class="form-group">
                            @csrf
                            <input type="text" name="tag" class="form-control">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <button type="submit" class="btn btn-primary">タグを追加</button>
                        </form>
                </div>
                <div class="card-header">ひとこと</div>
                    <div class="card-body">
                        {{ Auth::user()->bio }}
                    <form action="home/bio/{{ Auth::user()->id }}" method="post" class="form-group">
                        @csrf
                        @method("PUT")
                        <input type="text" name="bio" class="form-control">
                        <button type="submit" class="btn btn-primary">変更</button>
                    </form>
                    </div>


                <div class="card-header">連絡先</div>
                    <div class="card-body">
                        {{ Auth::user()->contact }}

                    <form action="home/contact/{{ Auth::user()->id }}" method="post" class="form-group">
                        @csrf
                        @method("PUT")
                        <input type="text" name="contact" class="form-control">
                        <button type="submit" class="btn btn-primary">変更</button>
                    </form>
                    </div>
            </div>

        </div>
    </div>
</div>
@endsection
