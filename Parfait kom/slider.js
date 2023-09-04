const source = ['1.png' ,'2.png', '3.png' , '4.png', '5.png']
let numero  = 0;
function changeSlide(sens){
   numero = numero + sens;
   if(numero > source.length - 1 )
      numero = 0;
   if(numero < 0)
      numero = source.length - 1;
   

   document.getElementById('slid').src= "fonts/" + source[numero];
}
setInterval('changeSlide(1)', 4000);