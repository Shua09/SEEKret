
var postId = 0;
postBodyElement = null;

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

$('.post').on('click', '.edit', function (event) {
    event.preventDefault(); 

    postBodyElement = event.target.parentNode.parentNode.childNodes[1]
    var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    $('#post-body').val(postBody);
    $('#edit-modal').modal();
});

$('#modal-save').on('click', function () {
    $.ajax({
        method: 'POST',
        url: '/edit',
        data: {
            body: $('#post-body').val(),
            postId: postId,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            $(postBodyElement).text(response.new_body);
            $('#edit-modal').modal('hide');
        }
    });
});

$('.like').on('click', function(event) {
    event.preventDefault();
    var postId = $(event.target).closest('.post').data('postid');  // get postId from data attribute
    var isLike = event.target.previousElementSibling == null;
    $.ajax({
        method: 'POST',
        url: "/like/" + postId + "/like",
        data: {
            isLike: isLike,
            postId: postId,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
    })
        .done(function() {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
            if (isLike) {
                event.target.nextElementSibling.innerText = 'Dislike';
            } else {
                event.target.previousElementSibling.innerText = 'Like';
            }
        });
});



//PRIVATE POST

$(document).ready(function() {
    // Get the checkbox element
    var privatePostCheckbox = $('#private_post');
  
    // Add an event listener to the checkbox
    privatePostCheckbox.on('change', function() {
        
      // Check if the checkbox is checked
      if ($(this).is(':checked')) {
        $('#private_post').val(1);
        // Checkbox is checked, perform actions if needed
      } else {
        $('#private_post').val(0);
        // Checkbox is not checked, perform actions if needed
      }
    });
  });