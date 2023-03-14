<form action="{{route('customer.forgot_password')}}" method="post">
    @csrf
    email: <input type="text" name="email">
    <button>Send Reset Mail</button>
</form>