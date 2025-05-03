

 function submitFormAjax(formSelector, url, redirectUrl, successMessage = "Success!", failMessage = "failed!"){
    $(formSelector).on('submit', function(e) {
        e.preventDefault(); //prevent default behavior of reload
    
        $.ajax({
          url: url,
          method:'POST',
          data:$(this).serialize(),
          success: function(res){
            console.log("Server Responded: "+res)
            if(res.status === "success"){
              $('#message').text(successMessage)
    
              // a delay 1.5 sec
              setTimeout(function(){
                window.location.href = redirectUrl;
              }, 1500);
            }else{
              $('#message').text(failMessage +": " + (res.message || "Unknown Error"));
            }
          }, error: function(){
            $('#message').text("something went wrong");
          }
        })
     })
 }

 function handleAjaxDelete(selector, confirmMessage = "Are you sure?", successMessage = "Deleted!", redirectUrl = null) {
  $(document).on('click', selector, function (e) {
    e.preventDefault();

    if (!confirm(confirmMessage)) return;

    const url = $(this).attr('href');

    $.ajax({
      url: url,
      method: 'POST',
      dataType: 'json',
      success: function (res) {
        if (res.status === "success") {
          alert(successMessage);
          if (redirectUrl) {
            window.location.href = redirectUrl;
          } else {
            location.reload(); // fallback: refresh current page
          }
        } else {
          alert("Delete failed: " + (res.message || "Unknown error"));
        }
      },
      error: function () {
        alert("Something went wrong during deletion.");
      }
    });
  });
}
