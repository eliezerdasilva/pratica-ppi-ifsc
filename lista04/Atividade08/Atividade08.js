function converte() {
    
    var celsius = parseFloat(document.getElementById("celsius").value);
    var kelvin = parseFloat(document.getElementById("kelvin").value);
    var fahrenheit = parseFloat(document.getElementById("fahrenheit").value);
    
    if(celsius){
        kelvin = celsius + 273.15;
        fahrenheit = (celsius * 9/5) + 32;
        document.getElementById("fahrenheit").value = fahrenheit.toFixed(2);
        document.getElementById("kelvin").value = kelvin.toFixed(2);
    } else if(kelvin){
        celsius = kelvin - 273.15;
        fahrenheit = (kelvin * 9/5) - 459.67;
        document.getElementById("fahrenheit").value = fahrenheit.toFixed(2);
        document.getElementById("celsius").value = celsius.toFixed(2);
    } else if(fahrenheit){
        celsius = (fahrenheit - 32) / 1.8;
        kelvin = (fahrenheit + 459.67) / 1.8;
        document.getElementById("celsius").value = celsius.toFixed(2);
        document.getElementById("kelvin").value = kelvin.toFixed(2);
    }

}