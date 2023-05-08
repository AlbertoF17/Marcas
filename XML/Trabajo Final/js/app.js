//Metodo que selecciona el primer elemento que cumpla dicho xpath
function getElementByXpath(xpath) {
    return document.evaluate(xpath, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
}

//Metodo que selecciona los elementos que cumplan dicho xpath
function getElementsByXpath(xpath) {
    return document.evaluate(xpath, document, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null);
}

//Metodo para consultar por consola elementos que cumplan dicho xpath
function selectQuery(xpath) {
    console.log("***********************************************************");
    console.log("Query: '" + xpath + "'");
    let it = getElementsByXpath(xpath);
    let el = it.iterateNext();

    while (el) {
        console.log(el);
        el = it.iterateNext();
    }
}

//Todos los elementos hijos de cardContainer


//Con un path completo (es decir, empezando desde html) obtener el texto del primer li de la card cuyo id es Kenobi


//El valor del id de la tercera carta


//El texto del h3 de la sexta carta


//Todas las cards que contengan la clase Maestro


//El elemento h2 de la card cuyo id es Windu


//Todas las cards que contengan la clase Maestro y el sable Verde


//El texto completo de todos los elementos que contengan el texto "DBY"


//Todas las cards de jedis que falleciesen antes de la batalla de Yavin (ABY)


//Todas las cards que falleciesen en una estrella de la muerte y que tengan sable azul


console.log("***********************************************************");