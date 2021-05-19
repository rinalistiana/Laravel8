<form action="/unduh" method="POST">
	<input type="hidden" value="{{ $path }}" name="berkas">
	<input type="submit" value="Unduh">
</form><br><br>
<img src="{{ asset('storage/' . $path) }}" alt="{{'storage/' . $path}}">
