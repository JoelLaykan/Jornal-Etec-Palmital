function mostrarPaginaFutebol() {
    document.getElementById("futebol").style.display = "block";
    document.getElementById("regiaoemundo").style.display = "none";
    document.getElementById("inicio").style.display = "block";
}

function mostrarPaginaRegiaoemundo() {
    document.getElementById("regiaoemundo").style.display = "block";
    document.getElementById("futebol").style.display = "none";
    document.getElementById("inicio").style.display = "block";
}

function mostrarInicio() {
    document.getElementById("regiaoemundo").style.display = "none";
    document.getElementById("futebol").style.display = "none";
    document.getElementById("inicio").style.display = "block";
}

function mostrarFutebol() {
    document.getElementById("futebol").style.display = "block";
    document.getElementById("regiaoemundo").style.display = "none";
    document.getElementById("inicio").style.display = "none";
}

function mostrarRegiaoemundo() {
    document.getElementById("regiaoemundo").style.display = "block";
    document.getElementById("futebol").style.display = "none";
    document.getElementById("inicio").style.display = "none";
}