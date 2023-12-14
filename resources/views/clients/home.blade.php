<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <title> Sign On Documents </title>
  <script src="https://pdfjs.express/7.3.2/pdf.js"></script>
  <script src="https://pdfjs.express/7.3.2/pdf.worker.js"></script>
  <link rel="stylesheet" href="https://pdfjs.express/7.3.2/webviewer.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
  <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
  <!-- Specify the URL to the worker script -->
  <script>
      pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';
  </script>
</head>

<style>
  body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('images/bg.png') }}');
    background-size: cover;
    opacity: 0.1;
    z-index: -1; 
  }
</style>

<!-- ------------------------------------------------------------------ -->
<body>

<!-- include('../admin.includes.toasts') -->
<style>
  #searchfield{width: 13rem;}
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg" style="">
  <!-- Left side of the navbar -->
  <div class="navbar-brand" style="padding-left:2rem;">
   <img src="{{asset('icons/doc_sign.png')}}" alt="Profile Image" class="rounded-circle-none" width="30" height="33">
    <span class="ml-2"> Pdf Name </span>
  </div>

  <!-- Middle of the navbar -->
  <form class="form-inline mx-auto">
    <input class="form-control mr-sm-2 m-h-8" id="searchfield" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  <!-- Right side of the navbar -->
  <!-- <ul class="navbar-nav ml-auto" style="padding-right:1rem;">
  <li class="nav-item">
     <a class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" href="#">Login</a>
  </li>
  </ul> -->
 
  <ul class="navbar-nav ml-auto" style="padding-right:1rem;">
    <li class="nav-item">
     <p style="padding-right:1rem; margin-top:1rem; color:silver;"> Serial No: 1231234324 </p>
    </li>
  </ul>
</nav>

<!-- ------------------------------------------ satrt for body content -->

<br><br>
<!-- href="http://127.0.0.1:8000/docs/1701336145.pdf"  -->
<a onclick="convertImageToPdf()"> <div style="position: fixed; right: 0; bottom: 10vh; border-radius:2rem 0 0 2rem; border-left: 1rem solid darkgreen; background-color: black; z-index: 100; box-shadow: 1px 1px 5px grey;">
    <div style="padding: 0.7rem; background-color: darkgreen; display: flex; flex-direction: row; align-items: center; ">
        <i class="text-light fas fa-download"> Download </i>
    </div>
</div></a>


<center>
        <div style="width: 80%; background-color: rgba(255, 255, 255, 0.4); border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">
            <h2 style="text-align: center; margin-bottom: 20px;"> Pdf Name </h2>
            
            <!-- Include your PDF viewer here -->
            <!-- <embed src="http://127.0.0.1:8000/docs/1701336145.pdf" type="application/pdf" width="100%" height="600px"> -->
     

<style>
 .wrapper {
  position: relative;
  width: 400px;
  height: 200px;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
img {
  position: absolute;
  left: 0;
  top: 0;
}

.signature-pad {
  position: absolute;
  left: 0;
  top: 0;
  width:400px;
  height:200px;
}
</style>

<!-- start for show an image area -->
        <center>
            <div class="wrapper" style="width: 80%; background-color: rgba(255, 255, 255, 0.9); border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <img src="https://preview.ibb.co/jnW4Qz/Grumpy_Cat_920x584.jpg" width=400 height=200 />
              <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
            </div>
            <div>
              <button id="save">Save</button>
              <button id="clear">Clear</button>
            </div>
        </center>
<!-- end of show an image area -->


            <hr style="margin: 20px 0;">
        </div>
    </center>

<!-- ------------------------------------------ end of body content -->


<!-- Your page content goes here -->

</body>
<!-- js START -->
    <!-- for draw on image cdn -->
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@1.5.3/signature_pad.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
    <!-- for draw on image cdn -->
    <!-- for image to pdf cdn -->
    <script src="https://unpkg.com/pdf-lib/dist/pdf-lib.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.js"></script>
    <!-- for image to pdf cdn -->

    
    <!-- draw on image area start -->
    <script>
      var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
      backgroundColor: 'rgba(255, 255, 255, 0)',
      penColor: 'rgb(0, 0, 0)'
      });
      var saveButton = document.getElementById('save');
      var cancelButton = document.getElementById('clear');

      saveButton.addEventListener('click', function (event) {
      var data = signaturePad.toDataURL('image/png');

      // Send data to server instead...
      window.open(data);
      });

      cancelButton.addEventListener('click', function (event) {
      signaturePad.clear();
      });
    </script>
    <!-- draw on image area end -->


      <script>
      async function convertImageToPdf() {
        // Specify the image path directly
        // const imagePath = "path/to/your/image.png"; // Replace with the actual path
        const imagePath = "{{ asset('icons/a4.png') }}";

        try {
            // Fetch the image as an ArrayBuffer
            const response = await fetch(imagePath);
            const imageBytes = new Uint8Array(await response.arrayBuffer());

            const pdfDoc = await PDFLib.PDFDocument.create();
            const page = pdfDoc.addPage();

            const image = await pdfDoc.embedPng(imageBytes);
            const { width, height } = image.scale(0.7);

            page.drawImage(image, {
                x: 0,
                y: 588 - height,
                width: 600,
                height: 850,
            });

            const pdfBytes = await pdfDoc.save();
            const blob = new Blob([pdfBytes], { type: 'application/pdf' });

            // Create a link element and trigger a download
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = 'output.pdf';

            // Append the link to the document, trigger a click, and remove the link
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        } catch (error) {
            console.error('Error converting image to PDF:', error);
        }
    }

        

////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////// with choose image file start
// <input type="file" id="imageInput" accept="image/*">
        // async function convertImageToPdf() {
        //     // const imageInput = document.getElementById('imageInput');
        //     // const imageFile = imageInput.files[0];

        //     if (!imageFile) {
        //         alert('Please select an image file.');
        //         return;
        //     }

        //     const reader = new FileReader();
        //     reader.readAsArrayBuffer(imageFile);

        //     reader.onload = async () => {
        //         const imageBytes = new Uint8Array(reader.result);
        //         const pdfDoc = await PDFLib.PDFDocument.create();
        //         const page = pdfDoc.addPage();

        //         const image = await pdfDoc.embedPng(imageBytes);
        //         const { width, height } = image.scale(0.7);

        //         page.drawImage(image, {
        //             x: 0,
        //             y: 588 - height,
        //             width: 600,
        //             height: 850,
        //         });

        //         const pdfBytes = await pdfDoc.save();
        //         const blob = new Blob([pdfBytes], { type: 'application/pdf' });

        //         // Create a link element and trigger a download
        //         const link = document.createElement('a');
        //         link.href = URL.createObjectURL(blob);
        //         link.download = 'output.pdf';

        //         // Append the link to the document, trigger a click, and remove the link
        //         document.body.appendChild(link);
        //         link.click();
        //         document.body.removeChild(link);
        //     };

        //     reader.onerror = () => {
        //         alert('Error reading the image file.');
        //     };
        // }

////////////////// with choose image file end
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
    </script>
<!-- js END -->
</html>





<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->
<!-- show for toast start -->

<div id="notification-toastgreen"  style="position: fixed; z-index: 100; bottom: 3%; right: 4%;" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" data-delay="2000" style="margin-left:7%;">
   <div class="d-flex">
       <div class="toast-body"> 
           {{ session('greentoast') }}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
   </div>
</div>

<!-- <h1> included toast </h1> -->
<div id="notification-toastred"  style="position: fixed; z-index: 100; bottom: 3%; right: 4%;" class="toast align-items-center text-bg-warning border-0" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" data-delay="3000" style="margin-left:7%;">
   <div class="d-flex">
       <div class="toast-body">
           {{ session('redtoast') }}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
   </div>
</div>

<!-- end for show toast -->
<!-- end for show toast -->
<!-- end for show toast -->
<!-- end for show toast -->
<!-- end for show toast -->
<script>
    ////////// show toast start
    var successMessage = "{{ session('greentoast') }}";
    if (successMessage) {
        var toast = new bootstrap.Toast(document.querySelector('#notification-toastgreen'), {
            animation: true,
            autohide: true,
            delay: 3000
        });
        toast.show();
    }

    var failMessage = "{{ session('redtoast') }}";
    if (failMessage) {
        var toast = new bootstrap.Toast(document.querySelector('#notification-toastred'), {
            animation: true,
            autohide: true,
            delay: 3000
        });
        toast.show();
    }
 
    ///////////////// show toast end 
</script>