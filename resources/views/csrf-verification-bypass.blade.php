<form action="{{ route('csrf-verification-bypass.store') }}" method="POST">
    <input type="text" name="username" value="John Doe" autocomplete="off">
    <input type="text" name="email" value="john@doe.com" autocomplete="off">
    <input type="password" name="password" autocomplete="off">
    <button type="submit">Submit</button>
</form>