document.querySelectorAll('.card-body .btn-primary').forEach(e=>{
    e.addEventListener("click",()=>{
        document.querySelectorAll('form').forEach(form=>{
            form.classList.add('hide');
        })
        document.querySelector("#"+e.dataset.target).classList.remove('hide');
    })
});
document.querySelectorAll("form").forEach(form=>{
   form.addEventListener("submit",e=>{
       document.querySelectorAll("input[type=text]:not(input.hide)").forEach(input=>{
          if (input.value!=""){
              if (!/^[0-9]+$/.test(input.value)){
                  e.preventDefault();
              }
          }
       })
   })
})
