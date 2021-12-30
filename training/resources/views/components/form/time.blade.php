<?php $id=$attributes['id']?$attributes['id']:'timepicker'; ?>
<div
        wire:ignore
        x-data
        x-init="

$('#{{$id}}').timepicker({
    timeFormat: 'h:mm p',
        interval: 30,
        startTime: '9:00',
        dynamic: true,
        dropdown: true,
        scrollbar: true,
       change: tmTotalHrsOnSite
        });
   function tmTotalHrsOnSite () {
   let data=$(this).val();
    console.log(data);
       @this.set('{{$attributes['name']}}', data,true);
     };
"
>
@if($attributes['title'])
    <label  class="d-block">{{$attributes['title']}} @if($attributes['required'])<span>*</span> @endif </label>
@endif
<input   id="{{$id}}"  class="form-control timepicker @error($attributes['name']) input-error @enderror" {{$attributes}}>
</div>
@error($attributes['name'])
<small class="form-text error-field" style="display: block;">
    {{$message}}
</small>
@enderror
