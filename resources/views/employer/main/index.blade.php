<form action="{{ route('employer.logout') }}" method="post">
    @csrf 
    <button type="submit">logout Employer</button>
</form>
{{ Auth::guard('employer')->user()->name }}


