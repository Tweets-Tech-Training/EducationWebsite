<div  class="col-md-12" >
    <label>{{$attributes['title']}}</label>
    <div wire:ignore>
        <div {{$attributes}} >
            {{$slot}}
        </div>
    </div>
    @error($attributes['name']) <span class="text-danger">{{ $message }}</span> @enderror
</div>

