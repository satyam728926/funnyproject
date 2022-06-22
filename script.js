function name1(){
    let check=document.getElementById("Check1").checked;
    if(check==true){
       // console.log(check)
  let name=document.getElementById("inputname").value;
//    console.log(name);
  document.getElementById("modalname1").innerHTML= "Hi"+" "+name+" "+"are"+" "+"you"+" "+"ready";
   }
   else if(check==false){
    document.getElementById("modalname1").innerHTML="Error 404: Reload again and tap on check box to go further"
    // document.getElementById("modalcontent").innerHTML="Reload again and tap on check box to go further"
    document.getElementById("modalform").style.display="none"
    document.getElementById("header").style.display="none"
    setTimeout(function(){ location.reload(); }, 2000);
    // document.getElementById("modalbtn").innerHTML="Back"
   }
}
 
 function random_margin(){
  const content=document.getElementById("exampleModalToggle2");
  const wid=content.clientWidth
   console.log(wid)
  const no_btn=document.getElementById("modalbtn2");
    no_btn.style.position='absolute';
    const random1=Math.floor(Math.random()*500);
    // console.log(random1)
    no_btn.style.marginLeft=random1+"px";
    no_btn.style.marginTop=random1+"px";
    no_btn.style.marginRight=random1+"px";
    no_btn.style.marginBottom=random1+"px";
  }

  function submit_modal1(){
    let one_inpt=document.getElementById("modal1_inpt").value;
    let btn=document.getElementById("modalbtn");
    let num=one_inpt.search("_");
    let modal2=document.getElementById("exampleModalToggle2")
    if(num==-1){
     let error=document.getElementById("error_massage")
     error.style.display="block";
     setTimeout(function(){ location.reload(); }, 2000);
    }
    else{
      btn.setAttribute("data-bs-target","#exampleModalToggle2")
      btn.setAttribute("data-bs-toggle","modal")
      // error.style.display="none";
    }
  }
  function iknw(){
    let tx=document.getElementById("iknow");
    let con=document.getElementById("contentform")
    tx.style.display="block";
    let tease=document.getElementById("tease")
    tease.style.display="block"
     con.style.display="none"
    preventDefault();
    
  }