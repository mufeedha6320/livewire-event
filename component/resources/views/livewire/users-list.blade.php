<div>
    <h2>Registered Details</h2>

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Joined date</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

{{$users->links()}}
</div>
