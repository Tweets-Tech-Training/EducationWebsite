
<img {{$attributes}}  src="{{$attributes['src']}}">
@error($attributes['name']) <span class="text-danger" style="{{$attributes['style']}}">{{ $message }}</span> @enderror


