document.querySelectorAll('.card-body .btn-primary').forEach(e=>{
    e.addEventListener("click",()=>{
        document.querySelectorAll('form').forEach(form=>{
            form.classList.add('hide');
        })
        document.querySelector("#"+e.dataset.target).classList.remove('hide');
    })
});

