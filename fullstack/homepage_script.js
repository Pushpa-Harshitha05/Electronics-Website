function search(){
  let a=document.getElementById('select').value.toLowerCase();
  if(a != ''){
    window.location.href = a+'.html';
  }
}