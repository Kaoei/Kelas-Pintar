<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
</head>
<body>
    <div id="reader" width="10px"></div>
    <input type="hidden" name="result" id='result'>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      function onScanSuccess(decodedText, decodedResult) {
                // alert(decodedText);
                $('#result').val(decodedText);
                let id = decodedText;            
                // console.log(id);    
                html5QrcodeScanner.clear().then(_ => {
                    let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    console.log(CSRF_TOKEN);
                    $.ajax({
                        url: "{{ route('qrCamera') }}",
                        type: 'POST',            
                        data: {
                            _methode : "POST",
                            _token: CSRF_TOKEN, 
                            qr_code : id
                        },            
                        success: function (response) { 
                            console.log(response);
                            if(response.status == 200){
                                alert('berhasil');
                            }else{
                                alert('gagal');
                            }
                            
                        }
                    });   
                }).catch(error => {
                    alert('something wrong');
                });
                
            }

function onScanFailure(error) {}

let html5QrcodeScanner = new Html5QrcodeScanner(
    "reader",
    { fps: 10, qrbox: { width: 250, height: 250 } },
    /* verbose= */ false
);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);

    </script>
</body>
</html>