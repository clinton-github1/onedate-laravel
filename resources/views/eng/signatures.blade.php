

@extends('layouts/eng.header')

@section('content')
<div class="content">
   
    <table>
	<tr>
		<td>ID</td>
		<td>Name</td>
        <td>City</td>
		<td>Country</td>
	</tr>

	@foreach($allUsers as $usr)

		<tr>
			<td>{{ $usr->id }}</td>
			<td>{{ $usr->Name }}</td>
			<td>{{ $usr->City }}</td>
			<td>{{ $usr->Country }}</td>
		</tr>

	@endforeach
</table>
    
</div>
@include('layouts/share.fb_link')
@include('layouts/eng.footer')

@endsection
