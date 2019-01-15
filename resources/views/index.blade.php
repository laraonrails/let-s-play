@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user )
                    <tr>
                        <td><a href="home/user/{{ $user->id }}">{{ $user->name }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection