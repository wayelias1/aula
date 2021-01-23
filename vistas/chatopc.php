<?php include '../conexion/sesion.php';?>
<!DOCTYPE html>
<html>
<head>
	<?php 
        include "headerchat.php";
    ?>
    <style type="text/css">
    	#navid3{
    		background: #41C7EF;
    	}
    </style>
</head>
<body>
<?php 
        include "navchat.php";
    ?>
    <video autoplay controls style="margin-left: 40%; margin-top: 20px;"></video>
    <script>
        navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);

navigator.getUserMedia (

   // constraints
   {
      video: true,
      audio: true
   },

   // successCallback
   function(localMediaStream) {
      var video = document.querySelector(video);
      video.src = window.URL.createObjectURL(localMediaStream);
   },
   
   // errorCallback
   function(err) {
    console.log("Ocurrió el siguiente error: " + err);
   }

);
    </script>
    <script type="text/javascript">
        if (navigator.mediaDevices && navigator.mediaDevices.enumerateDevices) {
       // Firefox 38+ seems having support of enumerateDevicesx
       navigator.enumerateDevices = function(callback) {
           navigator.mediaDevices.enumerateDevices().then(callback);
       };
}

var MediaDevices = [];
var isHTTPs = location.protocol === 'https:';
var canEnumerate = false;

if (typeof MediaStreamTrack !== 'undefined' && 'getSources' in MediaStreamTrack) {
       canEnumerate = true;
} else if (navigator.mediaDevices && !!navigator.mediaDevices.enumerateDevices) {
       canEnumerate = true;
}

var hasMicrophone = false;
var hasSpeakers = false;
var hasWebcam = false;

var isMicrophoneAlreadyCaptured = false;
var isWebcamAlreadyCaptured = false;

function checkDeviceSupport(callback) {
       if (!canEnumerate) {
           return;
       }

       if (!navigator.enumerateDevices && window.MediaStreamTrack && window.MediaStreamTrack.getSources) {
           navigator.enumerateDevices = window.MediaStreamTrack.getSources.bind(window.MediaStreamTrack);
       }

       if (!navigator.enumerateDevices && navigator.enumerateDevices) {
           navigator.enumerateDevices = navigator.enumerateDevices.bind(navigator);
       }

       if (!navigator.enumerateDevices) {
           if (callback) {
               callback();
           }
           return;
       }

       MediaDevices = [];
       navigator.enumerateDevices(function(devices) {
           devices.forEach(function(_device) {
               var device = {};
               for (var d in _device) {
                   device[d] = _device[d];
               }

               if (device.kind === 'audio') {
                   device.kind = 'audioinput';
               }

               if (device.kind === 'video') {
                   device.kind = 'videoinput';
               }

               var skip;
               MediaDevices.forEach(function(d) {
                   if (d.id === device.id && d.kind === device.kind) {
                       skip = true;
                   }
               });

               if (skip) {
                   return;
               }

               if (!device.deviceId) {
                   device.deviceId = device.id;
               }

               if (!device.id) {
                   device.id = device.deviceId;
               }

               if (!device.label) {
                   device.label = 'Please invoke getUserMedia once.';
                   if (!isHTTPs) {
                       device.label = 'HTTPs is required to get label of this ' + device.kind + ' device.';
                   }
               } else {
                   if (device.kind === 'videoinput' && !isWebcamAlreadyCaptured) {
                       isWebcamAlreadyCaptured = true;
                   }

                   if (device.kind === 'audioinput' && !isMicrophoneAlreadyCaptured) {
                       isMicrophoneAlreadyCaptured = true;
                   }
               }

               if (device.kind === 'audioinput') {
                   hasMicrophone = true;
               }

               if (device.kind === 'audiooutput') {
                   hasSpeakers = true;
               }

               if (device.kind === 'videoinput') {
                   hasWebcam = true;
               }

               // there is no 'videoouput' in the spec.

               MediaDevices.push(device);
           });

           if (callback) {
               callback();
           }
       });
}

// check for microphone/camera support!
checkDeviceSupport(function() {
       document.write('hasWebCam: ', hasWebcam, '<br>');
       document.write('hasMicrophone: ', hasMicrophone, '<br>');
       document.write('isMicrophoneAlreadyCaptured: ', isMicrophoneAlreadyCaptured, '<br>');
       document.write('isWebcamAlreadyCaptured: ', isWebcamAlreadyCaptured, '<br>');
});
    </script>
    <!--<div style="margin-left: 30%;"><img style="width: 50%;" src="../img/imagen.jpg"></div>-->
</body>
</html>