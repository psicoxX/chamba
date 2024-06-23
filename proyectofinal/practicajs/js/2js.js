// Clausura: Función incr()
const incr = (function () {
    let num = 0;
    return function () {
      num++;
      return num;
    };
  })();
  
  typeof incr; // 'function'
  incr(); // 1
  incr(); // 2
  incr(); // 3

  const func = function () {
    return "Función tradicional.";
  };
  
  const fun = () => {
    return "Función flecha.";
  };