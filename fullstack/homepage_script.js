function search(){
  let a=document.getElementById('mySelect').value.toLowerCase();
  if(a != ''){
    window.location.href = a+'.php';
  }
}


function changeoption(){
   setTimeout(() => {
      let a=document.getElementById('mySelect').value.toLowerCase();
      if(a != ''){
         window.location.href = a+'.php';
      }
   }, 800);
}


document.addEventListener('DOMContentLoaded', () => {
   const profileImg = document.getElementById('profileimg');
   const dropdownMenu = document.getElementById('dropdownMenu');

   if(profileImg && dropdownMenu){
      profileImg.addEventListener('click', () => {
         if (dropdownMenu.style.display === 'block') {
            dropdownMenu.style.display = 'none';
         } else {
            dropdownMenu.style.display = 'block';
         }
      });
   }
});


document.addEventListener('click', (event) => {
   // (!event.target.closest('.profile-container')) - Returns true if the clicked element is not inside the .profile-container. This means the user clicked outside the container.
   if (!event.target.closest('.profile-container')) {
      dropdownMenu.style.display = 'none';
   }
});
