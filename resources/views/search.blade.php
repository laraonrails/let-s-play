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
                    @foreach ($results as $result )
                        <tr>
                            <td><a href="home/user/{{ $result->user->id }}">{{ $result->user->name }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection