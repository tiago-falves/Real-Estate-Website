let commentForm = document.querySelector('#comments form');
commentForm.addEventListener('submit', submitComment);

function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&');
}

function submitComment(event) {
  let title = document.querySelector('#comments input[name=title]').value;
  let rating = document.querySelector('#comments input[name=rating]').value;
  let content = document.querySelector('#comments textarea[name=comment]').value;
  // let comment_id = document.querySelector('#comments .comment') != null ? document.querySelector('#comments .comment:last-of-type span.id').textContent : -1;


  let request = new XMLHttpRequest();
  request.addEventListener('load', receiveComments);
  request.open('POST', '../Actions/action_add_comment.php', true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(encodeForAjax({title: title, rating: rating, content: content}));

  event.preventDefault();
}

function receiveComments(event) {
  let section = document.querySelector('#comments');
  let comments = JSON.parse(this.responseText);

  for (let i = 0; i < comments.length; i++) {
    let comment = document.createElement('article');
    comment.classList.add('comment');

    comment.innerHTML = '<header><h3>' +
      comments[i].title + '</h3></header>' + '<span class="user">' +
      comments[i].user + '</span>' + '<span class="date">' +  comments[i].date + '</span>'
      + '<p>' + comments[i].content + '</p>';
    
    //section.insertBefore(comment, commentForm);
  }
}
