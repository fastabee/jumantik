// Menandai item navbar yang aktif
document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.nav-item');
  
    
    links.forEach(link => {
      link.addEventListener('click', function() {

       
       
        links.forEach(item => item.classList.remove('active'));
        link.classList.add('active');
        
     
        
        
      });
    });
  });
  