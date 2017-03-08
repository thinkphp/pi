  DOMhelp = {

       addEvent: function(elem,evType,fn,useCapture){

                 if(elem.addEventListener) {

                         elem.addEventListener(evType,fn,useCapture);

                 } else if(elem.attachEvent) {

                         var r = elem.attachEvent('on'+evType,fn);

                         return r;                          

                 } else {

                        elem['on'+evType] = fn; 
                 }
       }

  };


    var PI = function(epsilon) {

          //Calculates the value of PI using infinite series
          //4*(1- 1/3 + 1/5 - 1/7 + 1/9 +...)


         var v1 = 1;
 
         var v2 = parseFloat(1-1/3);

         var i = 5;

         var semn = 1;

         while(4* ( v1>v2 ? v1-v2 : v2-v1 ) >= epsilon ) {

            v1 = v2;

            v2 += semn*parseFloat(1.0/i);
 
            semn *= -1;

            i+=2;
         }     

        return (4*v2);
    };

    var solve = function() {
       
        var epsilon = parseFloat(document.getElementById('input').value);  
 
        if(!epsilon) {document.getElementById('solution').innerHTML = "Epsilon is null!";return;}

        var output = PI(epsilon);

        document.getElementById('solution').innerHTML = output;
    }

    var init = function() {

        DOMhelp.addEvent(document.getElementById('solve'),'click',solve,false); 
    }; 

    DOMhelp.addEvent(window,'load',init,false);
   
