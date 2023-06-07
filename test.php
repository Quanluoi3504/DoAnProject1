<?php
//?>
<link rel="stylesheet" href="css/bootstrap.css">
<!--<link rel="stylesheet" href="css/bootstrap.css">-->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
    <div class="wrapper">
        <span class="minus">- </span>
        <span class="num">01</span>
        <span class="plus">+</span>
    </div>

    <script>
        const plus = document.querySelector(".plus"),
            minus = document.querySelector(".minus"),
            num = document.querySelector(".num");

        let a = 1;
        plus.addEventListener("click", ()=>{
             a++;
             a = (a < 10) ? "0" + a : a;
             num.innerText = a;
             console.log("a");
        });
        minus.addEventListener("click", ()=>{
            if (a >  1){
                a--;
                a = (a < 10) ? "0" + a : a;
                num.innerText = a;
            }
        });
    </script>

<!--    <div class="input-group product_data mb-3" style="width: 120px">-->
<!--        <button class="input-group-text decrement-btn">-</button>-->
<!--        <input type="text" class="form-control text-center input-qty bg-white" value="01">-->
<!--        <button class="input-group-text increment-btn">+</button>-->
<!--    </div>-->
<!--<script src="js/custom.js"></script>-->
<div>
<div class="quantity-section">
    <div class="quantity-input">
        <button id="decrease-btn">-</button>
        <input type="number" id="quantity" value="1" min="1">
        <button id="increase-btn">+</button>
    </div>
</div>
<script>
    const decreaseBtn = document.getElementById("decrease-btn");
    const increaseBtn = document.getElementById("increase-btn");
    const quantityInput = document.getElementById("quantity");
    const priceElement = document.getElementById("price");

    decreaseBtn.addEventListener("click", () => {
        if (quantityInput.value > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
            updateTotalPrice();
        }
    });

    increaseBtn.addEventListener("click", () => {
        quantityInput.value = parseInt(quantityInput.value) + 1;
        updateTotalPrice();
    });
    function updateTotalPrice() {
        const quantity = parseInt(quantityInput.value);
        const updatedPrice = price*quantity;
        priceElement.textContent = "$" + updatedPrice;
    }
</script>
</div>
