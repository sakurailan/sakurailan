<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://mistic100.github.io/Photo-Sphere-Viewer/dist/Photo-Sphere-Viewer/dist/photo-sphere-viewer.min.css">
  <script src="http://mistic100.github.io/Photo-Sphere-Viewer/dist/three.js/three.min.js"></script>
  <script src="http://mistic100.github.io/Photo-Sphere-Viewer/dist/Photo-Sphere-Viewer/dist/photo-sphere-viewer.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<style>
#photosphere {
    width: 640px ! important;
    height: 480px ! important;
}
</style>
</head>
<body>

<div id="photosphere"></div>

<script>
  var PSV = new PhotoSphereViewer({
    panorama: 'https://lh6.googleusercontent.com/-CJKsUPt-aKo/UWrB_g8gU-I/AAAAAAAAEBs/R3d4-M0N2Gc/w718-h248/2013+-+1',
    container: document.getElementById('photosphere'),
    navbar: true,
    caption: '<b>蘭庭民宿</b>1樓',
    default_fov: 70,
  });
</script>

<php>
//g+ photosphere embed
add_filter('the_content', 'gplusphotosphere');
function gplusphotosphere($content) {
$content = preg_replace('#(?<=[^=\"\'])\[photosphere https(.*)\]#','
<div align="center" style="border:1px solid #000;">
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> 
<g:panoembed imageurl="https\\1" fullsize="4096,2048" croppedsize="4096,1380" offset="0,480" displaysize="550,400"/> 
<script> gapi.panoembed.go(); </script></div>',$content);
$content = preg_replace('#(?<=[^=\"\'])\[ps https(.*)\]#','
<div align="center" style="border:1px solid #000;">
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> 
<g:panoembed imageurl="https\\1" fullsize="4096,2048" croppedsize="4096,1380" offset="0,480" displaysize="550,400"/> 
<script> gapi.panoembed.go(); </script></div>',$content);
return $content;
}
</php>
  
</body>
</html>
