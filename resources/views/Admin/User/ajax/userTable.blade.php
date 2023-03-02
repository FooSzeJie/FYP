<table width="100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Age</td>
                <td>Role</td>
                <td>Address</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody id="userData">
        @foreach($users as $user)
            <tr>
                <td class="checkbox">
                    <input type="checkbox">
                </td>

                <td class="people">
                    <img src="{{ asset('profileImage/') }}/{{ $user->profileImage }}">
                    <div class="people-de">
                        <h5>{{$user->name}}</h5>
                        <p>{{ $user->email }}</p>
                    </div>
                </td>

                <td class="people-des">
                    <h5>{{ $user->age }}</h5>
                </td>

                <td class="role">
                    <p>{{ $user->role }}</p>
                </td>

                <td class="address">
                    <p>{{ $user->address }}</p>
                </td>

                <td class="status">
                    <p>{{ $user->paymentStatus}}</p>
                </td>

                <td class="action">
                    <div class="buttonBox">
                        <div class="button">
                            <a href="#" class="edit">Edit</a>
                        </div>

                        <div class="button">
                            <a href="{{ route('deleteUser', ['id'=>$user->id]) }}" class="delete">Delete</a>
                        </div>
                    </div>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    