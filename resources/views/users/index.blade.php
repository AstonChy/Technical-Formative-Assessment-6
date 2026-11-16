@extends('layouts.app')

@section('title', 'Users | POS Foundations')

@section('content')
<section class="page-heading compact"><p class="eyebrow">System directory</p><h1>User accounts</h1><p class="lead">Temporary sample records supplied by <code>UserController</code>.</p></section>
<section class="table-panel"><div class="table-meta"><h2>All users</h2><span class="count-pill">{{ $users->count() }} records</span></div><div class="table-wrap"><table><thead><tr><th>ID</th><th>Username</th><th>Full name</th></tr></thead><tbody>
@foreach ($users as $user)
<tr><td class="muted">{{ $user->id }}</td><td class="strong">{{ $user->username }}</td><td>{{ $user->full_name }}</td></tr>
@endforeach
</tbody></table></div></section>
@endsection
