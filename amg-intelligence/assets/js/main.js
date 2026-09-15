/**
 * AMG Intelligence Theme Scripts
 */
document.addEventListener('DOMContentLoaded', function () {
  // Initialize Lottie Banner Animation
  var lottieContainer = document.getElementById('hero-lottie');
  if (lottieContainer && typeof lottie !== 'undefined') {
    var animPath = (typeof amgThemeData !== 'undefined' && amgThemeData.lottiePath)
      ? amgThemeData.lottiePath
      : 'assets/images/banner-lottie.json';

    lottie.loadAnimation({
      container: lottieContainer,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: animPath
    });
  }
});
