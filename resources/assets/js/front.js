window.addEventListener('load', () => {
   const nav_trigger = document.querySelector('#nav-trigger');

   nav_trigger.addEventListener('click', () => {
      document.querySelector('.main-nav').classList.toggle('show');
   });
});
