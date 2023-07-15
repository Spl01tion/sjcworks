let darkMode = localStorage.getItem('darkMode');
const darkModeToggle=document.querySelector('#dark-mode-toggle');
console.log(darkMode);

//checar se o dark mode esta ativo
//se estiver on, turn off
// se estiver off, turn on

const enableDarkMode= () => {
    //1. adicionar a classe darkmode
    document.body.classList.add("darkmode");
    //2. atualizar darkmode no localstorage
    localStorage.setItem("darkMode","enabled");
};

if(darkMode === 'enabled'){
    enableDarkMode(); 
}
const disableDarkMode = () => {
    //adiciona  a classe darkmode para o body
    document.body.classList.remove("darkmode");
    //atualiza darkMode no localStorage
    localStorage.setItem("darkMode",null);
}
darkModeToggle.addEventListener("click", () => {
    console.log("test");
});
darkModeToggle.addEventListener("click", () => {
    darkMode = localStorage.getItem("darkMode");
    if(darkMode !== "enabled"){
        enableDarkMode();
        console.log(darkMode);
    }else{
        disableDarkMode();
        console.log(darkMode);
    }
});