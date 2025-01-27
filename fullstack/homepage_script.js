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


// homepage.php drop-down menu
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


// homepage.php items
const itembtns = document.querySelectorAll('.items');

itembtns.forEach(button => {
   button.addEventListener('click', () => {
      let type = document.getElementById('product-type').innerHTML;
      if(type == 'mouse'){
         window.location.href = type+".php";
      }
      else{
         window.location.href = type+"s.php";
      }
   });
});


// myprofile.php
const addressbtn = document.querySelectorAll('.addresses');
const ordersbtn = document.querySelectorAll('.orders');
const cartbtn = document.querySelectorAll('.cart');
const editloginbtn = document.querySelectorAll('.login');

addressbtn.forEach(element => {
   element.addEventListener('click', () => {
      window.location.href = "address.php";
   });
});

ordersbtn.forEach(element => {
   element.addEventListener('click', () => {
      window.location.href = "orders.php";
   });
});

cartbtn.forEach(element => {
   element.addEventListener('click', () => {
      window.location.href = "shopping_cart.php";
   });
});

editloginbtn.forEach(element => {
   element.addEventListener('click', () => {
      window.location.href = "editlogin.php";
   });
});


// address.php add address
const addaddr = document.querySelectorAll('.add-addr');

addaddr.forEach(addrbtn => {
   addrbtn.addEventListener('click', () => {
      window.location.href = "add_address.html";
   });
});


// address.php edit address
document.addEventListener('DOMContentLoaded', () => {
   const editaddr = document.querySelectorAll('.editbtn');

   editaddr.forEach(editbtn => {
      editbtn.addEventListener('click', (event) => {
         // console.log(document.querySelectorAll('.addoredit'));

         const parent = event.target.closest('.addr-display');
         const username = parent.querySelector('p:first-child').innerHTML;
         const phoneno = parent.querySelector('p:nth-child(2)').innerHTML;
         console.log(username);
      });
   });
});