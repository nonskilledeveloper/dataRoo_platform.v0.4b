var link = document.createElement('link');
link.rel = 'stylesheet';
link.type = 'text/css';
link.href = 'css/global.css';
document.getElementsByTagName('HEAD')[0].appendChild(link);

window.onload = function() {
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = 'css/style-mob.css';
    document.getElementsByTagName('HEAD')[0].appendChild(link);
  } else {
    
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = 'css/style-pc.css';
    document.getElementsByTagName('HEAD')[0].appendChild(link);
  }
};
