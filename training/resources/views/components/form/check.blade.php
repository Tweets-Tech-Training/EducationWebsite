<label >{{$attributes['title']}}</label>
<div class="custom-control custom-checkbox" style="padding-top: 5px">
    <input {{$attributes}}>
    <label class="custom-control-label" for="customCheck3"> {{$attributes['checkbox-label']}} </label>
</div>
@error($attributes['name']) <span class="text-danger">{{ $message }} </span> @enderror

