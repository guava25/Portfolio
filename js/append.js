var querystring = 'act=1';

$('a').each(function()
{
 var href = $(this).attr('href');
 href += (href.match(/\?/) ? '&' : '?') + querystring;
 $(this).attr('href', href);
})