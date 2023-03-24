const cep = document.querySelector("#cep")

const showData = (result) => {
    for (const campo in result) {
        if (document.querySelector("#" + campo)) {
            document.querySelector("#" + campo).value = result[campo]
        }

    }

}

cep.addEventListener("blur"), (e) => {
    let search = cep.value.replace("-", "")
    const options = {
        metthod: 'GET',
        mode: 'cors',
        cache: 'default'
    }

    fetch(`https://viacep.com.br/ws/${search}/json/`, options)
        .then(Response => {
            Response.json()
            .then(data => showData(data))
        })

}