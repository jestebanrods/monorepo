**Patrón Factory:** 
-
Consiste en crear una clase constructora de objetos de un tipo relacionado con la clase a implementar. 

Ejemplo:

Objeto principal: `Factura`

Subobjetos relacionados (heredan del principal):
- Factura con iva normal: `FacturaIVA`
- Factura con iva reducida: `FacturaIVAReducida`

Patrón: `FacturaFactory`, mediante la utilización de un método (preferiblemente estatico  para no tener que crear 
instancias) de este objeto se puede devolver cualquiera de los tipos de subojetos, para este caso, pueden ser 
`FacturaIVA` o `FacturaIVAReducida`.

Ejemplo: `FacturaFactory::getFactura('iva');` Me devuelve un objeto de tipo FacturaIVA.