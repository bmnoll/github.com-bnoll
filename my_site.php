<!DOCTYPE html> 
<html> 
<head>
</head>
<body> 
<div class="vidBox" id="box">
    <object data="C:\xampp\htdocs\Assets\eye stalk shorter_1.wmv" type="video/x-ms-wmv"  width="100%" height="100%">
        <param name="src" value="C:\xampp\htdocs\Assets\eye stalk shorter_1.wmv">
        <param name="autoStart" value="1">
         alt : <a href="C:\xampp\htdocs\Assets\eye stalk shorter_1.wmv">Scanning</a>
        </object>
    <div id="other" style="display:none; width:400px; height:300px; background-color:#f0f0f0">
        This appears after the video ends
    
    
    
    
    </div>
</div>
<script>
    var vid=document.getElementById('video1');
    vid.addEventListener("ended", hideVideo, false);

    function hideVideo() {
        var vid=document.getElementById('video1');
        var other=document.getElementById('other');
        vid.removeEventListener("ended", hideVideo, false);
        vid.style.display='none';
        other.style.display='block';
    }
</script>
</body> 
</html>