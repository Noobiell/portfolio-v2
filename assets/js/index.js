/* const exjson = { teste: "opa aqui tem info" }

let header = new Headers({

    "Content-Type": "application/json"

});

fetch('server/php/formulario/salva_formulario.php', {

    method: 'POST',
    body: JSON.stringify({
        nome: "João",
        idade: 30,
        id: 1
    }),

})
    .then(response => response.json())
    .then(result => console.log(result))
    .catch(error => console.log('error', error)); */

fetch('server/php/formulario/salva_formulario.php').then(function (response) {
    response.text().then(function (data) {
        console.log(data);
    });
}).catch(function (err) {
    console.error('Failed retrieving information', err);
});