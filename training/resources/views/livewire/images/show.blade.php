<div>
    <div class="row">
            @forelse($images as $image)
            <div class="col-md-3">
                <div class="card" style="width: 16rem; height: 16rem">
                    <img src="{{asset('storage/imagesGallery/'.$image->image) }}" style="width: 100%; height: 100%" class="card-img-top" alt="...">
                </div>
            </div>

        @empty
            <br>
            <div style="background-color: transparent;" class=" alert  align-items-center p-1 ml-1" role="alert">  <h5> لا يوجد صور ... </h5> </div>
        @endforelse
    </div>
</div>
