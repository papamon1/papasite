window.onload=()=>{
    let index=0;
    let original=document.getElementById('titulo').innerHTML
    const type=(a)=>{
        // return 'hey ' + a    
        document.getElementById('titulo').innerHTML=a.substring(0,index+1)+'<span class="blink">_</span>'
        if(index+1==a.length){clearInterval(timer)}
        index+=1
        
    }    
    let timer=setInterval ( type, 70, original );    
}