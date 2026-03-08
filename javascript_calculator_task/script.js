const calculat = document.getElementById("calculator");
let display = document.createElement("input");
display.setAttribute("type", "text");
display.setAttribute("id", "display");
display.style.width = "210px"
display.style.height = "40px"
display.style.marginBottom = "10px"
display.style.display = "block"
calculat.appendChild(display);
const buttons = [
    "7", "8", "9", "/",
    "4", "5", "6", "*",
    "1", "2", "3", "-",
    "0", ".", "=", "+",
    "c"
];

buttons.forEach((button, index) => {

    const btn = document.createElement("button");
    btn.innerText = button;

    btn.style.width = "50px";
    btn.style.height = "40px";
    btn.style.margin = "5px";

    calculat.appendChild(btn);

    btn.addEventListener("click", () => {

        if (button === "c") {
            display.value = "";

        } else if (button === "=") {

            try {
                display.value = eval(display.value);
            } catch {
                display.value = "Error";
            }

        } else {
            display.value += button;
        }

    });

    if ((index + 1) % 4 === 0) {
        calculat.appendChild(document.createElement("br"));
    }

});