
$('.justbtn').click(function(){ 
   
    var productid=$(this).data("id");
    var name=$(this).data("productname");
    var description=$(this).data("description");
    var picture=$(this).data("picture");
    var price=$(this).data("price");

    var folder=$(this).data('directory');
    $post=$(this);
 //   $("#eachmodal"+productid).css("display","block"); 

    $('#id').val(productid);
    $('#detailsheading').text(name + "-details"); 
    $('#name').val(name); 
    $('#desc').val(description); 
    $('#productid').val(productid);
    $('#price').val(price); 
    $('.editimage').attr('src', folder + picture); 
    console.log("#eachmodal",productid);
    console.log("name", name);
    console.log("description", description);
    console.log("folder", folder + picture);
   $('.modal').css("display", "block");

  });  
  

let imageValue= document.querySelector('#profileDisplay');
let capfiles= document.querySelector("#capture");
let textValue=document.querySelector("#name");
let priceid=document.querySelector("#price");
let descid=document.querySelector("#desc");

      function trigger(e){
                      document.querySelector("#capture").click();
		         }
     
               function displayImage(e) {
                    if (e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                    document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                }
                  reader.readAsDataURL(e.files[0]);
    		 }
     	   }




        const forme=document.querySelector("form.create");
        const btn=document.querySelector("button.submit");
        const error=document.querySelector(".error");
        const successful=document.querySelector(".success");
              
         
        forme.onsubmit=(e)=>{
            e.preventDefault();
        }
         
         
         btn.onclick=()=>{
            
            let xhr="";
            if(window.XMLHttpRequest){
                xhr=new XMLHttpRequest();
            }
            else{
            xhr=new ActiveXObject("Microsoft.XMLHTTP");
            }
              
              xhr.onreadystatechange=()=>{
                 if(xhr.readyState===XMLHttpRequest.DONE){
                      if(xhr.status===200){
                             
                             let data=xhr.responseText;                            
                             if(data == "success"){
                                   error.style.display="none";
                                   btn.textContent="updated successfully";
                                   successful.style.display="updated succesfully"
                                   textValue.value="";
                                   priceid.value="";
                                   descid.value="";
                                   textValue.value="";
                                   imageValue.setAttribute('src', '');        
                                   capfiles.value='';                                 
                             }
                              else{  
                               // error.innerHTML="you can't create an empty product";
                                error.style.display="block";
                                error.textContent=data;
                                btn.innerHTML="Try again";                                                   
                                 }
                        }    //STATUS ===200
                     } //DONE
                             else{
                              btn.textContent="updating...";
                             }//DONE
                                   
                 }
                   
             xhr.open("POST","../Controllers/updateproductController.php",true);
             let formdata=new FormData(forme);
             xhr.send(formdata);
            }

