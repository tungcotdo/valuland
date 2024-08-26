// Define API
async function fetchAPI(url, formData) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Handle successful response from the server
                let result = JSON.parse(xhr.response);
                document.getElementById("sale-video").innerHTML = result.template;
                document.getElementById("modal__loading").style.display = "none";
                
                // Delete files
                document.querySelectorAll('.sale-video-delete').forEach(btn => {
                    btn.addEventListener('click', e => {
                        document.getElementById("modal__loading").style.display = "block";
                        const formData = new FormData();
                        formData.append("_token", document.querySelector("#csrf-token").content);
                        fetchAPI(btn.getAttribute("id"), formData);
                    })
                });

            } else {
                // Handle error response from the server
                console.error('Failed to upload files.');
            }
        }
    };
    xhr.send(formData);
}

// Load video data
const formData = new FormData();
formData.append("_token", document.querySelector("#csrf-token").content);
fetchAPI(document.getElementById('sale-loadvideo-url').value, formData);

// Validate video uploading
Validator({
    form: '#admin-sale-uploadvideo',
    rules: [
        Validator.file({
            required: true,
            selector: '#sale_video_input',
            extension: ['png','jpg'],
            submit: true
        })
    ],
    onSubmit: (data) => {
        document.getElementById("modal__loading").style.display = "block";
        document.getElementById("btn-modal-close").click();

        const formData = new FormData();
        formData.append("_token", document.querySelector("#csrf-token").content);

        let selectedFiles = document.querySelector('#sale_video_input').files;
        if (selectedFiles.length === 0) {
            alert("Bạn chưa chọn ảnh!");
            return;
        }

        for (let i = 0; i < selectedFiles.length; i++) {
            formData.append("files[]", selectedFiles[i]);
        }

        fetchAPI(data.form.action, formData);
    }
});

// Validate upload form
Validator({
    form: '#admin-sale-edit',
    rules: [
        Validator.tbRequired({
            selector: '#code',
            submit: true
        }),
        Validator.tbRequired({
            selector: '#owner_name',
            submit: true
        }),

        Validator.tbRequired({
            selector: '#owner_phone',
            submit: true
        })
    ],
    onSubmit: (data) => {
        document.getElementById("modal__loading").style.display = "block";
        data.form.submit();
    }
});
  