export class Utils {
    /** Pasa la primera le tra en mayusculas de una frase     
     * @param {String} string Coloca la primera letra del texto en mayusculas 
     * @returns texto con la primera letra en mayuscula
     */
    capitalizeFirstLetter(str) {
        let splitStr = str.toLowerCase().split(' ');
        for (let i = 0; i < splitStr.length; i++) {
            // You do not need to check if i is larger than splitStr length, as your for does that for you
            // Assign it back to the array
            splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
        }
        // Directly return the joined string
        return splitStr.join(' ');
    }

    /** Quita los espacios al inicio y al final. Sustituye cualquier secuencia de
     * espacios y saltos de línea por un solo espacio.
     * @param {string} texto el texto a procesar.
     * @returns {string} el texto procesado*/
    colapsaEspacios(texto) {
        return (texto || "").trim().replace(/\s+/g, " ");
    }

    /**
     * funcion que verifica si el campo esta nullo, vacio o tiene espacios.
     * @param {string} str campo a revisar
     */
    isEmptyOrSpaces(str) {
        return str === null || str.match(/^ *$/) !== null;
    }

    /** Elimina todas las etiquetas que abren o cierran los element script, de un
     * texto HTML.
     * @param {string} html texto HTML.
     * @returns {string} texto HTML sin las etiquetas que abren o cierran los
     * element script */
    sinScript(html) {
        // Reemplaza todas las ocurrencias de <script> y </script> por texto vacío.
        return (html || "").replace(/(\<script\>)|(\<\/script\>)/g, "");
    }

    decimalsWithCommas(decimal) {
        var num = Number(decimal);
        return num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
    }
}