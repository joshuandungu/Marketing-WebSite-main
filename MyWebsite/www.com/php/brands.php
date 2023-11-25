<!------------- brands --------------->

<div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="imgs/images/hunter-logo.png" onmouseout="pro(this);" onmouseover="pro(this);">
                </div>
                <div class="col-5">
                    <img src="imgs/images/sigma-logo.png" onmouseout="pro(this);" onmouseover="pro(this);">
                </div>
                <div class="col-5">
                    <img src="imgs/images/makita-logo.png" onmouseout="pro(this);" onmouseover="pro(this);">
                </div>
                <div class="col-5">
                <img src="imgs/images/stanley-logo.png" onmouseout="pro(this);" onmouseover="pro(this);">
                </div>
                <div class="col-5">
                    <img src="imgs/images/dewalt-logo.png" onmouseout="pro(this);" onmouseover="pro(this);">
                </div>
            </div>
        </div>
    </div>
    <script >
    
    function pro(img)
    {
        if (img.src.includes('hunter')) {
            if (img.src.includes('pro')) {
                img.src = 'imgs/images/hunter-logo.png';
            }else{
                img.src = 'imgs/images/hunter-pro-logo.png';
            }
        }

        if (img.src.includes('sigma')) {
            if (img.src.includes('pro')) {
                img.src = 'imgs/images/sigma-logo.png';
            }else{
                img.src = 'imgs/images/sigma-pro-logo.png';
            }
        }

        if (img.src.includes('makita')) {
            if (img.src.includes('pro')) {
                img.src = 'imgs/images/makita-logo.png';
            }else{
                img.src = 'imgs/images/makita-pro-logo.png';
            }
        }

        if (img.src.includes('stanley')) {
            if (img.src.includes('pro')) {
                img.src = 'imgs/images/stanley-logo.png';
            }else{
                img.src = 'imgs/images/stanley-pro-logo.png';
            }
        }

        if (img.src.includes('dewalt')) {
            if (img.src.includes('pro')) {
                img.src = 'imgs/images/dewalt-logo.png';
            }else{
                img.src = 'imgs/images/dewalt-pro-logo.png';
            }
        }
    }

    </script>