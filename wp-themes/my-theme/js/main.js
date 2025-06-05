
//To manage the button to create another product

document.addEventListener('DOMContentLoaded', function() {
    const BtonToAddBlock = document.getElementById('add-product');
    const ContainerToDupplicate = document.getElementById('productos-container');
    let productCounter = 1;

    if (BtonToAddBlock) {
        BtonToAddBlock.addEventListener('click', () => {
            const ContainerWithForm = document.querySelector('.bloque-form-producto');
            const newClonedNode = ContainerWithForm.cloneNode(true);

            /*Increase Counter*/
            productCounter++;

            // Update IDs and labels of the new element
            const newSelect = newClonedNode.querySelector('select');
            const newInput = newClonedNode.querySelector('input[type="number"]');
            const newLabelSelect = newClonedNode.querySelector('label[for*="producto"]');
            const newLabelInput = newClonedNode.querySelector('label[for*="cantidad"]');

            // Asign new IDs
            newSelect.id = `producto-${productCounter}`;
            newInput.id = `cantidad-${productCounter}`;
                    
            // Update labels that point to the new IDs
            newLabelSelect.setAttribute('for', `producto-${productCounter}`);
            newLabelInput.setAttribute('for', `cantidad-${productCounter}`);
                    
            // Restart values
            newSelect.selectedIndex = 0;
            newInput.value = 1;
                    
            // Add a button to delete a duplicate container
            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'btn btn-remove';
            removeButton.textContent = 'Eliminar producto';
            removeButton.addEventListener('click', function() {
                newClonedNode.remove();
            });

            newClonedNode.appendChild(removeButton);

            // Add he duplicate to the container
            ContainerToDupplicate.appendChild(newClonedNode);
        });
    }

    const fechaInput = document.getElementById('fecha-pedido');
    if (fechaInput) {
        fechaInput.min = new Date().toISOString().split('T')[0];
    }
});