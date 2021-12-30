<div>
    @push('style')
        <style>
            .ck-editor__editable_inline {
                min-height: 200px;
            }
            .ck-editor__editable{
                text-align: right !important;
            }


        </style>
    @endpush

        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">

                           <div class="col-md-10" >
                               <div class="form-group row ">
                             <x-form.input title="العنوان"  type="text" class="form-control" wire:model="title"  name="title"/>
                           </div>
                        </div>
                       <div class="col-md-10">
                        <div class="form-group row ">
                          <x-form.ckEditor title=" تفاصيل الرسالة"   type="text" class="form-control" wire:model="message"  name="message"  id="detailsEditor" >
                             </x-form.ckEditor>
                        </div>
                     </div>

                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >

                                <button wire:click="save" wire:loading.attr="disabled" wire:target="image" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                    <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                        <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                            <span class="visually-hidden "> </span>
                                        </div>
                                    </div>
                                </button>


                            <a href="{{route('courses.index')}}"  class="btn btn-outline-danger">الغاء</a>
                        </div>


                    </div>
                </div></div></div>


    @push('script')
        <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
        {{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
        {{--               <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
        <script>
            ClassicEditor
                .create( document.querySelector( '#detailsEditor' ) )
                .then( newEditor => {
                    var details= newEditor.getData();
                    newEditor.model.document.on('change:data', () => {
                        // $dispatch('detailsEditor', newEditor.getData())
                    @this.set('message', newEditor.getData());
                    })

                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    @endpush
</div>
