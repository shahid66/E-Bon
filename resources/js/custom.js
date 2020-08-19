document.getElementById("basket").addEventListener('click',function(){
    document.getElementById("cart2").style.display="none";
    document.getElementById("cart").style.display="block";
});
document.getElementById("closeCart").addEventListener('click',function(){
    document.getElementById("cart2").style.display="block";
    document.getElementById("cart").style.display="none";
})
const Cart=[];
let count=0;
const addBagBtn=[...document.querySelectorAll('.bag-btn')];
addBagBtn.forEach(button =>{


button.addEventListener('click',function(){
    let bId=button.id;
    // let InCart=Cart.find(item =>item.id == bId);
    
    count++;
   
    const basketCount=document.getElementById('basketCount').innerText=count;
    const btnCount= document.getElementById('countValue');
    btnCount.innerText=count;
    button.innerText="In Cart";
    button.setAttribute('disabled','disabled');

    
})

// button.addEventListener('click',(event)=>{

// })
});

alert('h');

