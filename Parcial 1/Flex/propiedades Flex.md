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

#### Esto establece el eje principal, definiendo así la dirección en que se colocan los artículos flexibles en el contenedor flexible. Flexbox es (aparte del envoltorio opcional) un concepto de diseño de una sola dirección. Piense en los elementos flexibles como dispuestos principalmente en filas horizontales o columnas verticales.

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

#### De forma predeterminada, todos los elementos flexibles intentarán encajar en una línea. Puede cambiar eso y permitir que los elementos se ajusten según sea necesario con esta propiedad.
`.container {
  flex-wrap: nowrap | wrap | wrap-reverse;
}`

* nowrap(predeterminado): todos los elementos flexibles estarán en una línea
* wrap: los elementos flexibles se ajustarán a varias líneas, de arriba a abajo.
* wrap-reverse: los elementos flexibles se ajustarán a varias líneas de abajo hacia arriba.
---
## Flujo flexible
#### Esta es una forma abreviada de las propiedades flex-directiony flex-wrap, que juntas definen los ejes principal y transversal del contenedor flexible. El valor predeterminado es row nowrap.
`.container {
  flex-flow: column wrap;
}`

---
## justificar-contenido
<img src="https://css-tricks.com/wp-content/uploads/2018/10/justify-content.svg" width="400"> 

#### Esto define la alineación a lo largo del eje principal. Ayuda a distribuir el espacio libre adicional sobrante cuando todos los elementos flexibles de una línea son inflexibles o son flexibles pero han alcanzado su tamaño máximo. También ejerce cierto control sobre la alineación de los elementos cuando desbordan la línea.
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

#### También hay dos palabras clave adicionales que puede combinar con estos valores: safey unsafe. El uso safegarantiza que, independientemente de cómo haga este tipo de posicionamiento, no puede empujar un elemento de manera que se represente fuera de la pantalla (por ejemplo, fuera de la parte superior) de tal manera que el contenido no se pueda desplazar también (llamado "pérdida de datos") .
---
## Alinear elementos
<img src="https://css-tricks.com/wp-content/uploads/2018/10/align-items.svg" width=400>

#### Esto define el comportamiento predeterminado de cómo se distribuyen los elementos flexibles a lo largo del eje transversal en la línea actual. Piense en ello como la justify-contentversión para el eje transversal (perpendicular al eje principal).
`.container {
  align-items: stretch | flex-start | flex-end | center | baseline | first baseline | last baseline | start | end | self-start | self-end + ... safe | unsafe;
}`
* stretch(predeterminado): estirar para llenar el contenedor (aún respeta el ancho mínimo/ancho máximo)
* flex-start// start: self-startlos elementos se colocan al principio del eje transversal. La diferencia entre estos es sutil, y se trata de respetar las flex-directionreglas o las writing-modereglas.
* flex-end// end: self-endlos elementos se colocan al final del eje transversal. La diferencia nuevamente es sutil y se trata de respetar flex-directionreglas contra writing-modereglas.
* center: los elementos están centrados en el eje transversal
* baseline: los elementos están alineados como sus líneas base se alinean
#### Las palabras clave modificadoras safey unsafese pueden usar junto con el resto de estas palabras clave (aunque tenga en cuenta la compatibilidad del navegador ), y tratan de ayudarlo a evitar la alineación de elementos de modo que el contenido se vuelva inaccesible.
---
## Alinear-contenido
<img src="https://css-tricks.com/wp-content/uploads/2018/10/align-content.svg" width=400>

#### Esto alinea las líneas de un contenedor flexible cuando hay espacio adicional en el eje transversal, de forma similar a como justify-contentse alinean los elementos individuales dentro del eje principal.
***Nota: Esta propiedad solo tiene efecto en contenedores flexibles de varias líneas, donde flex-wrapse establece en wrapo wrap-reverse). Un contenedor flexible de una sola línea (es decir, donde flex-wrapse establece en su valor predeterminado, no-wrap) no reflejará align-content.***
`.container {
  align-content: flex-start | flex-end | center | space-between | space-around | space-evenly | stretch | start | end | baseline | first baseline | last baseline + ... safe | unsafe;
}`

* normal(predeterminado): los artículos se empaquetan en su posición predeterminada como si no se hubiera establecido ningún valor.
* flex-start/ start: artículos embalados al inicio del contenedor. El (más compatible) flex-starthonra el flex-directionmientras que starthonra la writing-modedirección.
* flex-end/ end: artículos embalados hasta el final del contenedor. El (más soporte) flex-endhonra el flex-directionmientras que el final honra la writing-modedirección.
center: elementos centrados en el contenedor
* space-between: artículos distribuidos uniformemente; la primera línea está al principio del contenedor mientras que la última está al final
* space-around: artículos distribuidos uniformemente con el mismo espacio alrededor de cada línea
* space-evenly: los elementos se distribuyen uniformemente con el mismo espacio a su alrededor
* stretch: las líneas se estiran para ocupar el espacio restante
#### Las palabras clave modificadoras safey unsafese pueden usar junto con el resto de estas palabras clave (aunque tenga en cuenta la compatibilidad del navegador ), y tratan de ayudarlo a evitar la alineación de elementos de modo que el contenido se vuelva inaccesible.
---
## espacio, espacio entre filas, espacio entre columnas
<img src="https://css-tricks.com/wp-content/uploads/2021/09/gap-1.svg" width=400>

#### La gappropiedad controla explícitamente el espacio entre elementos flexibles. Se aplica ese espacio solo entre elementos que no están en los bordes exteriores.
`.container {
  display: flex;
  ...
  gap: 10px;
  gap: 10px 20px; /* row-gap column gap */
  row-gap: 10px;
  column-gap: 20px;
}`
#### El comportamiento podría considerarse como un canalón mínimo , como si el canalón fuera más grande de alguna manera (debido a algo como justify-content: space-between;), entonces la brecha solo tendrá efecto si ese espacio termina siendo más pequeño.

#### No es exclusivamente para flexbox, también gapfunciona en cuadrícula y diseño de varias columnas.



















