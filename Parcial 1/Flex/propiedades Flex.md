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
![Direccion de flexion](https://css-tricks.com/wp-content/uploads/2018/10/flex-direction.svg)
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
![Direccion de flexion](https://css-tricks.com/wp-content/uploads/2018/10/flex-wrap.svg)
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
![Texto alternativo](https://css-tricks.com/wp-content/uploads/2018/10/justify-content.svg)


