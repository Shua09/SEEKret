<section>
    
        <form class="px-2 py-2 edit-form" action="{{ route('updatepassword') }}" method="post">
            <label for="firstname">Current Password</label>
            <input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" required>

            <label for="lastname">New Password</label>
            <input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" required>

            <label for="username">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" required>

            
            <button type="submit">Save</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    
</section>