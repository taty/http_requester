var ns = new function() {

    var internalFunction = function() {
        console.log('internalFunction');
    };

    this.addChangeParameter = function() 
    {
        var parametr = document.getElementById('parameters');
        var el = document.getElementsByClassName('parameter_elem');
        parametr.innerHTML = parametr.innerHTML + el[0].outerHTML;
    }
    
    this.addChangeHeader = function() {
        var header = document.getElementById('headers');
        var el = document.getElementsByClassName('header_elem');
        header.innerHTML = header.innerHTML + el[0].outerHTML;
    };
};
/*
(function(ns){
    

       // Function to add header elems block
       ns.addChangeHeader = function()
       {
           var header = document.getElementById('headers');
           var el = document.getElementsByClassName('header_elem');
           header.innerHTML = header.innerHTML + el[0].outerHTML;
           addEvent('header');
       }

       // Function to add header elems block
       ns.addChangeParameter = function() 
       {
           var parametr = document.getElementById('parameters');
           var el = document.getElementsByClassName('parameter_elem');
           parametr.innerHTML = parametr.innerHTML + el[0].outerHTML;
           addEvent('parameter');
       }
              
}(window.ImplNS || (window.ImplNS = {})));

 document.onreadystatechange = function () {
     if (document.readyState == "complete") {
       //document is ready. Do your stuff here
       
       function addEvent(elem)
       {
            var buttons = document.getElementsByName("add_change_"+elem);
            var funcName = 'addChange'+ elem.charAt(0).toUpperCase() + elem.slice(1).toLowerCase();
           
            for(var i=0; i< buttons.length; i++)
            {               
                buttons[i].addEventListener("click", function(){window[funcName]()}, true);            
            }  
       }
       
       // Function to add header elems block
       window.addChangeHeader = function()
       {
           var header = document.getElementById('headers');
           var el = document.getElementsByClassName('header_elem');
           header.innerHTML = header.innerHTML + el[0].outerHTML;
           addEvent('header');
       }

       // Function to add header elems block
       window.addChangeParameter = function() 
       {
           var parametr = document.getElementById('parameters');
           var el = document.getElementsByClassName('parameter_elem');
           parametr.innerHTML = parametr.innerHTML + el[0].outerHTML;
           addEvent('parameter');
       }
       
       addEvent('header');       
       addEvent('parameter');       
   }
 }*/