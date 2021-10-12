<div class="form-group">
    <label >{{$attributes['title']}}</label>
    <input {{$attributes}} placeholder="{{$attributes['title']}}" />
    @error($attributes['name']) <span class="text-danger">{{ $message }}</span> @enderror

</div>
