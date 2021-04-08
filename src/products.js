let productsCache = []
let showProducts = []

loadProducts()

function loadProducts(page = 1) {
    const url = `https://frontend-intern-challenge-api.iurykrieger.now.sh/products?page=${page}` 
    const email = document.getElementsByClassName('verifyEmail')[0]

    if(productsCache.length){
        if(email){
            const newCacheProducts = productsCache.slice(0, 2)

            productsCache.shift()
            productsCache.shift()

            loadItems(newCacheProducts)
        }else{
            loadItems(productsCache)
            productsCache = []
        }
    }else{
        page++
        document.getElementById('btn-page').setAttribute('onclick', `loadProducts('${page}')`)
        fetch(url)
        .then(response => response.json())
        .then(({ products }) => {
            const newProducts = products.reduce((productsToShow, product, index) => {
                if(responsivePhone() && index <= 3){
                    productsToShow.push(product)
                }else if(responsivePhone() && index > 3){
                    productsCache.push(product)
                }else if(email && index <= 1) {
                    productsToShow.push(product)
                }else if(email && index > 1) {
                    productsCache.push(product)
                }else{
                    productsToShow.push(product)
                }

                return productsToShow

                },[])

                loadItems(newProducts)
            }).catch(erro => {
                console.error(erro)
            })
    }
}
/* Get Window and  */
function responsivePhone() {
    const windowWidth = window.innerWidth;
    return (windowWidth > 800) ? false : true
}

function loadItems (products) {
    let items = document.getElementById('items')
    showProducts = showProducts.concat(products)
    products.forEach(element => {
        const card = document.createElement('div')
        card.classList.add('card-item')

        const img = document.createElement('img')
        img.classList.add('card-img')
        img.setAttribute('src', element.image)

        const title = document.createElement('p')
        title.classList.add('card-title')
        title.innerText = element.name

        const description = document.createElement('p')
        description.classList.add('card-description')
        description.innerText = element.description

        const oldPrice = document.createElement('p')
        oldPrice.classList.add('card-description')
        oldPrice.innerText = 'De: R$ ' + element.oldPrice.toFixed(2)

        const price = document.createElement('p')
        price.classList.add('card-price')
        price.innerText = 'Por: R$ ' + element.price.toFixed(2)

        const installments = document.createElement('p')
        installments.classList.add('card-description')
        installments.innerText = 'ou ' + element.installments.count + 'x de R$ ' + element.installments.value.toFixed(2)

        const btnBuy = document.createElement('button')
        btnBuy.classList.add('card-btn')
        btnBuy.innerText = 'Comprar'

        card.append(img, title, description, oldPrice, price, installments, btnBuy)
        items.append(card)
    })
}

// Mask CPF
function maskCpf(Objcpf){
    cpf = Objcpf.value
    cpf = cpf.replace(/\D/g,"")
    cpf = cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf = cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    Objcpf.value = cpf

    return Objcpf; 
}