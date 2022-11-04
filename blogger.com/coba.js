var request = new XMLHttpRequest();
request.open(
  "GET",
  "https://learnlayoutblog.blogspot.com/search/label/python",
  true
);

request.onload = function () {
  if (this.status >= 200 && this.status < 400) {
    // Success!
    var data = JSON.parse(this.response);
    console.log(data);
  } else {
    // We reached our target server, but it returned an error
  }
};

request.onerror = function () {
  // There was a connection error of some sort
};

request.send();
