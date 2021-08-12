		
//Arreglo de imagenes
let pictures = [
  'vista/img/1.png',
  'vista/img/2.jpg',
  'vista/img/3.jpg',
  'vista/img/4.jpg',
  'vista/img/orinoco.png'
];
let contador = 0;

function carrusel(contenedor){
  contenedor.addEventListener('click',e =>   {
    let atras = contenedor.querySelector('.atras'),
        adelante = contenedor.querySelector('.adelante'),
        img = contenedor.querySelector('img'),
        tgt = e.target;//Identificar elemento que hace click
    console.log(tgt);
    if(tgt==atras){
       if(contador>0){
         img.src = pictures[contador -1];
         contador--;
       }else{
         img.src = pictures[pictures.length - 1];
         contador = pictures.length - 1;
       }
         
    }else if(tgt==adelante){
        if(contador < pictures.length - 1){
         img.src = pictures[contador + 1];
         contador++;
       }else{
         img.src = pictures[0];
         contador = 0;
       }     
    }
    
  });
}


  document.addEventListener("DOMContentLoaded", ()=>{
  let  contenedor = document.querySelector('.carrusel');
  carrusel(contenedor);
  });
