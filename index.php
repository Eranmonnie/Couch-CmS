<?php
require_once ('couch/cms.php');
?>

<cms:template title='Home' icon='home'>
    <cms:editable name="body" label="Body" type="richtext" />
    <cms:editable name="excerpt" label="Excerpt" type="textarea" />
</cms:template>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main">

    
    <div class="nav">
        <a href="#"><img src="./assets/Rayvalley favicon 1.png" alt="logo" class="logo"></a>
        <ul class="navigation">
            <a href="#"><li class="nav-text">Home</li></a>
            <a href="#"><li class="nav-text">About</li></a>
            <a href="#"><li class="nav-text">Contact Us</li></a>
            
        </ul>
        <div class="section-2-final">
            <a href="#" class="btn-login">
                <span class="btn-text">Join Now</span>
            </a>

        </div>
    </div>
    <div class="section-2">
        <div class="section-2-word">
            <h2 class="intro-text" style="margin-bottom: 0; text-align: center;">Empowering Farmers</h2>
            <h2 class="intro-text" style="margin-top: 0; text-align: center;">with techonology ☘️</h2>
            <div class="section-2-next">
                <p class="section-2-content">We help realize your dreams of investing in Agriculture, let’s start with small things that can change the world, so we can live happy and abundant lives.</p>
                <!-- <p class="section-2-content"> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
                <div class="section-2-final">
                    <a href="#" class="btn-login">
                        <span class="btn-text">Join Now</span>
                    </a>
                    <a href="#" class="link">See how it works➜</a>
        
                </div>
                
            </div>
            
        </div>
        <!-- <img src="./corn-isolated 1.png" alt="corn" class="corn-img"> -->
        
    </div>

    <div class="section-3">
        <div class="heading-3">
            <h3 class="section-3-header">
                Steps to Start Your Farm Off Right
            </h3>
            <h3 class="section-3-header-content">
                Follow the instructions for more
            </h3>
        </div>
        <div class="section-3-carousel">
            <div class="section-3-carousel-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="83" viewBox="0 0 70 83" fill="none">
                    <g clip-path="url(#clip0_7_45)">
                      <path d="M14.1548 79.265C20.9133 80.7313 27.8023 81.5191 34.7187 81.6167C41.635 81.5191 48.524 80.7313 55.2825 79.265C58.2137 81.5827 61.8193 82.8931 65.5603 83C67.2075 82.9789 68.6353 81.8591 69.0423 80.2693C70.1715 76.9895 68.8103 71.1531 65.4173 67.9908C66.986 59.2422 67.867 50.3851 68.052 41.5C67.8688 32.615 66.9897 23.7579 65.4228 15.0092C68.8158 11.8469 70.177 6.0175 69.0478 2.7307C68.6408 1.14086 67.213 0.0211004 65.5658 0C61.825 0.106947 58.2192 1.41727 55.2882 3.735C48.5278 2.26829 41.6368 1.48046 34.7187 1.38333C27.8023 1.48083 20.9133 2.26866 14.1548 3.735C11.2222 1.41615 7.61435 0.105761 3.87147 0C2.2243 0.0211004 0.796489 1.14086 0.389514 2.7307C-0.739653 6.01058 0.621459 11.8469 4.01452 15.0092C2.44762 23.7579 1.56856 32.615 1.38535 41.5C1.56856 50.385 2.44762 59.2421 4.01452 67.9908C0.621459 71.1531 -0.739653 76.9895 0.389514 80.2693C0.796489 81.8591 2.2243 82.9789 3.87147 83C7.61435 82.8943 11.2222 81.5839 14.1548 79.265ZM3.0173 79.3688C2.51875 76.654 3.10162 73.8524 4.6423 71.5584C4.7298 72.0287 4.81313 72.4784 4.89368 72.903C4.97847 73.3956 5.3234 73.8044 5.79602 73.9723C6.26863 74.1401 6.79542 74.0411 7.17405 73.7131C7.55267 73.3851 7.72423 72.8793 7.62285 72.3898C5.59528 62.2092 4.43788 51.8755 4.16313 41.5C4.43765 31.1232 5.59503 20.7882 7.62285 10.606C7.73688 9.86792 7.24215 9.17293 6.5051 9.03581C5.76807 8.89871 5.05482 9.36901 4.89368 10.0983C4.81313 10.523 4.7298 10.9726 4.6423 11.4429C3.10162 9.14897 2.51875 6.34747 3.0173 3.63263C3.31313 2.76667 3.6909 2.76667 3.87147 2.76667C6.18145 2.85566 8.44022 3.47086 10.4742 4.565L10.0576 4.66598C9.3327 4.86556 8.899 5.60351 9.07918 6.33076C9.25937 7.05799 9.98798 7.51025 10.7229 7.35103C18.5728 5.37669 26.6237 4.3027 34.7187 4.15C42.8138 4.30079 50.8652 5.37292 58.7158 7.3455C59.4508 7.50473 60.1793 7.05244 60.3595 6.32521C60.5398 5.59798 60.106 4.86001 59.3812 4.66045L58.9645 4.55947C60.9987 3.46746 63.2568 2.85417 65.5658 2.76667C65.7465 2.76667 66.1215 2.76667 66.42 3.6271C66.9187 6.34195 66.3357 9.14345 64.795 11.4374C64.7075 10.9671 64.6242 10.5175 64.5437 10.0928C64.4588 9.60021 64.114 9.19147 63.6413 9.02358C63.1687 8.85569 62.642 8.95475 62.2633 9.28272C61.8847 9.61069 61.7132 10.1166 61.8145 10.606C63.8423 20.7882 64.9997 31.1232 65.2742 41.5C64.9997 51.8768 63.8423 62.2118 61.8145 72.3939C61.7132 72.8835 61.8847 73.3893 62.2633 73.7173C62.642 74.0453 63.1687 74.1442 63.6413 73.9764C64.114 73.8086 64.4588 73.3997 64.5437 72.9072C64.6242 72.4826 64.7075 72.0329 64.795 71.5626C66.3357 73.8566 66.9187 76.6581 66.42 79.3729C66.1242 80.2333 65.7465 80.2333 65.5658 80.2333C63.256 80.1443 60.9972 79.5291 58.9632 78.435L59.3798 78.3341C60.1047 78.1344 60.5383 77.3965 60.3582 76.6693C60.178 75.942 59.4493 75.4898 58.7145 75.649C50.8645 77.6233 42.8137 78.6973 34.7187 78.85C26.6235 78.6993 18.5722 77.6271 10.7215 75.6545C10.2343 75.5204 9.71252 75.6605 9.35897 76.02C9.0054 76.3798 8.87592 76.9023 9.02088 77.3846C9.16583 77.8668 9.56234 78.2325 10.0562 78.3396L10.4729 78.4405C8.43877 79.5326 6.18053 80.1458 3.87147 80.2333C3.6909 80.2333 3.31313 80.2333 3.0173 79.3729V79.3688Z" fill="#53C351"/>
                      <path d="M13.8854 41.5C13.8854 52.96 23.2127 62.25 34.7187 62.25C46.2247 62.25 55.552 52.96 55.552 41.5C55.552 30.04 46.2247 20.75 34.7187 20.75C23.2182 20.7629 13.8984 30.0455 13.8854 41.5ZM34.7187 59.4833C29.8562 59.4838 25.2004 57.5243 21.8117 54.0509C22.5985 53.1087 23.766 52.5646 24.9965 52.5667C25.9347 52.5692 26.8432 52.8952 27.5674 53.4893C27.8989 53.7568 28.3354 53.8575 28.7512 53.7627C29.167 53.668 29.516 53.3883 29.6979 53.0038C30.5377 51.2303 32.2524 50.0276 34.2117 49.8373C34.0194 50.5779 33.7652 51.3011 33.452 51.9995C33.2412 52.4514 33.2907 52.9814 33.5817 53.3868C33.8725 53.7923 34.36 54.0104 34.8575 53.9581C35.355 53.9057 35.7859 53.5909 35.9854 53.1338C36.3987 52.2166 36.7284 51.2643 36.97 50.2884C38.1877 50.8373 39.1694 51.8 39.7395 53.0038C39.9214 53.3883 40.2704 53.668 40.6862 53.7627C41.102 53.8575 41.5385 53.7568 41.87 53.4893C42.5944 52.8952 43.5027 52.5692 44.4409 52.5667C45.6714 52.5646 46.8389 53.1087 47.6257 54.0509C44.237 57.5243 39.5812 59.4838 34.7187 59.4833ZM35.7229 36.9931C35.6309 35.5408 36.1164 34.1107 37.0742 33.0119C38.4215 31.8458 40.952 32.1404 41.9909 32.3202C42.0344 32.3429 42.0665 32.3825 42.0799 32.4294C42.1174 33.4726 42.059 36.0261 40.7382 37.1744C39.4174 38.3224 36.8882 38.0402 35.9409 37.884L35.7229 36.9931ZM33.2437 38.5439C32.345 39.1996 30.3007 40.4874 28.6604 40.0877C27.08 39.4096 25.855 38.1061 25.2799 36.4909C25.2685 36.4353 25.28 36.3776 25.3117 36.3304C26.458 35.3985 27.8487 34.8139 29.3187 34.6455C29.5467 34.6445 29.7739 34.6714 29.995 34.7259C31.3409 35.276 32.4232 36.3198 33.0187 37.6418L33.2437 38.5439ZM52.7742 41.5C52.7749 45.231 51.6019 48.8684 49.42 51.9012C48.1164 50.5555 46.3185 49.7968 44.4409 49.8C43.408 49.8028 42.3894 50.0394 41.4617 50.4917C40.4559 49.1108 39.0507 48.0688 37.434 47.5051C37.614 45.2418 37.4165 42.9645 36.8492 40.7655C37.127 40.7849 37.4049 40.8098 37.7049 40.8098C39.459 40.8914 41.1842 40.3426 42.5659 39.2631C44.7062 37.3928 44.927 34.1213 44.8575 32.3298C44.7894 30.9776 43.7972 29.8491 42.4604 29.6033C40.6992 29.2935 37.4187 29.05 35.2465 30.9354C34.4304 31.6834 33.8267 32.6324 33.4965 33.6869C32.7182 32.8987 31.7424 32.3323 30.67 32.0463C28.059 31.3864 25.4104 32.8086 23.6492 34.1213C22.5639 34.9593 22.1999 36.4309 22.77 37.675C23.7132 39.6504 25.3867 42.1404 27.9979 42.7823C28.4365 42.8894 28.8865 42.9432 29.3382 42.9429C31.0502 42.8579 32.703 42.2925 34.1062 41.3119C34.5947 43.1814 34.7822 45.1163 34.6617 47.0444C32.0074 47.0739 29.5247 48.3576 27.9729 50.5027C27.047 50.047 26.0292 49.8066 24.9965 49.8C23.1189 49.7968 21.321 50.5555 20.0174 51.9012C15.5024 45.5718 15.5786 37.0703 20.2062 30.822C24.8337 24.5738 32.9664 21.9913 40.371 24.4191C47.7755 26.8468 52.7779 33.7357 52.7742 41.5Z" fill="#53C351"/>
                      <path d="M11.2465 17.9044C18.7874 15.2511 26.7212 13.875 34.7187 13.8333C42.7162 13.875 50.65 15.2511 58.1909 17.9044C58.6589 18.0691 59.1794 17.9725 59.5564 17.6511C59.9335 17.3299 60.1099 16.8326 60.0189 16.3467C59.928 15.8608 59.5839 15.4601 59.1159 15.2955C43.342 9.68335 26.1037 9.68335 10.3298 15.2955C9.60648 15.5499 9.22716 16.3402 9.4826 17.0607C9.73803 17.7811 10.5315 18.1589 11.2548 17.9044H11.2465Z" fill="#53C351"/>
                      <path d="M10.3256 67.7044C18.1563 70.4846 26.4055 71.9147 34.7187 71.9333C43.0318 71.9147 51.2812 70.4846 59.1117 67.7044C59.835 67.4501 60.2143 66.6598 59.959 65.9393C59.7035 65.2189 58.91 64.8411 58.1867 65.0956C50.6472 67.7484 42.7147 69.1245 34.7187 69.1667C26.7212 69.125 18.7873 67.7489 11.2465 65.0956C10.5231 64.8411 9.72967 65.2189 9.47423 65.9393C9.2188 66.6598 9.59812 67.4501 10.3215 67.7044H10.3256Z" fill="#53C351"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_7_45">
                        <rect width="70" height="83" fill="white"/>
                      </clipPath>
                    </defs>
                  </svg>
                  <p class="paragraph-center1">Innoculate</p>
                  <p class="paragraph-center2">"Sed ut perspiciatis unde 
                    omnis iste natus error sit voluptatem 
                    accusantium doloremque </p>
            </div>

            <div class="section-3-carousel-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="107" height="86" viewBox="0 0 107 86" fill="none">
                    <g clip-path="url(#clip0_7_2)">
                      <path d="M81.7954 36.1501C81.793 36.1322 81.7914 36.1142 81.7885 36.0966C81.7745 36.0089 81.7559 35.9213 81.7295 35.8348L81.7286 35.8321C81.7039 35.7512 81.6723 35.6714 81.6368 35.5925C81.6266 35.5699 81.6156 35.5483 81.6045 35.5261C81.5766 35.4692 81.5453 35.4131 81.5113 35.3579C81.4967 35.3338 81.4823 35.3097 81.4665 35.286C81.4578 35.2731 81.4511 35.2598 81.4421 35.2471C81.4064 35.196 81.367 35.148 81.3274 35.1004C81.3199 35.0914 81.3139 35.0822 81.3063 35.0736C81.2459 35.003 81.1805 34.9377 81.112 34.8758C81.0992 34.8641 81.085 34.8532 81.0718 34.8419C81.0122 34.7904 80.9504 34.7421 80.8861 34.6967C80.8697 34.6852 80.8536 34.6737 80.8367 34.6626C80.7506 34.6052 80.6617 34.5519 80.569 34.5054L44.9058 16.3102L65.4394 4.70456L99.8639 22.2675L85.3659 30.4615C84.2345 31.1009 83.8948 32.4425 84.6072 33.4578C85.3195 34.4734 86.814 34.7782 87.9455 34.1387L105.865 24.0109C106.586 23.6039 107.015 22.8872 106.995 22.1232C106.976 21.3593 106.512 20.6608 105.771 20.2833L66.5719 0.283855C65.7965 -0.112022 64.8411 -0.0924668 64.0859 0.334046L38.921 14.5572C38.9158 14.56 38.9105 14.563 38.9055 14.5659L26.3306 21.6732C26.3247 21.6765 26.3188 21.6797 26.3133 21.683L1.13123 35.9158C0.410823 36.3228 -0.018371 37.0397 0.000994868 37.8035C0.0201187 38.5676 0.484656 39.2659 1.22491 39.6434L40.4247 59.6429C40.7961 59.8326 41.2086 59.9269 41.6207 59.9269C42.0694 59.9269 42.5171 59.8149 42.9106 59.5927L60.8301 49.4646C61.9616 48.8253 62.3012 47.4837 61.5888 46.4684C60.8769 45.4527 59.3818 45.1478 58.2507 45.7874L41.5572 55.2223L7.13269 37.6591L27.6667 26.0532L64.3818 44.785V69.5941C64.3818 70.3855 64.8609 71.1139 65.6327 71.4964C65.9975 71.6772 66.4003 71.7668 66.8026 71.7668C67.2513 71.7668 67.6992 71.655 68.0923 71.4326L80.6834 64.3163C81.3874 63.9185 81.8145 63.2243 81.8145 62.4776V36.4045C81.8145 36.3918 81.8121 36.3795 81.8116 36.3666C81.8101 36.2946 81.8047 36.2225 81.7954 36.1501ZM69.2232 65.6586V43.5212C69.2232 42.7396 68.7557 42.0186 67.9986 41.6324L32.3144 23.4266L40.2576 18.937L74.6818 36.5001L71.6678 38.2036C70.5362 38.8428 70.1968 40.1845 70.9092 41.1998C71.3691 41.856 72.1556 42.2152 72.96 42.2152C73.4006 42.2152 73.8468 42.1072 74.2472 41.8808L76.9728 40.3405V61.2784L69.2232 65.6586Z" fill="#53C351"/>
                      <path d="M103.286 29.0245L85.3663 39.1524C84.2349 39.7917 83.8952 41.1333 84.6078 42.1486C85.0677 42.8048 85.8542 43.1639 86.6586 43.1639C87.0992 43.1639 87.5455 43.0561 87.9459 42.8295L105.866 32.7017C106.997 32.0625 107.337 30.7207 106.624 29.7054C105.912 28.6899 104.417 28.3848 103.286 29.0245Z" fill="#53C351"/>
                      <path d="M58.2506 54.4782L41.5571 63.9131L3.61731 44.5568C2.45586 43.9641 0.97727 44.3282 0.316656 45.3719C-0.34396 46.4151 0.0624789 47.7415 1.22491 48.3346L40.4246 68.3339C40.796 68.5236 41.2085 68.6178 41.6208 68.6178C42.0693 68.6178 42.5171 68.506 42.9105 68.2836L60.8302 58.1556C61.9616 57.5165 62.3013 56.1747 61.5889 55.1594C60.877 54.1435 59.3819 53.8386 58.2506 54.4782Z" fill="#53C351"/>
                      <path d="M103.286 37.7157L85.3663 47.8435C84.2349 48.4827 83.8952 49.8245 84.6078 50.8398C85.0677 51.496 85.8542 51.8551 86.6586 51.8551C87.0992 51.8551 87.5455 51.7471 87.9459 51.5207L105.866 41.3927C106.997 40.7535 107.337 39.4119 106.624 38.3966C105.912 37.3808 104.417 37.076 103.286 37.7157Z" fill="#53C351"/>
                      <path d="M58.2506 63.1692L41.5571 72.6043L3.61731 53.2478C2.45586 52.6551 0.97727 53.0192 0.316656 54.063C-0.34396 55.1062 0.0624789 56.4327 1.22491 57.0256L40.4246 77.025C40.796 77.2146 41.2085 77.309 41.6208 77.309C42.0693 77.309 42.5171 77.197 42.9105 76.9748L60.8302 66.8466C61.9616 66.2075 62.3013 64.8657 61.5889 63.8504C60.877 62.8344 59.3819 62.5296 58.2506 63.1692Z" fill="#53C351"/>
                      <path d="M103.286 46.4066L85.3663 56.5345C84.2349 57.1737 83.8952 58.5154 84.6078 59.5307C85.0677 60.1869 85.8542 60.5461 86.6586 60.5461C87.0992 60.5461 87.5455 60.438 87.9459 60.2117L105.866 50.0838C106.997 49.4445 107.337 48.1029 106.624 47.0876C105.912 46.0721 104.417 45.7671 103.286 46.4066Z" fill="#53C351"/>
                      <path d="M58.2506 71.8604L41.5571 81.2953L3.61731 61.9387C2.45586 61.346 0.97727 61.7103 0.316656 62.754C-0.34396 63.7972 0.0624789 65.1237 1.22491 65.7165L40.4246 85.716C40.796 85.9057 41.2085 86 41.6208 86C42.0693 86 42.5171 85.888 42.9105 85.6658L60.8302 75.5378C61.9616 74.8984 62.3013 73.5568 61.5889 72.5415C60.877 71.5257 59.3819 71.2207 58.2506 71.8604Z" fill="#53C351"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_7_2">
                        <rect width="107" height="86" fill="white"/>
                      </clipPath>
                    </defs>
                  </svg>
                  <p class="paragraph-center1">Innoculate</p>
                  <p class="paragraph-center2">"Sed ut perspiciatis unde 
                    omnis iste natus error sit voluptatem 
                    accusantium doloremque </p>
            </div>

            <div class="section-3-carousel-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88" fill="none">
                    <path d="M61.7889 45.0357C61.643 44.5373 61.2683 44.1303 60.7704 43.948C60.6699 43.9115 59.8552 43.6231 58.5901 43.4381C63.9955 37.6863 62.2108 30.9665 61.7889 29.6541C61.643 29.1556 61.2683 28.7486 60.7704 28.5665C60.5384 28.4815 56.4924 27.0549 51.8829 28.6592C52.1432 27.5914 52.2955 26.4176 52.2955 25.1294C52.2955 16.8882 46.0546 13.2659 44.8021 12.6229C44.3466 12.3733 43.7934 12.3505 43.3127 12.574C43.0029 12.7179 35.7224 16.2022 35.7224 25.1294C35.7224 26.4201 35.8752 27.5965 36.1365 28.666C31.5189 27.051 27.4621 28.4814 27.2297 28.5665C26.7319 28.7486 26.3572 29.1556 26.2113 29.6541C25.7894 30.9665 24.0047 37.6863 29.4101 43.4381C28.1449 43.6231 27.3303 43.9115 27.2297 43.948C26.7319 44.1303 26.357 44.5375 26.2111 45.0359C25.7804 46.3757 23.9285 53.3505 29.756 59.178C33.1284 62.5504 36.8713 63.3549 39.6755 63.3549C40.7137 63.3549 41.6211 63.2444 42.3356 63.1131V73.9269C42.3356 74.8394 43.0755 75.5795 43.9883 75.5795C44.901 75.5795 45.6409 74.8394 45.6409 73.9269V63.109C46.3586 63.2419 47.2751 63.3547 48.3245 63.3547C51.1285 63.3547 54.8719 62.5499 58.244 59.178C64.0716 53.3502 62.2196 46.3755 61.7889 45.0357ZM42.3356 57.9614C42.2989 58.7116 42.1936 59.3419 42.0929 59.7953C40.3265 60.1878 35.9067 60.6542 32.0934 56.8407C28.3373 53.0851 28.731 48.7385 29.1468 46.8419C30.2576 46.6004 32.4251 46.3313 34.8246 47.1101C34.9827 47.1693 35.1401 47.2252 35.2968 47.2771C36.5677 47.7591 37.8872 48.5457 39.1378 49.7961C41.5208 52.1791 42.2324 54.7986 42.3356 56.8587V57.9614ZM42.3356 42.58C42.2989 43.3302 42.1936 43.9607 42.0929 44.4138C40.9985 44.6573 38.8853 44.9274 36.5291 44.1921C36.2903 44.1 36.0529 44.0162 35.817 43.9403C34.5845 43.4536 33.3082 42.6741 32.0933 41.4592C28.3373 37.7034 28.731 33.3569 29.1468 31.4605C30.9117 31.0769 35.344 30.6209 39.1378 34.4148C39.1619 34.439 39.1837 34.4632 39.2074 34.4872C39.3522 34.6498 39.4978 34.8053 39.643 34.9548C41.6209 37.1876 42.2402 39.5717 42.3356 41.4774V42.58ZM44.0115 34.288C43.4937 33.9558 42.7473 33.4083 41.9892 32.6169C41.9119 32.5321 41.8337 32.4473 41.7535 32.3628C40.3725 30.8291 39.0275 28.4763 39.0275 25.1294C39.0275 19.7423 42.4749 16.9473 44.0005 15.9741C45.6343 17.0195 48.9899 19.8147 48.9899 25.1294C48.9899 28.2876 47.8048 30.5538 46.5171 32.0855C46.2494 32.3535 45.9989 32.6241 45.7627 32.8963C45.102 33.5387 44.4691 33.9966 44.0115 34.288ZM45.6512 42.0444C45.6488 40.1043 46.1507 37.5367 48.2057 35.1255C48.4491 34.8835 48.6938 34.6233 48.9365 34.3433C52.7287 30.6132 57.0971 31.0689 58.8525 31.4573C59.2685 33.352 59.6647 37.7012 55.9066 41.4592C54.6939 42.672 53.4201 43.4508 52.1897 43.9381C51.9499 44.0151 51.7085 44.1002 51.4654 44.1939C49.1096 44.9281 46.9979 44.6569 45.9076 44.4143C45.7854 43.8634 45.6557 43.0545 45.651 42.0865C45.651 42.0725 45.6512 42.0584 45.6512 42.0444ZM55.9066 56.8407C52.0926 60.6548 47.6726 60.1876 45.9103 59.7967C45.5261 58.0385 45.0614 53.5969 48.8622 49.7961C50.0783 48.5801 51.3556 47.8006 52.5891 47.3137C52.8245 47.2381 53.0613 47.1548 53.2994 47.0629C55.6505 46.3291 57.7588 46.5968 58.8525 46.8385C59.2685 48.7335 59.6647 53.0828 55.9066 56.8407Z" fill="#53C351"/>
                    <path d="M52.8178 2.613C49.9371 2.0022 46.9703 1.69232 44 1.69232C32.6993 1.69232 22.0748 6.09298 14.084 14.084C6.09314 22.0748 1.69231 32.6993 1.69231 44C1.69231 53.4165 4.86043 62.6083 10.6324 70.0094C9.98313 71.014 9.6336 72.184 9.6336 73.4086C9.6336 75.086 10.2869 76.6631 11.473 77.8494C12.6591 79.0354 14.2362 79.6888 15.9136 79.6888C17.591 79.6888 19.1683 79.0354 20.3542 77.8494C21.5405 76.6631 22.1938 75.086 22.1938 73.4086C22.1938 71.7312 21.5404 70.1543 20.3542 68.968C19.1683 67.7817 17.591 67.1284 15.9136 67.1284C14.9194 67.1284 13.961 67.3596 13.0979 67.7937C7.86691 61.0033 4.99759 52.6039 4.99759 44C4.99759 22.494 22.494 4.9976 44 4.9976C46.7404 4.9976 49.4763 5.2832 52.1322 5.84641C53.0256 6.03563 53.9024 5.46531 54.0917 4.57255C54.2811 3.67963 53.7108 2.80241 52.8178 2.613ZM13.8102 71.3051C14.3901 70.7249 15.1518 70.435 15.9136 70.435C16.6755 70.435 17.4372 70.7251 18.0172 71.3051C18.579 71.8667 18.8884 72.6139 18.8884 73.4084C18.8884 74.2031 18.579 74.9501 18.0172 75.512C16.8573 76.6721 14.97 76.6719 13.8102 75.512C13.2483 74.9503 12.9389 74.2031 12.9389 73.4084C12.9389 72.6139 13.2483 71.8669 13.8102 71.3051Z" fill="#53C351"/>
                    <path d="M77.3675 17.9906C78.0169 16.9861 78.3663 15.816 78.3663 14.5914C78.3663 12.914 77.7131 11.3368 76.527 10.1507C75.3408 8.96447 73.7638 8.31134 72.0864 8.31134C70.409 8.31134 68.8317 8.96464 67.6457 10.1507C66.4596 11.3368 65.8062 12.914 65.8062 14.5914C65.8062 16.2688 66.4596 17.8459 67.6457 19.0321C68.8317 20.2184 70.409 20.8714 72.0864 20.8714C73.0808 20.8714 74.0389 20.6403 74.9022 20.2062C80.1331 26.9967 83.0024 35.3962 83.0024 44C83.0024 65.506 65.506 83.0025 44 83.0025C41.6864 83.0025 39.3685 82.7985 37.1104 82.3961C36.2123 82.2362 35.3535 82.8344 35.1936 83.7332C35.0335 84.6318 35.632 85.49 36.5305 85.6501C38.9796 86.0864 41.4927 86.3077 44 86.3077C55.3007 86.3077 65.9252 81.9069 73.9161 73.9161C81.9072 65.9256 86.3077 55.3007 86.3077 44C86.3077 34.5835 83.1395 25.3918 77.3675 17.9906ZM74.1901 16.6949C73.6282 17.2568 72.8811 17.5662 72.0865 17.5662C71.292 17.5662 70.5447 17.257 69.983 16.6949C68.8231 15.535 68.8231 13.6479 69.983 12.4879C70.5447 11.926 71.292 11.6166 72.0865 11.6166C72.8811 11.6166 73.6281 11.926 74.1901 12.4879C74.7519 13.0496 75.0613 13.7968 75.0613 14.5914C75.0613 15.386 74.7519 16.133 74.1901 16.6949Z" fill="#53C351"/>
                    <path d="M29.4788 80.2098L28.8549 81.7402L29.4743 80.2079C28.6276 79.8663 27.6648 80.2746 27.3227 81.1208C26.9806 81.9669 27.3893 82.9302 28.2355 83.2724L28.2864 83.2927C28.4814 83.3671 28.6819 83.4025 28.8792 83.4025C29.545 83.4025 30.1742 82.9996 30.426 82.3423C30.7526 81.4897 30.3312 80.5362 29.4788 80.2098Z" fill="#53C351"/>
                    <path d="M59.8363 4.7568L59.8068 4.74508C58.9595 4.40595 57.9978 4.81828 57.6586 5.66576C57.3195 6.51323 57.7319 7.47473 58.5792 7.81387L58.5982 7.82147C58.8011 7.90345 59.0104 7.94212 59.2167 7.94212C59.8705 7.94212 60.4895 7.55158 60.7496 6.90822C61.0915 6.06189 60.6826 5.09873 59.8363 4.7568Z" fill="#53C351"/>
                    <path d="M61.7889 45.0357C61.643 44.5373 61.2683 44.1303 60.7704 43.948C60.6699 43.9115 59.8552 43.6231 58.5901 43.4381C63.9955 37.6863 62.2107 30.9665 61.7889 29.6541C61.643 29.1556 61.2683 28.7486 60.7704 28.5665C60.5384 28.4815 56.4924 27.0549 51.8829 28.6592C52.1432 27.5914 52.2955 26.4176 52.2955 25.1294C52.2955 16.8882 46.0546 13.2659 44.8021 12.6229C44.3466 12.3733 43.7934 12.3505 43.3127 12.574C43.0029 12.7179 35.7224 16.2022 35.7224 25.1294C35.7224 26.4201 35.8752 27.5965 36.1365 28.666C31.5189 27.051 27.4621 28.4814 27.2297 28.5665C26.7319 28.7486 26.3572 29.1556 26.2113 29.6541C25.7894 30.9665 24.0047 37.6863 29.4101 43.4381C28.1449 43.6231 27.3303 43.9115 27.2297 43.948C26.7319 44.1303 26.357 44.5375 26.2111 45.0359C25.7804 46.3757 23.9285 53.3505 29.756 59.178C33.1284 62.5504 36.8713 63.3549 39.6755 63.3549C40.7137 63.3549 41.6211 63.2444 42.3356 63.1131V73.9269C42.3356 74.8394 43.0755 75.5795 43.9883 75.5795C44.901 75.5795 45.6409 74.8394 45.6409 73.9269V63.109C46.3586 63.2419 47.2751 63.3547 48.3245 63.3547C51.1285 63.3547 54.8719 62.5499 58.244 59.178C64.0716 53.3502 62.2195 46.3755 61.7889 45.0357ZM42.3356 57.9614C42.2989 58.7116 42.1936 59.3419 42.0929 59.7953C40.3265 60.1878 35.9067 60.6542 32.0934 56.8407C28.3373 53.0851 28.731 48.7385 29.1468 46.8419C30.2576 46.6004 32.4251 46.3313 34.8246 47.1101C34.9827 47.1693 35.1401 47.2252 35.2968 47.2771C36.5677 47.7591 37.8872 48.5457 39.1378 49.7961C41.5208 52.1791 42.2324 54.7986 42.3356 56.8587V57.9614ZM42.3356 42.58C42.2989 43.3302 42.1936 43.9607 42.0929 44.4138C40.9985 44.6573 38.8853 44.9274 36.5291 44.1921C36.2903 44.1 36.0529 44.0162 35.817 43.9403C34.5845 43.4535 33.3082 42.6741 32.0933 41.4592C28.3373 37.7034 28.731 33.3569 29.1468 31.4605C30.9117 31.0769 35.344 30.6209 39.1378 34.4148C39.1619 34.439 39.1837 34.4632 39.2074 34.4872C39.3522 34.6498 39.4978 34.8053 39.643 34.9548C41.6209 37.1876 42.2402 39.5717 42.3356 41.4774V42.58ZM44.0115 34.288C43.4937 33.9558 42.7473 33.4083 41.9892 32.6169C41.9119 32.5321 41.8337 32.4473 41.7535 32.3628C40.3725 30.8291 39.0275 28.4763 39.0275 25.1294C39.0275 19.7423 42.4749 16.9473 44.0005 15.9741C45.6343 17.0195 48.9899 19.8147 48.9899 25.1294C48.9899 28.2876 47.8048 30.5538 46.5171 32.0855C46.2494 32.3535 45.9989 32.6241 45.7627 32.8963C45.102 33.5387 44.4691 33.9966 44.0115 34.288ZM45.6512 42.0444C45.6488 40.1043 46.1507 37.5367 48.2057 35.1255C48.4491 34.8835 48.6938 34.6233 48.9365 34.3433C52.7287 30.6132 57.0971 31.0689 58.8525 31.4573C59.2685 33.352 59.6647 37.7012 55.9066 41.4592C54.6939 42.672 53.4201 43.4508 52.1897 43.9381C51.9499 44.0151 51.7085 44.1002 51.4654 44.1939C49.1096 44.9281 46.9979 44.6569 45.9076 44.4143C45.7854 43.8634 45.6557 43.0545 45.651 42.0865C45.651 42.0725 45.6512 42.0584 45.6512 42.0444ZM55.9066 56.8407C52.0926 60.6548 47.6726 60.1876 45.9103 59.7967C45.5261 58.0385 45.0614 53.5969 48.8622 49.7961C50.0783 48.5801 51.3556 47.8006 52.5891 47.3137C52.8245 47.2381 53.0613 47.1548 53.2994 47.0629C55.6505 46.3291 57.7588 46.5968 58.8525 46.8385C59.2685 48.7335 59.6647 53.0828 55.9066 56.8407Z" stroke="#53C351"/>
                    <path d="M52.8178 2.613C49.9371 2.0022 46.9703 1.69232 44 1.69232C32.6993 1.69232 22.0748 6.09298 14.084 14.084C6.09314 22.0748 1.69231 32.6993 1.69231 44C1.69231 53.4165 4.86043 62.6083 10.6324 70.0094C9.98313 71.014 9.6336 72.184 9.6336 73.4086C9.6336 75.086 10.2869 76.6631 11.473 77.8494C12.6591 79.0354 14.2362 79.6888 15.9136 79.6888C17.591 79.6888 19.1683 79.0354 20.3542 77.8494C21.5405 76.6631 22.1938 75.086 22.1938 73.4086C22.1938 71.7312 21.5404 70.1543 20.3542 68.968C19.1683 67.7817 17.591 67.1284 15.9136 67.1284C14.9194 67.1284 13.961 67.3596 13.0979 67.7937C7.86691 61.0033 4.99759 52.6039 4.99759 44C4.99759 22.494 22.494 4.9976 44 4.9976C46.7404 4.9976 49.4763 5.2832 52.1322 5.84641C53.0256 6.03563 53.9024 5.46531 54.0917 4.57255C54.2811 3.67963 53.7108 2.80241 52.8178 2.613ZM13.8102 71.3051C14.3901 70.7249 15.1518 70.435 15.9136 70.435C16.6755 70.435 17.4372 70.7251 18.0172 71.3051C18.579 71.8667 18.8884 72.6139 18.8884 73.4084C18.8884 74.2031 18.579 74.9501 18.0172 75.512C16.8573 76.672 14.97 76.6719 13.8102 75.512C13.2483 74.9503 12.9389 74.2031 12.9389 73.4084C12.9389 72.6139 13.2483 71.8669 13.8102 71.3051Z" stroke="#53C351"/>
                    <path d="M77.3676 17.9906C78.0169 16.9861 78.3663 15.816 78.3663 14.5914C78.3663 12.914 77.7131 11.3368 76.527 10.1507C75.3408 8.96447 73.7638 8.31134 72.0864 8.31134C70.409 8.31134 68.8317 8.96464 67.6457 10.1507C66.4596 11.3368 65.8062 12.914 65.8062 14.5914C65.8062 16.2688 66.4596 17.8459 67.6457 19.0321C68.8317 20.2184 70.409 20.8714 72.0864 20.8714C73.0808 20.8714 74.0389 20.6403 74.9022 20.2062C80.1331 26.9967 83.0024 35.3962 83.0024 44C83.0024 65.506 65.506 83.0025 44 83.0025C41.6864 83.0025 39.3685 82.7985 37.1104 82.3961C36.2123 82.2362 35.3535 82.8344 35.1936 83.7332C35.0335 84.6318 35.632 85.49 36.5305 85.6501C38.9796 86.0864 41.4927 86.3077 44 86.3077C55.3007 86.3077 65.9252 81.9069 73.9161 73.9161C81.9072 65.9256 86.3077 55.3007 86.3077 44C86.3077 34.5835 83.1395 25.3917 77.3676 17.9906ZM74.1901 16.6949C73.6282 17.2568 72.8811 17.5662 72.0865 17.5662C71.292 17.5662 70.5447 17.257 69.983 16.6949C68.8231 15.535 68.8231 13.6479 69.983 12.4879C70.5447 11.926 71.292 11.6166 72.0865 11.6166C72.8811 11.6166 73.6281 11.926 74.1901 12.4879C74.7519 13.0496 75.0613 13.7968 75.0613 14.5914C75.0613 15.386 74.7519 16.133 74.1901 16.6949Z" stroke="#53C351"/>
                    <path d="M29.4788 80.2098L28.8549 81.7402L29.4743 80.2079C28.6276 79.8663 27.6648 80.2746 27.3227 81.1208C26.9806 81.9669 27.3893 82.9302 28.2355 83.2724L28.2864 83.2927C28.4814 83.3671 28.6819 83.4025 28.8792 83.4025C29.545 83.4025 30.1742 82.9996 30.426 82.3423C30.7526 81.4897 30.3312 80.5362 29.4788 80.2098Z" stroke="#53C351"/>
                    <path d="M59.8363 4.7568L59.8068 4.74508C58.9595 4.40595 57.9978 4.81828 57.6586 5.66576C57.3195 6.51323 57.7319 7.47473 58.5792 7.81387L58.5982 7.82147C58.8011 7.90345 59.0104 7.94212 59.2167 7.94212C59.8705 7.94212 60.4895 7.55158 60.7496 6.90822C61.0915 6.06189 60.6826 5.09873 59.8363 4.7568Z" stroke="#53C351"/>
                  </svg>
                  <p class="paragraph-center1">Innoculate</p>
                  <p class="paragraph-center2">"Sed ut perspiciatis unde 
                    omnis iste natus error sit voluptatem 
                    accusantium doloremque </p>
            </div>


        </div>
        
    </div>
</div>

<div class="section-4-5-background">

    <div class="section-4-main">

    <div class="section-4">
        <div class="images">
            <img src="./assets/image 1.png" alt="image" class="hands">
            <!-- <img src="./Polygon 6.svg" alt="polygon" class="polygon"> -->
        </div>

        <div class="section-4-words">
            <h4>Make Your Green</h4>
            <h5>"Sed ut perspiciatis unde omnis iste natus error sit 
                voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore 
                veritatis et quasi architecto beatae vitae dicta sunt 
                explicabo. </h5>
                <div class="button11">
                    <a href="#" class="button1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                            <path d="M0.570884 1.18143C0.543177 0.41213 1.35865 -0.0986771 2.03874 0.261979L8.92463 3.91362C9.60472 4.27428 9.63935 5.23591 8.98697 5.64455L2.38161 9.78209C1.72923 10.1907 0.879119 9.73991 0.851413 8.97061L0.570884 1.18143Z" fill="#53C351"/>
                          </svg>
                          <span class="button1-color">Watch Now</span>
                        </a>
                </div>
                
        </div>

    </div>

    <div class="section-4-edit">
        
        <div class="section-4-words">
            <h4>Make Your Green</h4>
            <h5>"Sed ut perspiciatis unde omnis iste natus error sit 
                voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore 
                veritatis et quasi architecto beatae vitae dicta sunt 
                explicabo. </h5>
                
                <div class="section-4-final">
                    <a href="#" class="btn-login">
                        <span class="btn-text">Join Now</span>
                    </a>
                    <a href="#" class="link">See how it works➜</a>
        
                </div>
        </div>

        <div class="images">
            <img src="./assets/2cd43b_7fcb77145e9f4a7ea91b794e8e68d312~mv2.png" alt="image" class="hands">
            <!-- <img src="./Polygon 6.svg" alt="polygon" class="polygon"> -->
        </div>

    </div>

    <div class="section-4">
        <div class="images">
            <img src="./assets/5c55c7538c21c9029a0f48b3 1.png" alt="image" class="hands">
            <!-- <img src="./Polygon 6.svg" alt="polygon" class="polygon"> -->
        </div>

        <div class="section-4-words">
            <h4>Make Your Green</h4>
            <h5>"Sed ut perspiciatis unde omnis iste natus error sit 
                voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore 
                veritatis et quasi architecto beatae vitae dicta sunt 
                explicabo. </h5>
                <div class="button12">
                    <a href="#" class="button2">
                      
                          <span class="button2-color">Farm order</span>
                        </a>
                </div>
        </div>

    </div>

</div>

<div class="section-5-main">


    <!-- <div class="section-5">
        <div class="section-5-words">
            <h5>What we are doing
                at Ray Valley Farms?</h5>
                <p>
                    "Sed ut perspiciatis unde omnis iste natus error sit 
                    voluptatem accusantium doloremque laudantium, 
                    totam rem aperiam, eaque ipsa quae ab illo inventore 
                    veritatis et quasi architecto beatae vitae dicta sunt 
                    explicabo. 
                </p>
                
                    <a href="#" class="button-2">
                        <span class="btn-text">Join Now</span>
                    </a>
            

        </div>
        <img src="./pngaaa 1.png" alt="man" class="manimg">

       
    </div>  -->

<div class="footer-logo">
 <!-- logos  -->
 <?xml version="1.0" ?><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1200 1227" fill="none"><g clip-path="url(#clip0_1_2)"><path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="black"/></g><defs><clipPath id="clip0_1_2"><rect width="1200" height="1227" fill="white"/></clipPath></defs></svg>
 <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="20" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="20" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-106.468,0l0,-192.915l66.6,0l12.672,-82.621l-79.272,0l0,-53.617c0,-22.603 11.073,-44.636 46.58,-44.636l36.042,0l0,-70.34c0,0 -32.71,-5.582 -63.982,-5.582c-65.288,0 -107.96,39.569 -107.96,111.204l0,62.971l-72.573,0l0,82.621l72.573,0l0,192.915l-191.104,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Z"/></svg>
 <?xml version="1.0" ?><svg role="img" style="width: 20; height:20;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title/><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
 <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2; width: 20; height:20;" version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M449.446,0c34.525,0 62.554,28.03 62.554,62.554l0,386.892c0,34.524 -28.03,62.554 -62.554,62.554l-386.892,0c-34.524,0 -62.554,-28.03 -62.554,-62.554l0,-386.892c0,-34.524 28.029,-62.554 62.554,-62.554l386.892,0Zm-288.985,423.278l0,-225.717l-75.04,0l0,225.717l75.04,0Zm270.539,0l0,-129.439c0,-69.333 -37.018,-101.586 -86.381,-101.586c-39.804,0 -57.634,21.891 -67.617,37.266l0,-31.958l-75.021,0c0.995,21.181 0,225.717 0,225.717l75.02,0l0,-126.056c0,-6.748 0.486,-13.492 2.474,-18.315c5.414,-13.475 17.767,-27.434 38.494,-27.434c27.135,0 38.007,20.707 38.007,51.037l0,120.768l75.024,0Zm-307.552,-334.556c-25.674,0 -42.448,16.879 -42.448,39.002c0,21.658 16.264,39.002 41.455,39.002l0.484,0c26.165,0 42.452,-17.344 42.452,-39.002c-0.485,-22.092 -16.241,-38.954 -41.943,-39.002Z"/></svg>
</div>
   
</div>
    
</div>

</body>

</html>

<?php
COUCH::invoke();
?>