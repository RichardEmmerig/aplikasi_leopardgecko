<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dropzone Thumbnail Row Layout</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
    <style>
        /* Customize the Dropzone thumbnail container */
        .dropzone .dz-preview {
            width: calc(33.33% - 10px);
            /* 3 columns with margin */
            margin-right: 10px;
            margin-bottom: 10px;
            display: inline-block;
            vertical-align: top;
        }

        /* Display the thumbnails in a row layout */
        .dropzone .thumbnails-container {
            display: flex;
            flex-wrap: wrap;
        }

        /* Customize the thumbnail image */
        .dropzone .dz-preview .dz-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div id="my-dropzone" class="dropzone">
        <div class="thumbnails-container"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script>
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#my-dropzone", {
            url: "/upload", // Replace with your server-side upload URL
            // Additional Dropzone configuration options...
        });

        // Function to create thumbnail preview elements
        function createThumbnailElement(file, url) {
            var thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("dz-preview");

            var thumbnailImage = document.createElement("img");
            thumbnailImage.src = url;
            thumbnailImage.alt = file.name;
            thumbnailElement.appendChild(thumbnailImage);

            return thumbnailElement;
        }

        // Event listener for successful uploads
        myDropzone.on("success", function(file, response) {
            // Create the thumbnail preview element and add it to the container
            var thumbnailContainer = document.querySelector(".thumbnails-container");
            var thumbnailElement = createThumbnailElement(file, response.url);
            thumbnailContainer.appendChild(thumbnailElement);
        });
    </script>
</body>

</html>