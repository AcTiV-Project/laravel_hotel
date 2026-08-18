const formulario = document.querySelector('.myform');
const msg = document.querySelector('.msg');

formulario.addEventListener('submit', async (e) => {
    e.preventDefault();

    try{
        const datos = new FormData(formulario);

        const respuesta = await fetch('/reserve', {
            method: 'POST', 

            headers: {
                'X-CSRF-TOKEN':
                document.querySelector('meta[name="csrf-token"]').content
            },

            body: datos
        });

        const resultado = await respuesta.json();

        msg.innerText = resultado.message;
        formulario.reset();
    }catch(error){
        console.error(error);
    }
});