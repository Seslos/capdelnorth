<div>
    <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-12"> 
                    <div class="card">
                        <div class="card-header">Imagenes</div>
                        <div class="card-body">
                        <form wire:sumit.prevent="save">
                                <div class="form-group">
                                        <label class="my-2">Imagens</label>
    
                                        <input type="file" wire:model="image" class="form-control mb-2">
                                        @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                <button type="button" class="btn btn-danger mt-2">Subir Imagen</button>
                        </form>
                    </div>

                    @if($image){
                        <img src="{{$image->temporr}}">

                    }
                    @endif
                </div>
             </div>
        </div>
    </div>
    
</div>
