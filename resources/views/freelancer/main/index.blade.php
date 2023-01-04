<form action="{{ route('freelancer.logout') }}" method="post">
    @csrf 
    <button type="submit">logout freelancer</button>
</form>
{{ Auth::guard('freelancer')->user()->name }}


