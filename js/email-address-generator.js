$(document).ready(function() {
	$(".email").each(function() {
    var at = '@';
    var domain = 'mikrodidakt';
    var top = '.se';
		var maildomain = at + domain + top;
    this.href = this.href.replace("#", maildomain);
  });
});