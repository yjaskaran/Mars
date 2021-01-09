let dropdown_trigger = document.getElementById('dropdown');

dropdown_trigger.onclick = (event) => {

 let content = document.getElementById('notification-menu')

 if(content.classList.contains('dropdown-expand')){
        content.classList.remove('dropdown-expand')
 }
 else{
     content.classList.add('dropdown-expand')
 }
}

sidebarExpand = () => {
    $('body').toggleClass('sidebar-expand');
}

closeAlert = () =>{
    $('.alert').slideUp();
}