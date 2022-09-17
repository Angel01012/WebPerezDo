# Propiedades Flexbox
***
## Propiedades para el padre (contenedor flexible)
### **Monitor**
 #### Esto define un contenedor flexible; en línea o bloque dependiendo del valor dado. Permite un contexto flexible para todos sus hijos directos.
`.container {
display: flex; /* or inline-flex */ }`
#### Tenga en cuenta que las columnas CSS no tienen efecto en un contenedor flexible.
---
## Dirección de flexión
<img src="https://css-tricks.com/wp-content/uploads/2018/10/flex-direction.svg" width=500>
### Esto establece el eje principal, definiendo así la dirección en que se colocan los artículos flexibles en el contenedor flexible. Flexbox es (aparte del envoltorio opcional) un concepto de diseño de una sola dirección. Piense en los elementos flexibles como dispuestos principalmente en filas horizontales o columnas verticales.

`.container {
  flex-direction: row | row-reverse | column | column-reverse;
}`

* row(predeterminado): de izquierda a derecha en ltr; de derecha a izquierda enrtl
* row-reverse: de derecha a izquierda en ltr; de izquierda a derecha enrtl
* column: igual que rowpero de arriba a abajo
* column-reverse: igual que row-reversepero de abajo hacia arriba
---
## Envoltura flexible
<img src="https://css-tricks.com/wp-content/uploads/2018/10/flex-wrap.svg" width="500">

### De forma predeterminada, todos los elementos flexibles intentarán encajar en una línea. Puede cambiar eso y permitir que los elementos se ajusten según sea necesario con esta propiedad.
`.container {
  flex-wrap: nowrap | wrap | wrap-reverse;
}`

* nowrap(predeterminado): todos los elementos flexibles estarán en una línea
* wrap: los elementos flexibles se ajustarán a varias líneas, de arriba a abajo.
* wrap-reverse: los elementos flexibles se ajustarán a varias líneas de abajo hacia arriba.
---
## Flujo flexible
### Esta es una forma abreviada de las propiedades flex-directiony flex-wrap, que juntas definen los ejes principal y transversal del contenedor flexible. El valor predeterminado es row nowrap.
`.container {
  flex-flow: column wrap;
}`

---
## justificar-contenido
<img src="https://css-tricks.com/wp-content/uploads/2018/10/justify-content.svg" width="400"> 

### Esto define la alineación a lo largo del eje principal. Ayuda a distribuir el espacio libre adicional sobrante cuando todos los elementos flexibles de una línea son inflexibles o son flexibles pero han alcanzado su tamaño máximo. También ejerce cierto control sobre la alineación de los elementos cuando desbordan la línea.
`.container {
  justify-content: flex-start | flex-end | center | space-between | space-around | space-evenly | start | end | left | right ... + safe | unsafe;
}`

* flex-start(predeterminado): los artículos se empaquetan hacia el inicio de la dirección flexible.
* flex-end: los artículos se embalan hacia el final de la dirección de flexión.
* start: los artículos se empaquetan hacia el inicio de la writing-modedirección.
* end: los artículos se embalan hacia el final de la writing-modedirección.
* left: los artículos se empaquetan hacia el borde izquierdo del contenedor, a menos que eso no tenga sentido con flex-direction, entonces se comporta como start.
* right: los artículos se empaquetan hacia el borde derecho del contenedor, a menos que eso no tenga sentido con flex-direction, entonces se comporta como start.
* center: los elementos se centran a lo largo de la línea
* space-between: los artículos se distribuyen uniformemente en la línea; el primer elemento está en la línea de inicio, el último elemento en la línea final
* space-around: los artículos se distribuyen uniformemente en la línea con el mismo espacio alrededor de ellos. Tenga en cuenta que visualmente los espacios no son iguales, ya que todos los elementos tienen el mismo espacio en ambos lados. El primer elemento tendrá una unidad de espacio contra el borde del contenedor, pero dos unidades de espacio entre el siguiente elemento porque ese siguiente elemento tiene su propio espacio que se aplica.
* space-evenly: los elementos se distribuyen de modo que el espacio entre dos elementos cualesquiera (y el espacio hasta los bordes) sea igual.
Tenga en cuenta que el soporte del navegador para estos valores está matizado. Por ejemplo, space-betweennunca obtuve soporte de algunas versiones de Edge, e inicio/fin/izquierda/derecha aún no están en Chrome. MDN tiene gráficos detallados . Los valores más seguros son flex-start, flex-endy center.

### También hay dos palabras clave adicionales que puede combinar con estos valores: safey unsafe. El uso safegarantiza que, independientemente de cómo haga este tipo de posicionamiento, no puede empujar un elemento de manera que se represente fuera de la pantalla (por ejemplo, fuera de la parte superior) de tal manera que el contenido no se pueda desplazar también (llamado "pérdida de datos") .

