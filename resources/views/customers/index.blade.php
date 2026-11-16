@extends('layouts.app')

@section('title', 'Customers | POS Foundations')

@section('content')
<section class="page-heading compact"><p class="eyebrow">Account directory</p><h1>Customer accounts</h1><p class="lead">Temporary sample records supplied by <code>CustomerController</code>.</p></section>
<section class="table-panel"><div class="table-meta"><h2>All customers</h2><span class="count-pill">{{ $customers->count() }} records</span></div><div class="table-wrap"><table><thead><tr><th>ID</th><th>Customer</th><th>Email</th><th>Phone</th></tr></thead><tbody>
@foreach ($customers as $customer)
<tr><td class="muted">{{ $customer->id }}</td><td class="strong">{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td></tr>
@endforeach
</tbody></table></div></section>
@endsection
