
//To add the add another product option
const BtonToAddBlock = document.getElementById('agregar-producto');
const ContainerToDupplicate = document.querySelector('.container-form-producto');

BtonToAddBlock.addEventListener('click', () => {
    const ContainerWithForm = document.querySelector('.bloque-form-producto')
    const newClonedNode = ContainerWithForm.cloneNode(true)
    newClonedNode.querySelector('select').selectedIndex = 0;
    newClonedNode.querySelector('input[type="number"]').value = 1;
    ContainerToDupplicate.appendChild(newClonedNode)
});
