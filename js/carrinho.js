function getQueryParams() {
    const params = new URLSearchParams(window.location.search);
    return {
        parametro: params.get('parametro')
    };
}
window.addEventListener('DOMContentLoaded', function () {
    const params = getQueryParams();
    const resultado = document.getElementById('resultado');
    if (params.parametro) {
        resultado.textContent = `Você selecionou: ${params.parametro}`;
    } else {
        resultado.textContent = 'Nenhum parâmetro recebido.';
    }
});