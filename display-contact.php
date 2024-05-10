<?php
// BNIX Call Now
add_action('wp_footer','bnix_call_now',50);
function bnix_call_now() {
	$hotline = get_option('bnix-hotline');	
	$zalo = str_replace(' ', '', get_option('bnix-zalo-phone'));	
	$zalo_id = get_option('bnix-zalo-id');	 
	$facebook = get_option('bnix-facebook');	
	ob_start();
	?>
<style>
ul.contact-list { margin-left: 0;}.callnow>ul,.callnow>ul li:last-child,ul.contact-list li { margin-bottom: 0}a.hotline svg,a.hotline:after { -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite}a.hotline:after,a.hotline:before { content: ''; position: absolute; border-radius: 50%}.callnow { display: flex; position: fixed; left: 15px; bottom: 3%; z-index: 999999}.callnow>ul { display: flex; flex-direction: column; list-style: none}ul.contact-list>li>a { display: block; padding: 12px; border-radius: 99px; width: 44px; height: 44px; margin-bottom: 10px}ul.contact-list>li>a path { fill: white}.callnow a.hotline { background: #e50101}.callnow a.facebook { background: linear-gradient(45deg, #257bf2, #b137d1, #ee685d)}ul.contact-list a:hover { transform: scale(1.15)}ul.contact-list a { transition: .3s ease-in-out}a.hotline { position: relative; margin-top: 10px}a.hotline svg { -webkit-animation-name: lac; animation-name: lac; -webkit-animation-duration: 1s; animation-duration: 1s}a.hotline:after { top: -10px; left: -10px; right: -10px; bottom: -10px; background: #e5010199; z-index: -1; -webkit-animation-name: zoomout; animation-name: zoomout; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-direction: alternate; animation-direction: alternate}a.hotline:before { top: 0; left: 0; right: 0; bottom: 0; border: 1px solid #e5010198; -webkit-animation-name: zoomin; animation-name: zoomin; -webkit-animation-duration: 1.5s; animation-duration: 1.5s; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite}a.zalo { padding: 0 !important; margin-bottom: 10px}a.facebook svg { height: 20px; width: 20px}li.hotline-number { display: flex; align-items: center; position: relative; width: 185px;}li.hotline-number>span { background: #bd0000; padding-left: 55px; padding-top: 6px; padding-bottom: 5px; padding-right: 15px; border-radius: 20px; position: absolute; z-index: 1; color: white; font-weight: 700;}li.hotline-number>a { z-index: 2;}@keyframes lac { 0%, 100%, 50% { transform: rotate(0) } 10%, 30% { transform: rotate(-25deg) } 20%, 40% { transform: rotate(25deg) }}@-webkit-keyframes lac { 0%, 100%, 50% { -webkit-transform: rotate(0) } 10%, 30% { -webkit-transform: rotate(-25deg) } 20%, 40% { -webkit-transform: rotate(25deg) }}@keyframes zoomin { 0% { transform: scale(.8); opacity: 1 } 100% { transform: scale(2.2); opacity: .1 }}@-webkit-keyframes zoomin { 0% { -webkit-transform: scale(.8); opacity: 1 } 100% { -webkit-transform: scale(2.2); opacity: .1 }}@keyframes zoomout { 0% { transform: scale(.8); opacity: 1 } 100% { transform: scale(1.1); opacity: .3 }}@-webkit-keyframes zoomout { 0% { -webkit-transform: scale(.8); opacity: 1 } 100% { -webkit-transform: scale(1.1); opacity: .3 }}
</style>
	<div class="callnow">
		<ul class="contact-list">
		<?php if($zalo) { ?>
			<li>
				<a href="javascript:void(0)" rel="nofollow" id="zalo-chat" class="zalo" title="Chat Zalo">
					<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg" width="44" height="44"> <circle cx="22" cy="22" r="22" fill="url(&quot;#paint4_linear&quot;)"></circle> <g clip-path="url(#clip0)" fill="none"> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.274 34.0907C15.7773 34.0856 16.2805 34.0804 16.783 34.0804C16.7806 34.0636 16.7769 34.0479 16.7722 34.0333C16.777 34.0477 16.7808 34.0632 16.7832 34.0798C16.8978 34.0798 17.0124 34.0854 17.127 34.0965H25.4058C26.0934 34.0965 26.7809 34.0977 27.4684 34.0989C28.8434 34.1014 30.2185 34.1039 31.5935 34.0965H31.6222C33.5357 34.0798 35.0712 32.5722 35.0597 30.7209V27.4784C35.0597 27.4582 35.0612 27.4333 35.0628 27.4071C35.0676 27.3257 35.0731 27.2325 35.0368 27.2345C34.9337 27.2401 34.7711 27.2757 34.7138 27.3311C34.2744 27.6145 33.8483 27.924 33.4222 28.2335C32.57 28.8525 31.7179 29.4715 30.7592 29.8817C27.0284 31.0993 23.7287 31.157 20.2265 30.3385C20.0349 30.271 19.9436 30.2786 19.7816 30.292C19.6773 30.3007 19.5436 30.3118 19.3347 30.3068C19.3093 30.3077 19.2829 30.3085 19.2554 30.3093C18.9099 30.3197 18.4083 30.3348 17.8088 30.6877C16.4051 31.1034 14.5013 31.157 13.5175 31.0147C13.522 31.0245 13.5247 31.0329 13.5269 31.0407C13.5236 31.0341 13.5204 31.0275 13.5173 31.0208C13.5036 31.0059 13.4864 30.9927 13.4696 30.98C13.4163 30.9393 13.3684 30.9028 13.46 30.8268C13.4867 30.8102 13.5135 30.7929 13.5402 30.7757C13.5937 30.7412 13.6472 30.7067 13.7006 30.6771C14.4512 30.206 15.1559 29.6905 15.6199 28.9311C16.2508 28.1911 15.9584 27.9025 15.4009 27.3524L15.3799 27.3317C12.6639 24.6504 11.8647 21.8054 12.148 17.9785C12.486 15.8778 13.4829 14.0708 14.921 12.4967C15.7918 11.5433 16.8288 10.7729 17.9632 10.1299C17.9796 10.1198 17.9987 10.1116 18.0182 10.1032C18.0736 10.0793 18.1324 10.0541 18.1408 9.98023C18.1475 9.92191 18.0507 9.90264 18.0163 9.90264C17.3698 9.90264 16.7316 9.89705 16.0964 9.89148C14.8346 9.88043 13.5845 9.86947 12.3041 9.90265C10.465 9.95254 8.78889 11.1779 8.81925 13.3614C8.82689 17.2194 8.82435 21.0749 8.8218 24.9296C8.82053 26.8567 8.81925 28.7835 8.81925 30.7104C8.81925 32.5007 10.2344 34.0028 12.085 34.0749C13.1465 34.1125 14.2107 34.1016 15.274 34.0907ZM13.5888 31.1403C13.5935 31.1467 13.5983 31.153 13.6032 31.1594C13.7036 31.2455 13.8031 31.3325 13.9021 31.4202C13.8063 31.3312 13.7072 31.2423 13.6035 31.1533C13.5982 31.1487 13.5933 31.1444 13.5888 31.1403ZM16.5336 33.8108C16.4979 33.7885 16.4634 33.7649 16.4337 33.7362C16.4311 33.7358 16.4283 33.7352 16.4254 33.7345C16.4281 33.7371 16.4308 33.7397 16.4335 33.7423C16.4632 33.7683 16.4978 33.79 16.5336 33.8108Z" fill="#FFFFFF"></path> <path d="M17.6768 21.6754C18.5419 21.6754 19.3555 21.6698 20.1633 21.6754C20.6159 21.6809 20.8623 21.8638 20.9081 22.213C20.9597 22.6509 20.6961 22.9447 20.2034 22.9502C19.2753 22.9613 18.3528 22.9558 17.4247 22.9558C17.1554 22.9558 16.8919 22.9669 16.6226 22.9502C16.2903 22.9336 15.9637 22.8671 15.8033 22.5345C15.6429 22.2019 15.7575 21.9026 15.9752 21.631C16.8575 20.5447 17.7455 19.4527 18.6336 18.3663C18.6851 18.2998 18.7367 18.2333 18.7883 18.1723C18.731 18.0781 18.6508 18.1224 18.582 18.1169C17.9633 18.1114 17.3388 18.1169 16.72 18.1114C16.5768 18.1114 16.4335 18.0947 16.296 18.067C15.9695 17.995 15.7689 17.679 15.8434 17.3686C15.895 17.158 16.0669 16.9862 16.2846 16.9363C16.4221 16.903 16.5653 16.8864 16.7085 16.8864C17.7284 16.8809 18.7539 16.8809 19.7737 16.8864C19.9571 16.8809 20.1347 16.903 20.3123 16.9474C20.7019 17.0749 20.868 17.4241 20.7133 17.7899C20.5758 18.1058 20.3581 18.3774 20.1404 18.649C19.3899 19.5747 18.6393 20.4948 17.8888 21.4093C17.8258 21.4814 17.7685 21.5534 17.6768 21.6754Z" fill="#FFFFFF"></path> <path d="M24.3229 18.7604C24.4604 18.5886 24.6036 18.4279 24.8385 18.3835C25.2911 18.2948 25.7151 18.5775 25.7208 19.021C25.738 20.1295 25.7323 21.2381 25.7208 22.3467C25.7208 22.6349 25.526 22.8899 25.2453 22.973C24.9588 23.0783 24.6322 22.9952 24.4432 22.7568C24.3458 22.6404 24.3057 22.6183 24.1682 22.7236C23.6468 23.1338 23.0567 23.2058 22.4207 23.0063C21.4009 22.6848 20.9827 21.9143 20.8681 20.9776C20.7478 19.9632 21.0973 19.0986 22.0369 18.5664C22.816 18.1175 23.6067 18.1563 24.3229 18.7604ZM22.2947 20.7836C22.3061 21.0275 22.3863 21.2603 22.5353 21.4543C22.8447 21.8534 23.4348 21.9365 23.8531 21.6372C23.9218 21.5873 23.9848 21.5263 24.0421 21.4543C24.363 21.033 24.363 20.3402 24.0421 19.9189C23.8817 19.7027 23.6296 19.5752 23.3603 19.5697C22.7301 19.5309 22.289 20.002 22.2947 20.7836ZM28.2933 20.8168C28.2474 19.3923 29.2157 18.3281 30.5907 18.2893C32.0517 18.245 33.1174 19.1928 33.1632 20.5785C33.209 21.9808 32.321 22.973 30.9517 23.106C29.4563 23.2502 28.2704 22.2026 28.2933 20.8168ZM29.7313 20.6838C29.7199 20.961 29.8058 21.2326 29.9777 21.4598C30.2928 21.8589 30.8829 21.9365 31.2955 21.6261C31.3585 21.5818 31.41 21.5263 31.4616 21.4709C31.7939 21.0496 31.7939 20.3402 31.4673 19.9189C31.3069 19.7083 31.0548 19.5752 30.7855 19.5697C30.1668 19.5364 29.7313 19.991 29.7313 20.6838ZM27.7891 19.7138C27.7891 20.573 27.7948 21.4321 27.7891 22.2912C27.7948 22.6848 27.474 23.0118 27.0672 23.0229C26.9985 23.0229 26.924 23.0174 26.8552 23.0007C26.5688 22.9287 26.351 22.6349 26.351 22.2857V17.8791C26.351 17.6186 26.3453 17.3636 26.351 17.1031C26.3568 16.6763 26.6375 16.3992 27.0615 16.3992C27.4969 16.3936 27.7891 16.6708 27.7891 17.1142C27.7948 17.9789 27.7891 18.8491 27.7891 19.7138Z" fill="#FFFFFF"></path> <path d="M22.2947 20.7828C22.289 20.0013 22.7302 19.5302 23.3547 19.5634C23.6239 19.5745 23.876 19.702 24.0364 19.9181C24.3573 20.3339 24.3573 21.0322 24.0364 21.4535C23.7271 21.8526 23.1369 21.9357 22.7187 21.6364C22.65 21.5865 22.5869 21.5255 22.5296 21.4535C22.3864 21.2595 22.3062 21.0267 22.2947 20.7828ZM29.7314 20.683C29.7314 19.9957 30.1668 19.5357 30.7856 19.569C31.0549 19.5745 31.307 19.7075 31.4674 19.9181C31.794 20.3394 31.794 21.0544 31.4617 21.4701C31.1408 21.8636 30.545 21.9302 30.1382 21.6198C30.0752 21.5754 30.0236 21.52 29.9778 21.459C29.8059 21.2318 29.7257 20.9602 29.7314 20.683Z" fill="#0068FF"></path> </g> <defs> <linearGradient id="paint4_linear" x1="22" y1="0" x2="22" y2="44" gradientUnits="userSpaceOnUse"> <stop stop-color="#3985f7"></stop> <stop offset="1" stop-color="#1272e8"></stop> </linearGradient> <clipPath id="clip0"> <rect width="26.3641" height="24.2" fill="white" transform="translate(8.78906 9.90234)"></rect> </clipPath> <linearGradient id="paint4_linear" x1="22" y1="0" x2="22" y2="44" gradientUnits="userSpaceOnUse"> <stop stop-color="#3985f7"></stop> <stop offset="1" stop-color="#1272e8"></stop> </linearGradient></defs> </svg>
				</a>
			</li>
	<?php } ?>
	<?php if($facebook) { ?>
			<li>
				<a href="https://m.me/<?php echo $facebook; ?>" class="facebook" target="_blank" title="Chat Facebook">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"/></svg>
				</a>
			</li>
	<?php } ?>
	<?php if($hotline) { ?>		
			<li class="hotline-number">
				<a href="tel:<?php echo str_replace(' ', '', $hotline); ?>" class="hotline" title="Hotline">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>					
				</a>
				<span><?php echo $hotline; ?></span>
			</li>
	<?php } ?>	
		</ul>
	</div>
<?php
	if($zalo_id) { ?>
		<script>
			function isMobileDevice() {
			  return /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
			}
			const nutzalo = document.getElementById('zalo-chat');    
			if(nutzalo) {
				function ZaloClick() {
				  let link;
				  link = 'zalo://conversation?phone=<?php echo $zalo; ?>';
				  if (isMobileDevice()) {
						if (navigator.userAgent.includes('Android')) {
						  // android	
						  link = 'https://zaloapp.com/qr/p/<?php echo $zalo_id; ?>';
						} else {
						  // ios
						  link = 'zalo://qr/p/<?php echo $zalo_id; ?>';			 
						}
				  } 
				  window.open(link, '_self');
				}
				nutzalo.addEventListener('click', ZaloClick);
			}    
		</script>		
	<?php }
	else { ?>
		<script>
			function isMobileDevice() {
			  return /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
			}
			const nutzalo = document.getElementById('zalo-chat');
			if(nutzalo) {
				function ZaloClick() {
					  let link;
					  link = 'https://zalo.me/<?php echo $zalo; ?>';
					  window.open(link, '_self');
				}
				nutzalo.addEventListener('click', ZaloClick);
			}
		</script>		
	<?php }
?>

	<?php
	$call_now = ob_get_contents(); 
	ob_end_clean();
	echo $call_now;
}
