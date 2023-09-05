<p>Welcome {{ $user->name }}</p>
<p>You received this email as aresult of your registration to our website</p>
<p>Please click on the verification link to verify your account.</p>

<p>
    <a href="{{ url('/verification/' . $user->id . '/' . $user->remember_token) }}">Click here.</a>
</p>
