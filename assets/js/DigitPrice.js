$.fn.digits = function() {
  return this.each(function() {
    $(this).text($(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  })
}
$("span.price").digits();