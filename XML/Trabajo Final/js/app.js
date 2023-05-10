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
selectQuery("//div[@id='cardContainer']/div");

//Con un path completo (es decir, empezando desde html) obtener el texto del primer li de la card cuyo id es Kenobi
selectQuery("//html/body/main[@id='container']/div[@id='cardContainer']/div[@id='Kenobi']/ul/li[1]/text()");

//El valor del id de la tercera carta
selectQuery("//div[@id='cardContainer']/div[3]/@id");

//El texto del h3 de la sexta carta
selectQuery("//div[@id='cardContainer']/div[6]/h3/text()");

//Todas las cards que contengan la clase Maestro
selectQuery("//div[contains(@class, 'card') and contains(@class, 'Maestro')]");

//El elemento h2 de la card cuyo id es Windu
selectQuery("//div[@id='cardContainer']/div[@id='Windu']/h2");

//Todas las cards que contengan la clase Maestro y el sable Verde
selectQuery("//div[contains(@class, 'card') and contains(@class, 'Maestro') and ul/li/p[contains(., 'Verde')]]");

//El texto completo de todos los elementos que contengan el texto "DBY"
selectQuery("//text()[contains(., 'DBY')]");

//Todas las cards de jedis que falleciesen antes de la batalla de Yavin (ABY)
selectQuery("//div/ul/li/p[contains(., 'ABY')]");

//Todas las cards que falleciesen en una estrella de la muerte y que tengan sable azul
selectQuery("//div[ul[li/p[contains(., 'Estrella de la muerte')]] and ul[li/p[contains(., 'Azul')]]]");

console.log("***********************************************************");