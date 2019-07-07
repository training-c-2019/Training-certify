    <head></head>

<body>
<div class="content"><table>
	<tr>
		<th> body_ara</th>
		<th> body_eng</th>
		<th> desc</th>
		<th> status</th>
		<th> layout</th>
		<th> required signature</th>
		<th> create at</th>
		<th> updated at</th>
		<th> action</th>
	</tr>
	
	@foreach($all_template as $tb)
	<tr>
		<td>{!!$tb->body_ara!!}</td>
		<td>{{$tb->body_eng}}</td>
		<td>{{$tb->description}}</td>
		<td>{{$tb->status}}</td>
		<td>{{$tb->layout}}</td>
		<td>{{$tb->requires_signature}}</td>
		<td>{{$tb->created_at}}</td>
		<td>{{$tb->updated_at}}</td>
	</tr>
	@endforeach
</table>
{!!$all_template->render()!!}

</div>
</body>
</html>