$(function(lanzado){
   
    
    $(function lanzado(){
        
        
        
       $(function(uno){});
        $(function(tres){});
        
        
    });
    
    $(function dos(){

       if ($(window).width() <= 720) { 
           $("#imgmodal").attr("src","img/contratoschi.jpg");
       } 
       


}); 
    
  $(function uno(){    
      setTimeout(function(){
          $("#modalcana").modal('show');  
        }, 3000);
    });
    
      $(function tres(){  
           var imgsmoda=["img/contrato2.jpg","img/contratos.jpg","img/occidente.jpg"];
          var i=0;
      setInterval(function(){
          $("#imgmodal").attr('src',imgsmoda[i]);
          i++;
          if(i==3){
              i=0;
          }
        }, 3000);
    });
    
    
});