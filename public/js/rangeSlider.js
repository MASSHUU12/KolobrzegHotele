var ranges = document.querySelectorAll('.input-range');
var show = 'nie ważne';

var urlParams = new URLSearchParams(window.location.search);

ranges.forEach((range) => {
  //asign values from url after page refreshes
  var att = range.getAttribute('name');

  if (att == 'sea') {
    if (urlParams.get('sea') != null) {
      range.value = urlParams.get('sea');
    }
  }
  else if (att == 'bike') {
    if (urlParams.get('bike') != null) {
      range.value = urlParams.get('bike');
    }
  }
  else if (att == 'park') {
    if (urlParams.get('park') != null) {
      range.value = urlParams.get('park');
    }
  }
  else if (att == 'playground') {
    if (urlParams.get('playground') != null) {
      range.value = urlParams.get('playground');
    }
  }
  else if (att == 'dogpark') {
    if (urlParams.get('dogpark') != null) {
      range.value = urlParams.get('dogpark');
    }
  }

  if(range.value < 10) {
    show = 'bez znaczenia'
  }
  if(range.value > 10) {
    show = 'przydatne'
  }
  if(range.value > 25) {
    show = 'ważne'
  }
  if(range.value > 40) {
    show = 'bardzo ważne'
  }

  var value = range.parentNode.parentNode.querySelector('.range-value');

  value.innerHTML = show;

  range.addEventListener('input', function(){
    if(this.value < 10) {
      show = 'bez znaczenia'
    }
    if(this.value > 10) {
      show = 'przydatne'
    }
    if(this.value > 25) {
      show = 'ważne'
    }
    if(this.value > 40) {
      show = 'bardzo ważne'
    }
      value.innerHTML = show;
  }); 
})

