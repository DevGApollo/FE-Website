<?php 
// 1. Apollo Main Header Include
include("header.php"); 
?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.3.2/iframeResizer.min.js"></script>

<div class="investor-iframe-container" style="width: 100%; min-height: 400px; margin: 0 auto;">
    <iframe 
        id="investorIframe"
        src="https://enchanting-pothos-22be48.netlify.app" 
        style="width: 100%; border: none; overflow: hidden;"
        scrolling="no">
    </iframe>
</div>

<script>
    // Auto adjust height based on React content height
    iFrameResize({ log: false, checkOrigin: false }, '#investorIframe');
</script>
<?php 
// 3. Apollo Main Footer Include
include("footer.php"); 
?>
