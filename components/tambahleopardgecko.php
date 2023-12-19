<div>
    <h1>Tambah Data Leopard Gecko baru</h1>
</div>
<form action="components/proses_tambahleopardgecko.php" id="myForm" method="POST" enctype="multipart/form-data">
    <div class="form-content form-group">
        <div>
            <div>
                <h3>Tambahkan gambar gecko disini</h3>
                <small>6 foto maximal</small>
            </div>
            <div id="myDropzone" class="dropzone">
                <div class="dz-message">
                    <span class="message">Drop files here to upload</span>
                </div>
                <div id="max-file-message" class="alert alert-warning" style="display: none;">
                    Only 6 images can be added. No more files allowed.
                    <input type="file" name="file" multiple style="display: none;">
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col">
                    <h3 class="mb-4">Form Data Leopard Gecko</h3>
                </div>
            </div>
            <div class="row">
                <div class="col mb-2 mt-2">
                    <input class="form-control" type="text" name="kode" id="" placeholder="Kode">
                </div>
                <div class="col mb-2 mt-2">
                    <input class="form-control" type="text" name="class" id="" placeholder="Class">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="text" name="morph" id="" placeholder="Morph">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="text" name="dam" id="" placeholder="Dam">
                </div>
            </div>
            <div class="row">
                <div class="col my-2">
                    <input class="form-control" type="text" name="sire" id="" placeholder="Sire">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col my-2 form-check">
                    <div class="row pt-2">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 my-2">
                    <input class="form-control" type="date" name="dob" id="" placeholder="D.O.B">
                </div>
                <div class="col-sm-2 my-2">
                    <input class="form-control" type="text" name="incub" id="" placeholder="Incub">
                </div>
            </div>
            <div class="row">
                <div class="col mt-2">
                    <input class="form-control" type="text" name="generasi" id="" placeholder="Generasi">
                </div>
                <div class="col mt-2">
                    <input class="form-control" type="text" name="harga" id="" placeholder="Harga">
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col text-right">
            <button class="btn btn-primary start" id="submit-btn" type="button" placeholder="Simpan">Simpan</button>
        </div>
    </div>
</form>

<script>
    // Initialize Dropzone
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#myDropzone", {
        url: "components/proses_tambahleopardgecko.php", // Replace with your server-side upload URL
        acceptedFiles: "image/*",
        maxFiles: 5,
        maxFilesize: 3, // Maximum file size in megabytes
        addRemoveLinks: true, // Show remove links for uploaded images
        previewsContainer: "#myDropzone",
        thumbnailWidth: 180,
        thumbnailHeight: 180,
        init: function() {
            var startButton = document.querySelector("#myDropzone .start");
            var dzMessage = document.querySelector("#myDropzone .dz-message");
            var maxFileMessage = document.getElementById("max-file-message");

            this.on("addedfile", function(file) {
                if (this.files.length > this.options.maxFiles) {
                    this.removeFile(file);
                    alert("Only 5 images can be added. No more files allowed.");
                }

                if (this.files.length === this.options.maxFiles) {
                    dzMessage.style.display = "none";
                    // startButton.style.display = "block";
                }
            });

            this.on("success", function(file, response) {
                // Handle successful file uploads
                console.log("File uploaded:", file);
            });

            this.on("removedfile", function(file) {
                // Handle file removal
                console.log("File removed:", file);
            });
        }
    });

    // Handle form submission
    var submitBtn = document.getElementById("submit-btn");
    submitBtn.addEventListener("click", function(event) {
        event.preventDefault();

        var form = document.getElementById("myForm");
        var formData = new FormData(form);

        // Get the uploaded files
        var uploadedFiles = myDropzone.getAcceptedFiles();
        for (var i = 0; i < uploadedFiles.length; i++) {
            formData.append("file[]", uploadedFiles[i]);
        }

        // Send the form data to the server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "components/proses_tambahleopardgecko.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                } else {
                    console.log("Error: " + xhr.status);
                }
            }
        };
        xhr.send(formData);
    });
</script>