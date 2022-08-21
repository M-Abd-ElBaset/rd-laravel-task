const encryptBtn = document.querySelector("#encryptBtn");
const encryptBtnText = document.querySelector("#encryptBtnText");

encryptBtn.onclick = () => {
    encryptBtnText.innerHTML = "Thanks";
    encryptBtn.classList.add("active");
};

const decryptBtn = document.querySelector("#decryptBtn");
const decryptBtnText = document.querySelector("#decryptBtnText");

decryptBtn.onclick = () => {
    decryptBtnText.innerHTML = "Thanks";
    decryptBtn.classList.add("active");
};