<!DOCTYPE html>
<html>

<head>
    <title>Multiple Image Uploader</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.min.css">
    <style>
        .dropzone-container {
            width: 200px;
            margin-bottom: 10px;
        }

        .preview-image {
            display: block;
            width: 100%;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form action="upload.php" class="dropzone" id="myDropzone">
        <div class="fallback">
            <input type="file" name="images[]" multiple accept="image/*">
        </div>
        <div class="dz-message">
            <button class="dz-button" type="button">Add Image</button>
            <span>or drag and drop files here to upload</span>
        </div>
    </form>
    <div id="image-preview"></div>

    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.min.js"></script>
    <script>
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
</body>

</html>