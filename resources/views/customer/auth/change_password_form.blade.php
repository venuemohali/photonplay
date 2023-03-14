<form action="{{ route('customer.change_password') }}" method="post">
    @csrf
    <input type="hidden" name="email" value="{{$email}}">
    password: <input type="text" name="password"> <br>
    confirm password: <input type="text" name="confirm_password"> <br>
    <button type="submit">Change Password</button>
</form>