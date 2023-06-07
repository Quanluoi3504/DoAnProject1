<div>
    <div class="container">
<div class="wrapper">
    <form>
        <button id="btn_amount" class="minus" type="button">- </button>
        <span class="num disabled">01</span>
        <button id="btn_amount" class="plus" type="button">+</button>
        <div>
        <button id="add_to_cart" type="submit">Buy</button>
        </div>
    </form>
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
    </div>
</div>