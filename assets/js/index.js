const form = document.querySelector("form");

window.onload = function () {

    eventForm();
    updateCharacterCount();
    $("#phone").mask("(00)00000-0000");

}

function showAlert(titleA, textA, iconA) {

    Swal.fire({
        title: titleA,
        text: textA,
        icon: iconA,
        showConfirmButton: false,
        timer: 2000,
    })

}

function eventForm() {

    form.addEventListener('submit', e => {

        e.preventDefault();

        let formClient = recoverForm();

        if (formClient) {

            enviaFormulario(formClient);

        }

    });

}

function recoverForm() {

    let client = {}
    let isValid = true;

    [...form.elements].forEach(element => {

        if (element.value == '' && element.type != 'submit') {
            showAlert('Formulário inválido', 'Preencha todas as informações.', 'warning');
            isValid = false;
        } else if (element.name == 'phone') {
            //VALIDA NUMERO DE TELEFONE
            if (element.value.length == 14) {

                client[element.name] = element.value.replace('(', '').replace(')', '').replace('-', '');

            } else {

                showAlert('Telefone incorreto', 'Preencha seu telefone corretamente', 'info');
                isValid = false;
            }

        } else if (element.name == 'message') {

            if (element.value > 250) {

                showAlert('Mensagem muito grande', 'A quantidade máxima de caracteres é de 250', 'info');
                isValid = false;
            } else {

                client[element.name] = element.value;

            }

        } else {

            client[element.name] = element.value;

        }

    });

    if (!isValid) return false;

    return client;

}

function updateCharacterCount() {
    const message = document.querySelector("#message");
    const maxLength = message.getAttribute("maxlength");
    const currentLength = message.value.length;
    document.getElementById("counter").textContent = currentLength;
}

function enviaFormulario(cliente) {

    const btnSubmit = document.querySelector("button[type=submit]");

    console.log(btnSubmit);



    $.ajax({

        url: 'server/php/formulario/salva_formulario.php',
        method: 'POST',
        data: cliente,
        success: data => {

            data = JSON.parse(data);

            if (!data.erro) {

                if (data.mensagem == 'Cliente cadastrado com sucesso') {

                    showAlert('Sucesso', data.mensagem, 'success');
                    form.reset();
                    updateCharacterCount();

                } else {

                    showAlert('Aviso', data.mensagem, 'info');

                }

            } else {

                showAlert('Opss, algo deu errado :(', data.mensagem, 'error');

            }

        },
        beforeSend: () => {



        },
        error: e => {

            console.log(e);

        }

    });

}