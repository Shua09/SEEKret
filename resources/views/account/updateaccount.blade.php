<section>
    <form class="px-2 py-2 edit-form" action="{{ route('updateaccount') }}" method="post" enctype="multipart/form-data">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" value="{{ $user->firstname }}" required>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" value="{{ $user->lastname }}" required>

        <label for="username">Username:</label>
        <input type="text" name="username" value="{{ $user->username }}" required>

        <label for="bio">Bio:</label>
        <textarea name="bio">{{ $user->bio }}</textarea>

        <label for="image">User Display Photo:</label>
        <input type="file" name="image" id="image">        

        <button type="submit">Save Profile</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
</section>
