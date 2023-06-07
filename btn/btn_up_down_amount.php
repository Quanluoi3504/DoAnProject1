<div class="container">
<div class="quantity-section">
    <div class="quantity-input">
        <form action="">
        <button id="decrease-btn" type="button">-</button>
        <input type="number" id="quantity" value="1" min="1" max="10">
        <button id="increase-btn" type="button">+</button>
        <button type="submit">Buy</button>
        </form>
    </div>
    <script>
        const decreaseBtn = document.getElementById("decrease-btn");
        const increaseBtn = document.getElementById("increase-btn");
        const quantityInput = document.getElementById("quantity");

        decreaseBtn.addEventListener("click", () => {
            if (quantityInput.value > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        });

        increaseBtn.addEventListener("click", () => {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        });
    </script>
</div>