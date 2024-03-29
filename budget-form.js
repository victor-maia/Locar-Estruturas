document.getElementById("event-form").addEventListener("submit", function(event) {

    event.preventDefault(); 

    window.alert('Formulário enviado com sucesso')

    this.submit();
});
