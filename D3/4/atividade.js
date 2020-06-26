const buscaLista = () => {
    return fetch('https://jsonplaceholder.typicode.com/comments', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .catch(err => {
        console.error('Erro: ', JSON.stringify(err));
        throw err;
    });
}

const exibeLista = (lista) => {
    let article = "article1";
    let section2 = "section21";

    for (let index = 0; index < lista.length; index++) {
        const element = lista[index];
        const postId = element.postId;
        const id = element.id;
        const name = element.name;
        const email = element.email;
        const body = element.body;

        var para = document.createElement("p");
        var node = document.createTextNode(postId + "\n" + id + "\n" + name + "\n" + email + "\n" + body);
        para.appendChild(node);
        
        var item = document.getElementById(article);
        var child = document.getElementById(section2);
        item.insertBefore(para,child);

        if(index - 1 == (lista.length / 2)) {
            article = "article2";
            section2 = "section22"
        }  
    }
}

const preparaLista = async () => {
    const lista = await buscaLista();
    exibeLista(lista);
}

preparaLista();