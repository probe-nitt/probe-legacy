/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

if(window.innerWidth<600 || window.innerHeight<750) {
  particlesJS.load('particles-js', '/mobileparticlesjs-config.json', function () {
    console.log('callback - particles.js config loaded');
  });
}
else {
  particlesJS.load('particles-js', '/particlesjs-config.json', function () {
    console.log('callback - particles.js config loaded');
  });
}


