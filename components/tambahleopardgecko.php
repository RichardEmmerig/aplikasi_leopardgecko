<div>
    <h1>Tambah Data Leopard Gecko baru</h1>
</div>
<form>
    <div class="form-content form-group">
        <div id="myDropzone">
            <div class="fallback">
                <input type="file" name="images[]" multiple accept="image/*">
            </div>
            <div class="dropzone dz-message">
                <button class="dz-button" type="button">Add Image</button>
                <span>or drag and drop files here to upload</span>
            </div>
            <div id="image-preview"></div>
        </div>
        <div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="text" name="" id="" placeholder="Kode">
                </div>
                <div class="col my-2">
                    <input class="form-control" type="text" name="" id="" placeholder="Class">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="text" name="" id="" placeholder="Morph">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="text" name="" id="" placeholder="Dam">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="text" name="" id="" placeholder="Sire">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="radio" name="" id="" placeholder="Male">
                    <input class="form-control" type="radio" name="" id="" placeholder="Female">
                </div>
                <div class="col my-2">
                    <input class="form-control" type="date" name="" id="" placeholder="D.O.B">
                </div>
                <div class="col my-2">
                    <input class="form-control" type="text" name="" id="" placeholder="Incub">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="text" name="" id="" placeholder="Generasi">
                </div>
                <div class="col my-2">
                    <input class="form-control" type="text" name="" id="" placeholder="Harga">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" value="simpan" placeholder="Simpan">
        </div>
    </div>
</form>

<script>
    Dropzone.autoDiscover = false;
    Dropzone.options.myDropzone = {
        autoProcessQueue: false,
        acceptedFiles: 'image/*',
        maxFiles: 6,
        thumbnailWidth: null,
        thumbnailHeight: null,
        init: function() {
            var myDropzone = this;
            var previewContainer = document.getElementById('image-preview');

            this.on('thumbnail', function(file) {
                // Do nothing to prevent the thumbnail from being generated
            });

            this.on('addedfile', function(file) {
                var img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.classList.add('preview-image');
                previewContainer.appendChild(img);
            });

            // Remove the uploaded images from the preview section when a file is removed
            this.on('removedfile', function(file) {
                var previewImages = previewContainer.getElementsByClassName('preview-image');
                for (var i = 0; i < previewImages.length; i++) {
                    if (previewImages[i].src.indexOf(file.dataURL) !== -1) {
                        previewContainer.removeChild(previewImages[i]);
                        break;
                    }
                }
            });
        }
    };
</script>