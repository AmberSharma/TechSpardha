function saveContactUs()
{
$.ajax
({
    type: "POST",
    data: $('#contactUsForm').serialize(),
    url: 'index.php?controller=MainController&method=saveContactUs',
    success: function(data)
    {
        alert(data);
    }
});
}
