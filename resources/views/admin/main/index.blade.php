<form action="{{ route('admin.logout') }}" method="post">
    @csrf 
    <button type="submit">logout</button>
</form>
{{ Auth::guard('admin')->user()->name }}


