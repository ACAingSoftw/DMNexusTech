
const btnCart = document.querySelector('.container-cart-icon')
const containercartproductos = document.querySelector('.container-cart-productos')

btnCart.addEventListener('click', () => {
    containercartproductos.classList.toggle('hidden-cart')
})

const cartInfo = document.querySelector('.cart-productos')

const rowproductos = document.querySelector('.row-productos')

//Lista de todos los Productos

const productosList = document.querySelector('.container-items')

//Variables de arreglos de Productos

let allProductos = []

const valorTotal = document.querySelector('.total-pagar')

const conuntproductos = document.querySelector('#contador-producto') 



productosList.addEventListener('click', e => {

    if (e.target.classList.contains('btn-add-carro')) {
        const product = (e.target.parentElement)

        const infoProducto = {
            quantity: 1,
            title: product.querySelector('h2').textContent,
            Price: product.querySelector('p').textContent,
        }

        const exist = allProductos.some(product => product.title === infoProducto.title)

        if(exist){
            const products = allProductos.map(product =>{
                if(product.title === infoProducto.title){
                    product.quantity++;
                    return product;
                }else{
                    return product;
                }
        })
        allProductos = [...products]
        
    } else{

        allProductos = [...allProductos, infoProducto] //convinar array       
    }        
        
        showHTLML();
    }
})

//Limpiar Carrito 

rowproductos.addEventListener('click', e =>{

    if(e.target.classList.contains('icon-close')){
        const product = e.target.parentElement;
        const title = product.querySelector('p').textContent;

        allProductos = allProductos.filter(
            product => product.title !== title            
        )
    }
    //console.log(allProductos)
    showHTLML();
}
)
const showHTLML = () => {

    /*
    if(!allProductos.length){
        containercartproductos.innerHTML= `
        <p class="cart-vaci">Esta vacio Por el momento!</p> 
        `
    }
    */

    //Limpiar HTML Ahora YA"
    rowproductos.innerHTML = '';

    let precio_a_pagar = 0;
    let total_produco = 0; 

    allProductos.forEach(product => {
        const containerProduct = document.createElement('div')
        containerProduct.classList.add('cart-productos')
        containerProduct.innerHTML = `

        <div class="info-cart-productos">
            <span class="cantidad-produto-carrito">${product.quantity}</span>
            <p class="titulo-producto-carrito">${product.title}</p>
            <span class="precio-producto-carrito">${product.Price}</span>
        </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="icon-close">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>                        
        
            `
            rowproductos.append(containerProduct) 
            
            precio_a_pagar = precio_a_pagar + parseInt(product.quantity * product.Price.slice(1))
            total_produco = total_produco + product.quantity; 
    })

      valorTotal.innerText = (precio_a_pagar)
      conuntproductos.innerText = total_produco;


}








