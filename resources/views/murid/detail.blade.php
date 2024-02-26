<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="block md:flex">
    @include('layouts.navbar')
    <div class="p-5 flex justify-center md:justify-end md:w-full md:h-screen">
        <div class="md:absolute">
            <img src="{{ asset('img/user.jpg') }}" class="hidden md:block rounded-full w-10" alt="">
        </div>
        <div class="w-full md:w-4/5">
            <div>
                <h1 class="text-2xl font-bold text-[#4747F3] ml-2 font-poppins mt-10 md:mt-20">Murid Yang sudah mengerjakan</h1>
                <div class="border-b-2 border-black my-4"></div>
                <div class="w-full bg-gray-200 rounded-md p-2 flex justify-between">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full bg-gray-100 w-10" src="{{ asset('img/user.jpg') }}">
                        <h1>Nama akun</h1>
                    </div>

                    <div class="flex items-center gap-5">
                        <h1>0/100</h1>
                    </div>
                </div>
            </div>

            <div>
                <h1 class="text-2xl font-bold text-[#4747F3] ml-2 font-poppins mt-10">Murid Yang belum mengerjakan</h1>
                <div class="border-b-2 border-black my-4"></div>
                <div class="w-full bg-gray-200 rounded-md p-2 flex justify-between">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full bg-gray-100 w-10" src="{{ asset('img/user.jpg') }}">
                        <h1>Nama akun</h1>
                    </div>

                    <div class="flex items-center gap-5">
                        <h1>0/100</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
    <script>
    const video = document.getElementById('camera');

    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(stream) {
            video.srcObject = stream;
            video.onloadedmetadata = function(e) {
                video.play();
                initQuagga();
            };
        })
        .catch(function(err) {
            console.error("Error accessing the camera: ", err);
        });
    } else {
        alert("Sorry, your browser does not support getUserMedia");
    }

    function initQuagga() {
        Quagga.init({
            inputStream: {
                type: "LiveStream",
                constraints: {
                    facingMode: "environment" // or "user" for front camera
                },
                target: document.querySelector('#camera') // Pass the video element here
            },
            decoder: {
                readers: [
                    "code_128_reader",
                    "ean_reader",
                    "ean_8_reader",
                    "code_39_reader",
                    "code_39_vin_reader",
                    "codabar_reader",
                    "upc_reader",
                    "upc_e_reader",
                    "i2of5_reader"
                ], // Specify barcode formats here
                debug: {
                    showCanvas: true,
                    showPatches: true,
                    showFoundPatches: true,
                    showSkeleton: true,
                    showLabels: true,
                    showPatchLabels: true,
                    showRemainingPatchLabels: true,
                    boxFromPatches: {
                        showTransformed: true,
                        showTransformedBox: true,
                        showBB: true
                    }
                }
            },
            locate: true // Try to locate the barcode in the image
        }, function(err) {
            if (err) {
                console.error(err);
                return;
            }
            Quagga.start();
        });

        Quagga.onDetected(function(result) {
            var code = result.codeResult.code;
            // Do something with the barcode data here
            console.log(code);
            // For example, you could stop Quagga after the first barcode is detected:
            // Quagga.stop();
        });
    }
</script>
</body>
</html>