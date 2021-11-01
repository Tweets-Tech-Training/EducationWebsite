<?php $id=$attributes['id']?$attributes['id']:'timepicker';
?>
<div
    wire:ignore
    x-data
    x-init="

  $('#{{$id}}').pickatime({
    format: 'h:i a',
    formatLabel: 'HH:i a',
    formatSubmit: 'HH:i',
    hiddenPrefix: 'prefix__',
    hiddenSuffix: '__suffix',
    onSet: function(context) {
    tmTotalHrsOnSite();
  }
  });
   function tmTotalHrsOnSite () {
   let data=$('#{{$id}}').val();

    console.log(data);
      @this.set('{{$attributes['name']}}', data);
     };
"
>
    <label >{{$attributes['title']}}</label>
    <input {{$attributes}} ">
    @error($attributes['name']) <span class="text-danger">{{ $message }}</span> @enderror
</div>

